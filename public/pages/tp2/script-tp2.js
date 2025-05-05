document.addEventListener('DOMContentLoaded', () => {
    const board = document.getElementById('container-memory');
    const cards = Array.from(board.children);
    let firstCard = null;
    let secondCard = null;
    let lockBoard = false;

    function shuffleCards() {
        for (let i = cards.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [cards[i], cards[j]] = [cards[j], cards[i]];
        }
        cards.forEach(card => board.appendChild(card));
    }

    function resetGame() {
        firstCard = null;
        secondCard = null;
        lockBoard = false;
        cards.forEach(card => card.classList.remove('revealed'));
        shuffleCards();
    }

    cards.forEach(card => {
        card.addEventListener('click', () => {
            if (lockBoard || card.classList.contains('revealed')) return;

            card.classList.add('revealed');

            if (!firstCard) {
                firstCard = card;
                return;
            }

            secondCard = card;
            lockBoard = true;

            const img1 = firstCard.querySelector('img').src;
            const img2 = secondCard.querySelector('img').src;

            if (img1 === img2) {
                firstCard = null;
                secondCard = null;
                lockBoard = false;
            } else {
                setTimeout(() => {
                    firstCard.classList.remove('revealed');
                    secondCard.classList.remove('revealed');
                    firstCard = null;
                    secondCard = null;
                    lockBoard = false;
                }, 1000);
            }
        });
    });

    shuffleCards();

    document.getElementById('reset-btn-memory').addEventListener('click', () => {
        
        resetGame();

        const audio = document.getElementById('feuille');
        audio.volume = 0.1;
        audio.play();

    });
});
