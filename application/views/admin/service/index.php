<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Blog</h1>
    <div class="mb-3">
        <a href="<?= base_url().'admin/room/tambah'; ?>" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NAME</th>
          <th scope="col">DESC</th>
          <th scope="col">PRICE</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($services as $service): ?>
          <tr>
            <td><?php echo $service->id; ?></td>
            <td><?php echo $service->name; ?></td>
            <td><?php echo str_word_count($service->desc) > 25 ? substr($service->desc,0,30)."[...]" : $service->desc ?></td>
            <td><?php echo $service->price; ?></td>
            <td>
              <a href="" class="btn btn-danger">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              <a href="" class="btn btn-primary">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>