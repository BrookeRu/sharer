<?php

header('Content-Type: text/javascript');
?>
var loadContent = function () {
    var loaded = [];

    function addHtml(html) {
        $('body').append(html);

    }

    function addCss(css) {
        $('<style>')
            .text(css)
            .appendTo('head');

    }

    function addJs(js, callback) {
        var script = document.createElement('script');
        script.type = 'text/js'
        script.src = 'data:text/javascript;base64,' + btoa(js);
        script.addEventListener('load', callback);
        document.head.appendChild(script);

    }

    return function (path, callback) {
        if (loaded.indexOf(path) > -1) {
            callback();
        } else {
            loaded.push(path);
            $.get(path, function (data) {
                if (data.html) {
                    addHtml(data.html);
                }
                if (data.css) {
                    addCss(data.css);
                }
                if (data.js) {
                    addJs(data.js, callback);
                } else {
                    callback();
                }
            });
        }
    }
}
