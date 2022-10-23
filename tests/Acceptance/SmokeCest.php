<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SmokeCest
{
    public function smokeTest(AcceptanceTester $I): void
    {
        $I->amOnPage('/');
        $I->seeInTitle('nopCommerce demo store');
    }

}
