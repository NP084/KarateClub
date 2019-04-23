<?php

namespace App\Controller;

use App\Entity\PriceGrid;
use App\Form\PriceGridType;
use App\Repository\PriceGridRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pricegrid")
 */
class PriceGridController extends AbstractController
{
    /**
     * @Route("-new", name="price_grid_new")
     */
    public function new(Request $request): Response
    {
        $priceGrid = new PriceGrid();
        $form = $this->createForm(PriceGridType::class, $priceGrid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($priceGrid);
            $entityManager->flush();

            return $this->redirectToRoute('priceGrid_index', ['orderby'=>'ASC']);
        }

        return $this->render('price_grid/new.html.twig', [
            'price_grid' => $priceGrid,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("%list-{orderby}", name="priceGrid_index", methods={"GET"})
     */
    public function index(PriceGridRepository $repo, $orderby=null, ObjectManager $manager, Request $request): Response
    {
        if ($orderby =='ASC' or $orderby == 'DESC'){
            $priceGrid = $repo->findBy(
                [ ],
                ['category'=>$orderby]
            );
            return $this->render('price_grid/index.html.twig', [
                'price_grids' => $priceGrid,
            ]);
        }
        elseif ($request->query->get('searchName')) {
            $searchName = $request->query->get('searchName');
            $priceGrid = $repo->findBy(
                ['category' => $searchName]
            );
            return $this->render('price_grid/index.html.twig', [
                'price_grids' => $priceGrid,
            ]);
        }
        else{
            $priceGrid = $repo->findBy(
                [ ],
                ['category'=>'ASC']
            );
            return $this->render('price_grid/index.html.twig', [
                'price_grids' => $priceGrid
            ]);
        }
    }


    /**
     * @Route("-{id}", name="price_grid_show", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function show(PriceGrid $priceGrid): Response
    {
        return $this->render('price_grid/show.html.twig', [
            'price_grid' => $priceGrid,
        ]);
    }

    /**
     * @Route("-{id}-edit", name="price_grid_edit", methods={"GET","POST"}, requirements={"id"="\d+"})
     */
    public function edit(Request $request, PriceGrid $priceGrid): Response
    {
        $form = $this->createForm(PriceGridType::class, $priceGrid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('priceGrid_index', [
                'orderby' => 'ASC',
            ]);
        }

        return $this->render('price_grid/edit.html.twig', [
            'price_grid' => $priceGrid,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("-{id}", name="price_grid_delete", methods={"DELETE"}, requirements={"id"="\d+"})
     */
    public function delete(Request $request, PriceGrid $priceGrid): Response
    {
        if ($this->isCsrfTokenValid('delete'.$priceGrid->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($priceGrid);
            $entityManager->flush();
        }

        return $this->redirectToRoute('price_grid_index');
    }
}
