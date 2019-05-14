@extends('layouts.app')

@section('content')
    
    <div class="jumbotron text-center">
        <h1>URLShortener</h1>
        <p>This is laravel application for urls</p>
        {{-- <form action="UrlsController@short" method="post" class="form-group">
            <input type="text" name="url" id="url" class="form-control" placeholder="Input Your URL Here">
            <input type="submit" value="Short URL" class="btn btn-success mt-2">
        </form> --}}

        {!!Form::open(['action' => 'UrlsController@store', 'method' => 'post'])!!}
            {{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'Input your URL here'])}}
            {{Form::submit('Short URL', ['class' => 'btn btn-success mt-2'])}}
        {!!Form::close()!!}
    </div>

@endsection