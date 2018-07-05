<?php

namespace App\Controller;

use App\Entity\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class OperationController extends Controller
{
    /**
     * @Route("/operations/", name="get_basic_operations")
     * @Method("GET")
     */
    public function getOperations() {

        unset($datas);

        $operations = $this->getDoctrine()->getManager()->getRepository(Operation::class)->findAll();

        $datas = [];

        foreach ($operations as $operation) {
            $datas[] = $operation->toArray();
        }

//        $datas = array(
//            'id' => "integer",
//            'libelle' => "string",
//            'date' => "date",
//            'category' => "integer",
//            'sum' => "float"
//        );

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

    /**
     * @Route("/operation/", name="post_operation")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function postOperation(Request $request)
    {
        unset($operation);

        $unformattedLibelle = $request->get('libelle');
        $unformattedType = $request->get('type');
        $unformattedDate = $request->get('date');
        $unformattedCategory = $request->get('category');
        $unformattedSum = $request->get('sum');

        if($unformattedLibelle !== "" && $unformattedLibelle !== null) { $libelle = (string)$unformattedLibelle; } else { $libelle = null; }
        if($unformattedType !== "" && $unformattedType !== null) { $type = (string)$unformattedType; } else { $type = null; }
        if($unformattedDate !== "" && $unformattedDate !== null) { $date = (string)$unformattedDate; } else { $date = null; }
        if($unformattedCategory !== "" && $unformattedCategory !== null) { $category = (integer)$unformattedCategory; } else { $category = null; }
        if($unformattedSum !== "" && $unformattedSum !== "0" && $unformattedSum !== null) { $sum = (float)$unformattedSum; } else { $sum = null; }

        $operation = new Operation();

        if($libelle !== null) { $operation->setLibelle($libelle); } else {
            return new JsonResponse(
                array(
                    'request' => 'ADD_OPERATION',
                    'state' => 'ERROR',
                    'message' => 'Libelle can\'t be null !'
                ),
                Response::HTTP_NOT_FOUND,
                array('content-type' => 'json/html')
            );
        }
        if($type !== null) { $operation->setType($type); } else {
            return new JsonResponse(
                array(
                    'request' => 'ADD_OPERATION',
                    'state' => 'ERROR',
                    'message' => 'Type can\'t be null !'
                ),
                Response::HTTP_NOT_FOUND,
                array('content-type' => 'json/html')
            );
        }
        if($date !== null) { $operation->setDate($date); } else {
            return new JsonResponse(
                array(
                    'request' => 'ADD_OPERATION',
                    'state' => 'ERROR',
                    'message' => 'Date can\'t be null !'
                ),
                Response::HTTP_NOT_FOUND,
                array('content-type' => 'json/html')
            );
        }
        if($category !== null) { $operation->setCategory($category); }
        if($sum !== null && $sum !== 0) { $operation->setSum($sum); } else {
            return new JsonResponse(
                array(
                    'request' => 'ADD_OPERATION',
                    'state' => 'ERROR',
                    'message' => 'Sum can\'t be null or equal to 0 !'
                ),
                Response::HTTP_NOT_FOUND,
                array('content-type' => 'json/html')
            );
        }

        $this->getDoctrine()->getManager()->persist($operation);
        $this->getDoctrine()->getManager()->flush();

        unset($request);
        unset($unformattedLibelle);
        unset($unformattedType);
        unset($unformattedDate);
        unset($unformattedCategory);
        unset($unformattedSum);
        unset($libelle);
        unset($type);
        unset($date);
        unset($category);
        unset($sum);

        return new JsonResponse(
            array(
                'request' => 'ADD_OPERATION',
                'state' => 'SUCCESS',
                'datas' => $operation->toArray()
            ),
            Response::HTTP_OK,
            array('content-type' => 'json/html')
        );
    }
}
