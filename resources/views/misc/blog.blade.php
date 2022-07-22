<!DOCTYPE html>
<html lang="en-us" style="height: 100%;
    width: 100%;">

<head>
    <title>Blog - {{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta content="Blog - {{ env('APP_NAME') }}" property="og:title" />
    <meta content="ARCHBLOX is a work in progress revival." property="og:description" />
    <meta content="https://archblox.com" property="og:url" />
    <meta content="https://archblox.com/img/MORBLOXlogo.png" property="og:image" />
    <meta content="#4b4b4b" data-react-helmet="true" name="theme-color" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="{{ asset('img/MORBLOX.png') }}" />
    <link rel="apple-touch-startup-image" href="{{ asset('img/MORBLOXsplash.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>

<body style="    height: 100%;
    margin: 0;
    width: 100%;">
    <iframe src="https://archblox.blogspot.com" width="100%" height="100%"></iframe>
</body>

</html>