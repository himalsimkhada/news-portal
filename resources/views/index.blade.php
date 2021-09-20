@extends('english.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container">
        <div>Language</div>
        <ul>
            <li><a href="{{ route('english.index') }}">English</a></li>
            <li><a href="{{ route('nepali.index') }}">Nepali</a></li>
        </ul>
    </div>
@endsection
