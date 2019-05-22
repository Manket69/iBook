@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-4">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">
                <h5 class="card-title">
                    {{$user->name}}'s Profile.
                    </h5>
                </div>

                <div class="card-body text-center">             
                <img src="{{ Storage::url($user->avatar) }}" width="140px" height="140px" style="border-radius: 50%;" alt="">
               
                     @if(Auth::id() == $user->id)
                          <a href="{{ route('profile.edit') }}" class="btn btn-outline-dark">Edit your profile</a>
                     @endif
                 
                </div>
            </div>

           
                        <div class="panel panel-default">
                              <div class="panel-body">
                                    <friend></friend>
                              </div>
                        </div>
                  



            <div class="card border-dark mb-3" style="max-width: 18rem;" >
                        <div class="card-header text-center">              
                              <h5 class="card-title">About me</h5>
                        </div>
                        <div class="card-text">
                              <p class="text-center">
                                    {{ $user->profile->about }}
                              </p>
                        </div>
                  </div>

        </div>
    </div>
@stop