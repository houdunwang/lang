<?php
require 'vendor/autoload.php';
$lang =[
	'name'=>'后盾人'
];
\houdunwang\lang\Lang::make($lang);

echo \houdunwang\lang\Lang::get('name');