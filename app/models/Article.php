<?php
  class Article
  {
    public static function first()
    {


    //   $connection = mysqli_connect("localhost","root","root");
    //   if (!$connection) {
    //     die('Could not connect: '.mysqli_error());
    //   }
   
    //  // mysqli_set_charset("", $connection);
   
    //   mysqli_select_db($connection,"shop");
   
    //   $result = mysqli_query("SELECT * FROM users limit 0,1",'set name utf-8');
   
    //   if ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    //     echo '<h1>'.$row["code"].'</h1>';
    //     echo '<p>'.$row["nickname"].'</p>';
    //   }
   
    //   mysqli_close($connection);






        // 连接数据库
        $link = mysqli_connect("localhost", "root", "root", "shop");
        
        // 检查是否有连接错误
        if (mysqli_connect_errno()) {
            printf("连接数据库失败: %s\n", mysqli_connect_error());
            exit();
        }
        
        // SQL语句
        $query = "SELECT nickname,code FROM users LIMIT 3";
        // 执行SQL查询，返回的结果集赋值给$result
        $result = mysqli_query($link, $query);
         
       
        // 判断结果集是否为空
        if ( 0 == mysqli_num_rows($result) ) {
            exit("没有符合条件的数据");
        }
        
        // 获取结果集中的第一行
       // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        // if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //     echo '<h1>'.$row["nickname"].'</h1>';
        //     echo '<p>'.$row["code"].'</p>';
        // }

        if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            return $row;
        }
       

        mysqli_close($link);
    }



  }
?>