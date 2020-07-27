<?php
    include 'includes/class-autoload.inc.php';
?>
<?php $aid=$_GET['aticid'];?>
<!DOCTYPE html>
<html>
<head>
<title> University Admission Systm</title>
<link rel="stylesheet" type="text/css" href="appform-assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="appform-assets/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="appform-assets/css/style.css">
		<script type="text/javascript" src="appform-assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="appform-assets/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="d-flex flex-column">
<form class="form-horizontal" action="application.php" method="post">

    <div class="container" >
    <div class="row">
      <h4> Applicant's Information </h4>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="title">Title<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="title" id="title" class="form-control form-control-inline col-md-4" disabled>
                <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
                <option value="" >---Select---</option>
                  <option value="Mr" <?php if ($row['title']  == 'Mr') echo 'selected' ; ?>>Mr</option>
                  <option value="Ms" <?php if ($row['title']  == 'Ms') echo 'selected'; ?>>Ms</option>
                  <option value="Mrs"<?php if ($row['title']  == 'Mrs') echo 'selected' ; ?>>Mrs</option>
                        <?php }?>
                </select>
                
                
            </div>
    </div>
    <br>
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="eng_name">Name (Eng)<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="eng_name" type="text" id="eng_name" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['ename'];
                        }
                    ?>" disabled>
                         
            </div>
    </div>
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mm_name">Name (MM)<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="mm_name" type="text" id="mm_name" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['mmname'];
                        }
                    ?>" disabled>
                           
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Gender<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
            <label class="radio-inline"><input type="radio" name="gender" id="male" value="Male" <?php if ($row['gender'] == 'Male')  echo ' checked="checked"';?> disabled>Male</label>
            <label class="radio-inline"><input type="radio" name="gender" id="female" value="Female" <?php if ($row['gender'] == 'Female')  echo ' checked="checked"';?> disabled>Female</label>         
            <br>
                    <?php }?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="email">Email<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="email" type="text" id="email" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['email'];
                        }
                    ?>" disabled>
                        
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="syllabus">Syllabus<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="syllabus" id="syllabus" class="form-control form-control-inline col-md-4" disabled>
                <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
                <option value="" >---Select---</option>
                  <option value="civil" <?php if($row['syllabus'] == 'civil') echo 'selected' ?>>Civil Engineering</option>
                  <option value="it" <?php if($row['syllabus'] == 'it') echo 'selected' ?>>IT Engineering</option>
                  <option value="electrical" <?php if($row['syllabus'] == 'electrical') echo 'selected' ?>>Electrical Engineering</option>
                        <?php }?>
                </select>
            </div>
    </div>
    </div>
    <br><hr>

  <div class="container" >
    <div class="row">
      <h4>Education </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="studyin">Study in<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
            <label class="radio-inline"><input type="radio" name="studyin" id="myanmar" value="myanmar" <?php if ($row['studyplace'] == 'myanmar')  echo ' checked="checked"';?> disabled>Myanmar</label>
            <label class="radio-inline"><input type="radio" name="studyin" id="abroad " value="abroad" <?php if ($row['studyplace'] == 'abroad')  echo ' checked="checked"';?> disabled>Abroad</label>
                        <?php }?>               
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="school">School<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="school" type="text" id="school" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['school'];
                        }
                    ?>" disabled>
                          
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Level of Completion<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="level" id="level" class="form-control form-control-inline col-md-4" disabled>
                <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
                <option value="" >---Select---</option>
                  <option value="gce_o" <?php if($row['level'] == 'gce_o') echo 'selected' ?>>GCE O Level</option>
                  <option value="gce_a" <?php if($row['level'] == 'gce_a') echo 'selected' ?>>GCE A Level</option>
                  <option value="grade11" <?php if($row['level'] == 'grade11') echo 'selected' ?>>Grade 11</option>
                  <option value="igcse" <?php if($row['level'] == 'igcse') echo 'selected' ?>>IGCSE</option>
                  <?php } ?>
                </select>
                
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="major">Major of Completion<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="major" id="major" class="form-control form-control-inline col-md-4" disabled>
                <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
                <option value="" >---Select---</option>
                  <option value="science" <?php if($row['major'] == 'science') echo 'selected' ?>>Science (Biology)</option>
                  <option value="arts" <?php if($row['major'] == 'arts') echo 'selected' ?>>Arts</option>
                  <option value="scienceArt" <?php if($row['major'] == 'scienceArt') echo 'selected' ?>>Science and Arts</option>
                  <option value="other" <?php if($row['major'] == 'other') echo 'selected' ?>>other</option>
                        <?php }?>
                </select>
                
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="marks">Marks<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="marks" type="text" id="marks" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['mark'];
                        }
                    ?>" disabled>
                         
            </div>
    </div>
  </div>
  <br><hr>

  <div class="container" >
    <div class="row">
      <h4>Personal Details </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="birthdate">Birthdate<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <input type="date" id="birthdate" name="birthdate" 
            value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['birthday'];
                        }
                    ?>" disabled>              
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="nationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="nationality" type="text" id="nationality" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['nationality'];
                        }
                    ?>" disabled>
                         
            </div>
            <label class="control-label col-md-2" for="citizen">Citizenship<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="citizen" type="text" id="citizen" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['citizenship'];
                        }
                    ?>" disabled >
          
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="religion">Religion</label>
           <div class="controls col-md-4">
                <select name="religion" id="religion" class="form-control form-control-inline col-md-4" disabled>
                <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
                <option value="" >---Select---</option>
                  <option value="buddhism" <?php if($row['religion'] == 'buddhism') echo 'selected' ?>>Buddhism</option>
                  <option value="chirstian" <?php if($row['religion'] == 'chirstian') echo 'selected' ?>>Christian</option>
                  <option value="islam" <?php if($row['religion'] == 'islam') echo 'selected' ?>>Islam</option>
                  <option value="hindu" <?php if($row['religion'] == 'hindu') echo 'selected' ?>>Hindu</option>
                  <option value="other" <?php if($row['religion'] == 'other') echo 'selected' ?>>Other</option>
                        <?php }?>
                </select>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="bloodtype">Blood Group</label>
           <div class="controls col-md-4">
                <select name="bloodtype" id="bloodtype" class="form-control form-control-inline col-md-4" disabled>
                <?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
                <option value="" >---Select---</option>
                  <option value="A" <?php if($row['bloodgroup'] == 'A') echo 'selected' ?>>A</option>
                  <option value="B" <?php if($row['bloodgroup'] == 'B') echo 'selected' ?>>B</option>
                  <option value="AB" <?php if($row['bloodgroup'] == 'AB') echo 'selected' ?>>AB</option>
                  <option value="O" <?php if($row['bloodgroup'] == 'O') echo 'selected' ?>>O</option>
                        <?php } ?>
                </select>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="citizenid">Citizen ID<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="citizenid" type="text" id="citizenid" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['citizenid'];
                        }
                    ?>" disabled >
                            
            </div>
            <label class="control-label col-md-2" for="passport">If not Myanmar Citizen,enter passport number</label>
            <div class="controls col-md-4">
               <input name="passport" type="text" id="passport" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showApplicant($aid);
                        foreach ($ret as $row) {
                            echo $row['passportid'];
                        }
                    ?>" disabled >
                            
            </div>
    </div>
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mailing Address </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="address">Address No:</label>
            <div class="controls col-md-4">
               <input name="address" type="text" id="address" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['addressno'];
                        }
                    ?>" disabled >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="street" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['street'];
                        }
                    ?>" disabled >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township</label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="township" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['township'];
                        }
                    ?>" disabled >
                       
            </div> 
            <label class="control-label col-md-2" for="city">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="city" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['city'];
                        }
                    ?>" disabled >
                          
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="zipcode" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['zipcode'];
                        }
                    ?>" disabled >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="telephone">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="telephone" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['telephone'];
                        }
                    ?>" disabled >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['mobile'];
                        }
                    ?>" disabled >
                          
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="facebook">Facebook<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="facebook" type="text" id="facebook" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj = new ViewAppFormView();
                        $ret = $ViewAppFormObj->showAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['facebook'];
                        }
                    ?>" disabled >
                    
            </div>
            
    </div>
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Father's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="fname" type="text" id="fname" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj2 = new ViewAppFormView();
                        $ret = $ViewAppFormObj2->showFather($aid);
                        foreach ($ret as $row) {
                            echo $row['name'];
                        }
                        
                    ?>" disabled>
                       
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="fnationality" type="text" id="fnationality" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj2 = new ViewAppFormView();
                        $ret = $ViewAppFormObj2->showFather($aid);
                        foreach ($ret as $row) {
                            echo $row['nationality'];
                        }  
                    ?>" disabled >
                        
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="fcitizen" type="text" id="fcitizen" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj2 = new ViewAppFormView();
                        $ret = $ViewAppFormObj2->showFather($aid);
                        foreach ($ret as $row) {
                            echo $row['citizenship'];
                        }  
                    ?>" disabled >
                         
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fstatus">Status<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <?php
                        $ViewAppFormObj2 = new ViewAppFormView();
                        $ret = $ViewAppFormObj2->showFather($aid);
                        foreach ($ret as $row) {
                            //echo $row['title'];
                        
                    ?>
            <label class="radio-inline"><input type="radio" name="fstatus" id="fliving" value="fliving" <?php if ($row['status'] == 'fliving')  echo ' checked="checked"';?> disabled>Living</label>
            <label class="radio-inline"><input type="radio" name="fstatus" id="fdecese" value="fdecese"<?php if ($row['status'] == 'fdecese')  echo ' checked="checked"';?> disabled>Decese</label>
                        <?php }?>               
            </div>
    </div>

    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">
               <input name="fage" type="text" id="fage" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj2 = new ViewAppFormView();
                        $ret = $ViewAppFormObj2->showFather($aid);
                        foreach ($ret as $row) {
                            echo $row['age'];
                        }  
                    ?>" disabled >
                          
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occupation</label>
        <div class="controls col-md-4">
               <input name="foccupation" type="text" id="foccupation" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj2 = new ViewAppFormView();
                        $ret = $ViewAppFormObj2->showFather($aid);
                        foreach ($ret as $row) {
                            echo $row['occupation'];
                        }  
                    ?>" disabled >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="fposition" type="text" id="fposition" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj2 = new ViewAppFormView();
                        $ret = $ViewAppFormObj2->showFather($aid);
                        foreach ($ret as $row) {
                            echo $row['position'];
                        }  
                    ?>" disabled >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="faddress">Father's address</label>
        <!-- <div class="controls col-md-4">
               <input name="faddress" type="checkbox" id="faddress" class="form-check-input form-control-inline col-md-4" value="Yes" <?php if(isset($_POST['faddress'])) echo "checked='checked'"; ?> >
               <label class="form-check-label" for="faddress">Same as applicant's address</label>           
        </div>   -->
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fstreet">Street</label>
        <div class="controls col-md-4">
               <input name="fstreet" type="text" id="fstreet" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj4 = new ViewAppFormView();
                        $ret = $ViewAppFormObj4->showFatherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['street'];
                        }  
                    ?>" disabled>
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="ftownship">Township</label>
        <div class="controls col-md-4">
               <input name="ftownship" type="text" id="ftownship" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj4 = new ViewAppFormView();
                        $ret = $ViewAppFormObj4->showFatherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['township'];
                        }  
                    ?>" disabled>
                            
            </div> 
            <label class="control-label col-md-2" for="fcity">City</label>
        <div class="controls col-md-4">
               <input name="fcity" type="text" id="fcity" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj4 = new ViewAppFormView();
                        $ret = $ViewAppFormObj4->showFatherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['city'];
                        }  
                    ?>" disabled >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fzipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="fzipcode" type="text" id="fzipcode" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj4 = new ViewAppFormView();
                        $ret = $ViewAppFormObj4->showFatherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['zipcode'];
                        }  
                    ?>" disabled>
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="ftelephone">Telephone</label>
        <div class="controls col-md-4">
               <input name="ftelephone" type="text" id="ftelephone" class="form-control form-control-inline col-md-4"
               value="<?php
                        $ViewAppFormObj4 = new ViewAppFormView();
                        $ret = $ViewAppFormObj4->showFatherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['telephone'];
                        }  
                    ?>" disabled >
                            
            </div> 
            <label class="control-label col-md-2" for="fmobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="fmobile" type="text" id="fmobile" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj4 = new ViewAppFormView();
                        $ret = $ViewAppFormObj4->showFatherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['telephone'];
                        }  
                    ?>" disabled >
                         
        </div>  
    </div>    <br>
    
  
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mother's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mname">Name<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="mname" type="text" id="mname" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj3 = new ViewAppFormView();
                        $ret = $ViewAppFormObj3->showMother($aid);
                        foreach ($ret as $row) {
                            echo $row['name'];
                        } 
                    ?>" disabled >
                           
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="mnationality" type="text" id="mnationality" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj3 = new ViewAppFormView();
                        $ret = $ViewAppFormObj3->showMother($aid);
                        foreach ($ret as $row) {
                            echo $row['nationality'];
                        } 
                    ?>" disabled >
                         
            </div>
            <label class="control-label col-md-2" for="mcitizen">Citizenship<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="mcitizen" type="text" id="mcitizen" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj3 = new ViewAppFormView();
                        $ret = $ViewAppFormObj3->showMother($aid);
                        foreach ($ret as $row) {
                            echo $row['citizenship'];
                        } 
                    ?>" disabled >
                          
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mstatus">Status<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <?php
                        $ViewAppFormObj3 = new ViewAppFormView();
                        $ret = $ViewAppFormObj3->showMother($aid);
                        foreach ($ret as $row) {
                           
            ?>
            <label class="radio-inline"><input type="radio" name="mstatus" id="mliving" value="mliving" <?php if ($row['status'] == 'mliving')  echo ' checked="checked"';?> disabled>Living</label>
            <label class="radio-inline"><input type="radio" name="mstatus" id="mdecese" value="mdecese" <?php if ($row['status'] == 'mdecese')  echo ' checked="checked"';?> disabled>Decese</label>
                        <?php }?>              
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mage">Age</label>
        <div class="controls col-md-4">
               <input name="mage" type="text" id="mage" class="form-control form-control-inline col-md-4"  
               value="<?php
                        $ViewAppFormObj3 = new ViewAppFormView();
                        $ret = $ViewAppFormObj3->showMother($aid);
                        foreach ($ret as $row) {
                            echo $row['age'];
                        } 
                    ?>" disabled  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
    <label class="control-label col-md-2" for="moccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="moccupation" type="text" id="moccupation" class="form-control form-control-inline col-md-4"  
               value="<?php
                        $ViewAppFormObj3 = new ViewAppFormView();
                        $ret = $ViewAppFormObj3->showMother($aid);
                        foreach ($ret as $row) {
                            echo $row['occupation'];
                        } 
                    ?>" disabled  >
                            
            </div>  
            <label class="control-label col-md-2" for="mposition">Position</label>
        <div class="controls col-md-4">
               <input name="mposition" type="text" id="mposition" class="form-control form-control-inline col-md-4"  
               value="<?php
                        $ViewAppFormObj3 = new ViewAppFormView();
                        $ret = $ViewAppFormObj3->showMother($aid);
                        foreach ($ret as $row) {
                            echo $row['position'];
                        } 
                    ?>" disabled  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="maddress">Mother's address</label>
        <!-- <div class="controls col-md-4">
               <input name="maddress" type="checkbox" id="maddress" class="form-check-input form-control-inline col-md-4" value="Yes" <?php if(isset($_POST['maddress'])) echo "checked='checked'"; ?> >
               <label class="form-check-label" for="maddress">Same as applicant's address</label>           
        </div>   -->
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mstreet">Street</label>
        <div class="controls col-md-4">
               <input name="mstreet" type="text" id="mstreet" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj5 = new ViewAppFormView();
                        $ret = $ViewAppFormObj5->showMotherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['street'];
                        } 
                    ?>" disabled  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mtownship">Township</label>
        <div class="controls col-md-4">
               <input name="mtownship" type="text" id="mtownship" class="form-control form-control-inline col-md-4"  
               value="<?php
                        $ViewAppFormObj5 = new ViewAppFormView();
                        $ret = $ViewAppFormObj5->showMotherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['township'];
                        } 
                    ?>" disabled  >
                            
            </div> 
            <label class="control-label col-md-2" for="mcity">City</label>
        <div class="controls col-md-4">
               <input name="mcity" type="text" id="mcity" class="form-control form-control-inline col-md-4" 
               value="<?php
                        $ViewAppFormObj5 = new ViewAppFormView();
                        $ret = $ViewAppFormObj5->showMotherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['city'];
                        } 
                    ?>" disabled  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mzipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="mzipcode" type="text" id="mzipcode" class="form-control form-control-inline col-md-4"  
               value="<?php
                        $ViewAppFormObj5 = new ViewAppFormView();
                        $ret = $ViewAppFormObj5->showMotherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['zipcode'];
                        } 
                    ?>" disabled >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mtelephone">Telephone</label>
        <div class="controls col-md-4">
               <input name="mtelephone" type="text" id="mtelephone" class="form-control form-control-inline col-md-4"  
               value="<?php
                        $ViewAppFormObj5 = new ViewAppFormView();
                        $ret = $ViewAppFormObj5->showMotherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['telephone'];
                        } 
                    ?>" disabled  >
                            
            </div> 
            <label class="control-label col-md-2" for="mmobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mmobile" type="text" id="mmobile" class="form-control form-control-inline col-md-4"  
               value="<?php
                        $ViewAppFormObj5 = new ViewAppFormView();
                        $ret = $ViewAppFormObj5->showMotherAddress($aid);
                        foreach ($ret as $row) {
                            echo $row['mobile'];
                        } 
                    ?>" disabled >
                            
        </div>  
    </div>    <br>
    
