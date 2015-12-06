<?php

// src/Acme/DemoBundle/Command/GenerateHobbitCommand.php
namespace Emc23\HelloBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Emc23\HelloBundle\Entity\J17JigsHobbits;
use Emc23\HelloBundle\Entity\Mudnames;
use Emc23\HelloBundle\JigsFactory;

class generateHobbitCommand extends ContainerAwareCommand
{

 protected $em;


    public function __construct($em)
    {
        $this->em = $em;
    }
    
    
    protected function configure()
    {
        $this
            ->setName('demo:generateHobbit')
            ->setDescription('Greet someone')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
     //   $name = $input->getArgument('name');
     //$file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;    
     //$name           = Mudnames::generate_name_from($file);
     
     $task           = new J17JigsHobbits();
     $jigs = $this->get('my_JigsFactory');
      
     $hobbit =  $jigs->generateHobbit();
     
      
     $task->setFaction($hobbit['faction_number']);
     $task->setGid($hobbit['Gid'] ); 
     $task->setHealth($hobbit['health']);     
     $task->setStrength($hobbit['strength'] );         
     $task->setIntelligence($hobbit['intelligence']);     
     $task->setOwner($hobbit['owner']->id);
     $task->setOwner_type($hobbit['owner']->type);
     
          
     $task->setContentment($hobbit['contentment']);
           
    $em->persist($task);
    $em->flush();
      
        
        
      /*  
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
