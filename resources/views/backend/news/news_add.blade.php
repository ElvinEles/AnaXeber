@extends('backend/admin_index')


@section('title')
YENİ XƏBƏR
@endsection

@section('warning_message')
@if(session()->has('news_error'))
<h3  class="warning_message_session">
<?php echo session()->get('news_error');
session()->remove('news_error');
?></h3>
@endif

@endsection


@section('content')
<div class="col-md-12">
    <form role="form" method="post" action="{{URL::to('news/save')}}" enctype='multipart/form-data'>
      {{ csrf_field() }}
        <div class="form-group">
            <label>Xəbər başlığı*:</label>
            <span hidden class="warning_message">Xüsusi işarələrdən istifadə etməyin</span>
            <input name="news_title" autocomplete="off" id="news_title" class="form-control" />
        </div>

      

        <div class="form-group">
            <label>Xəbər kateqoriyası*:</label>
            <select class="form-control" id="news_category" name="news_category">
              <option value="0">Seçin</option>
              @foreach ($news_categories as $news_category)
              <option value="{{$news_category->category_id}}">{{$news_category->category_name}}</option>
              @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Şəkil 1*:</label>
            <input type="file" class="form-control" name="news_photo_one"/>
        </div>

        <div class="form-group">
            <label>Şəkil 2*:</label>
            <input type="file" class="form-control" name="news_photo_two"/>
        </div>

        <div class="form-group">
            <label>Şəkil 3*:</label>
            <input type="file" class="form-control" name="news_photo_third"/>
        </div>

        <div class="form-group">
            <label>Video*:</label>
            <input type="file" class="form-control" name="news_video"/>
        </div>

        <div class="form-group">
          <label>Mətn*:</label>
          <textarea name="news_content" id="news_content" rows="10" cols="80">
          Mətin daxil edin
         </textarea>
        </div>

        <div class="form-group">
          <button type="submit"  id="submitbutton" disabled class="btn btn-primary btn-block">Təsdiq et</button>
          <button type="reset" class="btn btn-danger btn-block">Yenilə</button>
        </div>

    </form>
    <br />



</div>

@endsection
