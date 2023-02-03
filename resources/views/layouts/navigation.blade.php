

    <nav class="navbar navbar-expand-lg bg-info bg-opacity-10"  >
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="#">MUL'Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="mx-auto" style="width: 200px;">
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('produk')}}">Product</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('checkout')}}">Checkout</a>
            </li>
            
        </ul>
        <!-- </div>    -->
    </div>
    <div>
        <a href="{{route('login')}}"><button type="button" class="btn btn-primary">Register</button></a>
        <a href="{{route('register')}}"><button type="button" class="btn btn-outline-info">Login</button></a>

    </div>
    </div>
    </nav>  


