<?php
  class ViewAppFormView extends ViewAppForm {

    public function showAddress($aid){
      $results = $this->getAddress($aid);
      
      return $results;
  }

  public function showApplicant($aid){
    $results = $this->getApplicant($aid);
    
    return $results;
  }

  public function showFather($aid){
    $results = $this->getFather($aid);
    
    return $results;
  }

  public function showFatherAddress($aid){
    $results = $this->getFatherAddress($aid);
    
    return $results;
  }

  public function showMother($aid){
    $results = $this->getMother($aid);
    
    return $results;
  }

  public function showMotherAddress($aid){
    $results = $this->getMotherAddress($aid);
    
    return $results;
  }

  public function showGuardian($aid){
    $results = $this->getGuardian($aid);
    
    return $results;
  }

  public function showGuardianAddress($aid){
    $results = $this->getGuardianAddress($aid);
    
    return $results;
  }

}
?>