<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\PriceGrid;
use App\Entity\VikaEvent;
use App\Form\PriceGridType;
use App\Repository\CategoryRepository;
use App\Repository\PriceGridRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * @Route("/pricegrid")
 */
class PriceGridController extends AbstractController
{
    /**
     * CREATION ET EDITION D'UN TARIF (A PRIORI PAS DE CRéATION VIA CETTE FONCTION L'AJOUT D'UN TARIF SE FAIT
     * VIA LE FORMULAIRE D'EDITION DE L'EVENEMENT
     * @Route("-new", name="price_grid_new")
     * @Route("-{id}-edit-{route}", name="price_grid_edit", methods={"GET","POST"}, requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function edit(Request $request, PriceGrid $priceGrid = null, bool $route=null): Response
    {
        if(!$route){
            $route=false;
        }
        $newMode = false;
        if (!$priceGrid) {
            $priceGrid = new PriceGrid();
            $newMode = true;
        }

        $form = $this->createForm(PriceGridType::class, $priceGrid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vika_event_edit', [
                'id' => $priceGrid->getVikaEvent()->getId(),
            ]);
        }

        return $this->render('price_grid/edit.html.twig', [
            'price_grid' => $priceGrid,
            'form' => $form->createView(),
            'newMode' => $newMode,
            'indexMode'=>$route,
        ]);
    }

    /**
    * @Route("-list-{orderby}", name="priceGrid_index", methods={"GET"})
    * @Security("is_granted('ROLE_ADMIN')")
     */
    public function index(PriceGridRepository $repo, $orderby=null, ObjectManager $manager, Request $request): Response
     {
         if ($orderby =='ASC' or $orderby == 'DESC'){
             $priceGrid = $repo->findBy(
                 [ ],
                 ['label'=>$orderby]
             );
         }
         elseif ($request->query->get('searchName')) {
             $searchName = $request->query->get('searchName');
             $category = $this->getDoctrine()
                 ->getRepository(Category::class)
                 ->findBy(
                     ['title'=>$searchName]
                 );

             $vikaEvent = $this->getDoctrine()
                 ->getRepository(VikaEvent::class)
                 ->findBy(
                     ['category'=>$category]
                 );
             $priceGrid = $repo->findBy(
                 ['vikaEvent' => $vikaEvent],
                 ['label'=>'ASC']
             );
         }
         else{
             $priceGrid = $repo->findBy(
                 [ ],
                 ['public'=>'ASC']
             );
         }
         return $this->render('price_grid/index.html.twig', [
             'price_grids' => $priceGrid,
             'indexMode'=>true,
         ]);
     }

    /**
     * SUPPRIME UN TARIF DE LA DB
     * @Route("-{id}-{route}", name="price_grid_delete", methods={"DELETE"}, requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function delete(Request $request, PriceGrid $priceGrid, bool $route=null): Response
    {
        if ($this->isCsrfTokenValid('delete' . $priceGrid->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($priceGrid);
            $entityManager->flush();
        }

        if (!$route){
            return $this->redirectToRoute('vika_event_edit', [
                'id' => $priceGrid->getVikaEvent()->getId(),
            ]);
        }
        elseif ($route==true){
            return $this->redirectToRoute('priceGrid_index');
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

}




