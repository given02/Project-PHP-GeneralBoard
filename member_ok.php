<?php
    include "./db.php";
    include "./password.php";
    
	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$address = $_POST['address'];
	$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['emadress'];

    $sql = mq("insert into member (id,pw,name,address,sex,email,reg_date) values('".$userid."','".$userpw."','".$username."','".$address."','".$sex."','".$email."',NOW())");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.'); location.href="./login.php"; </script>