
<div class="box-center"><!-- The box-center contact-->
             <div class="tittle-box-center">
		        <h2 style="font-size: 16px; color: #198fc4; margin-top:6px">HỎI ĐÁP</h2>
		      </div>
		      <div class="box-content-center contact"><!-- The box-content-center -->
            <form class="t-form form_action" method="POST" action="">
            
                  <div class="form-row">
					  <label for="param_name" class="form-label"><b style="font-size: 16px; color: #34495e">Họ và tên:</b><span class="req">*</span></label>
						<div class="form-item">
							<input  type="text" class="input" id="name" name="name" value="<?php echo set_value('name')?>" placeholder="Nhập họ tên quý khách" style="font-size: 13px">
							<div class="clear"></div>
							<div class="error" id="name_error"><?php echo form_error('name')?></div>
						</div>
						<div class="clear"></div>
				  </div>
				  
                  <div class="form-row">
						<label for="param_email" class="form-label"><b style="font-size: 16px; color: #34495e">Email:</b><span class="req">*</span></label>
						<div class="form-item">
							<input type="text" class="input" id="email" name="email" value="<?php echo set_value('email')?>"placeholder="Nhập email quý khách"style="font-size: 13px">
							<div class="clear"></div>
							<div class="error" id="email_error"><?php echo form_error('email')?></div>
						</div>
						<div class="clear"></div>
				  </div>
				  
				  <div class="form-row">
					  <label for="param_phone" class="form-label"><b style="font-size: 16px;color: #34495e">Số điện thoại:</b><span class="req">*</span></label>
						<div class="form-item">
							<input type="text" class="input" id="phone" name="phone" value="<?php echo set_value('phone')?>"placeholder="Nhập số điện thoại quý khách" style="font-size: 13px">
							<div class="clear"></div>
							<div class="error" id="phone_error"><?php echo form_error('phone')?></div>
						</div>
						<div class="clear"></div>
				  </div>
				  
				  <div class="form-row">
					  <label for="param_address" class="form-label"><b style="font-size: 16px; color: #34495e">Địa chỉ:</b><span class="req">*</span></label>
						<div class="form-item">
							<textarea  class="input" id="address" placeholder="Nhập địa chỉ quý khách"name="address" style="font-size: 13px"><?php echo set_value('address')?></textarea>
							<div class="clear"></div>
							<div class="error" id="address_error"><?php echo form_error('address')?></div>
						</div>
						<div class="clear"></div>
				  </div>
				  
				  
				  <div class="form-row">
					  <label for="param_title" class="form-label"><b style="font-size: 16px; color: #34495e">Tiêu đề liên hệ:</b><span class="req">*</span></label>
						<div class="form-item">
							<input type="text" class="input" id="title" name="title" value="<?php echo set_value('title')?>"placeholder="Nhập tiêu đề cần hỗ trợ quý khách"style="font-size: 13px">
							<div class="clear"></div>
							<div class="error" id="title_error"><?php echo form_error('title')?></div>
						</div>
						<div class="clear"></div>
				  </div>
				  
				   <div class="form-row">
					   <label for="param_address" class="form-label"><b style="font-size: 16px;color: #34495e">Nội dung liên hệ:</b><span class="req">*</span></label>
						<div class="form-item">
							<textarea  class="input" id="content" name="content" placeholder="Vui lòng trình bày nội dung cần hỗ trợ" style="font-size: 13px"><?php echo set_value('content')?></textarea>
							<div class="clear"></div>
							<div class="error" id="content_error"><?php echo form_error('content')?></div>
						</div>
						<div class="clear"></div>
				  </div>
                
				  
				  <div class="form-row">
						<label class="form-label">&nbsp;</label>
						<div class="form-item">
				           	<input type="submit" class="contact-btn" value="LIÊN HỆ" name='submit'>
				           	<div class="load"></div>
						</div>
				   </div>
            </form>
            <div class='clear'></div>
            <div id='content_contact'>
            
            </div>
            
         </div><!-- End box-content-center contact-->
 </div><!-- End box-center -->
