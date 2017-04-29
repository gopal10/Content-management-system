<? php
 if($_GET[foldername] != NULL) // i have a method get form 
{ 
$dir = 'C:\\gopal\\'. $_GET[foldername]; //see the double \\ 
if(!is_dir($dir)) 
{ 
mkdir($dir); 
echo  "created!"; 
} 
}
