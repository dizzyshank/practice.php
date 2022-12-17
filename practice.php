<?php
echo 'hello php!';

#PHP/Laravel 02 PHPの型と基本的な式を理解しよう

#以下課題

#課題1.
$a = 3;
$b = 7;
echo $a + $b;

#課題2.
$array_month = ["１月", "２月", "３月", "４月", "５月", "６月", "７月", "８月", "９月", "１０月", "１１月", "１２月"];
echo $array_month[7];

#課題3.
$hello = "Hello, ";
$name = "reo";
$world ="'s World!";
echo $hello.$name.$world;

#課題4.
$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost;

#課題5.
$calendar_2018 = [ #数値で始めてはダメ,括弧の種類が違う
  "January" => "1月",
  "February" => "2月",#カンマ
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月", #>が抜けている
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月", #型が違う
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"]; #""の抜け