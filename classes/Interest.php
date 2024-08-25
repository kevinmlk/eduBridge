<?php
// Inlcude IUser interface
include_once(__DIR__ . '/../interfaces/IInterest.php');

// Include Db file
include_once(__DIR__ . '/db.php');

class Interest implements IInterest {
  // Properties
  private $id;
  private $name;

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
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName($name): self
  {
    $this->name = $name;

    return $this;
  }

  // Method to get user interests
  public static function getUserInterests() {
    // Get connection
    $conn = Db::getConnection();

    $statement = $conn->prepare("SELECT * FROM interests INNER JOIN user_interests ON user_interests.InterestId = interests.Id WHERE user_interests.UserId = :id");
    $id = $_SESSION['id'];
    $statement->bindParam(':id', $id);
    $statement->execute();
    $interests = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $interests;
  }
}