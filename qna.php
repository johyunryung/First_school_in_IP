<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>QnA</title>
</head>
<body>
  <header>
        <form action="src/db_upload.php" method="post">
          <table width="95%">
            <tr class="content">
              <td>제목</td>
              <td><input id="title" type="text" name="title" size="50" placeholder="제목입니다" required>
              </td>
            </tr>
            <tr class="content">
              <td>카테고리</td>
              <td><input id="categorie" type="text" name="categorie" size="50" placeholder="카테고리입니다." required>
              </td>
            </tr>
            <tr class="content">
              <td>내용</td>
              <td><input id="content" type="text" name="content" size="50" placeholder="내용입니다." required>
              </td>
            </tr>
          </table>
          <input type="submit" class="apply" value="아라아라" onclick="location.href='submitaction.php'">
        </form>
      </div>
</body>

</html>