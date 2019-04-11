@extends('layouts.app')

@section('content')
<div class="container">
<h4 class="font-italic text-center">Sections de {{$temas[0]->name}}</h4><hr>
    <div class="row justify-content-center">
        <ul>
            @foreach ($sections as $section)
            <li><a href="/sections/{{$section->id}}">{{$section->name}}</a></li>
            @endforeach
            <form action="/section" method="post" role="search">
            @csrf
            <input style="width:100%;margin-top:10px;height:6vh;" type="text" class="input-sm form-control" name="section" placeholder="Crear nueva seccion">
              <div class="form-group" style="display:none;">
                    <select class="form-control" name="temaid">
                    @foreach($temas as $tema)
                    <option value="{{ $tema->id }}">
                    {{ $tema->name }}
                    </option>
                    @endforeach
                </select>
              </div>
            </form>
            <form action="/sections/edit/{{$temas[0]->id}}" method="get">
                <li><button style="width:100%;" type="link" class="btn btn-primary btn-sm">Edit sections</button></li>
            </form>
        </ul>
    </div>
    <a style="position: fixed; bottom: 4%;" class="mr-auto" href="/">Back</a>
</div>
@endsection