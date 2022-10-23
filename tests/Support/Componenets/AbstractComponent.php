<?php

use Tests\Support\AcceptanceTester;

class AbstractComponent
{
    public AcceptanceTester $tester;
    /**
     * @param AcceptanceTester $I
     */
    public function __construct(\Tests\Support\AcceptanceTester $I)
    {
         $this->tester = $I;
    }
}