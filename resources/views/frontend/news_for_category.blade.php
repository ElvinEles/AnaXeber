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


    <section class="vizew-post-area mb-50">
        <div class="container">
            <div style="margin-top:30px;" class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>{{$news_one_category->category_name}} Xəbərlər</h4>
                            <div class="line"></div>
                        </div>


                        <div class="row mb-30">
                            <!-- Single Blog Post -->
                            @foreach ($news_all_slides as $news_all_slide)
                            <div class="col-12 col-lg-4">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                      @if($news_all_slide->news_photo_one != "No Photo")
                                       <img style="width:140px;height:100px;" src="{{asset('/'.$news_all_slide->news_photo_one)}}" alt="NO PHOTO">
                                      @else
                                      <img src="{{asset('img/core-img/no-icon.png')}}" alt="">
                                      @endif
                                    </div>
                                    <div class="post-content">
                                        <a href="{{URL::to('news_one_info/'.$news_all_slide->news_id)}}" class="post-title">{{substr($news_all_slide->news_title,0,40)."..."}}</a>
                                        <div class="post-meta d-flex justify-content-between pull-right">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>



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
