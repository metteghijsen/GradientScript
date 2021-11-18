<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="granim.min.js"></script>
    <title>Granim.js Demo</title>
</head>
<body>
<canvas id="canvas-basic">
</canvas>
<script>
    let granimInstance = new Granim({
        element: '#canvas-basic',
        direction: 'left-right',
        isPausedWhenNotInView: false,
        states : {
            "default-state": {
                gradients: [
                    ['#b200ff', '#1100ff'],
                    ['#26ff00', '#ff9c00'],
                    ['#ff0000', '#fc00ff']
                ]
            }
        }
    });
</script>
</body>
</html>