<?php

class FiveCest
{
   
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    $I->wantTo('Media should show unlike once liked and vice versa. if liked it should appear here...');   
    $I->amOnPage('/');
    $I->seeInTitle('Activity – rtCamp');
    $I->fillField("log","demo");
    $I->fillField("pwd","demo");
    $I->click("wp-submit");
    $I->see("Log Out");
    $I->wait(2);
    $I->click(['class' => 'rtmedia-item-thumbnail']);
    $I->click("//button[@class='rtmedia-item-comments']");
    $I->click("//span[@class='rtm-mfp-close mfp-close dashicons dashicons-no-alt']");
    $I->amOnUrl("https://qa.rtcamp.net/members/demo/media/likes/");
    $I->dontSee("Sorry !! There's no media found for the request !!");
    }
}
