<?php
    var_dump ($data['total_pages']);
?>


<?php for ($i = 0; $i < $data['total_pages']; $i++):?>
    <a href="<?= $i ?>"></a>
<?php endfor; ?>