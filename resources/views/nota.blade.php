@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center font-italic">{{$nota[0]->name}}</h2>
    
    <h6 class="text-danger text-center">Los doble '{' y '}' deben tener un - en el medio para que no haya un error en la vista</h6>

    <div class="row justify-content-center">
        <form action="/nota/contenido/{{$nota[0]->id}}" method="post">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <textarea spellcheck="false" class="form-control" style="width:70vw;height:70vh;"
             name="contenido">{{$nota[0]->contenido}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </div>
        </form>
    </div>
    <br>
</div>
<a class="mr-auto" href="/sections/{{$nota[0]->section_id}}" id="back" style="margin-left:14vw">Back</a>

<button type="button" class="btn btn-link btn-sm btn-notas" href="#" data-toggle="modal"
data-target="#exampleModalLong" style="margin-left:18vw;">Links</button>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">   
            <div class="modal-content" style="background-color: #1c2938;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Links</h5>
                </div>
                <div class="modal-body text-center">
                    @foreach ($links as $link)
                    <li><a href="{{$link->link}}" target="_blank">{{$link->name}}</a></li>
                    @endforeach
                </div>
                <form style="align-self:center;" action="/storeLinksNota" method="post" role="search">
                @csrf
                <input style="width:40vh; height:5vh;" type="textarea" class="form-control" name="name" placeholder="Nombre nuevo link">
                <input style="width:40vh; height:5vh;" type="textarea" class="form-control" name="link" placeholder="Nuevo link">
                <input style="display:none;" type="text" name="nota_id" value="{{$nota[0]->id}}">
                <button style="width:40vh;" type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
<button type="button"class="btn btn-link btn-sm btn-notas" href="#">Fotos</button>
@endsection