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

				{seacms:top}			
				<div class="stui-pannel clearfix">
					<!-- 筛选  -->
					<ul class="stui-screen__list clearfix">
						<li>
							<span class="text-muted">按分类</span>
						</li>
						@foreach($mac_vod as $d_type)
{{--		在li里面的					{if: {channelpage:typeid} = [smallmenulist:typeid]} class="active"{end if}--}}
						<li>
							<span class="text-muted">

							<a href="[smallmenulist:link]">
								type
							</a></li>
							</span>
						@endforeach


					</ul>
					<ul class="stui-screen__list clearfix">
						<li>
							<span class="text-muted">按地区</span>
						</li>

						@foreach($mac_vod as $area)
						<li><a href="[areacaslist:link]" title="[areacaslist:value]">area</a></li>
						@endforeach
					</ul>
					<ul class="stui-screen__list clearfix">
						<li>
							<span class="text-muted">按年份</span>
						</li>
						@foreach($mac_vod as $d_year)
						<li><a href="[yearcaslist:link]" title="[yearcaslist:value]">
								year
							</a></li>
						@endforeach
					</ul>
					<!-- end 筛选  -->
					
					<!-- 列表  -->
					<ul class="stui-vodlist clearfix">
						{seacms:channellist size=36 order=time}
						<li class="stui-vodlist__item">
							<a class="stui-vodlist__thumb lazyload" href="[channellist:link]" title="[channellist:name]" data-original="[channellist:pic]">						
								<span class="play hidden-xs"></span>	
								{if:"[channellist:note]" <> "" }<span class="pic-text text-right">[channellist:note]</span>{end if}						
							</a>									
							<h4 class="stui-vodlist__title">
								<a href="[channellist:link]" title="[channellist:name]">[channellist:name]</a>
							</h4>																						
						</li>
						{/seacms:channellist}	 
					</ul>
					<!-- end 列表  -->
					
					<!-- 翻页  -->
					<ul class="stui-page text-center clearfix">
						<li><a href="{channellist:firstlink}">首页</a></li>
						<li><a href="{channellist:backlink}">上一页</a></li>							
						{channellist:pagenumber len=6}
						<li class="hidden-xs {if:{channellist:page}==[pagenumber:page]}active{end if}"><a href="[pagenumber:link]">[pagenumber:page]</a></li>
						{/channellist:pagenumber}
						<li class="active visible-xs"><span class="num">{channellist:page}/{channellist:pagecount}</span></li>
						<li><a href="{channellist:nextlink}">下一页</a></li>
						<li><a href="{channellist:lastlink}">尾页</a></li>							
					</ul>
					<!-- end 翻页  -->
				</div>				
			</div>
		</div>
		{seacms:foot}
sdf

	</body>
</html>
{/seacms:strip}