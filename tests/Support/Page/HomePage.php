<?php

namespace Page;

class HomePage extends \AbstractComponent
{
    public string $loginLink = '.ico-login';
    public string $registrationLink = '.ico-register';
    public string $searchTextField = '#small-search-box-form input';
    public string $searchButton = '#small-search-box-form button';

    public function goToLoginPage():LoginPage
    {
        $I= $this->tester;
        $I->click($this->loginLink);

        return new LoginPage($I);
    }

    public function goToRegistrationPage():RegistrationPage
    {
        $I= $this->tester;
        $I->click($this->registrationLink);
        return new RegistrationPage();
    }

    public function searchForProduct($productName):SearchResultsPage
    {
        $I= $this->tester;
        $I->fillField($this->searchTextField, $productName);
        $I->click($this->searchButton);

        return new SearchResultsPage();
    }
}