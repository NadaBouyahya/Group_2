@extends('layouts.master')

@section('title')
Modifier un formateur
@endsection


@section('css')

@endsection


@section('title_page1')
Modifier un formateur
@endsection



@section('title_page2')
<a href="{{route('get_tutor')}}" style="text-decoration: none">Formateur</a>
@endsection



@section('content')
 <!-- general form elements -->
 <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Modifier un formateur</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{route('edit_tutor_save', ['id'=>$tutor->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="lastname">nom</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom" value="{{$tutor->lastname}}">
            </div>
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="{{$tutor->firstname}}" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="Email" class="form-control" name="email" id="email" value="{{$tutor->email}}" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image"> <img src="{{ asset('storage/upload/' . $tutor->imgURL) }}" style="width: 100px" /></label>
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
@endsection
