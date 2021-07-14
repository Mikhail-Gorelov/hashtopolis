<?php

namespace DBA;

class Pretask extends AbstractModel {
  private $pretaskId;
  private $taskName;
  private $attackCmd;
  private $chunkTime;
  private $statusTimer;
  private $color;
  private $isSmall;
  private $isCpuTask;
  private $useNewBench;
  private $priority;
  private $isMaskImport;
  private $crackerBinaryTypeId;
  private $createTime;
  private $status;
  private $end_time;
  private $pmsn_count;
  private $pmsn_adr;
  private $percent;
  private $chunkSize;
  private $benchmarkType;
  private $skipKeyspace;
  private $keyspace;
  private $dispatched;
  private $hashlistId;
  private $files;
  private $speed;
  private $searched;
  private $chunkIds;
  private $agents;
  private $isComplete;
  
  function __construct($pretaskId, $taskName, $attackCmd, $chunkTime, $statusTimer, $color, $isSmall, $isCpuTask, $useNewBench, $priority, $isMaskImport, $crackerBinaryTypeId) {
    $this->pretaskId = $pretaskId;
    $this->taskName = $taskName;
    $this->attackCmd = $attackCmd;
    $this->chunkTime = $chunkTime;
    $this->statusTimer = $statusTimer;
    $this->color = $color;
    $this->isSmall = $isSmall;
    $this->isCpuTask = $isCpuTask;
    $this->useNewBench = $useNewBench;
    $this->priority = $priority;
    $this->isMaskImport = $isMaskImport;
    $this->crackerBinaryTypeId = $crackerBinaryTypeId;
    $this->createTime = time();
    $this->status = "status";
    $this->end_time = "10";
    $this->pmsn_count = 8;
    $this->pmsn_adr = "lala";
    $this->percent = 99;
    $this->chunkSize = 100;
    $this->benchmarkType = "Type";
    $this->skipKeyspace = 10;
    $this->keyspace = 10;
    $this->dispatched = 10;
    $this->hashlistId = 1;
    $this->files = "file";
    $this->speed = 10;
    $this->searched = 100;
    $this->chunkIds = "10";
    $this->agents = "La";
    $this->isComplete = 0;
  }
  
  function getKeyValueDict() {
    $dict = array();
    $dict['pretaskId'] = $this->pretaskId;
    $dict['taskName'] = $this->taskName;
    $dict['attackCmd'] = $this->attackCmd;
    $dict['chunkTime'] = $this->chunkTime;
    $dict['statusTimer'] = $this->statusTimer;
    $dict['color'] = $this->color;
    $dict['isSmall'] = $this->isSmall;
    $dict['isCpuTask'] = $this->isCpuTask;
    $dict['useNewBench'] = $this->useNewBench;
    $dict['priority'] = $this->priority;
    $dict['isMaskImport'] = $this->isMaskImport;
    $dict['crackerBinaryTypeId'] = $this->crackerBinaryTypeId;
    $dict['createTime'] = $this->createTime;
    $dict['status'] = $this->status;
    $dict['end_time'] = $this->end_time;
    $dict['pmsn_count'] =  $this->pmsn_count;
    $dict['pmsn_adr'] =  $this->pmsn_adr;
    $dict['percent'] = $this->percent;
    $dict['chunkSize'] = $this->chunkSize;
    $dict['benchmarkType'] = $this->benchmarkType;
    $dict['skipKeyspace'] = $this->skipKeyspace;
    $dict['keyspace'] =  $this->keyspace;
    $dict['dispatched'] = $this->dispatched;
    $dict['hashlistId'] = $this->hashlistId;
    $dict['files'] = $this->files;
    $dict['speed'] = $this->speed;
    $dict['searched'] = $this->searched;
    $dict['chunkIds'] = $this->chunkIds;
    $dict['agents'] = $this->agents;
    $dict['isComplete'] = $this->isComplete;
    
    return $dict;
  }


  function getStatus() {
      return $this->status;
  }

  function getEndTime() {
        return $this->end_time;
  }

  function getPmsnCount() {
        return $this->pmsn_count;
  }

  function getPmsnAdr() {
        return $this->pmsn_adr;
  }

  function getPercent() {
        return $this->percent;
  }

  function getChunkSize() {
      return $this->chunkSize;
  }

  function getBenchMarkType() {
      return $this->benchmarkType;
  }

