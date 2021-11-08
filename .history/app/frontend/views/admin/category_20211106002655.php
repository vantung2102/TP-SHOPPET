<?php for ($i = 1; $i < $data['total_pages']; $i++):?>
    <a href="<?= base_url(`admin/category/page=$i`)?>"><?= $i ?></a>
<?php endfor; ?>