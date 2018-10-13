<html>
@include('layout.head')

<!-- nav bar begining -->
<!-- Ceated and Developed By A.L Hapuarachchi
All Rights Reseived (c) TravellerLK.com -->

<div class="travelLK-navbar">
<div class="topnav" id="myTopnav">
  <a href="#home" class="active"><img src="{{asset('img/travellerLKlogo.png')}}"></a>

  <a href="#news"><i class="fas fa-map-marker-alt"></i> Places</a>
  <a href="#contact"><i class="fas fa-warehouse"></i> Vacation Rentals</a>
  <a href="#about"><i class="fas fa-building"></i> Apartments</a>

  <a href="#about"><i class="fas fa-home"></i> Homestays</a>
  <a href="#about"><i class="fas fa-hotel"></i> Vacation Homes</a>
  <a href="#about"><i class="fas fa-plane"></i> Internal Flights</a>
  <a href="#about"><i class="fas fa-taxi"></i> Cabs</a>

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

<!-- end nav bar home page -->
<body>
  


@yield('content')
<!-- footer start -->

<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">

				<img src="{{asset('img/travellerLKlogo.png')}}">

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">TravellerLK.com &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Kossingala</span> Pitigala, Galle,Sri Lanka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+94 71 60 99 089</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="www.travellerlk.com">support@travellerlk.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About TravellerLK.com</span>
					Best Sri Lanka Travelling Guide and online booking web Site.
				</p>

				<div class="footer-icons">

          <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>

<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>

				</div>

			</div>

		</footer>




<!-- end footer -->


</body>
</html>
