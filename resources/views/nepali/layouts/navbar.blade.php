<div class="white">
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 headerLogoTwo">
                    <a href="/">
                        <img src="{{ asset('storage/' . setting('site_logo')) ?? asset('img/logopng.png') }}"
                            alt="logo" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="containerTwo">
                <div class="row datentime">
                    <div class="col-md-4 d-flex dateEnglish">
                        <i class="far fa-calendar-alt"></i>
                        <iframe src="http://free.timeanddate.com/clock/i7kx83fl/n2410/tt1" frameborder="0" width="210"
                            height="19" style="text-align:center;"></iframe>
                    </div>
                    <div class="col-md-4 d-flex dateNepali">
                        <i class="far fa-calendar-alt"></i>
                        <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                            allowtransparency="true"
                            src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=14&api=8101z3k348"
                            width="165" height="22" style="margin-top:-2px;"></iframe>
                    </div>
                    <div class="col-md-4">
                        <ul class="socialButtons">
                            <li><a href="#"><img src="{{ asset('img/home-facebook.png') }}" alt="facebook"
                                        class="img-fluid"></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('img/home-insta1.png') }}" alt="instagram"
                                        class="img-fluid"></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('img/home-twitter1.png') }}" alt="twitter"
                                        class="img-fluid"></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('img/viber.png') }}" alt="viber"
                                        class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('img/home-youtube1.png') }}" alt="youtube"
                                        class="img-fluid"></a>
                            </li>
                            <li>
                                <div class="search-icon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Search">
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--navbar starts-->
        <div class="blue">
            <div class="container" style="padding: 0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-navicon" style="color:#fff; font-size:20px; padding: 3px;"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a href="{{ route('index') }}"
                                    class="nav-link">गृहपृष्ठ</a>
                            </li>
                            @forelse ($nav as $items)
                                <li class="nav-item"><a href="{{ route('nepali.category', $items->id) }}"
                                        class="nav-link">{{ $items->name }}</a>
                                </li>
                            @empty
                                No Categories Added
                            @endforelse
                            <li class="nav-eng dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ENG
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="indexenglish.php">English 1</a>
                                    <a class="dropdown-item" href="indexenglishtwo.php">English 2</a>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('nepali.unicode') }}" class="btn btn-danger unicode"><i
                                class="fa fa-keyboard-o"></i>
                            युनिकोड</a>
                    </div>

                </nav>
            </div>
        </div>
    </header>
</div>
