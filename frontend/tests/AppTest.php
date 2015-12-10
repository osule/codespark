<?php

class AppTest extends TestCase
{
    /**
     * Asserts that there is an home page
     */
    public function testHomePageExists()
    {
        $this->visit('/');
    }

    /**
     * Asserts that sublinks under more link exist
     */
    public function testMorePagesExist()
    {
        $this->visit('/more/recognition');
        $this->visit('/more/annual-report');
    }

    /**
     * Asserts that sublinks under the getinvolved link exist
     */
    public function testGetInvolvedPagesExist()
    {
        $this->visit('/get-involved/job-opening');
        $this->visit('/get-involved/volunteer');
        $this->visit('/get-involved/coporations?do=offer_workshop');
        $this->visit('/get-involved/coporations?do=become-a-partner');
    }
}
