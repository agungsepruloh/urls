@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">

        <h1>Your shorted Link</h1>
        <table class="table">
            
            <tr>
                <th>Original Link</th>
                <th>Shorted Link</th>
                <th>Date Created</th>
            </tr>
            <tr>
                <td>{{ $url->url }}</td>
                <td>{{ 'htpp://urls/' . $url->hash }}</td>
                <td>{{ $url->created_at }}</td>
            </tr>
            
        </table>
    </div>
@endsection