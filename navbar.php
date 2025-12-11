<nav class="navbar">
    <div class="logo">My Portfolio</div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="mywork.php">My Work</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <!-- Mobile menu toggle -->
    <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<script>
function toggleMenu() {
    const nav = document.querySelector('.nav-links');
    const hamburger = document.querySelector('.hamburger');

    nav.classList.toggle('nav-active');
    hamburger.classList.toggle('toggle');
}

</script>
