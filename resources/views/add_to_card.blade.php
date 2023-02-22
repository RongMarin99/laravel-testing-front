<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('add_to_cart.css')}}">
    <title>Document</title>
</head>
<body>
    {{$data}}
    <div id="wrapper">
        <div class="cart-icon-top">
        </div>
        <div class="cart-icon-bottom">
        </div>
        
        <div id="checkout">
            <button type="button"> CHECKOUT</button>
        </div>
        <div class="meun">
            <ul class="navbar m-0" id="nav">
                <li><a class="active" href="ecomerce-plant-store.html">Home</a></li>
                <li><a href="ecomerce-shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close" class="d-lg-none"><i class ="fa-sharp fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div class="header">
            <div class="logo">
                <a href="#">
                    <i class="fa-brands fa-pagelines"></i>
                    Plant Physical Touch
                </a>
            </div>	
        </div>
        <div id="sidebar">
            <h3>CART</h3>
            <div id="cart">
                <span class="empty">No items in cart.</span>       
            </div>
        </div>
        
        <div id="grid-selector">
               <div id="grid-menu">
                      View:
                   <ul>           	   
                       <li class="largeGrid"><a href=""></a></li>
                       <li class="smallGrid"><a class="active" href=""></a></li>
                   </ul>
               </div>
        </div>
        
        <div id="grid">
            @foreach ($data as $item)
                <div class="product">
                    <div class="info-large">
                        <div class="price-big">
                            <span>$43</span> $39
                        </div>
                        <button class="add-cart-large">Add To Cart</button>                                                   
                    </div>
                    <div class="make3D">
                        <div class="product-front">
                            <div class="shadow"></div>
                            <img src="http://127.0.0.1:8000/image/{{$item['image']}}" alt="">
                            <div class="image_overlay"></div>
                            <div class="add_to_cart">Add to cart</div>
                            <div class="view_gallery">View gallery</div>                
                            <div class="stats">        	
                                <div class="stats-container">
                                    <span class="product_price">${{$item['price']}}</span>
                                    <span class="product_name">{{$item['name']}}</span>                                                                
                                </div>                         
                            </div>
                        </div>
                        <div class="product-back">
                            <div class="shadow"></div>
                            <div class="carousel">
                                <ul class="carousel-container">
                                    <li>
                                        <img src="../Plants/hyacinth (10).webp" alt="" width="100%">
                                        <div class="carousel_name">Hyacinth orientalis'Anna Marie'(Dutch Hyacinth)</div>
                                    </li>
                                    <li>
                                        <img src="../Plants/hyacinth (15).webp" alt="" width="100%">
                                        <div class="carousel_name">Hyacinth orientalis'Pink Pearl'(Dutch Hyacinth)</div>
                                    </li>
                                    <li>
                                        <img src="../Plants/hyacinth (11).webp" alt="" width="100%">
                                        <div class="carousel_name">Hyacinth orientalis'Miss Saigon'(Dutch Hyacinth)</div>
                                    </li>
                                </ul>
                                <div class="arrows-perspective">
                                    <div class="carouselPrev">
                                        <div class="y"></div>
                                        <div class="x"></div>
                                    </div>
                                    <div class="carouselNext">
                                        <div class="y"></div>
                                        <div class="x"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-back">
                                <div class="cy"></div>
                                <div class="cx"></div>
                            </div>
                        </div>	  
                    </div>	
                </div>
            @endforeach
            
        </div>
</body>
</html>