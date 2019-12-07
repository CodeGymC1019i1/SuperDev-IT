<?php
class StopWatch{
    private $startTime;
    private $endTime;
    public function __product($startTime,$endTime){
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
    public function getStartTime(){
        return $this->startTime;
    }
    public function getEndTime(){
        return $this->endTime;
    }
    public function start(){
        return $this->startTime= microtime(true);
    }
    public function stop(){
        return $this->endTime = microtime(true);
    }
    public function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }
}

