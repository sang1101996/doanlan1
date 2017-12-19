<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab06_4_3</title>

</head>

<body>
<pre><?php 
  echo "Phân tích cấu trúc để lọc và in ra các thông tin chọn lọc trong thẻ head.<br>";
  echo "từ trang web http://thethao.vnexpress.net/.<br><br>";

  $content = file_get_contents("http://thethao.vnexpress.net/"); 
  //echo $content; 
  $pattern='/<h[0-9]? class="title_news">.*<\/h[0-9]?>/imsU';
  preg_match_all($pattern, $content, $arr);
  print_r($arr); 
?>
</body>
</html>
