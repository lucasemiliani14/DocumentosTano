@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-italic text-center">Edit sections</h3><hr>
    <ul style="padding-left:0%;">
        @foreach ($sections as $section)
            <li><a href="/sections/sectionEdit/{{$section->id}}">{{$section->name}}</a></li>
        @endforeach
    </ul>
    <a style="position: fixed; bottom: 20px;"class="mr-auto" href="/temas/{{$temaId}}">Back</a>
</div>
@endsection