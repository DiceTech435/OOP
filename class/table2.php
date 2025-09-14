<?php //namespace is declared at the beginning of a file, line 1.. It can be named anything (Html, code, NewArea, Data) using backward slash.

namespace Other; //This is passed as the class instance instead of 'class Table'

class Table {
    public $title2 = "";
    public $numRows2 = 0;

    public function message() {
        echo "<p>Table '{$this->title2}' has {$this->numRows2} rows. </p>";
    } 
}