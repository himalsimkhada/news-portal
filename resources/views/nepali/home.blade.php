@extends('nepali.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container">
        @forelse ($featured as $feature_news)
            <div class="white">
                <h1 class="mainNewsHeading"><a href="">{{ $feature_news->title }}</a></h1>
                <img src="{{ asset('storage/' . $feature_news->image) }}" alt="{{ $feature_news->title }}"
                    class="img-fluid mainNewsImage">
            </div>
        @empty

        @endforelse

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
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img/death.jpg" alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"><a href="details.php">कोरोना संक्रमणबाट थप १७ जनाको निधन</a></h2>
                        <p class="newsText">नेपालमा पछिल्लो २४ घन्टामा कोरोना संक्रमणबाट थप १७ जनाको निधन भएको छ ।
                            स्वास्थ्य तथा जनसंख्या मन्त्रालयले आइतबार अपराह्न दिएको जानकारीअनुसार नेपालमा कोरोना...</p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९ विरुद्धको
                                खोप ल्याउने तयारी</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                        </h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">रेल्वे सुरक्षाको जिम्मा सशस्त्र प्रहरीलाई</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">ओलीले भने, ‘खेलको उत्तरार्द्धमा नियम परिवर्तन गर्न
                                खोजियो (पत्रको पूर्णपाठसहित)</a></h6>
                    </div>
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
                    {{-- @if ($key % 5 == 0) --}}
                    <div class="col-md-4 marBot">
                        {{-- @endif --}}
                        <div class="sideNews d-flex white marZero">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                                class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="">{{ $news->title }}</a></h6>
                        </div>
                        {{-- @if ($key % 5 == 0) --}}
                    </div>
                    {{-- @endif --}}
                @endforeach

            </div>
            {{-- <div class="row">
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९ विरुद्धको
                                खोप ल्याउने तयारी</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                        </h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">रेल्वे सुरक्षाको जिम्मा सशस्त्र प्रहरीलाई</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">ओलीले भने, ‘खेलको उत्तरार्द्धमा नियम परिवर्तन गर्न
                                खोजियो (पत्रको पूर्णपाठसहित)</a></h6>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/corona.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९ विरुद्धको
                                खोप ल्याउने तयारी</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                        </h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img\cricket2020-12-05-09-20-48.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">रेल्वे सुरक्षाको जिम्मा सशस्त्र प्रहरीलाई</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img\1202995435.jpg.0.webp" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">ओलीले भने, ‘खेलको उत्तरार्द्धमा नियम परिवर्तन गर्न
                                खोजियो (पत्रको पूर्णपाठसहित)</a></h6>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/-30.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/-25.png" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९ विरुद्धको
                                खोप ल्याउने तयारी</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/-38.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                        </h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/-17.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">रेल्वे सुरक्षाको जिम्मा सशस्त्र प्रहरीलाई</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">ओलीले भने, ‘खेलको उत्तरार्द्धमा नियम परिवर्तन गर्न
                                खोजियो (पत्रको पूर्णपाठसहित)</a></h6>
                    </div>
                </div>
            </div> --}}


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
                <div class="col-md-4 marBot">
                    @foreach ($lifestyle_news as $news)
                        <div class="sideNews d-flex white">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                                class="img-fluid sideNewsImage">
                            <h6 class="sideNewsTopic"><a href="">{{ $news->title }}</a></h6>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img/paravaraka-samabnathha-sathhara-garana-vasata-sallha-yasa-garanahasa-2020-12-04.jpg"
                            alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"><a href="details.php">पारिवारिक सम्बन्ध सुधार गर्न वास्तु सल्लाह
                                यसो गर्नुहोस</a></h2>
                        <p class="newsText">तपाईंको परिवारको उत्तरपूर्वी भागमा तपाईंको परिवारको खुशीका तस्वीरहरू
                            राख्नुहोस् तपाईंको जीवनमा खुशी ल्याउन। यदि घरका परिवारका सदस्यहरूबीचको सम्बन्ध कुनै पनि
                            हिसाबले...</p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
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
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">रेल्वे सुरक्षाको जिम्मा सशस्त्र प्रहरीलाई</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">ओलीले भने, ‘खेलको उत्तरार्द्धमा नियम परिवर्तन गर्न
                                खोजियो (पत्रको पूर्णपाठसहित)</a></h6>
                    </div>
                </div>
            </div> --}}
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
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img/1202995435.jpg.0.webp" alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"><a href="details.php">पारिवारिक सम्बन्ध सुधार गर्न वास्तु सल्लाह
                                यसो गर्नुहोस</a></h2>
                        <p class="newsText">तपाईंको परिवारको उत्तरपूर्वी भागमा तपाईंको परिवारको खुशीका तस्वीरहरू
                            राख्नुहोस् तपाईंको जीवनमा खुशी ल्याउन। यदि घरका परिवारका सदस्यहरूबीचको सम्बन्ध कुनै पनि
                            हिसाबले...</p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६ थपिए</a>
                        </h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९ विरुद्धको खोप
                                ल्याउने तयारी</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">रेल्वे सुरक्षाको जिम्मा सशस्त्र प्रहरीलाई</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">ओलीले भने, ‘खेलको उत्तरार्द्धमा नियम परिवर्तन गर्न खोजियो
                                (पत्रको पूर्णपाठसहित)</a></h6>
                    </div>
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
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img\2134021-11090818.jpg" alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"><a href="details.php">चैतसम्ममा मौजाको सेमी हाइअल्टिच्युड खेल
                                मैदान खेल्न</a></h2>
                        <p class="newsText">पोखरा महानगरपालिका वडा २० को मौजामा बन्न लागेको सेमि हाईअल्टिच्युड
                            खेलमैदा अगामी चैतको अन्त्यसम्म खेल्न योग्य बनाइने भएको छ । खेल मैदानका लागि डिपिआर तयार भएर...
                        </p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६ थपिए</a>
                        </h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९ विरुद्धको खोप
                                ल्याउने तयारी</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">रेल्वे सुरक्षाको जिम्मा सशस्त्र प्रहरीलाई</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="#">ओलीले भने, ‘खेलको उत्तरार्द्धमा नियम परिवर्तन गर्न खोजियो
                                (पत्रको पूर्णपाठसहित)</a></h6>
                    </div>
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
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
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
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
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
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">पछिल्लो २४ घन्टामा १७ सय ५२ संक्रमित निको भए, १०९६
                                थपिए</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">२० प्रतिशत नागरिकलाई पुग्ने गरी कोभिड– १९
                                विरुद्धको</a></h6>
                    </div>
                    <div class="sideNews d-flex white sideNewsMarBot">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="details.php">प्रक्रिया बढाउँदै नेकपा, प्रतिवाद गर्दै ओली</a>
                        </h6>
                    </div>
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
