<?php 
//Acceptance test to test Add Dealer page
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/login.html');
$I->fillField('user','admin');
$I->fillField('pass','welcome');
$I->click('Login');
$I->see('Add');
$I->amOnPage('/AddDealerpage.php');
$I->fillField("Dname",'Pothens');
sleep(2);
$I->fillField('Dbrand','Hyundai');
sleep(2);
$I->fillField('Daddress','Kowdiar');
sleep(2);
$I->fillField('Dlocation','Trivandrum');
sleep(2);
$I->fillField('Dstate','Kerala');
sleep(2);
$I->fillField('Dcontact','123123');
sleep(2);
$I->click('submit');
$I->see('Add');

/*
Test Result

G:\vendor\bin>codecept run acceptance DealerCept --steps
Codeception PHP Testing Framework v2.2.4
Powered by PHPUnit 5.4.8 by Sebastian Bergmann and contributors.

Acceptance Tests (1) ---------------------------------------
DealerCept: Login to website
Signature: DealerCept
Test: tests\acceptance\DealerCept.php
Scenario --
 As an user
 So that I access all website features
 I am on page "/login.html"
 I fill field "user","admin"
 I fill field "pass","welcome"
 I click "Login"
 I see "Add"
 I am on page "/AddDealerpage.php"
 I fill field "Dname","Pothens"
 I fill field "Dbrand","Hyundai"
 I fill field "Daddress","Kowdiar"
 I fill field "Dlocation","Trivandrum"
 I fill field "Dstate","Kerala"
 I fill field "Dcontact","123123"
 I click "submit"
 I see "Add"
 PASSED


*/
 ?>