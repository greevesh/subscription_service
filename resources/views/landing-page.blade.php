@extends('layouts.app')

@section('main-content')
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Pricing</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Monthly</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">£0 <small class="text-muted">/ mo</small></h1>
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
          <h1 class="card-title pricing-card-title">£15 <small class="text-muted">/ mo</small></h1>
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
          <h1 class="card-title pricing-card-title">£79 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <a href="{{ route('subscribe') }}"><button type="button" class="btn btn-lg btn-block btn-primary">Subscribe</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
