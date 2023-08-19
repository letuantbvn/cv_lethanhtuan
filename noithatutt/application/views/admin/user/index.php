<!-- Common view -->
<?php $this->load->view('admin/user/head'); ?>


<!-- Main content wrapper -->
<div class="wrapper">
	<div class="widget">

		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh Sách Khách Hàng Thành Viên</h6>
			<div class="num f12">Tổng số: <b>0</b></div>
		</div>

		<form action="<?php echo $action; ?>" method="get" class="form" name="filter">
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
				<thead>
				<tr>
					<td style="width:40px;" class="label"><label for="filter_id">Mã số</label></td>
					<td class="item"><input type="text" style="width:55px;" id="filter_id" value="<?php echo $this->input->get('id')?>" name="id"></td>

					<td style="width:40px;" class="label"><label for="filter_id">Tên</label></td>
					<td style="width:155px;" class="item"><input type="text" style="width:155px;" id="filter_iname" value="<?php echo $this->input->get('name')?>" name="name"></td>
					<td>
						<input type="submit" value="Lọc" class="button blueB">
						<input type="reset" onclick="window.location.href = '<?php echo admin_url('user')?>'; " value="Reset" class="basic">
					</td>
				</tr>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin'); ?>/images/icons/tableArrows.png" /></td>
					<td style="width:80px;"><?php echo lang('no.'); ?></td>
					<td><?php echo lang('name'); ?></td>
					<td><?php echo lang('email'); ?></td>
					<td><?php echo lang('phone'); ?></td>
					<td><?php echo lang('address'); ?></td>
					<td style="width:100px;"><?php echo lang('action'); ?></td>
				</tr>
				</thead>

				<tfoot>
				<tr>
					<td colspan="7">
						<div class="list_action itemActions">
							<a url="<?php echo admin_url('user/delete_all')?>" class="button blueB" id="submit" href="#submit">
								<span style="color:white;">Xóa hết</span>
							</a>
						</div>

						<div class='pagination'>
							<?php echo $this->pagination->create_links();?>
						</div>
					</td>
				</tr>
				</tfoot>

				<tbody>
				<!-- Filter -->
				<?php foreach ($list as $row): ?>
					<tr class="row_<?php echo $row->id?>">
						<td><input type="checkbox" name="id[]" value="<?php echo $row->id; ?>" /></td>

						<td class="textC"><?php echo $row->id; ?></td>


						<td><span title="<?php echo $row->name; ?>" class="tipS">
							<?php echo $row->name; ?>
						</span></td>


						<td><span title="<?php echo $row->email; ?>" class="tipS">
							<?php echo $row->email; ?>
						</span></td>

						<td>
							<?php echo $row->phone; ?>
						</td>

						<td>
							<?php echo $row->address; ?>
						</td>


						<td class="option">
							<a href="<?php echo admin_url('user/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
								<img src="<?php echo public_url('admin') ?>/images/icons/color/edit.png" />
							</a>

							<a href="<?php echo admin_url('user/del/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
								<img src="<?php echo public_url('admin') ?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>
				<?php endforeach; ?>

				</tbody>
			</table>
		</form>
	</div>
</div>
