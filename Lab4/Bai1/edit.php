<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>

<?php
    if(isset($_POST['submit'])){
        $conn = new PDO('mysql:host=localhost;dbname=QLCHUYENBAY','root','');

        $sql = 'UPDATE flights SET origin = "'.$_POST['origin'].'", destination = "'.$_POST['destination'].'", duration = "'.$_POST['duration'].'" WHERE id='.$_POST['id'];
        $result = $conn->exec($sql);
        if($result){
            echo '<script>
                alert("Sửa thành công");
                location.href = "./manager.php";
            </script>
            
            ';
        }else{
            echo '<script>
                alert("Sửa không thành công");
                location.href = "./manager.php";
            </script>
            ';
        }
    }
    else if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = new PDO('mysql:host=localhost;dbname=QLCHUYENBAY','root','');

        $sql = 'SELECT * FROM flights WHERE id='.$id;
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
    }else{
        header('Location: ./index.php');
    }
?>
<body>
    <?php include_once("./layout/navbar.php") ?>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h5>Edit Flight</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId" hidden value='<?php if($row['id']){echo $row['id'];} ?>'>
                            <div class="form-group">
                              <label for="">Origin</label>
                              <input type="text" name="origin" id="" class="form-control" placeholder="" aria-describedby="helpId" value='<?php if($row['origin']){echo $row['origin'];} ?>'>
                            </div>
                            <div class="form-group">
                              <label for="">Destination</label>
                              <input type="text" name="destination" id="" class="form-control" placeholder="" aria-describedby="helpId" value='<?php if($row['destination']) echo $row['destination']; ?>'>
                            </div>
                            <div class="form-group">
                              <label for="">Duration</label>
                              <input type="text" name="duration" id="" class="form-control" placeholder="" aria-describedby="helpId" value='<?php if($row['duration']) echo $row['duration']; ?>'>
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
</html>