import { takeWhile } from "lodash";

export default class Tile {
    letter = "";
    status = "";

    constructor(position) {
        this.position = position;
    }

    static updateStatusForRow(row, word) {
        for(let tile of row) {
            tile.updateStatus(word);
        }

        row.filter((tile) => {
            return (
                tile.status == 'present' &&
                row.some(
                    (t) => t.letter === tile.letter && t.status == 'correct'
                )
            );
        }).forEach((tile) => (tile.status = 'absent'));

    }

    updateStatus(word) {
        if(! word.includes(this.letter)) {
            return this.status = 'absent';
        }

        if(this.letter === word[this.position]) {
            return this.status = 'correct';
        }

        this.status = 'present';
    }


    fill(key) {
        this.letter = key.toLowerCase();
    }

    empty() {
        this.letter = "";
    }
}
