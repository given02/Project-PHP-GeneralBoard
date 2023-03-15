<?php
include "./db.php";

$bno = $_GET['idx'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$sql = mq("update board set REG_ID='".$username."',PW='".$userpw."',TITLE='".$title."',CONTENT='".$content."' where IDX='".$bno."'"); ?>

<script type="text/javascript">alert("수정되었습니다."); location.href="./read.php?idx=<?php echo $bno;?>";</script>