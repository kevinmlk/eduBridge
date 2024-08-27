<?php
// Inlcude IUser interface
include_once(__DIR__ . '/../interfaces/IProgramme.php');

// Include Db file
include_once(__DIR__ . '/db.php');

class Programme implements IProgramme {
  // Properties
  private $id;
  private $name;
  private $level;
  private $type;

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

  /**
   * Get the value of level
   */
  public function getLevel()
  {
    return $this->level;
  }

  /**
   * Set the value of level
   */
  public function setLevel($level): self
  {
    $this->level = $level;

    return $this;
  }

  /**
   * Get the value of type
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   */
  public function setType($type): self
  {
    $this->type = $type;

    return $this;
  }

  // Method to get user education history
  public static function getUserEduHistory() {
    // Get connection
    $conn = Db::getConnection();
    $statement = $conn->prepare("SELECT * FROM programmes INNER JOIN user_education ON user_education.ProgrammeId = programmes.Id  WHERE user_education.UserId = :id");
    $id = $_SESSION['id'];
    $statement->bindParam(':id', $id);
    $statement->execute();
    $programmes = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $programmes;
  }
}