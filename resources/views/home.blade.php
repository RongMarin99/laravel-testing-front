
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('ecomerce-plant-store.css')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="grid">
    <section class="header">
        <div class="row search mx-0 align-items-center">
            <div class="col-6 px-0" style="border-right: 1px solid rgb(57, 111, 92);">
                <form action="" class="d-flex">
                    <button><i class="fa-solid fa-magnifying-glass "></i></button>
                    <input type="text" id="search" placeholder="Search...">
                </form>
            </div>
            <div class="col-6 login d-flex align-items-center justify-content-end px-0">
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        <div class="row meun d-flex align-items-center justify-content-between mx-0">
            <div class="col-lg-3 col-md-5 col-sm-5 logo px-0">
                <a href="#">
                    <i class="fa-brands fa-pagelines"></i>
                    Plant Physical Touch
                </a>
            </div>
            <div class="col-3 col-lg-4 px-0">
                <ul class="navbar m-0" id="nav">
                    <li><a class="active" href="ecomerce-plant-store.html">Home</a></li>
                    <li><a href="ecomerce-shop.html">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li id="lg-bag"><a href="{{url('/add_to_card')}}"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <a href="#" id="close" class="d-lg-none"><i class ="fa-sharp fa-solid fa-xmark"></i></a>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-1 px-0">
                <div class="slideshow ">
                    <div class="deliver d-flex justify-content-end">
                        <span>We Deliver to Your Doorste</span>
                    </div>
                    <div class="deliver d-flex justify-content-end">
                        <span>Call Us Now! 096-936-3412</span>
                    </div>
                </div>
            </div>
            <div class="col-1 mobile d-lg-none pe-0" id="bar">
                <a href="#"><i class="fa-solid fa-bag-shopping ps-0"></i></a>
                <i class="fa-solid fa-outdent"></i>
            </div>
        </div>           
    </section>      
    <div class="main-content">
        <div class="fixed-big-bg img-bg-1">
            <div class="logo-2">
                <i class="fa-brands fa-pagelines"></i>
                Plant Physical Touch
            </div>
            <div class="title-2">
                <p>BEAUTIFUL NATURE IN MIND</p>
                <button>Shop Now</button>               
            </div>
        </div>
        <section class="feature-scrolling-bg cd-color-2">
            <div class="feature-container row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2">
                <div class="fe-box col">
                    <img src="../feature/fe(1).jpg" alt="" width="100%">
                    <h6>Free Shopping</h6>
                </div>
                <div class="fe-box col">
                    <img src="../feature/fe(2).jpg" alt="" width="100%">
                    <h6>Online Order</h6>
                </div>
                <div class="fe-box col">
                    <img src="../feature/fe(3).jpg" alt="" width="100%">
                    <h6>Save Money</h6>
                </div>
                <div class="fe-box col">
                    <img src="../feature/fe(4).png" alt="" width="100%">
                    <h6>Promotions</h6>
                </div>
                <div class="fe-box col">
                    <img src="../feature/fe(5).png" alt="" width="100%">
                    <h6>Happy Sell</h6>
                </div>
                <div class="fe-box col">
                    <img src="../feature/fe(6).png" alt="" width="100%">
                    <h6>F24/7 Support</h6>
                </div>
            </div> 
        </section> <!-- cd-scrolling-bg -->
        <div class="fixed-bg img-bg-2"></div> <!-- cd-fixed-bg -->
        <section class="feature-scrolling-bg cd-color-3">
            <div class="product">
                <h2>Featured Products</h2>
                <p>Popular small plants for summer</p>
                <div class="row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2">
                    @foreach ($data as $item)
                        <div class="col pro-container">
                            <div class="pro">
                                <a href="./shoproduct SIS.html">
                                    <img src="http://127.0.0.1:8000/image/{{$item['image']}}" alt="" width="100%">
                                </a>
                                <div class="name-plant">
                                    <h5>
                                        {{$item['name']}}
                                    </h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <form action="{{url('/add_to_card')}}" method="post">
                                        @csrf
                                        <input type="number" value="1" name='qty'>
                                        <input type="hidden" value="{{$item['id']}}" name="product_id">
                                        <h4>${{$item['price']}}</h4>
                                        <button type="submit" >
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    @endforeach  
                </div>
            </div>                     
        </section>
        <div class="fixed-bg img-bg-3"></div> <!-- cd-fixed-bg -->
        <section class="feature-scrolling-bg cd-color-3">
            <div class="product">
                <h2>Plants for Autumn</h2>
                <p>Plants grown in autumn</p>
                <div class="row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2">
                    @foreach ($data as $item)
                    <div class="col pro-container">
                        <div class="pro">
                            <a href="./shoproduct SIS.html">
                                <img src="http://127.0.0.1:8000/image/{{$item['image']}}" alt="" width="100%">
                            </a>
                            <div class="name-plant">
                                <h5>
                                    {{$item['name']}}
                                </h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <form action="{{url('/add_to_card')}}" method="post">
                                    @csrf
                                    <input type="number" value="1" name='qty'>
                                    <input type="hidden" value="{{$item['id']}}" name="product_id">
                                    <h4>${{$item['price']}}</h4>
                                    <button type="submit" >
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>  
                @endforeach 
                </div>                                  
            </div>                                 
        </section>		
        <div class="fixed-bg img-bg-4">
            <div class="form-bg">
                <div class="form">
                    <form action="">
                        <div class="special-form">
                            <span>FOR SPECAIL REQUESTS & ORDERS</span>
                        </div>
                        <div class="label row g-3">
                            <div class="col">
                                <label for="exampleInputfirst" class="form-label mb-0">First name*</label>
                              <input type="text" class="form-control" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="exampleInputlast" class="form-label mb-0">Last name*</label>
                              <input type="text" class="form-control" aria-label="Last name">
                            </div>
                          </div>
                        <div class="email">
                            <label for="exampleInputEmail1" class="form-label mb-0">Email address*</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputphone" class="form-label mb-0">Phone*</label>
                            <input type="email" class="form-control" id="exampleInputphone" aria-describedby="phoneHelp">
                            <label for="exampleFormmessage" class="form-label mb-0">Message</label>
                            <textarea class="form-control" id="exampleFormmessage" rows="3" placeholder aria-required="false"></textarea>
                            <button class="form-control mt-3 border-0">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-1">
    <div class="col logo px-0">
        <a href="#">
            <i class="fa-brands fa-pagelines"></i>
            Plant Physical Touch
        </a>
        <h4>Contant</h4>
        <p><strong>Address: </strong>500 Terry Francois Street San Francisco</p>
        <p><strong>Phone: </strong>123-456-7890</p>
        <p><strong>Hours: </strong>7am - 10pm, Mon-Sat</p>
        <div class="follow mt-2">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-telegram"></i>
                <i class="fa-brands fa-pinterest-p"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </div>
    </div>
    <div class="col about">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivvery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>
    <div class="col acc">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App store or Google Play</p>
        <div class="images mb-2">
            <img src="../imge-advertisement/app-removebg-preview.png" alt="" width="170px" height="56px">
            <img src="../imge-advertisement/images-removebg-preview.png" alt="" width="170px" height="60px">                        
        </div>
        <p>Secured Payment Gateways</p>
        <img src="../imge-advertisement/Logos-01-removebg-preview.png" alt="" width="250px">
    </div>
</footer>
</body>
</html>





