@extends('admin.main')

@section('maincontent')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <img src="/movimages/{{ $adminview->img }}" width="400" height="400">
                <p>Title: <b>{{$adminview->title}}</b></p>
                <p>publication date: <b>{{$adminview->publicationdate}}</b></p>
                <p>runtime: <b>{{$adminview->runtime}}</b></p>
                <p>Description: <b>{{$adminview->description}}<b> </p>
            </div>
        </div>
    </div>
</div>

@endsection