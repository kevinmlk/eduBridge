<?php
// Inlcude IUser interface
include_once(__DIR__ . '/../interfaces/IAccommodation.php');

// Include Db file
include_once(__DIR__ . '/db.php');

class Accommodation implements IAccommodation {

  // Properties
  private $id;
  private $name;
  private $description;
  private $link;


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
   * Get the value of description
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   */
  public function setDescription($description): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of link
   */
  public function getLink()
  {
    return $this->link;
  }

  /**
   * Set the value of link
   */
  public function setLink($link): self
  {
    $this->link = $link;

    return $this;
  }

  // Method to get user accommodations
  public static function getUserAccommodations() {
    // Get connection
    $conn = Db::getConnection();

    $statement = $conn->prepare("SELECT * FROM accommodations INNER JOIN user_accommodations ON user_accommodations.AccommodationId = accommodations.Id WHERE user_accommodations.UserId = :id");
    $id = $_SESSION['id'];
    $statement->bindParam(':id', $id);
    $statement->execute();
    $accommodations = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $accommodations;
  }
}