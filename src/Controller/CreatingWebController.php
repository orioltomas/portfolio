<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreatingWebController extends AbstractController
{
    private $news;

    /**
     * @Route("/creating-web", name="creating-web")
     */
    public function creatingWeb(){
        return $this->render('creating-web.html.twig');
    }

    /**
     * @Route("/creating-web/backend", name="cw-backend")
     */
    public function cwBackend(){

        $content = json_decode(file_get_contents(__DIR__.'/../../public/files/news.json'));

        return $this->render('cw-backend.html.twig', [
            'content_list' => $content
        ]);
    }

    /**
     * @Route("/creating-web/backend/edit/{id}", name="cw-backend-edit")
     */
    public function cwBackendEdit($id){

        $content = json_decode(file_get_contents(__DIR__.'/../../public/files/news.json'), true);

        foreach ($content as $value => $row) {
            if ($row['_id'] == $id) {
                $index = $value;
            }
        }

        if ($_POST) {

            $content[$index]['publishedAt'] = $_POST['publishedAt'];
            $content[$index]['isActive'] = (array_key_exists('isActive', $_POST)) ? true : false;
            $content[$index]['content'] = $_POST['content'];
            $content[$index]['description'] = $_POST['description'];
            $content[$index]['urlToImage'] = $_POST['urlToImage'];
            $content[$index]['category'] = $_POST['category'];
            $content[$index]['author'] = $_POST['author'];
            $content[$index]['latitude'] = $_POST['latitude'];
            $content[$index]['longitude'] = $_POST['longitude'];

            file_put_contents(__DIR__.'/../../public/files/news.json', json_encode($content));

            return $this->render('cw-backend.html.twig', [
                'content_list' => $content
            ]);

        }

        return $this->render('cw-backend-edit.html.twig', [
            'element' => $content[$index]
        ]);
    }

    /**
     * @Route("/creating-web/frontend", name="cw-frontend")
     */
    public function cwFrontend(){
        return $this->render('cw-frontend.html.twig');
    }
}