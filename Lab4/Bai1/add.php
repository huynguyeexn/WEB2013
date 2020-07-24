<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>

<body>
    <?php include_once("./layout/navbar.php") ?>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h5>Add Flight</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                              <label for="">Origin</label>
                              <input type="text" name="origin" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Destination</label>
                              <input type="text" name="destination" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Duration</label>
                              <input type="text" name="duration" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    if(isset($_POST['submit'])){
            
        $conn = new PDO('mysql:host=localhost;dbname=QLCHUYENBAY','root','');

        $sql = 'INSERT INTO flights(origin, destination, duration) VALUES("'.$_POST['origin'].'","'.$_POST['destination'].'","'.$_POST['duration'].'")';
        $result = $conn->exec($sql);

        if($result){
            echo '<script>
                alert("Thêm thành công");
            </script>';
        }else{
            echo '<script>
                alert("Thêm không thành công");
            </script>';
        }
    }
?>
</html>