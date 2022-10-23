<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class PaymentsCest
{

    public function paymentTest(AcceptanceTester $I,string $productName):void
    {
        $homePage =$I-> login();
        $searchPage = $homePage ->searchForProduct($productName);



    }

}