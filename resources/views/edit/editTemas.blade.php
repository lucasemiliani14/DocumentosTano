@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-italic text-center">Edit temas</h3><hr>
    <ul style="padding-left:0%;">
        @foreach ($temas as $tema)
            <li><a href="/temas/temaEdit/{{$tema->id}}">{{$tema->name}}</a></li>
        @endforeach
    </ul>
    <a style="position: fixed; bottom: 20px;" class="mr-auto" href="/">Back</a>
</div>
@endsection