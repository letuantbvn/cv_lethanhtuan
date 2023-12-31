  <!-- video -->
<script type='text/javascript' src='<?php echo public_url()?>/site/tivi/jwplayer.js'></script>
<script type='text/javascript'>
jQuery('document').ready(function(){
	 jwplayer('mediaspace').setup({
    'flashplayer': '<?php echo public_url()?>/site/tivi/player.swf',
    'file': 'https://youtu.be/R1JnZxI2Ky8?controls=1',
    'controlbar': 'bottom',
    'width': '560',
    'height': '315',
    'autoplay' : true
  });
})
</script>
  <script type="text/javascript">
$(document).ready(function(){
    $('a.tab').click(function(){
    var an_di=$('a.selected').attr('rel');//lấy title của thẻ <a class='active'>
    $('div#'+an_di).hide();//ẩn thẻ <div id='an_di'>
    $('a.selected').removeClass('selected');
    $(this).addClass('selected');
    var hien_thi=$(this).attr('rel');//lấy title của thẻ <a> khi ta kick vào nó
    $('div#'+hien_thi).show();//hiện lên thẻ <div id='hien_thi'>
    });
});
</script> 

<!-- zoom ảnh sản phẩm -->
<script src="<?php echo public_url()?>/site/jqzoom_ev/js/jquery.jqzoom-core.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo public_url()?>/site/jqzoom_ev/css/jquery.jqzoom.css" type="text/css">
<script type="text/javascript">
$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'standard',
    });
});
</script>
<!-- kết thúc zoom ảnh sản phẩm -->

