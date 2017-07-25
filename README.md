#Car Hunt

This is a responsive website which is meant to help a user find the car of his/her choice. A user can search according to his/her preferences,get reviews,compare cars,find dealers and calculate EMIs. The website implements web scraping to get reviews about cars from TopGear and geolocation to route the users from their current location to the showrooms. 

##Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.
[Wireframe](https://github.com/ezdine/sv--project/blob/master/wireframe/CarHunt.pdf) for the website.

##Prerequisities

1. Normalize.css
2. Bootstrap.css
3. Modernizr.js
4. Animate.css
5. Fontawesome
6. simpledomparser

##Installation

1. Clone the Git Repo. Alternatively, download and extract into a folder.
2. Copy the files to the webroot of your server.
3. Start local server and run it.

##Running the Tests
1. Install Codeception.Follow steps in [Codeception](http://codeception.com/quickstart).
2. Please make sure your local dev server is running.  Put application URL into:**tests/acceptance.suite.yml**.
3. Test cases are included in **Tests** folder

######Test Example

```
<?php 
//Acceptance test for Get review in User Panel
$I = new AcceptanceTester($scenario);
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
------------------------------------------------------------
Time: 7.23 seconds, Memory: 8.00MB
*/
?>
```

##Built With

1. Sublime,Atom
2. XAMPP
3. Web Browser
4. Codeception
5. Filezilla
6. Balsamiq

Demo hosted at eveai.in/carhunt
