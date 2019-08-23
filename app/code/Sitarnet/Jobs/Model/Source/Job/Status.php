<?php
namespace Sitarnet\Jobs\Model\Source\Job;

class Status implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Sitarnet\Jobs\Model\Job
     */
    protected $_job;

    /**
     * Constructor
     *
     * @param \Sitarnet\Jobs\Model\Job $job
     */
    public function __construct(\Sitarnet\Jobs\Model\Job $job)
    {
        $this->_job = $job;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $availableOptions = $this->_job->getAvailableStatuses();
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}