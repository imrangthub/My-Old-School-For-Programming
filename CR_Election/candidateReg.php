
<div class="echo_display"> 
<?php

      if(isset($_POST['submit']))
       {
            mysql_connect('localhost','root','') or die(mysql_error());
            mysql_select_db('cr_election') or die(mysql_error());
  
            $fullname=$_POST['fullname'];
            $varsityID=$_POST['varsityID'];
            $referID=$_POST['referID'];
            $referenceID=$_POST['referenceID'];
            
            $varsityEmail=$_POST['varsityEmail'];
           	$password=$_POST['password'];
            $cell=$_POST['cell'];
            $gender=$_POST['gender'];
            $terms=$_POST['terms'];


            if($fullname!='' && $varsityID!='' && $referID!='' && $referenceID!=''  && $varsityEmail!='' && $password!=''&& $cell!=''&& $gender!='' &&$terms!='') 
            {
                $query=mysql_query("INSERT INTO candidate_reg (fullname,varsityID,referID,referenceID,varsityEmail,password,cell,gender,terms) VALUES('{$fullname}','{$varsityID}','{$referID}','{$referenceID}','{$varsityEmail}','{$password}','{$cell}','{$gender
              }','{$terms}') ") or die(mysql_error());
                if($query) 
                { 
                  


                     echo '<img src="img/circle-ok.png">Successfully Registrated !'."<p>"."Dear ".$fullname ." !". " Please Click"." <b style=color:#EC971F;>"."Login "."</b>"."</p>";

}
               else 
               {
                    echo'Vaules are not inserted'; 
               }
            } 
           else 
           { 
                echo'Your Must Insert all values';
           }
         }
      
?>
</div>	
<!--<div class="modal fade" id="#" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">

       <div class="modal-header" style="background-color:#C12E2A;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Candidate Registration Form</h4>
        </div>
        <div class="modal-body ">

          
            
          
        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
      <input type="submit" name="submit" id="submit" value="Submit">
        </div>
     
      </div>
    </div>
</div>-->