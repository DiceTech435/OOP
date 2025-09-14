<?php
require("class/table.php");
require("class/table2.php");

// NAMESPACE
// qualifiers that solve two different problems.
// for better organization by grouping classes to work 2geda
// allow same name to be used for more than one class


// pass as reference
use Code\Html\Table as HtmlTable;
// use Other\Table as OtherTable;

$table = new HtmlTable(); // declare instance passed as reference.
$table->title = "My table";
$table->numRows = 5;


$table2 = new Other\Table(); // declare instance directly, not passed as reference.
$table2->title2 = "OOOh hell..";
$table2->numRows2 = 18;

?>


<!DOCTYPE html>
<html lang="en">

<body>
    <?php
        $table->message();
        $table2->message();
    ?>
</body>
</html>