<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('ecomerce-plant-store.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="fixed-bg img-bg-4">
        <div class="form-bg">
            <div class="form">
                <form action="{{url('/submit_order')}}" method="post">
                    @csrf
                    <div class="special-form">
                        <span>FOR SPECAIL REQUESTS & ORDERS</span>
                    </div>
                    <div class="label row g-3">
                        <div class="col form-group">
                          <label for="exampleInputfirst" class="form-label mb-0">First name*</label>
                          <input name="first_name" type="text" class="form-control" aria-label="First name" required>
                        </div>
                        <div class="col">
                            <label for="exampleInputlast" class="form-label mb-0">Last name*</label>
                          <input name="last_name" type="text" class="form-control" aria-label="Last name" required> 
                        </div>
                      </div>
                    <div class="email">
                        <label for="exampleInputEmail1" class="form-label mb-0">Email address*</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <label for="exampleInputphone" class="form-label mb-0">Phone*</label>
                        <input name="phone" type="number" class="form-control" id="exampleInputphone" aria-describedby="phoneHelp" required>
                        <label for="exampleFormmessage" class="form-label mb-0">Message</label>
                        <textarea required name="message" class="form-control" id="exampleFormmessage" rows="3" placeholder aria-required="false"></textarea>
                        <button type="submit" class="form-control mt-3 border-0">Submit Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>