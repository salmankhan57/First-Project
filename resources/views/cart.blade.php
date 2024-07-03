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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>
  Cart
  </title>
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
        <h3 class="jok" style="margin-right: 550px;"></h3>  
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('dashboard') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
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
<body>
<!-- <div class="body-text"> -->
<div class="tb">
@if(session('success'))
        <div class="alert alert-success" style="font-szie:20px; margin-top:50px;">
          {{ session('success') }}
        </div> 
    @endif     
<table id="cart" class="table table-bordered" style="margin-top:100px;">
    <thead>
        <tr>
          
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub Total</th>
            <th>Remove Product</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                 
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('public/images') }}/{{ $details['image'] }}" width="50px" class="img-thumbnail rounded-circle"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">{{ $details['quantity'] }}</td>
                    
                    <td data-th="Subtotal">${{$details['price']*$details['quantity']}}</td>
                    @php $total +=$details['price']*$details['quantity'] @endphp
                    <td class="actions">
                        <a class="style='20px' delete-product"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></a>
                    </td>
                </tr>
            @endforeach
        @endif
        
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/dashboard') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
            </td>
        </tr>
    </tfoot>
</table>
<div class="row">
    <div class="col-md-8 my-md-auto md-3">
            <h5>Get the Best Deals & Offers<h5>
    </div>
                    <div class="col-md-4">
                            <div class="shadow-sm bg-white p-3">
                                <h4>Total
                                <span class="float-end">${{$total}}</span></h4>
                                <hr>
                                @if(count((array) session('cart'))>0)
                <button class="btn btn-danger"><a href="checkout" style="text-decoration:none;color:white;">Checkout</button>
                
                @endif
                            </div>
                    </div>
                </div></div>
<!-- </div> -->
<footer class="footer" style="margin-top:300px; ">
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

   
<script>
   
    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.shopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("rowId"), 
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".delete-product").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
</script>