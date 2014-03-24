<?php

// src/Acme/DemoBundle/Command/GreetCommand.php
namespace Acme\HelloBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Acme\HelloBundle\Entity\J17JigsHobbits; 
use Acme\HelloBundle\Entity\Mudnames; 


class AttackCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('demo:greet')
            ->setDescription('Greet someone')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
     //   $name = $input->getArgument('name');
     $file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;    
     $name           = Mudnames::generate_name_from($file);
        
        
        
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

    
    
    
    
    
        $output->writeln($text);
    }
}
