<?php
# Buscando pontuação
$rank = mysql_query("SELECT * FROM ranking ORDER BY quant_books DESC LIMIT 1, 10") or die(mysql_error());

    $i = 1;
    while($row = mysql_fetch_assoc($rank)){
        $i++; 
?>
<div style="background-color: blue;width: 60px;height: 20px;padding: 20px;">
    <?php echo $row['user']; ?> com <?php echo $row['quant_books']; ?>
</div>
<? } ?>