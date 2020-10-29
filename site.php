<?php

use Source\Model\Post;
use \Source\Page;
use \Source\Support\Mailer;

/* Em caso de página não criada, direciona para uma not-found.html */

$app->notFound(function () {
    $page = new Page();
    $page->setTpl("not-found");
});

/* Página principal */
$app->get('/', function () {
    
    $posts = (new Post())::lisAll();
    $page = new Page();

    foreach ($posts as &$post) {
        $post['m'] = (new DateTime($post['created_at']))->format("m");
        $post['d'] = strftime('%b', strtotime($post['created_at']));
        $post['category'] = Post::getCategory($post['id_articles_categories']);
    }
    $page->setTpl("index", [
        'posts' => $posts
    ]);
});

$app->get('/especialidades-cardiologicas', function () {
    $page = new Page();
    $page->setTpl("especialidades-cardiologicas");
});

$app->get('/especialidades-medicas', function () {
    $page = new Page();
    $page->setTpl("especialidades-medicas");
});

$app->get('/exames-cardiologicos', function () {
    $page = new Page();
    $page->setTpl("exames-cardiologicos");
});

$app->get('/solicitacao-de-prontuario', function () {
    $page = new Page();
    $page->setTpl("solicitacao-de-prontuario");
});

$app->get('/pacientes-e-visitas', function () {
    $page = new Page();
    $page->setTpl("pacientes-e-visitas");
});
