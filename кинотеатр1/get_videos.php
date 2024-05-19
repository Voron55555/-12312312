<?php 
	require_once 'config.php';

	$sql='SELECT * FROM `videos`';
	$result=$conn->query($sql);
	$answer = '{"videos": [';
	
	foreach ($result as $row) {
		$i=$row['ID'];
		$t=$row['TITLE'];
		$desc=$row['DISCRIPTION'];
		$dir=$row['DIRECTOR'];
		$y=$row['YEAR'];
		$answer .= sprintf('{"id": %d, "title": %s, "desc": %s, "director": %s, "year": %d},', $i,$t,$desc,$dir,$y);
	}
	
	$answer = rtrim($answer, ',');
	$answer .= '[}';
	
	echo  $answer;
