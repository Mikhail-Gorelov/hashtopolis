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
    private $hashlist;
    private $image;
    private $agents_id;
    private $agents_benchmark;
    private $agents_speed;
    private $chunks;
    private $use_preprocessor;
    private $preprocessor_id;
    private $preprocessor_command;
    private $preprocessor_speed;
    private $skip;
    private $algorithm_code;
    private $result;
    private $actual_pmsn;
  
  function __construct($pretaskId, $taskName, $attackCmd, $chunkTime, $statusTimer, $color, $isSmall, $isCpuTask, $useNewBench, $priority, $isMaskImport, $crackerBinaryTypeId,
                       $createTime = 10, $status = "status", $end_time = 1, $pmsn_count = 1, $pmsn_adr = "address", $percent = 1, $chunkSize = 1, $benchmarkType = "speed",
                       $skipKeyspace = 1, $keyspace = 1, $dispatched = 1,$hashlistId = 1, $files = "files", $speed = 1, $searched = 1,
                       $chunkIds = 1, $agents = 1, $isComplete = 1, $hashlist = 1, $image = 1, $agents_id = 1, $agents_benchmark = 1, $agents_speed = 1,$chunks = 1, $use_preprocessor = 1, $preprocessor_id = 1, $preprocessor_command = 1, $preprocessor_speed = 1, $skip = 1, $algorithm_code = "md5", $result = "result", $actual_pmsn = 20) {
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
      $this->createTime = $createTime;
      $this->status = $status;
      $this->end_time = $end_time;
      $this->pmsn_count = $pmsn_count;
      $this->pmsn_adr = $pmsn_adr;
      $this->percent = $percent;
      $this->chunkSize = $chunkSize;
      $this->benchmarkType = $benchmarkType;
      $this->skipKeyspace = $skipKeyspace;
      $this->keyspace = $keyspace;
      $this->dispatched = $dispatched;
      $this->hashlistId = $hashlistId;
      $this->files = $files;
      $this->speed = $speed;
      $this->searched = $searched;
      $this->chunkIds = $chunkIds;
      $this->agents = $agents;
      $this->isComplete = $isComplete;
      $this->hashlist = $hashlist;
      $this->image = $image;
      $this->agents_id = $agents_id;
      $this->agents_benchmark = $agents_benchmark;
      $this->agents_speed = $agents_speed;
      $this->chunks = $chunks;
      $this->use_preprocessor = $use_preprocessor;
      $this->preprocessor_id = $preprocessor_id;
      $this->preprocessor_command = $preprocessor_command;
      $this->preprocessor_speed = $preprocessor_speed;
      $this->skip = $skip;
      $this->algorithm_code = $algorithm_code;
      $this->result = $result;
      $this->actual_pmsn = $actual_pmsn;
    \DServerLog::log(\DServerLog::INFO, "Create new Pretask(construct) with $actual_pmsn ", [$actual_pmsn]);


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
      $dict['hashlist'] = $this->hashlist;
      $dict['image'] = $this->image;
      $dict['agents_id'] = $this->agents_id;
      $dict['agents_benchmark'] = $this->agents_benchmark;
      $dict['agents_speed'] = $this->agents_speed;
      $dict['chunks'] = $this->chunks;
      $dict['use_preprocessor'] = $this->use_preprocessor;
      $dict['preprocessor_id'] = $this->preprocessor_id;
      $dict['preprocessor_command'] = $this->preprocessor_command;
      $dict['preprocessor_speed'] = $this->preprocessor_speed;
      $dict['skip'] = $this->skip;
      $dict['algorithm_code'] = $this->algorithm_code;
      $dict['result'] = $this->result;
      $dict['actual_pmsn'] = $this->actual_pmsn;

      return $dict;
  }

    function getAlgorithmCode() {
        return $this->algorithm_code;
    }

    function getResult() {
        return $this->result;
    }

    function getActualPmsn() {
        return $this->actual_pmsn;
    }
    function getHashlist() {
        return $this->hashlist;
    }
    function getImage() {
        return $this->image;
    }
    function getAgentsId() {
        return $this->agents_id;
    }
    function getAgentsBenchmark() {
        return $this->agents_benchmark;
    }
    function getAgentsSpeed() {
        return $this->agents_speed;
    }
    function getChunks() {
        return $this->chunks;
    }
    function getUsePreprocessor() {
        return $this->use_preprocessor;
    }
    function getPreprocessorId() {
        return $this->preprocessor_id;
    }
    function getPreprocessorCommand() {
        return $this->preprocessor_command;
    }
    function getPreprocessorSpeed() {
        return $this->preprocessor_speed;
    }
    function getSkip() {
        return $this->skip;
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
    const PRETASK_ID         = "pretaskId";
    const PRETASK_NAME       = "name";
    const PRETASK_ATTACK     = "attackCmd";
    const PRETASK_CHUNKSIZE  = "chunksize";
    const PRETASK_COLOR      = "color";
    const PRETASK_BENCH_TYPE = "benchmarkType";
    const PRETASK_STATUS     = "statusTimer";
    const PRETASK_PRIORITY   = "priority";
    const PRETASK_CPU_ONLY   = "isCpuOnly";
    const PRETASK_SMALL      = "isSmall";
    const PRETASK_FILES      = "files";
    const PRETASK_FILES_ID   = "fileId";
    const PRETASK_FILES_NAME = "filename";
    const PRETASK_FILES_SIZE = "size";
    const PRETASK_SKIP                 = "skipKeyspace";
    const PRETASK_KEYSPACE             = "keyspace";
    const PRETASK_DISPATCHED           = "dispatched";
    const PRETASK_SEARCHED             = "searched";
    const PRETASK_SPEED                = "speed";
    const PRETASK_HASHLIST             = "hashlistId";
    const PRETASK_IMAGE                = "imageUrl";
    const PRETASK_AGENTS               = "agents";
    const PRETASK_AGENTS_ID            = "agentId";
    const PRETASK_AGENTS_BENCHMARK     = "benchmark";
    const PRETASK_AGENTS_SPEED         = "speed";
    const PRETASK_CHUNKS               = "chunkIds";
    const PRETASK_USE_PREPROCESSOR     = "usePreprocessor";
    const PRETASK_PREPROCESSOR_ID      = "preprocessorId";
    const PRETASK_PREPROCESSOR_COMMAND = "preprocessorCommand";
    const PRETASK_CREATE_TIME               = "create_time";
    const PRETASK_END_TIME = "end_time";
    const PRETASK_PMSN_COUNT = "pmsn_count";
    const PRETASK_PMSN_ADR = "pmsn_adr";
    const PRETASK_PERCENT = "percent";
    const PRETASK_CHUNK_SIZE = "chunk_size";
    const PRETASK_BENCHMARK_TYPE = "benchmk_type";
    const PRETASK_SKIP_KEYSPACE = "send_keyspace";
    const PRETASK_HASHLIST_ID = "hashlist_id";
    const PRETASK_CHUNKIDS = "chunk_ids";
    const PRETASK_PREPROCESSOR_SPEED = "preprocessor_speed";
    const PRETASK_IS_COMPLETE = "is_complete";
    const PRETASK_ALGORITHM_CODE = "algorithm_code";
    const PRETASK_RESULT = "result";
    const PRETASK_ACTUAL_PMSN = "actual_pmsn";
}
