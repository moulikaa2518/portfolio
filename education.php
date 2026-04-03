<?php include('includes/header.php'); ?>

<section class="education">

    <h2 class="title">My Education</h2>

    <div class="timeline">

        <!-- COLLEGE -->
        <div class="timeline-item fade-up">
            <div class="circle"></div>
            <div class="content">
                <h3>B.Sc Information Technology</h3>
                <p class="place">PSG College of Arts & Science</p>
                <p class="year">2023 – 2026</p>
                <p class="marks">Percentage: 80.65%</p>
            </div>
        </div>

        <!-- HSC -->
        <div class="timeline-item fade-up delay-1">
            <div class="circle"></div>
            <div class="content">
                <h3>Higher Secondary (HSC)</h3>
                <p class="place">Government High School, Sirumugaiputhur</p>
                <p class="year">2022 – 2023</p>
                <p class="marks">Percentage: 82%</p>
            </div>
        </div>

        <!-- SSLC -->
        <div class="timeline-item fade-up delay-2">
            <div class="circle"></div>
            <div class="content">
                <h3>SSLC</h3>
                <p class="place">Alagiri Suresh Government High School, Alangombu</p>
                <p class="year">2020 – 2021</p>
            </div>
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
.education {
    padding: 60px 10%;
}

/* TIMELINE */
.timeline {
    position: relative;
    margin: auto;
    padding-left: 20px;
    border-left: 3px solid #1e3c72;
}

/* ITEM */
.timeline-item {
    position: relative;
    margin-bottom: 40px;
}

/* DOT */
.circle {
    position: absolute;
    left: -11px;
    top: 5px;
    width: 18px;
    height: 18px;
    background: #1e3c72;
    border-radius: 50%;
}

/* CONTENT */
.content {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-left: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.content:hover {
    transform: translateY(-5px);
}

/* TEXT */
.content h3 {
    color: #1e3c72;
    margin-bottom: 5px;
}

.place {
    font-weight: 500;
    color: #555;
}

.year {
    color: #888;
    font-size: 14px;
}

.marks {
    color: #2a5298;
    font-weight: bold;
    margin-top: 5px;
}

/* ANIMATION */
.fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s forwards;
}

.delay-1 { animation-delay: 0.3s; }
.delay-2 { animation-delay: 0.6s; }

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .education {
        padding: 40px 5%;
    }
}

</style>

<?php include('includes/footer.php'); ?>