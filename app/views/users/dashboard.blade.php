@extends('layouts.fontend')
@section('content')

@if(Auth::user())

<h2>{{ $users->name }}</h2>
<p>your email is {{ $users->email }}</p>

@else

<p>You are not logedin </p>

@endif


@stop