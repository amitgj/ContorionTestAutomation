<?php
namespace Page;
use Tests\Support\AcceptanceTester;
class LoginPage extends \AbstractComponent
{
    public string $userId = '#Email';
    public string $password = '#Password';
    public string $submitButton = '.buttons [type="submit"]';

    /**
     * example
     */
    public function performLogin($userName, $password): HomePage
    {
        $I= $this->tester;
        $I->amGoingTo('/');
        $I ->fillField($this->userId, $userName);
        $I ->fillField($this->password, $userName);
        $I ->click ($this->submitButton);
        return new HomePage;
    }

}