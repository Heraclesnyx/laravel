<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Id_book</th>
        <th>Id_customer</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($loans as $post)
       @foreach($post->books as $key => $value)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$value->name}},
            {{$value->author}},
            {{$value->gender}}
        </td>
        <td>
        </td>
        
        @foreach($post->customers as $k => $v)
        <td>{{$v->name}},
            {{$v->firstname}},
            {{$v->adress}},
            {{$v->phone}},
            {{$v->email}}
        </td>
        @endforeach
        
        <td><a href="{{action('LoanController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('LoanController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
        @endforeach  
      @endforeach
    </tbody>
  </table>
  </div>
@endsection