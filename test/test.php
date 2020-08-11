<?php
require_once '../vendor/autoload.php'; // 加载自动加载文件

use Flower\Rose\Rose;
use Flower\Lily\Lily;

$rose = new Rose();
$lily = new Lily();

echo $rose->desc();
echo "\n";
echo $lily->desc();