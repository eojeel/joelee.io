import { takeWhile, times } from 'lodash';
import Tile from './Tile';
import {Words} from "./Words";

export default
    {
        guessesAllowed: 5,
        word: Words[Math.floor(Math.random() * Words.length)],
        currentRowIndex: 0,
        stage: 'active',
        message: '',

        letters: [
            'QWERTYUIOP'.split(''),
            'ASDFGHJKL'.split(''),
            ['Enter', ...'ZXCVBNM'.split(''), 'Backspace'],
        ],

        get currentGuess() {
            return this.currentRow.map((tile) => tile.letter).join("");
        },

        get currentRow() {
            return this.board[this.currentRowIndex];
        },

        get remainingGuesses() {
            return this.guessesAllowed - this.currentRowIndex - 1;
        },

        init() {
            this.board = Array.from({ length: this.guessesAllowed }, () => {
                return Array.from(
                    { length: this.word.length },
                    (item, index) => new Tile(index)
                );
            });
        },

        onKeyPress(key) {
            this.message = '';
            if (/^[/[A-z]$/.test(key)) {
                this.fillTile(key);
            } else if (key === 'Enter') {
                this.submitGuess();
            } else if (key == 'Backspace') {
                this.emptyTile();
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

        emptyTile() {
            for (let tile of [...this.currentRow].reverse()) {
                if (tile.letter) {
                    tile.empty();

                    break;
                }
            }
        },

        submitGuess() {
            if (this.currentGuess.length < this.word.length) {
                return;
            }

           for(let tile of this.currentRow) {
            Tile.updateStatusForRow(this.currentRow, this.word);
           }



            if (this.currentGuess === this.word) {
                this.state = 'complete';
                this.message = 'You win!';
                return;
            }

            if (this.remainingGuesses == 0) {
                this.state = 'complete';
                this.message = 'Game Over, You Lose. (' + this.word + ')';
                return;
            }

            this.currentRowIndex++;
            this.message = 'Incorrect';
            return;
        },

        matchingTileForKey(key) {
            return this.board.flat()
            .filter((tile) => tile.status)
            .sort((t1, t2) => {t2.status == 'correct';})
            .find((tile) => tile.letter === key.toLowerCase());
        }
    };
