<?php

namespace App\Entity\Employee;

abstract class Employee implements EmployeeInterface
{
    /**
     * @var array action list
     */
    protected $actions = [];

    /**
     * Checks employee's ability to perform action.
     *
     * @param string $action
     * @return bool|mixed
     */
    public function canDo(string $action)
    {
        if (isset($this->actions[$action])) {
            return $this->actions[$action];
        } else {
            throw new \InvalidArgumentException('Error: Unknown action');
        }
    }

    /**
     * Returns action list.
     *
     * @return array
     */
    public function getActions()
    {
        return $this->actions;
    }
}
