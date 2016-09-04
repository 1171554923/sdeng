<?php 
use yii\helpers\Html;
?>
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
                                        <script>
                                        window.onload=function(){
                                        	var width = 0; 
                                       	    width =$('.captain_content').width() * 0.6 ; 
                                       	    
											window.onresize = function()
											{
												width =$('.captain_content').width() * 0.6 ;
												width =	parseInt(width);
												$('.main_left .carousel ul li img').css('width','540');                                        
			                                    $(".carousel").luara({width: width,height:"350",interval:4500,selected:"seleted",deriction:"left"});												
											}

											width =	parseInt(width);                                        
		                                    $(".carousel").luara({width: width,height:"350",interval:4500,selected:"seleted",deriction:"left"});

																					                                      		                                                                               		                                   
                                        }                                  
                                </script>    		                            		
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
                            		
                            	</div><!-- end user_share -->
                            	
                		</div><!-- end main_left -->
                		
                		<div class="main_right">
                			212
                		</div>
</div><!-- end main_content -->