<?php
namespace Page;
use Tests\Support\AcceptanceTester;
class ShoppingCartPage
{

    private string $termsOfServiceCheckBox = '.totals #termsofservice';
    private string $checkOutButton = '.totals #checkout';
    private string $header = 'Shopping cart';
    public AcceptanceTester $tester;

    public function clickOnCheckOut(): BillingAddressPage
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
        $I->click($this->addToCartButton);
        $I->click($this->shoppingCartButton);
        return new BillingAddressPage();
    }


}