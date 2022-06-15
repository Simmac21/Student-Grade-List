<?php

class Student {
  private $fullName;
  private $grade;

  public function __construct($fullName, $grade) {
    $this->fullName = $fullName;
    $this->grade = $grade;
  }
}
?>