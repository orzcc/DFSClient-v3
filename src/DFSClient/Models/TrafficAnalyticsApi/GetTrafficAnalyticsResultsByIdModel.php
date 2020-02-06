<?php

namespace DFSClientV3\Models\TrafficAnalyticsApi;

use DFSClientV3\Models\AbstractModel;

class GetTrafficAnalyticsResultsByIdModel extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'traffic_analytics/{$se}/task_get/{$taskUUID}';
    protected $resultShouldBeTransformedToArray = true;

    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
        return $this;
    }
    
    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdEntityMain
    {
        return parent::get();
    }

}
