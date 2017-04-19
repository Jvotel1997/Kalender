<?php

/*function getBirthday($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}*/

function getAllBirthdays()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month, day, year";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}