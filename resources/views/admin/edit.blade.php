
@extends('admin.main')

@section('maincontent')
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <h3 class="text-muted">Movi Title: {{$adminedit->title}}</h3>
            <form  method="POST" action="{{ route('admin.update', $adminedit->id) }}"  enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>Uplod Image</label>
                <input type="file" name="img" value="{{ old('img', $adminedit->img) }}" class="form-control">
                @if($errors->has('img'))
                <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title',$adminedit->title) }}" class="form-control">
                @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Publication date</label>
                <input type="date" name="publicationdate" value="{{ old('publicationdate',$adminedit->publicationdate) }}" class="form-control">
                @if($errors->has('publicationdate'))
                <span class="text-danger">{{ $errors->first('publicationdate') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Run Time</label>
                <input type="number" name="runtime" value="{{ old('runtime',$adminedit->runtime) }}" class="form-control" step="0.01">
                @if($errors->has('runtime'))
                <span class="text-danger">{{ $errors->first('runtime') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Description	</label>
                <textarea  name="description" rows="4" class="form-control">{{ old('description',$adminedit->description) }}</textarea>
                @if($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
              </div>

              <button type="submit" class="btn btn-dark" >Submit</button>

            </form>
            </div>
          </div>
        </div>
    </div>
@endsection