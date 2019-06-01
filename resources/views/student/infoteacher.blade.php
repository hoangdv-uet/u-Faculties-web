@extends('master')
@section('content')
<div class="container-fluid">
<hr>
  <div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-5" >
    	<div id="info-gv" style="padding-left: 30px">
    		<p class="title-tt">{{$user->hocvi}}. {{$user->fullname}}</p>
	    	<p> <i class="fa fa-university" aria-hidden="true"></i> Đơn vị: {{$user->department->department_name}}</p>
	    	<p><i class="fa fa-graduation-cap" aria-hidden="true"></i> Học vị, hàm vị: {{$user->hocvi}}</p>
			<p><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Email: {{$user->email}}</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> Phone: {{$user->phone}}</p>
	    	<p><i class="fa fa-telegram" aria-hidden="true"></i>  Website: {{$user->maCB}}.com</p>
    	</div>
    	<hr>
    	<div id="topic" style="padding-left: 30px">
    		<p class="title-tt">Chủ đề nghiên cứu</p>
	    	<ul style="list-style-type: none; padding: 0;">
	    		@foreach($research as $r)
	    		<li>{{$r->lecture_research->name}}</li>
	    		@endforeach
	    	</ul>
    	</div>
    	<hr>
    	<div id="field" style="padding-left: 30px">
    		<p class="title-tt">Lĩnh Vực Quan Tâm</p>
	    	<ul>
	    		@foreach($lecture as $l)
	    		<li>{{$l->lecture_qt->name}}</li>
	    		@endforeach
	    	</ul>
    	</div>
    	<hr>
    	<div class="col-lg-12">
    		<button class="btn btn-success btnBack" onclick="window.history.back();" > << Quay Lại </button>
		  </div>
    </div>

    <div class="col-sm-5">
       <img src="source/img/{{$user->avatar}}" width="30%" >
    </div>
    <div class="col-sm-1"></div>
  </div>

  	
</div>

@endsection