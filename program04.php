<!DOCTYPE HTML> 

<html>
<head>
   <meta name="author" content="Mr. Jonathan Sparks" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
   <link href="style04.css" rel="stylesheet" type="text/css" />
   <title>Data Validation</title>
   <?php

      require_once("functions04.php");
     
   ?>
</head>
<body>
   <h1>Data Validation</h1>
   <h2>This page will let you check if your data is valid.</h2>
   <form name="data_form" id="data_form" action="program04.php" method="post">
      <div class="customer_form">
         <label>What is your data? 
            <input type="text" id="tbx_data" name="tbx_data" />
         </label>
         <label>What type of data is this? 
            <select name="ddl_type" id="ddl_type">
               <?php
                  require("options04.html");
               ?>
            </select>
         </label>
         <input type="submit" value="Validate Data" />
      </div>
   </form>
   
   <?php
      @$validationType = $_POST["ddl_type"];
      @$validationData = $_POST["tbx_data"];
      
      switch($validationType)
      {
	     case USERNAME:
	          if(usernameValid($validationData))
	             printValidMessage(USERNAME);
	          else     
	             printInvalidMessage(USERNAME);
	          break;
	     case EMAIL:
	          if(emailValid($validationData))
	             printValidMessage(EMAIL);
	          else     
	             printInvalidMessage(EMAIL);
	          break;
	     case PHONE:
	          if(phoneValid($validationData))
	             printValidMessage(PHONE);
	          else     
	             printInvalidMessage(PHONE);
	          break;
	     case ZIP:
	          if(zipValid($validationData))
	             printValidMessage(ZIP);
	          else     
	             printInvalidMessage(ZIP);
	          break;                     
	  }
   
   ?>

</body>
</html>