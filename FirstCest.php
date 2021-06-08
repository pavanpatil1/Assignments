<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('The user Should be successfully logged in');
        $I->amOnPage('/');
        $I->seeInTitle('Activity – rtCamp');
        $I->fillField("log","demo");
        $I->fillField("pwd","demo");
        $I->click("wp-submit");
        $I->see("Log Out");
    }
}
