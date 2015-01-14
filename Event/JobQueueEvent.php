<?php

namespace Supertag\Bundle\GearmanBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Supertag\Bundle\GearmanBundle\Command\GearmanJobCommandInterface;

class JobQueueEvent extends Event
{
    const NAME = 'supertag_gearman.job_queue_event';

    public $job, $workload;

    public function __construct($job, $workload)
    {
        $this->job = $job;
        $this->workload = $workload;
    }
}
