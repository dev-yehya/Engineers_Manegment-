@extends('FrontSite.layout.master')
@section('content')
   <!-- Start content  -->
   <div class="container">
    <div class="main-heading">
        <div class="group1">
            <h2>Contact Us</h2>
            <p>For inquiries, enter your information and you will be contacted as soon as possible</p>
        </div>
    </div>
    <div class="group2">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('engineers.contact')}}" method="POST">
                            @csrf
                            <x-input name="name" label="User name"/>
                            <x-input name="email" label="Email address" type="email"/>
                            <x-input name="phone-number" label="Phone Number" type="number"/>
                            <x-input name="address" label="Address"/>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- End content  -->
<!-- Start Browse Projects-->
<div class="container">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="browse">
                        <h3>Browse hundreds of professional projects for free.</h3>
                        <button type="submit" class="btn btn-primary me-2">Browse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Browse Projects -->
@endsection
@section('title','Contact Us')

