@extends('layouts.app')

<style>
  .main {
    background-image: url('https://www.iod.com/Portals/0/Images/News%20and%20Campaigns/News%20articles/Animated-ladders-turquoise-background-header.jpg?ver=2016-09-22-165535-970');
    background-size: cover;
    height: 100vh;
  }
</style>

@section('main-content')
  <div class="main">
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 style="color: white;" class="display-4">Ladder Learning</h1>
      <p style="color: white;" class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Monthly</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£15 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <a href="{{ route('subscribe') }}"><button type="button" class="btn btn-lg btn-block btn-primary">Subscribe</button></a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Yearly</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£35 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <a href="{{ route('subscribe') }}"><button type="button" class="btn btn-lg btn-block btn-primary">Subscribe</button></a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">For Life</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£99 <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
          <a href="{{ Auth::User() ? route('subscribe') : route('login') }}"><button type="button" class="btn btn-lg btn-block btn-primary">Subscribe</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
