<?php

class FourthCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Album should be created with given name and privacy, 5 media should be uploaded successfully');
        $I->amOnPage('/');
        $I->seeInTitle('Activity – rtCamp');
        $I->fillField("log","demo");
        $I->fillField("pwd","demo");
        $I->click("wp-submit");
        $I->amOnUrl("https://qa.rtcamp.net/members/demo/media/album/");
        $I->click("//div[@class='clicker rtmedia-action-buttons']");    
        $I->click("//a[@class='rtmedia-reveal-modal rtmedia-modal-link']");
        $I->fillField("//input[@id='rtmedia_album_name']","FirstAlbum");
        $I->fillField("//textarea[@id='rtmedia_album_description']","Myfirstalbum");
        $I->click("//button[@id='rtmedia_create_new_album']");
        $I->click("//button[@class='mfp-close']");
        $I->amOnUrl("https://qa.rtcamp.net/members/demo/media/album/");
        $I->click("//h4[contains(text(),'FirstAlbum')]");
        $I->click("//span[@id='rtm_show_upload_ui']");
        $I->wait(2);
        $I->click("//input[@id='rtMedia-upload-button']");
        $I->attachFile("input[type='file']", "img2.jpg");
        $I->attachFile("input[type='file']", "img3.png");
        $I->attachFile("input[type='file']", "img4.jpg");
        $I->attachFile("input[type='file']", "img5.png");
        $I->attachFile("input[type='file']", "status.png");
        $I->wait(1);
        $I->click("//input[@class='start-media-upload']");

    }
}
