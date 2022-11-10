<?php
    
    class Prescription
    {
        //public $preid;
        public $medicine=array();
        public $ap_id;
        public $time;

        function __construct($ap_id,$medicine,$time)
        {
            $this->ap_id = $ap_id;
            $this->medicine = $medicine;

            
            $this->time = $time;
            
            //$this->availTime = $availTime;
            //$this->generateID();
        }
    }

?>