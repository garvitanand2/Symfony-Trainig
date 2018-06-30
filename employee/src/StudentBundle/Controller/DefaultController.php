<?php

namespace StudentBundle\Controller;
use StudentBundle\Entity\student;
use StudentBundle\Entity\studentmarks;
use StudentBundle\Entity\subject;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller

{
    public function indexAction()
    {
        return $this->render('StudentBundle:Default:index.html.twig');
    }
    public function marksaddAction()
    {
        return $this->render('StudentBundle:Default:add.html.twig');   
    }
    public function marksaddsubAction()
    {
        return $this->render('StudentBundle:Default:addsub.html.twig');
    }

    public function marksaddeditAction()
    {
     $entityManager = $this->getDoctrine()->getManager();

     $student = $entityManager->getRepository('StudentBundle:student')->findAll();
     $subject= $entityManager->getRepository('StudentBundle:subject')->findAll();



     return $this->render('StudentBundle:Default:addedit.html.twig',array('student'=>$student , 'subject'=>$subject));  }

     public function marksadddbAction(Request $request)
     {
         if ($request->getMethod() == Request::METHOD_POST)
         {
            $Name = $request->request->get('name');
            $Mobile= $request->request->get('mobile');
        }

        $student = new student();
        $student->setstudentName("$Name");
        $student->setmobile("$Mobile");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($student);
        $entityManager->flush();
        return $this->render('StudentBundle:Default:add.html.twig');
        exit;
    }

    public function markslistAction(Request $request)
    {   
    	// $repository = $this->getDoctrine()->getRepository(student::class);
     $entityManager = $this->getDoctrine()->getManager();

     $studentmarks = $entityManager->getRepository('StudentBundle:studentmarks')->findAll();
     return $this->render('StudentBundle:Default:list.html.twig',array('studentmarks'=>$studentmarks));

        /* $student = $entityManager->getRepository('StudentBundle:studentmarks')->findAll();
        return $this->render('StudentBundle:Default:list.html.twig',array('student'=>$student));*/


        
    }



    public function marksaddsubdbAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if ($request->getMethod() == Request::METHOD_POST)
        {
            $ID= $request->request->get('id');  
            $Name = $request->request->get('name');  
            $Mobile = $request->request->get('mobile');  
            $Subject = $request->request->get('subjectname');  
            $Marks = $request->request->get('marks');
            echo $ID;
            echo $Name;
            echo $Mobile;
            echo $Subject;
            echo $Marks;
            exit();
        }
        
        $Subject = new subject();
        $Subject->setsubjectname("$Name");

        $entityManager->persist($Subject);
        $entityManager->flush();
        return $this->render('StudentBundle:Default:addsub.html.twig');
    }
    public function marksaddeditdbAction(Request $request)

    {

        $entityManager = $this->getDoctrine()->getManager();

        if ($request->getMethod() == Request::METHOD_POST)
        {  
            $studentid = $request->request->get('selectedstudent'); 
            $student = $this->getDoctrine()
            ->getRepository('StudentBundle:student')
            ->find($studentid);

            $subjectid = $request->request->get('selectedsubject'); 
            $subject = $this->getDoctrine()
            ->getRepository('StudentBundle:subject')
            ->find($subjectid);

            $marks = $request->request->get('marks'); 

            $studentmarksDB = new studentmarks();
            $studentmarksDB->setStudent($student);
            $studentmarksDB->setSubject($subject);
            $studentmarksDB->setMarks($marks);

            $entityManager->persist($studentmarksDB);
            $entityManager->flush();

            return $this->redirect('http://localhost/student/marks/list');
        }
        return $this->render('StudentBundle:Default:addedit.html.twig');
    }

    public function marksviewAction(Request $request)

    {
        $entityManager = $this->getDoctrine()->getManager();

        $studentid =  $request->get('studentid');

        $student = $this->getDoctrine()
                        ->getRepository('StudentBundle:student')
                        ->find($studentid);

        $studentmarks = $student->getSubjectmarks();
        return  $this->render('StudentBundle:Default:viewshow.html.twig',array('studentmarks'=>$studentmarks));


    }
}
