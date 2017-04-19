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

function createBirthday()
{
	// Als firstname gevuld is, post hij die en anders post hij niks.
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$year = isset($_POST['month']) ? $_POST['year'] : null;

	if (strlen($name) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO Birthdays(person, day, month, year) VALUES (:name, :day, :month, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':day' => $day,
		':month' => $month,
		':year' => $year));

	$db = null;

	return true;
}