<?php 
//Acceptance test to test Add Car page
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/login.html');
$I->fillField('user','admin');
$I->fillField('pass','welcome');
$I->click('Login');
$I->see('Add');
$I->amOnPage('/AddCarpage.php');

$I->fillField("carbrand",'Mercedes');
sleep(2);
$I->fillField('carmodel','xx');
sleep(2);
$I->fillField('usage','daily');
sleep(2);
$I->fillField('seat','5');
sleep(2);
$I->fillField('edesc','CRDIe');
sleep(2);
$I->fillField('etype','Petrol');
sleep(2);
$I->fillField("edisp",'2000');
sleep(2);
$I->fillField('cartorque','200Nm');
sleep(2);
$I->fillField('topspeed','180');
sleep(2);
$I->fillField('c0to100','6');
sleep(2);
$I->fillField('trantype','Manual');
sleep(2);
$I->fillField('ftype','Petrol');
sleep(2);
$I->fillField('fcapacity','60');
sleep(2);
$I->fillField('carmileage','18');
sleep(2);
$I->fillField('carprice','1000000');
sleep(2);
$I->fillField('rev_url','url1');
sleep(2);
$I->fillField('img_url','url2');
sleep(2);
$I->fillField('video_url','url3');
sleep(2);
$I->fillField('rat_url','url4');
sleep(2);
$I->click('submit');

/*
Test Result

G:\vendor\bin>codecept run acceptance CarCept --steps
Codeception PHP Testing Framework v2.2.4
Powered by PHPUnit 5.4.8 by Sebastian Bergmann and contributors.

Acceptance Tests (1) ---------------------------------------
CarCept: Login to website
Signature: CarCept
Test: tests\acceptance\CarCept.php
Scenario --
 As an user
 So that I access all website features
 I am on page "/login.html"
 I fill field "user","admin"
 I fill field "pass","welcome"
 I click "Login"
 I see "Add"
 I am on page "/AddCarpage.php"
 I fill field "carbrand","Mercedes"
 I fill field "carmodel","xx"
 I fill field "usage","daily"
 I fill field "seat","5"
 I fill field "edesc","CRDIe"
 I fill field "etype","Petrol"
 I fill field "edisp","2000"
 I fill field "cartorque","200Nm"
 I fill field "topspeed","180"
 I fill field "c0to100","6"
 I fill field "trantype","Manual"
 I fill field "ftype","Petrol"
 I fill field "fcapacity","60"
 I fill field "carmileage","18"
 I fill field "carprice","1000000"
 I fill field "rev_url","url1"
 I fill field "img_url","url2"
 I fill field "video_url","url3"
 I fill field "rat_url","url4"
 I click "submit"
 PASSED

------------------------------------------------------------


Time: 39.44 seconds, Memory: 8.00MB

OK (1 test, 1 assertion)

G:\vendor\bin>codecept run acceptance CarCept --steps
Codeception PHP Testing Framework v2.2.4
Powered by PHPUnit 5.4.8 by Sebastian Bergmann and contributors.

Acceptance Tests (1) ---------------------------------------
CarCept: Login to website
Signature: CarCept
Test: tests\acceptance\CarCept.php
Scenario --
 As an user
 So that I access all website features
 I am on page "/login.html"
 I fill field "user","admin"
 I fill field "pass","welcome"
 I click "Login"
 I see "Add"
 I am on page "/AddCarpage.php"
 I fill field "carbrand","Mercedes"
 I fill field "carmodel","xx"
 I fill field "usage","daily"
 I fill field "seat","5"
 I fill field "edesc","CRDIe"
 I fill field "etype","Petrol"
 I fill field "edisp","2000"
 I fill field "cartorque","200Nm"
 I fill field "topspeed","180"
 I fill field "c0to100","6"
 I fill field "trantype","Manual"
 I fill field "ftype","Petrol"
 I fill field "fcapacity","60"
 I fill field "carmileage","18"
 I fill field "carprice","1000000"
 I fill field "rev_url","url1"
 I fill field "img_url","url2"
 I fill field "video_url","url3"
 I fill field "rat_url","url4"
 I click "submit"
 I see "Add"
 FAIL

------------------------------------------------------------


Time: 39.46 seconds, Memory: 8.00MB

There was 1 failure:

---------
1) CarCept: Login to website
 Test  tests\acceptance\CarCept.php
 Step  See "Add"
 Fail  Failed asserting that   /carhunt/AdminPanel/html/AddCarDB.php
--> alert("Fields cannot be empty");window.history.go(-1);
--> contains "add".

Scenario Steps:

 29. $I->see("Add")
 28. $I->click("submit")
 27. $I->fillField("rat_url","url4")
 26. $I->fillField("video_url","url3")
 25. $I->fillField("img_url","url2")
 24. $I->fillField("rev_url","url1")


FAILURES!
Tests: 1, Assertions: 2, Failures: 1.


*/
?>
