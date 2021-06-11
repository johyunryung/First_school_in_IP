<meta charset="UTF-8">
<?php
   include('./db_conn.php');
   $sql = "SELECT title, categorie, content, date FROM qna WHERE answer is null";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo .$row["title"]."&nbsp".$row["categorie"]. $row["content"]. $row["date"]. "<br><br>";
    }
   }else{
    echo "질문이 없습니다.";
   }
   mysqli_close($conn);
?>
<!-- 
<html>
    <head>
        <title>첫등교는 IP로!</title>
    </head>
    <body>
        <table class = "list-table">
            <thead>
                <tr>
                    <td width = "70">번호</th>
                    <th width="500">제목</th>
                    <th width="120">카테고리</th>
                    <th width="100">작성일</th>
                </tr>
            </tread>
            <?php
                $sql = "select * from qna order by num desc limit 0, 6";
                $title = $qna["title"];
            ?>
            <tbody>
                <tr>
                    <td width="70"><?php echo $qna['num']; ?></td>
                    <td width="500"><a href=""><?php echo $qna;?></a></td>
                    <td width="120"><?php echo $qna['title']?></td>
                    <td width="100"><?php echo $qna['categorie']?></td>
                    <td width="100"><?php echo $qna['date']; ?></td>
                </tr>
            </tbody>
        </table>
    /*수정버튼, 리스트 확인 못함*/
    </body>
</html>
-->