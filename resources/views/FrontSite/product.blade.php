@extends('FrontSite.layout.master')
@section('content')
    <div class="group">
        <div class="small-container">
          <div class="row">
              <div class="col-2">
                <img src="{{asset('/images/bank-01.webp')}}" width="100%" alt="" id="ProductImg">

                <div class="small-img-row">
                  <div class="small-img-col">
                    <img src="{{asset('/images/map.jpg')}}" alt="map" class="small-img"></a>
                  </div>
                  <div class="small-img-col">
                    <img src="{{asset('/images/map2.jp')}}g" alt="map"  class="small-img"></a>
                  </div>
                  <div class="small-img-col">
                    <img src="{{asset('/images/bank-01.webp')}}" alt="map"  class="small-img"></a>
                  </div>
                  <div class="small-img-col">
                    <img src="{{asset('/images/bank.webp')}}" alt="map"  class="small-img"></a>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <p>Bank</p>
                <h1>Bank Of Palestine</h1>
                <h4>By/Ahmad Shammala</h4>
                <h3>Building Details <i class="fa-solid fa-indent fa-2xs"></i></h3>
                <br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore,
                  voluptas. Accusamus fugiat quasi culpa vero doloremque sit sapiente maiores necessitatibus,
                  tempore, repellat quas in commodi ab et tempora fugit quia.</p>
                <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                  <i class="fa fa-download"></i>
                  Download Report
                </button>
                <button type="button" class="btn btn-second btn-icon-text mb-2 mb-md-0">
                  Browse Other File
                </button>
              </div>
            </div>
            <div class="buttons">
              <button type="button" class="btn btn-icon-text btn-facebook">
                <i class="fa-brands fa-facebook-f" data-feather="facebook"></i>
                Facebook
              </button>
              <button type="button" class="btn btn-icon-text btn-whatsUp">
                <i class="fa-brands fa-whatsapp" data-feather="whatsUp"></i>
                WhatsUp
              </button>
              <button type="button" class="btn btn-icon-text btn-telegram">
                <i class="fa-regular fa-paper-plane"></i>
                Telegram
              </button>
              <button type="button" class="btn btn-icon-text btn-outline-copy">
                <i class="fa fa-copy" data-feather="copy"></i>
                Copy File Link
              </button>
            </div>
        </div>
      </div>
      <!-- End Product Details -->
      <!-- Start Related Product -->
      <div class="small-container">
        <div class="row row-2">
          <span class="heading">Related Product</span>
          <span class="para">view more</span>
        </div>
      </div>
      <div class="product">
        <div class="small-container">
          <div class="row">
            <div class="col-4">
              <a href="product.html"><img src="{{asset('/images/bank.webp')}}" alt="map"></a>
              <h4>Bank of Palestine</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>$5000</p>
            </div>
            <div class="col-4">
              <a href="product.html"><img src="{{asset('/images/bank-01.webp')}}" alt="map"></a>
              <h4>Bank of Palestine</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>$5000</p>
            </div>
            <div class="col-4">
              <a href="product.html"><img src="{{asset('/images/bank-01.webp')}}" alt="map"></a>
              <h4>Bank of Palestine</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>$5000</p>
            </div>
            <div class="col-4">
              <a href="product.html"><img src="{{asset('/images/bank.webp')}}" alt="map"></a>
              <h4>Bank of Palestine</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>$5000</p>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('title','Product Details')

