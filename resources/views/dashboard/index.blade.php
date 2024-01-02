<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="stats stats-vertical lg:stats-horizontal shadow w-full my-3 dark:bg-dark-eval-1">
        <div class="stat">
          <div class="stat-figure text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <div class="stat-title">Downloads</div>
          <div class="stat-value">31K</div>
          <div class="stat-desc">Jan 1st - Feb 1st</div>
        </div>
        
        <div class="stat">
          <div class="stat-figure text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
          </div>
          <div class="stat-title">New Users</div>
          <div class="stat-value">4,200</div>
          <div class="stat-desc">↗︎ 400 (22%)</div>
        </div>
        
        <div class="stat">
          <div class="stat-figure text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
          </div>
          <div class="stat-title">New Registers</div>
          <div class="stat-value">1,200</div>
          <div class="stat-desc">↘︎ 90 (14%)</div>
        </div>
    </div>

    <div class="col-span-2 stats stats-vertical lg:stats-horizontal shadow w-full mb-3 dark:bg-dark-eval-1">
      <div class="stat">
        <div class="stat-title font-bold mb-5">Downloads Overview</div>
        <div class="stat-value w-full h-72 flex justify-center">
          <canvas id="linechart"></canvas>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
      <div class="dark:bg-dark-eval-1 w-full shadow rounded-lg">
        <div class="px-6 py-4 text-base-content/60">
          <div class="font-bold mb-5">Top Countries</div>
          <div class="flex flex-col gap-2">
            <div class="bg-base-content/10 hover:bg-base-content/20 cursor-pointer p-2 rounded-md">
              <div class="flex justify-between items-center gap-2">
                <div class="flex items-center gap-2"><span class="fi fi-id rounded-sm"></span> Indonesia</div>
                <div class="text-sm">200</div>
              </div>
            </div>
            <div class="bg-base-content/10 hover:bg-base-content/20 w-[75%] cursor-pointer p-2 rounded-md">
              <div class="flex justify-between items-center gap-2">
                <div class="flex items-center gap-2"><span class="fi fi-my rounded-sm"></span> Malaysia</div>
                <div class="text-sm">150</div>
              </div>
            </div>
            <div class="bg-base-content/10 hover:bg-base-content/20 w-[50%] cursor-pointer p-2 rounded-md">
              <div class="flex justify-between items-center gap-2">
                <div class="flex items-center gap-2"><span class="fi fi-ps rounded-sm"></span> Palestine</div>
                <div class="text-sm">100</div>
              </div>
            </div>
          </div>
          </div>
        </div>

      <div class="dark:bg-dark-eval-1 w-full shadow rounded-lg">
        <div class="px-6 py-4 text-base-content/60">
          <div class="font-bold mb-5">Top OS</div>
          <div class="flex flex-col gap-2">
            <div class="bg-base-content/10 hover:bg-base-content/20 cursor-pointer p-2 rounded-md">
              <div class="flex justify-between items-center gap-2">
                <div class="flex items-center gap-2">Windows</div>
                <div class="text-sm">384</div>
              </div>
            </div>
            <div class="bg-base-content/10 hover:bg-base-content/20 w-[32.03%] cursor-pointer p-2 rounded-md">
              <div class="flex justify-between items-center gap-2">
                <div class="flex items-center gap-2">Android</div>
                <div class="text-sm">123</div>
              </div>
            </div>
            <div class="bg-base-content/10 hover:bg-base-content/20 w-[17.97%] cursor-pointer p-2 rounded-md">
              <div class="flex justify-between items-center gap-2">
                <div class="flex items-center gap-2">iOS</div>
                <div class="text-sm">79</div>
              </div>
            </div>
          </div>
          </div>
        </div>

      </div>

    <script type="module">
      new Chart(document.getElementById('linechart'), {
        type: 'line',
        data: {
          labels: Array.from({ length: 12 }, (_, i) => new Date(0, i).toLocaleString('default', { month: 'long' })),
          datasets: [{
            label: '# of Downloads',
            data: Array.from({ length: 12 }, () => Array.from({ length: 12 }, () => Math.floor(Math.random() * (100000 - 30000 + 1)) + 30000)),
            borderColor: "rgba(1, 107, 135)",
            backgroundColor: "rgba(25, 167, 206, 0.2)",
            borderWidth: 2,
            fill: true,
            tension: 0.3
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
        }
      });
    </script>
</x-app-layout>
