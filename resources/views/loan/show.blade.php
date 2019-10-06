@extends('master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Post {{ $loan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/loans') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/loans/' . $loan->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                       
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $loan->id }}</td>
                                    </tr>
                                    <tr>
                                      <th> Title </th>
                                      <td> {{ $loan->id_book }} </td>
                                    </tr>
                                    <tr>
                                      <th> Content </th>
                                      <td> {{ $loan->id_customer }} </td>
                                    </tr>
                                    <tr>
                                      <th>
                                        Comments
                                      </th>
                                      <td>
                                        @php
                                        foreach($loan->books as $book) {
                                          echo "<tr><th>id</th><td>" . $book->id . "</td><th>message</th><td>" . $book->id_book . "</td></tr>";
                                        }
                                        @endphp
                                      </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
