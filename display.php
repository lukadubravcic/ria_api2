<?php

class display_entries
{
	public funtion displ($json_array)
	{
		echo "<table>";
		foreach ($json_array as $k=>$v){
			echo'<tr><th>',$k,'</th><td>',$v,'</td></tr>';
}
		echo "</table";
	}

}