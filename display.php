<?php


function displ($json_array)
{
	
	echo "<table>";
	foreach($json_array as $item)
	    echo "<tr><td>$item->id</td><td>$item->naslov</td><td>$item->datum</td></tr>";
	echo "</table>";
}
