<?php
  class ViewAppForm extends Db {

    protected function getAddress($aid){
      $sql = "SELECT address.* FROM address INNER JOIN applicant 
              ON address.id = applicant.addressid
              WHERE applicant.id=?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$aid]);

      $results = $stmt->fetchAll();
      return $results;
  }

  protected function getApplicant($aid){
    $sql = "SELECT applicant.* FROM applicant 
            WHERE applicant.id=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$aid]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getFather($aid){
    $sql = "SELECT parent.* FROM parent INNER JOIN applicant 
            ON parent.applicant_id = applicant.id
            WHERE applicant.id=? AND parent.parent_status='father'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$aid]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getFatherAddress($aid){
    $sql = "SELECT address.* FROM parent 
            INNER JOIN address ON address.id = parent.addressid
            INNER JOIN applicant ON applicant.id = parent.applicant_id
            WHERE applicant.id=? AND parent.parent_status='father'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$aid]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getMother($aid){
    $sql = "SELECT parent.* FROM parent INNER JOIN applicant 
            ON parent.applicant_id = applicant.id
            WHERE applicant.id=? AND parent.parent_status='mother'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$aid]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getMotherAddress($aid){
    $sql = "SELECT address.* FROM parent 
            INNER JOIN address ON address.id = parent.addressid
            INNER JOIN applicant ON applicant.id = parent.applicant_id
            WHERE applicant.id=? AND parent.parent_status='mother'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$aid]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getGuardian($aid){
    $sql = "SELECT parent.* FROM parent INNER JOIN applicant 
            ON parent.applicant_id = applicant.id
            WHERE applicant.id=? AND parent.parent_status='other' AND parent.guardian_status='other'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$aid]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getGuardianAddress($aid){
    $sql = "SELECT address.* FROM parent 
            INNER JOIN address ON address.id = parent.addressid
            INNER JOIN applicant ON applicant.id = parent.applicant_id
            WHERE applicant.id=? AND parent.parent_status='other' AND parent.guardian_status='other'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$aid]);

    $results = $stmt->fetchAll();
    return $results;
  }
  
}
?>