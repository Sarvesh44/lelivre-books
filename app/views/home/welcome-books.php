<?php


//$books = DB::table('book')->get();

$books = DB::table('book')->orderBy('title')->get();
//echo count($books);
for ($i=0; $i < count($books); $i++) { 
	//echo $i;
	echo '<h2>'.$books[$i] -> title.'</h2>';
	echo '<img src="'.$books[$i] -> image.'"/><br/>';
}

?>