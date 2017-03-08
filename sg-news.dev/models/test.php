<?php
$url = 'https://www.unian.ua/politics/1813896-ukrajina-pokaje-sudu-v-gaazi-povniy-obmin-listami-z-rf-schodo-porushen-mijnarodnih-konventsiy.html';


$url = explode ('/', $url);

$url = substr ($url[4], 0, 7);

echo $url.PHP_EOL;

