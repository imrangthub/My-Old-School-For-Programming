
		<div class="jumbotron" style="text-align:center; margin-bottom:0; margin-top:-20px;">
                <div class="container">


<div class="row">
											<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading"> <b>&nbsp Login</b></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ECLogin"><span class="glyphicon glyphicon-log-in"></span> Election Commision</button>
    										<!--<b>ELECTION COMMISION</b>-->
  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Only for Election Commision</p> </div>
								</div>
											</div>

											

											
											
												</div>


	<!--<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search shopping mall" style="height:50px;" >
                    <span class="input-group-addon">
                        <button type="submit" class="btn btn-labeled btn-primary">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            
        </div>
	</div>-->
</div>
			</div>
					

						<div class="page-header no-margin no-padding fixed-prblm" style="margin-top:10px;">
							<div class="container">

										<div class="row">
											<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading"> <b> &nbsp Voter</b></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
    										  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#VoterLogin"><span class="glyphicon glyphicon-log-in"></span> Login</button>
    										      										  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#VoterReg"><span class="glyphicon glyphicon-user"></span> Registration</button>

 <?php 
include("VoterReg.php");
?>
  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;"> &nbsp Voter can login and registration here</p></div>
								</div>
											</div>
										

										<div class="col-md-6">
								<div class="panel panel-info">
									<div class="panel-heading">  <b>&nbsp Candidate</b></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
    										  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#CandidateLogin"><span class="glyphicon glyphicon-log-in"></span> Login</button>
    										      										  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#CandidateReg"><span class="glyphicon glyphicon-user"></span> Registration</button>

 <?php 
include("CandidateReg.php");
?>

  									</div><!--</a>-->
  										<div class="panel-footer"> <p style="text-align:center;color:gray;"> &nbsp Candidate can login and registration here</p></div>
								</div>
											</div>
											</div>
											</div>
											</div>
										
							

											<!--<div class="col-md-3">
								<div class="panel panel-danger">
									<div class="panel-heading">&nbsp Login</div>-->
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<!--<div class="panel-body" style="text-align:center;">
  									  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Candidate</button>

    										<!--<b>CANDIDATE</b>-->
  									<!--</div><!--</a>-->

  										<!--<div class="panel-footer"> &nbsp</div>
								</div>
											</div>
									
					

											<div class="col-md-3">	
								<div class="panel panel-info">
									<div class="panel-heading">&nbsp Registration</div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<!--<div class="panel-body" style="text-align:center;">
  									  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Voter</button>

    										<!--<b>VOTER</b>-->
  									<!--</div><!--</a>-->
  										<!--<div class="panel-footer">&nbsp</div>
								</div>
											</div>
						

											<div class="col-md-3">
								<!--<div class="panel panel-warning">
									<div class="panel-heading"> &nbsp Registration</div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<!--<div class="panel-body" style="text-align:center;">
  									 <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Candidate</button>
    										<!--<b>CANDIDATE</b>-->
  									<!--</div><!--</a>-->
  									<!--	<div class="panel-footer">&nbsp</div>
								</div>
											</div>-->

<!--ELECTION COMMISION LOGIN MODAL-->
<div class="modal fade" id="ECLogin" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
        <div class="modal-header" style="background-color:#265A88;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Election Commision Login</h4>
        </div>
        <div class="modal-body ">
          <form action="#">


				<div class="row">
          	<div class="col-md-4">
          		<label for="idnumber">University ID</label>
          	</div>
          		<div class="col-md-8">
          			<input type="text" name="#" placeholder="132-15-2713">
          		</div>

          		</div><hr/>


          		<div class="row">
          	<div class="col-md-4">
          		<label for="password">Password</label>
          	</div>
          		<div class="col-md-8">
          			<input type="password" name="#" placeholder="Type password">
          		</div>

          		</div>

          
        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
          <input type="submit" class="btn btn-primary" value="Login">
        </div>
        </form>
      </div>
    </div>
</div>


<!--VOTER LOGIN MODAL-->
<div class="modal fade" id="VoterLogin" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
        <div class="modal-header" style="background-color:#479D47;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Voter Login</h4>
        </div>
        <div class="modal-body ">
                  <form method="post" name="login" action="loginVot.php">



				<div class="row">
          	<div class="col-md-4">
          		<label for="idnumber">University ID</label>
          	</div>
          		<div class="col-md-8">
          			<input type="text" name="varsityIDD" placeholder="132-15-2713">
          		</div>

          		</div><hr/>


          		<div class="row">
          	<div class="col-md-4">
          		<label for="password">Password</label>
          	</div>
          		<div class="col-md-8">
          			<input type="password" name="passwordd" placeholder="Type password">
          		</div>

          		</div>

          
        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
          <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login" />
        </div>
        </form>
      </div>
    </div>
</div>

<!--THIS IS VOTER REGISTRATION MODAL-->

