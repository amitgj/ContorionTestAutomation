<?php
namespace Page;
use Tests\Support\AcceptanceTester;
class RegistrationPage
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

    ): HomePage
    {
        $I= $this->tester;
        $I ->fillField($this->firstNameField, $firstName);
        $I ->fillField($this->lastNameField ,$lastName );
        $I ->fillField($this->emailField, $email);
        $I ->fillField($this->passwordField, $password);
        $I ->fillField($this->confirmPasswordField, $password);
        $I ->click ($this->registerButton);
        return  new HomePage($I);
    }

}