@extends('admin.main')

@section('maincontent')
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-8">
            <div class="card mt-3 p-3">
            <form  method="POST" action="{{ route('admin.store') }}"  enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Uplod Image</label>
                <input type="file" name="img" value="{{ old('img') }}" class="form-control">
                @if($errors->has('img'))
                <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Publication date</label>
                <input type="date" name="publicationdate" value="{{ old('publicationdate') }}" class="form-control">
                @if($errors->has('publicationdate'))
                <span class="text-danger">{{ $errors->first('publicationdate') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Run Time</label>
                <input type="number" name="runtime" value="{{ old('runtime') }}" class="form-control" step="0.01">
                @if($errors->has('runtime'))
                <span class="text-danger">{{ $errors->first('runtime') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Description	</label>
                <textarea  name="description" rows="4" class="form-control">{{ old('description') }}</textarea>
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