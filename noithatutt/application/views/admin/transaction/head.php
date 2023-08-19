<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<span><b>QUẢN LÝ GIAO DỊCH</b> </span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?php echo admin_url('transaction/index')?>">
					<img src="<?php echo public_url('admin')?>/images/icons/control/16/list.png">
					<span STYLE="font-size: 14px">Danh sách</span>
				</a></li>
				
				<li><a href="<?php echo admin_url('transaction/export'); ?>">
					<img src="<?php echo public_url('admin'); ?>/images/excel.png" />
					<span STYLE="font-size: 14px">Xuất ra excel</span>
				</a></li>
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>

<script type="text/javascript">
(function($)
{
	$(document).ready(function()
	{
		var main = $('#form');
		
		// Tabs
		main.contentTabs();
	});
})(jQuery);
</script>