  function getSkipKeyspace() {
      return $this->skipKeyspace;
  }

  function getKeyspace() {
      return $this->keyspace;
  }

  function getDispatched() {
      return $this->dispatched;
  }

  function getHashlistId() {
      return $this->hashlistId;
  }

  function getFiles() {
      return $this->files;
  }

  function getSpeed() {
      return $this->speed;
  }

  function getSearched() {
      return $this->searched;
  }

  function getChunkIds() {
      return $this->chunkIds;
  }

  function getAgents() {
      return $this->agents;
  }

  function getIsComplete() {
      return $this->isComplete;
  }

  function getPrimaryKey() {
    return "pretaskId";
  }
  
  function getPrimaryKeyValue() {
    return $this->pretaskId;
  }
  
  function getId() {
    return $this->pretaskId;
  }
  
  function setId($id) {
    $this->pretaskId = $id;
  }
  
  /**
   * Used to serialize the data contained in the model
   * @return array
   */
  public function expose() {
    return get_object_vars($this);
  }
  
  function getTaskName() {
    return $this->taskName;
  }
  
  function setTaskName($taskName) {
    $this->taskName = $taskName;
  }
  
  function getAttackCmd() {
    return $this->attackCmd;
  }
  
  function setAttackCmd($attackCmd) {
    $this->attackCmd = $attackCmd;
  }
  
  function getChunkTime() {
    return $this->chunkTime;
  }
  
  function setChunkTime($chunkTime) {
    $this->chunkTime = $chunkTime;
  }
  
  function getStatusTimer() {
    return $this->statusTimer;
  }
  
  function setStatusTimer($statusTimer) {
    $this->statusTimer = $statusTimer;
  }
  
  function getColor() {
    return $this->color;
  }
  
  function setColor($color) {
    $this->color = $color;
  }
  
  function getIsSmall() {
    return $this->isSmall;
  }
  
  function setIsSmall($isSmall) {
    $this->isSmall = $isSmall;
  }
  
  function getIsCpuTask() {
    return $this->isCpuTask;
  }
  
  function setIsCpuTask($isCpuTask) {
    $this->isCpuTask = $isCpuTask;
  }
  
  function getUseNewBench() {
    return $this->useNewBench;
  }
  
  function setUseNewBench($useNewBench) {
    $this->useNewBench = $useNewBench;
  }
  
  function getPriority() {
    return $this->priority;
  }
  
  function setPriority($priority) {
    $this->priority = $priority;
  }
  
  function getIsMaskImport() {
    return $this->isMaskImport;
  }
  
  function setIsMaskImport($isMaskImport) {
    $this->isMaskImport = $isMaskImport;
  }
  
  function getCrackerBinaryTypeId() {
    return $this->crackerBinaryTypeId;
  }
  
  function setCrackerBinaryTypeId($crackerBinaryTypeId) {
    $this->crackerBinaryTypeId = $crackerBinaryTypeId;
  }
  function getCreateTime(){
      return $this->createTime;
  }
  
  const PRETASK_ID = "pretaskId";
  const TASK_NAME = "taskName";
  const ATTACK_CMD = "attackCmd";
  const CHUNK_TIME = "chunkTime";
  const STATUS_TIMER = "statusTimer";
  const COLOR = "color";
  const IS_SMALL = "isSmall";
  const IS_CPU_TASK = "isCpuTask";
  const USE_NEW_BENCH = "useNewBench";
  const PRIORITY = "priority";
  const IS_MASK_IMPORT = "isMaskImport";
  const CRACKER_BINARY_TYPE_ID = "crackerBinaryTypeId";
  const CREATE_TIME = "createTime";
  const STATUS = "status";
  const END_TIME = "end_time";
  const PMSN_COUNT = "pmsn_count";
  const PMSN_ADR = "pmsn_adr";
  const PERCENT = "percent";
  const CHUNK_SIZE = "chunk_size";
  const BENCHMARK_TYPE = "benchmk_type";
  const SKIP_KEYSPACE = "send_keyspace";
  const KEYSPACE = "keyspace";
  const DISPATCHED = "dispatched";
  const HASHLIST_ID = "hashlist_id";
  const FILES = "files";
  const SPEED = "speed";
  const SEARCHED = "searched";
  const CHUNKIDS = "chunk_ids";
  const AGENTS = "agents";
  const IS_COMPLETE = "is_complete";
}
