<?php 
//Acceptance test for Get review in User Panel
$I = new AcceptanceTester($scenario);
$I->wantTo('verify that the homepage welcomes me');
$I->wantTo('perform actions and see result');
$I->amOnPage('/index.php');

$option2 = $I->grabTextFrom('select#first-choice4 option:nth-child(2)');
$I->selectOption("first-choice4", $option2);
$I->sendAjaxGetRequest('/scripts.js', array('second-choice4' => true));
sleep(2);

$option2 = $I->grabTextFrom('select#second-choice4 option:nth-child(2)');
$I->selectOption("second-choice4", $option2);

$option2 = $I->grabTextFrom('select#third-choice4 option:nth-child(1)');
$I->selectOption("third-choice4", $option2);



$I->click("review");
$I->see('Overview');

/*
Test Result

G:\vendor\bin>codecept run --steps
Codeception PHP Testing Framework v2.2.4
Powered by PHPUnit 5.4.8 by Sebastian Bergmann and contributo

Acceptance Tests (1) ---------------------------------------
GetreviewCept: Verify that the homepage welcomes me
Signature: GetreviewCept
Test: tests\acceptance\\GetreviewCept.php
Scenario --
 I am on page "/index.php"
 I grab text from "select#first-choice4 option:nth-child(2)"
 I select option "first-choice4","Hatchback"
 I send ajax get request "/scripts.js",{"second-choice4"...}
 I grab text from "select#second-choice4 option:nth-chil..."
 I select option "second-choice4","Hyundai"
 I grab text from "select#third-choice4 option:nth-child(1)"
 I select option "third-choice4","i10 Active"
 I click "review"
 I see "Overview"
 PASSED
*/
?>