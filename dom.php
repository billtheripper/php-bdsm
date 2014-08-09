<?php
Class Dom {
    public $will = 100;

    function dominate (Sub $sub){
        if ($self.will > $sub.will){
            return true;
        }
    }
    function punish (Sub $sub){
        if ($sub.isGood && $sub.likesIt){
            return 1;
        }
        else{
          return 0;
        }
    }
    function reward (Sub $sub, Punishment $punishment){
        if ($sub.isGood || $punishment.wasTooHarsh){
            return 1;
        }
        else{
          return 0;
        }
    }

}
