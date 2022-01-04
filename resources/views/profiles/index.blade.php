@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img src="/img/green-logo.png" class="rounded-circle"  style="width: 100%">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>

                @can('update', $user->profile)
                    <a href="/post/create">Add new post</a>
                @endcan

                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
            
            </div>
            <div class="d-flex">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="px-5"><strong>87,5k</strong> followers</div>
                <div><strong>332</strong> following</div>
            </div>
            <div class="pt-3" style="font-weight: bold;">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description ?? "We're a global community of millions of people learning to code together." }}</div>
            <div style="font-weight: bold;"><a href="#"  style="text-decoration: none;">{{ $user->profile->url ?? "www.freecodecamp.org" }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 p-3">
            <a href="/post/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" style="width: 100%">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
