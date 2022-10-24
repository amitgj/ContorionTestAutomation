<?php
namespace Tests\Support\Page;
use Tests\Support\AcceptanceTester;
use Tests\Support\Components\AbstractComponent;

class RegistrationSuccessPage extends AbstractComponent
{
    public string $continueButton = '.page-body .buttons';
    public string $successMessage = '.page-body .result';
    public string $errorMessage = '.validation-summary-errors ul li';
    public string $pageTitle = 'Register';
    public AcceptanceTester $tester;

    /**
     * example
     */
    public function getSuccessMessage()
    {
        $I= $this->tester;

        $successMessage = $I->grabTextFrom($this->successMessage);
        codecept_debug($successMessage);
        return $successMessage ;
    }

    public function clickOnContinueButton(): HomePage
    {
        $I= $this->tester;
        $I->click($this->continueButton);
        return new HomePage($I) ;
    }

    public function getErrorMessage()
    {
        $I= $this->tester;
        $failMessage = $I->grabTextFrom($this->errorMessage);
        codecept_debug($failMessage);
        return $failMessage ;
    }

}