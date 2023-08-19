
<div class="box-center"><!-- The box-center product-->
		      <div class="box-content-center product"><!-- The box-content-center -->
				  <div>
					  <h3 style="text-align: center; margin-right: 40px;"><b>THÀNH VIÊN ĐĂNG NHẬP</b></h3>
				  </div>
		            <form class="t-form form_action" method="post" action="<?php echo site_url('user/login')?>" enctype="multipart/form-data">
                          <h3 style="color:red"><?php echo form_error('login')?></h3>

                          <div class="form-row">
							  <label for="param_email" class="form-label"><b style="font-size: 16px; color: #34495e">Email:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="text" class="input" id="email" name="email" value="<?php echo set_value('email')?>" placeholder="Nhập email của quý khách"style="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="email_error"><?php echo form_error('email')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_password" class="form-label"><b style="font-size: 16px; color: #34495e">Mật khẩu:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="password" class="input" id="password" name="password" placeholder="Vui lòng nhập email của quý khách">
        							<div class="clear"></div>
        							<div class="error" id="password_error"><?php echo form_error('password')?></div>
        						</div>
        						<div class="clear"></div>
						  </div>
							<div class="form-row">
								<span style="margin-left: 100px">
								<input id="remember1" type="checkbox" name="remember">
								<label for="remember1" class="remember" style="font-size: 12px">Ghi nhớ mật khẩu</label>
								</span>
								<a href="<?php echo site_url('user/pass')?>" style="margin-left:70px; font-size: 12px" class="forgotpass">Quên mật khẩu?</a>
							</div>
						<div class="form-row">
							<label class="form-label">&nbsp;</label>
							<div class="form-item">
								<input type="submit" class="login" value="ĐĂNG NHẬP" name="submit" onclick="alert('Chào mừng quý khách - Hân hạnh được phục vụ quý khách')">
								<button value="Đăng kí" class="register-btn">
									<a  style="color:#ffffff" href="http://noithatutt.vn/dang-ky">ĐĂNG KÍ</a></button>
							</div>
						</div>
                    </form>
		            <div class="clear"></div>
		      </div><!-- End box-content-center -->
		   
</div>
