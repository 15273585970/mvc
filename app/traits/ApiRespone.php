<?php
namespace app\traits;

trait ApiRespone{

    protected $state = 200;
    
    public function result($state,$msg,$data){
        return json_encode(['state' => $this->getStatus($state) , 'msg' => $msg, "data" => $data ]);
    }

    public function fail($data, $msg, $state)
    {
        return json_encode(['data' => $data, 'msg' => $msg, 'state' => $this->getStatus($state) ]);
    }

    public function getStatus( $state )
    {
        if ( empty( $state ) ) {
             return $state;
        }

        return $this->state;
    }



}