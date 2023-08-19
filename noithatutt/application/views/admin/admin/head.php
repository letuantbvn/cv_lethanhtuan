<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<span><b>QUẢN LÝ QUẢN TRỊ VIÊN</b></span>
		</div>

		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?php echo admin_url('admin/add')?>">
						<img src="<?php echo public_url('admin')?>/images/icons/control/16/add.png">
						<span STYLE="font-size: 14px" >THÊM MỚI</span>
					</a></li>

				<li><a href="<?php echo admin_url('admin/index')?>">
						<img src="<?php echo public_url('admin')?>/images/icons/control/16/list.png">
						<span STYLE="font-size: 14px">DANH SÁCH</span>
					</a></li>
			</ul>
		</div>

		<div class="clear"></div>
	</div>
</div>

<div class="line"></div>

<!-- Message -->
<?php if (isset($message)):?>
	<div class="wrapper">
		<div class="nNote success hideit">
			<p><strong>Thông báo: </strong><?php echo $message; ?></p>
		</div>
	</div>
<?php endif; ?>
