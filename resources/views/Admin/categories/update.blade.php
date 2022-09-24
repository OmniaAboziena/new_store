<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css"> 
    <title>Create</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Update Category</h2>
        <form action="/admin/categories/{{$category->id}}" method="POST">
          <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            <input type="hidden" name="_method" value="put">  
           <!-- {{ method_field('PUT') }} -->
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" value="<?= $category->name ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
              </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Description</label>
              <textarea id="exampleInputPassword1" class="form-control" placeholder="Description" name="description"><?= $category->description?></textarea>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputParent">Category Parent</label>
              <br>
                <select id="exampleInputParent" class="form-control mt-1" name="parent_id">
                    <option value="">No Parent</option>
                    <?php foreach ($categories as $parent){ ?>
                        <option <?php if($parent->id == $category->id)echo("selected") ?> name="<?= $parent ->name ?>" value="<?= $parent -> id ?>"><?= $parent->name ?></option>
                        <?php  }  ?>
                </select>
            </div>
            <button type="Update"  class="btn btn-primary mt-2">Save</button>
          </form>
    </div>
    
</body>
</html>