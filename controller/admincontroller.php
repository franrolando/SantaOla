<?php namespace controller;
    use model\User as User;
    use dao\pdo\UserDaoPdo as UserDaoPdo;

    class AdminController
    {

      private $userDao;

      public function __construct()
      {
        $this->userDao = new UserDaoPdo();
      }

        public function Index()
        {
            require_once(VIEWS_PATH."login.php");
        }

        public function loginView()
        {
          require_once(VIEWS_PATH . "login.php");
        }

        public function login($username, $password)
        {
          if($username != null && trim($username) != ''
          && $password != null && trim($password) != '')
          {
            try {
              if(isset($_SESSION))
              {
                $user = $this->userDao->getByUsername($username);

                if($user != null && $user->getPassword() === $password)
                {
                  $_SESSION["user"] = $user;
                  require_once(VIEWS_PATH . "index2.php");
                }
                else {
                  require_once(VIEWS_PATH . "login.php");
                }
              }
              else {
                require_once(VIEWS_PATH . "login.php");
              }
            } catch (Exception $ex) {
                require_once(VIEWS_PATH . "login.php");
            }

          }else {
            require_once(VIEWS_PATH . "login.php");
          }
        }

        public function logout()
        {
          if(isset($_SESSION["user"]))
          {
            session_destroy();
            unset($_SESSION["user"]);
          }

          require_once(VIEWS_PATH . "login.php");
        }
    }
?>
