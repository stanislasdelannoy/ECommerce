<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/api/cart", name="product.index")
     */
    public function index(SessionInterface $session, ProductRepository $productRepository): Response
    {
        $cart = $session ->get('cart', []);
        $cartWithData = [];
        foreach($cart as $id => $quantity){
            $cartWithData[] = [
                'product' => $productRepository->find($id),
                'quantity' => $quantity
            ];
        }
        $total = 0;
        foreach ($cartWithData as $item){
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total += $totalItem;
        }
        return $this->render('product/index.html.twig', [
            'items' => $cartWithData,
            'total' => $total
        ]);
    }

    /**
     * @Route("/api/cart/add/{id}", name="cart.add")
     * @param $id
     * @param SessionInterface $session
     * @return void
     */
    public function add($id, SessionInterface $session){
        $cart = $session->get('cart', []);
        if(!empty($cart[$id])){
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }
        $session->set('cart', $cart);
        return $this->redirectToRoute('product.index');
    }


    /**
     * @Route("/api/cart/{id}", name="cart.delete")
     * @param $id
     * @param SessionInterface $session
     * @return RedirectResponse
     */
    public function delete($id, SessionInterface $session): RedirectResponse
    {
        $cart = $session->get('cart', []);
        if(!empty($cart[$id])){
            unset($cart[$id]);
        }
        $session->set('cart', $cart);
        return $this->redirectToRoute('product.index');
    }
}
