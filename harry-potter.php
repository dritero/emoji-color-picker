<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.rawgit.com/jgthms/minireset.css/master/minireset.css">
    <link rel="stylesheet" href="css/debug.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <title>Emoji Color Picker</title>
</head>
<body>
<div id="app">
    <p v-html="wizard + ' ' + ( wizard == harry ? hedwig : wizard == ron ? scabbers : wizard == hermione ? crookshanks : '')"></p>
</div>

<script>

    function emojify(name) {
        var out = '<img src="emojis/' + name + '.png">'
        return out
    }

    var app = new Vue({
        el: "#app",
        data: {
            wizard: "",
            harry: emojify("harry"),
            hedwig: emojify("hedwig"),
            ron: emojify("ron"),
            scabbers: emojify("scabbers"),
            hermione: emojify("hermione"),
            crookshanks: emojify("crookshanks")
        },
        method: {
            wizards: function() {
                return [
                    { name: this.harry, pet: this.hedwig },
                    { name: this.ron, pet: this.scabbers },
                    { name: this.hermione, pet: this.crookshanks }
                ]
            }
        }
    })

    app.wizard = app.ron

</script>

</body>
</html>