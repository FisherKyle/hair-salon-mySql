<?php
  /**
  * @backupGlobals disabled
  * @backupStaticAttributes disabled
  */

  require_once __DIR__."/../src/Salon.php";
  require_once __DIR__."/../src/Client.php";
  require_once __DIR__."/../src/Stylist.php";

  $app = new Silex\Application();

  $server = 'mysql:host=localhost:8889;dbname=hair_salon';
  $username = 'root';
  $password = 'root';
  $DB = new PDO($server, $username, $password);

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->("/", function() use($app){
    return $app['twig']->render('home.index.html');
  });


?>