@extends('layout.main')
@section('content')

<body>
  <!-- Nepalthinking Slider Begin -->
<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width:600px;
        height: 300px;">

  <!-- Loading Screen -->
  <div u="loading" style="position: absolute; top: 0px; left: 0px;">
    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;"> </div>
    <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;"> </div>
  </div>

  <!-- Slides Container -->
  <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
    <div> <a u=image href="#"><img src="{{asset('img/landscape/01.jpg')}}" /></a> </div>
    <div> <a u=image href="#"><img src="{{asset('img/landscape/02.jpg')}}" /></a> </div>
    <div> <a u=image href="#"><img src="{{asset('img/landscape/03.jpg')}}" /></a> </div>
    <div> <a u=image href="#"><img src="{{asset('img/landscape/04.jpg')}}" /></a> </div>
  </div>
  <style>
            .nepalthinkingb01 {
                position: absolute;
            }

                .nepalthinkingb01 div, .nepalthinkingb01 div:hover, .nepalthinkingb01 .av {
                    position: absolute;
                    width: 12px;
                    height: 10px;
                    filter: alpha(opacity=70);
                    opacity: .7;
                    overflow: hidden;
                    cursor: pointer;
                    border-right: #1800ff 2px solid;
                }

                .nepalthinkingb01 div {
                    background-color: red;
                }

                    .nepalthinkingb01 div:hover, .nepalthinkingb01 .av:hover {
                        background-color: #d3d3d3;
                    }

                .nepalthinkingb01 .av {
                    background-color: #fff;
                }

                .nepalthinkingb01 .dn, .nepalthinkingb01 .dn:hover {
                    background-color: #555555;
                }
        </style>
  <div u="navigator" class="nepalthinkingb01" style="bottom: 16px; right: 10px;">
    <div u="prototype"></div>
  </div>
  <style>
            .nepalthinkinga05l, .nepalthinkinga05r {
                display: block;
                position: absolute;
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(images/600x300-arrow.png) no-repeat;
                overflow: hidden;
            }
            .nepalthinkinga05l { background-position: -10px -40px; }
            .nepalthinkinga05r { background-position: -70px -40px; }
            .nepalthinkinga05l:hover { background-position: -130px -40px; }
            .nepalthinkinga05r:hover { background-position: -190px -40px; }
            .nepalthinkinga05l.nepalthinkinga05ldn { background-position: -250px -40px; }
            .nepalthinkinga05r.nepalthinkinga05rdn { background-position: -310px -40px; }
        </style>
  <!-- Arrow Left -->
  <span u="arrowleft" class="nepalthinkinga05l" style="top: 123px; left: 8px;"> </span>
  <!-- Arrow Right -->
  <span u="arrowright" class="nepalthinkinga05r" style="top: 123px; right: 8px;"> </span> <a style="display: none" href="http://www.nepalthinking.com">Bootstrap Slider</a> </div>
<!-- Nepalthinking Slider End -->

</body>
<script>
        jQuery(document).ready(function ($) {
            var _SlideshowTransitions = [
            //Swing Outside in Stairs
            {$Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $NepalthinkingEasing$.$EaseInWave, $Top: $NepalthinkingEasing$.$EaseInWave, $Clip: $NepalthinkingEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5} }

            //Dodge Dance Outside out Stairs
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $NepalthinkingEasing$.$EaseInJump, $Top: $NepalthinkingEasing$.$EaseInJump, $Clip: $NepalthinkingEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Pet Outside in Stairs
            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $NepalthinkingEasing$.$EaseInWave, $Top: $NepalthinkingEasing$.$EaseInWave, $Clip: $NepalthinkingEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Dance Outside in Random
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $NepalthinkingEasing$.$EaseInJump, $Top: $NepalthinkingEasing$.$EaseInJump, $Clip: $NepalthinkingEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Flutter out Wind
            , { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $NepalthinkingEasing$.$EaseInOutSine, $Top: $NepalthinkingEasing$.$EaseOutWave, $Clip: $NepalthinkingEasing$.$EaseInOutQuad }, $Outside: true, $Round: { $Top: 1.3} }

            //Collapse Stairs
            , { $Duration: 1200, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $NepalthinkingEasing$.$EaseOutQuad }

            //Collapse Random
            , { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $NepalthinkingEasing$.$EaseOutQuad }

            //Vertical Chess Stripe
            , { $Duration: 1000, y: -1, $Cols: 12, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12} }

            //Extrude out Stripe
            , { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $NepalthinkingEasing$.$EaseInOutExpo, $Opacity: $NepalthinkingEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5} }

            //Dominoes Stripe
            , { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $NepalthinkingSlideshowFormations$.$FormationStraight, $Easing: $NepalthinkingEasing$.$EaseOutJump, $Round: { $Top: 1.5} }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $NepalthinkingSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $NepalthinkingBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $NepalthinkingArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var nepalthinking_slider2 = new $NepalthinkingSlider$("slider2_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = nepalthinking_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    nepalthinking_slider2.$ScaleWidth(Math.min(parentWidth, 600));
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

@endsection
