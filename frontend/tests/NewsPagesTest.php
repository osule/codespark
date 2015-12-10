<?php

class NewsPageTest extends TestCase
{
    /**
     * Asserts that sublinks under news link exist
     */
    public function testNewsPagesExist()
    {
        $this->visit('/news/community');
        $this->visit('/news/research');
        $this->visit('/news/technology-in-schools');
        $this->visit('/news/podcasts');
        $this->visit('/news/press-kits');
    }
}
