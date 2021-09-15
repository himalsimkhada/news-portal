@extends('english.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container">

        <div class="white gapping">
            <!--news 1 start-->
            <h1 class="mainNewsHeading">
                <a href="detailsenglish.php">Study only, not implementation: The report of the High Level Education
                    Commission, which the government did not want to make public, was made public by the suggestors after
                    two years</a>
            </h1>
        </div>
        <!--news 1 ends-->

        <div class="white gapping">
            <!--news 2 start-->
            <h1 class="mainNewsHeading">
                <a href="detailsenglish.php">
                    An old man died from corona in Lamjung
                </a>
            </h1>
            <img src="img/images.jpg" alt="mainNewsImage" class="img-fluid mainNewsImage">
        </div>
        <!--news 2 endds-->

        <div class="white gapping">
            <!--news 3 start-->
            <h1 class="mainNewsHeading">
                <a href="detailsenglish.php">
                    It is not appropriate to meet the intelligence chief at his residence at night - Bhim Rawal, according
                    to the RAW chief, he did not come - Foreign Minister
                </a>
            </h1>
            <img src="img/meeting.gif" alt="mainNewsImage" class=" img-fluid mainNewsImage">
        </div>
        <!--news 3 ends-->

        <div class="ad2">
            <a href="#">
                <img src="img/kumari.gif" alt="ad" class="img-fluid">
            </a>
        </div>

        <div class="redBg">
            <!--mukhya-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="#">Main</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img/death.jpg" alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"><a href="detailsenglish.php">Another 17 die from corona
                                infection</a></h2>
                        <p class="newsText">Another 17 people have died of corona infection in the last 24 hours in
                            Nepal. According to the information given by the Ministry of Health and Population on Sunday
                            afternoon, Corona in Nepal...</p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game tried
                                to change the rules.</a></h6>
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
                    <a href="#">All News</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game tried
                                to change the rules.</a></h6>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/corona.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img\cricket2020-12-05-09-20-48.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img\1202995435.jpg.0.webp" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game tried
                                to change the rules.</a></h6>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/-30.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/-25.png" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/-38.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/-17.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game tried
                                to change the rules.</a></h6>
                    </div>
                </div>
            </div>


        </div>
        <!--samachra ends-->

        <div class="redBg">
            <!--jibansaili-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="#">Lifestyle</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img/paravaraka-samabnathha-sathhara-garana-vasata-sallha-yasa-garanahasa-2020-12-04.jpg"
                            alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"> <a href="detailsenglish.php"> Here's how to improve family
                                relationships </a> </h2>
                        <p class="newsText"> Place pictures of your family's happiness in the northeastern part of
                            your
                            family to bring happiness into your life. If the relationship between the family members of the
                            household in any way ... </p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game
                                tried to change the rules.</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <!--jibansaili ends-->

        <div class="redBg">
            <!--अन्तर्राष्ट्रिय-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="antarastriya.php">International</a>
                </h3>
                <h3 class="pr-3">
                    <a href="antarastriya.php">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img/1202995435.jpg.0.webp" alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"> <a href="detailsenglish.php"> Here's how to improve family
                                relationships </a> </h2>
                        <p class="newsText"> Place pictures of your family's happiness in the northeastern part of
                            your
                            family to bring happiness into your life. If the relationship between the family members of the
                            household in any way ... </p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game
                                tried to change the rules.</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <!--अन्तर्राष्ट्रिय ends-->

        <div class="redBg">
            <!--khelkud-->
            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="#">Sports</a>
                </h3>
                <h3 class="pr-3">
                    <a href="#">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </h3>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="innerCard white">
                        <img src="img\2134021-11090818.jpg" alt="InnerCardMainImage" class="img-fluid innerCardMainImage">
                        <h2 class="innerCardMainHeading"><a href="detailsenglish.php">To play the semi high altitude
                                playground of Mauja till Chait</a></h2>
                        <p class="newsText">The semi-high altitude sports ground being constructed in Mauja of
                            Pokhara Metropolitan City Ward 20 will be made playable by the end of next April....</p>
                    </div>
                </div>
                <div class="col-md-4 marBot">
                    <div class="sideNews d-flex white marZero">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/rai.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/oli.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game
                                tried to change the rules.</a></h6>
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
                            <a href="#">Sports</a>
                        </h3>
                        <h3 class="pr-3">
                            <a href="#">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </h3>
                    </div>
                    <!--news type heading ending-->
                    <!--left side news cards starts here-->
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white sideNewsMarBot">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
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
                            <a href="#">Sports</a>
                        </h3>
                        <h3 class="pr-3">
                            <a href="#">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </h3>
                    </div>
                    <!--news type heading ending-->
                    <!--middle side news cards starts here-->
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Armed police in charge of railway
                                security</a></h6>
                    </div>
                    <div class="sideNews d-flex white sideNewsMarBot">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Oli said, ‘The latter half of the game
                                tried to change the rules.</a></h6>
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
                            <a href="#">Game</a>
                        </h3>
                        <h3 class="pr-3">
                            <a href="#">All <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </h3>
                    </div>
                    <!--news type heading ending-->
                    <!--left side news cards starts here-->
                    <div class="sideNews d-flex white">
                        <img src="img/test.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">In the last 24 hours, 1752 infected people
                                were cured, adding 1096</a></h6>
                    </div>
                    <div class="sideNews d-flex white">
                        <img src="img/vac.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">Preparations to bring vaccine against
                                COVID-19 to reach 20.</a></h6>
                    </div>
                    <div class="sideNews d-flex white sideNewsMarBot">
                        <img src="img/cov.jpg" alt="side1" class="img-fluid sideNewsImage">
                        <h6 class="sideNewsTopic"><a href="detailsenglish.php">CPN (Maoist) escalating the process, Oli
                                protesting</a></h6>
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
