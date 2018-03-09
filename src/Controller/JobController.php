<?php
namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Model\JobBuilder;
use App\Entity\Job;

class JobController extends Controller
{
    /**
    * @Route("/post-job")
    */
    public function postJob(EntityManagerInterface $entityManager)
    {
        $jobBuilder = (new JobBuilder('2000'))
                   ->name('new wall')
                   ->location('dublin')
                   ->description('Build me a new wall please.')
                   ->build();
        $job = new Job($jobBuilder);
        $entityManager->persist($job);
        $entityManager->flush();
        $this->addFlash('success', 'well done on creating a new job');
        return $this->render('job-created.html.twig', array());
    }

    /**
     * @Route("/job/{slug}", name="job_show")
     */
    public function showJob(Job $job)
    {
        return $this->render('job.html.twig', array(
            'name' => $job->getName()
        ));
    }
}
