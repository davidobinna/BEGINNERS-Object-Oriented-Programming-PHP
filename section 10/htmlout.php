<?php
require 'magicmeth.php';

$article = new HtmlElement('article');
$article->id = 'main';
$article->class = 'light';
echo $article->id;
echo $article->class;
 ?>
