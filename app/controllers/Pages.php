<?php
  class Pages extends Controller
  {
    public $auth_token = '36c98c349297560beaf1b3718c4985c7';
    public $org_id = 726736316;
    public function __construct(){
    if(!isLoggedIn()){
         redirect('users/login');
      }
     $this->userModel = $this->model('User');
    }

    public function index()
    {
      $headers=array(
              "Authorization: $this->auth_token",
              "orgId: $this->org_id",
              "contentType: application/json; charset=utf-8",
      );
      $url="https://desk.zoho.com/api/v1/departments";
      
      $ch= curl_init($url);
      curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
      curl_setopt($ch,CURLOPT_HTTPGET,TRUE);
      
      $response= curl_exec($ch);
      $info= curl_getinfo($ch);
      $dept_data = json_decode($response);
           
      curl_close($ch);
      $this->view('pages/index',$dept_data);
    }

    public function new_ticket()
    {
      $ticket_data=array(
          "departmentId"=>$_POST['department'],
          "category"=>$_POST['category'],
          "contactId"=>$_SESSION['contact_id'],
          "subject"=>$_POST['subject'],
          "description"=>$_POST['description'],
          "priority"=>$_POST['priority'],
          "email"=>$_POST['contact_email'],
      );

      $headers=array(
              "Authorization: $this->auth_token",
              "orgId: $this->org_id",
              "contentType: application/json; charset=utf-8",
      );
      
      $url="https://desk.zoho.com/api/v1/tickets";
      
      $ticket_data=(gettype($ticket_data)==="array")? json_encode($ticket_data):$ticket_data;
      
      $ch= curl_init($url);
      curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
      curl_setopt($ch,CURLOPT_POST,TRUE);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$ticket_data); //convert ticket data array to json
      
      $response= curl_exec($ch);
      $info= curl_getinfo($ch);
      
      if($info['http_code']==200)
      { $_SESSION['created'] = TRUE;  }
      else
      { $_SESSION['created']=False; }
      
      curl_close($ch);
      redirect('pages/index');
    }

    public function tickets()
    {
      $headers=array(
              "Authorization: $this->auth_token",
              "orgId: $this->org_id",
              "contentType: application/json; charset=utf-8",
      );

      $params="include=contacts,products";
    
      $url="https://desk.zoho.com/api/v1/tickets?$params";
      
      $ch= curl_init($url);
      curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
      curl_setopt($ch,CURLOPT_HTTPGET,TRUE);
      
      $response= curl_exec($ch);
      $info= curl_getinfo($ch);
      $data = json_decode($response);
      
      $this->view('pages/tickets',$data);
      
      curl_close($ch);
    }
}