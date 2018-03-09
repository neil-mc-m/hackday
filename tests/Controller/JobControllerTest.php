<?php
/**
 * Created by PhpStorm.
 * User: neilmcmahon
 * Date: 09/03/2018
 * Time: 13:10
 */

namespace App\Tests\Controller;

use App\Controller\JobController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JobControllerTest extends WebTestCase
{
    public function testShowHomePage()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testShowJobCreatedSuccessfully()
    {
        $client = static::createClient();
        $client->request('GET', '/post-job');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testJobCanBeAccessedFromSlug()
    {
        $client = static::createClient();
        $client->request('GET', '/job/new-wall-dublin');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
