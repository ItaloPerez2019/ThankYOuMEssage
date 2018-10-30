

@extends('layouts.default')

@section('content')


    <h1>Conctact </h1>
    <p class="lead">Please use this form to contact the site owner.</p>


    <form action="/contact" method ="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Please enter email  </label>
            <input name="email" type="email" class="form-control" id="email" placeholder="john@yahoo.com">
        </div>

        <div class="form-group">
            <label for="body">Please enter your name </label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>

@endsection
