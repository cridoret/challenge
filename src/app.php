<?php
require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

$app = new Silex\Application();

$app->get('/', function() use ($app) {
    return $app->redirect('/objects');
});

$app->get('/objects', function () use ($twig) {
    $personInterfaceClass = file_get_contents(__DIR__ . '/Challenge/PersonInterface.php', false);
    $personClass = file_get_contents(__DIR__ . '/Challenge/Person.php', false);
    $studentClass = file_get_contents(__DIR__ . '/Challenge/Student.php', false);
    $teacherClass = file_get_contents(__DIR__ . '/Challenge/Teacher.php', false);
    
    $template = $twig->loadTemplate('objects.html.twig');

    return $template->render(array('personInterfaceClass' => $personInterfaceClass, 
        'personClass' => $personClass, 'studentClass' => $studentClass, 'teacherClass' => $teacherClass));
});

$app->get('/tests', function () use ($twig) {
    $studentTestClass = file_get_contents(__DIR__ . '/../tests/Challenge/Tests/StudentTest.php', false);
    $teacherTestClass = file_get_contents(__DIR__ . '/../tests/Challenge/Tests/TeacherTest.php', false);
    
    $template = $twig->loadTemplate('tests.html.twig');

    return $template->render(array('studentTestClass' => $studentTestClass, 
        'teacherTestClass' => $teacherTestClass));
});

$app->get('/database', function () use ($twig) {
    $sqlFile = file_get_contents(__DIR__ . '/../config/database.sql', false);
    
    $template = $twig->loadTemplate('database.html.twig');

    return $template->render(array('sqlFile' => $sqlFile));
});


$app->get('/student', function () use ($twig) {
    $code = file_get_contents(__DIR__ . '/Challenge/StudentByStudentId.php', false);

    $template = $twig->loadTemplate('student.html.twig');

    return $template->render(array('code' => $code));
});

$app->get('/printinfo', function () use ($twig) {

    $teacher = new Challenge\Teacher();
    $teacher->setName('Robert Smith');
    $teacher->setBirthDate('03-04-1970');
    $teacher->setTitle('Mr');
    $teacher->addClass('Physics 101');

    $teacherInfo = $teacher->getinfo();

    $student = new Challenge\Student();
    $student->setName('John Doe');
    $student->setBirthDate('02-02-1990');
    $student->setStudentID('9912345US');
    $student->setGender('m');

    $studentInfo = $student->getinfo();

    $appCode = file_get_contents(__DIR__ . '/app.php', false);

    $template = $twig->loadTemplate('printinfo.html.twig');

    return $template->render(array('teacherInfo' => $teacherInfo, 
        'studentInfo' => $studentInfo, 'appCode' => $appCode));
});

$app->error(function(\Exception $e) {
    if ($e instanceof NotFoundHttpException) {
        return new Response('The requested page could not be found.', 404);
    }

    $code = ($e instanceof HttpException) ? $e->getStatusCode() : 500;

    return new Response('We are sorry, but something went terribly wrong.<br>'.$e->getMessage(), $code);
});

return $app;