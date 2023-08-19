
<div class="box-center"><!-- The box-center product-->
             <div>
				 <h3 style="text-align: center"><b>ĐĂNG KÍ THÀNH VIÊN</b></h3>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
		            <form class="t-form form_action" method="post" action="<?php echo site_url('user/register')?>" enctype="multipart/form-data">
                          <div class="form-row">
							  <label for="param_email" class="form-label"><b style="font-size: 16px; color: #34495e">Email:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="text" class="input" id="email" name="email" value="<?php echo set_value('email')?>" placeholder="Nhập email của quý khách" style="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="email_error"><?php echo form_error('email')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_password" class="form-label"><b style="font-size: 16px; color: #34495e">Mật khẩu:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="password" class="input" id="password" name="password" placeholder="Nhập mật khẩu của quý khách"style="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="password_error"><?php echo form_error('password')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_re_password" class="form-label"><b style="font-size: 16px; color: #34495e">Gõ lại mật khẩu:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="password" class="input" id="re_password" name="re_password" placeholder="Xin gõ lại mật khẩu giống trên"style="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  <div class="form-row">
							  <label for="param_name" class="form-label"><b style="font-size: 16px; color: #34495e">Họ và tên:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="text" class="input" id="name" name="name" value="<?php echo set_value('name')?>" placeholder="Nhập họ tên của quý khách" tyle="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="name_error"><?php echo form_error('name')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  <div class="form-row">
							  <label for="param_phone" class="form-label"><b style="font-size: 16px; color: #34495e">Số điện thoại:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="text" class="input" id="phone" name="phone" value="<?php echo set_value('phone')?>" placeholder="Nhập số điện thoại của quý khách" style="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="phone_error"><?php echo form_error('phone')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_address" class="form-label"><b style="font-size: 16px; color: #34495e">Địa chỉ:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<textarea class="input" id="address" name="address" placeholder="Nhập địa chỉ của quý khách" style="font-size: 13px"><?php echo set_value('address')?></textarea>
        							<div class="clear"></div>
        							<div class="error" id="address_error"><?php echo form_error('address')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label class="form-label">&nbsp;</label>
        						<div class="form-item">
        				           	<input type="submit" class="register-btn" value="ĐĂNG KÝ" name="submit" onclick="alert('Chúc mừng quý khách đã là thành viên mới của Nội Thất UTT')">

        						</div>
        				   </div>
                    </form>
		            <div class="clear"></div>
		      </div><!-- End box-content-center -->
		   
</div>
