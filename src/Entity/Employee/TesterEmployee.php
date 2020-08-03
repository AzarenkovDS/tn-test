<?php

namespace App\Entity\Employee;

use App\Entity\Action\Action;

class TesterEmployee extends Employee
{
    public function __construct()
    {
        $this->actions = [
            Action::WRITE_CODE => false,
            Action::TEST_CODE => true,
            Action::COMMUNICATE_WITH_MANAGER => true,
            Action::DRAW => false,
            Action::SET_TASKS => true
        ];
    }
}
