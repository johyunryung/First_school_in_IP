<meta charset="UTF-8">
<?php
   include('./db_conn.php');

   $sql = "SELECT title, categorie, content, date FROM qna WHERE answer is null";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h13>'.$row['title'].'<br></h3>';
        echo '<h13>'.$row['categorie'].'<br></h3>';
        echo '<h13>'.$row['content'].'<br></h3>';
        echo '<h13>'.$row['date'].'<br><br></h3>';
    }
   }else{
    echo "질문이 없습니다.";
   }
   mysqli_close($conn);
?>