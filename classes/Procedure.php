<?php
// Inlcude IUser interface
include_once(__DIR__ . '/../interfaces/IProcedure.php');

// Include Db file
include_once(__DIR__ . '/db.php');

class Procedure implements IProcedure {
  // Properties
  private $id;
  private $title;
  private $period;
  private $description;
  private $statusPercentage;
  private $descriptionStatus;
  private $previousPhase;
  private $currentPhase;
  private $nextPhase;
  private $link;
  private $startDate;

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
   * Get the value of title
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   */
  public function setTitle($title): self
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of period
   */
  public function getPeriod()
  {
    return $this->period;
  }

  /**
   * Set the value of period
   */
  public function setPeriod($period): self
  {
    $this->period = $period;

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
   * Get the value of statusPercentage
   */
  public function getStatusPercentage()
  {
    return $this->statusPercentage;
  }

  /**
   * Set the value of statusPercentage
   */
  public function setStatusPercentage($statusPercentage): self
  {
    $this->statusPercentage = $statusPercentage;

    return $this;
  }

  /**
   * Get the value of descriptionStatus
   */
  public function getDescriptionStatus()
  {
    return $this->descriptionStatus;
  }

  /**
   * Set the value of descriptionStatus
   */
  public function setDescriptionStatus($descriptionStatus): self
  {
    $this->descriptionStatus = $descriptionStatus;

    return $this;
  }

  /**
   * Get the value of previousPhase
   */
  public function getPreviousPhase()
  {
    return $this->previousPhase;
  }

  /**
   * Set the value of previousPhase
   */
  public function setPreviousPhase($previousPhase): self
  {
    $this->previousPhase = $previousPhase;

    return $this;
  }

  /**
   * Get the value of currentPhase
   */
  public function getCurrentPhase()
  {
    return $this->currentPhase;
  }

  /**
   * Set the value of currentPhase
   */
  public function setCurrentPhase($currentPhase): self
  {
    $this->currentPhase = $currentPhase;

    return $this;
  }

  /**
   * Get the value of nextPhase
   */
  public function getNextPhase()
  {
    return $this->nextPhase;
  }

  /**
   * Set the value of nextPhase
   */
  public function setNextPhase($nextPhase): self
  {
    $this->nextPhase = $nextPhase;

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

  /**
   * Get the value of startDate
   */
  public function getStartDate()
  {
    return $this->startDate;
  }

  /**
   * Set the value of startDate
   */
  public function setStartDate($startDate): self
  {
    $this->startDate = $startDate;

    return $this;
  }

  // Method to get all user procedures
  public static function getUserProcedures() {
    // Get connection
    $conn = Db::getConnection();
    $statement = $conn->prepare("SELECT * FROM procedures INNER JOIN user_procedures ON user_procedures.ProcedureId = procedures.Id WHERE user_procedures.UserId = :id");
    $id = $_SESSION['id'];
    $statement->bindParam(':id', $id);
    $statement->execute();
    $procedures = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $procedures;
  }

  // Method to get procedure data
  public function getProcedureData() {
    // Get connection
    $conn = Db::getConnection();
    $statement = $conn->prepare("SELECT * FROM procedures WHERE Id = :id");
    $id = $_GET['id'];
    $statement->bindParam(':id', $id);
    $statement->execute();
    $procedures = $statement->fetch(PDO::FETCH_ASSOC);
    return $procedures;
  }
}