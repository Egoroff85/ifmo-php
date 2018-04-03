<?php

require_once __DIR__ . '/../vendor/autoload.php';
$urls = file_get_contents('../config.json');
$app = new \Web\Engine\App($urls);
$app->run();

?>