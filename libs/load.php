<?php

include "class/class.connect.php";
include "class/class.validate.php";
include "class/class.signup.php";
include "class/class.session.php";

    function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/phpcheck/_template/$name.php";
}


?>