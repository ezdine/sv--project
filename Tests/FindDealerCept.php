<?php 
//Acceptance test to test find dealer section
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/index.php');

$option2 = $I->grabTextFrom('select#first-choice3 option:nth-child(2)');
$I->selectOption("first-choice3", $option2);


$option1 = $I->grabTextFrom('form select[name="second-choice3"] option:nth-child(2)');
$I->selectOption("second-choice3", $option1);

$option1 = $I->grabTextFrom('select#third-choice3 option:nth-child(1)');
$I->selectOption("third-choice3", $option1);
$I->click("search");
$I->see('Contact');

/*
Test Result


G:\vendor\bin>codecept run acceptance FindDealerCept --steps
Codeception PHP Testing Framework v2.2.4
Powered by PHPUnit 5.4.8 by Sebastian Bergmann and contributors.

Acceptance Tests (1) ---------------------------------------
FindDealerCept: Perform actions and see result
Signature: FindDealerCept
Test: tests\acceptance\FindDealerCept.php
Scenario --
 I am on page "/index.php"
 I grab text from "select#first-choice3 option:nth-child(1)"
 I select option "first-choice3","Audi"
 I grab text from "form select[name="second-choice3"] op..."
 I select option "second-choice3","Kerala"
 I grab text from "select#third-choice3 option:nth-child(1)"
 I select option "third-choice3","Ernakulam"
 I click "search"
 I see "Contact"
 PASSED

------------------------------------------------------------


Time: 6.98 seconds, Memory: 8.00MB

OK (1 test, 1 assertion)
*/
?>