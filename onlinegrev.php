

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
	


 <?php include("includes/header.php"); ?>
<tr>
    <td><table width="949" border="0" cellpadding="0" cellspacing="0">
                        <tr>
              <td><table width="949" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="200" valign="top"  class="bg_left">
                    <table width="209" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td valign="top"><?php include("includes/left.php"); ?></td>
                        </tr>
                    </table></td>
                    <td width="733" valign="top">
                    
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        
                        <tr>
                          <td valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              
                              <tr>
                                <td height="30" class="pagehead"> Grievance Form</td>
                              </tr>
                              <tr>
                                <td valign="top" class="content1"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
									   
                                   <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Grievance Form</h2>
                    </div>
                    <p>Online Grievance Redressal System for Colleges is an initiative by AICTE to ensure students, parents and staff members can send their queries/complaint/grievance directly to college and get it redressed. </p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control">
                        </div>
						<div class="form-group">
							<label>Registering as </label> </br> 
                            <input type="radio" id="Student" name="Registering as" value="Student">
  <label for="Student">Student</label><br>
  <input type="radio" id="Parent" name="Registering as" value="Parent">
  <label for="Parent">Parent</label><br>
  <input type="radio" id="Staff" name="Registering as" value="Staff">
  <label for="Staff">Staff</label>
                        </div>
						 <div class="form-group">
                            <label>Query </label>
                            <input type="text" name="Query" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
											    </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  
                                </table></td>
                              </tr>
                              <tr>
                                <td class="content1">&nbsp;</td>
                              </tr>
                              
                              <tr>
                                <td></td>
                              </tr>
                              
                          </table></td>
                        </tr>
                    </table>
                    
                    
                    </td>
                  </tr>
              </table></td>
            </tr>
        </table>    <?php include("includes/footer.php"); ?>

























    
</body>
</html>


 
      
























