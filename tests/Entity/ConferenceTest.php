<?php
namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConferenceTest extends WebTestCase
{
    public function testApi()
    {
        $client =  static::createClient();
        $client->request('GET', '/api/conferences');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
