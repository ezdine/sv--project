<?php 
//Acceptance test for finding perfect car
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/index.php');

$option2 = $I->grabTextFrom('select#price-choice option:nth-child(3)');
$I->selectOption("price-choice", $option2);


$option1 = $I->grabTextFrom('form select[name="type-choice"] option:nth-child(2)');
$I->selectOption("type-choice", $option1);

$option1 = $I->grabTextFrom('select#brand-choice option:nth-child(8)');
$I->selectOption("brand-choice", $option1);
$I->click("perser");

/*
Test Result
G:\vendor\bin>codecept run acceptance PerfectcarCept --steps
Codeception PHP Testing Framework v2.2.4
Powered by PHPUnit 5.4.8 by Sebastian Bergmann and contributors.

Acceptance Tests (1) ---------------------------------------
PerfectcarCept: Perform actions and see result
Signature: PerfectcarCept
Test: tests\acceptance\PerfectcarCept.php
Scenario --
 I am on page "/index.php"
 I grab text from "select#price-choice option:nth-child(3)"
 I select option "price-choice","10L-20L"
 I grab text from "form select[name="type-choice"] optio..."
 I select option "type-choice","Hatchback"
 I grab text from "select#brand-choice option:nth-child(8)"
 I select option "brand-choice","All"
 I click "perser"
 PASSED

*/


	
