<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('add_to_cart.css')}}">
    <title>Document</title>
    <style>
        figure img{
            width: 100%;
            height: auto
        }
    </style>
</head>
<body>
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
                <li><a class="active" href="{{url('/home')}}">Home</a></li>
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
        
        <div class="row mt-4">
            @foreach ($cart as $item)
                <div class="col-3">
                    <div class="card p-2">
                        <figure>
                            <img src="http://127.0.0.1:8000/image/{{$item['image']}}" alt="">
                        </figure>
                        <div class="p-2">
                            <span class="product_price float-left">${{$item['price']}}</span>
                            <span class="product_name float-right">{{$item['name']}}</span>                                                                
                        </div> 
                        <form action="{{url('/update_cart_qty')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="number" class="form-control" value="{{$item['qty']}}" name="qty">
                            </div> 
                        <div>
                                <input type="hidden" value="{{$item['cart_id']}}" name="id">
                                <span>Total: ${{ ($item['qty']*$item['price']) }}</span>
                                <button type="submit" class="btn mt-2 btn-primary btn-block">update qty</button>
                            </form>
                        </div>
                    </div>	
                </div>
            @endforeach
            
        </div>

        <div class="float-left ml-3 mt-3">
            <a href="{{url('/checkout')}}" class="btn btn-success">
                Checkout
            </a>
        </div>

    </div>
</body>
</html>