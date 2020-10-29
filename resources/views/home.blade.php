@extends('master')

@section('title', 'Homepage')

@section('content')

Post a Messasge:

<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">

    {{-- required for security --}}
    {{ csrf_field() }}

    <button type="submit">submit</button>
</form>

Recent Messages:

    
 <ul>
     @foreach ($messages as $message)
    <li>
        <h3>{{ $message->title }}</h3> - {{ $message->content }} - {{ $message->created_at->diffForHumans() }}
        <a href="/message/{{$message->id}}"> view </a>
    </li>
    <br>
     @endforeach
 </ul>


@endsection