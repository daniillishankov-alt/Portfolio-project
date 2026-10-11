document.addEventListener("DOMContentLoaded", () => {
    // 1. Управление темой (Dark/Light Mode)
    const toggleBtn = document.getElementById("theme-toggle");
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-theme");
    }

    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            document.body.classList.toggle("dark-theme");
            const theme = document.body.classList.contains("dark-theme") ? "dark" : "light";
            localStorage.setItem("theme", theme);
        });
    }

    // 2. Выпадающие списки (Dropdowns)
    document.querySelectorAll('.dropdown-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            btn.parentElement.classList.toggle('open');
        });
    });

    // 3. Приветствие по времени суток
    const greetings = document.getElementById("time_greetings");
    if (greetings) {
        const hours = new Date().getHours();
        if (hours >= 6 && hours < 12) {
            greetings.innerText = "Goedemorgen!";
        } else if (hours >= 12 && hours < 18) {
            greetings.innerText = "Goedemiddag!";
        } else if (hours >= 18 && hours < 24) {
            greetings.innerText = "Goedenavond!";
        } else {
            greetings.innerText = "Goedenacht!";
        }
    }

    // 4. Таймер до дня рождения
    const birthday_timer = document.getElementById("birthday_timer");
    if (birthday_timer) {
        const birth_day = 28;
        const birth_month = 1;

        function updateBDCountdown() {
            const currentDate = new Date();
            let birthDayDate = new Date(currentDate.getFullYear(), birth_month, birth_day);

            currentDate.setHours(0, 0, 0, 0);
            birthDayDate.setHours(0, 0, 0, 0);

            if (birthDayDate.getTime() === currentDate.getTime()) {
                birthday_timer.innerText = "Vandaag is mijn verjaardag! 🎉";
                return;
            } else if (birthDayDate < currentDate) {
                birthDayDate.setFullYear(currentDate.getFullYear() + 1);
            }

            const diffTime = birthDayDate - currentDate;
            const daysUntilBD = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            birthday_timer.innerText = daysUntilBD === 1
                ? "Nog 1 dag tot mijn verjaardag!"
                : `Nog ${daysUntilBD} dagen tot mijn verjaardag.`;
        }

        updateBDCountdown();
    }

    // 5. Фильтрация проектов
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 6. Плавное появление элементов при скролле (Intersection Observer)
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.project-card, .content-section, .contact-form').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Динамическое добавление класса анимации скролла
const style = document.createElement('style');
style.innerHTML = `
    .fade-in {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
`;
document.head.appendChild(style);

// 7. Мини-игра (кликер) на главной странице
const clickBtn = document.getElementById('click-game-btn');
const scoreDisplay = document.getElementById('game-score');

if (clickBtn && scoreDisplay) {
    let score = 0;
    clickBtn.addEventListener('click', () => {
        score++;
        scoreDisplay.innerText = score;

        // Анимация нажатия на кнопку
        clickBtn.style.transform = 'scale(0.92)';
        setTimeout(() => {
            clickBtn.style.transform = 'scale(1)';
        }, 100);
    });
}