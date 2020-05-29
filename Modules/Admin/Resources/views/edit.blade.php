@extends('admin::layouts.master')
@section('content')
<header class="header" role="banner">
  <ul>
  <li><a href="/">home</a></li>
  <li><a href="contactus">fake2</a></li>
  <li><a href="contactus">fake3</a></li>
  <li><a href="contactus">fake4</a></li>
</ul>
</header>
<div class="card col-sm-4 offset-sm-2">
        <h1 class="upcontact">Update contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('people.update', $person->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $person->name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $person->email }} />
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" value={{ $person->phone }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>
<hr class="horizontal-line">
@endsection
