<?php

require_once __DIR__ . '/bootstrap.php';

use A2boilerplate\Iterator\BoilerplateDirectoryIterator;

echo $twig->render('index.html.twig', array('iterator' => null, 'container' => $container));
