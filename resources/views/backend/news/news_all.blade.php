@extends('backend/admin_index')


@section('title')
BÜTÜN XƏBƏRLƏR
@endsection


@section('warning_message')
@if(session()->has('news_error'))
<h3 class="warning_message_session">
<?php echo session()->get('news_error');
session()->remove('news_error');
?></h3>
@endif

@endsection

@section('content')

 <div class="col-md-12">
     <!-- Advanced Tables -->
     <div class="panel panel-default">
         <div class="panel-heading">
              <div class="row">
               <form class="form" action="{{URL::to('/news/search')}}" method="get">
                  {{ csrf_field() }}
                  @if(session()->has('news_error_date'))
                  <h6  id="warning_message_search" class="h5" style="text-align:center;color:#C90000;">
                  <?php echo session()->get('news_error_date');
                  session()->remove('news_error_date');?>
                  </h6>
                  @endif

                  <div class="col-md-12">
                    <div class="col-md-2">
                      <input type="text" name="news_first_date" placeholder="Başlanğıc tarix"  autocomplete="off" class="form-control" value="" id="datepicker1">
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="news_second_date" placeholder="Son tarix" autocomplete="off" class="form-control" value="" id="datepicker2">
                    </div>
                    <div class="col-md-4">
                      <input type="text" name="news_title" placeholder="Xəbər başlığı" autocomplete="off" class="form-control" value="" >
                    </div>
                    <div class="col-md-3">
                     <select class="form-control" name="news_category">
                         <option value="0">Kateqoriyanı seçin </option>
                         @foreach ($news_categories as $news_category)
                         <option value="{{$news_category->category_id}}">{{$news_category->category_name}}</option>
                         @endforeach
                     </select>
                    </div>
                    <div class="col-md-1">
                      <button  name="" id="search_button" autocomplete="off" class="btn btn-primary btn-block" value="" >Axtar</button>
                    </div>
                  </div>
                </form>
              </div>
         </div>
         <div class="panel-body">
             <div class="table-responsive">
                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead>
                         <tr class="news_all_head_tr">
                             <th>Xəbər Tarixi</th>
                             <th>Xəbər Başlığı</th>
                             <th>Xəbər Kateqoriyası</th>
                             <th>Xəbər Şəkili</th>
                             <th>Əməliyyatlar</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($news_all as $news_one)
                         <?php

                         $news_category = DB::table('category_of_news')->where('category_id', $news_one->news_category)->first();
                          ?>
                         <tr class="news_all_body_tr">
                             <td style="width:100px;text-align:center;">{{date_format($news_one->created_at,"d-m-Y H:m:s")}}</td>
                             <td style="word-wrap: break-word;width:400px;">{{substr($news_one->news_title,0,150)."..."}}</td>
                             <td style="width:160px;text-align:center;line-height: 100%;">{{$news_category->category_name}}</td>
                             <td style="width:100px;text-align:center;"> <img style="width:80px;height:60px;" src="{{$news_one->news_photo_one}}" alt=""></td>
                             <td style="width:100px;text-align:center;">
                               <a href="{{URL::to('news_correct/'.$news_one->news_id)}}" class="btn btn-primary btn-xs">Düzəliş</a>
                               <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-id="{{$news_one->news_id}}" data-target="#deleteNews">Sil</a>
                             </td>
                         </tr>
                         @endforeach

                     </tbody>
                 </table>
                 {{$news_all->links()}}
             </div>

         </div>
     </div>
     <!--End Advanced Tables -->
 </div>


 <!-- Modal -->
<div class="modal fade" id="deleteNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title news_headers"  id="exampleModalLabel">Xəbərdarlıq</h5>

      </div>
      <form class="form" action="{{URL::to('delete/news')}}" method="post">
        {{ csrf_field() }}
      <div class="modal-body">
        Silmək istədiyinizdən əminsinizmi?

        <input type="text" hidden id="deleteNewsInput" name="deleteNewsInput" value="">
      </div>
      <div class="modal-footer">
        <div class="col-md-6">
          <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Ləğv et</button>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-danger btn-block">Sil</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection
