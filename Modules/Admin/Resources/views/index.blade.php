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
<div class="row">
<div class="col-sm-12">
  <table class="table table-striped">
    <thead>
        <tr>
          <td class="people">People</td>
        </tr>
    </thead>
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>phone</td>
        </tr>
    </thead>
    <tbody>
        @foreach($people as $person)
        <tr>
            <td>{{$person->id}}</td>
            <td>{{$person->name}}</td>
            <td>{{$person->email}}</td>
            <td>{{$person->phone}}</td>
            <td>
                <a href="admin/edit/{{ $person->id }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
