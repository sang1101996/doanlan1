<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML><head>
<title>Free Snow Bootstrap Website Template | Single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>

     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
</head>
<?php
//print_r($dshinhTheoMaSP);
?>
<!--start header-->
    <?php
	include("hienthi/header.php")
	?>
    <!--end header-->     

<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
                         <?php 
						 foreach($dshinhTheoMaSP as $k=>$row)
						 {?>
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/<?php echo $row->dshinh;?>" />
									<img class="etalage_source_image" src="images/<?php echo $row->dshinh;?>" />
								</a>
							</li>
						<?php
						 }
						?>	
						</ul>
					    </div>
				        <!-- end product_slider -->
				        <div class="single_right">
				        	<h3>Tên Sản Phẩm : <?php echo $san_pham->tensp ?></h3>
				        	<h3>Xuất Xứ : <?php echo $san_pham->xuatxu ?></h4>
				        	<ul class="options">
								<h4 class="m_12">Select a Size(cm)</h4>
								<li><a href="#">6</a></li>
								<li><a href="#">6.5</a></li>
								<li><a href="#">7</a></li>
								<li><a href="#">7.5</a></li>
								<li><a href="#">8</a></li>
								<li><a href="#">8.5</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">9.5</a></li>
                                <li><a href="#">10</a></li>
							</ul>
				        	<ul class="product-colors">
								<h3>available Colors</h3>
								<li><a class="color1" href="#"><span> </span></a></li>
								<li><a class="color2" href="#"><span> </span></a></li>
								<li><a class="color3" href="#"><span> </span></a></li>
								<li><a class="color4" href="#"><span> </span></a></li>
								<li><a class="color5" href="#"><span> </span></a></li>
								<li><a class="color6" href="#"><span> </span></a></li>
								<div class="clear"> </div>
                                
                                
							</ul>
							<div class="btn_form">
							  
							</div>
							
							<div class="social_buttons">
								
								<button type="button" class="btn1 btn1-default1 btn1-twitter" onclick="">
					              <i class="icon-twitter"></i> Tweet
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-facebook" onclick="">
					              <i class="icon-facebook"></i> Share
					            </button>
					             <button type="button" class="btn1 btn1-default1 btn1-google" onclick="">
					              <i class="icon-google"></i> Google+
					            </button>
					           
				          </div>
				        </div>
				        <div class="clear"> </div>
				</div>
				<div class="col-md-3">
				  <div class="box-info-product">
					<p class="price2"><?php echo $san_pham->gia ?></p>
					       <ul class="prosuct-qty">
								<span>Quantity:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
							<button type="submit" name="Submit" class="exclusive">
							   <span>Add to cart</span>
							</button>
				   </div>
			   </div>
			</div>		
			<div class="desc">
			   	<h4>Thông thin chi tiết</h4>
			   	<p><?php echo $san_pham->thongtinchitiet ?></p>
                
               <h4 style="padding-top:100px; margin-left:px;font-size:40px;">Sản phẩm liên quan</h4>
                <?php 
				foreach($dsramdomSP as $sp)
				{
			?>
				 <div class="col-md-3 shop_box" style=" width:300px; ><a href="single.html">
					<a href="chitietsanpham.php?ma_sp=<?php echo $sp->masp ?>"><img src="images/<?php echo $sp->hinh ?>" class="img-responsive" alt=""/></a>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<div class="shop_desc">
						<h3><a href="chitietsanpham.php?ma_sp=<?php echo $sp->masp ?>"><?php echo $sp->tensp ?></a></h3>
						<p>Xuất xứ : <?php echo $sp->xuatxu ?></p>
                        <p>Hãng : adidas</p>
						<span class="actual">Giá : <?php echo $sp->gia ?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="?ac=cart&id=<?php echo $sp->masp ?>">Add To Cart</a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a>
                </div>
                
              <?php 
			  	}
			  ?>
				
				
			</div>
			</div>
            
			</div>
            </div>
            
          
            
              <!-- start footer -->
   
    <?php
	include("hienthi/footer.php")
	?>
        <!-- end footer -->
            
</body>	
