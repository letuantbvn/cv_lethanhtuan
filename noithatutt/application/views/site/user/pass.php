<div class="box-center">
	<div>
		<h3 style="text-align: center">LẤY LẠI MẬT KHẨU</h3>
	</div>
	<form class="t-form form_action" method="post" action="#" enctype="multipart/form-data">
		<div class="form-row">
			<label for="param_email" class="form-label">Email:<span class="req">*</span></label>
			<div class="form-item">
				<input type="text" class="input" id="email" name="email" value="<?php echo set_value('email')?>" placeholder="Nhập email của quý khách">
				<div class="clear"></div>
				<div class="error" id="email_error"><?php echo form_error('email')?></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="form-row">
			<label class="form-label">&nbsp;</label>
			<div class="form-item">
				<input type="submit" class="register-btn" value="LẤY LẠI MẬT KHẨU" name="submit" onclick="alert('Vui lòng check mail của quý khách')">
			</div>
		</div>
	</form>
	<div class="clear"></div>
</div>
