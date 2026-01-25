@extends('layout')
@section('title', 'About Me')
@section('content')
<h1>About Me</h1>
<div style="margin-top: 2rem;">
<div style="margin-top: 2rem;">

<div style="margin-top:2rem; position:relative;">

    <h2 style="color:#3498db;">
        {{ $name }}
    </h2>

    <img 
        src="{{ asset('images/profile.jpg') }}" 
        alt="Profile picture"
        style="
            width:200px;
            position:absolute;
            right:0;
            top:-125px;
        "
    >

</div>


<p style="margin-top: 1rem; font-size: 1.1rem;">
<strong>Course:</strong> {{ $course }}
</p>
<p style="margin-top: 0.5rem; font-size: 1.1rem;">
<strong>University:</strong> {{ $university }}
</p>
<p style="margin-top: 2rem; line-height: 1.8;">
I am a passionate student learning web development with Laravel.
I enjoy building web applications and solving problems through code.
My goal is to become a full-stack developer and create impactful digital
solutions.
</p>
</div>
@endsection