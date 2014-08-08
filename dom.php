<?php
Class Dom {
    public $will = 100;

    function dominate (Sub $sub){
        if ($self.will > $sub.will){
            return true;
        }
    }
    function punish (Sub $sub){
        if ($sub.isBad || ($sub.isGood && $sub.likesIt)){
            return true;
        }
    }
    function reward (Sub $sub, LastPun $lastPunishment){
        if ($sub.isGood || $lastPunishment.wasTooHarsh){
            return true;
        }
    }

}
