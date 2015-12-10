<?php

class ProgrammesPagesTest extends TestCase
{
    /**
     * Asserts that sublinks under programmes link exist
     */
    public function testProgrammesPagesExist()
    {
        $this->visit('/programmes/curriculum');
        $this->visit('/programmes/profession-development');
        $this->visit('/programmes/resources');
    }
}
