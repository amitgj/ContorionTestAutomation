<?php
namespace Tests\Support\Page;
use Tests\Support\AcceptanceTester;
use Tests\Support\Components\AbstractComponent;

class RegistrationPage extends AbstractComponent
{
    public string $firstNameField = '#FirstName';
    public string $lastNameField = '#LastName';
    public string $emailField = '#Email';
    public string $passwordField = '#Password';
    public string $confirmPasswordField = '#ConfirmPassword';
    public string $registerButton = '#register-button';
    public AcceptanceTester $tester;

    /**
     * example
     */
    public function performRegistration(
        string $firstName,
        string $lastName,
        string $email,
        string $password

    ): RegistrationSuccessPage
    {
        $I= $this->tester;
        $I ->fillField($this->firstNameField, $firstName);
        $I ->fillField($this->lastNameField ,$lastName );
        $I ->fillField($this->emailField, $email);
        $I ->fillField($this->passwordField, $password);
        $I ->fillField($this->confirmPasswordField, $password);
        $I ->click ($this->registerButton);
        return  new RegistrationSuccessPage($I);
    }

}