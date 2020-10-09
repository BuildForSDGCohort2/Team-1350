@extends('layouts.layout')

@section('content')
  <div class="container signup text-center">
    <div class="intro">
      <img src="" alt="Image missing">
      <h2>Welocomote!</h2>
    </div>
    <form action="">
      <h3 class="sign">Sign up here</h3>
      <div class="formgroup mb-1">
        <label for="name" class="mb-1">Full Name</label><br>
        <input type="text" class="p-1" id="name">
      </div>
      <div class="formgroup mb-1">
        <label for="name" class="mb-1">Email</label><br>
        <input type="text" class="p-1" id="name">
      </div>
      <div class="formgroup mb-5">
        <label for="number" class="mb-1">Phone Number</label><br>
        <input type="text" id="name" class="p-1" placeholder="+2348156775886">
      </div>
    </form>  
@endsection