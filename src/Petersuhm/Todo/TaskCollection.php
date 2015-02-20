<?php

namespace Petersuhm\Todo;

class TaskCollection
{

    public function parse($aString)
    {
		return explode(',', $aString);
    }
}
