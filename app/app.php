<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramGenerator.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('input_form.html.twig');
    });

    $app->get("/view_matches", function() use ($app) {
        $my_AnagramGenerator = new AnagramGenerator;
        $matches = $my_AnagramGenerator->anagramCheck($_GET['keyword'], $_GET['wordlist']);
        return$app['twig']->render('view_matches.html.twig', array('result' => $matches));
    });

    return $app;

?>
