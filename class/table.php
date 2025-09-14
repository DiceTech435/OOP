<?php //namespace is declared at the beginning of a file, line 1.. It can be named anything (Html, code, NewArea, Data) using backward slash
// namespace Html;
namespace Code\Html; //This is passed as the class instance instead of 'class Table'


class Table {
    public $title = "";
    public $numRows = 0;

    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows. </p>";
    } 
}



