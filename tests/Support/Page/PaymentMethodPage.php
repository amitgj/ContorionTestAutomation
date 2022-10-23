<?php
namespace Page;
use Tests\Support\AcceptanceTester;
class PaymentMethodPage
{
    private string $continueButton = '.payment-method-next-step-button';
    private string $header = 'Checkout';
    private string $subheader = 'Payment method';

    public AcceptanceTester $tester;

    public function checkboxChecked(): void
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
        $I->see('h2',($this->subheader));
    }

    public function clickOnCreditCardAndContinue(
    ): PaymentInformationPage
    {
        $I= $this->tester;
        $I->click(($this->continueButton));
        return new PaymentInformationPage();
    }


}