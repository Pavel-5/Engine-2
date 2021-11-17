<?php

namespace app\controllers;

use app\engine\App;

class ProductController extends Controller
{
    public function getDefaultAction()
    {
        return 'catalog';
    }

    public function actionCatalog()
    {
        $countProductsOnPage = App::call()->config['countProductsOnPage'];
        $countPages = (int)ceil(App::call()->productRepository->getQuantityProducts() / $countProductsOnPage);

        $page = App::call()->request->getParams()['page'] ?? 0;

        $limit1 = $page * $countProductsOnPage;
        $limit2 = $countProductsOnPage;

        $catalog = App::call()->productRepository->getLimit($limit1, $limit2);
        $page = ++$page < $countPages ? $page : -1;

        echo $this->render('product/catalog', [
            'catalog' => $catalog,
            'page' => $page
        ]);
    }

    public function actionCard()
    {
        $id = (int)App::call()->request->getParams()['id'];

        $product = App::call()->productRepository->getOne($id);

        echo $this->render('product/card', [
            'product' => $product
        ]);
    }
}