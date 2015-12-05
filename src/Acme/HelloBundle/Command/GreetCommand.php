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


class GreetCommand extends ContainerAwareCommand
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

        $file              = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;    
        $name              = Mudnames::generate_name_from($file);

        $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');

        $task              = new J17JigsHobbits();
        $jigs              = $this->getContainer()->get('my_JigsFactory');
       
        $hobbit            =  $jigs->generateHobbit();
               
        $task->setName($name);
        $task->setFaction($hobbit['faction_number']);
        $task->setGid($hobbit['Gid'] ); 
        $task->setHealth($hobbit['health']);     
        $task->setStrength($hobbit['strength'] );         
        $task->setIntelligence($hobbit['intelligence']);     
        $task->setOwner($hobbit['owner']->id);
        $task->setOwner_type($hobbit['owner']->type);    
     
        $task->setContentment($hobbit['contentment']);
           
        $text = $hobbit['owner']->type;
          
        $output->writeln($text);    
    
           
        $em->persist($task);
        $em->flush();
     
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
}
