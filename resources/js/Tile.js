import { takeWhile } from "lodash";

export default class Tile {
    letter = "";
    status = "";

    constructor(position) {
        this.position = position;
    }

    static updateStatusForRow(row, word ) {
        word = word.split('');

        for(let tile of row) {
            if(word[tile.position] == tile.letter) {
                tile.status = 'correct';
                word[tile.position] = null;
            }
        }

        for(let tile of row) {
            if(word.includes(tile.leter)) {
                tile.status = 'present';
                word[word.indexOf(tile.letter)] = null;
            }
        }

        for(let tile of row) {
            if(!tile.letter) {
                tile.status = 'absent';
            }
        }
    }

    fill(key) {
        this.letter = key.toLowerCase();
    }

    empty() {
        this.letter = "";
    }
}
