<!DOCTYPE html>
<html lang="en">
@include('frontend/header')
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('frontend/menu')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{URL::to('/')}}"><i class="fa fa-home" aria-hidden="true"></i> ƏSAS</a></li>
                            <li class="breadcrumb-item"><a href="#"> {{$news_one_category->category_name}} </a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->



    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-details-thumb mb-50">
                      @if($news_one_info->news_photo_one != "No Photo")
                      <img  style="width:600px;height:400px;" src="{{asset('/'.$news_one_info->news_photo_one)}}" alt="" style="width:100%;">
                      @else
                      <img style="width:600px;height:400px;" src="{{asset('img/core-img/no-icon.png')}}" alt="" style="width:100%;">
                      @endif
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-7">
                    <div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">

                                <a href="" class="post-title mb-2">{{$news_one_info->news_title}}</a>


                            </div>

                            <p>
                              {{htmlspecialchars($news_one_info->news_content)}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->

                    <div class="col-md-12">

                        <p>
                          Anaxeber.az Azərbaycanın xəbər saytı, Azərbaycandan ən son xəbərləri yayımlayır. Iqtisadi xeberler, Şou biznes xəbərləri , siyasi xeberler, kriminal xeberler, idman xeberleri, muharibe xeberleri, maliyye xeberleri, son xeberler təqdim edən ictimai-sosial saytdır
                        </p>

                    </div>

            </div>
        </div>
  @include('frontend/footer')
