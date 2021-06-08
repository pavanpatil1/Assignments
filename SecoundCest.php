<?php

class SecoundCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('User should get the error message should not get logged in');
        $I->amOnPage('/');
        $I->seeInTitle('Activity – rtCamp');
        $I->fillField("log","invalidname");
        $I->fillField("pwd","invalidpassword");
        $I->click("wp-submit");
        $I->seeInTitle('Log In ‹ rtCamp — WordPress');
    }
}
