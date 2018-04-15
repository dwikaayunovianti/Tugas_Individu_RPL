<!-- Nama Pemilik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama_Pemilik', 'Nama Pemilik:') !!}
    {!! Form::text('Nama_Pemilik', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kucing Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama_Kucing', 'Nama Hewan:') !!}
    {!! Form::text('Nama_Kucing', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kucing Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Jenis_Kucing', 'Jenis Hewan:') !!}
    {!! Form::text('Jenis_Kucing', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomor Telepon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nomor_Telepon', 'Nomor Telepon:') !!}
    {!! Form::number('Nomor_Telepon', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Alamat', 'Alamat:') !!}
    {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Masuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tanggal_Masuk', 'Tanggal Masuk:') !!}
    {!! Form::date('Tanggal_Masuk', null, ['class' => 'form-control']) !!}
</div>

<!-- Pesan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pesan', 'Pesan:') !!}
    {!! Form::text('Pesan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pelanggans.index') !!}" class="btn btn-default">Cancel</a>
</div>
