<?php
// Inlcude IUser interface
include_once(__DIR__ . '/../interfaces/IUser.php');

// Include Db file
include_once(__DIR__ . '/db.php');

class User implements IUser {
  // Properties
  private $id;
  private $firstname;
  private $lastname;
  private $email;
  private $password;  

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   */
  public function setId($id): self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of firstname
   */
  public function getFirstname()
  {
    return $this->firstname;
  }

  /**
   * Set the value of firstname
   */
  public function setFirstname($firstname): self
  {
    $this->firstname = $firstname;

    return $this;
  }

  /**
   * Get the value of lastname
   */
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   */
  public function setLastname($lastname): self
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   */
  public function setEmail($email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   */
  public function setPassword($password): self
  {
    $this->password = $password;

    return $this;
  }

  // Methods
  public function login() {
    // Get connection
    $conn = Db::getConnection();

    // Prepare query
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");

    // Get values
    $email = $this->email;
    $password = $this->password;

    // Bind values
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $password);

    // Execute query
    $statement->execute();
    
    // Store results
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
  }
}