@extends('layouts.loggedout')
@section('title')
<title>403 - {{ env('APP_NAME') }}</title>
@endsection
@section('titlediscord')
<meta content="403 - {{ env('APP_NAME') }}" property="og:title" />
@endsection
@section('descdiscord')
<meta content="ARCHBLOX is a work in progress revival." property="og:description" />
@endsection
@section('extras')
<script src="{{ asset('js/403.js') }}"></script>
@endsection
@section('contentloggedout')
<h2>403 | Forbidden</h2>
<p><button style="width: fit-content;"  class="redbutton" onclick="window.history.back();">Back</button></p>
<p>OH SHIT WHAT HAVE YOU DONE GO BACK NOW BEFORE LUIGI KILLS US ALL!!!!!!</p>
<p>Luigi: I AM GOING TO KILL EVERYONE IN <span id="timeElement">5</span></p>
<img alt="Angry Luigi" src="{{ asset('img/error.png') }}" width="100%" height="max-content">
@endsection