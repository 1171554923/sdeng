<?php 
use yii\helpers\Html;
?>
<?=Html::cssFile('@web/index/css/index.css')?>
<?=Html::jsFile('@web/index/js/jquery.luara.0.0.1.min.js')?>
<div class="main_content" >	
                		<div class="main_left">
                				<div class="captain_content">
                    					<div class="carousel">
                    						<ul >
                    							<li><img src="index/images_content/1.jpg" alt="1"/></li>
                                                <li><img src="index/images_content/2.jpg" alt="2"/></li>
                                                <li><img src="index/images_content/3.jpg" alt="3"/></li>
                                                <li><img src="index/images_content/4.jpg" alt="4"/></li>                                            
                    						</ul>          
                    						<ol>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                        	</ol>
                                        </div>  
                                        		 <SCRIPT language=javascript type=text/javascript>
                           window.onload=function(){                                               	                              	  
                            	   var width = 0;                            		 
                           	    width =$('.captain_content').width() * 0.6 ;                            	                               	   
    							window.onresize = function()
    							{
    								width =$('.captain_content').width() * 0.6 ;
    								width =	parseInt(width);
    								$('.main_left .carousel ul li img').css('width','540');                                        
                                    $(".carousel").luara({width: width,height:"350",interval:4500,selected:"seleted",deriction:"left"});
                                    var picWidth = $('#scrollbox').width();	                                    											
    							}
    
    							width =	parseInt(width);                                        
                                $(".carousel").luara({width: width,height:"350",interval:4500,selected:"seleted",deriction:"left"});											                                      		                                           
                            }      
                        </SCRIPT>                            		
                            			<div class="side_content">
                            				<dl>
                            					<dd>
                            						<img src="index/images_content/side1.jpg" />
                            					</dd>
                            					<dt>
                            						<h4>金毛和他的主人又打架啦11111</h4>
                            						<div class="clock">
                            							<span>16:23</span>
                            							<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                            						</div>
                            					</dt>
                            				</dl>  
                            				
                            				<dl>
                            					<dd>
                            						<img src="index/images_content/side3.jpg" />
                            					</dd>
                            					<dt>
                            						<h4>金毛和他的主人又打架啦11111</h4>
                            						<div class="clock">
                            							<span>16:23</span>
                            							<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                            						</div>
                            					</dt>
                            				</dl>  
                            				
                            				<dl>
                            					<dd>
                            						<img src="index/images_content/side2.jpg" />
                            					</dd>
                            					<dt>
                            						<h4>金毛和他的主人又打架啦11111</h4>
                            						<div class="clock">
                            							<span>16:23</span>
                            							<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                            						</div>
                            					</dt>
                            				</dl>                            			
                            			</div>                            			
                            	</div><!-- captain_content -->
                            	
                            	 <div class="user_share">
                            		<dl>
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>	
                            		
                            		<dl class="old">
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>
                            		<dl>
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>	
                            		
                            		<dl class="old">
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>	                            		
                            	</div><!-- end user_share -->
                            	<div class="blank"></div>
                            	<div class="original">
                            		<h3>独家视频 -- 水灯吧</h3>                            		
                            		<div id="arrLeft" class="leftjt"><img src="index/images/icon/leftjt.gif" /></div>                            		
                                		<div class="scrollbox" id="scrollbox">                            			
                                			<ul  class="flder">                                			
                                				<li><a href="#"><img src="index/images_content/p1.jpg"></a></li>
                                				<li><a href="#"><img src="index/images_content/p2.jpg"></a></li>
                                				<li><a href="#"><img src="index/images_content/p3.jpg"></a></li>
                                				<li><a href="#"><img src="index/images_content/p4.jpg"></a></li>
                                				<li><a href="#"><img src="index/images_content/p3.jpg"></a></li>
                                				<li><a href="#"><img src="index/images_content/p4.jpg"></a></li>
                                				 
                                			</ul> 
                                		</div>
                                	<div id="arrRight" class="rightjt"><img src="index/images/icon/rightjt.gif" /></div>
                            	</div><!-- end original      -->
                            	<script>
                            		$(function(){
										$('#arrRight').click(function(){
											var vcon = $('#scrollbox ul');
											var offset = ($("#scrollbox ul li").width())*-1;																																
											vcon.stop().animate({marginLeft:offset},"slow",function(){
												var firstItem = $("#scrollbox ul li").first();																							
												$('.flder').append(firstItem); 
												$(this).css("margin-left","0px");
											});
										})    

										$('#arrLeft').click(function(){								
    											var vcon = $('#scrollbox ul');
    											var offset = ($("#scrollbox ul li").width())*-1;
												var lastItem = $("#scrollbox ul  li").last();
												$('.flder').prepend(lastItem);
												vcon.css("margin-left",offset);
												vcon.animate({marginLeft:"0px"},"slow")										
										})
										                        		
                                	})		
                       			</script>
                       			
                       			
                       			 <div class="user_share">
                            		<dl>
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>	
                            		
                            		<dl class="old">
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>
                            		<dl>
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>	
                            		
                            		<dl class="old">
                            			<dd><img src="index/images_content/share1.jpg" /></dd>
                            			<dt>
                            				<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                                				<div class="author">
                                					<div class="author_i">
                                						<img src="index/images_content/user.jpeg">
                                					</div>
                                					<div class="author_n">
                                						<p><span>名字 ：</span>廖自然</p>
                                						<p><span>地点 ：</span>成都</p>
                                					</div>
                                					<div class="click_z">
                                						<span class="zan"></span>
                                						<span class="notzan"></span>
                                					</div>	
                                				</div>  
                                				
                                				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                          				
                            			</dt> 
                            		</dl>	                            		
                            	</div><!-- end user_share -->
                            	
                            	<div class="blank"></div>
                            	<div class="topic">
                            		 	<dl>
                            				<dd><img src="index/images_content/img1.jpg"></dd>
                            				<dt>
                            					<h3><a href="#">In flight instructions get a Looney Tune makeover (Video)</a></h3>
                            					
                                					<div class="author">
                                    					<div class="author_i">
                                    						<img src="index/images_content/user.jpeg">
                                    					</div>
                                    					<div class="author_n">
                                    						<p><span>名字 ：</span>廖自然</p>
                                    						<p><span>地点 ：</span>成都</p>
                                    					</div>
                                    					<div class="click_z">
                                    						<span class="zan"></span>
                                    						<span class="notzan"></span>
                                    					</div>	
                                    				</div>  
                                    				
                                    				<p class="discription">
                                    					One of the best ways to hone in on your studies before a big exam, is an instrumental playlist. It blocks out distractions and keeps you on track. For this year’s midterms, try out our ultimate study playlist and get that sh*t done.
                                    				</p>  
                                    				
                                    				<div class="bottom_s">
                                					<span>4小时以前发布</span>
                                						<em>
                            							 	<i class="zan">12</i>
                            								<i class="notzan">121</i>
                            								<i class="comment">12</i>
                            							</em>
                                				</div>                                				
                            				</dt>
                            			</dl>
                            	</div><!-- end topic -->    
                            	                        	                            
                		</div><!-- end main_left -->
                			
                		
                		
                		<div class="main_right">
                			<div class="hot">
                				<h3>最近热门</h3>
                				<ul>
                					<li>
                						<span class="rank">1</span>
                						<span class="hot_i"><a href="#"><img src="index/images_content/hot1.jpg"></a></span>
                						<h4><a href="#">Sh*t happens sometimes (42 Photos)</a></h4>
                					</li>
                					
                					<li>
                						<span class="rank">2</span>
                						<span class="hot_i"><a href="#"><img src="index/images_content/hot1.jpg"></a></span>
                						<h4><a href="#">Sh*t happens sometimes (42 Photos)</a></h4>
                					</li>
                					
                					<li>
                						<span class="rank">3</span>
                						<span class="hot_i"><a href="#"><img src="index/images_content/hot1.jpg"></a></span>
                						<h4><a href="#">Sh*t happens sometimes (42 Photos)</a></h4>
                					</li>
                				</ul>
                			</div>
                		</div>
</div><!-- end main_content -->

