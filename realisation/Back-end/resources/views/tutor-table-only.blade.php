@extends('layouts.master')

@section('title')
@endsection


@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection


@section('title_page1')
@endsection



@section('title_page2')
@endsection



@section('content')
    <div id="content_tutor" class="card-body">
        <a href="{{ Route('Add_tutor') }}">Ajouter un formateur</a>
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
                        <td> <img src="{{ asset('storage/upload/' . $tutor->imgURL) }}" style="width: 100px" /> </td>
                        <td>{{ $tutor->firstname }}</td>
                        <td>{{ $tutor->lastname }}</td>
                        <td>{{ $tutor->email }}</td>
                        <td>
                            <a href="{{ Route('delete_tutor', ['id' => $tutor->id]) }}"> delete </a>
                            <a href="{{ Route('edit_tutor', ['id' => $tutor->id]) }}"> modifier </a>
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

        <div class="d-flex  ">
            {!! $tutors->links() !!}
        </div>

    </div>
@endsection



@section('scripts')
    <script>
        $(document).ready(function() {
        // alert('test')
        $(document).on('click', 'pagination a', function(event){
        event.preventDefault();
        let page =
        $(this).attr('href').split('page=')[1];
        // console.log(page);
        getMoreTutors(package)
        })
        })
        
        function getMoreTutors (page){
            $.ajax( {
                type: 'GET',
                url: "{{ route ('get_tutor') }}"
                success: function(data) {
                    $("#content_tutor").html(data);
                }
            })
        }
    </script>
@endsection
