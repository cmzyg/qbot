<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Users;

class DefaultController extends Controller
{
    /**
     * @Route("home", name="homepage")
     */
    public function indexAction()
    {
        $encryptionPassword = rand(1, 20000);
        $encryptor = new \Phlib\Encrypt\Encryptor\OpenSsl($encryptionPassword);
        $myData    = 'data';

        $encrypted = $encryptor->encrypt($myData);

        // $encryptor could be a completely different instance here,
        // so long as it is initialised with the same encryption password
        $decrypted = $encryptor->decrypt($encrypted);

        var_dump($decrypted);


        return $this->render('AppBundle:default:index.html.twig', array(
            'title' => 'Homepage',
            // 'user'  => $this->getUserById(1)
        ));
    }

    public function getUserById($id)
    {   
        $em   = $this->getDoctrine()->getRepository('AppBundle:Users');
        $user = $em->find($id);
        $info = array(
            "username" => $user->getUsername(),
            "fullname" => $user->getFullname()
        );
        
        return $info;
    }

    public function projectsAction()
    {
        return $this->render('AppBundle:default:index.html.twig');
    }

    public function projectAction($id)
    {
        return $this->render('AppBundle:default:index.html.twig');
    }
}
