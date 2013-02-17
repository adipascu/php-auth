<?php
class jLog
{
	static function log($string)
	{
		$string=addslashes($string);
		echo "<script>console.log('$string');</script>\n";
	}
	static function warn($string)
	{
		$string=addslashes($string);
		echo "<script>console.warn('$string');</script>\n";
	}
	static function error($string)
	{
		$string=addslashes($string);
		echo "<script>console.error('$string');</script>\n";
	}
}
?>
