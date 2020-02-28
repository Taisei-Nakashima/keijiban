<!DOCTYPE html>
<html lang="ja">

<head>
<meta charaset ="UTF-8">
<title>任意</title>
<link rel="stylesheet" type="text/css" href="style@.css">
</head>


<header>
  <div class="logo">
    <img src="4eachblog_logo.jpg">
  </div>
  <div class="header_list">
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
    </div>
</header>
<body>
  <main>
    <div class="main-container">
      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <div class="form_box">
            <h2>入力フォーム</h2>
            <form method="post" action="insert.php">
              <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
              </div>

              <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
              </div>

               <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
              </div>

              <div>
                <input type="submit" class="submit" value="投稿する">
              </div>
            </form>
        </div>
        <div class="kiji_box">
<?php
          
          mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=nakashima;host=localhost;","root","mysql");
$stmt =$pdo->query("select*from 4each_keijiban");
          while($row=$stmt->fetch()){
             
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo"<div class='handlename'>posted by".$row['handlename']."</div>";
            echo"</div>";
            echo"</div>";
            }
?>
          </div>
      </div>
        <div class="right">
                <h1>人気の記事</h1>
                <ul class="right_list">
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                       
                <h1>オススメリンク</h1>
                <ul class="right_list">
                    <li>インターノウス</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                
                <h1>カテゴリ</h1>
                <ul class="right_list">
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
              
      </div>
    </div>
  </main>

</body>

    

 <footer>
        copyright©　internous | 4each blog the with A to Z about programing.
        
</footer>
</html>

