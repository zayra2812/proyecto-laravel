@extends('layouts.app')
@section('content')
  <section class="container">
     <div class="row">
         <article class="col-md-10 col-md-offset-1">
          <form action="{{route('categories/update', ['id' => $categories->id])}}" method="post" novalidate>
            @csrf
            <div class="form-group">
             <label>Nombre</label>
             <input type="text" name="name" class="form-control" required value="{{$categories->name}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn bnt-succes">Enviar </button>
            </div>
          </form>
         </article>
     </div>
  </section>
@endsection