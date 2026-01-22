@extends('layout')
@section('title', 'My hobbies')
@section('content')
<h1>My Hobbies</h1>
<div style="margin-top: 2rem;">

@foreach($hobbies as $hobby)
<div style="background: #000000; padding: 1.5rem; margin-bottom: 1rem;
border-radius: 5px;">
<h3 style="color: #ffffff;">{{ $hobby['title'] }}</h3>
</div>
@endforeach
</div>
@endsection