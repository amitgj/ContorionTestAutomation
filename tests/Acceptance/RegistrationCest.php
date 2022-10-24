<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Tests\Support\Page\HomePage;

class RegistrationCest
{
    private array $userData = [
        "firstName"=>"test",
        "lastName"=>"test",
        "emailFailure"=>"test@nopcommerce.com",
        "password"=> "Test1234"
        ];

    public function registrationTestPositive(AcceptanceTester $I):void
    {
        $emailSuccess = sprintf ('test%s-%s@nopcommerce.com', date('YMD'), time());

        $I->amOnPage('');
        $homePage = new HomePage($I);
        $registrationPage = $homePage->goToRegistrationPage();
        $registrationSuccessPage =$registrationPage ->performRegistration(
            $this->userData['firstName'],
            $this->userData['lastName'],
            $emailSuccess,
            $this->userData['password']);
        $I->assertEquals('Your registration completed', $registrationSuccessPage->getSuccessMessage());
    }



    private function registrationTestPrerequisite(AcceptanceTester $I):void
    {

        $I->amOnPage('');
        $homePage = new HomePage($I);

        $registrationPage = $homePage->goToRegistrationPage();
        $registrationSuccessPage = $registrationPage->performRegistration(
            $this->userData['firstName'],
            $this->userData['lastName'],
            $this->userData['emailFailure'],
            $this->userData['password']);
    }


    /*
     * @before registrationTestPrerequisite
     */
    public function registrationTestNegative(AcceptanceTester $I):void
        {

        $I->amOnPage('');
        $homePage = new HomePage($I);

        $registrationPage = $homePage->goToRegistrationPage();
            $registrationSuccessPage =$registrationPage ->performRegistration(
                $this->userData['firstName'],
                $this->userData['lastName'],
                $this->userData['emailFailure'],
                $this->userData['password']);
        $I->assertEquals('The specified email already exists', $registrationSuccessPage->getErrorMessage());
    }


}