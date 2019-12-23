
<div class="echo_display"> 
<?php
   
      if(isset($_POST['submitt']))
       {
            mysql_connect('localhost','root','') or die(mysql_error());
            mysql_select_db('cr_election') or die(mysql_error());
  
          
            $varsityIDD=$_POST['varsityIDD'];
            $varsityEmaill=$_POST['varsityEmaill'];
            
  
    $fetch=mysql_query("select varsityIDD from voter_reg where varsityIDD='$varsityIDD' and varsityEmaill='$varsityEmaill'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
          $fullnamee=$_POST['fullnamee'];
          $celll=$_POST['celll'];
            $genderr=$_POST['genderr'];
            $passwordd=$_POST['passwordd'];
            $termss=$_POST['termss'];

    $sql="Update voter_reg set fullnamee='$fullnamee',celll='$celll',genderr='$genderr',passwordd='$passwordd',termss='$termss' where varsityIDD='$varsityIDD' ";
$query=  mysql_query($sql);
if($query){
     echo '<img src="img/circle-ok.png">Successfully Registrated !'."<p>"."Dear ".$fullnamee ." !". " Please Click"." <b style=color:#EC971F;>"."Login "."</b>"."</p>";
}  else {
echo "!!!Sorry Your data is not uploaded";    
}
    }
  
  else{
           echo '<img src="img/cross.png">'." <b style=color:#C9302C;>"."E-mail and ID doesn't matched !"."</b>" ."<p>". "Please try again !"." <b style=color:#EC971F;>"."Registration "."</b>"."</p>";
         }
         } 
         
      
?>
</div>  