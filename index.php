<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Js and php</title>
</head>
<body>
    <?php
    echo "Hello word <b>";
    $name = "john";
    $age = 25;
     echo "My name is $name and i am $age years old.";
    ?>
    <button type=" button" id="btn">Click me</button>
    <script>
        document.getElementById('btn').
        addeventEventListener('click', function(){
            const p= document.createElement('p')
            p.textContent= "Button clicked!"
            document.body.appendChild(p)
        })
    </script>
</body>
</html>