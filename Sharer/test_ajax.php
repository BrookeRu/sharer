<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX</title>
    <script src="assets/jquery-ui/external/jquery/jquery.js"></script>
    <script>
        $(
            function() {
                $.get('assets/actions/get_content.php', function (data) {
                    $('#content').html(data.html);
                    $('#count').html(data.count);
                });

                /*
                $('#ohms_button').click(function () {
                    $.get('assets/actions/calc_ohms.php?' + $('fieldset')
                        .serialize(), function (data) {
                        $('#results').html(data.volts + ' Volts<br>' +
                            data.ohms + ' Ohms<br>' + data.amps + ' Amps<br>' +
                            data.watts + ' Watts<br>');

                    });

                });

                 */
                $('#ohms_button').click(function () {
                    $.post('assets/actions/calc_ohms.php', $('fieldset')
                        .serialize(), function (data) {
                        $('#results').html(data.volts + ' Volts<br>' +
                            data.ohms + ' Ohms<br>' + data.amps + ' Amps<br>' +
                            data.watts + ' Watts<br>');

                    });

                });
            }
        );

    </script>
</head>
<body>
    <p>Here is some fetched content: <span id="content"></span> <span id="count"></span> times.</p>
<fieldset>
    <table>
        <tr>
            <td>Volts:</td><td><input type="text" name="volts"></td>
        </tr>
        <tr>
            <td>Ohms:</td><td><input type="text" name="ohms"></td>
        </tr>
        <tr>
            <td colspan="2"><input id="ohms_button" type="submit" value="Calculate"></td>
        </tr>
    </table>
</fieldset>
<div id="results"></div>
</body>
</html>
