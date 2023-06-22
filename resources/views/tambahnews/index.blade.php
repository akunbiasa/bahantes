@extends('components.layouts')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">TAMBAH NEWS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-4">
                <main class="form-registration w-100 m-auto mt-5">
                    <form action="/tambahnewsproses" method="post" enctype="multipart/form-data">
                        @csrf

                        <h1 class="h3 mb-3 fw-normal">Form Daftar</h1>

                        <div class="form-floating">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control rounded-top" id="judul"
                                placeholder="judul">

                        </div>
                
                        <div class="form-floating">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                placeholder="deskripsi">
                            </div>

                            

                            <div class="image">
                                <label for="image">Add image</label><br>
                                <input type="file"  required name="image">
                              </div>


                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Tambah</button>

                    </form>


                    

                </main>
            </div>
        </div>
    </div>
@endsection