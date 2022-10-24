<?php
namespace Tests\Support\Page;
use Tests\Support\AcceptanceTester;
class PaymentInformationPage
{
    private string $continueButton = '.payment-info-next-step-button';
    private string $header = 'Checkout';
    private string $subheader = 'Payment information';
    private string $cardHolderNameField = '#CardholderName';
    private string $cardNumberField = '#CardNumber';
    private string $cardExpiryMonthField = '#ExpireMonth';
    private string $cardExpiryYearField = '#ExpireYear';
    private string $cardCvvField = '#CardCode';

    public AcceptanceTester $tester;

    public function checkboxChecked(): void
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
        $I->see('h2',($this->subheader));
    }

    public function clickOnCreditCardAndContinue(): ConfirmOrderPage
    {
        $I= $this->tester;
        $I->click($this->continueButton);
        return new ConfirmOrderPage();
    }


}