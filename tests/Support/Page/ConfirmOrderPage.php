<?php
namespace Page;
use Tests\Support\AcceptanceTester;
class ConfirmOrderPage
{
    private string $continueButton = '.payment-info-next-step-button';
    private string $header = 'Checkout';
    private string $subheader = 'Payment information';
    private string $cardHolderNameField = 'Payment method';
    private string $cardNumberField = 'Payment method';
    private string $cardExpiryMonthField = 'Payment method';
    private string $cardCvvField = 'Payment method';

    public AcceptanceTester $tester;

    public function checkboxChecked(): void
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
        $I->see('h2',($this->subheader));
    }

    public function clickOnCreditCardAndContinue(
        string $cardHolder,
        string $cardNumber,
        string $cvv,
        string $cardExpiryMonth,
    ): PaymentInformationPage
    {
        $I= $this->tester;
        $I->fillField(($this->cardHolderNameField),$cardHolder);
        $I->fillField(($this->cardNumberField),$cardNumber);
        $I->fillField(($this->cardExpiryMonthField),$cardExpiryMonth);
        $I->fillField(($this->cardCvvField),$cvv);
        $I->click(($this->continueButton));
        return new PaymentInformationPage();
    }


}