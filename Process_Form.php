<?php

// include MySQL-processing classes

require_once 'mysql.php';

try{

// connect to MySQL

$db=new MySQL(array
('host'=>'localhost','user'=>'user','password'=>'password',
'database'=>'database'));

$searchterm=$db->escapeString($_GET['searchterm']);

$result=$db->query("SELECT firstname, lastname,comments FROM
USERS WHERE MATCH(firstname,lastname,comments) AGAINST
('$searchterm')");

if(!$result->countRows()){

echo '<div class="maincontainer"><h2>No results were found. Go
back and try a new search.</h2></div>'."n";

}

else{

// display search results

echo '<div class="maincontainer"><h2>Your search criteria
returned '.$result->countRows().' results.</h2>'."n";

while($row=$result->fetchRow()){

echo '<div class="rowcontainer"><p><strong>First Name:
</strong>'.$row['firstname'].'<p><p><strong>Last Name:
</strong>'.$row['lastname'].'</p><p><strong>Comments:
</strong>'.$row['comments'].'</p></div>'."n";

}

}

echo '</div>';

}

catch(Exception $e){

echo $e->getMessage();

exit();

}

?>