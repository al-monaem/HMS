<?php
    
    class Otinitiate
    {
        //public $preid;
        public $equipments=array();
        public $pid;
        public $otid;

        function __construct($pid,$otid,$equipments)
        {
            $this->pid = $pid;
            $this->otid = $otid;
            $this->equipments = $equipments;
            
            //$this->availTime = $availTime;
            //$this->generateID();
        }
    }

?>