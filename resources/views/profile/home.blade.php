@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 p-4">
                <img src="/images/foto-perfil.jpg" class="rounded-circle border" alt="Foto de perfil" srcset="">
            </div>
            <div class="col-5 pt-4">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>{{ $user->username }}</h1>
                        <a href="/p/create"><button class="btn btn-primary">Create Post</button></a>
                    </div>
                </div>
                <div class="row pt-3 pb-3">
                    <div class="col-4"><strong>7,477</strong> posts</div>
                    <div class="col-4"><strong>652M</strong> followers</div>
                    <div class="col-4"><strong>95</strong> following</div>
                </div>
                <div class="">
                    <strong>{{ $user->profile->title }}</strong>
                </div>
                <div class="">
                    <p>{{ $user->profile->description}}</p>
                </div>
                <div class=""><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <img class="col-12" src="/images/post.jpg" alt="" srcset="">
            </div>
            <div class="col-4">
                <img class="col-12" src="/images/post.jpg" alt="" srcset="">
            </div>
            <div class="col-4">
                <img class="col-12" src="/images/post.jpg" alt="" srcset="">
            </div>
        </div>
    </div>
@endsection
