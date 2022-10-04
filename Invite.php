<?php

require_once("Index.php");

 abstract class Invite{

    public $inviteName;
    public $inviteGender;
    public $inviteMeasure;
    Static $inviteUserState = "temporary";

    function __construct(string $inviteName, string $inviteGender, int $inviteMeasure)
    {
        $this -> inviteName = $inviteName;
        $this -> inviteGender = $inviteGender;
        $this -> inviteMeasure = $inviteMeasure;
    }
    
    public function getInviteDates()
    {
        $date ="
            <h2>INVITE USER DATES</h2>
            Name:{$this->inviteName}<br>
            Gender:{$this->inviteGender}<br>
            Measure:{$this->inviteMeasure}<br>
            ";
            return $date; 
    }
    abstract public function doingSomething();
    abstract public function doingSomething2();
}


?>