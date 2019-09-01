<!-- JQUERY SCRIPTS -->
<script src="{{asset('js/admin/jquery-1.10.2.js')}}"></script>
  <!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('js/admin/jquery.metisMenu.js')}}"></script>
 <!-- MORRIS CHART SCRIPTS -->
 <script src="{{asset('js/admin/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('js/admin/morris/morris.js')}}"></script>
  <!-- CUSTOM SCRIPTS -->
<script src="{{asset('js/admin/custom.js')}}"></script>
<script src="{{asset('js/admin/bootstrap-datepicker.js')}}"></script>

<script type="text/javascript">

/**NEWS TITLE EVENT**/
$('#news_title').click(function () {

  $('.warning_message').fadeIn(500);

  var today=new Date();
  var day=today.getDate();
  var month=today.getMonth();
  var year=today.getFullYear();
  if (month < 10) {
    month="0" + month;
  }
  $('#datepicker').val(day + "-" + month + "-" + year);


  $('#news_title').blur(function () {
    var news_title=$('#news_title').val();
    var news_category=parseInt($('#news_category').val());
     if (news_title == "") {
       if (news_category == 0) {
         $("#submitbutton").attr("disabled",true);
       }else {
          $("#submitbutton").attr("disabled",true);
       }

    }else if (news_title != null) {
      if (news_category == 0) {
        $("#submitbutton").attr("disabled",true);
      }else {
        $("#submitbutton").attr("disabled",false);
      }

    }
  });

});
/**NEWS TITLE EVENT**/

/**NEWS CATEGORY EVENT**/
$("#news_category").change(function() {
  var news_title=$('#news_title').val();

  var news_category=parseInt($('#news_category').val());
   if (news_title == "") {
     if (news_category == 0) {
       $("#submitbutton").attr("disabled",true);
     }else {
        $("#submitbutton").attr("disabled",true);
     }

  }else if (news_title != null) {
    if (news_category == 0) {
      $("#submitbutton").attr("disabled",true);
    }else {
      $("#submitbutton").attr("disabled",false);
    }

  }

});
/**NEWS CATEGORY EVENT**/


$('#datepicker').datepicker({
  format:"dd-mm-yyyy"
});

$('#datepicker1').datepicker({
  format:"dd-mm-yyyy"
});

$('#datepicker2').datepicker({
  format:"dd-mm-yyyy"
});



</script>

<script type="text/javascript">

$('#deleteNews').on('show.bs.modal',function(e) {
      var news_id=$(e.relatedTarget).data('id');
      $('#deleteNewsInput').val(news_id);
    });

</script>

<script>
    CKEDITOR.replace( 'news_content' );
</script>
