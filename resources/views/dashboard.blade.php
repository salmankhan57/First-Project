<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>
  dashboard
  </title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="{{ asset('cssfile/dashboard.css') }}" rel="stylesheet" />
  <link href="{{ asset('cssfile/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <h3 class="jok" style="margin-right: 550px;">Hello {{( $data['one']['name']) }}</h3>  
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html">
                Why Us
              </a>
            </li>
          </ul>
          <div class="user_option">
            <a href="logout">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Logout
              </span>
            </a>
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
            </a>
          </div>
        </div>
      </nav>
    </header>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{url ('pic/edited1.jpg')}}" class="d-block w-100" alt="...">
      <div class="detail-box" style="padding-left: 45px; margin-top:-300px;">
                      <h1 style="font-weight: bold; font-size: 3.5rem; margin-bottom: 10px;">
                        Welcome To Our <br>
                        Store
                      </h1>
                      <p>
                        Sequi perspiciatis nulla  lor reiciendis, rem, tenetur impedit, eveniet non necessitatibus <br>error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse<br>
                      </p>
                      <a href="" style=" display: inline-block;padding: 10px 40px;background-color: #db4566;color: #ffffff;border: 1px solid #db4566;border-radius: 5px;-webkit-transition: all .3s;transition: all .3s;margin-top: 25px; margin-bottom:20px;text-transform: uppercase;">
                        Contact Us
                      </a>
                    </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{url ('pic/edited2.jpeg')}}" class="d-block w-100" alt="...">
      <div class="detail-box" style="padding-left: 45px; margin-top:-300px;">
                      <h1 style="font-weight: bold; font-size: 3.5rem; margin-bottom: 10px;">
                        Welcome To Our <br>
                        Store
                      </h1>
                      <p>
                        Sequi perspiciatis nulla  lor reiciendis, rem, tenetur impedit, eveniet non necessitatibus <br>error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse<br>
                      </p>
                      <a href="" style=" display: inline-block;padding: 10px 40px;background-color: #db4566;color: #ffffff;border: 1px solid #db4566;border-radius: 5px;-webkit-transition: all .3s;transition: all .3s;margin-top: 25px; margin-bottom:20px;text-transform: uppercase;">
                        Contact Us
                      </a>
                    </div>
    </div>
    <div class="carousel-item">
      <img src="{{url ('pic/edited4.jpg')}}" class="d-block w-100" alt="...">
      <div class="detail-box" style="padding-left: 45px; margin-top:-300px;">
                      <h1 style="font-weight: bold; font-size: 3.5rem; margin-bottom: 10px;">
                        Welcome To Our <br>
                        Store
                      </h1>
                      <p>
                        Sequi perspiciatis nulla  lor reiciendis, rem, tenetur impedit, eveniet non necessitatibus <br>error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse<br>
                      </p>
                      <a href="" style=" display: inline-block;padding: 10px 40px;background-color: #db4566;color: #ffffff;border: 1px solid #db4566;border-radius: 5px;-webkit-transition: all .3s;transition: all .3s;margin-top: 25px; margin-bottom:20px;text-transform: uppercase;">
                        Contact Us
                      </a>
                    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
      @foreach($data['two'] as $value)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="{{asset('public/images')}}/{{($value['p_image'])}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                {{($value['p_name'])}}
                </h6>
                <h6>
                  Price
                  <span>
                  ${{($value['p_price'])}}
                  </span>
                </h6>
              </div>
              <div class="new" style="background:none;">
                <span>
                <p class="btn-holder"><a href="{{ route('add.to.cart', $value['id']) }}" class="btn btn-outline-danger">Add cart</a> </p>
                </span>
                <h3>
                <a href="{{ route('ndetails', $value['id']) }}"><i class='bx bx-info-circle'></i></a>
                </h3>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <section class="saving_section ">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="{{url ('pic/saving-img.png')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Best Savings on <br>
                  new arrivals
                </h2>
              </div>
              <p>
                Qui ex dolore at repellat, quia neque doloribus omnis adipisci, ipsum eos odio fugit ut eveniet blanditiis praesentium totam non nostrum dignissimos nihil eius facere et eaque. Qui, animi obcaecati.
              </p>
              <div class="btn-box">
                <a href="#" class="btn1">
                  Buy Now
                </a>
                <a href="#" class="btn2">
                  See More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>online shop</h4>
                        <ul>
                            <li><a href="#">watch</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">dress</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
       </footer>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>