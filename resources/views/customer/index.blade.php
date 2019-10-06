<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom du client</th>
        <th>Prénom du client</th>
        <th>Adresse</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['firstname']}}</td>
        <td>{{$post['adress']}}</td>
        <td>{{$post['phone']}}</td>
        <td>{{$post['email']}}</td>
        <td><a href="{{action('CustomerController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CustomerController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection