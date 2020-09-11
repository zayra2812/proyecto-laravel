@extends('layouts.app')
@section('content')
  <section class="container">
     <div class="row">
         <article class="col-md-10 col-md-offset-1">
          <form action="{{route('category_movie/update', ['id' => $category_movie->id])}}" method="post" novalidate>
            @csrf
            <div class="form-group">
             <label>Pelicula id</label>
             <input type="number" name="movie_id" class="form-control" required value="{{$category_movie->movie_id}}">
            </div>
            <div class="form-group">
                <label>Categoria id</label>
                <input type="number" name="category_id" class="form-control" required value="{{$category_movie->category_id}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn bnt-succes">Enviar </button>
            </div>
          </form>
         </article>
     </div>
  </section>
@endsection