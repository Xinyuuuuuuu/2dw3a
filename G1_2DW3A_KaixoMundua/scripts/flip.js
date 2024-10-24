window.onload = function() {
    const card = document.querySelector('.card');
    card.classList.add('shake-animation');
}

function flipCard(cardElement) {

    cardElement.classList.remove('shake-animation');
    
    cardElement.classList.toggle('flipped');
}