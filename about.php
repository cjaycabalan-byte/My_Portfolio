<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Me | Christian Jay Cabalan</title>
<link rel="stylesheet" href="assets/css/about.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="about-section">
    <h1 class="section-title">About Me</h1>

    <div class="about-container">
        <div class="about-text">
            <p>
                Hello! I'm <strong>Christian Jay Cabalan</strong>, a passionate and dedicated aspiring web developer from the Philippines.
                I specialize in PHP, MySQL, and am currently advancing my skills in modern frameworks like Laravel.
            </p>

            <p>
                My goal is to create clean, modern, and responsive websites that deliver both beauty and functionality.
                I enjoy working on real-world projects, solving problems, and continuously improving my craft.
            </p>

            <div class="skills">
                <h2>Skills</h2>
                <ul>
                    <li>✔ PHP / MySQL</li>
                    <li>✔ HTML / CSS / JavaScript</li>
                    <li>✔ Laravel Framework</li>
                    <li>✔ Responsive Web Design</li>
                    <li>✔ UI/UX Basics</li>
                </ul>
            </div>
        </div>

        <div class="about-image">
            <img src="assets/css/images/Solo.png" alt="Profile Image">
        </div>
    </div>
</section>

<script>
    
const canvas = document.getElementById('hero-bg');
const ctx = canvas.getContext('2d');

let fontSize = 16;
let columns;
let drops = [];

function initCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    fontSize = window.innerWidth < 480 ? 12 : 16; // smaller font sa mobile
    columns = Math.floor(canvas.width / fontSize);
    drops = [];
    for(let x = 0; x < columns; x++) {
        drops[x] = Math.random() * canvas.height / fontSize;
    }
}

function draw() {
    ctx.fillStyle = 'rgba(0,0,0,0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = '#4db8ff';
    ctx.font = fontSize + 'px monospace';

    for(let i = 0; i < drops.length; i++) {
        const textChar = '01'[Math.floor(Math.random() * 2)];
        ctx.fillText(textChar, i * fontSize, drops[i] * fontSize);

        if(drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }

        drops[i]++;
    }
}

initCanvas();
setInterval(draw, 50);

window.addEventListener('resize', () => {
    initCanvas();
});
</script>
</body>
</html>
