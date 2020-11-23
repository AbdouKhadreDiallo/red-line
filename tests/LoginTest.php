<?php
// api/tests/BooksTest.php

namespace App\Tests;

use App\ApiPlatform\Test\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestAssertionsTrait;

class LoginTest extends ApiTestCase
{
    public function creatAuthenticatedClient(string $email, string $password): KernelBrowser
    {
        $user = static::createClient();
        $inforamtions = [
            "email" => $email,
            "password" => $password
        ];
        $user->request('POST', '/api/login', [], [], [
            'CONTENT_TYPE'=>'application/json'
        ],\json_encode($inforamtions));
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $data = \json_decode($user->getResponse()->getContent(), true);
        $user->setServerParameter('HTTP_Autorization', \sprintf('Bearer %s', $data['token']));
        $user->setServerParameter('CONTENT_TYPE', 'application/json');
        return $user;
    }

    public function testShowProfils()
    {
        $user = $this->creatAuthenticatedClient("kfadel@harber.org", "admin");
        $user->request('GET', '/api/admin/profils');
        $this->assertEquals(Response::HTTP_OK, $user->getResponse()->getStatusCode());
    }
}
