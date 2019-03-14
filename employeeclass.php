<?php
  require_once("personclass.php");

  /**
   *
   */
  class Employee extends Person
  {
    private $employeeID;
    private $department;

    function __construct($employeeName, $nationalID, $dept)
    {
      parent::__construct($employeeName,$nationalID);
      $this->department = $dept;
      $this->employeeID = $this->GenerateEmplyeeID();
    }

    public function GetEmployeeID()
    {
      return $this->employeeID;
    }
    public function GetDepartment()
    {
      return $this->department;
    }
    public function SetDepartment()
    {
      $this->department = $dept;
    }
    final private function GenerateEmplyeeID()
    {
      static $IDGen = 1;
      return $IDGen++;
    }
  }

?>
