<?php
  class User
  {
    private $userID;
    private $user_email;

    public function setUserID($userID) {
      $this->userID = $userID;
    }

    public function setUserEmail($user_email) {
      $this->user_email = $user_email;
    }

    public function getUserID() {
      return $this->userID;
    }

    public function getUserEmail() {
      return $this->user_email;
    }
  }
?>
