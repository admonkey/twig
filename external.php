<?php require_once __DIR__.'/vendor/autoload.php';

// external templates
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => '/tmp',
));

$a_variable = 'hello world!';
$template_data = [
  'navigation' => [
    'google' => [
      'href' => 'http://www.google.com/', 'caption' => 'googs'
    ],
    'uark' => [
      'href' => 'http://www.uark.edu/', 'caption' => 'UA'
    ]
  ],
  'a_variable' => $a_variable
];

echo $twig->render('page.html', $template_data);
