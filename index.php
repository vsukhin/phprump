<?php 
date_default_timezone_set('UTC');
?>
<html>
<body style="font-size: 14pt;">
Hello, <?php echo $_SERVER['REMOTE_ADDR']; ?>
<p>
It is now <?php echo date(DATE_RFC2822); ?>
<p>
Served to you by
<a href="http://nginx.org/">Nginx</a>,
running on a
<a href="http://rumpkernel.org">rump kernel</a>...
<p>
Try <a href="phpinfo.php">phpinfo()</a>.
<?php

echo file_get_contents('http://google.com');

?>
</body>
</html>