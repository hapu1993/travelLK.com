<html>
@include('layout.head')

<body>
  <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://www.jssor.com/index.html">TravelLK.com</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.jssor.com/index.html">Home</a></li>
                            <li><a href="https://www.jssor.com/tutorial/index.html">Tutorial</a></li>
                            <li><a href="https://www.jssor.com/help/index.html">Help</a></li>
                            <li><a href="https://www.jssor.com/demos/index.html">Demos</a></li>
                            <li><a href="https://www.jssor.com/skins/index.html">Skins</a></li>
                            <li><a href="https://www.jssor.com/development/index.html">Development</a></li>
                            <li><a href="https://www.jssor.com/download.html">Download</a></li>
                            <li><a href="https://www.jssor.com/support.html">Support</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div style="min-height: 50px;">
     <!-- Jssor Slider Begin -->

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
     </style>
     <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
     top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
         <!-- Loading Screen -->
         <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
             <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
         </div>

         <!-- Slides Container -->
         <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
             <div>
                 <img data-u="image" src="../img/gallery/1300x500/001.jpg" />
             </div>
             <div>
                 <img data-u="image" src="../img/gallery/1300x500/002.jpg" />
             </div>
             <div>
                 <img data-u="image" src="../img/gallery/1300x500/003.jpg" />
             </div>
         </div>

         <!--#region Bullet Navigator Skin Begin -->
         <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
         <style>
             .jssorb031 {position:absolute;}
             .jssorb031 .i {position:absolute;cursor:pointer;}
             .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
             .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
             .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
             .jssorb031 .i.idn {opacity:.3;}
         </style>
         <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
             <div data-u="prototype" class="i" style="width:16px;height:16px;">
                 <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                     <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                 </svg>
             </div>
         </div>
         <!--#endregion Bullet Navigator Skin End -->

         <!--#region Arrow Navigator Skin Begin -->
         <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
         <style>
             .jssora051 {display:block;position:absolute;cursor:pointer;}
             .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
             .jssora051:hover {opacity:.8;}
             .jssora051.jssora051dn {opacity:.5;}
             .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
         </style>
         <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
             <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                 <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
             </svg>
         </div>
         <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
             <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                 <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
             </svg>
         </div>
         <!--#endregion Arrow Navigator Skin End -->
     </div>
     <!-- Jssor Slider End -->
 </div>

 <!-- Marketing messaging and featurettes
 ================================================== -->
 <!-- Wrap the rest of the page in another container to center all the content. -->

 <div class="container marketing">

     <hr class="featurette-divider">

     <div class="row featurette">
         <div class="col-md-7">
             <h2 class="featurette-heading">This page runs <a href="http://getbootstrap.com" target="_blank" rel="nofollow">Bootstrap</a> with Jssor Slider.</h2>
             <p class="lead">Use Jssor Slider as a component of Bootstrap is extremely easy. Given a carousel you worked out, to integrate it with Bootstrap, you can just copy javascript and html code and paste it into your page. This page is a simple demo, please view source of this page or download <a href="https://www.jssor.com/download-bootstrap-carousel-slider-example.html">Bootstrap Carousel Slider Example</a>.</p>
         </div>
         <div class="col-md-5">
             <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
         </div>
     </div>

     <hr class="featurette-divider">

     <div class="row featurette">
         <div class="col-md-5">
             <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
         </div>
         <div class="col-md-7">
             <h2 class="featurette-heading">Javascript Code</h2>
             <div class="lead" style="background-color:#f0f0f0; border: 1px dashed #000; white-space: nowrap;">
                 <pre style="margin:0px;">
&lt;script type="text/javascript" src="../js/jssor.slider.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
 jQuery(document).ready(function ($) {
     var options = {
         ..
     };

     var jssor_slider1 = new $JssorSlider$("slider1_container", options);
     ...
 });
&lt;/script&gt;</pre>
             </div>
         </div>
     </div>

     <hr class="featurette-divider">

     <div class="row featurette">
         <div class="col-md-7">
             <h2 class="featurette-heading">HTML Code</h2>
             <div class="lead" style="background-color:#f0f0f0; border: 1px dashed #000; white-space: nowrap;">
                 <pre style="margin:0px;">
&lt;div style="min-height: 50px;"&gt;
 &lt;!-- Jssor Slider Begin --&gt;
 &lt;div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 980px; height: 380px; overflow: hidden;"&gt;
     ...
 &lt;/div&gt;
 &lt;!-- Jssor Slider End --&gt;
&lt;/div&gt;</pre>
             </div>
         </div>
         <div class="col-md-5">
             <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
         </div>
     </div>

     <hr class="featurette-divider">

     <!-- /END THE FEATURETTES -->
     <!-- FOOTER -->
     <footer>
         <p class="pull-right"><a href="#">Back to top</a></p>
         <p>&copy; Jssor Slider 2009 - 2016. &middot; <a href="#">Privacy</a> &middot; </p>
     </footer>

 </div><!-- /.container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="../js/jquery-1.9.1.min.js"></script>
 <script src="bootstrap.min.js"></script>
 <script src="docs.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="ie10-viewport-bug-workaround.js"></script>

 <!-- jssor slider scripts-->
 <script type="text/javascript" src="../js/jssor.slider.min.js"></script>
 <script>
     jQuery(document).ready(function ($) {

         var options = {
             $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
             $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
             $Idle: 4000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
             $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

             $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
             $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
             $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
             $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
             //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
             //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
             $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
             $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
             $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
             $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

             $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                 $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                 $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                 $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                 $Orientation: 1                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
             },

             $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                 $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                 $ChanceToShow: 2                                 //[Optional] Steps to go for each navigation request, default value is 1
             }
         };

         var jssor_slider1 = new $JssorSlider$("slider1_container", options);

         //responsive code begin
         //you can remove responsive code if you don't want the slider scales while window resizing
         function ScaleSlider() {
             var bodyWidth = document.body.clientWidth;
             if (bodyWidth)
                 jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
             else
                 window.setTimeout(ScaleSlider, 30);
         }
         ScaleSlider();

         $(window).bind("load", ScaleSlider);
         $(window).bind("resize", ScaleSlider);
         $(window).bind("orientationchange", ScaleSlider);
         //responsive code end
     });
 </script>
</body>

</html>
