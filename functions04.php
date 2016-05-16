<?php
	// Constant variables
	define("USERNAME", 1);
	define("EMAIL", 2);
	define("PHONE", 3);
	define("ZIP", 4);
			
	// Validate if username starts with a letter and can have letters numbers, 
	// periods and underscores
	function usernameValid($validationData)
	{
		return preg_match('/^[a-zA-Z][a-zA-Z0-9\._]*$/', $validationData);
	}
			
	// Validate if email address consists of a valid username followed by a 
	// @ symbol followed by a letter and can have letters numbers, periods and 
	// underscores and end with either a .com, .edu, or .gov
	function emailValid($validationData)
	{
		return preg_match('/^[a-zA-Z][a-zA-Z0-9\._]*@[a-zA-Z][a-zA-Z0-9\._]*(.com|.gov|.edu)$/', $validationData);
	}
			
	// Validate if phone number has format (###)###-####
	function phoneValid($validationData)
	{
		return preg_match('/^\([0-9]{3}\)[0-9]{3}\-[0-9]{4}$/', $validationData);
	}
			
	// Validate if zip code is USA or Canada valid zip code 
	function zipValid($validationData)
	{
		return preg_match('/^[0-9]{5}$/', $validationData) OR 
			   preg_match('/^[0-9]{5}\-[0-9]{4}$/', $validationData) OR 
			   preg_match('/^[a-zA-Z][0-9][a-zA-Z]\s[0-9][a-zA-Z][0-9]$/', $validationData);
	}
			
	// Print message that shows the input is valid
	function printValidMessage($dataTypeValue)
	{
		switch($dataTypeValue)
		{
			case USERNAME: printf('<script type="text/javascript">');
						   printf('window.alert("The username is VALID!")');
						   printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
			case EMAIL:    printf('<script type="text/javascript">');
						   printf('window.alert("The e-mail is VALID!")');
						   printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
			case PHONE:    printf('<script type="text/javascript">');
						   printf('window.alert("The phone number is VALID!")');
						   printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
			case ZIP:      printf('<script type="text/javascript">');
						   printf('window.alert("The zip code is VALID!")');
						   printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
		}
	}
			
	// Print message that shows the input is invalid
	function printInvalidMessage($dataTypeValue)
	{
		switch($dataTypeValue)
		{
			case USERNAME: printf('<script type="text/javascript">');
						   printf('window.alert("The username is NOT VALID!\nIt must start with a letter and can have letters, numbers, periods, and underscores.")');
						   printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
			case EMAIL:    printf('<script type="text/javascript">');
						   printf('window.alert("The e-mail is NOT VALID!\nExample: john_smith1@example.com, john.smith@example.edu, johnsmith2@example.gov")');
						   printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
			case PHONE:    printf('<script type="text/javascript">');
						   printf('window.alert("The phone number is NOT VALID!\nFormat: (###)###-####")');
						   printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
			case ZIP:      printf('<script type="text/javascript">');
						   printf('window.alert("The zip code is NOT VALID!\nIt must be either USA or Canada valid zip code format")');
					       printf('</script>');
						   printf('<a href="http://csweb/cs368/Rahardja_Alfin/index.html" class="button">Back to Index</a>');
						   break;
		}
	}
?>