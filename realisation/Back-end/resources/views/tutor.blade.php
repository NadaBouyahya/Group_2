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
    <div class="card-body">
        <a href="{{Route('Add_tutor')}}">Ajouter un formateur</a>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tutors as $tutor)
                    <tr>
                        <td> <img src="{{asset('storage/upload/'. $tutor->imgURL)}}" style="width: 100px"/> </td>
                        <td>{{$tutor->firstname}}</td>
                        <td>{{$tutor->lastname}}</td>
                        <td>{{$tutor->email}}</td>
                        <td>
                            <a href="{{Route('delete_tutor', ['id'=>$tutor->id] ) }}"> delete </a>
                            <a href="{{Route('edit_tutor', ['id'=>$tutor->id] ) }}"> modifier </a>
                        </td>
                    </tr>
                @endforeach

            <tfoot>
                <tr>
                    {{-- <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr> --}}
            </tfoot>
        </table>
    </div>
@endsection



@section('scripts')
@endsection
