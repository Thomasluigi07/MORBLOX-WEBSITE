<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Terms of Service - {{ env('APP_NAME') }}</title>
        <meta charset="utf-8">
        <meta content="Morblox" property="og:title" />
        <meta content="MORBLOX is a work in progress revival." property="og:description" />
        <meta content="https://morblox.us" property="og:url" />
        <meta content="https://morblox.us/img/MORBLOXlogo.png" property="og:image" />
        <meta content="#4b4b4b" data-react-helmet="true" name="theme-color" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="apple-touch-icon" href="{{ asset('img/MORBLOX.png') }}" />
        <link rel="apple-touch-startup-image" href="{{ asset('img/MORBLOXsplash.png') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/main.js') }}"></script>
    </head>
    <body>
        <ul></ul>
        <ul></ul>
        <div id="logo_signup">
            <a href="{{ route('index') }}"><img alt="MORBLOX Logo" src="{{ asset('img/MORBLOXlogo.png') }}"
                width="200" height="40" /></a>
            <p id="morbin">It's MORBLOX time.</p>
        </div>
        <div class="content_signup">
            <h1>Terms of Service</h1>
            <p>Welcome to MORBLOX! Before playing, you'll need to know the rules to make sure you know what you can and can't do here.</p>
            <ul></ul>
            <h2>Our Rules</h2>
            <h5>At the end of every rule there is a "()" section containing what the punishment is for breaking that rule.</h5>
            <p>&#x2022; Swearing is fine, but please do not say any racial or homophobic slurs. (Ban for few days, Termination)</p>
            <p>&#x2022; Do not upload NSFW/NSFL content to MORBLOX, or post links to that contents. (Termination)</p>
            <p>&#x2022; You must be over the age of 13 to play MORBLOX. (Termination)</p>
            <p>&#x2022; Don't mini-mod, or pretend to be a MORBLOX Developer or Administrator. (Warning, Ban for few days)</p>
            <p>&#x2022; Do not scam other users for their MORBUX. (Ban for few days, Termination)</p>
            <p>&#x2022; Do not harass other users. (Ban for few days, Termination)</p>
            <p>&#x2022; Do not make accounts for the purpose of breaking rules. (Termination)</p>
            <p>&#x2022; Exploiting is NOT allowed, unless you are testing it in your own game. (Termination)</p>
            <p>&#x2022; Do not ban evade. (Termination)</p>
            <p>&#x2022; Don't spam. (Warning, Ban for few days)</p>
            <ul></ul>
            <h2>Asset Moderation</h2>
            <p>If we believe that any of your assets is breaking the rules, we will remove or change that Asset as required, and then take action onto your MORBLOX account.</p>
            <ul></ul>
        </div>
        <div id="footer_signup">
            <p>MORBLOX is not affiliated with Roblox Corp, Lego, Sony, SEGA, Microsoft, Nintendo and Morbius. It's Morbin time!</p>
            <p><a href="{{ route('privacy') }}">Privacy Policy</a> <a href="{{ route('tos') }}">Terms of Service</a></p>      
        </div id="footer">
    </body>
</html>