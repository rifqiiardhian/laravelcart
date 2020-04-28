<div class="topnav" id="myTopnav">
    <a href="{{ url('/') }}">LARAPOS WEB</a>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/product') }}">Product</a>
    @if(empty(Session::get('role') == 2))
    <a href="{{ url('/login') }}">Login</a>
    @else
    <a href="{{ url('/logout') }}">Logout</a>
    @endif
    <a href="{{ url('/shop/cart') }}" class="cart-icon float-right"><span class="badge badge-light">{{ $jumlahcart }}</span><span class="fa fa-shopping-cart"></span></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
