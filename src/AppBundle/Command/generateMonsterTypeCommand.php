<?php
// src/AppBundle/Command/GreetCommand.php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class generateMonsterTypeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Emc23:generateMonsterType')
            ->setDescription('Scan directory')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random';

        $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');
        $task              = new J17JigsMonsterTypes();
        //$jigs = $this->getContainer()->get('my_JigsFactory');
        //$hobbit            = $jigs->generateMonster();
        $directory = '/var/www/meme/components/com_battle/images/assets/chars/monsters/';
        $fileArray = array_diff(scandir($directory), array('..', '.'));

        foreach ($fileArray as $row) {
            $task              = new J17JigsMonsterTypes();
            //$type = substr($row, 0, -4);
            $task->setSpritesheet($row);
            $task->setName($row);

            $task->setSpritesheet($row . '.png');

            $em->persist($task);
            $em->flush();
            $output->writeln($row);
        }
    }
}
