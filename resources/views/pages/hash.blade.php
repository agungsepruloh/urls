@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">

        <h1>Your Short Link will be : </h1>
        <table class="table">
            
            <tr>
                <th>Original Link</th>
                <th>Shorted Link</th>
                <th>Date Created</th>
            </tr>
            <tr>
                {{-- <td>{{ $data['url'] }}</td>
                <td>{{ 'htpp://urls/' . $data['hash'] }}</td>
                <td>{{ $url->created_at }}</td> --}}

                <div class="form-group">
                    {{Form::open(['action' => 'UrlsController@store', 'method' => 'post'])}}
                        {{Form::label('url', $data['url'])}}
                        {{Form::text('urls', 'http://urls/', ['class' => 'form-control'])}}
                        {{Form::text('hash', $data['hash'], ['class' => 'form-control'])}}
                    {{Form::close()}}

                </div>
            </tr>
            
        </table>
    </div>
@endsection