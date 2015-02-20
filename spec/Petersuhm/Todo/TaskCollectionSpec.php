<?php

namespace spec\Petersuhm\Todo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Petersuhm\Todo\TaskCollection');
    }

	function it_parses_a_string_returns_array()
	{
		//the $this instance is refereing to the tested class...
		$this->parse('boo,kk,lolo')->shouldReturn(['boo','kk','lolo']);
	}
}
