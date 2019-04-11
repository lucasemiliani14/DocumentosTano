@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-italic text-center">Edit section: {{$section->name}}</h3><hr>
    <div class="row justify-content-center">
    <ul>
    <form action="/sections/editSection/{{$section->id}}" method="post" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
        <div class="form-group justify-content-center">
            <input type="text" name="name" value="{{$section->name}}" class="form-control">
        </div>
    </form>
    <form action="/sections/deleteSection/{{$section->id}}" method="post" value="DELETE">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
        <button style="width:100%" type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
    <ul>
    </div>
</div>
@endsection