<?php
namespace Page;
use Tests\Support\AcceptanceTester;
class ShippingMethodPage
{
    private string $continueButton = '.shipping-method-next-step-button';
    private string $header = 'Checkout';
    private string $subheader = 'Shipping method';
    public AcceptanceTester $tester;

    public function checkboxChecked(): void
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
        $I->see('h2',($this->subheader));
    }

    public function clickOnContinue(
    ): PaymentMethodPage
    {
        $I= $this->tester;
        $I->click(($this->continueButton));
        return new PaymentMethodPage();
    }


}