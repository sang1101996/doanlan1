<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>




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

	 