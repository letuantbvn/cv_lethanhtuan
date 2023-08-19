<style>table#cart_ccontents td{padding:10px;border:1px solid #ccc}</style>

<div class="box-center"><!-- The box-center product-->
     <div class="tittle-box-center">
		 <h2 style="font-size: 16px; color: #337ab8; margin-top:6px">THÔNG TIN GIỎ HÀNG (Có <?php echo $total_items?> sản phẩm)</h2>
      </div>
      <div class="box-content-center product"><!-- The box-content-center -->
      <?php if($total_items > 0):?>
      <form action="<?php echo base_url('cart/update')?>" method="post">
            <table id="cart_ccontents" style="margin-top: 20px; width:550px;">
               <thead>
                   <th style="text-align: center; font-size: 18px">SẢN PHẨM </th>
                   <th style="text-align: center; font-size: 18px">GÍA BÁN</th>
                   <th style="text-align: center; font-size: 18px">SỐ LƯỢNG</th>
                   <th style="text-align: center; font-size: 18px">TỔNG SỐ</th>
                   <th style="text-align: center; font-size: 18px">XÓA</th>
               </thead>
               <tbody>
                     <?php $total_amount = 0;?>
                    <?php foreach ($carts as $row):?>
                    <?php $total_amount = $total_amount + $row['subtotal'];?>
                      <tr>
                           <td>
                              <?php echo $row['name'];?>
                           </td>
                           <td>
                              <?php echo number_format($row['price']);?>đ
                           </td>
                           <td>
                              <input name="qty_<?php echo $row['id']?>" value="<?php echo $row['qty'];?>" size="5"/>
                           </td>
                           <td>
                              <?php echo number_format($row['subtotal']);?>đ
                           </td>
                           <td><a href="<?php echo base_url('cart/del/'.$row['id'])?>">Xóa</a></td>
                       </tr>
                    <?php endforeach;?>
                   
                    <tr>
                       <td colspan="5" style="padding-left: 100px">
                       Tổng số tiền thanh toán: <b style="color:red"><?php echo number_format($total_amount)?>đ</b>
                       - <a href="<?php echo base_url('cart/del')?>" >Xóa toàn bộ</a>
                       </td>
                    </tr>
                     <tr>
                       <td colspan="5" style="padding-left: 120px">
                       <button type="submit" class="update-btn-product">CẬP NHẬT</button>
						   <button class="buy-btn" height: 40px; width: auto;>
						   <a style="color:#ffffff;" href="<?php echo site_url('order/checkout')?>">MUA HÀNG</a>
							</button>
                       </td>
                    </tr>
               </tbody>
            </table>
           </form>
           <?php else:?>
           <h4>Không có sản phẩm nào trong giỏ hàng</h4>
           <?php endif;?>
      </div>
</div>
