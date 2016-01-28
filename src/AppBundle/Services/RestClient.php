<?php

namespace AppBundle\Services;

use Guzzle\Service\Client;
use Symfony\Component\DependencyInjection\ContainerInterface;

class RestClient
{
    /** @var  ContainerInterface container */
    private $container;

    /** @var  Client */
    private $client;


    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->client = new Client('http://diabetes.izquierdolabs.tk/app.php/api');
    }

    public function login($username, $password)
    {

        $this->client->request(
            'POST',
            '/api/login_check',
            array(
                '_username' => $username,
                '_password' => $password,
            )
        );

    }

}