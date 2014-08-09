<?php
Class Sub extends Dom {
    public $will = 50;
    public $isGood = true;
    public $isBad = !$isGood;
    public $likesIt = true;
    public $happiness = 100;

    function serve (Dom $dom, Punishment $punishment) {
      if ($self.isGood) {
        $self.happiness += $dom.reward($self, $punishment);
      }
      elseif {
        $self.happiness += $dom.punish($self);
      }
    }
    function please (Dom $dom) {
      if ($self.isGood) {
        $self.happiness += $dom.reward($self, $punishment);
      }
      elseif {
        $self.happiness += $dom.punish($self);
      }
    }
    function reaction (Punishment $punishment){
      if ($punishment.isTooHarsh && $self.likesIt){
        $self.happiness += 1;
      }
      elseif (!$punishment.isTooHarsh){
        $self.happiness += 1;
      }
      else{
        $self.happiness -= 1;
      }
    }
}
