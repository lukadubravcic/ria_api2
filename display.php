<?php


function displ($json_array)
{
	
	echo "<table>";
	foreach($json_array as $k=>$v)
	    echo "<tr><td>$k</td><td>$v</td></tr>";
	echo "</table>";
}
