<section class="hero--area section-padding-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="tab-content">
<div id="myCarousel" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div  class="carousel-inner">

    <?php
       $news_first_active=DB::table('news')->latest()->first();
     ?>

    <div class="item active">
      @if($news_first_active->news_photo_one != "No Photo")
      <img style="width:1200px;height:500px;" src="{{$news_first_active->news_photo_one}}" alt="" style="width:100%;">
      @else
      <img style="width:1200px;height:500px;" src="{{asset('img/core-img/no-icon.png')}}" alt="" style="width:100%;">
      @endif
      <div class="carousel-caption">
        <h3>{{$news_first_active->news_title}}</h3>
      </div>
    </div>

  @foreach ($news_all_slides as $news_all_slide)
    <div class="item">
      @if($news_all_slide->news_photo_one != "No Photo")
      <img style="width:1200px;height:500px;" src="{{$news_all_slide->news_photo_one}}" alt="" style="width:100%;">
      @else
      <img style="width:1200px;height:500px;" src="{{asset('img/core-img/no-icon.png')}}" alt="" style="width:100%;">
      @endif

      <div class="carousel-caption">
        <h3 class="slider_caption">{{$news_all_slide->news_title}}</h3>

      </div>
    </div>
@endforeach


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


                </div>
            </div>

<!---SAG HISSESI------>
            <div class="col-12 col-md-5 col-lg-4">
                <ul class="nav vizew-nav-tab" role="tablist">

                  @foreach ($news_all_slides as $news_all_slide)
                    <li class="nav-item">
                        <a class="nav-link" id="post-2" data-toggle="pill" href="{{$news_all_slide->news_id}}" role="tab" aria-controls="post-2-tab" aria-selected="false">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                   @if($news_all_slide->news_photo_one != "No Photo")
                                    <img src="{{$news_all_slide->news_photo_one}}" alt="NO PHOTO">
                                   @else
                                   <img src="{{asset('img/core-img/no-icon.png')}}" alt="">
                                   @endif
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{substr($news_all_slide->news_title,0,40)."..."}}</h6>
                                    
                                </div>
                            </div>
                        </a>
                    </li>
                  @endforeach





                </ul>
            </div>
        </div>
    </div>
</section>
