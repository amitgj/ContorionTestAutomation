<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SearchCest
{
    public string $productName = 'Apple MacBook';
    public const USER_PASSWORD ='USER_PASSWORD';
    public const USER_NAME ='USER_EMAIL';
    public const FIRST_NAME ='FIRST_NAME';
    public const LAST_NAME ='LAST_NAME';

    public function searchTest(AcceptanceTester $I):void
    {
        $fistName = 'Test';
        $lastName = 'Test';
        $email = 'Test@nppcommerce.com';
        $password = 'test1234';
//        $fistName = $_ENV[static::FIRST_NAME];
//        $lastName = $_ENV[static::LAST_NAME];
//        $email = $_ENV[static::USER_NAME];
//        $password = $_ENV[static::USER_PASSWORD];
        $I->amOnPage('/');
        $homePage = new \Page\HomePage($I);

        $registrationPage = $homePage->goToRegistrationPage();
        $homePage =$registrationPage ->performRegistration($fistName,$lastName,$email,$password);
        $searchPage = $homePage ->searchForProduct($this->productName);
    }

}