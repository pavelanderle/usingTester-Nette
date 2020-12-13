<?php

    use Tester\Assert;
    require "bootstrap.php";
    require "../src/studentClass.php";

    $student1 = new Student("Jan","Kovář","051125/1025",["M"=>3,"CJ"=>2,"PJT"=>1,"ANJ"=>3,"IoT"=>2]);

    Assert::same("men",$student1->getGender());
    //Assert::true($student1->isGirl());
    Assert::true($student1->isBoy());
?>