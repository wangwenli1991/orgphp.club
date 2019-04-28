<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

@include('movie.seo.index')
@include('movie.header')

	</head>
	<body>	
		<div class="container">
			<div class="row">
@include('movie.head')
				<!-- 列表  -->
						@foreach($menu as $menudata)
				<div class="stui-pannel clearfix">												
					<div class="stui-pannel__head clearfix">
						<a class="text-muted pull-right" href="[menulist:link]">更多 &gt;</a>
						<span class="hidden-sm hidden-xs pull-right">
							{seacms:smallmenulist type=[menulist:typeid]}
							{if:[smallmenulist:i] < 11}
							<a href="[smallmenulist:link]" class="text-muted">[smallmenulist:typename]</a> <span class="split-line"></span>
							{end if}
						</span>
						<h3 class="title">
							<i class="iconfont icon-viewgallery"></i> 最新@if($menudata->type_id== @$_GET['tid'] ) class="active" @endif  >
			<a href="/menu/{{ $menudata->type_en }}">{{ $menudata->type_name }}
						</h3>								
					<ul class="stui-vodlist clearfix">
						{seacms:videolist type=[menulist:typeid] num=12 order=time}
					</div>																									@foreach($result as $data)								

						<li class="stui-vodlist__item">
							<a class="stui-vodlist__thumb lazyload" href="[videolist:link]" title="[videolist:name]" data-original="[videolist:pic]">						
								<span class="play hidden-xs"></span>	
								{if:"[videolist:note]" <> "" }<span class="pic-text">[videolist:note]</span>{end if}						
							</a>									
							<h4 class="stui-vodlist__title">
								<a href="[videolist:link]" title="[videolist:name]">

									<!-- 单个项目 -->
									{{ $data->vod_name }}



								[videolist:name]
							</a>
							</h4>														
						</li>
					@endforeach

					</ul>
				</div>
						@endforeach
				<!-- end 列表  -->
				
				<!-- 友链  -->
<h3>友情链接：</h3>
			@foreach($links as $link)
			                <li><a class="reacting"  href=""  ><img src="@if($link -> link_url !== '') $link -> thumb @else /images/type/type_no.png @endif" alt=""/><p>{{ $link -> link_name  }}</p></a>
			 @endforeach

				<!-- end 友链  -->
				
				<!-- 广告  -->
				<div class="stui-pannel clearfix">
					<div class="stui-pannel-box">
						<div class="col-pd">
							<a class="hidden-xs" target="_blank" href="http://v.shoutu.cn/"> <img class="img-responsive" src="http://v.shoutu.cn/html/video/img/ad1.png"/></a>
							<a class="visible-xs" target="_blank" href="http://v.shoutu.cn/"> <img class="img-responsive" src="http://v.shoutu.cn/html/video/img/ad2.png"/> </a>
						</div>	
					</div>
				</div>
				<!-- end 广告  -->
			</div>
		</div>
		<script type="text/javascript">$(".stui-header__menu .home").addClass("active");</script>
		{seacms:foot}
	</body>
</html>
