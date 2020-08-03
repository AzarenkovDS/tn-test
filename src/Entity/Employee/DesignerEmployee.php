<?php

namespace App\Entity\Employee;

use App\Entity\Action\Action;

class DesignerEmployee extends Employee
{
    public function __construct()
    {
        $this->actions = [
            Action::WRITE_CODE => false,
            Action::TEST_CODE => false,
            Action::COMMUNICATE_WITH_MANAGER => true,
            Action::DRAW => true,
            Action::SET_TASKS => false
        ];
    }
}
