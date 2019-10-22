<?php foreach($allData as $data): ?>
    <p><?= $data->cn ?></p>
    <p><?= $data->address ?></p>
    <p><?= $data->telephone ?></p>
    <p><?= $data->rn ?></p>
    <p><?= $data->type ?></p>
    <p><?= $data->packageName ?> : <?= $data->package1 ?>, <?= $data->package2 ?>,<?= $data->package3 ?>,<?= $data->package4 ?>,</p>
    <p><?= $data->date ?></p>
    <p><?= $data->total ?></p>
<?php endforeach;?>