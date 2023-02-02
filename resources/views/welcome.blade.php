
<x-app-layout>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('asset/slider1.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('asset/slider2.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('asset/slider2.png') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    </div>


    <div class="d-flex my-4 mx-5">
    <div class="card mt-3 mx-3" style="width: 15rem;">
  <img src="{{ asset('asset/sepatu.png') }}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title ml" style="width:100px;">Sepatu</h5>
  </div>

</div>
<div class="card mt-3 mx-4" style="width: 15rem;">
  <img src="{{ asset('asset/laptop.png') }}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title ml" style="width:100px;">Laptop</h5>
  </div>
</div>

<div class="card mt-3 mx-4" style="width: 15rem;">
  <img src="{{ asset('asset/gitar.png') }}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title ml" style="width:100px;">Hobi</h5>
  </div>
</div>

<div class="card mt-3 mx-4" style="width: 15rem;">
  <img src="{{ asset('asset/pakaian.png') }}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title ml" style="width:100px;">Pakaian</h5>
  </div>
</div>

<div class="card mt-3 mx-4" style="width: 15rem;">
  <img src="{{ asset('asset/handphone.png') }}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title ml" style="width:120px;">Handphone</h5>
  </div>
</div>
    </div>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">New Fashion, New You</h1>
    <p class="lead">Selalu Up To date terhadap fashion dan elektronik untuk selalu update dirimu menjadi trendy</p>
  </div>
</div>
</x-app-layout>
<x-footer-layout/>


