<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminProductController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(ProductRepository $repository, EntityManagerInterface $em)
    {
        $this->repository=$repository;
        $this->em = $em;
    }

    /**
     * @Route("/admin", name="admin.product.index")
     * @return Response
     */
    public function index(): Response
    {
        $products = $this->repository->findAll();
        return $this->render("admin/index.html.twig", compact('products'));
    }

    /**
     * @Route("/api/product", name="admin.product.new")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                try {
                $this->em->persist($product);
                $this->em->flush();
            } catch (OptimisticLockException|ORMException $e) {
            }
            $this->addFlash('success', 'Le produit a été crée avec succès !');
            return $this->redirectToRoute('admin.product.index');
        }
        return $this->render('admin/new.html.twig', [
            'product' => $product,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/{id}", name="admin.product.edit", methods={"GET", "POST"})
     * @param Product $product
     * @param Request $request
     * @return Response
     */
    public function edit(Product $product, Request $request): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            try {
                $this->em->flush();
            } catch (OptimisticLockException|ORMException $e) {
            }
            $this->addFlash('success', 'Le produit a été mis à jour avec succès !');
            return $this->redirectToRoute('admin.product.index');
        }
        return $this->render('admin/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/{id}", name="admin.product.delete", methods={"DELETE"})
     * @param Product $product
     * @param Request $request
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Product $product, Request $request): Response
    {
        if($this ->isCsrfTokenValid('delete' . $product->getId(), $request->get('_token'))) {
            $this->em->remove($product);
            $this->em->flush();
            $this->addFlash('deleted', 'Le produit a été supprimé avec succès !');
        }
        return $this->redirectToRoute('admin.product.index');
    }
}