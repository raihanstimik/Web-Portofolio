    <form action="{{ user }}" method="get">
        <table border="1" cellpadding='10' style="width:100%">
            <tr>
            <th>email</th>
            <th>sandi</th>
            <th>role</th>
            <th>setuju</th>
            </tr>
            {{-- @foreach ($data_tabel as $item)
                <tr id="data">
                    <td>{{ $item->admin }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->tanggal_pemeriksaan }}</td>
                    <td>{{ $item->diagnosa }}</td>
                </tr> --}}
    </form>
@endsection