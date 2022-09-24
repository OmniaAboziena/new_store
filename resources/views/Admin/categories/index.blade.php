<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="/css/bootstrap.min.css"> 
    <title>index</title>
</head>
<body>
    <div class="container mt-5">
        <a href="categories/create" class='btn btn-primary'>Create New</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parent_ID</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>\
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categories as $category) {
              
               ?>
                <td><?= $category -> id ?></td>
                <td><?= $category -> name ?></td>
                <td><?= $category -> description ?></td>
                <td><?= $category -> parent_id ?></td>
                <td><?= $category -> created_at ?></td>
                <td><?= $category -> updated_at ?></td>
                <td><a href="/admin/categories/{{ $category -> id }}/edit" class="btn btn-dark btn-sm">Edit</a></td>
              </tr>
             <?php } ?>
            </tbody>
          </table>
          
    </div>
</body>
<script></script>
</html>