<?php
    use Symfony\Component\Routing\Route;
    use Symfony\Component\Routing\RouteCollection;
    use App\Controllers\BookController;

    $routes = new RouteCollection();
    
    $routes->add('bookMainPage', new Route('/', [
        '_controller' => [BookController::class , "bookMainPage"]
    ]));

    $routes->add('index', new Route('/books', [
        '_controller' => [BookController::class , "index"]
    ]));

    $routes->add('show', new Route('/book/{id}', [
        '_controller' => [BookController::class , "show"]
    ]));

    $routes->add('create', new Route('/books/create', [
        '_controller' => [BookController::class , "create"]
    ]));

    $routes->add('store', new Route('/books/store', [
        '_controller' => [BookController::class , "store"]
    ]));

    $routes->add('edit', new Route('/books/edit/{id}', [
        '_controller' => [BookController::class , "edit"]
    ]));

    $routes->add('update', new Route('/books/update', [
        '_controller' => [BookController::class , "update"]
    ]));

    $routes->add('delete', new Route('/books/delete/{id}', [
        '_controller' => [BookController::class , "delete"]
    ]));



