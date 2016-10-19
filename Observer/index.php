<?php
namespace observer;

use observer\Infraestructure\HtmlRender;
session_start();
require __DIR__ . '/vendor/autoload.php';
var_dump($_SESSION['observers']);
$observer = new GorkaEmisor();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $value = $_POST['value'];

    $cname =  "observer\\".$value;
    $subject = new $cname();
    $observer->attach($subject);

}
elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $value = $_REQUEST['value'];
    $cname =  "observer\\".$value;
    $subject = new $cname();
    $observer->detach($subject);
}
else {
    session_destroy();

    $chatRoom = new ChatRoom(new ClassFileLoader(__DIR__ . "/src"), new HtmlRender(__DIR__ . '/src/views'));

    $chatRoom->render();
}
var_dump($observer->getObservers());


