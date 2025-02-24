<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <h1>Data Barang</h1>
    <a href="view_tambah.php" class="btn btn-primary">Tambahkan Data</a>
    <h1></h1>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">id Barang</th>
      <th scope="col">Stok</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">id Jenis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1212</td>
      <td>200</td>
      <td>Pensil</td>
      <td>3000</td>
      <td>1</td>
    </tr>
    <tr class="table-primary">
      <th scope="row">2</th>
      <td>1213</td>
      <td>230</td>
      <td>Laptop</td>
      <td>5000000</td>
      <td>2</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>1214</td>
      <td>500</td>
      <td>pemadam</td>
      <td>4000000</td>
      <td>4</td>
    </tr>
    <tr class="table-primary">
    <th scope="row">4</th>
      <td>1215</td>
      <td>900</td>
      <td>baju</td>
      <td>80000</td>
      <td>3</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>