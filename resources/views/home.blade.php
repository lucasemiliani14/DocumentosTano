@extends('layouts.app')

@section('content')
<div class="container">
<h4 class="font-italic text-center">Temas</h4><hr>
    <div class="row justify-content-center">
        <ul style="padding-left:0%;">
            @foreach ($temas as $tema)
            <li><a href="/temas/{{$tema->id}}">{{$tema->name}}</a></li>
            @endforeach
            <form action="/temas" method="post" role="search">
            @csrf
              <input style="width:100%;margin-top:10px;height:6vh;" type="text" class="input-sm form-control" name="tema" placeholder="Crear nuevo tema">
            </form>
            <form action="/temas/edit" method="get">
                <li><button style="width:100%" type="link" class="btn btn-primary btn-sm">Edit temas</button></li>
            </form>
        </ul>
    </div>
</div>
@endsection
