<script>
	function kiemtra()
	{
		if(window.confirm("ban co muon xoa khong"))
		{
			return true;
		}
		else
		{
			return false;	
		}
	}
	function kiemtraupdate()
	{
		if(window.confirm("ban muon update khong"))
			{
				return true;
			}
		else
			{
				return false;
			}
	}
</script>
<?php
isset($_SESSION)?$_SESSION:"";
//session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<p align="center" style="text-shadow:#BEC8F4" >Trang sản phẩm của bạn</p>
<form  action='#' method='post'>
<center>
<table class="table table-bordered" align="center" border="1" width="850px"  >
              <thead>
                <tr bgcolor="#6299EF">
                  <td>Ảnh</td>
                  <td>Tên</td>
                  <td>Số lượng</td>
				  <td>Giá</td>
                  <td>Tổng thành tiền</td>
                  <td>xóa</td>
				</tr>
              </thead>
              <tbody>
              <?php	
			  print_r($_SESSION);
			
			  foreach($_SESSION['giohang']as $v) 
			  {  
			  ?>
                <tr>
              
			 <td> <img width="60" src="<?php echo $v['image'] ?>" alt=""/></td>
                  <td><?php echo $v['tensp']  ?></td>
                  <td><input type="number" name="<?php echo $v['masp'] ?>" value="<?php echo $v['soluong']?>"></input></td>
                  <td><?php echo $v['gia']?></td>
                   <td><?php echo  $v['soluong']*$v['gia'] ?></td>
                  
                 <td><a  href="xoa.php?id=<?php echo $v['masp'] ?>"onclick="return kiemtra()" style="text-decoration:none" >xóa</td>
				
                </tr>
				<tr>
                  <?php
				 
				   
				 
				
				   
			  }
			  
			  
				  ?>
                  
				</tbody>
             
            </table>
            <td><input type="submit" name="ud" value="Update" onclick="return kiemtraupdate()"></td>
           </center>
            <center> <form>
             <tr>
             <td><a href="Thanhtoan.php" style="text-decoration:none">Thanh toán</a></td></tr>
             </form></center>
           </form>
