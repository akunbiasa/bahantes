@extends('components.layouts')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">REGISTRASI</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-4">
                <main class="form-registration w-100 m-auto mt-5">
                    <form action="/tambahpesertaproses" method="post">
                        @csrf

                        <h1 class="h3 mb-3 fw-normal">Form Daftar</h1>

                        <div class="form-floating">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control rounded-top" id="nama"
                                placeholder="Nama">

                        </div>
                        <div class="form-floating">
                            <label for="angkatan">Angkatan</label>
                            <input type="text" name="angkatan" class="form-control" id="angkatan"
                                placeholder="Angkatan">

                        </div>
                        <div class="form-floating">
                            <label for="nohp">NoHP</label>
                            <input type="nohp" name="nohp" class="form-control" id="nohp" placeholder="NoHP">

                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>



                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>

                    </form>


                    <a class="d-block text-center mt-3" href="/list">Sudah Mendaftar? Lihat Peserta disini</a>

                </main>
            </div>
        </div>
    </div>
@endsection
