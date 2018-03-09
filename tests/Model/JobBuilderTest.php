<?php

namespace App\Tests\Model;

use App\Model\JobBuilder;
use PHPUnit\Framework\TestCase;
class JobBuilderTest extends TestCase
{
    public function testJobBuilderBuildsaNewJob()
    {
        $jobBuilder = new JobBuilder('100');
        $this->assertInstanceOf(JobBuilder::class, $jobBuilder);
    }

    public function testJobBuilderCanBuildAJobWithOnlyPriceAndOneOtherAttribute()
    {
        $jobBuilder = (new JobBuilder('100'))
            ->description('another great job');
        $this->assertSame($jobBuilder->description, 'another great job');
    }

    public function testJobBuilderBuildsAJobWithFullAttributes()
    {
        $jobBuilder = (new JobBuilder('100'))
            ->description('a great job')
            ->location('dublin')
            ->name('a good job')
            ->build();
        $this->assertEquals('100', $jobBuilder->price);
    }
}
