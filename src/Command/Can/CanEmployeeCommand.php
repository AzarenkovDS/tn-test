<?php

namespace App\Command\Can;

use App\Entity\Employee\EmployeeInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class CanEmployeeCommand extends Command
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
        $this->setDescription('Returns true if employee can do the action.');

        $this->addArgument('action', InputArgument::REQUIRED, 'Employee action.');
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
        try {
            $result = $this->employee->canDo($input->getArgument('action'));
            if ($result) {
                $output->writeln('true');
            } else {
                $output->writeln('false');
            }
        } catch (\Exception $e) {
            $output->writeln($e->getMessage());
        }
    }
}
