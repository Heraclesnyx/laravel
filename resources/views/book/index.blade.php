<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titre du livre</th>
        <th>Auteur du livre</th>
        <th>Genre du livre</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['author']}}</td>
        <td>{{$post['gender']}}</td>
        <td><a href="{{action('BookController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BookController@destroy', $post['id'])}}" method="post">
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