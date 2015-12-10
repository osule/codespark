<?php

class AboutPagesTest extends TestCase
{
    /**
     * Asserts that sublinks under about link exist
     */
    public function testAboutPagesExists()
    {
        $this->visit('/about/mission');
        $this->visit('/about/partners');
        $this->visit('/about/team');
        $this->visit('/about/founder');
        $this->visit('/about/contact-us');
    }
}
