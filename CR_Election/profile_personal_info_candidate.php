<table style="border:#CCCCCC solid 1px; text-align:center;" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; color:#FFFFFF; background:#337AB7;">
<tr>

<td>Candidate Name</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID=$login_session";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr >
        
        <td class="bg-info" style="font-family:Verdana; padding:10px; font-size:20px;color:#333;"><?php echo $data[1]?></td>
   


    </tr>
    
    
   
    <?php }?>
    
    <tr>

<td style="background:#337AB7; color:#fff; font-size:18px;">University ID</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID=$login_session";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-success">
        
        <td class="bg-info" style="font-family:Verdana; padding:10px; font-size:20px; color:#333;"><?php echo $data[2]?></td>
   
		 


    </tr>
    
    
   
    <?php }?>
    <tr>

<td style="background:#337AB7; color:#fff; font-size:18px;">Reference ID: 1</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID=$login_session";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-success">
        
        <td class="bg-info" style="font-family:Verdana; padding:10px; font-size:20px; color:#333;"><?php echo $data[3]?></td>
   
		 


    </tr>
    
    
   
    <?php }?>
    <tr>

<td style="background:#337AB7; color:#fff; font-size:18px;">Reference ID: 2</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID=$login_session";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-success">
        
        <td class="bg-info" style="font-family:Verdana; padding:10px; font-size:20px; color:#333;"><?php echo $data[4]?></td>
   
		 


    </tr>
    
    
   
    <?php }?>
    		  

	<tr>

<td style="background:#337AB7; color:#fff; font-size:18px;">Candidate Email</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID=$login_session";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-success">
        
        <td class="bg-info" style="font-family:Verdana; padding:10px; font-size:20px; color:#333;"><?php echo $data[5]?></td>
   
		 


    </tr>
    
    
   
    <?php }?>
    <tr>

<td style="background:#337AB7; color:#fff; font-size:18px;">Gender</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID=$login_session";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-success">
        
        <td class="bg-info" style="font-family:Verdana; padding:10px; font-size:20px; color:#333;"><?php echo $data[8]?></td>
   
		 


    </tr>
    
    
   
    <?php }?>
    
		 
</table>