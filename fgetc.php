<?php
$file=fopen("welcome.txt","r") or exit("无法打开文件!");
while (!feof($file))
{
    echo fgetc($file);//fgetc() 函数用于从文件中逐字符地读取文件。
}
fclose($file);
?>