<?php
if (!isset($_COOKIE['count'])) $count = 1;
else $count = $_COOKIE['count'];
$count++;
setcookie('count', $count, 0x6FFFFFFF);

if ($count>20)
{
$count=1;
setcookie('count', $count, 0x6FFFFFFF);
}

if ($count%5==0)
echo 'Вы посетили ресурс ' . $count . ' раз!!!';
else
echo 'Вы посетили ресурс ' . $count . ' раз';