@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-italic text-center">Edit nota: {{$nota->name}}</h3><hr>
    <div class="row justify-content-center">
    <ul>
    <form action="/notas/editNota/{{$nota->id}}" method="post" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
        <div class="form-group justify-content-center">
            <input type="text" name="name" value="{{$nota->name}}" class="form-control">
        </div>
    </form>
    <form action="/notas/deleteNota/{{$nota->id}}" method="post" value="DELETE">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
        <button style="width:100%" type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
    <ul>
    </div>
</div>
@endsection