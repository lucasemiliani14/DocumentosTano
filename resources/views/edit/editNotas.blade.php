@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-italic text-center">Edit notas</h3><hr>
    <ul style="padding-left:0%;">
        @foreach ($notas as $nota)
            <li><a href="/notas/notaEdit/{{$nota->id}}">{{$nota->name}}</a></li>
        @endforeach
    </ul>
    <a style="position: fixed; bottom: 20px;" class="mr-auto"
    href="/sections/{{$sectionId}}">Back</a>
</div>
@endsection