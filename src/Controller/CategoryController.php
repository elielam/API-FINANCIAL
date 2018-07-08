<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    /**
     * @Route("/categories/", name="get_categories")
     */
    public function getCategories() {
        unset($datas);

        $categories = $this->getDoctrine()->getManager()->getRepository(Category::class)->findAll();

        $datas = [];

        foreach ($categories as $category) {
            $datas[] = $category->toArray();
        }

        $response = new JsonResponse(
            array(
                'request' => 'GET_CATEGORIES',
                'state' => 'SUCCESS',
                'datas' => $datas
            ),
            Response::HTTP_OK
        );
        return $response;
    }

    /**
     * @Route("/category/", name="get_category")
     * @Method("GET")
     */
    public function getCategory(Request $request)
    {
        unset($category);

        $id = $request->get('id');

        $category = $this->getDoctrine()->getManager()->getRepository(Category::class)->find(intval($id));

        if ($category === null ) {
            return new JsonResponse(
                array(
                    'request' => 'GET_CATEGORY',
                    'state' => 'ERROR',
                    'message' => 'This ID dosn\'nt seems exist !',
                    'params' => $request
                ),
                Response::HTTP_NOT_FOUND,
                array('content-type' => 'json/html')
            );
        }

        unset($request);
        unset($id);

        return new JsonResponse(
            array(
                'request' => 'GET_CATEGORY',
                'state' => 'SUCCESS',
                'datas' => $category->toArray()
            ),
            Response::HTTP_OK
        );
    }

    /**
     * @Route("/category/", name="post_category")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function postCategory(Request $request)
    {
        unset($category);

        $unformattedLibelle = $request->get('libelle');
        if($unformattedLibelle !== "" && $unformattedLibelle !== null) { $libelle = (string)$unformattedLibelle; } else { $libelle = null; }

        $category = new Category();

        if($libelle !== null) { $category->setLibelle($libelle); } else {
            /* validate empty field */
            return new JsonResponse(
                array(
                    'request' => 'ADD_CATEGORY',
                    'state' => 'ERROR',
                    'message' => 'Libelle can\'t be null !',
                    'params' => $request
                ),
                Response::HTTP_NOT_FOUND,
                array('content-type' => 'json/html')
            );
        }
        $category->setSelected(false);

        $this->getDoctrine()->getManager()->persist($category);
        $this->getDoctrine()->getManager()->flush();

        unset($request);
        unset($unformattedLibelle);
        unset($libelle);

        return new JsonResponse(
            array(
                'request' => 'ADD_CATEGORY',
                'state' => 'SUCCESS',
                'datas' => $category->toArray()
            ),
            Response::HTTP_OK,
            array('content-type' => 'json/html')
        );
    }

    /**
     * @Route("/category/", name="put_category")
     * @Method("PUT")
     */
    public function putCategory(Request $request)
    {

        unset($category);

        $id = $request->get('id');

        // GET ENTITY
        $category = $this->getDoctrine()->getManager()->getRepository(Category::class)->find(intval($id));

        // PROVIDE ID ERROR
        if ($category === null) {
            return new JsonResponse(
                array(
                    'request' => 'UPDATE_CATEGORY',
                    'state' => 'ERROR',
                    'message' => 'This ID dosn\'nt seems exist !',
                    'params' => $request
                ),
                Response::HTTP_NOT_FOUND
            );
        }

        $unformattedLibelle = $request->get('libelle');

        if($unformattedLibelle !== "" && $unformattedLibelle !== null) { $libelle = $category->setLibelle((string)$unformattedLibelle); };

        $this->getDoctrine()->getManager()->persist($category);
        $this->getDoctrine()->getManager()->flush();

        unset($request);
        unset($id);
        unset($unformattedLibelle);

        return new JsonResponse(
            array(
                'request' => 'UPDATE_CATEGORY',
                'state' => 'SUCCESS',
                'datas' => $category->toArray()
            ),
            Response::HTTP_OK,
            array('content-type' => 'json/html')
        );
    }

    /**
     * @Route("/category/", name="delete_category")
     * @Method("DELETE")
     */
    public function deleteCategory(Request $request)
    {
        unset($category);

        $id = $request->get('id');

        $category = $this->getDoctrine()->getManager()->getRepository(Category::class)->find(intval($id));

        if ($category === null ) {
            return new JsonResponse(
                array(
                    'request' => 'DELETE_CATEGORY',
                    'state' => 'ERROR',
                    'message' => 'This ID dosn\'nt seems exist !',
                    'params' => $request
                ),
                Response::HTTP_NOT_FOUND,
                array('content-type' => 'json/html')
            );
        }

        $this->getDoctrine()->getManager()->remove($category);
        $this->getDoctrine()->getManager()->flush();

        // PROVIDE MEMORY LEAK
        unset($request);
        unset($id);

        // RETURN
        return new JsonResponse(
            array(
                'request' => 'DELETE_CATEGORY',
                'state' => 'SUCCESS'
            ),
            Response::HTTP_OK,
            array('content-type' => 'json/html')
        );
    }
}
