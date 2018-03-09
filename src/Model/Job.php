<?php
namespace App\Model;
use App\Model\JobBuilder;
class Job
{
    private $price;
    private $location;
    private $type;
    private $description;

    public function __construct(JobBuilder $jobBuilder)
    {
        $this->price = $jobBuilder->price;
        $this->location = $jobBuilder->location;
        $this->type = $jobBuilder->type;
        $this->description = $jobBuilder->description;

    }
    /**
     * Get the value of Price
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of Location
     *
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}
