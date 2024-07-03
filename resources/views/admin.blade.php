<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="{{ asset('cssfile/dashboard.css') }}" rel="stylesheet" />
  <link href="{{ asset('cssfile/responsive.css') }}" rel="stylesheet" />  
</head>
<div class="hero_area">
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <h3 class="jok" style="margin-right: 800px;">Hello {{( $data['one']['name']) }}</h3>  
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
            <a href="adlogout">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Logout
              </span>
            </a>
          </div>
        </div>
      </nav>
    </header>
</div>
<!-- {{-- add new product modal start --}} -->
<div class="modal fade" id="addproductModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_product" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="p_name">Product Name</label>
              <input type="text" name="p_name" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="col-lg">
              <label for="p_price">Price</label>
              <input type="text" name="p_price" class="form-control" placeholder="Price" required>
            </div>
          </div>
          <div class="my-2">
            <label for="p_des">Description</label>
            <input type="textarea" name="p_des" class="form-control" placeholder="Description" required>
          </div>
          <div class="my-2">
            <label for="p_image">Select Image</label>
            <input type="file" name="p_image" class="form-control" required>
          </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_product_btn" class="btn btn-primary" data-bs-dismiss="modal">Add Product</button>
        </div>
      </form>
    </div>
  </div>
</div>

 <!-- {{-- add new product modal end --}} -->

 <!-- {{-- edit product modal start --}} -->
<div class="modal fade" id="editproductModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_product" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="p_id" id="p_id">
        <input type="hidden" name="p_image" id="p_image">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="p_name">Product Name</label>
              <input type="text" name="p_name" id="p_name" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="col-lg">
              <label for="p_price">Price</label>
              <input type="text" name="p_price" id="p_price" class="form-control" placeholder="Price" required>
            </div>
          </div>
          <div class="my-2">
            <label for="p_des">Description</label>
            <input type="textarea" name="p_des" id="p_des" class="form-control" placeholder="Description" required>
          </div>
          <div class="my-2">
            <label for="p_image">Select Image</label>
            <input type="file" name="p_image" id="p_image" class="form-control" required>
          </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_product_btn" class="btn btn-primary" data-bs-dismiss="modal">Add Product</button>
        </div>
      </form>
    </div>
  </div>
</div>
 <!-- {{-- edit product modal start --}} -->

<body class="bg-light">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-dark d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage Products</h3>
            <button type="submit" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addproductModal"><i
                class="bi-plus-circle me-2"></i>Add New Product</button>
          </div>
          <div class="card-body" id="show_all_products">
            <h1 class="text-center text-secondary my-5">Loading...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer" style="margin-top:300px;">
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
          $(function() {

// add new employee ajax request
$("#add_product").submit(function(e) {
  e.preventDefault(); 
  const fd = new FormData(this);
  $("#add_product_btn").text('Adding...');
  $.ajax({
    url: '{{ route('store') }}',
    method: 'post',
    data: fd,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function(response) {
      if (response.status == 200) {
        Swal.fire(
          'Added!',
          'Product Added Successfully!',
          'success'
        )
        fetchAllproducts();
            }
            $("#add_product_btn").text('Add Product');
            $("#add_product")[0].reset();
            $("#addproductModal").modal('hide');
            
          }
        });
      });

      // edit product ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('edit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#p_name").val(response.p_name);
            $("#p_price").val(response.p_price);
            $("#p_des").val(response.p_des);
            $("#p_image").html(
              `<img src="public/images/${response.p_image}" width="100" class="img-fluid img-thumbnail">`);
            $("#p_id").val(response.id);
            $("#p_image").val(response.p_image);
          }
        });
      });

       // update product ajax request
       $("#edit_product").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_product_btn").text('Updating...');
        $.ajax({
          url: '{{ route('update') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Product Updated Successfully!',
                'success'
              )
              fetchAllproducts();
            }
            $("#edit_product_btn").text('Update Product');
            $("#edit_product")[0].reset();
            $("#editproductModal").modal('hide');
          }
        });
      });

       // delete employee ajax request
       $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your Product has been deleted.',
                  'success'
                )
                fetchAllproducts();
            }
            });
          }
        })
      });
      // fetch all products ajax request
      fetchAllproducts();

      function fetchAllproducts() {
        $.ajax({
          url: '{{ route('fetchAll') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_products").html(response);
            $("table").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>