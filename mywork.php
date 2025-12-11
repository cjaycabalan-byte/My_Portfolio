<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Work - Christian Jay Cabalan</title>
<link rel="stylesheet" href="assets/css/mywork.css">
</head>
<body>

<?php include 'navbar.php'; ?>


// smaller font sa mobile

<section class="mywork-section">
    <h1 class="section-title">My Projects</h1>

    <div class="projects-container">
        <div class="project-card">
            <a href="http://cloudscapeonlinevapeshop.com/" target="_blank" class="project-link">
                <div class="project-overlay">Visit System</div>
                <img src="assets/css/images/Screenshot (293).png" alt="Cloudscape System">
            </a>
            <h3>Cloudscape Online System</h3>
            <p>A fully functional system I developed for Cloudscape Vapeshop.</p>
        </div>
    </div>
</section>


<script>
    
const canvas = document.getElementById('hero-bg');
const ctx = canvas.getContext('2d');

let fontSize = 16;
let columns;
let drops = []

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
