<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JoeLee.io Wordle</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="/js/app.js"></script>
</head>

<body class="wordlebody">
    <main x-data="game" @keyup.window="onKeyPress($event.key)">


        <div id="game">
            <template x-for="(row, index) in board">
                <div class="row" :class="{ 'current' : currentRowIndex == index }">
                    <template x-for="tile in row">
                        <div class="tile" :class="tile.status" x-text="tile.letter"></div>
                    </template>
                </div>
            </template>
        </div>

        <output x-text="message"></output>
    </main>
</body>
</html>
