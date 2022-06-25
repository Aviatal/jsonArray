<?php

declare(strict_types=1);

require_once('src/File.php');
require_once('src/Categories.php');

use App\Categories;
use App\File;

$file = new File();
$cat = new Categories();

$treeJS = $file->getFile("tree.json");
$listJS = $file->getFile("list.json");

$tree = json_decode($treeJS, true);
$list = json_decode($listJS, true);

$categories = $cat->getCategory($list);

$trees = $cat->arrayWrite($tree, $categories);