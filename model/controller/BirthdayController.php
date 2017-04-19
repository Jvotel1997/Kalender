<?php

require(ROOT . "model/BirthdayModel.php");
	
function index()
{
	render("birthday/index", array(
		'birthdays'=> getAllBirthdays()
	));
}

function create()
{
	render("birthday/create");
}

function createsave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}