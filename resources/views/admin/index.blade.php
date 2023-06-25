
@extends('admin.main')

@section('maincontent')
    <div class="container">
     <div class="text-right">
        <a href="{{ route('admin.create') }}" class="btn btn-dark mt-2">Upload New Movi</a>
      </div>
    
      <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Publish</th>
                <th>Runtime</th>
                <th>overview</th>
                <th>View</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($movitable as $movi)
              <tr>
                <td>{{ $loop->index+1}}</td>
                <td><img src="/movimages/{{ $movi->img }}" class="rounded-circle" width="50" height="50"></td>
                <td>{{ $movi->title }}</td>
                <td>{{ $movi->publicationdate }}</td>
                <td>{{ $movi->runtime }}</td>
                <td>{{ $movi->description }}</td>
                <td> <a href="{{ route('admin.viewmovi', $movi->id) }}">view</a></td>
                <td><a href="{{ route('admin.edit', $movi->id) }}" class="btn btn-dark btn-small mb-2">Edit</a>
                <form method="POST" class="d-inline" action="{{ route('admin.delete', $movi->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
      </table>
      {{ $movitable->links() }}
    </div>
 @endsection