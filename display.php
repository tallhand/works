<?php
    $PicNum=$_GET['PicNum'];
    //從資料庫取得圖片
    $conn=mysql_pconnect("127.0.0.1","root","");        
    mysql_select_db("go");
    mysql_query("SET NAMES'utf8'");
                    
    $sql=sprintf("select *from imageDB where id = $PicNum");
            
    $result=mysql_query($sql);        
    
    //顯示圖片
    if($row=mysql_fetch_assoc($result)){    
        header("Content-type: image/jpeg");     
        print $row['image'];
    }
    
    mysql_close($conn);
?>