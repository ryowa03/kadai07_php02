<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            /* padding: 10px; */
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

  


    <form method="post" action="insert.php">
       
        
                <legend>フリーアンケート</legend>
                <fieldset>
        <div class="jumbotron">
                <label>年齢：<input type="text" name="age"></label><br>
                <label>性別：<input type="text" name="sex"></label><br>
                <label>名前：<input type="text" name="name"></label><br>
                <label>現職：<input type="text" name="job"></label><br>
         </div>
         <div>
                <label><textArea name="career" rows="6" cols="40"></textArea></label><br>
                <label><textArea name="coment" rows="2" cols="40"></textArea></label><br>
                <br>
                <label><textArea name="contact" rows="2" cols="40"></textArea></label><br>

                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>


</body>

</html>
