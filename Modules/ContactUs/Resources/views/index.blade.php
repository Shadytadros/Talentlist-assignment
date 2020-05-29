@extends('contactus::layouts.master')
@section('content')
<header class="header" role="banner">
  <ul>
  <li><a href="/">home</a></li>
  <li><a href="contactus">fake2</a></li>
  <li><a href="contactus">fake3</a></li>
  <li><a href="contactus">fake4</a></li>
</ul>
</header>
<div class="text col-sm-4 offset-sm-4">
  <h1>Question or complaint, send us your email and we will be in contact with you to find out what you need</h1>
</div>
<div class="row" id="box">
 <div class="col-sm-4 offset-sm-4">
    <h1 class="display-5 offset-sm-4" style="font-weight:bold">Contact Us</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('people.store') }}">
          @csrf
          <div class="form-group" >
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <button type="submit" class="btn btn-dark col-sm-10 offset-sm-1">Submit contact info</button>
      </form>
  </div>
</div>
</div>
<hr class="horizontal-line">
<div class="card1 col-sm-10">
  <h2 style="text-align: center" id="follow">
    <strong>Follow us on</strong>
  </h2>
  <div class="list-inline">
    <ul>
      <li>
        <a href="https://www.facebook.com" target="_blank">
          <i class="fab fa-facebook-square"></i>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
    </ul>
  </div>
</div>
@endsection
