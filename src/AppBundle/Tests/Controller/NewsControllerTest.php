<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/news');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/news/show');
    }

}
