<?php 
//melakukanfilter data;
function filterdata($data){
	return htmlspecialchars(strip_tags($data) );

}
?>