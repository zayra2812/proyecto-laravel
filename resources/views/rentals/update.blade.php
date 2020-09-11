@extends('layouts.app')
@section('content')
  <section class="container">
     <div class="row">
         <article class="col-md-10 col-md-offset-1">
          <form action="{{route('rentals/update', ['id' => $rentals->id])}}" method="post" novalidate>
            @csrf
            <div class="form-group">
             <label>Fecha Inicial</label>
             <input type="date" name="start_date" class="form-control" required value="{{$rentals->start_date}}">
            </div>
            <div class="form-group">
                <label>Fecha Final</label>
                <input type="date" name="end_date" class="form-control" required value="{{$rentals->end_date}}">
            </div>
            <div class="form-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control" required value="{{$rentals->total}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn bnt-succes">Enviar </button>
            </div>
          </form>
         </article>
     </div>
  </section>
@endsection