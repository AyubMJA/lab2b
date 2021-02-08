<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>PhoneBook</title>
</head>

<body>
  <header>
    <h1>Lab2 Part B CRUD</h1>
  </header>
  <hr>
  <!-- Bootstrap forms https://getbootstrap.com/docs/5.0/forms/overview/ -->
  <div class="container">
    <form>
      <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
      
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
  
      </div>

      <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      
      </div>

      <div class="mb-3">
        <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" id="exampleInputPassword1" placeholder="Telephone Number">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Location">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="mc">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="pos">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="department">
      </div>
      <button type="submit" class="btn btn-primary">Add new listing</button>
    </form>
  </div>
  <hr>

  <div class="container-dbResults">
  <h2>Contact Database List</h2>
  </div><br>

  <div class="container">
  <table>
    <thead>
    <th><strong>ID<br><p><a href="<?= $TPL['controller']?>?act=sort&field=id&dir=up"><i class="fas fa-arrow-up"></i></a><a href="<?= $TPL['controller']?>?act=sort&field=id&dir=down"><i class="fas fa-arrow-down"></i></a></p></strong></td>
    
    </thead>
  </table>
  </div>
</body>

</html>