<?php
namespace Tests\Support\Page;
use Tests\Support\AcceptanceTester;
class ShoppingCartPage
{

    private string $termsOfServiceCheckBox = '.totals #termsofservice';
    private string $checkOutButton = '.totals #checkout';
    private string $header = 'Shopping cart';
    public AcceptanceTester $tester;

    public function clickOnCheckOut()
    {

    }


}