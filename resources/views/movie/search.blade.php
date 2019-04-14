<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
{seacms:strip}
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		{seacms:load seo/search.html}
		{seacms:load header.html}			
	</head>
  <body>		
		<div class="container">
			<div class="row">
				{seacms:top}
								
				<div class="stui-pannel stui-pannel-bg clearfix">
					<!-- 列表  -->
					<div class="stui-pannel__head clearfix">	
						<h3 class="title">
							与“{seacms:searchword}”相关的影片
						</h3>
					</div>																		
					<ul class="stui-vodlist clearfix">										
						{seacms:searchlist size=36 order=time}							
						<li class="stui-vodlist__item">
							<a class="stui-vodlist__thumb lazyload" href="[searchlist:link]" title="[searchlist:name]" data-original="[searchlist:pic]">						
								{if:"[searchlist:note]" <> "" }<span class="pic-text text-right">[searchlist:note]</span>{end if}						
							</a>									
							<h4 class="stui-vodlist__title">
								<a href="[searchlist:link]" title="[searchlist:name]">[searchlist:name]</a>
							</h4>				
						</li>						
						{/seacms:searchlist}
					</ul>					
					<!-- end 列表  -->
					
					<!-- 翻页  -->
					<ul class="stui-page text-center clearfix">
						<li><a href="{searchlist:firstlink}">首页</a></li>
						<li><a href="{searchlist:backlink}">上一页</a></li>							
						{searchlist:pagenumber len=6}
						<li class="hidden-xs {if:{searchlist:page}==[pagenumber:page]}active{end if}"><a href="[pagenumber:link]">[pagenumber:page]</a></li>
						{/searchlist:pagenumber}
						<li class="active visible-xs"><span class="num">{searchlist:page}/{searchlist:pagecount}</span></li>
						<li><a href="{searchlist:nextlink}">下一页</a></li>
						<li><a href="{searchlist:lastlink}">尾页</a></li>							
					</ul>
					<!-- end 翻页  -->
				</div>												
			</div>
		</div>
		{seacms:foot}
	</body>
</html>
{/seacms:strip}