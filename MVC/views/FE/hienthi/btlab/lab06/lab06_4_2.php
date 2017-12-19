<?php
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}

function checkUserName($string)
{
	if (preg_match("/^[a-zA-Z0-9._-]*$/",$string)) 
	  return true;
	return false;
}

function checkpassword($string)
{
  if(preg_match("/^[a-zA-Z0-9]*$/",$string))  
  {
    if(!preg_match("/[a-z]/", $string)) 
      return false;
    if(!preg_match("/[A-Z]/", $string))
      return false;
    if(!preg_match("/[0-9]/", $string))
      return false;
    return true;
  }
  return false;
}


function checkEmail($string)
{
	if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
	 return true;
	return false;
}

function checkPhone($string)
{
  if(preg_match("/^[0-9]{10,11}$/", $string))
    return true;
  return false;
}

function checkNgay($string)
{
  if(preg_match("/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/",$string))
  {
      return true;
  }
  return false;
}

function ngayHienTai()
{
  $now = getdate();
  $currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];
  return $currentDate;
}


$sm = postIndex("submit");
$username = postIndex("username");
$password = postIndex("password");
$email = postIndex("email");
$date = postIndex("date");
$phone = postIndex("phone");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab6_4_2</title>
<style>
fieldset{width:50%; margin:100px auto;}
.infosai{width:600px; color:#000; background:#f57900  ; margin:0 auto}
.infodung{width:600px; color:#006; background:#6FC; margin:0 auto}
#frm1 input{width:300px}
</style>
</head>

<body>
<fieldset>
<legend style="margin:0 auto">Đăng ký thông tin </legend>
<form action="lab06_4_2.php" method="post" enctype="multipart/form-data" id='frm1'>
<table  align="center">
    <tr>
      <td width="88">UserName</td>
      <td width="317"><input type="text" name="username" value="<?php echo $username;?>"/>*</td></tr>
       <tr>
      <td>Mật khẩu</td>
      <td><input type="text" name="password"  />*</td></tr>
       <tr>
      <td>Email</td>
      <td><input type="text" name="email"  value="<?php echo $email;?>"  />*</td></tr>
       <tr>
      <td>Ngày sinh</td>
      <td><input type="text" name="date"  />*</td></tr>
       <tr>
      <td>Điện thoại</td>
      <td><input type="text" name="phone"  /></td></tr>
      
      <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>

<?php
if ($sm !="")
{
		$err ="";

    if($username == "")
    {
      $err .= "UserName không được bỏ trống.<br>";
    }
    else
    {
      if (checkUserName($username)==false)
        $err .= "Username: Các ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và - <br>";
    }

    if($password == "")
    {
      $err .= "Mật khẩu không được bỏ trống.<br>";
    }
    else
    {
      if(strlen($password)<8)
      {
        $err .="Mật khẩu phải ít nhất 8 ký tự.<br>";
      }
      else
      {
        if(!checkpassword($password))
        {
          $err .= "Mật khẩu không được có các ký tự đặc biệt \ ^ $ [ ] | ( ) ? * + { } ."."<br>";
          $err .= "Và phải có ít nhất một ký tự số, một ký tự hoa, một ký tự thường.<br>";
        }
      }
    }

    if($email == "")
    {
      $err .= "Email không được bỏ trống.<br>";
    }
    else
    {
      if (checkEmail($email)==false) 
        $err .= "Định dạng email sai! VD: abc@gmail.com<br>";
    }
    
    if($date == "")
    {
        $err .= "Ngày không được bỏ trống.<br>";
    }
    else
    {
      if(!checkNgay($date))
      {
         $err .= "Ngày nhập không đúng. VD: ".ngayHienTai()."<br>";
      }
    }

    if($phone == "")
    {
        $err .= "Số điện thoại không được bỏ trống.<br>";
    }
    else
    {
      if(strlen($phone) <10)
      {
        $err .= "Số điện thoại phải từ 10 đến 11 số.<br>";      }
      else
      {
        if(!checkPhone($phone))
        {
           $err .= "Số điện thoại phải là số.<br>";
        }
      }
      
    }
    
    if($err != "")
    {
      ?>
        <div class="infosai"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span>Lỗi<br />
          <?php echo $err; ?>
        </div>
      <?php
    }
    else
    {
      ?>
      <div class="infodung">Thông tin bạn vừa nhập là:<br />
        <?php 
          $err = "";
          $err .= "Tên: ".$username."<br>";
          $err .= "Mật khẩu: ".$password."<br>";
          $err .= "Email: ".$email."<br>";
          $err .= "Ngày sinh: ".$date."<br>";
          $err .= "Điện thoại: ".$phone."<br>";
          echo $err;
        ?>
      </div>
    <?php
    }
}
?>
</body>
</html>
