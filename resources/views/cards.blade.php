<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" integrity="sha512-P0Ms+SM3w8aSbPa5U/nFoprxlUzG2FSz9h/A+2xhhE1hcH6RmGYK3dImFCvcSYuioM3UbbAtMbAopAuHLr94pA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div x-data="game()" class="px-10 flex items-center justify-center min-h-screen">
        <h1 class="fixed top-0 right-0 p-10 font-bold text-3xl">
            <span x-text="points"></span>
            <span class="text-xs">pts</span>
        </h1>
        <div class="flex-1 grid grid-cols-4 gap-10">
            <template x-for="card in cards">
                <div>
                    <button :style="'background: ' + (card.flipped ? card.color : '#999')" class="w-full h-32" @click="flipCard(card)">
                    </button>
                </div>
            </template>
        </div>
    </div>

    <script>
        function game() {
            return {
                cards: [{
                        color: 'green',
                        flipped: false,
                        cleared: false
                    },
                    {
                        color: 'red',
                        flipped: false,
                        cleared: false
                    },
                    {
                        color: 'blue',
                        flipped: false,
                        cleared: false
                    },
                    {
                        color: 'yellow',
                        flipped: false,
                        cleared: false
                    },
                    {
                        color: 'green',
                        flipped: false,
                        cleared: false
                    },
                    {
                        color: 'red',
                        flipped: false,
                        cleared: false
                    },
                    {
                        color: 'blue',
                        flipped: false,
                        cleared: false
                    },
                    {
                        color: 'yellow',
                        flipped: false,
                        cleared: false
                    }
                ],

                get flippedCards() {
                    return this.cards.filter(card => card.flipped);
                },

                get clearedCards() {
                    return this.cards.filter(card => card.cleared);
                },

                get remainingCards() {
                    return this.cards.filter(card => ! card.cleared);
                },

                get points() {
                    return this.clearedCards.length;
                },

                flipCard(card) {
                    card.flipped = ! card.flipped;

                    if (this.flippedCards.length == 2) {
                        if (this.hasMatch()) {
                            this.flippedCards.forEach(card => card.cleared = true);

                            if(! this.remainingCards.length) {
                                alert("You Won");
                            }
                        }
                    }
                },

                hasMatch() {
                    return this.flippedCards[0]['color'] === this.flippedCards[1]['color'];
                }
            };
        }
    </script>
</body>

</html>
