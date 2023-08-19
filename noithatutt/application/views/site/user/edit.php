
<div class="box-center"><!-- The box-center product-->
             <div>
				 <h2 style="text-align:center;font-size: 25px; color: #337ab8; margin-top:6px">CHỈNH SỬA THÔNG TIN THÀNH VIÊN</h2>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
		            <form class="t-form form_action" method="post" action="<?php echo site_url('user/edit')?>" enctype="multipart/form-data">
                          <div class="form-row">
							  <label for="param_email" class="form-label"><b style="font-size: 16px; color: #34495e">Email:</b></label>
        						<div class="form-item" style="font-size: 13px">
        							 <?php echo $user->email?>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_password" class="form-label"><b style="font-size: 16px; color: #34495e">Mật khẩu:</b></label>
        						<div class="form-item">
        							<input type="password" class="input" id="password" name="password" style="font-size: 13px">
        							<div class="clear"></div>
        							<i style="color:firebrick">Nếu thay đổi mật khẩu thì nhập dữ liệu</i>
        							<div class="error" id="password_error"><?php echo form_error('password')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_re_password" class="form-label"><b style="font-size: 16px; color: #34495e">Gõ lại mật khẩu:</b></label>
        						<div class="form-item">
        							<input type="password" class="input" id="re_password" name="re_password" style="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_name" class="form-label"><b style="font-size: 16px; color: #34495e">Họ và tên:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="text" class="input" id="name" name="name" value="<?php echo $user->name?>">
        							<div class="clear"></div>
        							<div class="error" id="name_error"><?php echo form_error('name')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  <div class="form-row">
							  <label for="param_phone" class="form-label"><b style="font-size: 16px; color: #34495e">Số điện thoại:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<input type="text" class="input" id="phone" name="phone" value="<?php echo $user->phone?>" style="font-size: 13px">
        							<div class="clear"></div>
        							<div class="error" id="phone_error"><?php echo form_error('phone')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_address" class="form-label"><b style="font-size: 14px; color: #34495e">Địa chỉ:<span class="req">*</span></b></label>
        						<div class="form-item">
        							<textarea class="input" id="address" name="address" style="font-size: 13px"><?php echo $user->address?></textarea>
        							<div class="clear"></div>
        							<div class="error" id="address_error"><?php echo form_error('address')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label class="form-label">&nbsp;</label>
        						<div class="form-item">
        				           	<input type="submit" class="edit-info" value="CHỈNH SỬA THÔNG TIN" name="submit">
        						</div>
        				   </div>
                    </form>
		            <div class="clear"></div>
		      </div><!-- End box-content-center -->
		   
</div>
