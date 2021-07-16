<?php

namespace DBA;

class Supertask extends AbstractModel {
  private $supertaskId;
  private $supertaskName;
  private $priority;
  private $pmsn_count;
  private $status;
  private $percent;
  private $algorithm_code;
  private $create_time;
  private $finish_time;
  private $result;
  
  function __construct($supertaskId, $supertaskName, $priority = 1, $pmsn_count = 8, $status = "running",
  $percent = 10, $algorithm_code = "md5", $create_time = 10, $finish_time = 20, $result = "file") {
    $this->supertaskId = $supertaskId;
    $this->supertaskName = $supertaskName;
    $this->priority = $priority;
    $this->pmsn_count = $pmsn_count;
    $this->status = $status;
    $this->percent = $percent;
    $this->algorithm_code = $algorithm_code;
    $this->create_time = $create_time;
    $this->finish_time = $finish_time;
    $this->result = $result;
    \DServerLog::log(\DServerLog::INFO, "Create new Supertask(construct) with $result ", [$result]);
  }
  
  function getKeyValueDict() {
    $dict = array();
    $dict['supertaskId'] = $this->supertaskId;
    $dict['supertaskName'] = $this->supertaskName;
    $dict['priority'] = $this->priority;
    $dict['pmsn_count'] = $this->pmsn_count;
    $dict['status'] = $this->status;
    $dict['percent'] = $this->percent;
    $dict['algorithm_code'] = $this->algorithm_code;
    $dict['create_time'] = $this->create_time;
    $dict['finish_time'] = $this->finish_time;
    $dict['result'] = $this->result;
    return $dict;
  }

  function getPriority() {
      return $this->priority;
  }

  function getPmsnCount() {
      return $this->pmsn_count;
  }

  function getStatus() {
      return $this->status;
  }

  function getPercent() {
      return $this->percent;
  }

  function getAlgoCode() {
      return $this->algorithm_code;
  }

  function getCreateTime() {
      return $this->create_time;
  }

  function getFinishTime() {
      return $this->finish_time;
  }

  function getResult() {
      return $this->result;
  }

  function getPrimaryKey() {
    return "supertaskId";
  }
  
  function getPrimaryKeyValue() {
    return $this->supertaskId;
  }
  
  function getId() {
    return $this->supertaskId;
  }
  
  function setId($id) {
    $this->supertaskId = $id;
  }
  
  /**
   * Used to serialize the data contained in the model
   * @return array
   */
  public function expose() {
    return get_object_vars($this);
  }
  
  function getSupertaskName() {
    return $this->supertaskName;
  }
  
  function setSupertaskName($supertaskName) {
    $this->supertaskName = $supertaskName;
  }
  
  const SUPERTASK_ID = "supertaskId";
  const SUPERTASK_NAME = "supertaskName";
  const SUPERTASK_PRIORITY = "priority";
  const SUPERTASK_PMSN_COUNT = "pmsn_count";
  const SUPERTASK_STATUS = "status";
  const SUPERTASK_PERCENT = "percent";
  const SUPERTASK_ALGORITHM_CODE = "algorithm_code";
  const SUPERTASK_CREATE_TIME = "create_time";
  const SUPERTASK_FINISH_TIME = "finish_time";
  const SUPERTASK_RESULT = "result";
}
