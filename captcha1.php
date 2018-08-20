<?
	session_start();
 
	$img=imagecreatefromjpeg("texture.jpg");
	$image_text = empty($_SESSION['security_number']) ? 'error' : $_SESSION['security_number'];
 
        $red=rand(100,255);
	$green=rand(100,255);
	$blue=rand(100,255);
 
	$text_color=imagecolorallocate($img,255-$red,255-$green,255-$blue);
 
	$text=imagettftext($img, 16, rand(-10,10), rand(10,30), rand(25,35), $text_color,
                 "fonts/courbd.ttf", $image_text);
 
	header("Content-type:image/jpeg");
	header("Content-Disposition:inline ; filename=secure.jpg");
	imagejpeg($img);
?>