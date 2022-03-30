export default class Tile {
    letter = "";
    status = ""; // correct, present, absent

    constructor(position) {
        this.position = position;
    }

    updateStatus(currentGuess, word) {
        this.status = word.includes(this.letter) ? 'present' : 'absent';

        if(currentGuess.indexOf(this.letter) === word.indexOf(this.letter)) {
            this.status = 'correct';
        }
    }


    fill(key) {
        this.letter = key.toLowerCase();
    }

    empty() {
        this.letter = "";
    }
}
