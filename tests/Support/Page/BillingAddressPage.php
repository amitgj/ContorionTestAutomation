<?php
namespace Page;
use Tests\Support\AcceptanceTester;

class BillingAddressPage
{

    private string $shipToSameAddressCheckBox = '.totals #termsofservice';
    private string $firstName = '#BillingNewAddress_FirstName';
    private string $lastName = '#BillingNewAddress_LastName';
    private string $email = '.#BillingNewAddress_Email';
    private string $company = '#BillingNewAddress_Company';
    private string $country = '#BillingNewAddress_CountryId"';
    private string $state = '#BillingNewAddress_StateProvinceId';
    private string $city = '#BillingNewAddress_City';
    private string $addressOne = '#BillingNewAddress_Address1';
    private string $addressTwo = '#BillingNewAddress_Address2';
    private string $postalCode = '#BillingNewAddress_ZipPostalCode';
    private string $phoneNumber = '#BillingNewAddress_PhoneNumber';
    private string $faxNumber = '#BillingNewAddress_FaxNumber';
    private string $continueButton = '.new-address-next-step-button';


    private string $header = 'Checkout';
    public AcceptanceTester $tester;

    public function checkboxChecked(): void
    {
        $I= $this->tester;
        $I->see('h1',($this->header));
        $I->seeCheckboxIsChecked($this->shipToSameAddressCheckBox);
    }

    public function fillBillingAddressInformation(
        string $firstName,
        string $lastName,
        string $email,
        string $company,
        string $country,
        string $state,
        string $city,
        string $addressOne,
        string $addressTwo,
        string $postalCode,
        string $phoneNumber,
        string $faxNumber,

    ): ShippingMethodPage
    {
        $I= $this->tester;
        $I->fillField(($this->firstName),$firstName);
        $I->fillField(($this->lastName),$lastName);
        $I->fillField(($this->email),$email);
        $I->fillField(($this->company),$company);
        $I->fillField(($this->country),$country);
        $I->fillField(($this->state),$state);
        $I->fillField(($this->city),$city);
        $I->fillField(($this->addressOne),$addressOne);
        $I->fillField(($this->addressTwo),$addressTwo);
        $I->fillField(($this->postalCode),$postalCode);
        $I->fillField(($this->phoneNumber),$phoneNumber);
        $I->fillField(($this->faxNumber),$faxNumber);
        $I->click(($this->continueButton));

        return new ShippingMethodPage();
    }




}