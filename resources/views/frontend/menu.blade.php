<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Son Xəbərlər:</p>
                        </div>


                        <div id="breakingNewsTicker" class="ticker">
                            <ul>

                                <li><a href="">burda dollarin qizilin qiymet</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="{{URL::to('/')}}" class="nav-brand"><img src="{{asset('img/admin/logo.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="">Əsas</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."1")}}">SOSİAL</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."2")}}">İQTİSADİYYAT</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."3")}}">MƏDƏNİYYƏT</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."4")}}">ŞOU-BİZNES</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."5")}}">KRİMİNAL</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."6")}}">SİYASƏT</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."7")}}">İDMAN</a></li>
                                <li><a href="{{URL::to('news_all_for_category/'."8")}}">TURİZM</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
