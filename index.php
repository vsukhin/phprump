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

// Requiring TLS 1.0 or better when using file_get_contents():
$ctx = stream_context_create([
    'ssl' => [
        'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT,
    ],
]);
$html = file_get_contents('https://google.com/', false, $ctx);

// Requiring TLS 1.1 or 1.2:
$ctx = stream_context_create([
    'ssl' => [
        'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT |
                           STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT,
    ],
]);
$html = file_get_contents('https://google.com/', false, $ctx);
?>
</body>
</html>