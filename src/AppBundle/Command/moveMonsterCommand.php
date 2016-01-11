<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 11-1-16
 * Time: 17:59
 */

<?php

// src/Acme/DemoBundle/Command/GreetCommand.php
namespace Emc23\SigsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Emc23\SigsBundle\Entity\J17JigsHobbits;
use Emc23\SigsBundle\Entity\Mudnames;
use Doctrine\ORM\Query;
use \ZMQContext;

class moveMonsterCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Emc23:moveMonster')
            ->setDescription('Move a monster')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');
        $dql = "SELECT a FROM Emc23SigsBundle:J17JigsMonsters a";
        $query = $em->createQuery($dql);
        $result = $query->getResult(Query::HYDRATE_ARRAY);

        foreach ($result as $row)
        {
            //  $type = substr($row, 0, -4);
            //     echo ( $row['name'] . PHP_EOL );
            $direction = rand(0,12);
            if ($direction ==0){
                $row['x']-=60;
                if ($row['x']<0){
                    $row['x']=0;
                }
            }
            if ($direction ==1){
                $row['x']+=60;

                if ($row['x']>1100){
                    $row['x']=1100;
                }
            }
            if ($direction ==2){
                $row['y']-=60;
                if ($row['y']<0){
                    $row['y']=0;
                }
            }
            if ($direction ==3){
                $row['y']+=60;
                if ($row['y']>1100){
                    $row['y']=1100;
                }
            }
            $x      = $row['x'];
            $y      = $row['y'];
            $dql    = "UPDATE Emc23SigsBundle:J17JigsMonsters u SET u.x = $x, u.y = $y WHERE u.id =" . $row['id'];

            $query  = $em->createQuery($dql);
            $query->execute();
            // This is our new stuff

            $context = new \ZMQContext();
            $socket = $context->getSocket(\ZMQ::SOCKET_PUSH, 'my pusher');
            $socket->connect("tcp://localhost:5555");


            //temporary todo: only send diff
            $dql = "SELECT a FROM Emc23SigsBundle:J17JigsMonsters a";
            $query = $em->createQuery($dql);
            $result = $query->getResult(Query::HYDRATE_ARRAY);


            $entryData  = array('category' => 'monstersCategory', 'title' => 'title', 'article'  => $result, 'when' => time()  );
            $socket->send(json_encode($entryData));

            //  $output->writeln($type);
        }
        //$em->flush();
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

