<?php
    include "./db.php";

    //각 변수에 write.php에서 input name값들을 저장한다
    $username = $_POST['name'];
    $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $content = $_POST['content'];
    //$mqq = mq("alter table board auto_increment = 1"); //auto_increment 값 초기화
    if($username && $userpw && $title && $content){
        $sql = mq("insert into board(REG_ID,PW,TITLE,CONTENT,REG_DATE) values('".$username."','".$userpw."','".$title."','".$content."',NOW())"); 
        echo "<script> alert('글쓰기 완료되었습니다.'); location.href='./index.php';</script>";
    }else{
        echo "<script> alert('글쓰기에 실패했습니다.'); history.back();</script>";
    }
?>