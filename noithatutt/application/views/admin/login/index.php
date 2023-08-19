<html>
	<head>
		<!-- Head line -->
		<?php $this->load->view('admin/head');?>
		<img src="<?php echo public_url('admin')?>/crown/images/backgrounds/LOGO.png" class="img-logo">

	</head>

	<body class="nobg loginPage" style="min-height:100%;">
	<!-- Main content wrapper -->

	<div class="loginWrapper" style="top:45%;">

		<button class="back_home"style="color: white ; margin-left: 60px;" ><a href="http://noithatutt.vn/"> QUAY LẠI TRANG KHÁCH</a></button>
		<div class="widget" id="admin_login" style="height:auto; margin:auto;">
			<div class="title"><img src="<?php echo public_url('admin')?>/images/icons/dark/laptop.png" alt="" class="titleIcon" />
				<h6 style="text-align: center; font-family: Lora ;font-size: 20px; color: #000000" >ĐĂNG NHẬP HỆ THỐNG</h6>
			</div>

			<form class="form" id="form" action="" method="post">
				<fieldset>
					<div class="formRow">
						<label for="param_username" style="font-size: 13px;"><b>Tên đăng nhập:</b></label>
						<div class="loginInput"><input type="text" name="username" id="param_username" /></div>
						<div class="clear"></div>
					</div>

					<div class="formRow">
						<label for="param_password" style="font-size: 14px"><b>Mật khẩu:</b></label>
						<div class="loginInput"><input type="password" name="password" id="param_password" /></div>
						<div class="clear"></div>
					</div>

					<div class="loginControl">
						<div style="color:red; font-style: italic; text-align: center"> <?php echo form_error('login');?></div>
						<input type='hidden' name="submit" value='1'/>
						<input type="submit"  value="Đăng nhập" class="dredB logMeIn" />
						<label class="label-for-checkbox inline">
							<input class="checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" >
							<span> Ghi nhớ tài khoản </span>
						</label>
						<br>
						<div class="clear"></div>

					</div>

				</fieldset>
			</form>
		</div>

	</div>

	<!-- Footer line -->
	<?php $this->load->view('admin/footer');?>
	</body>


</html>
