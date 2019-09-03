<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
     public function test_autoloading()
     {
         $this->assertTrue(function_exists('encore_entry_link_tags'));
         $this->assertTrue(function_exists('encore_entry_script_tags'));
     }
}
