@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="" width="200">
@endsection

