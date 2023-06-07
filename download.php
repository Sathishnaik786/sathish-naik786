<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set('display_errors',1);
        ini_set('display_startup_errors',1);
        error_reporting(E_ALL);

	if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $birthday=$_POST['birthday'];
    $mail=$_POST['mail'];
	$tele=$_POST['tele'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$state=$_POST['state'];
	$country=$_POST['country'];
        $hobbies=$_POST['hobbies'];
	$pe=$_POST['pe'];
        $comment=$_POST['comment'];

    echo " $name <br>";
    echo "$birthday <br>";
    echo "$mail <br>";
	echo "$tele <br>";
	echo "$gender <br>";
	echo "$address <br>";
	echo "$city <br>";
	echo "$pincode <br>";
	echo "$state <br>";
	echo "$country <br>";
        print_r($hobbies) ;echo "<br>";
        print_r($pe) ;echo "<br>";
	
        echo "$comment <br>";

        $file=fopen("/Desktop/$name".".pdf","w");
        fwrite($file,"Name : $name\n");
        fwrite($file,"DATE OF BIRTH : $id\n");
        fwrite($file,"EMAIL ID : $mail\n");
	    fwrite($file,"MOBILE NUMBER: $tele\n");
	    fwrite($file,"GENDER: $gender\n");
	    fwrite($file,"ADDRESS: $address\n");
	    fwrite($file,"CITY: $city\n");
	    fwrite($file,"PIN CODE: $pincode\n");
	    fwrite($file,"STATE: $state\n");
	    fwrite($file,"COUNTRY: $country\n");
            fwrite($file,"Subjects : ");
            foreach ($hobbies as $num=>$hobbies){
                fwrite($file,"$HOBBIES ,");
            }
	    fwrite($file,"\n");
            foreach ($pe as $num=>$pe){
                fwrite($file,"$PROGRAMMING_EXPIRENCE ,");
            }
            fwrite($file,"\n");
            fwrite($file,"Comment : \n$comment\n");
        fclose($file);
        
          <a href="/Desktop/$name.pdf" download="$name.pdf"> <button> SUBMIT </button></a>";
          <a href="mailto:$mail">Send mail</a>";
        }
	?>
</body>
</html>
