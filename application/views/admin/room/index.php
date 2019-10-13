<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Room</h1>
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
          <th scope="col">ROOM_ID</th>
          <th scope="col">NAME</th>
          <th scope="col">PEOPLE</th>
          <th scope="col">TYPE</th>
          <th scope="col">SERVICE</th>
          <th scope="col">PRICE</th>
          <th scope="col">IMAGE</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($rooms as $room): ?>
          <tr>
            <td><?php echo $room->id; ?></td>
            <td><?php echo str_word_count($room->name) > 25 ? substr($room->name,0,20)."[...]" : $room->name ; ?></td>
            <td><?php echo str_word_count($room->people) > 25 ? substr($room->people,0,20)."[...]" : $room->people ; ?></td>
            <td><?php echo str_word_count($room->type) > 25 ? substr($room->type,0,20)."[...]" : $room->type ; ?></td>
            <td><?php echo str_word_count($room->service) > 25 ? substr($room->service,0,20)."[...]" : $room->service ; ?></td>
            <td><?php echo str_word_count($room->price) > 25 ? substr($room->price,0,20)."[...]" : $room->price ; ?></td>
            <td><?php echo str_word_count($room->image) > 25 ? substr($room->image,0,20)."[...]" : $room->image ; ?></td>
            <td>
            <a href="<?= base_url(); ?>admin/room/detail/<?= $room->id ;?>" class="btn btn-primary">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/room/edit/<?= $room->id ;?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/room/hapus/<?= $room->id ;?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>