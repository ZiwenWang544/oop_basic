<?php

    require_once("invite.php");

    Class random extends Invite{
        
        public $codeInvite;

        function __construct(string $inviteName, string $inviteGender, int $inviteMeasure)
        {
            parent::__construct($inviteName,$inviteGender, $inviteMeasure);
        }

        public function setInvited(string $invtee)
        {
            $this-> codeInvite = $invtee;
        }

        public function getInvited(string $invtee):string
        {
            return $this-> codeInvite = $invtee;
        }

        public function doingSomething()
        {
            echo "Calling something from ". $this->inviteName;
        }
        public function doingSomething2()
        {
            echo "Doing something from ". $this->inviteName;
        }
    }

    $newinvite = new $invite("Mara","F",12);
    echo $newinvite;
?>