<?php

define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'Blog');

/*define('MYSQL_SERVER', 'db2.ho.ua');
define('MYSQL_USER', 'nadiad');
define('MYSQL_PASSWORD', 'p5SwmGrwAA');
define('MYSQL_DB', 'nadiad');
*/
function db_connect(){
    
	$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
	or die("Error: ".mysqli_error($link));
	
	if(!mysqli_set_charset($link, "utf8")){
		printf("Error: ".mysqli_error($link));
	}
	return $link;
}

?>
