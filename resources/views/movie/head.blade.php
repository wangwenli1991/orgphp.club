<div class="stui-header__top clearfix">					
	<div class="stui-header__logo">
		<a class="logo" href="{{ url('/') }}"></a>										  
	</div>				
	<div class="stui-header__search"> 
		<form name="formsearch" id="formsearch" action='/{seacms:sitepath}search.php' method="post" autocomplete="off">																			
			<input class="form-control" id="wd" placeholder="输入影片关键词..." name="searchword" type="text" id="keyword" required="">
			<input type="submit" id="searchbutton" value="" class="hide">
			<button class="submit" id="submit" onClick="$('#formsearch').submit();"></button>
		</form>
	</div>
	<ul class="stui-header__user hidden-xs">
		<!--<li>
			<a href="/{seacms:sitepath}gbook.php" title="留言反馈"><img src="/{seacms:sitepath}statics/img/icon_gbook.png" width="28" /></a>
		</li>-->
		<li>
			<img src="{{ url('/statics/img/icon_code.png') }}" width="28" />
			<div class="dropdown">
				<img src="http://v.shoutu.cn/html/video/img/qrcode.jpg" width="120" />
				<p class="margin-0">关注微信公众号</p>
			</div>
		</li>		
	</ul>
</div>
<div class="stui-header__menu clearfix">
	<span class="more hidden-xs">今日更新“{seacms:daycount}”部影片</span>	  			  	
	<ul class="clearfix">	  		
		<li class="home"><a href="/">首页</a></li>
<!-- 		{if:[menulist:typeid]={seacms:currenttypeid}{elseif:[menulist:typeid]={playpage:upid}} 
 -->
 @foreach($menu as $menudata)

		<li @if($menudata->t_id== @$_GET['tid'] ) class="active" @endif  >
			<a href="/channel/{{ $menudata->t_enname }}">{{ $menudata->t_name }}</a>
		</li>						  
@endforeach		
		<!--<li class="topic"><a href="{seacms:topiclink}">专题</a></li>
		<li class="news"><a href="{seacms:newslink}">资讯</a></li>-->
	</ul>
</div>
	

