
<div class="box-center"><!-- The box-center product-->
			<div>
			<h2 style="font-size: 25px; color: #337ab8; margin-top:6px; text-align: center	">THÔNG TIN NHẬN HÀNG</h2>
			</div>
		      <div class="box-content-center product" style="width:600px; height: 350px "><!-- The box-content-center -->
		            <form class="t-form form_action" method="post" action="<?php echo site_url('order/checkout')?>" enctype="multipart/form-data">
                          
                           <div class="form-row">
							   <label for="param_email" class="form-label"><b style="font-size: 14px; color: #34495e">Tổng số tiền:</b></label>
        						<div class="form-item">
        							 <b style="color:red; font-size: 18px"><?php echo number_format($total_amount)?> đ</b>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
                           <div class="form-row">
							   <label for="param_email" class="form-label"><b style="font-size: 14px; color: #34495e">Email:</b><span class="req">*</span></label>
        						<div class="form-item">
        							<input style="font-size: 15px" type="text" class="input" id="email" name="email" value="<?php echo isset($user->email) ? $user->email : ''?>">
        							<div class="clear"></div>
        							<div class="error" id="email_error"><?php echo form_error('email')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_name" class="form-label"><b style="font-size: 14px; color: #34495e">Họ và tên:</b><span class="req">*</span></label>
        						<div class="form-item">
        							<input style="font-size: 15px" type="text" class="input" id="name" name="name" value="<?php echo isset($user->name) ? $user->name : ''?>">
        							<div class="clear"></div>
        							<div class="error" id="name_error"><?php echo form_error('name')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  <div class="form-row">
							  <label for="param_phone" class="form-label"><b style="font-size: 14px; color: #34495e">Số điện thoại:</b><span class="req">*</span></label>
        						<div class="form-item">
        							<input  style="font-size: 15px" type="text" class="input" id="phone" name="phone" value="<?php echo isset($user->phone) ? $user->phone : ''?>">
        							<div class="clear"></div>
        							<div class="error" id="phone_error"><?php echo form_error('phone')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_address" class="form-label"><b style="font-size: 14px; color: #34495e">Ghi chú:</b><span class="req">*</span></label>
        						<div class="form-item">
        							<textarea  style="font-size: 15px" class="input" id="message" name="message"></textarea>
        							<p style="color: red; font-size: 14px">Nhập địa chỉ  và thời gian nhận hàng</p>
        							<div class="clear"></div>
        							<div class="error" id="address_error"><?php echo form_error('message')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
							  <label for="param_address" class="form-label"><b style="font-size: 14px; color: #34495e">Thanh toán qua:</b><span class="req">*</span></label>
        						<div class="form-item">
        							<select name="payment">
        							    <option value="" style="font-size: 15px" >---- Chọn cổng thanh toán -----</option>
        							    <option value="offline">Thanh toán khi nhận hàng</option>
        							    <option value="Tài Khoản">Bảo Kim</option>
        							    <option value="nganluong">Ngân lượng</option>
        							    
        							</select>
        							<div class="clear"></div>
        							<div class="error" id="payment_error"><?php echo form_error('payment')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label class="form-label">&nbsp;</label>
        						<div class="form-item">
        				           	<input type="submit" class="payment-btn" value="ĐẶT HÀNG" onclick="alert('Đặt hành thành công')"name="submit">
        						</div>
        				   </div>
                    </form>
		            <div class="clear"></div>
		      </div><!-- End box-content-center -->
		   
</div>
