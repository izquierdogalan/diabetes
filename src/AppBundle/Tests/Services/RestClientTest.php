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

    }


}
