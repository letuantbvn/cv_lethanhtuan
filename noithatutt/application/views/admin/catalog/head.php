<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<span><b>QUẢN LÝ DANH MỤC SẢN PHẨM</b></span>
		</div>

		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?php echo admin_url('catalog/add')?>">
						<img src="<?php echo public_url('admin')?>/images/icons/control/16/add.png">
						<span STYLE="font-size: 14px">Thêm mới</span>
					</a></li>

				<li><a href="<?php echo admin_url('catalog/index')?>">
						<img src="<?php echo public_url('admin')?>/images/icons/control/16/list.png">
						<span STYLE="font-size: 14px">Danh sách</span>
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
