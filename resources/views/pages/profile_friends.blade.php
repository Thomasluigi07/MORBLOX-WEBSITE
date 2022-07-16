@extends('layouts.app')
@section('title')
    <title>{{ $data['user']->name }}'s Friends - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
    <h1 id="usernameframe">{{ $data['user']->name }}'s Friends ({{ $data['user']->getFriendsCount() }})</h1>
    <a href="#" class="tab_selected">All Friends</a>
    @auth
    @if ($data['user']->id != Auth::id())
    <a href="{{ route('mutual_friends', $data['user']->id) }}" class="tab">Mutual Friends ({{ Auth::user()->getMutualFriendsCount($data['user']) }})</a>
    @endif
    @endauth
    <br>
    <br>
    <div class="content_special" id="FriendsContainer" style="flex-wrap: wrap;">
        @foreach ($data['friends'] as $friend)
            <div class="FriendsContainerBox" id="FriendsContainerBox1">
                <div id="FriendsContainerBox1ImageContainer">
                    <a href="{{ route('profile', $friend->id) }}"><img alt="Profile Image"
                            src="{{ asset('img/defaultrender.png') }}" width="60px" height="100%"></a>
                </div>
                <div id="FriendsContainerBox1TextContainer">
                    <a href="{{ route('profile', $friend->id) }}" id="FeedContainerBox1Username">{{ $friend->name }}</a>
                    @if (!empty($friend->feedposts->last()->status))
                        <p>"{{ $friend->feedposts->last()->status }}"</p>
                    @else
                        <p>"I'm new to ARCHBLOX!"</p>
                    @endif
                    @if (Cache::has('is_online_' . $friend->id))
                        <strong id="onlinestatus" class="onlinestatus_website">Website</strong>
                    @else
                        <strong id="onlinestatus" class="onlinestatus_offline">Offline - Last Online
                            {{ Carbon\Carbon::parse($friend->last_seen)->diffForHumans() }}</strong>
                    @endif
                    <br>
                    @if (Auth::id() == $data['user']->id)
                        <form action="{{ route('friend_remove', $friend->id) }}" method="POST"
                            style="display:inline-block">
                            @csrf
                            <button class="redbutton" type="submit">Unfriend</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
        @if (!$data['user']->getFriendsCount())
            <p>{{ $data['user']->name }} hasn't made friends with anyone yet.</p>
        @endif
        {{ $data['friends']->links() }}
    </div>
    <br>
@endsection
