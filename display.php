<?php


public function displ($json_array)
{
	
	echo $json_array;
	echo "<table>";
	echo "<tr><td>ID</td> <td>NASLOV</td> <td>DATE</td></tr>";
	foreach ($json_array as $item){
		echo "<tr><td>",$item->id,"</td><td>",$item->naslov,"</td><td>",$item->datum,"</td></tr>";
	}
	echo "</table";
}
