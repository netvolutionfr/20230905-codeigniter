<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Home;
use App\Controllers\Utilisateur;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'view']);

$routes->get('home', [Home::class, 'hello']);

$routes->get('createutilisateur', [Utilisateur::class, 'create']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
