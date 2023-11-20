<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Admin</title>
</head>
<body>
  <div class="row justify-content-between">
    <div class="col-10">
      <b>Kategori</b>
    </div>
    <div class="col-2 d-flex justify-content-end align-items-end">
      <button class="btn btn-primary btn-sm">add</button>
    </div>
  </div>

  <hr>

  <table class="table table-sm border border-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col" width="5%">No</th>
        <th scope="col">Nama</th>
        <th scope="col" width="12%">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $query = "SELECT * FROM kategori";
        $select = mysqli_query($conn, $query);
        
        while($data = mysqli_fetch_array($select)){
      ?>
      <tr>
        <th scope="row"><?php echo $data['id_kategori']?></th>
        <td><?php echo $data['nama_kategori'];?></td>
        <td>
          <button class="btn btn-success btn-sm">edit</button>
          <button class="btn btn-danger btn-sm">delete</button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>