<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sharer</title>
    <script src="assets/jquery-ui/external/jquery/jquery.js"></script>
    <script src="assets/jquery-ui/jquery-ui.js"></script>
    <script src="assets/includes/loadContent.js.php"></script>
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.css" />
    <script>
        $(function () {
            $('#dialog').dialog();
        });
        $(function () {
            loadContent("assets/includes/navbar_content.php", function () {
                
            });
        });
    </script>
</head>
<body>
    <div id="dialog">Hello World!</div>
</body>
</html>
