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
									@foreach($links as $link)
									<li><a class="text-muted" href="[linklist:link]" title="[linklist:name]" target="_blank">{{ $link->name }} [linklist:name]</a></li>								
									@endforeach
									{/seacms:linklist}
								</ul>								
							</div>																		
						</div>
					</div>
				</div>	
				<!-- end 友链  -->