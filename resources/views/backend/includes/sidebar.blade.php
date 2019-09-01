<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
<li class="text-center">
    <img src="{{asset('img/admin/logo.png')}}" class="user-image img-responsive"/>
</li>


    <li>
        <a class="active-menu"  href="{{URL::to('admin')}}"><i class="fa fa-dashboard fa-2x"></i> Əsas Səhifə</a>
    </li>

    <li>
        <a href="#"><i class="fa fa-list-alt fa-2x"></i> Xəbərlər<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{URL::to('news_all')}}">Bütün Xəbərlər</a>
            </li>
            <li>
                <a href="{{URL::to('news_add')}}">Yeni Xəbər</a>
            </li>
        </ul>
      </li>
</ul>

</div>

</nav>
