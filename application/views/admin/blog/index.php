<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Blog</h1>
    <div class="mb-3">
        <a href="<?= base_url().'admin/blog/tambah'; ?>" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col" class="short">#</th>
          <th scope="col" class="normal">First</th>
          <th scope="col" class="normal">Last</th>
          <th scope="col" class="short">Action</th>
        </tr>
      </thead>
    
      <tbody>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
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
      </tbody>
    
    </table>
  </div>

</div>