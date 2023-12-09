<x-print-layout>
    <center>
        <h2>All User</h2>
    </center>

    <hr>
    <table id="journal" style="width: 100%; font-family: arial, sans-serif; border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp

            @foreach ($data as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</x-print-layout>