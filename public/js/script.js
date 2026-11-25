// 1. Variabel dan Function Buatan Sendiri[cite: 22]

// 2. DOM Selection[cite: 22]
const hamburgerBtn = document.getElementById("hamburger-btn");
const navLinks = document.getElementById("nav-links");
const themeToggle = document.getElementById("theme-toggle");
const accordionHeaders = document.querySelectorAll(".accordion-header");

// 4. Navigasi Responsif (Hamburger Menu)[cite: 22]
hamburgerBtn.addEventListener("click", function() {
    navLinks.classList.toggle("active"); // DOM Manipulation[cite: 22]
});

// 5. Tombol Dark Mode / Light Mode[cite: 22]
themeToggle.addEventListener("click", function() {
    document.body.classList.toggle("dark-mode"); // DOM Manipulation[cite: 22]
    if(document.body.classList.contains("dark-mode")) {
        themeToggle.textContent = "☀️ Light Mode"; // DOM Manipulation[cite: 22]
    } else {
        themeToggle.textContent = "🌙 Dark Mode"; // DOM Manipulation[cite: 22]
    }
});

// 6. Accordion Detail Pengalaman/Pendidikan[cite: 22]
accordionHeaders.forEach(header => {
    header.addEventListener("click", function() {
        // Toggle class 'active' pada div pembungkus (card)[cite: 22]
        this.parentElement.classList.toggle("active");
    });
});