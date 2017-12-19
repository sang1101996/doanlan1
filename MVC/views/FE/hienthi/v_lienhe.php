<head>
<title>Free Snow Bootstrap Website Template | Home :: w3layouts</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="../application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="../js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="../css/fwslider.css" media="all">
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/fwslider.js"></script>
<!--end slider -->
<script type="../text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>

<!--header-->
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="../index.php"><img src="../images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="../images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="../index.php?ac=shop">Sản Phẩm</a></li>
						    	<li><a href="../hienthi/sukien.php?ac=sukien">Sự Kiện</a></li>
						    	
						    	<li><a href="../hienthi/v_vechungtoi.php?ac=vechungtoi">về chúng tôi</a></li>
						    	<li><a href="../hienthi/v_lienhe.php?ac=lienhe">Liên Hệ</a></li>						
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="../js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search" >
								<form action="hienthi/kqtimkiemsp.php">
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="TenSP" id="tim">
									<input class="sb-search-submit" type="submit" value="" name="search">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="../js/classie.js"></script>
						<script src="../js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="../images/edit.png" alt=""/></a>
						  		<a href="#"><img src="../images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="../images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>
    <!--end header-->
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				  <div class="map">
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
				  </div>
				</div>
				<div class="col-md-5">
					<p class="m_8">Cửa hàng chuyên bán những loại giày với những thương hiệu thời trang nam uy tín hàng đầu Việt Nam và trên thế giới. Với sự quản lý chặt chẽ, chuyên nghiệp của đội ngủ quản lý; Nỗ lực sáng tạo không ngừng của bộ phận thiết kế, Sự tận tâm của nhân viên bán hàng… là những yếu tố làm nên thương hiệu giày lớn mạnh như hiện nay.</p>
					<div class="address">
				                <p>Thành Phố HCM</p>
						   		<p>180 Cao lỗ, phường 4, quận 8</p>
						   		<p>Viet Nam</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>sangsang.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 contact">
				  <form method="post" action="contact-post.html">
					<div class="to">
                     	<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					 	<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
					</div>
					<div class="text">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                   <div class="form-submit">
			           <input name="submit" type="submit" id="submit" value="Submit"><br>
			           </div>
	                </div>
	                <div class="clear"></div>
                   </form>
			     </div>
		    </div>

	     </div>
	   </div>
	  </div>
      <div style="clear:both;"></div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Người sáng lập</h4>
							<li><a href="#">Sang Đặng</a></li>
							<li><a href="#">Lộc Trần</a></li>
							<li><a href="#">D14TH05 TEAM</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Về chúng tôi</h4>
							<li><a href="#">Thông Tin Team</a></li>
							<li><a href="#">Ngày thành lập</a></li>
							<li><a href="#">Đối tác </a></li>
							<li><a href="#">Thương hiệu</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Hổ trợ khách hàng </h4>
							<li><a href="#">HotLine</a></li>
							<li><a href="#">Địa chỉ liên hệ</a></li>
							<li><a href="#">Chính sách đổi trả</a></li>
							<li><a href="#">Chính sách bảo hành</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
		   					
						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			            <p>© 2017 Template by Sang Đặng </p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>
			</div>
		</div>