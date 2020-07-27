<?php
  class SelectedApplicant extends Db {
    protected function getSelectedApplicant($status) {
      $sql = "SELECT applicant.id as apid, applicant.syllabus, applicant.ename, applicant.mmname, address.mobile, address.email 
              FROM applicant INNER JOIN address ON applicant.addressid=address.id 
              WHERE applicant.status= ? ";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$status]);

      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
  }

?>