<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;


class ProjectsController extends Controller
{
    private $projects = array();
    private $projectID;

    public function __construct()
    {

    }

    public function projectsAction()
    {
        $projectObject = $this->getObject('project_repository', 'Projects', 'getAllProjects');

        return $this->render('AppBundle:projects:index.html.twig', array('projects' => $projectObject->getAllProjects()));
    }

    public function projectAction($projectID)
    {
        $session = new Session;

        $session->set('user', 'Zygis');

        if($this->isLoggedIn() === false)
        {
            return $this->redirectToRoute('login');
        }

        $projectObject  = $this->getObject('project_repository', 'Project');
        $sectionObject  = $this->getObject('section_repository', 'Section');
        $taskObject     = $this->getObject('task_repository', 'Task');

        return $this->render(
            'AppBundle:project:index.html.twig', array(
                'project' => $projectObject->getProjectById($projectID),
                'section' => $sectionObject->getSectionsByProjectID($projectID),
            )
        );
    }

    public function projectOverviewAction()
    {
        return $this->render('AppBundle:project:project_overview.html.twig');
    }
}
