<?php

namespace AppBundle\Controller;
use AppBundle\Entity\J17JigsMonsterTypes;
use AppBundle\Entity\J17JigsObjectTypes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/content")
 */
class ContentController extends Controller
{
    /**
     * @Route("/", name="content")
     */
    public function indexAction($start=0,$max=100)
    {
        $em             = $this->get('doctrine.orm.entity_manager');


        $directory = '/var/www/html/meme__/components/com_battle/images/assets/objects/';
        $categories = array_diff(scandir($directory), array('..', '.'));

      //  $objects=$categories;

foreach ($categories as $category) {

    $directory = '/var/www/html/meme__/components/com_battle/images/assets/objects/' . $category;

    $objects[$category] = array_diff(scandir($directory), array('..', '.'));


    foreach ($objects[$category] as $object) {
        echo $object;

        $repository = $this->getDoctrine()->getRepository('AppBundle:J17JigsObjectTypes');
        $dupes = $repository->findByName($object);

        if (!$dupes) {

            $task = new J17JigsObjectTypes();
            $task->setName($object);
            $task->setCategory($category);

            try {
          //      $em->persist($task);
          //      $em->flush();
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
    }




}

        //$monsterTypes = $query->getResult();

       echo '<pre>';
        print_r($objects);
        echo '</pre>';
        exit();



        return $this->render('AppBundle:Default:J17JigsContent.html.twig', array('pagination' => $paginator));
    }

    function dirToArray($dir) {

        $result = array();

        $cdir = scandir($dir);
        foreach ($cdir as $key => $value)
        {
            if (!in_array($value,array(".","..")))
            {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
                {
                    $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                }
                else
                {
                    $result[] = $value;
                }
            }
        }

        return $result;
    }






}
