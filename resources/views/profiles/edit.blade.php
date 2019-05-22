@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-heading text-center ">Edit your profile.</div>

                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="avatar">Upload avatar</label>
                              <input type="file" name="avatar" class="form-control align-self-start" accept="image/*">
                        </div>
                        <div class="form-group">
                              <label for="location">Location</label>
                              <input type="text" name="location" value="{{ $info->location }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="location">About me </label>
                              <textarea name="about" id="about" cols="30" rows="10" class="form-control" required>{{ $info->about }}</textarea>
                        </div>

                        <div class="form-group">
                              <p class="text-center">
                                    <button class="btn btn-outline-success align-self-start" type="submit">
                                          Save your information
                                    </button>
                              </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
