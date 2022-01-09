@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row pb-5">
            <div class="col-6 d-flex justify-content-end">
                <img src="/storage/{{ $post->image}}">
            </div>
            <div class="col-6">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle"  style="width: 50px">
                    </div>
                    <div class="d-flex align-items-center">
                        <h5 style="font-weight: bold">
                            <a href="/profile/{{ $post->user->id }}" style="display: block; padding: 10px; color:black; text-decoration: none;">{{ $post->user->username }}</a>
                        </h5>
                    </div>
                </div>
                <hr>
                <p><span style="font-weight: bold"><a href="/profile/{{ $post->user->id }}" style="color:black; text-decoration: none;">{{ $post->user->username }}</a></span> {{ $post->caption }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection