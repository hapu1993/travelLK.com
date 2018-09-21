<html>
@include('layout.head')

<!-- nav bar begining -->
<div class="travelLK-navbar">
<div class="topnav" id="myTopnav">
  <a href="#home" class="active"><img src="{{asset('img/travelLKlogo.png')}}"</a>

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
  <div class="ticker-container">
    <div class="ticker-caption">
      <p>Best Deals <i class="fas fa-laptop"></i></p>
    </div>
    <ul>
      <div>
        <li><span>Going on vacation soon? Save 15% or more with Mid-Year Deals ::: TravelLK.com     - <a href="#">read more</a></span></li>
      </div>
      <div>
        <li><span>Sign in to get discounts of up to 50%
Reveal all Secret Deals ::: TravelLK.com - <a href="#">read more</a></span></li>
      </div>
      <div>
        <li><span>Get inspiration for your next trip ::: TravelLK.com - <a href="#">read more</a></span></li>
      </div>
      <div>
        <li><span>Find Deals for Any Season
From cozy country homes to funky city apartments ::: TravelLK.com -  <a href="#">read more</a></span></li>
      </div>
      <div>
        <li><span>More than just hotels…discover pure comfort with homes & apartments ::: TravelLK.com -<a href="#">read more</a></span></li>
      </div>
    </ul>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="{{asset('js/newsline/ticker.js')}}"></script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</div>



@yield('content')


</body>
</html>
