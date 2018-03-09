<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use App\Model\Job;
use App\Model\JobBuilder;

/**
 * This context class contains the definitions of the steps used by the demo
 * feature file. Learn how to get started with Behat and BDD on Behat's website.
 *
 * @see http://behat.org/en/latest/quick_start.html
 */
class FeatureContext implements Context
{

    private $job;

    public function __construct()
    {
        $jobBuilder = new JobBuilder('1000');
        $job = new Job($jobBuilder);
    }

    /**
     * @Given I am already logged in
     */
    public function iAmAlreadyLoggedIn()
    {
        throw new PendingException();
    }

    /**
     * @When I create a new job
     */
    public function iCreateANewJob()
    {
        throw new PendingException();
    }

    /**
     * @Then The output is :arg1
     */
    public function theOutputIs($arg1)
    {
        throw new PendingException();
    }
}
