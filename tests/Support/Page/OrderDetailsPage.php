<?php
namespace Tests\Support\Page;
use Tests\Support\AcceptanceTester;
class OrderDetailsPage
{
    private string $continueButton = '.order-completed-continue-button';
    private string $header = 'Thank you';
    private string $orderDetailsLink = '.details-link a';
    private string $cardNumberField = 'Payment method';
    private string $cardExpiryMonthField = 'Payment method';
    private string $cardCvvField = 'Payment method';

    public AcceptanceTester $tester;

    public function checkboxChecked(): void
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
    }

    public function clickOnCreditCardAndContinue(
        string $cardHolder,
        string $cardNumber,
        string $cvv,
        string $cardExpiryMonth,
    ): PaymentInformationPage
    {
        $I= $this->tester;
        $I->click($this->orderDetailsLink);
        return new PaymentInformationPage();
    }


}