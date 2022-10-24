<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Tests\Support\Page\HomePage;
use Tests\Support\Page\PageHome;

class SearchCest
{
    public string $productName = 'Apple MacBook';
    public const USER_PASSWORD ='USER_PASSWORD';
    public const USER_NAME ='USER_EMAIL';
    public const FIRST_NAME ='FIRST_NAME';
    public const LAST_NAME ='LAST_NAME';

    public function searchTest(AcceptanceTester $I):void
    {

    }

}