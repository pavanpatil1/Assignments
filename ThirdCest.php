<?php

class ThirdCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Media should be uploaded with private privacy');
        $I->amOnPage('/');
        $I->seeInTitle('Activity – rtCamp');
        $I->fillField("log","demo");
        $I->fillField("pwd","demo");
        $I->click("wp-submit");
        $I->click("//*[@id='whats-new']");
        $I->click("//*[@id='rtmedia-add-media-button-post-update']/span");
        $I->attachFile("input[type='file']", "status.png");
        $I->click("aw-whats-new-submit");
    }
}
