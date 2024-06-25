#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    // 改行を取り除く
    $line = trim($line);
    // 文字列 "xy" が含まれるか確認
    if (strpos($line, 'xy') !== false) {
      // 含まれていたら表示
      echo "$line\n";
    }
　} 
?>
