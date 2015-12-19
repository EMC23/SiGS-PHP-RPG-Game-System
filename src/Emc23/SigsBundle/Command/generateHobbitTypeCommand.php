<?php

// src/Acme/DemoBundle/Command/GreetCommand.php
namespace Emc23\SigsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Emc23\SigsBundle\Entity\J17JigsHobbitTypes;
use Emc23\SigsBundle\Entity\Mudnames;

class generateHobbitTypeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Emc23:generateHobbitType')
            ->setDescription('Scan directory')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random';
        //$name              = Mudnames::generate_name_from($file);
        $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');
        $task              = new J17JigsHobbitTypes();
        //$jigs = $this->getContainer()->get('my_JigsFactory');
        //$hobbit            = $jigs->generateHobbit();
        $directory = '/var/www/meme/components/com_battle/images/assets/chars/halflings/';
        $fileArray = scandir($directory);

        foreach ($fileArray as $row) {
            $task              = new J17JigsHobbitTypes();
            $type = substr($row, 0, -4);
            echo $type . PHP_EOL;
            $task->setType($type);

            $em->persist($task);
            $em->flush();
        //    $output->writeln($type);
        }
    }
      /*
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }
        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }
        $output->writeln($text);*/
}
