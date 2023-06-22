@extends('components.layouts')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">LIST DATA ALUMNI SMA NEGERI 5 MEDAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>






<div class="row justify-content-center mt-5">

<div class="col-10">

  <div class="card">
    @if($message = Session::get('success'))
    <div class="row">
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
</div>

      <div class="card-header" >

      <h2 style=" box-shadow: 0px 0 0px 0px #932197, -0px 0 3px 0px #EDC330;">Data all users</h2>
      </div>
      <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
          <form action="/list/cari" method="GET">
          <input type="search"  id="search" name="search" class="form-control" aria-describedby="passwordHelpInline">
          <input type="submit" value="CARI">
        </div>

        <div class="col-auto">
          <a href="/exportpdf" class="btn btn-info" > Export PDF </a>
        </div>

      </div>

      <div class="card-body">
          <table id="example" class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Angkatan</th>
                  <th scope="col">nohp</th>
                  <th scope="col">JenisKelamin</th>
                  <th scope="col">AKSI</th>


                  {{-- <th scope="col">Aksi</th> --}}
                </tr>
              </thead>

              <tbody>
              @foreach ($data as $row )
                <tr>
                  <th scope="row">{{ $row->id }}</th>
                 <td>{{  $row->nama }}</td>
                 <td>{{  $row->angkatan }}</td>
                 <td>{{  $row->nohp }}</td>
                 <td>{{  $row->jeniskelamin }}</td>
                 <td>
                  <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-primary">EDIT</a>
                  <a href="#" type="button" class="btn btn-danger delete" data-id="{{ $row->id }}">HAPUS</a>
                </td>
                </tr>
              @endforeach
              </tbody>
            </table>


            {{-- PAGINATION --}}
            {{ $data->links() }}


      </div>
  </div>
</div>
</div>
<a class="btn btn-primary d-block text-center justify-content-center mt-2" href="/register">Not Registered? Register Now</a>



{{--SCRIPT--}}
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

$('.delete').click( function(){
  var alumniid = $(this).attr('data-id')
  swal({
    title: "Yakin ?",
    text: "Kamu akan menghapus data dengan id "+alumniid+" ",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      window.location = "/hapusdata/"+alumniid+""
      swal("Data berhasil di hapus !!!", {
        icon: "success",
      });
    } else {
      swal("Data tidak jadi dihapus !!!");
    }
  });
});




</script>

@endsection
</div>







