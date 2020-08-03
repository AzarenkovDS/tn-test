<?php

namespace App\Entity\Employee;

use App\Entity\Action\Action;

class ManagerEmployee extends Employee
{
    public function __construct()
    {
        $this->actions = [
            Action::WRITE_CODE => false,
            Action::TEST_CODE => false,
            Action::DRAW => false,
            Action::SET_TASKS => true
        ];
    }
}
