@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t500x500.jpg" style="width: 150px"
                     class="rounded-circle" alt="">
            </div>
            <div class="col-9 pt-5">
                <div>
                    <h1>{{$user->username}}</h1>
                </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>

                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}
                </div>
                <div><a href="#">{{$user->profile->url}}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="https://picsum.photos/500/500" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://picsum.photos/400/400" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://picsum.photos/600/600" class="w-100" alt="">
            </div>
        </div>
    </div>
@endsection
