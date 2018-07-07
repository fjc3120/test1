<?php
        $name = $_GET['name'];
    echo '<script> alert("haha")</script>';
        echo '<script> aa("haha")</script>';//是错的，iframe下子页不能直接访问父页的方法。不能向script一样使用aa（）
           echo '<script> top.aa(".$name.")</script>';//可以访问最上面一层，父亲-爷爷级最高的方法。但是不能跨域
           //解决方法，目的：a文件下的index2.html要访问b文件下的index2.php
           //1.先在a文件下建立index3.php，再通过b文件下的index2.php访问a文件下的index3.php,把原本这个页面的要执行的代码放在a文件index3.php下
    <iframe src="http://www.a.com/index3.php?name=<?php echo $name ?>"></iframe>
?>