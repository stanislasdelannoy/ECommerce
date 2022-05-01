<?php

namespace App\Controller;


use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var ObjectManager
     */
    private $em;

    public function __construct(ProductRepository $repository, EntityManagerInterface $em)
    {
        $this->repository= $repository;
        $this->em = $em;
    }


    /**
     * @Route("/biens/{slug}-{id}", name="product.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Product $product
     * @param string $slug
     * @return Response
     */
    public function show(Product $product, string $slug):Response
    {
        if($product->getSlug() !== $slug){
            return $this->redirectToRoute('product.show', [
                'id' => $product->getId(),
                'slug' => $product->getSlug()
            ], 301);
        }
        return $this->render("product/show.html.twig", [
            'product' => $product,
            'current_menu' => 'products',
    ]);
    }
}