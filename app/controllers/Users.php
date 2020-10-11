  <?php
  class Users extends Controller
  {
    public function __construct()
    {   $this->userModel = $this->model('User');    }
    
    //login 
    public $auth_token = '36c98c349297560beaf1b3718c4985c7 '; //your_auth_token
    public $org_id=726736316; //your_organization_id

    public function login()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {       
        $data =[
          'email' => trim($_POST['user_email']),
          'password' => trim($_POST['user_password']),
          'email_err' => '',
          'password_err' => ''
        ];

        if(empty($data['email']))
        {   $data['email_err'] = 'Please enter email';    }

        if(empty($data['password']))
        {   $data['password_err'] = 'Please enter password';  } 

        if($this->userModel->findUserByEmail($data['email']))
        { }
        else
        {   $data['email_err'] = "No user found";   }

        if(empty($data['email_err']) && empty($data['password_err']))
        {   
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);
          if($loggedInUser)
          {   
            if($loggedInUser->user_account_status=='I')
            {
              $contact_data=array(
                  "firstName"=>$loggedInUser->user_name,
                  "lastName"=>" ",
                  "email"=>$loggedInUser->user_email,
                  "description"=>"Hey please create a contact in Zoho"
              );
              $headers=array(
                        "Authorization: $this->auth_token",
                        "orgId: $this->org_id",
                        "contentType: application/json; charset=utf-8",
                );
              $url="https://desk.zoho.com/api/v1/contacts";
    
              $contact_data=(gettype($contact_data)==="array")? json_encode($contact_data):$contact_data;
              
              $ch= curl_init($url);
              curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
              curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
              curl_setopt($ch,CURLOPT_POST,TRUE);
              curl_setopt($ch, CURLOPT_POSTFIELDS,$contact_data);
              
              $response= curl_exec($ch);
              $info= curl_getinfo($ch);
              
              if($info['http_code']==200)
              {   
                $zoho_data = json_decode($response);
                
                $this->userModel->update_user($loggedInUser->user_id, $zoho_data->id);
              }
              
              curl_close($ch);
            }
            $loggedInUser = $this->userModel->login($data['email'], $data['password']);
            $this->createUserSession($loggedInUser);
          }
          else
          {
            $data['password_err'] = 'Passowrd incorrect';
            $this->view('users/login',$data);
          }
        }
        else
        {   $this->view('users/login',$data);   }
      }
      else
      {
        $data =[
          'email' => '',
          'password' =>'',
          'email_err' =>'',
          'password_err' => ''
        ];
        $this->view('users/login', $data);
      }
    }
    
    public function createUserSession($user)
    {
      $_SESSION['user_id'] = $user->user_id;
      $_SESSION['user_name'] = $user->user_name;
      $_SESSION['user_email'] = $user->user_email;
      $_SESSION['contact_id'] = $user->user_contact_id;

      redirect('pages/index');   
    }
  

    public function logout()
    {
      unset($_SESSION['user_id']);
      unset($_SESSION['user_name']);
      unset($_SESSION['user_email']);

      session_destroy();
      redirect('user/login');
    }

    public function isLoggedIn(){
      if(isset($_SESSION['user_id'])){
        return true;
      }else{
        return false;
      }
    }
}  

