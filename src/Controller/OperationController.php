<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class OperationController extends Controller
{
    //public function index()
    //{
      	//return $this->json([
        //  'message' => 'Welcome to your new controller!',
        //  'path' => 'src/Controller/OperationController.php',
        //]);
    //}
    
    /**
     * @Route("/operations/", name="get_basic_operations")
     * @Method("GET")
     */
    public function getOperations() {
    	
    $datas = array(
    	'id' => "id",
    	'libelle' => "libelle",
    	'date' => "date",
    	'category' => "category",
    	'sum' => "sum"
    );
        return new JsonResponse(
            array(
                'request' => 'GET_BASIC_OPERATIONS',
                'state' => 'SUCCESS',
                'datas' => $datas
            ),
            Response::HTTP_OK,
            array('content-type' => 'json/html')
        );
    }
}
