<?php
function __autoload($class_name)
{
   // include 'php/' .$class_name . '.php';
    //include $_SERVER['DOCUMENT_ROOT'].'devel/php/'.$class_name . '.php';
$doc_root=$_SERVER['DOCUMENT_ROOT'];
if($doc_root[strlen($doc_root)-1]!='//') $doc_root.='//';
    include $doc_root.'devel/php/'.$class_name . '.php';
}
?>