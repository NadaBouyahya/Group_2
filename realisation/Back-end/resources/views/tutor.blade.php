@extends('layouts.master')

@section('title')
    Formateur
@endsection


@section('css')
@endsection


@section('title_page1')
    table de formateur
@endsection


@section('title_page2')
    formateur
@endsection



@section('content')

    @include('tutor-table-only')

 @endsection



@section('scripts')
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin = "anonymous">
<script>
@endsection