<div class="container" >
    <div class="row">
      <h4>Guardian's Information </h4>
    </div>    
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="gstatus">Status<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <?php
            $ViewAppFormObj2 = new ViewAppFormView();
            $ret = $ViewAppFormObj2->showFather($aid);
            foreach ($ret as $row) {
               
            ?>
            <label class="radio-inline"><input type="radio" name="gstatus" value="father" id="father" <?php if ($row['guardian_status'] == 'father')  echo ' checked="checked"';?> disabled>Father</label>
            <label class="radio-inline"><input type="radio" name="gstatus" value="mother" id="mother" <?php if ($row['guardian_status'] == 'mother')  echo ' checked="checked"';?> disabled>Mother</label>
            <label class="radio-inline"><input type="radio" name="gstatus" value="other" id="other" <?php if ($row['guardian_status'] == 'other')  echo ' checked="checked"';?> disabled>Other</label>
            <?php //}?>      
            </div>
    </div>
    <?php 
        
            if ($row['guardian_status'] == 'other'){?> 
    <div id="guardianInfo">
    <div class="form-group ">
            <label class="control-label col-md-2" for="gname">Name<span class="help-inline">*</span></label>
                <div class="controls col-md-4">
                   <input name="gname" type="text" id="gname" class="form-control form-control-inline col-md-4" 
                   value="<?php 
                            $ViewAppFormObj6 = new ViewAppFormView();
                            $ret = $ViewAppFormObj6->showGuardian($aid);
                            foreach ($ret as $row) {
                                echo $row['name'];
                            }
                        ?>" disabled>
                     
                </div>
                
        </div>
        <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="gnationality" type="text" id="gnationality" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj6 = new ViewAppFormView();
                            $ret = $ViewAppFormObj6->showGuardian($aid);
                            foreach ($ret as $row) {
                                echo $row['nationality'];
                            }
                        ?>" disabled >
                            
            </div>
            <label class="control-label col-md-2" for="gcitizen">Citizenship<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="gcitizen" type="text" id="gcitizen" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj6 = new ViewAppFormView();
                            $ret = $ViewAppFormObj6->showGuardian($aid);
                            foreach ($ret as $row) {
                                echo $row['citizenship'];
                            }
                        ?>" disabled>
                          
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="guastatus">Status<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <?php 
                            $ViewAppFormObj6 = new ViewAppFormView();
                            $ret = $ViewAppFormObj6->showGuardian($aid);
                            foreach ($ret as $row) {
                                
                        ?>
            <label class="radio-inline"><input type="radio" name="guastatus" id="gliving" value="gliving" <?php if ($row['status'] == 'gliving')  echo ' checked="checked"';?> disabled>Living</label>
            <label class="radio-inline"><input type="radio" name="guastatus" id="gdecese" value="gdecese" <?php if ($row['status'] == 'gdecese')  echo ' checked="checked"';?> disabled>Decese</label>
                            <?php }?>          
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gage">Age</label>
        <div class="controls col-md-4">
               <input name="gage" type="text" id="gage" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj6 = new ViewAppFormView();
                            $ret = $ViewAppFormObj6->showGuardian($aid);
                            foreach ($ret as $row) {
                                echo $row['age'];
                            }
                        ?>" disabled >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
    <label class="control-label col-md-2" for="goccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="goccupation" type="text" id="goccupation" class="form-control form-control-inline col-md-4"
               value="<?php 
                            $ViewAppFormObj6 = new ViewAppFormView();
                            $ret = $ViewAppFormObj6->showGuardian($aid);
                            foreach ($ret as $row) {
                                echo $row['occupation'];
                            }
                        ?>" disabled >
                            
            </div>  
            <label class="control-label col-md-2" for="gposition">Position</label>
        <div class="controls col-md-4">
               <input name="gposition" type="text" id="gposition" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj6 = new ViewAppFormView();
                            $ret = $ViewAppFormObj6->showGuardian($aid);
                            foreach ($ret as $row) {
                                echo $row['position'];
                            }
                        ?>" disabled >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="gaddress">Guardian address</label>
        <!-- <div class="controls col-md-4">
               <input name="gaddress" type="checkbox" id="gaddress" class="form-check-input form-control-inline col-md-4" value="Yes" <?php if(isset($_POST['gaddress'])) echo "checked='checked'"; ?> >
               <label class="form-check-label" for="gaddress">Same as applicant address</label>           
        </div>   -->
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gstreet">Street</label>
        <div class="controls col-md-4">
               <input name="gstreet" type="text" id="gstreet" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj7 = new ViewAppFormView();
                            $ret = $ViewAppFormObj7->showGuardianAddress($aid);
                            foreach ($ret as $row) {
                                echo $row['street'];
                            }
                        ?>" disabled  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gtownship">Township</label>
        <div class="controls col-md-4">
               <input name="gtownship" type="text" id="gtownship" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj7 = new ViewAppFormView();
                            $ret = $ViewAppFormObj7->showGuardianAddress($aid);
                            foreach ($ret as $row) {
                                echo $row['township'];
                            }
                        ?>" disabled  >
                            
            </div> 
            <label class="control-label col-md-2" for="gcity">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="gcity" type="text" id="gcity" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj7 = new ViewAppFormView();
                            $ret = $ViewAppFormObj7->showGuardianAddress($aid);
                            foreach ($ret as $row) {
                                echo $row['city'];
                            }
                        ?>" disabled  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gzipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="gzipcode" type="text" id="gzipcode" class="form-control form-control-inline col-md-4"
               value="<?php 
                            $ViewAppFormObj7 = new ViewAppFormView();
                            $ret = $ViewAppFormObj7->showGuardianAddress($aid);
                            foreach ($ret as $row) {
                                echo $row['zipcode'];
                            }
                        ?>" disabled   >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gtelephone">Telephone</label>
        <div class="controls col-md-4">
               <input name="gtelephone" type="text" id="gtelephone" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj7 = new ViewAppFormView();
                            $ret = $ViewAppFormObj7->showGuardianAddress($aid);
                            foreach ($ret as $row) {
                                echo $row['telephone'];
                            }
                        ?>" disabled  >
                            
            </div> 
            <label class="control-label col-md-2" for="gmobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="gmobile" type="text" id="gmobile" class="form-control form-control-inline col-md-4" 
               value="<?php 
                            $ViewAppFormObj7 = new ViewAppFormView();
                            $ret = $ViewAppFormObj7->showGuardianAddress($aid);
                            foreach ($ret as $row) {
                                echo $row['mobile'];
                            }
                        ?>" disabled >
                            
        </div>  
    </div>
    </div>
      
    <?php }else{ ?>

        <div id="guardianInfo"></div> 

        <?php }
        }?> 
  </div>
  <br><hr>
    
</form>

<br>

</body>
</html>