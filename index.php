<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="author" content="lephuhung"/>
    <link rel="stylesheet" href="/Lab2/site.css">
    <title> OOP PHP </title>
  </head>
  <body>
    <div id="wrapper">
      <?php //// IDEA:
        require_once("userclass.php");
        //create user
        $thanhdien = new User('thanh dien','nguyenthanhdien@gmail.com');
        //output userclass
        echo "<h2>---User info--</h2>";
        echo "UserID:".$thanhdien->GetUserID()."<br/>";
        echo "UserName:".$thanhdien->GetUserName()."<br/>";
        //add more user
        $thanhdienmore = new User('Nguyen Thanh Dien','youremail@gmail.com');
        echo "<h2>---More User--</h2>";
        echo "UserID:".$thanhdienmore->GetUserID()."<br/>";
        echo "UserName:".$thanhdienmore->GetUserName()."<br/>";
        //more OOP php
      include("employeeclass.php");
      $person_a = new Person("Nguyen Van B",1234);
        echo "<h2>---More OOP PHP--</h2>";
        echo "Person Name:".$person_a->GetName()."<br/>";
        echo "Person ID:".$person_a->GetNationalID()."<br/>";

        echo "<h2> Employee </h2>";
        $employee_a = new Employee("Nguyen Van C",5678,"Security");
          echo "Employee ID: ".$employee_a->GetEmployeeID()."<br/>";
          echo "Employee Name: ".$employee_a->GetName()."<br/>";
          echo "Employee Department: ".$employee_a->GetDepartment()."<br/>";
          echo "<h2> More Employee </h2>";
        $employee_b = new Employee("Nguyen Van D",112233,"Offical");
          echo "Employee ID: ".$employee_b->GetEmployeeID()."<br/>";
          echo "Employee Name: ".$employee_b->GetName()."<br/>";
          echo "Employee Department: ".$employee_b->GetDepartment()."<br/>";
       ?>
    </div>
    <footer>
      &#169; 2019 - Nguyen Thanh Dien - Sinh Vien CNTT Hutech University
    </footer>
  </body>
</html>
