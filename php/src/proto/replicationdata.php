<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: replicationdata.proto
//   Date: 2015-09-25 23:30:20

namespace replicationdata {

  class Status extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $position = null;
    
    /**  @var boolean */
    public $slave_io_running = null;
    
    /**  @var boolean */
    public $slave_sql_running = null;
    
    /**  @var int */
    public $seconds_behind_master = null;
    
    /**  @var string */
    public $master_host = null;
    
    /**  @var int */
    public $master_port = null;
    
    /**  @var int */
    public $master_connect_retry = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'replicationdata.Status');

      // OPTIONAL STRING position = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "position";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL slave_io_running = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "slave_io_running";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL slave_sql_running = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "slave_sql_running";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 seconds_behind_master = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "seconds_behind_master";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING master_host = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "master_host";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 master_port = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "master_port";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 master_connect_retry = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "master_connect_retry";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <position> has a value
     *
     * @return boolean
     */
    public function hasPosition(){
      return $this->_has(1);
    }
    
    /**
     * Clear <position> value
     *
     * @return \replicationdata\Status
     */
    public function clearPosition(){
      return $this->_clear(1);
    }
    
    /**
     * Get <position> value
     *
     * @return string
     */
    public function getPosition(){
      return $this->_get(1);
    }
    
    /**
     * Set <position> value
     *
     * @param string $value
     * @return \replicationdata\Status
     */
    public function setPosition( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <slave_io_running> has a value
     *
     * @return boolean
     */
    public function hasSlaveIoRunning(){
      return $this->_has(2);
    }
    
    /**
     * Clear <slave_io_running> value
     *
     * @return \replicationdata\Status
     */
    public function clearSlaveIoRunning(){
      return $this->_clear(2);
    }
    
    /**
     * Get <slave_io_running> value
     *
     * @return boolean
     */
    public function getSlaveIoRunning(){
      return $this->_get(2);
    }
    
    /**
     * Set <slave_io_running> value
     *
     * @param boolean $value
     * @return \replicationdata\Status
     */
    public function setSlaveIoRunning( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <slave_sql_running> has a value
     *
     * @return boolean
     */
    public function hasSlaveSqlRunning(){
      return $this->_has(3);
    }
    
    /**
     * Clear <slave_sql_running> value
     *
     * @return \replicationdata\Status
     */
    public function clearSlaveSqlRunning(){
      return $this->_clear(3);
    }
    
    /**
     * Get <slave_sql_running> value
     *
     * @return boolean
     */
    public function getSlaveSqlRunning(){
      return $this->_get(3);
    }
    
    /**
     * Set <slave_sql_running> value
     *
     * @param boolean $value
     * @return \replicationdata\Status
     */
    public function setSlaveSqlRunning( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <seconds_behind_master> has a value
     *
     * @return boolean
     */
    public function hasSecondsBehindMaster(){
      return $this->_has(4);
    }
    
    /**
     * Clear <seconds_behind_master> value
     *
     * @return \replicationdata\Status
     */
    public function clearSecondsBehindMaster(){
      return $this->_clear(4);
    }
    
    /**
     * Get <seconds_behind_master> value
     *
     * @return int
     */
    public function getSecondsBehindMaster(){
      return $this->_get(4);
    }
    
    /**
     * Set <seconds_behind_master> value
     *
     * @param int $value
     * @return \replicationdata\Status
     */
    public function setSecondsBehindMaster( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <master_host> has a value
     *
     * @return boolean
     */
    public function hasMasterHost(){
      return $this->_has(5);
    }
    
    /**
     * Clear <master_host> value
     *
     * @return \replicationdata\Status
     */
    public function clearMasterHost(){
      return $this->_clear(5);
    }
    
    /**
     * Get <master_host> value
     *
     * @return string
     */
    public function getMasterHost(){
      return $this->_get(5);
    }
    
    /**
     * Set <master_host> value
     *
     * @param string $value
     * @return \replicationdata\Status
     */
    public function setMasterHost( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <master_port> has a value
     *
     * @return boolean
     */
    public function hasMasterPort(){
      return $this->_has(6);
    }
    
    /**
     * Clear <master_port> value
     *
     * @return \replicationdata\Status
     */
    public function clearMasterPort(){
      return $this->_clear(6);
    }
    
    /**
     * Get <master_port> value
     *
     * @return int
     */
    public function getMasterPort(){
      return $this->_get(6);
    }
    
    /**
     * Set <master_port> value
     *
     * @param int $value
     * @return \replicationdata\Status
     */
    public function setMasterPort( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <master_connect_retry> has a value
     *
     * @return boolean
     */
    public function hasMasterConnectRetry(){
      return $this->_has(7);
    }
    
    /**
     * Clear <master_connect_retry> value
     *
     * @return \replicationdata\Status
     */
    public function clearMasterConnectRetry(){
      return $this->_clear(7);
    }
    
    /**
     * Get <master_connect_retry> value
     *
     * @return int
     */
    public function getMasterConnectRetry(){
      return $this->_get(7);
    }
    
    /**
     * Set <master_connect_retry> value
     *
     * @param int $value
     * @return \replicationdata\Status
     */
    public function setMasterConnectRetry( $value){
      return $this->_set(7, $value);
    }
  }
}

