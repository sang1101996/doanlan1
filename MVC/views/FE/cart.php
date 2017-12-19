<?php
$c_sanpham = new c_sanpham();
$c_sanpham->sanphamcart();
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>


<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

</head>



<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
            <?php 
				foreach($sanphams as $sp)
				{
			?>
				 <div class="col-md-3 shop_box" style=" width:300px; ><a href="single.html">
					<img src="images/<?php echo $sp->hinh ?>" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<div class="shop_desc">
						<h3><a href="chitietsanpham.php?ma_sp=<?php echo $sp->masp ?>"><?php echo $sp->tensp ?></a></h3>
						<p>Xuất xứ : <?php echo $sp->xuatxu ?></p>
                        <p>Hãng : adidas</p>
						<span class="actual">Giá : <?php echo $sp->gia ?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="hienthi/giohang.php?id=<?php echo $sp->masp ?>">Add To Cart</a></li>
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

	 