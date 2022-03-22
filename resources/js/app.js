import game from './game';

document.addEventListener('alpine:init', () => {

    Alpine.data('game', () => game);
});

/**
 *
 * VANILLA JS verion of grid generation

let grid = document.querySelector('#game');

let guessesAllowed = 3;
let wordLength = 3;

let generateGrid = () => {
let fragment = document.createDocumentFragment();

Array.from({length: guessesAllowed}).forEach(item => {
    let row = document.createElement('div');
    row.classList.add('row');

    Array.from({length: wordLength}).forEach(item => {
        let tile = document.createElement('div');
        tile.classList.add('tile');

        row.appendChild(tile);
    });

    fragment.appendChild(row);
});

grid.appendChild(fragment);
};

//init
generateGrid();
*/
