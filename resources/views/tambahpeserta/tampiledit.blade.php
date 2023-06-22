@extends('components.layouts')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">EDIT DATA</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-4">
                <main class="form-registration w-100 m-auto mt-5">
                    <form action="/editdata/{{ $data->id }}" method="post">
                        @csrf

                        <h1 class="h3 mb-3 fw-normal">Edit Data</h1>

                        <div class="form-floating">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control rounded-top" id="nama"
                                placeholder="Nama" value="{{ $data->nama }}">

                        </div>
                        <div class="form-floating">
                            <label for="angkatan">Angkatan</label>
                            <input type="text" name="angkatan" class="form-control" id="angkatan" placeholder="Angkatan"
                                value="{{ $data->angkatan }}">

                        </div>
                        <div class="form-floating">
                            <label for="nohp">NoHP</label>
                            <input type="nohp" name="nohp" class="form-control" id="nohp" placeholder="NoHP"
                                value="{{ $data->nohp }}">

                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                <option selected>{{ $data->jeniskelamin }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>



                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Edit</button>

                    </form>




                </main>
            </div>
        </div>
    </div>
@endsection
