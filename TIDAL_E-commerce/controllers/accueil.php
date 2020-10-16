<?php
        if(isset($erreur)){
        choixAlert($erreur);
        }

        require_once(PATH_ENTITY.'ProductsDAO.php');
        require_once(PATH_LIB.'twig_loader.php');

        $HDAO = new ProductsDAO();

        $prodList = $HDAO->getProducts();


        $page='accueil';
        //appel de la vue
        echo $twig->render($page.'.html.twig', ['prodList'=> $prodList]);
?>