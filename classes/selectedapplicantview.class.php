<?php
  class SelectedApplicantView extends SelectedApplicant {
    public function showSelectedApplicant($status) {
      $results = $this->getSelectedApplicant($status);
      // echo "Full name: " . $results[0]['syllabus'] . " " . $results[0]['ename'] . "<br>";
      // echo "Gender: " . $results[0]['email'];

       //return array($results[0]['apid'], $results[0]['syllabus'], $results[0]['ename'], $results[0]['mmname'], $results[0]['mobile'], $results[0]['email']);
      return $results;
    }
    
  }
?>