<!-- include php logic connecting to database-->
<?php include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Products-Project</title>
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>
       <?php include 'header.php'?>
       <!--container-->
       <div class="container">
        <section class="display_product">
          <table>
            <thead>
              <th>Sl No</th>
              <th>Product image</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Action</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="" class="delete_product_btn"><i class="fas fa-trash"></a>
                  <a href="" class="update_prodct_btn"><i class="fas fa-edit"></a>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
       </div>
</body>
</html>