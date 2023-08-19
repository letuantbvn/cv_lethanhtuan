<html>
	<head>
		   <?php $this->load->view('site/head'); ?>
		<body>
			<!-- Nút ấn trở lên trên-->
	           <a href="#" id="back_to_top">
				   <img src="<?php echo public_url()?>site/images/arrow-top.png" style="width: 50px; margin-right: 30px; margin-bottom: 10px;">
			   </a>
			<!--wrapper-->
				<div class="wraper">
					<div class="header">
					   <?php $this->load->view('site/header')?>
					</div>
					<!-- Nội dung-->
					<div id="container">
						<!-- Nội dung bên trái-->
						<div class="left">
							<?php $this->load->view('site/left', $this->data);?>

						</div>

						<!-- Nội dung giữa-->
						<div class="content">
							<?php $this->load->view($temp, $this->data);?>
						</div>
						
						<!-- Nội dung bên phải-->
						<div class="right">
							<?php $this->load->view('site/right', $this->data);?>
						</div>
						<!-- Tránh vỡ giao diên-->
						<div class="clear"></div>

						<!-- Nội dung chân trang-->
						<div class="footer">
							 <?php $this->load->view('site/footer')?>
						</div>

						<div id="copyright" style="margin-left:350px;">
							Copyright © 2019 - SVTM21 - UTT | All rights reserved.
						</div>

					</div>
					<!-- Ảnh hiển thị các cổng thanh toán-->
					<center>
						<img src="<?php echo public_url()?>site/images/bank.png">
					</center>
				</div>
		</body>

	<!---Zalo-->
	<div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420" style="margin-left: 80px"></div>
	<script src="https://sp.zalo.me/plugins/sdk.js"></script>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				xfbml            : true,
				version          : 'v3.3'
			});
		};

		(function(d, s, id)
		{
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id))
				return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your customer chat code -->
	<div class="fb-customerchat"
		 attribution=setup_tool
		 page_id="982347035195111"
		 theme_color="#ff7e29"
		 logged_in_greeting="Chào mừng quý bạn "
		 logged_out_greeting="Chào mừng quý bạn ">
	</div>
	</head>
</html>
