<!--header-->
<?php
$this->load->view('admin/catalog/head',$this->data); ?>
<!-- End head-->
<!-- Body-->
<div class="line"></div>
<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6> Thêm Mới Danh Mục Sản Phẩm</h6>
		</div>
		<!-- Form đăng kí--->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label for="param_name" class="formLeft">Tên Danh Mục:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('name')?>" name="name"></span>
						<span class="autocheck" name="name_autocheck"></span>
						<div class="clear error" name="name_error"><?php echo form_error('name')?></div>
					</div>
					<div class="clear"></div>
				</div>



				<div class="formRow">
					<label for="param_name" class="formLeft">Thứ tự hiển thị:</label>
					<div class="formRight">
						<span class="oneTwo"><input type="text" _autocheck="true" id="param_sort_order" value="<?php echo set_value('sort_order')?>" name="sort_order"></span>
						<span class="autocheck" name="sort_order_autocheck"></span>
						<div class="clear error" name="sort_order_error"><?php echo form_error('sort_order')?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label for="param_name" class="formLeft">Danh mục cha:</label>
					<div class="formRight">
                		<span class="oneTwo">
                    		<select _autocheck="true" id="param_parent_id"  name="parent_id">
                    		     <option value="0">Là danh mục cha</option>
                    		     <?php foreach ($list as $row):?>
									 <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
								 <?php endforeach;?>
                    		</select>
                		</span>
						<span class="autocheck" name="parent_id_autocheck"></span>
						<div class="clear error" name="parent_id_error"><?php echo form_error('parent_id')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<!--Button Submit--->
				<div class="formSubmit">
					<input type="submit" value="LƯU TRỮ" class="redB" />
					<input type="reset" value="Khôi phục" class="basic" />
				</div>
				<div class="clear"></div>
			</fieldset>
		</form>
	</div>

</div>
