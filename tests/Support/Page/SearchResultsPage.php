<?php
namespace Tests\Support\Page;
use Tests\Support\AcceptanceTester;
class SearchResultsPage
{

    private string $searchTable = '.item-grid';
    private string $addToCartButton = '.product-box-add-to-cart-button';
    private string $shoppingCartButton = '.ico-cart';
    public AcceptanceTester $tester;

    public function clickOnProduct(string $productName): ShoppingCartPage
    {
        $I= $this->tester;
        $I->see('h2',$productName);
        $I->click($this->addToCartButton);
        $I->click($productName);
        $I->click($this->shoppingCartButton);
        return new ShoppingCartPage();
    }


}