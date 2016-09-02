<?php
  namespace AppBundle\Command;

  use Symfony\Component\Console\Command\Command;
  use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
  use Symfony\Component\Console\Input\InputInterface;
  use Symfony\Component\Console\Output\OutputInterface;
  use Symfony\Component\Console\Input\InputArgument;

  use AppBundle\Repository\UserRepository;

  class PruneUsersCommand extends ContainerAwareCommand
  {
      protected function configure()
      {
        $this
         ->setName('app:prune-users')
         ->setDescription('Hard deletes users that haven\'t logged in since the specified date')
         ->setHelp('Example: php bin/console app:prune-users 2016-09-02')
         ->addArgument('date', InputArgument::REQUIRED, 'The date from when the pruning will be mate');
      }

      protected function execute(InputInterface $input, OutputInterface $output)
      {
        $repository = $this->getContainer()->get('doctrine')->getRepository('AppBundle:User');
        $repository->pruneSince($input->getArgument('date'));
      }
  }
