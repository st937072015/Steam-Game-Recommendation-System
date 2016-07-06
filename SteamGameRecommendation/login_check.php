<?php 



if ($_POST['lo_username'] == null && !$_POST['lo_password'] == null) {
	
echo 'username_empty';


}else if ($_POST['lo_password'] == null && !$_POST['lo_username'] == null) {
	

echo 'password_empty';


}else if ($_POST['lo_username']  == null && $_POST['lo_password']  == null ) {

echo 'all_empty';

}else{


echo 'pass';


}







?>