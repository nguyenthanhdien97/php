<?php // IDEA:
  require_once("helpers.php");
  /**
   *
   */
  class User
  {
    private $username;
    private $useremail;
    private $userID;
    private $status;

    public function __construct($newUser,$email)
    {
      $this->username =$newUser;
      $this->useremail = $email;
      $this->status = 1;
      $this->userID = GetNextUserID();
    }
     public function _destruct()
     {
       $this->username =NULL;
       $this->useremail = NULL;
       $this->status = NULL;
       $this->userID =NULL;
     }
     public function GetUserName()
     {
       return $this->username;
     }
     public function GetUserEmail()
     {
       return $this->useremail;
     }
     public function GetUserID()
     {
       return $this->userID;
     }
     public function GetUserStatus($input)
     {
       if ($input>1 || $input <0)
       {
         return false;
       }
       $this->status = $input;
       return true;
     }
  }

?>
