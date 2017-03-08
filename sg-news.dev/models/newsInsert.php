<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$db = new PDO("mysql:host=localhost;dbname=sg_news;", "dbuser", "123");

$sql = "INSERT INTO news (title, link, description, pub_date) VALUES (?, ?, ?, ?)";

$stmt = $db->prepare($sql);

$feed = new SimplePie();
$feed->set_feed_url('https://rss.unian.net/site/news_ukr.rss');
$feed->enable_cache(false);
$feed->init();

$items = $feed->get_items();

$count2 = 0;
foreach ($items as $item){
    $stmt->execute([
        $item->get_title(),
        $item->get_link(),
        strip_tags($item->get_description()),
        $item->get_date("Y-m-d H:i:s"),
    ]);
    $count2++;
}

$count = $stmt->rowCount();

$log = new Logger('sg_news');
$log->pushHandler(new StreamHandler('../logs/sg_news.log', Logger::DEBUG));

$log->info($count2.'Добавлено в БД: '.$count.' записей');