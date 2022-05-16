<?php 
    include 'config.php';
    function excute($sql){
        $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die("Can't connect to your databse.");
        mysqli_query($connect, "set names 'utf8'");
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }
    
    function get_line_quantity($sql)
	{
        $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die("Can't connect to your databse.");
        mysqli_query($connect, "set names 'utf8'");
        $resultSet = mysqli_query($connect, $sql);
        $line_quantity = mysqli_num_rows($resultSet);
        mysqli_close($connect);	
        return $line_quantity;
    };

    function excuteResult($sql){
        $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die("Can't connect to your databse.");
        mysqli_query($connect, "set names 'utf8'");
        $resultSet = mysqli_query($connect, $sql);
        $list = [];
        while($row = mysqli_fetch_array($resultSet, 1))
        {
            $list[] = $row;
        }
        mysqli_close($connect);
        return $list;
    }
?>