<?php

namespace App\Command\User;

use App\Entity\Employee\EmployeeInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class UserCommand extends Command
{
    /**
     * @var EmployeeInterface
     */
    protected $employee;

    /**
     * CanEmployeeCommand constructor.
     * @param EmployeeInterface $employee
     */
    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;

        parent::__construct();
    }

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this->setDescription('Returns employee\'s action list.');
    }

    /**
     * Executes the current command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        foreach ($this->employee->getActions() as $action => $isAble) {
            if ($isAble) {
                $output->writeln($action);
            }
        }
    }
}
