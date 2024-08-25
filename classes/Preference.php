<?php
// Inlcude IUser interface
include_once(__DIR__ . '/../interfaces/IPreference.php');

// Include Db file
include_once(__DIR__ . '/db.php');

class Preference implements IPreference {
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
  public static function getUserPreferences() {
    // Get connection
    $conn = Db::getConnection();

    $statement = $conn->prepare("SELECT * FROM preferences INNER JOIN user_preferences ON user_preferences.PreferenceId = preferences.Id WHERE user_preferences.UserId = :id");
    $id = $_SESSION['id'];
    $statement->bindParam(':id', $id);
    $statement->execute();
    $preferences = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $preferences;
  }
}