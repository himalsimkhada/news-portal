@extends('nepali.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container">

        @foreach ($featured as $key => $news)
            <div class="white gapping">
                <h1 class="mainNewsHeading"><a href="{{ route('nepali.details', $news->slug) }}">{{ $news->title }}</a>
                </h1>
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                    class="img-fluid mainNewsImage">
            </div>
            @if ($key == 2)
            @break
        @endif
        @endforeach

        <div class="ad2">
            <a href="#">
                <img src="img/kumari.gif" alt="ad" class="img-fluid">
            </a>
        </div>

        <div class="redBg">
            <!--mukhya-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="#">मुख्य</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                @foreach ($featured as $key => $news)
                    @if ($key == 0)
                        <div class="col-md-8">
                            <div class="innerCard white">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="InnerCardMainImage"
                                    class="img-fluid innerCardMainImage">
                                <h2 class="innerCardMainHeading"><a
                                        href="{{ route('nepali.details', $news->slug) }}">{{ $news->title }}</a></h2>
                                <p class="newsText">{{ strip_tags(substr($news->body, 0, 20)) }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-4 marBot">
                    @foreach ($featured as $key => $news)
                        @if ($key != 0)
                            <div class="sideNews d-flex white marZero">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="side1"
                                    class="img-fluid sideNewsImage">
                                <h6 class="sideNewsTopic"><a
                                        href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 15) }}</a>
                                </h6>
                            </div>
                        @endif
                        @if ($key == 5)
                        @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--mukhya ends-->

        <div class="row youtubeVideo">
            <div class="col-md-3 text-center">
                <a href=""><img src="img/r2.gif" alt="ad" class="img-fluid manyAds"></a>
                <a href=""><img src="img/r3.gif" alt="ad" class="img-fluid manyAdsB"></a>
            </div>
            <div class="col-md-6 text-center">
                <iframe src="https://www.youtube.com/embed/9OqTxKYNrDw" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-3 text-center">
                <a href=""><img src="img/r3.gif" alt="ad" class="img-fluid manyAds"></a>
                <a href=""><img src="img/r2.gif" alt="ad" class="img-fluid manyAdsB"></a>
            </div>
        </div>

        <div class="redBg">
            <!--samachra-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="#">समाचार</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                @foreach ($all_news as $key => $news)
                    <div class="col-md-4 marBot">
                        <div class="sideNews d-flex white marZero">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                                class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a
                                    href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 30) }}</a>
                            </h6>
                        </div>
                    </div>
                    @if ($key == 14)
                    @break
                @endif
                @endforeach

            </div>
        </div>
        <!--samachra ends-->

        <div class="redBg">
            <!--jibansaili-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="#">जीवनशैली</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                @foreach ($lifestyle_news as $key => $news)
                    <div class="col-md-4 marBot">
                        <div class="sideNews d-flex white">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                                class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 20) }}</a></h6>
                        </div>
                    </div>
                    @if ($key == 14)
                    @break
                @endif
                @endforeach
            </div>
        </div>
        <!--jibansaili ends-->

        <div class="redBg">
            <!--अन्तर्राष्ट्रिय-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="antarastriya.php">अन्तर्राष्ट्रिय</a>
                </h3>
                <h3 class="pr-3">
                    <a href="antarastriya.php">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                @foreach ($international_news as $key => $news)
                    @if ($key == 0)
                        <div class="col-md-8">
                            <div class="innerCard white">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="InnerCardMainImage"
                                    class="img-fluid innerCardMainImage">
                                <h2 class="innerCardMainHeading"><a
                                        href="{{ route('nepali.details', $news->slug) }}">{{ $news->title }}</a></h2>
                                <p class="newsText">{{ strip_tags(substr($news->body, 0, 20)) }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-4 marBot">
                    @foreach ($international_news as $key => $news)
                        @if ($key != 0)
                            <div class="sideNews d-flex white marZero">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="side1"
                                    class="img-fluid sideNewsImage">
                                <h6 class="sideNewsTopic"><a
                                        href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 15) }}</a>
                                </h6>
                            </div>
                        @endif
                        @if ($key == 5)
                        @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--अन्तर्राष्ट्रिय ends-->

        <div class="redBg">
            <!--khelkud-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="#">खेलकुद</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                @foreach ($sports_news as $key => $news)
                    @if ($key == 0)
                        <div class="col-md-8">
                            <div class="innerCard white">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="InnerCardMainImage"
                                    class="img-fluid innerCardMainImage">
                                <h2 class="innerCardMainHeading"><a
                                        href="{{ route('nepali.details', $news->slug) }}">{{ $news->title }}</a></h2>
                                <p class="newsText">{{ substr($news->title, 0, 20) }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-4 marBot">
                    @foreach ($sports_news as $key => $news)
                        @if ($key != 0)
                            <div class="sideNews d-flex white marZero">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="side1"
                                    class="img-fluid sideNewsImage">
                                <h6 class="sideNewsTopic"><a href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 15) }}</a>
                                </h6>
                            </div>
                        @endif
                        @if ($key == 5)
                        @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--khelkud-->


        <div class="row">
            <!--adand news-->

            <div class="col-md-4 mb-3 text-center">
                <!--left side-->
                <div class="redBgSmall">
                    <!--news part of left-->
                    <div class="white newsTypeHeading d-flex justify-content-between">
                        <!--news type heading-->
                        <h3>
                            <a href="#">खेलकुद</a>
                        </h3>
                        <h3 class="pr-3">
                            <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </h3>
                    </div>
                    <!--news type heading ending-->
                    <!--left side news cards starts here-->
                    @foreach ($sports_news as $key => $news)
                        <div class="sideNews d-flex white">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="side1"
                                class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a
                                    href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 15) }}</a>
                            </h6>
                        </div>
                        @if ($key == 2)
                        @break
                    @endif
                    @endforeach
                    <!--left side news cards ends here-->
                </div>
                <!--news part of left ends-->
                <a href="#">
                    <img src="img/r7.gif" alt="ad" class="img-fluid">
                </a>
            </div>
            <!--left side ends-->

            <div class="col-md-4">
                <!--middle part of news starts-->
                <div class="redBgSmall">
                    <!--news part of middle-->
                    <div class="white newsTypeHeading d-flex justify-content-between">
                        <!--news type heading-->
                        <h3>
                            <a href="#">खेलकुद</a>
                        </h3>
                        <h3 class="pr-3">
                            <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </h3>
                    </div>
                    <!--news type heading ending-->
                    <!--middle side news cards starts here-->
                    @foreach ($sports_news as $key => $news)
                        <div class="sideNews d-flex white">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="side1"
                                class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a
                                    href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 15) }}</a>
                            </h6>
                        </div>
                        @if ($key == 5)
                        @break
                    @endif
                    @endforeach
                    <!--middle side news cards ends here-->
                </div>
                <!--news part of middle ends-->
            </div>
            <!--middle part of news ends-->

            <div class="col-md-4 mb-3 text-center">
                <!--left side-->
                <a href="#">
                    <img src="img/r7.gif" alt="ad" class="img-fluid mb-3">
                </a>
                <div class="redBgSmall mt-3">
                    <!--news part of left-->
                    <div class="white newsTypeHeading d-flex justify-content-between">
                        <!--news type heading-->
                        <h3>
                            <a href="#">खेल</a>
                        </h3>
                        <h3 class="pr-3">
                            <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </h3>
                    </div>
                    <!--news type heading ending-->
                    <!--left side news cards starts here-->
                    @foreach ($sports_news as $key => $news)
                        <div class="sideNews d-flex white">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="side1"
                                class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a
                                    href="{{ route('nepali.details', $news->slug) }}">{{ substr($news->title, 0, 15) }}</a>
                            </h6>
                        </div>
                        @if ($key == 2)
                        @break
                    @endif
                    @endforeach
                    <!--left side news cards ends here-->
                </div>
                <!--news part of left ends-->
            </div>
            <!--left side ends-->

        </div>
        <!--ad and news ends-->

    </div>
    <!--container ends-->

    <div class="newsLetterSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6 subscribeText">
                    <h2>Subscribe To Our NewsLetter!!!</h2>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="row leftSub">
                        <div class="col-md-8 subscribeForm">
                            <form action="post">
                                <input type="text" placeholder="E-mail">
                            </form>
                        </div>
                        <div class="col-md-4 subscribe">
                            <button>Subscribe</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
