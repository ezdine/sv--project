<?php 
/*
Acceptance test for Login in Admin Panel
*/
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/login.html');
$I->fillField('user','admin');
$I->fillField('pass','welcome');
$I->click('Login');
$I->see('Add');


/*
Test Result
G:\vendor\bin>codecept run
Codeception PHP Testing Framework v2.2.4
Powered by PHPUnit 5.4.8 by Sebastian Bergmann and contributors.

Acceptance Tests (1) ---------------------------------------
+ WelcomeCept: Login to website (0.11s)
------------------------------------------------------------

Functional Tests (0) ---------------------------------------
------------------------------------------------------------

Unit Tests (0) ---------------------------------------------
------------------------------------------------------------


Time: 398 ms, Memory: 8.00MB

OK (1 test, 1 assertion)


There was 1 failure:

---------
1) WelcomeCept: Login to website
 Test  tests\acceptance\\WelcomeCept.php
 Step  See "Add"
 Fail  Failed asserting that   /carhunt/AdminPanel/html/validate.php
--> alert("Incorrect username or password");window.history.go(-1);
--> contains "add".

Scenario Steps:

 7. $I->see("Add")
 6. $I->click("Login")
 5. $I->fillField("pass","welcome")
 4. $I->fillField("user","ertert")
 3. $I->amOnPage("/login.php")
 2. // So that I access all website features


FAILURES!
Tests: 1, Assertions: 1, Failures: 1.

*/
 ?>