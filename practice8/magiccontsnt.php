<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>

<?php
echo "<br>"
?>

<?php
echo __DIR__;
?>
       
</body>
</html>
