import './bootstrap';

// Для стрелки в кнопке "Show more"
document.addEventListener('DOMContentLoaded', () => {
    const introText = document.querySelector('.intro-text');
    const showMoreBtn = document.querySelector('.show-more-btn');
    const arrowIcon = showMoreBtn.querySelector('.icon');

    if (introText && showMoreBtn) {
        showMoreBtn.addEventListener('click', () => {
            introText.classList.toggle('expanded');
            showMoreBtn.classList.toggle('expanded');

            if (arrowIcon) {
                arrowIcon.style.transform = introText.classList.contains('expanded')
                    ? 'rotate(180deg)'
                    : 'rotate(0deg)';
            }

            showMoreBtn.textContent = introText.classList.contains('expanded') ? 'Show less' : 'Show more';
            showMoreBtn.appendChild(arrowIcon);
        });
    }


// Добавляем SVG-иконки в контейнер в карточках
    const containerWrapper = document.querySelector('.cards-container-wrapper');
    const container = document.querySelector('.cards-container');

    const checkScroll = () => {
        if (container.scrollWidth > container.clientWidth) {
            containerWrapper.classList.add('has-scroll');
        } else {
            containerWrapper.classList.remove('has-scroll');
        }
    };

    checkScroll();

    window.addEventListener('resize', checkScroll);
});
