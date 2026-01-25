@extends('layout')
@section('title', 'My Projects')
@section('content')
<h1>My Projects</h1>
<div style="margin-top: 2rem;">

@foreach($projects as $project)
<div style="background: #e8f4f8; padding: 1.5rem; margin-bottom: 1rem;
border-radius: 5px;">
<h3 style="color: #000000;">{{ $project['title'] }}</h3>
<p style="margin-top: 0.5rem; color: #634173;">{{
$project['description'] }}</p>
</div>
@endforeach
</div>
@endsection