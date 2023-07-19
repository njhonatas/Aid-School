const carousel = document.querySelector('.carousel');
            const cards = [...carousel.querySelectorAll('.card')];
            const leftBtn = document.getElementById('left');
            const rightBtn = document.getElementById('right');
            const cardWidth = cards[0].offsetWidth + parseInt(getComputedStyle(cards[0]).marginRight);

            let counter = 0;

            leftBtn.addEventListener('click', () => {
                if (counter === 0) {
                    counter = Math.max(0, cards.length - 3);
                } else {
                    counter--;
                }
                carousel.scrollLeft = counter * cardWidth;
            });

            rightBtn.addEventListener('click', () => {
                if (counter === Math.max(0, cards.length - 3)) {
                    counter = 0;
                } else {
                    counter++;
                }
                carousel.scrollLeft = counter * cardWidth;
            });
