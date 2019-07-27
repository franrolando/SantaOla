<?php
  namespace dao\pdo;

  use model\User as User;
  use dao\Connection as Connection;
  use exceptions\UserNotFoundException as UserNotFoundException;

  /**
   *
   */
  class UserDaoPdo
  {

    private $connection;
    private $tableName = 'users';

    public function getByUsername($username)
    {
      try {

        $user = null;

        $query = "SELECT * FROM ".$this->tableName." WHERE user = :user";

        $parameters["user"] = $username;

        $this->connection = Connection::GetInstance();

        $resultSet = $this->connection->Execute($query, $parameters);

        foreach ($resultSet as $row) {

            $user = new User();
            $user->setId($row["id"]);
            $user->setUsername($row["user"]);
            $user->setPassword($row["password"]);

        }

        return $user;

      } catch (Exception $e) {

      }

    }
  }

?>
