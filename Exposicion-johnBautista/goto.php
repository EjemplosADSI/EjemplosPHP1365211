<?php

goto a;
echo 'Foo';
echo 'alv';
a:
echo 'Barto';
echo "<br>";
echo 'alabando la vida';




for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end;
  }
}     
echo "i = $i";
end:
echo "<br>";
echo 'j alcanzó 17';
 ?>
