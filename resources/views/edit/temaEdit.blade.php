@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-italic text-center">Edit tema: {{$tema->name}}</h3><hr>
    <div class="row justify-content-center">
    <ul>
    <form action="/temas/editTema/{{$tema->id}}" method="post" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
        <div class="form-group justify-content-center">
            <input type="text" name="name" value="{{$tema->name}}" class="form-control">
        </div>
    </form>
    <form action="/temas/deleteTema/{{$tema->id}}" method="post" value="DELETE">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
        <button style="width:100%" type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
    <ul>
    </div>
</div>
@endsection