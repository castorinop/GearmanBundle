<?php

namespace Supertag\Bundle\GearmanBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Supertag\Bundle\GearmanBundle\Command\GearmanJobCommandInterface;

class JobFailedEvent extends Event
{
    const NAME = 'supertag_gearman.job_failed_event';

    public $job, $arguments, $output, $exception;

    public function __construct(GearmanJobCommandInterface $job, array $arguments, $output, $exception)
    {
        $this->job = $job;
        $this->arguments = $arguments;
        $this->output = $output;
        $this->exception = $exception;
    }
}
