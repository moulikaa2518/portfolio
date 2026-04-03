<?php include('includes/header.php'); ?>

<section class="projects">

    <h2 class="title">My Projects</h2>

    <div class="project-container">

        <!-- PROJECT 1 -->
        <div class="project-card fade-up">
            <img src="assets/css/images/bloodbank.jpg" alt="Blood Bank System">
            <h3>Blood Bank Management System</h3>
            <p>
                A web-based system that helps manage blood donors, requests, and availability.
                It allows users to search for blood groups and request donations easily.
            </p>
        </div>

        <!-- PROJECT 2 -->
        <div class="project-card fade-up">
            <img src="assets/css/images/ai.jpg" alt="AI Project">
            <h3>AI Image Generator</h3>
            <p>
                A simple AI-based application that generates images based on user input.
                It demonstrates integration of modern AI tools into web applications.
            </p>
        </div>

    </div>

</section>

<style>

/* BACKGROUND */
body {
    background: linear-gradient(to right, #eef2f3, #dfe9f3);
}

/* TITLE */
.title {
    text-align: center;
    font-size: 32px;
    color: #1e3c72;
    margin-bottom: 40px;
}

/* SECTION */
.projects {
    padding: 60px 10%;
}

/* GRID */
.project-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

/* CARD */
.project-card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: 0.3s;
    text-align: center;
}

/* IMAGE */
.project-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 15px;
}

/* HOVER */
.project-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

/* TEXT */
.project-card h3 {
    color: #1e3c72;
    margin-bottom: 10px;
}

.project-card p {
    color: #555;
    line-height: 1.6;
}

/* ANIMATION */
.fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s forwards;
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .projects {
        padding: 40px 5%;
    }
}

</style>

<?php include('includes/footer.php'); ?>