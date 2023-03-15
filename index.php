<?php include "./db.php"; ?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>자유게시판</title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
  <div id="board_area"> 
    <h1>자유게시판</h1>
    <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
    <?php isLogin(); ?>
      <table class="list-table">
        <thead>
          <tr>
            <th width="70">번호</th>
            <th width="500">제목</th>
            <th width="120">글쓴이</th>
            <th width="100">작성일</th>
            <th width="100">조회수</th>
          </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = mq("select * from board order by idx desc limit 0,5"); 
          while($board = $sql->fetch_array())
          {
            //title변수에 DB에서 가져온 title을 선택
            $title=$board["TITLE"]; 
            if(strlen($title)>30)
            { 
              //title이 30을 넘으면 ...표시
              $title=str_replace($board["TITLE"],mb_substr($board["TITLE"],0,30,"utf-8")."...",$board["TITLE"]);
            }
        ?>
        <tbody>
          <tr>
            <td width="70"><?php echo $board['IDX']; ?></td>
            <td width="500"><a href="./read.php?idx=<?php echo $board["IDX"];?>"><?php echo $title;?></a></td>
            <td width="120"><?php echo $board['REG_ID']?></td>
            <td width="100"><?php echo $board['REG_DATE']?></td>
            <td width="100"><?php echo $board['HIT']; ?></td>
          </tr>
        </tbody>
        <?php 
          } 
        ?>
      </table>
      <div id="write_btn">
        <a href="./write.php"><button>글쓰기</button></a>
      </div>
  </div>
</body>
</html>