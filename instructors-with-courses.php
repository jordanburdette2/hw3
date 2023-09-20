<?php
require_once("util-db.php");
require_once("model-instructors-with-courses.php");

$pageTitle="Instructors with Courses";
include "view-header.php";
$instructors = selectInstructors();
include "view-instructors-instructors-with-courses.php";
include "view-footer.php";
?>
