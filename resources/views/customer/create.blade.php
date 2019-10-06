<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('customer')}}">
    <div class="form-group row">
      {{csrf_field()}}

      <label for="lgFormGroupInput" class="col-sm-2 
      col-form-label col-form-label-lg">Nom du client</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Entrer le nom du client" name="name">
      </div>

    </div>


    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Prénom</label>
      <div class="col-sm-10">
        <input name="firstname" rows="8" cols="80"></input>
      </div>
    </div>


    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Adresse</label>
      <div class="col-sm-10">
        <input name="adress" rows="8" cols="80"></input>
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Télephone</label>
      <div class="col-sm-10">
        <input name="phone" rows="8" cols="80"></input>
      </div>
    </div>


    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-10">
        <input name="email" rows="8" cols="80"></input>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection