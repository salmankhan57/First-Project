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
  Checkout
  </title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="{{ asset('cssfile/login.css') }}" rel="stylesheet" />
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
        <h3 class="jok" style="margin-right: 950px;"></h3>  
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html">
                
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
<div class="wrapper" style="background:black; color:white; right:450px;">
            <form action="" method="POST">
                @csrf
                <h1>Checkout</h1>
                <div class="input-box">
                    <input type="text" placeholder="Name" required name="">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Email" required name="email"><i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Address" required name="password">
                </div>
                <div class="form-group">
    <label>Payment Method:</label>&nbsp
   <input type="radio" id="mycheckbox" name="fav_language" value="HTML" required>
   <label for="html">Card</label> &nbsp
   <input type="radio" id="mycheckbox2" name="fav_language" value="CSS" required>
   <label for="css">Cash on Delivery</label><br>
   </div>
   <br>
   <div class="form-group" id="inputs" style="display;none;">
      <input type="Number" class="form-control" id="form-input" placeholder="Card Number" >
   </div>
   <br>
   <br>
   <br>
                <button type="submit" class="btn" ><a href="{{url('/confirm')}}">Proceed</a></button>
                <div class="register-link">
                    <p></p>
                </div>
            </form>
        </div>
        <footer class="footer" style="margin-top:900px">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
     $(document).ready(function(){
        function my_toggle_func() { 
        if (document.getElementById("mycheckbox").checked) {
                document.getElementById("inputs").style.display = 'block';
        } else {
                document.getElementById("inputs").style.display = 'none';
        }
}

document.getElementById("mycheckbox").onclick = my_toggle_func;
document.getElementById("mycheckbox2").onclick = my_toggle_func;

  });
</script>
