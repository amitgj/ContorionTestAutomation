<?php
namespace Tests\Support\Page;
use Tests\Support\AcceptanceTester;
class CompleteOrderPage
{
    private string $continueButton = '.order-completed-continue-button';
    private string $header = 'Thank you';
    private string $orderDetailsLink = '.details-link a';


    public AcceptanceTester $tester;

    public function checkboxChecked(): void
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
    }

    public function clickOnOrderDetailsLink(): OrderDetailsPage
    {
        $I= $this->tester;
        $I->click($this->orderDetailsLink);
        return new OrderDetailsPage();
    }

    public function clickOnContinue(): HomePage
    {
        $I= $this->tester;
        $I->click($this->continueButton);
        return new HomePage($I);
    }


}