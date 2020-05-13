<div class="topnav" id="myTopnav">
    @if(Session::get('role') == 1))
    <a href="{{ url('/a/home') }}">LARAPOS WEB</a>
    <a href="{{ url('/a/home') }}">Home</a>
    @else
    <a href="{{ url('/') }}">LARAPOS WEB</a>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/product') }}">Product</a>
    @endif
    @if(empty(Session::get('role')))
    <a href="{{ url('/login') }}">Login</a>
    @else
    <a href="{{ url('/logout') }}">Logout</a>
    @endif
    @if(Session::get('role') != 1))
    <a href="{{ url('/shop/cart') }}" class="cart-icon float-right"><span class="badge badge-light">{{ $jumlahcart }}</span><span class="fa fa-shopping-cart"></span></a>
    @endif
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
