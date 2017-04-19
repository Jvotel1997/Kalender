<?php

require(ROOT . "model/BirthdayModel.php");
	
function index()
{
	render("birthday/index", array(
		'birthdays'=> getAllBirthdays()
	));
}