<?php

namespace Emc23\SigsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Emc23\SigsBundle\Entity\J17JigsMonsters;
use Guzzle\Http\Client;

use Emc23\SigsBundle\JigsFactory;

class downloadPinterestCommand extends ContainerAwareCommand
{

//protected $em;

  //  public function __construct($em)
  //  {
 //       $this->em = $em;
 //   }

    protected function configure()
    {
        $this
            ->setName('Emc23:downloadPinterest')
            ->setDescription('download pins from Pinterest')
            ->addArgument('boardname', InputArgument::OPTIONAL, 'Enter name of board to download?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        //[id] => 363736176093658922
        //[name] => Cut N' Paste

        //[id] => 363736176093418533
        //[name] => Glitch

        //[id] => 363736176093602588
        //[name] => Pulp  50's 60's 70's 80's









        $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');
        // Create a client and provide a base URL
        //$client = new Client('https://api.pinterest.com/v1/boards/techbot/glitch//pins/?access_token=AblZEJzlRPJ8UzANVQUTkdGYThRqFB9KY1NxnLdCtJ0HDGBAIgAAAAA&fields=id%2Cimage%2Cnote%2Curl&callback=?');

        try {
            $pinterest = new \PinterestPinner\Pinner;
            $pin_id = $pinterest->setLogin('techbot')
                ->setPassword('cyberia23');
        } catch (\PinterestPinner\PinnerException $e) {
            echo $e->getMessage();
        }
        $pins = $pinterest->getPins();
        print_r($pins);


        foreach($pins as $pin){

            $remoteImage = $pin['images']['237x']['url'];


            exec('wget ' . $remoteImage);

            //$imginfo = getimagesize($remoteImage);
            //header("Content-type: $imginfo['mime']");
            //readfile($remoteImage);


// Create a GET request using Relative to base URL
// URL of the request: http://baseurl.com/api/v1/path?query=123&value=abc)


           // echo $pin['board']['name'].PHP_EOL;
           // echo $pin['images']['237x']['url'].PHP_EOL;



            sleep (10);



        }






        //   $name = $input->getArgument('name');
        //$file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;
        //$em->persist($task);
        // $em->flush();
        $text='done';
        $output->writeln($text);
    }
}
