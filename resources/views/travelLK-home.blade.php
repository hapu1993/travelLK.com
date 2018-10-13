@extends('layout.main')
@section('content')

<!-- check availability -->
<div class="home-search-bar">

<p align="center">Latest reviews. Lowest prices in Sri Lanka</p>


<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="col-md-8">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Enter Address, zip, city or airport">
									<span class="form-label">Destination</span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
									<span class="select-arrow"></span>
									<span class="form-label">Guests</span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<select class="form-control">
										<option>0</option>
										<option>1</option>
										<option>2</option>
									</select>
									<span class="select-arrow"></span>
									<span class="form-label">Children</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="date" required>
									<span class="form-label">Check In</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="date" required>
									<span class="form-label">Check out</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-btn">
									<button class="submit-btn">Check availability</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>






<div class="home-content" id="home-content">

  			<div class="homepage-side-adslot" id="homepage-adslot">
							<iframe src="{{asset('banners\travelLKbanner1\index.html')}}" width="160" height="604" frameBorder="0"></iframe>
  			</div>
  			<div class="homepage-side-adslot-left" id="homepage-adslot-left">
					<iframe src="{{asset('banners\sinhalabanner\index.html')}}" width="160" height="604" frameBorder="0"></iframe>
  			</div>
				<div class="app-content" id="app-content">

<div class="top_destinations">
	<div class="destination-title">
					<p>Top Destinations around Sri Lanka (Mid-Year Season)</p>

</div>

			<div class="row1">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="fas fa-map-marker-alt"></i></div>
							<img src="{{asset('img/top_destinations/kandy.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<img class="flag" src="{{asset('img/flag.jpg')}}" width="50px" height="50px"><h2>Kandy</h2>
							<p>Average Price :LKR 7500</p>


							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_2.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="fas fa-map-marker-alt"></i></div>
							<img src="{{asset('img/top_destinations/nuwaraeliya.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<img class="flag" src="{{asset('img/flag.jpg')}}" width="50px" height="50px">
							<h2>Nuwara Eliya</h2>
							<p>Average Price LKR 6700</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="fas fa-map-marker-alt"></i></div>
							<img src="{{asset('img/top_destinations/galle.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<img class="flag" src="{{asset('img/flag.jpg')}}" width="50px" height="50px">
							<h2>Galle</h2>
							<p>Average Price 8000</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>




		</div>
</div>
	<p style="color:black; font-size:30px">Get Some Idea for your next Trip</p>
</div>
  			</div>
@endsection
