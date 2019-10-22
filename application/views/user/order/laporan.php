<?php foreach($allData as $data): ?>
    <p><?= $data->cn ?></p>
    <p><?= $data->address ?></p>
    <p><?= $data->telephone ?></p>
    <p><?= $data->rn ?></p>
    <p><?= $data->type ?></p>
    <p><?= $data->packageName ?> : <?= $data->service1 ?> &nbsp; <?= $data->service2 ?> &nbsp; <?= $data->service3 ?> &nbsp; <?= $data->service4 ?></p>
    <p><?= $data->date ?></p>
    <p><?= $data->total ?></p>
<?php endforeach;?>