<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="{{ asset('img\vrlogo.jpg') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>न्यूज़ पोर्टल-युनिकोड @yield('title')</title>
</head>

<body>
    @include('nepali.layouts.navbar')
    @yield('content')

    <footer>
        <div class="container">
            <div class="row text-left">
                <div class="col-md-4">
                    <a href="indexsec.php">
                        <img src="img/logo.png" alt="footerlogo" class="img-fluid footLogo mt-5 mb-3">
                    </a>
                    <div class="footerContact">
                        <h5 class="footerPageName pt-3 pb-4">न्यूज़ पोर्टल</h5>
                        <ul class="contactDetails">
                            <li>
                                <i class="fa fa-map-marker mr-3" aria-hidden="true"></i>
                                शान्तीनगर काठमाडौं नेपाल
                            </li>
                            <li>
                                <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                                <a href="tel:9851064725">
                                    9851064725
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-envelope mr-3" aria-hidden="true"></i>
                                <a href="mailto:info@newsportal.com">
                                    info@newsportal.com
                                </a>
                            </li>
                            <li>
                                <span class="font-weight-bold">कार्यालय सम्पादक :</span> नाम हाल्नुहोस
                            </li>
                            <li>
                                <span class="font-weight-bold">प्रबन्ध निर्देशक :</span> नाम हाल्नुहोस
                            </li>
                            <li>
                                <span class="font-weight-bold">विज्ञापनका लागि :</span> नम्बर हाल्नुहोस
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="footerNav">
                        <li class="">
                            <a href=" indexsec.php">गृहपृष्ठ <span
                                class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a href="antarastriya-second.php">अन्तर्राष्ट्रिय</a>
                        </li>
                        <li>
                            <a href="#">जीवनशैली</a>
                        </li>
                        <li>
                            <a href="#">सूचना प्रविधि</a>
                        </li>
                        <li>
                            <a href="#">मनोरन्जन</a>
                        </li>
                        <li>
                            <a href="#">खेलकुद</a>
                        </li>
                        <li>
                            <a href="#">अर्थ</a>
                        </li>
                        <li>
                            <a href="#">अन्य</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="fbPage fbIframe">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftechcodersnepal&tabs=timeline&width=340&height=250&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
            <hr class="footerLine">
            <div class="row">
                <div class="col-md-8 text-left copy">
                    <p>&#169; न्यूज़ पोर्टल,2020 &#174; All Rights Reserved. <a href="contact-us-two.php">&nbsp;
                            &nbsp;सम्पर्क</a>&nbsp;|&nbsp;<a href="about-us-two.php">हाम्रो बारे</a>&nbsp; |&nbsp;<a
                            href="calendar-two.php">पात्रो</a>&nbsp;|&nbsp; <a
                            href="unicode-two.php">युनिकोड</a>&nbsp;|&nbsp; <a
                            href="forex-two.php">Forex</a>&nbsp;|&nbsp; <a href="goldandsilver-two.php">Gold &
                            Silver</a>&nbsp;|&nbsp;</p>
                </div>
                <div class="col-md-4 copy bottomRight">
                    Developed and Designed By <span class="tech"><a href="#">Tech Coderz</a></span>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="gotopbtn"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('js')

</body>

</html>