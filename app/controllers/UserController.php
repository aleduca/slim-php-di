<?php

namespace app\controllers;

use app\database\models\User;
use app\templates\TemplateInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Rakit\Validation\Validator;
use Slim\Flash\Messages;

class UserController
{
    public function __construct(
        private ContainerInterface $container,
        private TemplateInterface $template,
        private Messages $flash,
        private User $user
    ) {
    }

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $users = $this->container->get(User::class)->users();

        $this->template->render('users', [
            'users' => $users,
        ]);

        return $response;
    }

    public function create(RequestInterface $request, ResponseInterface $response)
    {
        $flash = $this->flash->getMessages();

        $this->template->render('user_create.tpl', [
            'validate' => $flash['validate'][0] ?? null,
            'success' => $flash['success'][0] ?? null,
            'error' => $flash['error'][0] ?? null,
        ]);

        return $response;
    }

    public function store(RequestInterface $request, ResponseInterface $response)
    {
        $validator = new Validator;

        $validator->setMessages([
            'required' => ':attribute é obrigatório',
            'email' => ' :attribute tem que ser um email válido',
            'same' => ':attribute tem que ser igual a senha',
            'min' => ':attribute tem que ter no mínimo :min caracteres',
        ]);

        // make it
        $validation = $validator->make($_POST, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $validation->setAlias('firstName', 'Nome');
        $validation->setAlias('lastName', 'Sobrenome');
        $validation->setAlias('password', 'Senha');
        $validation->setAlias('confirm_password', 'Senha de confirmação');

        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
            $this->flash->addMessage('validate', $errors);

            return $response
            ->withHeader('Location', '/register')
            ->withStatus(302);
        }

        $data = $validation->getValidatedData();

        $created = $this->user->insert($data);

        if ($created) {
            $this->flash->addMessage('success', 'Usuário criado com sucesso');

            return $response
            ->withHeader('Location', '/register')
            ->withStatus(302);
        }

        $this->flash->addMessage('error', 'Usuário não cadastrado');

        return $response
        ->withHeader('Location', '/register')
        ->withStatus(302);
    }
}
