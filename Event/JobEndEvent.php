<?php

namespace Supertag\Bundle\GearmanBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Supertag\Bundle\GearmanBundle\Command\GearmanJobCommandInterface;

class JobEndEvent extends Event
{
    const NAME = 'supertag_gearman.job_end_event';

    public $job, $workload, $output;

    public function __construct(GearmanJobCommandInterface $job, $workload, $output = NULL)
    {
        $this->job = $job;
        $this->workload = $workload;
        $this->output = $output;
    }
}
