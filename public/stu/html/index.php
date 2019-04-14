<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
{seacms:strip}
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php  include('seo/index.html') ?>
		<?php  include('header.html') ?>


	</head>
	<body>	
		<div class="container">
			<div class="row">
				{seacms:top}				
				<!-- 列表  -->
				{seacms:menulist type=1,2,3,4}
				<div class="stui-pannel clearfix">												
					<div class="stui-pannel__head clearfix">
						<a class="text-muted pull-right" href="[menulist:link]">更多 &gt;</a>
						<span class="hidden-sm hidden-xs pull-right">
							{seacms:smallmenulist type=[menulist:typeid]}
							{if:[smallmenulist:i] < 11}
							<a href="[smallmenulist:link]" class="text-muted">[smallmenulist:typename]</a> <span class="split-line"></span>
							{end if}
							{/seacms:smallmenulist}							
						</span>
						<h3 class="title">
							<i class="iconfont icon-viewgallery"></i> 最新[menulist:typename]
						</h3>								
					</div>																																	
					<ul class="stui-vodlist clearfix">
						{seacms:videolist type=[menulist:typeid] num=12 order=time}
						<li class="stui-vodlist__item">
							<a class="stui-vodlist__thumb lazyload" href="[videolist:link]" title="[videolist:name]" data-original="[videolist:pic]">						
								<span class="play hidden-xs"></span>	
								{if:"[videolist:note]" <> "" }<span class="pic-text">[videolist:note]</span>{end if}						
							</a>									
							<h4 class="stui-vodlist__title">
								<a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a>
							</h4>														
						</li>
						{/seacms:videolist}	
					</ul>
				</div>
				{/seacms:menulist}
				<!-- end 列表  -->
				
				<!-- 友链  -->
				<div class="stui-pannel clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head clearfix">                                                                                                                                                                                                                                                       
								<h3 class="title">
									友情链接
								</h3>								
							</div>																		
						</div>
						<div class="stui-pannel_bd clearfix">
							<div class="col-pd">
								<ul class="stui-link__text clearfix">
									{seacms:linklist type=font}
									<li><a class="text-muted" href="[linklist:link]" title="[linklist:name]" target="_blank">[linklist:name]</a></li>								
									{/seacms:linklist}
								</ul>								
							</div>																		
						</div>
					</div>
				</div>	
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
		<script type="text/javascript">
			$.get('http://orgphp.club.test/1',function(data){
				console.log(JSON.parse(data));
			});
		</script>
	</body>
</html>
{/seacms:strip}