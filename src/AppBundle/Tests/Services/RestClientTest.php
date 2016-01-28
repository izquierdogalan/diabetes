<?php
namespace AppBundle\Tests\Services;


use AppBundle\Services\RestClient;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RestClientTest extends WebTestCase
{
    private $container;

    public function setUp()
    {
        $this->app = new \AppKernel('test', true);
        $this->app->boot();
        $this->container = $this->app->getContainer();
    }

    public function testLogin()
    {
        $client = new RestClient($this->container);
//        $client = $this->container->get('app.services.rest_client');
        $response = $client->login('admin', 'admin');
//
//        $crawler = $client->request('GET', '/');
//
//        $this->assertEquals(200, $client->getResponse()->getStatusCode());
//        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }


//    /**
//     * Create a client with a default Authorization header.
//     *
//     * @param string $username
//     * @param string $password
//     *
//     * @return \Symfony\Bundle\FrameworkBundle\Client
//     */
//    protected function createAuthenticatedClient($username = 'adminuser', $password = '151')
//    {
//        $client = static::createClient();
//        $client->request(
//            'POST',
//            '/api/login_check',
//            array(
//                '_username' => $username,
//                '_password' => $password,
//            )
//        );
//
//        $data = json_decode($client->getResponse()->getContent(), true);
//
//        $client = static::createClient();
//        $client->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token']));
//
//        return $client;
//    }

}
