@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img src="/img/green-logo.png" class="rounded-circle"  style="width: 100%">
        </div>
        <div class="col-6 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex justify-content-between">
                <div class="pr-5"><strong>431</strong> posts</div>
                <div class="pr-5"><strong>87,5k</strong> followers</div>
                <div class="pr-5"><strong>332</strong> following</div>
            </div>
            <div class="pt-3" style="font-weight: bold;">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description ?? "We're a global community of millions of people learning to code together." }}</div>
            <div style="font-weight: bold;"><a href="#"  style="text-decoration: none;">{{ $user->profile->url ?? "www.freecodecamp.org" }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/1.png" style="width: 100%">
        </div>
        <div class="col-4">
            <img src="/img/2.png" style="width: 100%">
        </div>
        <div class="col-4">
            <img src="/img/3.png" style="width: 100%">
        </div>
    </div>
</div>
@endsection
