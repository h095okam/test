#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/linux.words') as $line){
   if(strpos($line,"abc")){  // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
    echo "$line";
   }
  } 
?>