<?php
    $name = $_GET['name'];
    $age = $_GET['age'];
     $callback = $_GET['callback'];
    echo $callback.'({"name":".$name.","age":".$age."})';
     echo ' aa("haha")'; //可以，script下，子页能直接访问父页的方法。并且不能添加script标签
?>