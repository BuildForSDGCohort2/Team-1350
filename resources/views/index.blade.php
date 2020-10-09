@extends('layouts.layout')

@section('content')
    <div class="services container p-4 text-center mt-5 mb-5">
      <span class="p-3">
        <a href="#" class="box"><i class="fas fa-bicycle p-3"></i>Bike</a>
      </span>
      <span class="p-3">
        <a href="#" class="box"><i class="fas fa-bus p-3"></i>Bus</a>
      </span>
      <span class="p-3">
        <a href="#" class="box"><i class="fas fa-ship p-3"></i>Ship</a>
      </span>
      <span class="p-3">
        <a href="#" class="box"><i class="fas fa-train p-3"></i>Train</a>
      </span>
      <span class="p-3">
        <a href="#" class="box"><i class="fas fa-plane p-3"></i>Plane</a>
      </span>
    </div>

    <div class="container mt-5 text-white mb-5">
      <p class="stateone">REDEFINIG</p>
      <p class="statetwo">TRANSPORTATION IN</p>
      <p class="statethree">LAGOS</p>
      <p class="state"><strong>Book A Ticket Today!</strong></p>
    </div>

    <div class="bottom">
      <div class="container pt-3">
        <div class="row">
          <form-group class="contact text-left mt-2 col-4">
            <h4 class="d-inline">Contact form</h4><br>
            <input type="text" placeholder="Full Name" class="mb-2"><br>
            <input type="text" placeholder="Phone Number" class="mb-2"><br>
            <input type="email" placeholder="Email" class="mb-2"><br>
            <input type="text" placeholder="Full Name" class="mb-2"><br>
            <input type="button" value="Submit" class="button p-2">
          </form-group>
          <div class="service text-center col-4">
            <h4>Services</h4>
            <p>Get your tickets</p>
            <span class="p-3">
              <a href="#" class="box"><i class="fas fa-bicycle p-3"></i>Bike</a>
            </span>
            <span class="p-3">
              <a href="#" class="box"><i class="fas fa-bus p-3"></i>Bus</a>
            </span>
            <span class="p-3">
              <a href="#" class="box"><i class="fas fa-ship p-3"></i>Ship</a>
            </span>
            <span class="p-3">
              <a href="#" class="box"><i class="fas fa-train p-3"></i>Train</a>
            </span>
            <span class="p-3">
              <a href="#" class="box"><i class="fas fa-plane p-3"></i>Plane</a>
            </span>
          </div>
        </div>
      </div>
    </div> 
@endsection  
 