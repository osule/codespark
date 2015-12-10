<?php

class EventsPagesTest extends TestCase
{
    /**
     * Asserts that sublinks under events link exist
     */
    public function testEventsPagesExist()
    {
        $this->visit('/events/past-events');
        $this->visit('/events/hackathons');
    }

}
