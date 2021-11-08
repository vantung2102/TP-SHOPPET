<?php
    var_dump ($data['total_pages']);
?>


<?php for ($i = 1; $i < $data['total_pages']; $i++):?>
    <a href="<?= base_url('admin/category') + $i?>"><?= $i ?></a>>
<?php endfor; ?>