@extends('layout.main')
@section('content')

<div class="app-content" id="app-content">

  <!-- Begining of the slider -->
  <script src="{{asset('js/home_page_slider/jssor.slider.min.js')}}" type="text/javascript"></script>
      <script type="text/javascript">
          jssor_1_slider_init = function() {

              var jssor_1_SlideshowTransitions = [
                {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
                {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
                {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
                {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
                {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
              ];

              var jssor_1_options = {
                $AutoPlay: 1,
                $SlideshowOptions: {
                  $Class: $JssorSlideshowRunner$,
                  $Transitions: jssor_1_SlideshowTransitions,
                  $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                  $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                  $Class: $JssorBulletNavigator$
                }
              };

              var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

              /*#region responsive code begin*/

              var MAX_WIDTH = 980;

              function ScaleSlider() {
                  var containerElement = jssor_1_slider.$Elmt.parentNode;
                  var containerWidth = containerElement.clientWidth;

                  if (containerWidth) {

                      var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                      jssor_1_slider.$ScaleWidth(expectedWidth);
                  }
                  else {
                      window.setTimeout(ScaleSlider, 30);
                  }
              }

              ScaleSlider();

              $Jssor$.$AddEvent(window, "load", ScaleSlider);
              $Jssor$.$AddEvent(window, "resize", ScaleSlider);
              $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
              /*#endregion responsive code end*/
          };
      </script>
      <style>
          /* jssor slider loading skin spin css */
          .jssorl-009-spin img {
              animation-name: jssorl-009-spin;
              animation-duration: 1.6s;
              animation-iteration-count: infinite;
              animation-timing-function: linear;
          }

          @keyframes jssorl-009-spin {
              from {
                  transform: rotate(0deg);
              }

              to {
                  transform: rotate(360deg);
              }
          }


          .jssorb053 .i {position:absolute;cursor:pointer;}
          .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
          .jssorb053 .i:hover .b {fill-opacity:.7;}
          .jssorb053 .iav .b {fill-opacity: 1;}
          .jssorb053 .i.idn {opacity:.3;}

          .jssora093 {display:block;position:absolute;cursor:pointer;}
          .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
          .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
          .jssora093:hover {opacity:.8;}
          .jssora093.jssora093dn {opacity:.6;}
          .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
      </style>
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
          <!-- Loading Screen -->
          <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
              <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('svg/home_page_slider/loading/static-svg/spin.svg')}}" />
          </div>
          <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
              <div>
                  <img data-u="image" src="{{asset('img/home_page_slider/gallery/980x380/001.jpg')}}" />
              </div>
              <div>
                  <img data-u="image" src="{{asset('img/home_page_slider/gallery/980x380/002.jpg')}}" />
              </div>
              <div>
                  <img data-u="image" src="{{asset('img/home_page_slider/gallery/980x380/003.jpg')}}" />
              </div>
              <div>

                  <img data-u="image" src="{{asset('img/home_page_slider/gallery/980x380/004.jpg')}}" />
              </div>
              <div>
                  <img data-u="image" src="{{asset('img/home_page_slider/gallery/980x380/005.jpg')}}" />
              </div>
              <div>

                  <img data-u="image" src="{{asset('img/home_page_slider/gallery/980x380/006.jpg')}}" />
              </div>
              <!-- <div style="background-color:#ff7c28;">
                  <div style="position:absolute;top:50px;left:50px;width:450px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">Photos in this slider are to demostrate jssor slider,<br />
                      which are not licensed for any other purpose.
                  </div>
              </div> -->
          </div>
          <!-- Bullet Navigator -->
          <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
              <div data-u="prototype" class="i" style="width:16px;height:16px;">
                  <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                      <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                  </svg>
              </div>
          </div>
          <!-- Arrow Navigator -->
          <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
              <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                  <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                  <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
              </svg>
          </div>
          <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
              <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                  <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                  <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
              </svg>
          </div>
      </div>
      <script type="text/javascript">jssor_1_slider_init();</script>

      <!-- End of the Slider -->
      <div class="container" float="left">

    			<div class="row main">

    				<div class="main-login main-center">
              <div class="blinking-div" id="blinking-div" align="right">
              <a href="#" class="blinking" id="blinking"><span class="label label-warning"><span class="blink">Click for best deals</span></span></a>
            </div>
            <h5>Find Deals for Any Season In Sri Lanka</h5>
    					<form class="" method="post" action="#">

    						<div class="form-group">
    							<label for="name" class="cols-sm-2 control-label">Destination</label>
    							<div class="cols-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="name" id="name"  placeholder="Where are you going?"/>
    								</div>
    							</div>
    						</div>

    						<div class="form-group">
    							<label for="email" class="cols-sm-2 control-label">Check-In</label>
    							<div class="cols-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
    								</div>
    							</div>
    						</div>

    						<div class="form-group">
    							<label for="username" class="cols-sm-2 control-label">Check-out</label>
    							<div class="cols-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
    								</div>
    							</div>
    						</div>

    						<div class="form-group">
    							<label for="password" class="cols-sm-2 control-label">Number of Members</label>
    							<div class="cols-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
    									<input type="password" class="form-control" name="password" id="password"  placeholder="No of Adults No of Childs"/>
    								</div>
    							</div>
    						</div>



    						<div class="form-group ">
    							<a href="https://deepak646.blogspot.com/" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Search</a>
    						</div>

    					</form>
    				</div>
    			</div>
    		</div>

<!-- page bottom couresel -->

<div class='row'>
    <div class='col-md-8 col-md-offset-2'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});



</script>




<!-- end page bottom couresel -->

</div>
<script type="text/javascript">

$(function() {

  blinking($(".blink"));

})($);

function blinking(elm) {
    timer = setInterval(blink, 500);
    blink();
    function blink() {
        elm.fadeOut(500, function() {
        elm.fadeIn(500);
    });
    }
}

</script>
@endsection
