import Tile from './tile';

export default
    {
        guessesAllowed: 3,
        wordLenght: 3,
        word: 'cat',
        currentRowIndex: 0,

        get currentGuess() {
            this.currentRow.map(tile => tile.letter).join('');
        },

        init() {
            this.board = Array.from({ length: this.guessesAllowed }, () => {
                return Array.from({ length: this.wordLenght }, () => new Tile);
            });
        },

        onKeyPress(key) {
            if (/^[/[A-z]$/.test(key)) {
                this.fillTile(key);
            } else if (key == 'Enter') {
                this.submitGuess();
            }
        },

        fillTile(key) {
            for (let tile of this.currentRow) {
                if (!tile.letter) {
                    tile.fill(key);
                    break;
                }
            }
        },

        submitGuess() {
            let guess = this.currentGuess;

            if(guess.length < this.wordLenght) {
                return;
            }

           if(guess === this.word) {
               alert('you Win');
           } else {
               alert('nope');
               this.currentRowIndex++;
           }
        },

        get currentRow() {
            return this.board[this.currentRowIndex];
        },
    };
