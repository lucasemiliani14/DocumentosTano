@extends('layouts.app')

@section('content')
<div class="container">
<h4 class="font-italic text-center">Notas de la Section {{$sections[0]->name}}</h4><hr>
    <div class="row justify-content-center">
        <ul>
            @foreach ($notas as $nota)
            <li><a href="/nota/{{$nota->id}}">{{$nota->name}}</a></li>
            @endforeach
            <form action="/nota" method="post" role="search">
            @csrf
            <input style="width:100%;margin-top:10px;height:6vh;" type="text" class="input-sm form-control" name="nota" placeholder="Crear nueva nota">
              <div class="form-group" style="display:none;">
                    <select class="form-control" name="sectionid" >
                    @foreach($sections as $section)
                    <option value="{{ $section->id }}">
                    {{ $section->name }}
                    </option>
                    @endforeach
                </select>
              </div>
          </form>
          <form action="/nota/edit/{{$sections[0]->id}}" method="get">
            <li><button style="width:100%;" type="link" class="btn btn-primary btn-sm">Edit notas</button></li>
          </form>
          <li>
          <button type="button" class="btn btn-link btn-sm btn-sections" href="#" data-toggle="modal" data-target="#exampleModalLong">Links</button>
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">   
              <div class="modal-content" style="background-color: #1c2938;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Links</h5>
                </div>
                <div class="modal-body text-center">
                  @foreach ($links as $link)
                    <a href="{{$link->link}}" target="_blank">{{$link->name}}</a><br>                     
                  @endforeach
                </div>
                <form style="align-self:center;" action="/storeLinksSections" method="post" role="search">
                @csrf
                <input style="width:40vh; height:5vh;" type="textarea" class="form-control" name="name" placeholder="Nombre nuevo link">
                <input style="width:40vh; height:5vh;" type="textarea" class="form-control" name="link" placeholder="Nuevo link">
                <input style="display:none;" type="text" name="section_id" value="{{$sections[0]->id}}">
                <button style="width:40vh;" type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
              </div>
            </div>
          </div>
          <button type="button"class="btn btn-link btn-sm btn-sections" href="#">Fotos</button>
          </li>
        </ul>
    </div>
    <a class="mr-auto" href="/temas/{{$sections[0]->tema_id}}" style="position: fixed; bottom: 4%;">Back</a>
</div>
@endsection