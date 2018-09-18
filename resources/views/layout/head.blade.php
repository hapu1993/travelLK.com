<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- it works the same with all jquery version from 1.x to 2.x -->
<script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nepalthinking.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nepalthinking.slider.js')}}"></script>
  @yield('head')
  <link href="bootstrap.min.css" rel="stylesheet" />
  <title>Home | TravelLK.com</title>

<style>
.captionOrange, .captionBlack
       {
           color: #fff;
           font-size: 20px;
           line-height: 30px;
           text-align: center;
           border-radius: 4px;
       }
       .captionOrange
       {
           background: #EB5100;
           background-color: rgba(235, 81, 0, 0.6);
       }
       .captionBlack
       {
         font-size:16px;
           background: #000;
           background-color: rgba(0, 0, 0, 0.4);
       }
       a.captionOrange, A.captionOrange:active, A.captionOrange:visited
       {
         color: #ffffff;
         text-decoration: none;
       }
       a.captionOrange:hover
       {
           color: #eb5100;
           text-decoration: underline;
           background-color: #eeeeee;
           background-color: rgba(238, 238, 238, 0.7);
       }
       .bricon
       {
           background: url(images/browser-icons.png);
       }


        /* use navbar-wrapper to wrap navigation bar, the purpose is to overlay navigation bar above slider */
        .navbar-wrapper {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            height: 51px;
        }
        .navbar-wrapper > .container {
            padding: 0;
        }

        @media all and (max-width: 768px ){
            .navbar-wrapper {
                position: relative;
                top: 0px;
            }
        }
        @yield('style')
    </style>




</style>


</head>
