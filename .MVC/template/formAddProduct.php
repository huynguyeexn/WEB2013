<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="h3 text-center p-5">Add Product</p>
                <form action="?action=doAdd" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="price" type="text" placeholder="Product Price">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="sale" type="text" placeholder="Product Sale">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="destination" id="" cols="30" rows="10">Product Destination</textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="file" name="file">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="quantity" id="" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="category" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="brand" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>