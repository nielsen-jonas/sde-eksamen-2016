<?php
function test(){
	foreach ($_REQUEST as $key => $val){
		echo $key . ': ' . $val . '<br>';
	}
}
test();