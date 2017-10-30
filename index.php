<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/header.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/indexs.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!--<script type="text/javascript" src="js/cbpHorizontalMenu.min.js"></script>-->
		<script type="text/javascript">
			$(function() {
				$('.cbp-hrmenu li').hover(function() {
					$('.cbp-hrsub', this).css('display', 'block');
				}, function() {
					$('.cbp-hrsub', this).css('display', 'none');
				});
			
			});
			function mosthover(a){
				
				if(a==1){
				$('#img_02').css('opacity','0.8');
				$('#img_03').css('opacity','0.8');
				}else if(a==2){
					$('#img_01').css('opacity','0.8');
				    $('#img_03').css('opacity','0.8');
				}else{
					$('#img_01').css('opacity','0.8');
				    $('#img_02').css('opacity','0.8');
				}
				
			}
			function mostout(){
				$('#img_02').css('opacity','1.0');
				$('#img_03').css('opacity','1.0');
				$('#img_01').css('opacity','1.0')
			}
		</script>

	</head>

	<body>
		<div class="container-fluid" style="overflow: hidden;">
			<div class="zhuangtai">
				<div class="container font">
					<span><a href="register.html">注册</a></span>
					<span><a href="login.php">登录</a></span>
					<span style="color:#f23063;width:200px">欢迎<?php   
		                     session_start();
		                     echo $_SESSION['uname'];
		            ?></span>
				</div>
			</div>
			<div class="container" >
				<!--头部-->
				<div class="header">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-lg-12">
							<div class="row">
								<div class="col-sm-3">
									<a href="index.php"><img src="img/logo.png" /></a>
								</div>
								<div class="col-sm-8">
									<img src="img/search_03.png" class="search-img" /><input type="text" placeholder="请输入搜索的商品" class="search" />
								</div>
								<div class="col-sm-1">
									<div class="zhengpin">
										<span>正品认证</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-lg-12">
							<nav id="cbp-hrmenu" class="cbp-hrmenu">
								<ul>
									<li>
										<a href="story.html">品牌故事</a>
									</li>
									<li>
										<a href="#">产品类别</a>
										<div class="cbp-hrsub">
											<div class="cbp-hrsub-inner">
												<div>
													<h4>面部护理</h4>
													<ul>
														<li>
															<a href="#">卸妆</a>
														</li>
														<li>
															<a href="#">洁面</a>
														</li>
														<li>
															<a href="#">爽肤水</a>
														</li>
														<li>
															<a href="#">面霜</a>
														</li>
														<li>
															<a href="mask.php">面膜</a>
														</li>
														<li>
															<a href="#">精华</a>
														</li>
													</ul>

												</div>
												<div>
													<h4>美体保养</h4>
													<ul>
														<li>
															<a href="#">洗发护发</a>
														</li>
														<li>
															<a href="#">美体精油</a>
														</li>
														<li>
															<a href="#">身体滋养</a>
														</li>
													</ul>
												</div>
												<div>
													<a href="index.php"><img src="img/首页3.jpg" style="width: 300px;height: 300; margin: 40px;" /></a>
												</div>
											</div>
											<!-- /cbp-hrsub-inner -->
										</div>
										<!-- /cbp-hrsub -->
									</li>
									<li>
										<a href="#">产品系列</a>
										<div class="cbp-hrsub">
											<div class="cbp-hrsub-inner">
												<div>
													<h4>系列甄选</h4>
													<ul>
														<li>
															<a href="productxilie.php">亮肤润白</a>
														</li>
														<li>
															<a href="#">祛痘净肤</a>
														</li>
														<li>
															<a href="#">修护润养</a>
														</li>
														<li>
															<a href="#">紧致提升</a>
														</li>
													</ul>
												</div>
												<div>
													<a href="index.php"><img src="img/首页2.png" style="width: 600px;height: 300px; margin: 40px;" /></a>
												</div>
											</div>
											<!-- /cbp-hrsub-inner -->
										</div>
										<!-- /cbp-hrsub -->
									</li>
									<li>
										<a href="">产品榜单</a>
										<div class="cbp-hrsub">
											<div class="cbp-hrsub-inner">
												<div>
													<h4>爱你所爱</h4>
													<ul>
														<li>
															<a href="bangdan.php">热销爆款</a>
														</li>
														<li>
															<a href="#">超值套餐</a>
														</li>
													</ul>
												</div>
												<div>
														<a href="index.php"><img src="img/首页0.jpg" style="width: 300px;height: 300; margin: 40px;" /></a>

												</div>
												<div>
														<a href="index.php"><img src="img/首页1.jpg" style="width: 300px;height: 300; margin: 40px;" /></a>

												</div>
											</div>
											<!-- /cbp-hrsub-inner -->
										</div>
										<!-- /cbp-hrsub -->
									</li>
									<li>
										<a href="#">社区活动</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<!--内容部分 中部-->
				<div class="main">
					<div class="slider" >

						<div class="slider-img">
							<ul class="slider-img-ul">
								<li><img src="img/lb1.png"></li>
								<li><img src="img/lb2.png"></li>
								<li><img src="img/lb1.png"></li>
								<li><img src="img/lb2.png"></li>
								<li><img src="img/lb1.png"></li>
								<li><img src="img/lb2.png"></li>
								<li><img src="img/lb1.png"></li>
							</ul>
						</div>

					</div>
					<script type="text/javascript" src="js/xSlider.js"></script>
					<div class="row">
						<div class="col-xs-5 col-sm-5 col-lg-5">
							<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
						</div>
						<div class="col-xs-2 col-sm-2 col-lg-2">
							<b><p style="font-size: 24px; text-align: center;">优质甄选</p></b>
						</div>
						<div class="col-xs-5 col-sm-5 col-lg-5">
							<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
						</div>

					</div>
					<div class="row">
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<a href="#cbp-hrmenu"><img class="image" src="img/首页_03.png" /></a>
						</div>
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<a href="#cbp-hrmenu"><img class="image" src="img/首页_05.png" /></a>
						</div>
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<a href="#cbp-hrmenu"><img class="image" src="img/首页_07.png" /></a>
						</div>
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<a href="#cbp-hrmenu"><img class="image" src="img/首页_09.png" /></a>
						</div>
					</div>
					<div class="row">
						<div class="row" style="margin-top: 50px; margin-bottom: 20px;">
						<div class="col-xs-5 col-sm-5 col-lg-5">
							<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
						</div>
						<div class="col-xs-2 col-sm-2 col-lg-2">
							<b><p style="font-size: 24px; text-align: center;">新品上市</p></b>
						</div>
						<div class="col-xs-5 col-sm-5 col-lg-5">
							<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
						</div>

					</div>						<div class="col-xs-12 col-sm-12 col-lg-12">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-lg-4" style="height: 100px;">
									<a href="#cbp-hrmenu"><img src="img/首页_19.png" id="img_01" onmouseover="mosthover(1)" onmouseout="mostout()"  style="width: 98%; height: 399px;"/></a>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<a href="#cbp-hrmenu"><img src="img/首页_22.png" id="img_02" onmouseover="mosthover(2)" onmouseout="mostout()" style="width: 98%;height: 399px;"/></a>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4" style="height: 100px;">
							       <a href="#cbp-hrmenu"><img src="img/首页_16.png" id="img_03" onmouseover="mosthover(3)" onmouseout="mostout()" style="width: 98%;height: 399px;"/></a>
						      </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-lg-12"> </div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6" style="margin-top: 50px;">
							<img src="img/首页_28.png" width="100%" />
						</div>
						<div class="col-xs-6 col-sm-6 col-lg-6" style="margin-top: 50px;">
							<img src="img/首页_30.png" width="100%" />
						</div>
					</div>
					<div class="row" style="margin-top: 50px; margin-bottom: 20px;">
						<div class="col-xs-5 col-sm-5 col-lg-5">
							<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
						</div>
						<div class="col-xs-2 col-sm-2 col-lg-2">
							<b><p style="font-size: 24px; text-align: center;">夜茉莉系列</p></b>
						</div>
						<div class="col-xs-5 col-sm-5 col-lg-5">
							<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
						</div>

					</div>
				   <div class="row">
						<div class="col-xs-12 col-sm-12 col-lg-12">
							<img src="img/首页_35.png" width="100%" />
						</div>
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<img src="img/index_(17.1).png" />
						</div>
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<img src="img/首页_17 (2).png" />
						</div>
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<img src="img/首页_17 (3).png" />
						</div>
						<div class="col-xs-3 col-sm-3 col-lg-3">
							<img src="img/index_17 (4).png" />
						</div>
					</div>
				</div>
				<!--底部-->
				<div class="footer">
					<hr class="foot-hr" />
					<div class="row" style="margin-top: 5%;">
						<div class="col-xs-1 col-sm-1 col-md-1 col-sm-offset-1">
							<img src="img/首页_06.png" />
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 footer-font">
							<span>阿里巴巴集团  | 阿里巴巴国际站 |阿里巴巴中国站|全球速卖通|淘宝网|天猫|聚划算 | 一淘 | 阿里妈妈|阿里云计算 | 云OS| 万网 | 中国雅虎 | </span>

							<span>关于淘宝 合作伙伴 营销中心 联系客服 开放平台 诚征英才 联系我们 网站地图 法律声明  2015 Taobao.com 版权所有</span>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="footer-new">
					<center>
						<span> COPYRIGHT THEFACESHOP 美沫艾莫尔(北京)化妆品销售有限公司 | 隐私声明  沪ICP备12046938号-2</span>
					</center>
				</div>
			</div>
		</div>
		

	</body>

</html>