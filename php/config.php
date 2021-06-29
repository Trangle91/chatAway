<?php

$conn = mysqli_connect("localhost", "root", "Bondien1!", "chatApp");
if(!$conn)
{
    echo "Database not connected" . mysqli_connect_error();
}
// else
// {
//     echo "Success";
// }
