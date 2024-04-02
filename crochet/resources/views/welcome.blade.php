@extends('layouts.design')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crochet</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Compiled CSS from Laravel Mix -->
    <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
</head>
<body>
<div class="background-color"></div>

   <div class="header">
   @if (Route::has('login'))

            <div class="header-content">
                <h1>Welcome to dashboard</h1>
                <div class="list">
                @auth
                    <a href="{{ url('/home') }}" class="">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">Register</a>
                    @endif
                @endauth
                </div>

            </div>
        @endif

   </div>
</body>
</html>
