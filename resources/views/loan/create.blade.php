<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('loan')}}">
    <div class="form-group row">
      {{csrf_field()}}

      <label for="lgFormGroupInput" class="col-sm-2 
      col-form-label col-form-label-lg">(id_livre)</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Entrer le titre du livre" name="id_book">
      </div>

    </div>


    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">(id_client)</label>
      <div class="col-sm-10">
        <input name="id_customer" rows="8" cols="80"></input>
      </div>
    </div>


    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection