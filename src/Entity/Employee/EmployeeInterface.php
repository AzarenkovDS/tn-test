<?php

namespace App\Entity\Employee;

interface EmployeeInterface
{
    /**
     * Checks employee's ability to perform action.
     *
     * @param string $action
     * @return bool
     */
    public function canDo(string $action);

    /**
     * Returns action list.
     *
     * @return array
     */
    public function getActions();
}
