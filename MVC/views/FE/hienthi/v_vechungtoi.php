 <style type="text/css">
	#lab
{	
	float: left;
	padding:10px 10px;
	margin:100px 30px;
	background-color: rgba(0, 0, 0, 0.85);
	color:white;
	

	
}
#lab>ul
{
	float: left;
	list-style: none;
	
}

#lab>ul>li>a
{
	display: block;
	color: #292929;
	font-weight: bold;
	text-decoration: none;
	padding: 10px 6px 30px 6px;
	margin:-10px 15px;
	font-size:18px;
	font-family:"Comic Sans MS", cursive;
	
	
	
	
}
#lab>ul>li
{	
	position: relative;
	float: left;
	margin: 0px 20px;
	padding:5px;
}

#lab>ul>li>ul
{
	display:none;
	position:absolute;
	top:20px;
	width:200px;
	text-align:left;
	
}
#lab>ul>li:hover ul
{
	display: block;
	background-color: rgba(0, 0, 0, 0.85);
	width:300px;
	left:10px;
	
	
	
	
}
#lab ul li ul
{
	position: absolute;
	display: none;
	width: 10em;
	list-style:none;
	
	
	
	
}
#lab ul li ul a
{
	text-decoration: none;
	font-family:"Comic Sans MS", cursive;
	margin:20px;
	
	
	
	
}
#lab ul li :hover
{
	color:#F00;
	
}

#lab ul li ul li
{
	padding:5px;
	width: 100%;
}


</style>

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
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
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
    
<script type="text/javascript" src="js/responsive-nav.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <div class="main">
      
				<h3 style="margin-left:800px; font-size:60px;">Đồ án Web</h3>
				<div style="width:1000px; margin-left:500px;" >
					<img src="../images/team2.jpg" class="img-responsive" alt=""/>
				    <div >
					   <div >
					   	 <h2>Đặng Hồng Sang</h2>
                         <p>Lớp D14TH05</p>
                         <p>MSSV DH51401095</p>
                         <p>Nhóm 26</p>
						 
					   </div>
					</div>
                      <p >Bài tập lab </p>
					


                    
				</div>
		
	</div>
    <div id="lab" style="margin-left:500px;">
			<ul>
				<li>Lab 2
					<ul>
						<li><a href="btlab/lab02/lab2_1a.html">lab2_1a</a></li>
                        <li><a href="btlab/lab02/lab2_1b.php">lab2_1b</a></li>
                        <li><a href="btlab/lab02/lab2_2.php">lab2_2</a></li>
                        <li><a href="btlab/lab02/lab2_3.php">lab2_3</a></li>
                        <li><a href="btlab/lab02/lab2_4.php">lab2_4</a></li>
                        <li><a href="btlab/lab02/lab2_5.php">lab2_5</a></li>
                        <li><a href="btlab/lab02/lab2_5a.php">lab2_5b</a></li>
                        <li><a href="btlab/lab02/lab2_5b.php">lab2_5b</a></li>
                        <li><a href="btlab/lab02/lab2_6.php">lab2_6</a></li>
					</ul>
				</li>
                <li>Lab 2
					<ul>
						<li><a href="btlab/lab02/lab2_1a.html">lab2_1a</a></li>
						<li><a href="lab2/lab2/bài 3.html">Bài 3</a></li>
						<li><a href="lab2/lab2/bài 4.html">Bài 4</a></li>
					</ul>
				</li>
                <li>Lab 3
					<ul>
						<li><a href="lab3/lab3_bai1.html">Bài 1</a></li>
						<li><a href="lab3/lab3_bai2.html">Bài 2</a></li>
						<li><a href="lab3/lab3_bai3.html">Bài 3</a></li>
					</ul>
				</li>
                <li>Lab 4
					<ul>
						<li><a href="lab4/lab4/lab4/lab4_bai1.html">Bài 1</a></li>
						<li><a href="lab4/lab4/lab4/lab4_bai2.html">Bài 2</a></li>
					</ul>
				</li>
                <li>Lab 5
					<ul>
						<li><a href="lab5/lab5/lab5_bai1.html">Bài 1</a></li>
						<li><a href="lab5/lab5/lab5_bai2.html">Bài 2</a></li>
						<li><a href="lab5/lab5/lab5_bai3.html">Bài 3</a></li>
						<li><a href="lab5/lab5/lab5_bai4.html">Bài 4</a></li>
					</ul>
				</li>
                <li>Lab 6
					<ul>
						<li><a href="lab6/lab6_bai1.html">Bài 1</a></li>
						<li><a href="lab6/lab6_bai2.html">Bài 2</a></li>
					</ul>
				</li>
				<li>Lab 7
					<ul>
						<li><a href="lab7/lab7_bai1.html">Bài 1</a></li>
						<li><a href="lab7/lab7_bai2.html">Bài 2</a></li>
						<li><a href="lab7/lab7_bai3.html">Bài 3</a></li>
						<li><a href="lab7/lab7_bai4.html">Bài 4</a></li>
						<li><a href="lab7/lab7_bai5.html">Bài 5</a></li>
					</ul>
				</li>
				<li>Lab 8
					<ul>
						<li><a href="lab8/lab8_bai1.html">Bài 1</a></li>
						<li><a href="lab8/lab8_bai2.html">Bài 2</a></li>
						<li><a href="lab8/lab8_bai3.html">Bài 3</a></li>
						<li><a href="lab8/lab8_bai4.html">Bài 4</a></li>
					</ul>
				</li>
				<li>Lab 9
					<ul>
						<li><a href="lab9/lab9_bai1.html">Bài 1</a></li>
						<li><a href="lab9/lab9_bai2.html">Bài 2</a></li>
					</ul>
				</li>
				
			</ul>
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