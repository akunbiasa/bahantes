@extends('components.layouts')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">CONTACT US</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-4">
                <main class="form-registration w-100 m-auto mt-5">
                    <form action="/contactproses" method="post">
                        @csrf

                        <h1 class="h3 mb-3 fw-normal">Form Daftar</h1>

                        <div class="form-floating">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control rounded-top" id="email"
                                placeholder="email">

                        </div>



                        <div class="form-floating">
                            <select class="form-select" name="pilihan" aria-label="Default select example">
                                <option selected>Pilihan</option>
                                <option value="Saran">Saran</option>
                                <option value="Komentar">Komentar</option>

                            </select>
                        </div>
                        <div class="form-floating">
                            <label for="pesan">Pesan</label>
                            <input type="text" name="pesan" class="form-control" id="pesan"
                                placeholder="pesan">
                            </div>



                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>

                    </form>


                    <a class="d-block text-center mt-3" href="/list">Sudah Mendaftar? Lihat Peserta disini</a>

                </main>
            </div>
        </div>
    </div>
@endsection
