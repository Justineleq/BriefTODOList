<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ToDoList</title>
</head>
<body>
    <?php include './assets/navbar.php';  ?> 
    <div>
        <?php include './assets/title.php' ?>
    </div>
    
        
    <?php include 'list.php'; ?>

    <div class="rainbow-text" style="text-align: center;">
	<span class="block-line"><span><span style="color:#ff0000;">C</span><span style="color:#ff5500;">h</span><span style="color:#ffaa00;">o</span><span style="color:#ffff00;">o</span><span style="color:#aaff00;">s</span><span style="color:#55ff00;">e&nbsp;</span></span><span><span style="color:#00ff00;">y</span><span style="color:#00ff55;">o</span><span style="color:#00ffaa;">u</span><span style="color:#00ffff;">r&nbsp;</span></span><span><span style="color:#00aaff;">j</span><span style="color:#0055ff;">o</span><span style="color:#0000ff;">b&nbsp;</span></span><span><span style="color:#5500ff;">t</span><span style="color:#aa00ff;">o&nbsp;</span></span><span><span style="color:#ff00ff;">d</span><span style="color:#ff00aa;">o</span><span style="color:#ff0055;">!</span></span></span>
</div>
    <?php include 'form.php'; ?>
   
    
</body>
</html>