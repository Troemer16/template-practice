<?php
    //php error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //require the autoload file
    require_once ('vendor/autoload.php');

    //create an instance of the base class
    $f3 = Base::instance();

    //set debug level
    //0 = no error reporting, 3 = report all errors
    $f3->set('DEBUG', 3);

    $f3->route('GET /', function($f3) {
        //save variables
        $f3->set('username', 'jshmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'Working with Templates');
        $f3->set('temp', 67);
        $f3->set('fruits', array('apple', 'orange', 'banana'));
        //bookmark array
        $f3->set('bookmarks', array('http://www.cnet.com',
            'http://www.reddit.com/r/news',
            'http://edition.cnn.com/sport'));
        $f3->set('addresses', array(
            'primary' => '1000 Apple Ln. Seattle, Wa 98999',
            'secondary' => '2510 100th Court Tac, Wa 90000'));
        $f3->set('desserts', array(
            'chocolate' => 'Chocolate Mousse',
            'vanilla' => 'Vanilla Custard',
            'strawberry' => 'Strawberry Shortcake'));
        //conditional content
        $f3->set('preferredCustomer', true);
        $f3->set('lastLogin', strtotime('-1 week'));
        //objects
        $pet = new Pet('Fido', 'pink');
        $f3->set('myPet', $pet);

        //load a template
        $template = new Template();
        echo $template->render('views/info.html');

        //alternate syntax
        //echo Template::instance()->render('views/info.html');
    });

    $f3->run();
?>