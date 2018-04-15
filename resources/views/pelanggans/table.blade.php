<table class="table table-responsive" id="pelanggans-table">
    <thead>
        <tr>
            <th>Nama Pemilik</th>
        <th>Nama Kucing</th>
        <th>Jenis Kucing</th>
        <th>Nomor Telepon</th>
        <th>Alamat</th>
        <th>Tanggal Masuk</th>
        <th>Pesan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pelanggans as $pelanggan)
        <tr>
            <td>{!! $pelanggan->Nama_Pemilik !!}</td>
            <td>{!! $pelanggan->Nama_Kucing !!}</td>
            <td>{!! $pelanggan->Jenis_Kucing !!}</td>
            <td>{!! $pelanggan->Nomor_Telepon !!}</td>
            <td>{!! $pelanggan->Alamat !!}</td>
            <td>{!! $pelanggan->Tanggal_Masuk !!}</td>
            <td>{!! $pelanggan->Pesan !!}</td>
            <td>
                {!! Form::open(['route' => ['pelanggans.destroy', $pelanggan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pelanggans.show', [$pelanggan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pelanggans.edit', [$pelanggan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>