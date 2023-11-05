<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $arr = [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ];

        if(config('zephyr.login_by_username')) {
            unset($arr['email']);
        	$arr['name'] = ['required', 'string'];
        }
        return $arr;
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $loginByUsername = config('zephyr.login_by_username');
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only($loginByUsername ? 'name' : 'email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            $arr = [];
            $arr[$loginByUsername ? 'name' : 'email'] = trans('auth.failed');
            throw ValidationException::withMessages($arr);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        $arr = [];
        $arr[config('zephyr.login_by_username') ? 'name' : 'email'] = trans('auth.throttle', [
            'seconds' => $seconds,
            'minutes' => ceil($seconds / 60),
        ]);

        throw ValidationException::withMessages($arr);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input(config('zephyr.login_by_username') ? 'name' : 'email')).'|'.$this->ip());
    }
}
