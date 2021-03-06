<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Goose !</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <h1>Hello Goose ! </h1>
</nav>
<div>
    <img src="images/goose.jpg" width="100%"/>
</div>
<!--
                                                        _...--.
                                        _____......----'     .'
                                  _..-''                   .'
                                .'                       ./
                        _.--._.'                       .' |
                     .-'                           .-.'  /
                   .'   _.-.                     .  \   '
                 .'  .'   .'    _    .-.        / `./  :
               .'  .'   .'  .--' `.  |  \  |`. |     .'
            _.'  .'   .' `.'       `-'   \ / |.'   .'
         _.'  .-'   .'     `-.            `      .'
       .'   .'    .'          `-.._ _ _ _ .-.    :
      /    /o _.-'               .--'   .'   \   |
    .'-.__..-'                  /..    .`    / .'
  .'   . '                       /.'/.'     /  |
 `---'                                   _.'   '
                                       /.'    .'
                                        /.'/.'
-->
<div>
    <blockquote>
        Here is my goose <br>
        Run it on the cloud for me <br>
        I do not care how
        <p>- B.W. Goose</p>
    </blockquote>
</div>
<div>
    <h4>Server sent information :</h4>
    <p>Instance id: <?php echo getenv('CF_INSTANCE_GUID'); ?></p>
    <p>Instance index: <?php echo getenv('CF_INSTANCE_INDEX'); ?></p>
</div>
<footer>
    <div>
        <a href="https://github.com/jgjeffrey/hello-goose">Contribute here and claim your Goose contributor badge</a>
    </div>
</footer>
</body>
</html>
