@extends('layouts.app')
@section('content')
    <section class="container">
      <div class="row">
        <article class="col-md-12">
            <form action="{{route('category_movie/show')}}" method="post" novalidate class="form-inline">
            @csrf
            <div class="form-group">
                <label>Movie id</label>
                <input type="number" name="movie_id" class="form-control" namme="movie_id" >
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-default">Buscar</button>
               <a href="{{route('category_movie.index')}}" class="btn btn-primary">Todo</a>
               <a href="{{route('category_movie.create')}}" class="btn btn-primary">Crear</a>
            </div>
        </form>
    </article>
    <article class="col-md-12">
     <table class="table table-condensed table-striped table-bordered">
        <thead>
            <tr>
                <th>Pelicula</th>
                <th>Categoria</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category_movie as $category_movie)
            <tr>
            <td>{{$category_movie->movie_id}}</td>
            <td>{{$category_movie->category_movie}}</td>
            <td>{{$category_movie->status_id}}</td>
            <td>
            <a class="btn btn-primary btn-xs" href="{{route('category_movie.edit', ['id' => $category_movie->id])}}">Editar</a>
            <a class="btn btn-danger btn-xs" href="{{route('category_movie/destroy', ['id' => $category_movie->id])}}">Eliminar</a>
            </td>
            </tr>  
        @endforeach    
        </tbody>
     </table>
    </article>
   </div>
</section>
@endsection