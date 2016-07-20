<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>slider</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="{{asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="app-layout">
        @include('layouts.header')

        @yield('slider')

        @include('layouts.footer')
        <script type="text/javascript">
            /* header : nav bar*/
            function showLinkContent($id) {
                var navbar_div_option_index = $id.split("-");//alert(navbar_div_option_index);
                var navbar_div_option = "navbar-div-option-"+navbar_div_option_index[2];
                //alert(navbar_div_option);
                document.getElementById(navbar_div_option).style.visibility = "visible";
                document.getElementById(navbar_div_option).style.height = "300px";
                document.getElementById(navbar_div_option).style.marginLeft = "100px";
                document.getElementById(navbar_div_option).style.marginRight = "100px";
                document.getElementById(navbar_div_option).style.color = "white";
                document.getElementById(navbar_div_option).style.overflow = "hidden";
                document.getElementById(navbar_div_option).style.marginTop = "-20px";
                document.getElementById(navbar_div_option).style.borderTop = "2px solid white";
            }
            function hideLinkContent($id) {
                var navbar_div_option_index = $id.split("-");
                var navbar_div_option = "navbar-div-option-"+navbar_div_option_index[2];
                document.getElementById(navbar_div_option).style.visibility = "hidden";
                document.getElementById(navbar_div_option).style.height = "0px";
                document.getElementById(navbar_div_option).style.marginTop = "0px";
                document.getElementById(navbar_div_option).style.borderTop = "none";
            }
            function holdContentDisplay($id){
                document.getElementById($id).style.visibility = "visible";
                document.getElementById($id).style.height = "300px";
                document.getElementById($id).style.marginTop = "-20px";
                document.getElementById($id).style.borderTop = "2px solid white";
            }
            function removeContentDisplay($id){
                document.getElementById($id).style.visibility = "hidden";
                document.getElementById($id).style.height = "0px";
                document.getElementById($id).style.marginTop = "0px";
                document.getElementById($id).style.borderTop = "none";
            }

            /******************************************/
            var myProductSliderNav_Next = true;
            var myProductSliderNav_Prev = false;
            var myProductSliderNav_CountNext = 1;
            var myProductSliderNav_CountPrev = 1;
            function myProductSliderNav($id) {
                if ($id === "my-product-slider-nav-next") {
                    var screen_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                    if (myProductSliderNav_Next === true) {
                        var sliderMarginLeft = "-100%";
                        var sliderContainerElement = "my-product-slider-container-" + myProductSliderNav_CountNext;
                        document.getElementById(sliderContainerElement).style.marginLeft = sliderMarginLeft;
                        document.getElementById(sliderContainerElement).style.WebkitTransition = "1s";
                        document.getElementById(sliderContainerElement).style.transition = "1s";
                        myProductSliderNav_CountNext++;
                        myProductSliderNav_CountPrev++;
                        myProductSliderNav_Prev = true;
                        if (myProductSliderNav_CountNext === 3) {
                            myProductSliderNav_Next = false;
                        }
                    } else {
//                        alert("myProductSliderNav_CountNext : " + myProductSliderNav_CountNext
//                                + "\nmyProductSliderNav_Next : " + myProductSliderNav_Next
//                                + "\n\nmyProductSliderNav_CountPrev : " + myProductSliderNav_CountPrev
//                                + "\nmyProductSliderNav_Prev : " +  myProductSliderNav_Prev);
                    }
                } else {
                    if (myProductSliderNav_Prev === true) {
                        var sliderMarginLeft = "0%";
                        var sliderContainerElement = "my-product-slider-container-" + (myProductSliderNav_CountPrev - 1);
                        document.getElementById(sliderContainerElement).style.marginLeft = sliderMarginLeft;
                        document.getElementById(sliderContainerElement).style.WebkitTransition = "1s";
                        document.getElementById(sliderContainerElement).style.transition = "1s";
                        myProductSliderNav_CountNext--;
                        myProductSliderNav_CountPrev--;
                        myProductSliderNav_Next = true;
                        if (myProductSliderNav_CountPrev === 1) {
                            myProductSliderNav_Prev = false;
                        }
                    }
                }
            }
        </script>
    </body>
</html>
