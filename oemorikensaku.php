<!DOCTYPE html>
<html lang="ja">
<h1>検索</h1>
<head>
    <meta charset ="utf-8">
</head>
<body>
   
    <form action="" method="post">
        <table>
        <tr>
            <td>
            <label>キーワードを入力(ひらがなで入力)：</label>
            </td>
            <td><input type="text" name="keyword"></td>
        </tr>
        <tr>
            <td>
            <label>検索位置</label>
            </td>
            <td>
            <input type="text" name="r" list="range">
            <datalist id="range">
            <option value="含む">含む</option>
            <option value="前方一致">前方一致</option>
            <option value="後方一致">後方一致</option>
            </td>
            <!--<input type="submit" name="sr">-->
        </tr>
        </table>
        <!--<p>
            <label>協力プレイ</label>
            <input type="text" name="m" list="mostly">
            <datalist id="mostly">
            <option value="すべて">すべて</option>
            <option value="協力限定お題">協力限定お題</option>
            <input type="submit" name="coo">
        </p>-->
        <p>
            <input type="submit" name="choose" value="検索">
        </p>
        <p>
            <input type="submit" name="lo" value="ログアウト">
        </p>
        
    </form>
    <?php
     #セッション使用の宣言
     session_start();
    try{
       
        #セッションデータを格納し、
        if(!isset($_SESSION["login"])){
            header('Location:./loginform.php');
            exit;

        }
        #ログアウトボタンかを判定
        if($_POST['lo']){
            session_destroy();
            header('Location:./loginform.php');
            exit;
        }
        $db =new PDO('mysql:dbname=test;host=localhost;port=8889;charset=utf8','root','root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #echo "接続成功";
        if (isset($_POST['keyword'])){
            $sql="select * from odai where odaiHiragana like :keyword;";
            $stmt = $db->prepare($sql);
            if($_POST['r']=='前方一致'){
                $stmt->bindValue(':keyword', $_POST['keyword'].'%');
            }
            elseif($_POST['r']=='後方一致'){
                $stmt->bindValue(':keyword', '%'.$_POST['keyword']);
            }
            else{
                $stmt->bindValue(':keyword', '%'.$_POST['keyword'].'%');
            }
        }
        else{
            $sql="select * from odai;";
            $stmt = $db->prepare($sql);
            
        }
        
            $stmt->execute();
            #echo "お題取得";

            //レコード件数取得
            $row_count = $stmt->rowCount();
            #echo $row_count;
            while($row = $stmt->fetch()){
		    $rows[] = $row;
	    }
        #echo "ループ";
        //データベース接続切断
	    $dbh = null;
        #echo "切断"; 
    
    ?>
    <!--border='1'は枠の太さ　0になったら枠の表示は無し-->
    <table border='1'>
    <tr><td>ID</td><td>odaiKanji</td><td>odaiHiragana</td></tr>
    <?php
        foreach($rows as $row){
    ?>
    <tr> 
	    <td><?php echo $row['ID']; ?></td> 
	    <td><?php echo htmlspecialchars($row['odaiKanji'],ENT_QUOTES,'UTF-8'); ?></td> 
        <td><?php echo htmlspecialchars($row['odaiHiragana'],ENT_QUOTES,'UTF-8'); ?></td>
    </tr>
    <?php   
        }
    ?>
    
    </table>
    <?php       
        #検索結果が見つからなかった場合
    }catch(PDOException $e){
        print('Error:'.$e->getMessage());
        die();
    }
    ?>

    
</body>
</html>
    