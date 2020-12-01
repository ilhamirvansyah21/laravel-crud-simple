@extends('layouts.master')

@section('content')
        @if(session('sukses'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('sukses') }}
        </div>
        @endif

        <div class="row">
        <div class="col-lg-12">
            <h1>Form Edit Mahasiswa</h1>
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Nama Depan</label>
                    <input name="nama_depan" type="text" class="form-control" placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
                </div>

                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang" value="{{ $siswa->nama_belakang }}">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <input name="agama" type="text" class="form-control" placeholder="Agama" value="{{ $siswa->agama }}">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3">{{ $siswa->alamat }}</textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

