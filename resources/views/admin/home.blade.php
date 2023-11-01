@extends('layouts.app')

@section('content')
<div>

    <table id="example_tb" class="table compact table-bordered table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Spesifikasi</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script>
    $('#example_tb').DataTable({
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "{{ url('items/fetch') }}",

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }
        },

        "columns": [{
                "data": "idprinter",
                "name": "idprinter"
            },
            {
                "data": "namaprinter",
                "name": "nama"
            },
            {
                "data": "spesifikasi",
                "name": "spesifikasi"
            },

            {
                "data": "harga",
                "name": "harga"
            },
            {
                "data": "foto",
                "name": "foto"
            },
            
            {
                "data": "action",
                "name": "action",

            },

        ]
    });
</script>
@endsection