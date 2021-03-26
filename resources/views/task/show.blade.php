@extends('layout.mainlayout')

@section('content')
    <div class="container mt-5 pt-5">
        <h1>Showing Task {{$task->title}}</h1>

        <div class="jumbotron">
            <p>
                <strong>Task Title: </strong> {{$task->title}} <br>
                <strong>Description: </strong> {{$task->description}}
            </p>
        </div>
    </div>
@endsection