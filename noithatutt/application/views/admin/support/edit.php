
<?php $this->load->view('admin/support/head'); ?>

<!-- Main content wrapper -->
<div class="wrapper">

   	<!-- Form -->
	<form class="form" id="form" action="<?php echo $action; ?>" method="post">
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin'); ?>/images/icons/dark/add.png" class="titleIcon" />
					<h6>SỬA THÔNG TIN NHÂN VIÊN HỖ TRỢ</h6>
				</div>
				<!-- Tên Nhân Viên-->
				<div class="formRow">
					<label class="formLeft" for="param_name"><?php echo lang('name'); ?>:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" value='<?php echo $info->name?>' _autocheck="true" type="text" /></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- SDT Nhân Viên-->
				<div class="formRow">
					<label class="formLeft" for="param_phone"><?php echo lang('phone'); ?>:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="phone" id="param_phone" value='<?php echo $info->phone?>'  _autocheck="true" type="text" /></span>
						<span name="phone_autocheck" class="autocheck"></span>
						<div name="phone_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Tên FB Nhân Viên-->
				<div class="formRow">
					<label class="formLeft" for="param_name_fb">Tên Facebook:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="name_fb" id="param_name_fb" value="<?php echo $info->name_fb?>" type="text" /></span>
						<span name="facebook_autocheck" class="autocheck"></span>
						<div name="facebook_error" class="clear error"><?php echo form_error('name_fb')?></div>
					</div>
					<div class="clear"></div>
				</div>

				<!-- ID FB Nhân Viên-->
				<div class="formRow">
					<label class="formLeft" for="param_facebook">ID Facebook:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="facebook" id="param_facebook" value='<?php echo $info->facebook?>'  type="text" /></span>
						<span name="facebook_autocheck" class="autocheck"></span>
						<div name="facebook_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>

				<!-- Mail Nhân Viên-->
				<div class="formRow">
					<label class="formLeft" for="param_gmail"><?php echo lang('email'); ?>:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="gmail" id="param_gmail" value='<?php echo $info->gmail?>'  type="text" /></span>
						<span name="gmail_autocheck" class="autocheck"></span>
						<div name="gmail_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>

				<!-- Skyper Nhân Viên-->
				<div class="formRow">
					<label class="formLeft" for="param_skype"><?php echo lang('skype'); ?>:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="skype" id="param_skype" value='<?php echo $info->skype?>'  type="text" /></span>
						<span name="skype_autocheck" class="autocheck"></span>
						<div name="skype_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>

				<!-- stt Nhân Viên-->
				<div class="formRow">
					<label class="formLeft" for="param_sort_order"><?php echo lang('sort_order'); ?>:</label>
					<div class="formRight">
						<input name="sort_order" id="param_sort_order"  class="left" value='<?php echo $info->sort_order?>'  style="width:100px;" type="text" />
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
           		<div class="formSubmit">
           			<input type="submit" value="<?php echo lang('button_update'); ?>" class="redB" />
           			<input type="reset" value="<?php echo lang('button_reset'); ?>" class="basic" />
           		</div>
        		<div class="clear"></div>
        		
			</div>
		</fieldset>
	</form>
	
</div>
