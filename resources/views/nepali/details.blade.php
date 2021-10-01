@extends('nepali.layouts.app')

@section('title', 'पूर्ण विवरण')

@section('content')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0"
        nonce="m2AZ4pS8"></script>
    <div class="whiteBg text-center">
        <div class="container">
            <img src="{{ asset('storage/' . $post->image) }}" alt="mainNewsImage"
                class="img-fluid mainNewsImage detailedImage text-center">
            <h1 class="mainNewsHeading text-center">
                <a href="">{{ $post->title }}</a>
            </h1>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <!--image of reporter-->
                            <img src="{{ asset('storage/' . $post->author->name) }}" alt="Reporter"
                                class="img-fluid reporterImage">
                        </div>
                        <!--image of reporter-->
                        <div class="col-md-8 reporterDetails">
                            <!--name address of reporter-->
                            <h5 class="reporterName">{{ $post->author->name }}</h5>
                            <h6 class="reporterAddress">Address</h6>
                        </div>
                        <!--name address of reporter-->
                    </div>
                    <div class="row">
                        <!--date starts-->
                        <div class="col-md-12 d-flex justify-content-center detailsDate">
                            {{-- <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                                allowtransparency="true"
                                src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=14&api=8101z3k348"
                                width="165" height="22" style="margin-top:-2px;"></iframe> --}}
                            {{ $nepaliDate }}
                        </div>
                    </div>
                    <!--date ends-->
                    <div class="row">
                        <!--counter and share-->
                        <div class="col-md-6 borderRight">
                            <div class="counter text-left">20</div>
                            <div class="counterText text-left">Total Shares</div>
                        </div>
                        <div class="col-md-6">
                            <ul class="share">
                                <li>
                                    <iframe
                                        src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FNewsPortal%2Fdetails.php&layout=button_count&size=small&width=77&height=20&appId"
                                        width="77" height="20" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw"
                                        class="twitter-hashtag-button" data-show-count="false">Tweet
                                        #share<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="newsInDetails">
                        @foreach ($post->tags as $tag)
                            <a href="">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                    <p class="text-left newsText lineGap">
                        {{ strip_tags($post->body) }}
                    </p>
                </div>
            </div>
            <div class="shareFacebook">
                <iframe
                    src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FNewsPortal%2Fdetails.php&layout=button_count&size=small&width=77&height=20&appId"
                    width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                <a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw"
                    class="twitter-hashtag-button" data-show-count="false">Tweet #share<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></a>
            </div>

        </div>
        <!--container ends-->

        <div class="fb-comments w-100" data-href="https://localhost/facebookcomment/index.php" data-numposts="5"
            data-width=""></div>

        <div class="container">
            <div class="row"></div>
            @if (!$relatedPost->isEmpty())
                <div class="greyBg">
                    <!--samachra-->

                    <div class="white newsTypeHeading d-flex justify-content-between">
                        <h3>
                            <a href="#">सम्बन्धित समाचार</a>
                        </h3>
                        <h3 class="pr-3">
                            <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </h3>
                    </div>
                    <div class="row marSide">
                        @foreach ($relatedPost as $value)
                            <div class="col-md-3 col-sm-4 categoryCard">
                                <img src="{{ asset('storage/'.$value->image) }}" alt="news" class="img-fluid">
                                <h5><a href="{{ route('nepali.details', $value->slug) }}">{{ $value->title }}</a></h5>
                            </div>
                        @endforeach
                    </div>

                </div>
            @endif
            <!--samachra ends-->

            <div class="row">
                <!--adand news-->

                <div class="col-md-4 mb-2 text-center">
                    <!--left side-->
                    <div class="redBgSmall">
                        <!--news part of left-->
                        <div class="white newsTypeHeading d-flex justify-content-between">
                            <!--news type heading-->
                            <h3>
                                <a href="#">छुट्याउनु भयो कि</a>
                            </h3>
                            <h3 class="pr-3">
                                <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                        <!--news type heading ending-->
                        <!--left side news cards starts here-->
                        <div class="sideNews d-flex white">
                            <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए,
                                    १०९६ थपिए</a></h6>
                        </div>
                        <div class="sideNews d-flex white">
                            <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९
                                    विरुद्धको खोप ल्याउने तयारी</a></h6>
                        </div>
                        <div class="sideNews d-flex white sideNewsMarBot">
                            <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                            </h6>
                        </div>
                        <div class="sideNews d-flex white sideNewsMarBot">
                            <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                            </h6>
                        </div>
                        <div class="sideNews d-flex white sideNewsMarBot">
                            <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                            </h6>
                        </div>
                        <!--left side news cards ends here-->
                    </div>
                    <!--news part of left ends-->
                    <!-- <a href="#">
                                                        <img src="img/r7.gif" alt="ad" class="img-fluid">
                                                    </a> -->
                </div>
                <!--left side ends-->

                <div class="col-md-4">
                    <!--middle part of news starts-->
                    <div class="redBgSmall">
                        <!--news part of middle-->
                        <div class="white newsTypeHeading d-flex justify-content-between">
                            <!--news type heading-->
                            <h3>
                                <a href="#">धेरै पढिएको</a>
                            </h3>
                            <h3 class="pr-3">
                                <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                        <!--news type heading ending-->
                        <!--middle side news cards starts here-->
                        <div class="sideNews d-flex white">
                            <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए,
                                    १०९६ थपिए</a></h6>
                        </div>
                        <div class="sideNews d-flex white">
                            <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९
                                    विरुद्धको खोप ल्याउने तयारी</a></h6>
                        </div>
                        <div class="sideNews d-flex white">
                            <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                            </h6>
                        </div>
                        <div class="sideNews d-flex white">
                            <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                            </h6>
                        </div>
                        <div class="sideNews d-flex white sideNewsMarBot">
                            <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                            </h6>
                        </div>
                        <!--middle side news cards ends here-->
                    </div>
                    <!--news part of middle ends-->
                </div>
                <!--middle part of news ends-->

                <div class="col-md-4 mb-2 text-center">
                    <!--left side-->
                    <a href="#">
                        <img src="{{ asset('img/r7.gif') }}" alt="ad" class="img-fluid mb-3">
                    </a>
                    <div class="redBgSmall mt-3">
                        <!--news part of left-->
                        <div class="white newsTypeHeading d-flex justify-content-between">
                            <!--news type heading-->
                            <h3>
                                <a href="#">अन्य</a>
                            </h3>
                            <h3 class="pr-3">
                                <a href="#">सबै <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                        <!--news type heading ending-->
                        <!--left side news cards starts here-->
                        <div class="sideNews d-flex white">
                            <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए,
                                    १०९६ थपिए</a></h6>
                        </div>
                        <div class="sideNews d-flex white">
                            <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९
                                    विरुद्धको</a></h6>
                        </div>
                        <div class="sideNews d-flex white sideNewsMarBot">
                            <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै
                                    ओली</a></h6>
                        </div>
                        <!--left side news cards ends here-->
                    </div>
                    <!--news part of left ends-->
                </div>
                <!--left side ends-->

            </div>
            <!--ad and news ends-->
        </div>

    </div>
    </div>
@endsection
