<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container{
            height: 50vh;
            width: 80vw;
            background-color: aquamarine;
            display: grid;
        }
    </style> 
</head>
<body>
    <div class="container">  
    <form action="./try.php" method="post" enctype="multipart/form-data">
    <?php
    for($i = 0; $i<2; $i++){
        echo'
        <div class="input-group">
            <input name = "file-'.$i.'" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
        </div>';}
    ?>
    <button id="inputGroupFileAddon04" type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>