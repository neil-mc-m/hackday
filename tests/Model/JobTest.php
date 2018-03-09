<?php

namespace App\Tests\Model;

use App\Entity\Job;
use App\Model\JobBuilder;
use PHPUnit\Framework\TestCase;
class JobTest extends TestCase
{
    public $jb;
    public function setup()
    {
        $this->jb = (new JobBuilder('100'))
            ->location('dublin')
            ->description('build a website')
            ->name('web development')
            ->build();
    }

    public function testNewJobIsInstantiatedWithJobBuilder()
    {
        $job = new Job($this->jb);
        $this->assertInstanceOf(Job::class, $job);
    }

    public function testNewJobCanAccessTheBuilderAttributes()
    {
        $job = new Job($this->jb);
        $this->assertEquals('100', $job->getPrice());
    }
}
