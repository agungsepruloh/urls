@extends('layouts.app')

@section('content')
    
    <div class="jumbotron text-center">
        <h1>URL Shortener</h1>
        <p>This is laravel application for urls</p>
        <form action="" method="post" class="form-group">
            <input type="text" name="url" id="url" class="form-control" placeholder="Input Your URL Here">
            <input type="submit" value="Short URL" class="btn btn-success mt-2">
        </form>
    </div>

@endsection