<div class="modal fade" id="VoterReg" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
                  <form name="" method="post" action="index.php" autocomplete="off">

       <div class="modal-header" style="background-color:#31B0D5;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Voter Registration Form</h4>
        </div>
        <div class="modal-body ">

          
              <div class="row">
            <div class="col-md-4">
              <label for="FullName">Full Name</label>
            </div>
              <div class="col-md-8">
                <input type="text" name="fullnamee" required placeholder="Your Name">
              </div>

              </div><hr/>


        <div class="row">
            <div class="col-md-4">
              <label for="idnumber">Your University ID</label>
            </div>
              <div class="col-md-8">
                <input type="text" name="varsityIDD" required placeholder="000-00-0000">
              </div>
              </div><hr/>




              <div class="row">
            <div class="col-md-4">
              <label for="Email">University Email</label>
            </div>
              <div class="col-md-8">
                <input type="email" name="varsityEmaill" required placeholder="mehedi2713@diu.edu.bd">
              </div>

              </div><hr/>



             


              <div class="row">
            <div class="col-md-4">
              <label for="cell">Cell Number</label>
            </div>
              <div class="col-md-8">
                <input type="text" name="celll" required placeholder="01815526607">
              </div>

              </div><hr/>


              <div class="row">
            <div class="col-md-4">
              <label for="gender"> Gender </label>
            </div>
              <div class="col-md-8">
                Male <input type="radio" name="genderr" required value="Male">
                Female <input type="radio" name="genderr" required value="Female">
              </div>

              </div><hr/>

         <div class="row">
            <div class="col-md-4">
              <label for="password">Password</label>
            </div>
              <div class="col-md-8">
                <input type="password" name="passwordd" required placeholder="Type password">
              </div>

              </div><hr/>



          <div class="row">
            <div class="col-md-4">
              <label for="terms">Terms and Conditions</label>
            </div>
              <div class="col-md-8">
                <input type="checkbox" name="termss" required value="Yes"><p>I agree all terms and conditions <a href="#">Terms and conditions</a></p>
              </div>

              </div>
          
        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
      <input type="submit" name="submitt" id="submitt" value="Submit" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
</div>
   

   

<!--CANDIDATE LOGIN MODAL-->
<div class="modal fade" id="CandidateLogin" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
        <div class="modal-header" style="background-color:#EB9316;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Candidate Login</h4>
        </div>
        <div class="modal-body ">

        <form method="post" name="login" action="loginCan.php">
          


				<div class="row">
          	<div class="col-md-4">
          		<label for="idnumber">University ID</label>
          	</div>
          		<div class="col-md-8">
          			<input type="text" name="varsityID" placeholder="132-15-2713">
          		</div>

          		</div><hr/>


          		<div class="row">
          	<div class="col-md-4">
          		<label for="password">Password</label>
          	</div>
          		<div class="col-md-8">
          			<input type="password" name="password" placeholder="Type password">
          		</div>

          		</div>

          
        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
       <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login" />
          
        </div>
        </form>
      </div>
    </div>
</div>


<!-- THIS IS THE CANDIDATE REGISTRATION MODAL-->






<div class="modal fade" id="CandidateReg" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
               		<form name="" method="post" action="index.php" autocomplete="off">

       <div class="modal-header" style="background-color:#C12E2A;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Candidate Registration Form</h4>
        </div>
        <div class="modal-body ">

          
          		<div class="row">
          	<div class="col-md-4">
          		<label for="FullName">Full Name</label>
          	</div>
          		<div class="col-md-8">
          			<input type="text" name="fullname" required placeholder="Your Name">
          		</div>

          		</div><hr/>


				<div class="row">
          	<div class="col-md-4">
          		<label for="idnumber">Your University ID</label>
          	</div>
          		<div class="col-md-8">
          			<input type="text" name="varsityID" required placeholder="000-00-0000">
          		</div>
          		</div><hr/>


                <div class="row">
            <div class="col-md-4">
              <label for="idrefe">Reference-1 ID</label>
            </div>
              <div class="col-md-8">
                <input type="text" name="referID" required placeholder="000-00-0000">
              </div>

              </div><hr/>

                <div class="row">
            <div class="col-md-4">
              <label for="idrefee">Reference-2 ID</label>
            </div>
              <div class="col-md-8">
                <input type="text" name="referenceID" required placeholder="000-00-0000">
              </div>

              </div><hr/>

<!--
<label>Upload Image File:</label><br/>
<input name="userImage" type="file">-->

          	

          		<div class="row">
          	<div class="col-md-4">
          		<label for="Email">University Email</label>
          	</div>
          		<div class="col-md-8">
          			<input type="email" name="varsityEmail" required placeholder="mehedi2713@diu.edu.bd">
          		</div>

          		</div><hr/>



          		<div class="row">
          	<div class="col-md-4">
          		<label for="password">Password</label>
          	</div>
          		<div class="col-md-8">
          			<input type="password" name="password" required placeholder="Type password">
          		</div>

          		</div><hr/>



          		<div class="row">
          	<div class="col-md-4">
          		<label for="cell">Cell Number</label>
          	</div>
          		<div class="col-md-8">
          			<input type="text" name="cell" required placeholder="01815526607">
          		</div>

          		</div><hr/>


          		<div class="row">
          	<div class="col-md-4">
          		<label for="gender"> Gender </label>
          	</div>
          		<div class="col-md-8">
          			Male <input type="radio" name="gender" required value="Male">
          			Female <input type="radio" name="gender" required value="Female">
          		</div>

          		</div><hr/>


          <div class="row">
          	<div class="col-md-4">
          		<label for="terms">Terms and Conditions</label>
          	</div>
          		<div class="col-md-8">
          			<input type="checkbox" name="terms" required value="Yes"><p>I agree all terms and conditions <a href="#">Terms and conditions</a></p>
          		</div>

          		</div>
          
        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
			<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
</div>
   
