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
  private $phone;
  private $address;
  private $birthday;
  private $gender;
  private $children;
  private $handicapped;

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

  /**
   * Get the value of phone
   */
  public function getPhone()
  {
    return $this->phone;
  }

  /**
   * Set the value of phone
   */
  public function setPhone($phone): self
  {
    $this->phone = $phone;

    return $this;
  }

  /**
   * Get the value of address
   */
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set the value of address
   */
  public function setAddress($address): self
  {
    $this->address = $address;

    return $this;
  }

  /**
   * Get the value of birthday
   */
  public function getBirthday()
  {
    return $this->birthday;
  }

  /**
   * Set the value of birthday
   */
  public function setBirthday($birthday): self
  {
    $this->birthday = $birthday;

    return $this;
  }

  /**
   * Get the value of gender
   */
  public function getGender()
  {
    return $this->gender;
  }

  /**
   * Set the value of gender
   */
  public function setGender($gender): self
  {
    $this->gender = $gender;

    return $this;
  }

  /**
   * Get the value of children
   */
  public function getChildren()
  {
    return $this->children;
  }

  /**
   * Set the value of children
   */
  public function setChildren($children): self
  {
    $this->children = $children;

    return $this;
  }

  /**
   * Get the value of handicapped
   */
  public function getHandicapped()
  {
    return $this->handicapped;
  }

  /**
   * Set the value of handicapped
   */
  public function setHandicapped($handicapped): self
  {
    $this->handicapped = $handicapped;

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

  public function createAccount() {
    // Get connection
    $conn = Db::getConnection();

    // Prepare query
    $statement = $conn->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");

    // Get values
    $firstname = $this->firstname;
    $lastname = $this->lastname;
    $email = $this->email;

    // Hash password with bcrypt
    $options = [
      'cost' => 15,
    ];

    $password = password_hash($this->getPassword(), PASSWORD_DEFAULT, $options);

    // Bind values
    $statement->bindParam(':firstname', $firstname);
    $statement->bindParam(':lastname', $lastname);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $password);

    // Execute query
    $result = $statement->execute();
    return $result;
  }
}