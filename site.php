<?php

use Source\Model\Banner;
use Source\Model\Post;
use \Source\Page;
use \Source\Support\Mailer;

/* Em caso de página não criada, direciona para uma not-found.html */

$app->notFound(function () {
    $page = new Page();
    $page->setTpl("not-found");
});

/* Notícias */
$app->get('/post/:slug', function ($slug) {

    $post = new Post();
    $post->getWithSlug($slug);
    $result = $post->getValues();

    $allPosts = Post::lisAll();

    $page = new Page();
    $page->setTpl(
        "post",
        [
            'post' => $result,
            'posts' => $allPosts
        ]
    );
});

/* Página principal */
$app->get('/', function () {

    $posts = (new Post())::lisAll();
    $page = new Page();
    $banners = (new Banner())::lisAll();
    
    foreach ($posts as &$post) {
        $post['m'] = (new DateTime($post['created_at']))->format("d");
        $post['d'] = strftime('%b', strtotime($post['created_at']));
        $post['category'] = Post::getCategory($post['id_articles_categories']);
    }

    $page->setTpl("index", [
        'posts' => $posts,
        'banners' => $banners
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


/* Disparo de e-mail */
$app->post('/email-sent', function () {

    $mailer = new Mailer(
        $_POST["email"],
        $_POST["name"],
        "Formulário de Contato do Site", //Assunto
        "email-sent", //Template
        $_POST
    );

    if ($mailer->send())
        die(json_encode(['success' => true, 'msg' => 'E-mail enviado com sucesso!']));
    die(json_encode(['success' => false, 'msg' => 'Problemas ao enviar o e-mail!']));
});