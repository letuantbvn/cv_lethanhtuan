<!--header-->
<?php
$this->load->view('admin/admin/head',$this->data); ?>
<!-- End head-->
<!-- Body-->
<div class="line"></div>
<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6> Cập nhật thông tin Quản Trị Viên</h6>
		</div>
		<!-- Form đăng kí--->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<!--Họ và Tên admin-->
				<div class="formRow">
					<label class="formLeft" for="param_name">Họ và Tên:<span class="req">*</span></label>
					<div class="formRight">
							<span class="oneTwo">
								<input name="name" id="param_name" _autocheck="true" type="text"  value="<?php echo $info->name?>"/></span>
						<span name="name_autocheck" class="autocheck"></span>

						<!-- Kiểm tra lỗi cho giá trị HỌ VÀ TÊN-->
						<div class="clear error" name="name_error" ><?php echo form_error('name')?></div>

					</div>
					<div class="clear"></div>
				</div>

				<!--Tên đăng nhập admin-->
				<div class="formRow">
					<label class="formLeft" for="param_username">Tài khoản:<span class="req">*</span></label>
					<div class="formRight">
							<span class="oneTwo">
								<input name="username" id="param_username" _autocheck="true" type="text" placeholder="Nhập tài khoản mới" value="<?php echo $info->username?>"/></span>
						<span name="name_autocheck" class="autocheck"></span>

						<!-- Kiểm tra lỗi cho giá trị TÊN ĐĂNG NHẬP-->
						<div class="clear error" name="name_error" ><?php echo form_error('username')?></div>

					</div>
					<div class="clear"></div>
				</div>

				<!--Password  đăng nhập admin-->
				<div class="formRow">
					<label class="formLeft" for="param_username">Mật khẩu<span class="req">*</span></label>
					<div class="formRight">
							<span class="oneTwo">
								<input name="password" id="param_password" _autocheck="true" type="password" placeholder="Nhập mật khẩu" value="<?php echo set_value('password')?>"/></span>
							<br>
							<p style="margin-top: 10px; padding-left: 5%; font-size: small"><i>Nếu cập nhật mật khẩu thì mới nhập giá trị</i></p>
						<span name="name_autocheck" class="autocheck"></span>

						<!-- Kiểm tra lỗi cho giá trị PASSWORD-->
						<div name="name_error" class="clear error"><?php echo form_error('password')?></div>

					</div>
					<div class="clear"></div>
				</div>

				<!--Nhập lại mật khẩu-->
				<div class="formRow">
					<label class="formLeft" for="param_username">Nhập lại mật khẩu<span class="req"></span></label>
					<div class="formRight">
							<span class="oneTwo">
								<input name="re_password" id="param_re_password" _autocheck="true" type="password" placeholder="Nhập lại mật khẩu"  value="<?php echo set_value('re_password')?>"/></span>
						<span name="name_autocheck" class="autocheck"></span>

						<!-- Kiểm tra lỗi cho giá trị TÊN ĐĂNG NHẬP-->
						<div class="clear error" name="name_error" ><?php echo form_error('re_password')?></div>

					</div>
					<div class="clear"></div>
				</div>

				<!--Phân quyền admin-->
				<div class="formRow">
					<label class="formLeft" for="param_permission">QUYỀN CHO NHÂN VIÊN<span class="req">*</span></label>
					<div class="formRight">
						<?php foreach ($config_permissions as $controllers =>$actions):?>
							<?php
							$permissions_actions =array();
							if(isset($info->permissions->{$controllers}))
							{
								$permissions_actions = $info->permissions->{$controllers};
							}

							?>
							<div>
								<b style="font-size: 16px;text-align: center; margin-right:20px ;"><?php echo $controllers?>:</b>
								<?php foreach ($actions as $action):?>
									<div>
										<input type="checkbox" name="permissions[<?php echo $controllers?>][]" value="<?php echo $action?>" <?php echo (in_array($action, $permissions_actions))? 'checked' :'' ?>/>
										<?php echo $action?>
									</div>
								<?php endforeach;?>
							</div>

						<?php endforeach;?>
					</div>
					<div class="clear"></div>
				</div>

				<!--Button Submit--->
				<div class="formSubmit">
					<input type="submit" value="CẬP NHẬT" class="redB" />
					<input type="reset" value="KHÔI PHỤC" class="basic" />
				</div>
				<div class="clear"></div>
			</fieldset>
		</form>
	</div>

</div>
