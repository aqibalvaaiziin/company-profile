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
          <th scope="col">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($rooms as $room): ?>
          <tr>
            <td><?php echo $room->id; ?></td>
            <td><?php echo $room->name; ?></td>
            <td><?php echo $room->people; ?></td>
            <td><?php echo $room->type; ?></td>
            <td><?php echo $room->service; ?></td>
            <td><?php echo $room->price; ?></td>
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