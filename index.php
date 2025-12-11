<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Christian Jay Cabalan | Portfolio</title>
<link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="hero">
    <div class="left">
        <p class="intro-text">Hello everyone, I am</p>
        <h1 class="typing">Christian Jay Cabalan</h1>
        <p>Future Full‑Stack Developer | PHP | Laravel | MySQL</p>
    </div>

    <div class="right">
        <img src="assets/css/images/profile.png" alt="Profile" class="profile-img" onclick="openModal()">
    </div>
</section>

<div id="profileModal" class="modal" onclick="closeModal()">
    <img src="assets/css/images/profile.png" class="modal-content">
</div>


<script>
function openModal() {
    document.getElementById('profileModal').style.display = 'flex';
}
function closeModal() {
    document.getElementById('profileModal').style.display = 'none';
}

// Typing animation
const typingText = document.querySelector('.typing');
const fullText = typingText.innerText;
typingText.innerText = '';

let index = 0;
function type() {
    if (index < fullText.length) {
        typingText.innerText += fullText[index];
        index++;
        setTimeout(type, 150); // speed ng type
    } else {
        // Optional: loop typing
        setTimeout(() => {
            typingText.innerText = '';
            index = 0;
            type();
        }, 2000);
    }
}
type();
</script>

</body>
</html>
