<?php
   
   class komputer{
     public $mouse;
     public $keyboard;
     public $monitor;
     public $cpu;
   }
   $gaming = new komputer();
   $gaming -> mouse = "logitech";
   $gaming -> keyboard = "NYK";
   $gaming -> monitor = "Asus";
   $gaming -> cpu = "ROG";
   
   echo $gaming -> mouse;
   echo "<br>";
   echo $gaming -> keyboard;
   echo "<br>";
   echo $gaming -> monitor;
   echo "<br>";
   echo $gaming -> cpu;
   
 ?>