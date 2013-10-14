@extends('layout')
@section('content')

<h1>{{ $artist['name'] }}</h1>
<p>{{ $artist['summary'] }}</p>

@stop
