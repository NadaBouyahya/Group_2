@extends('layouts.master')


@section('title')
    Formateur
@endsection


@section('css')
@endsection


@section('title_page1')
    home
@endsection



@section('title_page2')
    Formateur
@endsection



@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ajouter un formateur</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/insert_tutor">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="Email" class="form-control" name="email" id="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image">choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                {{-- <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="file" name="file_excel" id="file_excel">

            </div>

        </form>
    </div>
    <!-- /.card -->
@endsection



@section('scripts')
    {{-- <script src="../../plugins/jquery/jquery.min.js"></script> --}}
    <script src="{{ URL::asset('dist/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    {{-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ URL::asset('dist/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- bs-custom-file-input -->
    {{-- <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> --}}
    <script src="{{ URL::asset('dist/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE App -->
    {{-- <script src="../../dist/js/adminlte.min.js"></script> --}}
    <script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    {{-- <script src="../../dist/js/demo.js"></script> --}}
    <script src="{{ URL::asset('dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
