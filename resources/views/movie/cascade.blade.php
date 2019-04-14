<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
{seacms:strip}
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		{seacms:load seo/cascade.html}	
		{seacms:load header.html}				
	</head>
    <body>
		<div class="container">
			<div class="row">
				{seacms:top}			
				<div class="stui-pannel clearfix">
					<!-- 筛选  -->
					<ul class="stui-screen__list clearfix">
						<li>
							<span class="text-muted">按剧情</span>
						</li>
						{seacms:jqitemlist}								
						<li{if: [jqitemlist:value]={searchpage:jq}} class="active"{end if}><a href="[jqitemlist:link]" title="[jqitemlist:value]">[jqitemlist:value]</a></li>								
						{/seacms:jqitemlist}
					</ul>	
					<ul class="stui-screen__list clearfix">
						<li>
							<span class="text-muted">按地区</span>
						</li>
						{seacms:areaitemlist}
						<li {if: [areaitemlist:value]={searchpage:area}}class="active" {end if}><a href="[areaitemlist:link]" title="[areaitemlist:value]">[areaitemlist:value]</a></li>
						{/seacms:areaitemlist}
					</ul>
					<ul class="stui-screen__list clearfix">
						<li>
							<span class="text-muted">按年份</span>
						</li>
						{seacms:yearitemlist}
						<li{if: [yearitemlist:value]={searchpage:year}} class="active" {end if}><a href="[yearitemlist:link]" title="[yearitemlist:value]">[yearitemlist:value]</a></li>
						{/seacms:yearitemlist}
					</ul>
					<ul class="stui-screen__list clearfix">
						<li>
							<span class="text-muted">按语言</span>
						</li>
						{seacms:langitemlist}
						<li{if: [langitemlist:value]={searchpage:lang}} class="active" {end if}><a href="[langitemlist:link]" title="[langitemlist:value]">[langitemlist:value]</a></li>
						{/seacms:langitemlist}
					</ul>
					<ul class="stui-screen__list letter-list clearfix">
						<li>
							<span class="text-muted">按字母</span>
						</li>
						{seacms:letteritemlist}
						<li{if: [letteritemlist:value]={searchpage:letter}} class="active" {end if}><a href="[letteritemlist:link]" title="[letteritemlist:value]">[letteritemlist:value]</a></li>
						{/seacms:letteritemlist}
					</ul>
					<ul class="stui-screen__list letter-list clearfix">
						<li>
							<span class="text-muted">按排序</span>
						</li>
						<li class="{if:{searchpage:ordername}==time} active{end if}"><a href="{searchpage:order-time-link}">时间</a></li>
						<li class="{if:{searchpage:ordername}==hit} active{end if}"><a href="{searchpage:order-hit-link}">人气</a></li>
						<li class="{if:{searchpage:ordername}==commend} active{end if}"><a href="{searchpage:order-commend-link}">推荐</a></li>
					</ul>
					<!-- end 筛选  -->
					
					<!-- 列表  -->
					<ul class="stui-vodlist clearfix">
						{seacms:cascadelist size=36 order=time}
						<li class="stui-vodlist__item">
							<a class="stui-vodlist__thumb lazyload" href="[cascadelist:link]" title="[cascadelist:name]" data-original="[cascadelist:pic]">						
								<span class="play hidden-xs"></span>	
								{if:"[cascadelist:note]" <> "" }<span class="pic-text text-right">[cascadelist:note]</span>{end if}						
							</a>									
							<h4 class="stui-vodlist__title">
								<a href="[cascadelist:link]" title="[cascadelist:name]">[cascadelist:name]</a>
							</h4>																								
						</li>
						{/seacms:cascadelist}	 
					</ul>
					<!-- end 列表  -->
					
					<!-- 翻页  -->
					<ul class="stui-page text-center clearfix">
						<li><a href="{cascadelist:firstlink}">首页</a></li>
						<li><a href="{cascadelist:backlink}">上一页</a></li>							
						{cascadelist:pagenumber len=6}
						<li class="hidden-xs {if:{cascadelist:page}==[pagenumber:page]}active{end if}"><a href="[pagenumber:link]">[pagenumber:page]</a></li>
						{/cascadelist:pagenumber}
						<li class="active visible-xs"><span class="num">{cascadelist:page}/{cascadelist:pagecount}</span></li>
						<li><a href="{cascadelist:nextlink}">下一页</a></li>
						<li><a href="{cascadelist:lastlink}">尾页</a></li>							
					</ul>
					<!-- end 翻页  -->
				</div>				
			</div>
		</div>
		{seacms:foot}
	</body>
</html>
{/seacms:strip}