<!-- Raty: Đánh giá sản phẩm -->
<script type="text/javascript">
$(document).ready(function() {
	//raty
	$('.raty_detailt').raty({
    	  score: function() {
    	    return $(this).attr('data-score');
    	  },
    	  half    : true,
    	  click: function(score, evt) {
        	  var rate_count = $('.rate_count');
        	  var rate_count_total = rate_count.text();
    		  $.ajax({
	  				url: '<?php echo site_url('product/raty')?>',
	  				type: 'POST',
	  				data: {'id':'<?php echo $product->id?>','score':score},
	  				dataType: 'json',
	  				success: function(data)
	  				{
	  					if(data.complete)
	  					{
		  					var total = parseInt(rate_count_total)+1;
	  						rate_count.html(parseInt(total));
		  				}
	  					alert(data.msg);	
	  				} 
    		  });
  		  }
      });
});
</script>
<!--End Kết thúc sản phẩm -->

 <div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
				 <h2 style="font-size: 16px; color: #337ab8; margin-top:6px">CHI TIẾT SẢN PHẨM </h2>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
		           <div class='product_view_img'>
		                <a href="<?php echo base_url('upload/product/'.$product->image_link)?>" class="jqzoom" rel='gal1'  title="triumph" >
				            <img  src="<?php echo base_url('upload/product/'.$product->image_link)?>" style="width:280px !important">
				        </a>
				         <div class='clear' style='height:10px'></div>
				         <div class="clearfix" >
							<ul id="thumblist" >
							    <li>
    							    <a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url('upload/product/'.$product->image_link)?>',largeimage: '<?php echo base_url('upload/product/'.$product->image_link)?>'}">
    							    <img src='<?php echo base_url('upload/product/'.$product->image_link)?>'>
    							    </a>
							    </li>
								<!-- Kiểm tra hình ảnh kèm theo-->
							    <?php if(is_array($image_list)):?>
							      <?php foreach ($image_list as $img):?>
							           <li>
            							    <a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url('upload/product/'.$img)?>',largeimage: '<?php echo base_url('upload/product/'.$img)?>'}">
            							    <img src='<?php echo base_url('upload/product/'.$img)?>'>
            							    </a>
        							    </li>
							      <?php endforeach;?>
							    <?php endif;?>
							</ul>
						</div>
		           </div>
		           
		           <div class='product_view_content'>
		               <h1 style="font-size: 20px"><?php echo $product->name?></h1>
		               
		                  
				              
		               <p class='option'>
		                   Giá:
		                  <?php if($product->discount > 0):?>
                              <?php $price_new = $product->price - $product->discount;?>
                              <span class='product_price'><?php echo number_format($price_new)?> đ</span>
                               <span class="price_old"><?php echo number_format($product->price)?> đ</span>
			              <?php else:?>
			                 <span class='product_price'><?php echo number_format($product->price)?> đ</span> 
			              <?php endif;?>
		               </p>
		               
		                <p class='option'>
		                  Danh mục: 
		                  <a href="<?php echo base_url('product/catalog/'.$catalog->id)?>" title="<?php echo $catalog->name?>">
		                     <b><?php echo $catalog->name?></b>    
		                  </a>
		               </p>
		               
		               <p class='option'>
		                  Lượt xem: <b><?php echo $product->view?></b> 
		               </p>
		               <?php if($product->warranty != ''):?>
		               <p class='option'>
		                  Bảo hành: <b><?php echo $product->warranty?></b> 
		               </p>
		               <?php endif;?>
		               <?php if($product->gifts != ''):?>
		               <p class='option'>
		                  Ưu đãi: <b><?php echo $product->gifts?></b>
		               </p>
		               <?php endif;?>
		               		               
		               Đánh giá &nbsp;
                       <span class='raty_detailt' style = 'margin:5px' id='<?php echo $product->id?>' data-score='<?php echo $product->raty?>'></span> 
                       | Tổng số: <b  class='rate_count'><?php echo $product->rate_count?></b>
   
		               <div class='action'>
						   <button class="add-cart" style="height: 40px; width: auto;">
				            <a  style="color:#ffffff;font-size:16px" href="<?php echo base_url('cart/add/'.$product->id)?>" title='Mua ngay'>THÊM VÀO GIỎ HÀNG</a>
							</button>
				            <div class='clear'></div>
			            </div>
		            
		           </div>
		           <div class='clear' style='height:15px'></div>
		           <center>

  <!-- AddThis Button BEGIN -->
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
					<script src="https://sp.zalo.me/plugins/sdk.js"></script>
					<script type="text/javascript">var switchTo5x=true;</script>
					<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
					 <script type="text/javascript">stLight.options({publisher: "19a4ed9e-bb0c-4fd0-8791-eea32fb55964", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
				<span class="fb-share-button" data-href="https://noithatutt.vn" data-layout="box_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnoithatutt.vn%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></span>
				<span class='st_fblike_hcount' displayText='Facebook Like'></span>
                <span class='st_googleplus_hcount' displayText='Google +'></span>
                <span class='st_twitter_hcount' displayText='Tweet'></span>
                <span class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></span>
<!-- AddThis Button END -->
			</center>  
			
		            <div class='clear' style='height:10px'></div>
		            <table width="100%" cellspacing="0" cellpadding="3" border="0" class="tbsicons">
					           <tbody>
					           <tr>
					                    <td width="25%"><img alt="Phục vụ chu đáo" src="<?php echo public_url('site')?>/images/icon-services.png"> <div>Phục vụ chu đáo</div></td>
					                    <td width="25%"><img alt="Giao hàng đúng hẹn" src="<?php echo public_url('site')?>/images/icon-shipping.png"><div>Giao hàng đúng hẹn</div></td>
					                    <td width="25%"><img alt="Đổi hàng trong 24h" src="<?php echo public_url('site')?>/images/icon-delivery.png"> <div>Đổi hàng trong 24h</div></td>
					           </tr>
					          </tbody>
					</table>
		      </div>
			  
			
</div>



<div class="usual" id="usual1">
     <ul>
	       <li><a title="Chi tiết sản phẩm" rel='tab2' href='javascript:void(0)' class="tab selected">Chi tiết sản phẩm</a></li>
	       <li><a title="Video" rel='tab3' href='javascript:void(0)' class="tab">Video</a></li>
	       <?php ?>


	</ul>
</div><!-- end  <div class="usual" id="usual1">-->

<div class="usual-content">
     <div id="tab2"> 
    		<?php echo $product->content?>
    		<!-- comment facebook -->
    		<center>
        <div id="fb-root"></div>
        <script src="http://connect.facebook.net/en_US/all.js#appId=170796359666689&amp;xfbml=1"></script>
        <div class="fb-comments" data-href="<?php echo current_url()?>" data-num-posts="5" data-width="550" data-colorscheme="light"></div>
        </center>   
    </div>
    <div id="tab3" style="display: none;">
	    <!-- the div chay video -->
	    <div id='mediaspace' style="margin:5px;">

		</div>
	</div>
</div>



