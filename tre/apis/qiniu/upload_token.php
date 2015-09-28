<?php
use Qiniu\Auth;

$bucket = 'trecore';
$accessKey = 'uGfdpvyioed9rMW3qRt53sRWZoyg6uE4dBKiB-Dd';
$secretKey = 'tpKeATNsfIou3ZBgYqHQi0wgRXD_ulmkSQAzRHQL';

$auth = new Auth($accessKey, $secretKey);
$upToken = $auth->uploadToken($bucket);

echo $upToken;
?> 