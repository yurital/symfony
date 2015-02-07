<?php
namespace Store\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News');
        $news = $newsRepo ->findAll();
        return $this->render('NewsBundle:Default:index.html.twig', array('news' => $news));
    }

//    параметр получили из роутинга
        public function oneArticleAction($slug)
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News');
        $news = $newsRepo ->findOneBy(['slug'=>$slug]);
        return $this->render('NewsBundle:Default:oneArticle.html.twig', array('oneArticle' => $news));
    }
    
    }
