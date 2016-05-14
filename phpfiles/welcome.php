<?php

$nameErr = $costErr = $rolesErr = "";
$name = $cost = $roles = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Name is required.";
		}

		else {
			$name = $_POST["name"];
		}

        if (empty($_POST["email"])) {
        	$emailErr = "Email is required.";
        }

        else {
        	$email = $_POST["email"];
        }

        if (empty($_POST["number"])) {
        	$numberErr = "Number is required.";
        }

        else {
        	$number = $_POST["number"];
        }
    }
?>