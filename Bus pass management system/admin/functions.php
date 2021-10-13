<?php
function fixPassword($password){
	$salt = "65fh4f6h54f54f''/.[[pp.";
	return md5($password.$salt);
}