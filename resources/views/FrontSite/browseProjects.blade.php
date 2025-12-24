@extends('FrontSite.layout.master')
@section('content')
    <!-- Start Group1  -->
    <div class="group">
        <div class="container">
            <div class="main-heading">
                <h2>Browse All Projects</h2>
            </div>
        </div>
        <div class="imgs-container">
            <div class="box">
                <img src="{{ asset('images/shuffle-01.jpg') }}" alt="Buildings">
                <div class="caption">
                    <h4>Buildings</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/Villas.png') }}" alt="Villas">
                <div class="caption">
                    <h4>Villas</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/shuffle-06.jpg') }}" alt="Apartments">
                <div class="caption">
                    <h4>Apartments</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/hospita.webp') }}" alt="Hospital">
                <div class="caption">
                    <h4>Hospital</h4>
                </div>
            </div>
            <div class="box" >
                <img src="{{ asset('images/school-02.webp') }}" alt="Schools">
                <div class="caption">
                    <h4>Schools</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/restaurants-02.webp') }}" alt="Restaurants">
                <div class="caption">
                    <h4>Restaurants</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/gym.webp') }}" alt="Gym">
                <div class="caption">
                    <h4>Gym</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/Mosques.jpeg') }}" alt="Mosques">
                <div class="caption">
                    <h4>Mosques</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/Malls.jpeg') }}" alt="Malls">
                <div class="caption">
                    <h4>Malls</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/office-01.webp') }}" alt="Office">
                <div class="caption">
                    <h4>Office</h4>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/gaz.webp') }}" alt="Gas stations">
                <div class="caption">
                    <h4>Gas stations</h4>
                </div>
            </div>
        </div>
        <div class="seemore">
            <a href="{{ route('engineers.browseProjects') }}" class="more">See More</a>
        </div>
    </div>
    <!-- End Group1  -->
@endsection
@section('title','BrowseProjects')

