<?php

namespace app\controllers;

use app\templates\TemplateInterface;
use Doctrine\DBAL\Connection;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Flash\Messages;

class LoginController
{
    public function __construct(
        private Connection $connection,
        private TemplateInterface $template,
        private Messages $flash
    ) {
    }

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $error = $this->flash->getMessages();
        $this->template->render('login', [
            'error' => $error['error'][0] ?? null,
        ]);

        return $response;
    }

    public function store(ServerRequestInterface $request, ResponseInterface $response)
    {
        [$email, $password] = array_values($request->getParsedBody());

        $user = $this->connection->fetchAssociative(
            'SELECT * FROM users WHERE email = :email',
            ['email' => $email]
        );

        if (!$user) {
            $this->flash->addMessage('error', 'User or password not found');

            return $response
            ->withHeader('Location', '/login')
            ->withStatus(302);
        }

        if (!password_verify($password, $user['password'])) {
            $this->flash->addMessage('error', 'User or password not found');

            return $response
            ->withHeader('Location', '/login')
            ->withStatus(302);
        }

        $_SESSION['user'] = [
            'fullName' => $user['firstName'] . ' ' . $user['lastName'],
            'email' => $user['email'],
        ];

        return $response
        ->withHeader('Location', '/')
        ->withStatus(302);
    }

    public function destroy(
        ServerRequestInterface $request,
        ResponseInterface $response
    ) {
        session_destroy();

        return $response
        ->withHeader('Location', '/')
        ->withStatus(302);
    }
}
