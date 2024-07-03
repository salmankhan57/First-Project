<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registerform</title>
    <link rel="stylesheet" href="{{ asset('cssfile/register.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="image">
        <div class="navigation">
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="{{ url('adlogin') }}">Admin</a></li>
                        <li><a href="{{ url('login') }}">Login</a></li>
                    </ul>
                </nav>
            </div>
            <img src="{{url ('pic/pix.jpg')}}" width="100%">
        </div>
        <div class="wrapper">
            <form action="{{ url('/reg-data') }}" method="POST">
                @csrf
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text" placeholder="Name" required name="name"><i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Email" required name="email"><i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required name="password"><i class='bx bxs-lock-alt'></i>
                </div>
                <input type="submit" class="btn" value="Register">
                <div class="register-link">
                    <p>Already have an account?<a href="{{ url('login') }}">  Login</a></p>
                </div>
            </form>
        </div>
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