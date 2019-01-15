<?php

    $h=@mysql_connect("localhost","root","");
    mysql_select_db("examinationsystem");
    $response=$_POST['name'];
    $res=mysql_query("SELECT solution FROM question WHERE qsn_no = 1");
    $row=mysql_fetch_array($res);
    if($row[0]==$response)
    {
        echo "found";
    }
    else
        echo "not found";




?>