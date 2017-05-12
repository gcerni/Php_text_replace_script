<?php
function replace_string_in_file($filename, $string_to_replace, $replace_with){
	$content=file_get_contents($filename);
	$content_chunks=explode($string_to_replace, $content);
	$content=implode($replace_with, $content_chunks);
	file_put_contents($filename, $content);
	if(file_put_contents($filename, $content) > 0)
		{
			$Result["status"] = 'success';
			echo "Success";
		}
		else
		{
			$Result["message"] = 'Error while writing file';
			echo "Error while writing file";
		}
}

$filename="./prova.txt";
$string_to_replace="<p>&nbsp;</p>";
$replace_with="~;";
replace_string_in_file($filename, $string_to_replace, $replace_with);

$filename="./prova.txt";
$string_to_replace="&nbsp;";
$replace_with="~;";
replace_string_in_file($filename, $string_to_replace, $replace_with);


$filename="./prova.txt";
$string_to_replace="<a>";
$replace_with="~;";
replace_string_in_file($filename, $string_to_replace, $replace_with);

$filename="./prova.txt";
$string_to_replace="</a>";
$replace_with="~;";
replace_string_in_file($filename, $string_to_replace, $replace_with);

$filename="./prova.txt";
$string_to_replace="h2";
$replace_with="h3";
replace_string_in_file($filename, $string_to_replace, $replace_with);
