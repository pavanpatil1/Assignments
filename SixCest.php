<?php

class SixCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('The Cover image should be updated successfully');
        $I->amOnPage('/');
        $I->seeInTitle('Activity – rtCamp');
        $I->fillField("log","demo");
        $I->fillField("pwd","demo");
        $I->click("wp-submit");
        $I->amOnUrl("https://qa.rtcamp.net/members/demo/profile/");
        $I->click("//a[@id='change-cover-image']");
        $I->wait(1);
        $I->click("//input[@id='bp-browse-button']");
        $I->attachFile("input[type='file']", "status.png");
        $I->wait(2);
        $I->see("Your new cover image was uploaded successfully.");
    }
}
