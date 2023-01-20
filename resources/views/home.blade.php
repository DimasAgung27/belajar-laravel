{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
</head>
<style>
    html, body {
        font-family: Arial, Helvetica, sans-serif
    }
</style>
<body>
    <div class="container">
        <div class="image"></div>
        <h2><?= $name; ?></h2>
        <p><?= $job; ?></p>
        <p class="deskripsi">
            <?= $description; ?>
        </p>
        <div class="button">
            <a href="/about" class="btn-about-me">About</a>
            <a href="/contact" class="btn-contact-me">Contact</a>
        </div>
    </div>
</body>
</html> --}}
@extends('main')
@section('container')
<div class="container">
    <div class="image"></div>
    <h2>{{ $name }}</h2>
    <p>{{ $job }}</p>
    <p class="deskripsi">
        {{ $description }}
    </p>
    <div class="button">
        <a href="/about" class="btn-about-me">About</a>
        <a href="/contact" class="btn-contact-me">Contact</a>
    </div>
</div>
@endsection