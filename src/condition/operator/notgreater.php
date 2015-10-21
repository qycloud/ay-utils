<?php

namespace Utils\Condition\Operator;

use Utils\Condition\Operator;

class NotGreater extends Operator
{
    public function compare($value1, $value2)
    {
        return $value1 <= $value2;
    }
}
