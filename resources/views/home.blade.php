@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://picsum.photos/150/150" class="rounded-circle" alt="">
            </div>
            <div class="col-9 pt-5">
                <div>
                    <h1>freecodecamp</h1>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">
                    freecodecamp.org
                </div>
                <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </div>
                <div class="font-weight-bold"><a href="#">www.freecodecamp.org</a></div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="https://picsum.photos/350/350" alt="">
            </div>
            <div class="col-4">
                <img src="https://picsum.photos/350/350" alt="">
            </div>
            <div class="col-4">
                <img src="https://picsum.photos/350/350" alt="">
            </div>
        </div>
    </div>
@endsection
