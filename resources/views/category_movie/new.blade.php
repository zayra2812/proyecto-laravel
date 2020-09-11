@extends('layouts.app')
@section('content')
    <section class="container">
      <div class="row">
        <article class="col-md-10 col-md-offset-1">
            <form action="{{route('category_movie.store')}}" method="post" novalidate>
            @csrf
            <div class="form-group">
                <label>Pelicula id</label>
                <input type="number" name="movie_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Categoria id</label>
                <input type="number" name="category_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Estado id</label>
                <input type="number" name="status_id" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-succes"> Enviar</button>
            </div>
        </form>
    </article>
</div>
</section> 
@endsection
