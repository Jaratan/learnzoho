<?php
  class User
  {
    private $db;
    public function __construct()
    {   $this->db = new Database;   }

    //login user
    public function login($email, $password)
    {
      $this->db->query('SELECT * from users WHERE user_email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();      
      if($password==$row->user_password)
      {   return $row;  }
      else
      {   return false;   }  
    }
    
    //find user by name
    public function findUserByEmail($email)
    {
      $this->db->query('SELECT * FROM users WHERE user_email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      if($this->db->rowCount() > 0)
      {   return true;  }
      else
      {   return false; }
    }

    public function update_user($id,$contact_id)
    {
      $this->db->query("UPDATE users set user_contact_id=:contact_id, user_account_status='A' WHERE user_id=:id and user_account_status='I'");
      $this->db->bind(':id',$id);
      $this->db->bind(':contact_id',$contact_id);

      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }