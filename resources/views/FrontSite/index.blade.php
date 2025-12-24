@extends('FrontSite.layout.master')
@section('content')
<!-- Start Landing  -->
    <div class="landing">
        <div class="overlay">
            <div class="groub">
                <div class="content">
                    <h2>Hello everybody! <br>
                         we make the details </h2>
                    <p>A site to increase engineering opportunities in the Gaza Strip</p>
                </div>
            </div>
        </div>
        <i class="fa-solid fa-angle-left change-background fa-2x" style="color: #ac4b1c;"></i>
        <i class="fa-solid fa-angle-right change-background fa-2x" style="color: #ac4b1c;"></i>
        <ul class="bullets">
            <li></li>
            <li class="active"></li>
            <li></li>
        </ul>
    </div>
    <!-- End Landing  -->
    <!-- Start Services -->
    <div class="services">
        <div class="container">
            <div class="main-heading">
                <h2>Services</h2>
            </div>
            <div class="services-container">
                <div class="ser-box">
                    <img class="ser-img" src="{{ asset('images/eng1.webp') }}" alt="engineer">
                    <div class="groub">
                        <h3>Engineering design and licensing service</h3>
                        <p>We provide all the services needed by those wishing to build or invest,
                            starting from issuing sketches and merging them,
                            all the way to issuing a building permit for the project,
                            with supervision services and preparing the interior design.</p>
                            <div class="groub-whatsup" href="#">
                                <i class="fa-brands fa-whatsapp fa-2xl" style="color: #25d366;"></i>
                                <button href="#" class="whatsup">whatsup</button>
                            </div>
                            <button class="more">More</button>
                    </div>
                </div>
                <div class="ser-box">
                    <img class="ser-img" src="{{ asset('images/eng2.webp') }}" alt="engineer">
                    <div class="groub">
                        <h3>Pioneers of construction</h3>
                        <p>providing the best suppliers and designers in the world of construction.</p>
                        <div class="groub-whatsup" href="#">
                            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #25d366;"></i>
                            <button href="#" class="whatsup">whatsup</button>
                        </div>
                        <button class="more">More</button>
                    </div>
                </div>
                <div class="ser-box">
                    <img class="ser-img" src="{{ asset('images/eng3.webp') }}" alt="engineer">
                    <div class="groub">
                        <h3>Various designs</h3>
                        <p>The ability to find hundreds of designs for homes and real estate</p>
                        <div class="groub-whatsup" href="#">
                            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #25d366;"></i>
                            <button href="#" class="whatsup">whatsup</button>
                        </div>
                        <button class="more">More</button>
                    </div>
                </div>
                <div class="ser-box">
                    <img class="ser-img" src="{{ asset('images/eng4.webp') }}" alt="engineer">
                    <div class="groub">
                        <h3>Consult us</h3>
                        <p>providing free consultations to customers.</p>
                            <div class="groub-whatsup" href="#">
                                <i class="fa-brands fa-whatsapp fa-2xl" style="color: #25d366;"></i>
                                <button href="#" class="whatsup">whatsup</button>
                            </div>
                            <button class="more">More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start Design  -->
    <div class="design">
        <div class="image">
            <img src="{{ asset('images/hat.jpg') }}" alt="hat">
        </div>
        <div class="groub">
            <h3>Our Designs Comes With...</h3>
            <ul>
                <li>Responsive Design</li>
                <li>Modern And Clean Degin</li>
                <li>Clean Code</li>
                <li>Browser Friendly</li>
            </ul>
        </div>
    </div>
    <!-- End Design  -->
    <!-- Start Portfolio -->
    <div class="portfolio">
        <div class="container">
            <div class="main-heading">
                <h2>Portfolio</h2>
            </div>
            <ul class="shuffle">
                <li class="active">All</li>
                <li>Buildings</li>
                <li>Villas</li>
                <li>Apartments</li>
            </ul>
        </div>
        <div class="imgs-container">
            <div class="box">
                <img src="{{asset('images/shuffle-01.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Buildings</h4>
                    <p>Gaza</p>
                </div>
            </div>
            <div class="box">
                <img src="{{asset('images/shuffle-02.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Buildings</h4>
                    <p>Khan Yunis</p>
                </div>
            </div>
            <div class="box">
                <img src="{{asset('images/shuffle-03.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Buildings</h4>
                    <p>Gaza</p>
                </div>
            </div>
            <div class="box">
                <img src="{{asset('images/shuffle-04.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Villas</h4>
                    <p>Deir al-Balah</p>
                </div>
            </div>
            <div class="box">
                <img src="{{asset('images/shuffle-05.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Apartments</h4>
                    <p>Khan Yunis</p>
                </div>
            </div>
            <div class="box">
                <img src="{{asset('images/shuffle-06.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Apartments</h4>
                    <p>Nusayrat</p>
                </div>
            </div>
            <div class="box">
                <img src="{{asset('images/shuffle-07.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Apartments</h4>
                    <p>Deir al-Balah</p>
                </div>
            </div>
            <div class="box">
                <img src="{{asset('images/shuffle-08.jpg')}}" alt="buildings">
                <div class="caption">
                    <h4>Apartments</h4>
                    <p>Gaza</p>
                </div>
            </div>
        </div>
        <a href="#" class="more">More</a>
    </div>
    <!-- End Portfolio -->
    <!-- Start Video  -->
    <div class="video">
        <video autoplay muted loop>
            <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
        </video>
        <div class="group">
            <h2>Part of our work</h2>
            <p>We have everything you need.</p>
            <button class="more">See More</button>
        </div>
    </div>
    <!-- End Video  -->
    <!-- Start About  -->
    <div class="about">
        <div class="container">
            <div class="main-heading">
                <h2>About Us</h2>
                <p>Defining the goals of future projects is always the first step,
                    no need to worry about the details, here you will find what you are looking for in everything you need to clearly define,
                    as the platform provides all the requirements of your project starting from the land to the furniture</p>
            </div>
            <img src="{{ asset('images/about.webp') }}" alt="about">
        </div>
    </div>
    <!-- End About  -->
    <!-- Start Stats  -->
    <div class="stats">
        <div class="container">
            <div class="box">
                <div class="number">550+</div>
                <p>Engineering file</p>
            </div>
            <div class="box">
                <div class="number">25+</div>
                <p>Year experience</p>
            </div>
            <div class="box">
                <div class="number">1800+</div>
                <p>Consultation</p>
            </div>
            <div class="box">
                <div class="number">30+</div>
                <p>Service Provider</p>
            </div>
        </div>
    </div>
    <!-- End Stats  -->
    <!-- Start Skills  -->
    <div class="our-skills">
        <div class="container">
            <div class="testimonials">
                <h3>Testimonials</h3>
                <p>
                    a formal written description of someone's character and qualities given by a previous employer
                </p>
                <div class="box">
                    <img src="{{ asset('images/skills-01.jpg') }}" alt="skills">
                    <div class="text">
                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                        <p>Hala Yasser ,CEO</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('images/skills-02.webp') }}" alt="skills">
                    <div class="text">
                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                        <p>Zoher Naef ,CEO</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('images/eng1.webp') }}" alt="skills">
                    <div class="text">
                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                        <p>Zoher Naef ,CEO</p>
                    </div>
                </div>
                <ul class="bullets">
                    <li></li>
                    <li class="active"></li>
                    <li></li>
                </ul>
            </div>
            <div class="skills">
                <h3>Our Skills</h3>
                <p>
                    a formal written description of someone's character and qualities given by a previous employer
                </p>
                <div class="pro-holder">
                    <h4>Implementation monitoring</h4>
                    <div class="prog">
                        <span style="width: 90%" data-progress="90%"></span>
                    </div>
                </div>
                <div class="pro-holder">
                    <h4>Coordination with relevant teams</h4>
                    <div class="prog">
                        <span style="width: 87%" data-progress="87%"></span>
                    </div>
                </div>
                <div class="pro-holder">
                    <h4>Quality check</h4>
                    <div class="prog">
                        <span style="width: 92%" data-progress="92%"></span>
                    </div>
                </div>
                <div class="pro-holder">
                    <h4>Problem and Change Management</h4>
                    <div class="prog">
                        <span style="width: 94%" data-progress="94%"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Skills  -->
    <!-- Start Subscribe  -->
    <div class="subscribe" id="subscribe">
        <div class="container">
            <form action="{{ route('engineers.subscribe') }}" method="POST">
                @csrf
                <i class="fa-regular fa-envelope fa-lg"></i>
                <input type="email" name="subscribe_email" placeholder="Your Email"
                    value="{{old('subscribe_email')}}" class="form-control @error('subscribe_email') is-invalid @enderror " >
                    {{-- @error('email')
                    <div class="alert alert-primary invalid-feedback" role="alert">
                        <i data-feather="alert-circle"></i>
                        {{$message}}
                    </div>
                    @enderror --}}
                <input type="submit" value="Subscribe">
            </form>
            <p>Browse hundreds of professional projects for free.</p>
        </div>
    </div>
    <!-- End Subscribe  -->
    <!-- Start ContactUs  -->
    <div class="contact">
        <div class="container">
            <div class="main-heading">
                <h2>Contact Us</h2>
            </div>
            <div class="content">
                <form action="{{ route('engineers.index_contact')}}" method="POST">
                    @csrf
                    <x-input name="name" label="Your Name"></x-input>
                    <x-input name="email" label="Your Email"></x-input>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="message" class="col-form-label">Your Messages</label>
                            <textarea class="form-control @error('message') is-invalid @enderror " name="message" maxlength="100"
                            placeholder="This textarea has a limit of 100 chars." rows="12">
                            </textarea>
                            @error('message')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Send Message">
                </form>
                <div class="info">
                    <h4>Get In Touch</h4>
                    <span class="phone">+966504615811</span>
                    <span class="phone">+966538199235</span>
                    <h4>Where We Are ?</h4>
                    <address>Villa 37 <br>Khan Yunis <br>324.33 <br> Gaza Strip</address>
                </div>
            </div>
        </div>
    </div>
    <!-- End ContactUs  -->
@endsection
@section('title','Enginnering Gate')
@section('style','eng.css')

