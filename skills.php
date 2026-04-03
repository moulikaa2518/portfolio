<?php include('includes/header.php'); ?>

<section class="skills-page">

    <h2 class="title">My Skills</h2>

    <!-- TECHNICAL SKILLS -->
    <div class="card fade-up">
        <h3>Technical Skills</h3>

        <div class="skill">
            <p>HTML / CSS</p>
            <div class="bar"><div class="fill" style="width: 90%"></div></div>
        </div>

        <div class="skill">
            <p>JavaScript</p>
            <div class="bar"><div class="fill" style="width: 75%"></div></div>
        </div>

        <div class="skill">
            <p>React</p>
            <div class="bar"><div class="fill" style="width: 70%"></div></div>
        </div>

        <div class="skill">
            <p>PHP</p>
            <div class="bar"><div class="fill" style="width: 75%"></div></div>
        </div>

        <div class="skill">
            <p>Python</p>
            <div class="bar"><div class="fill" style="width: 60%"></div></div>
        </div>

        <div class="skill">
            <p>Core Java</p>
            <div class="bar"><div class="fill" style="width: 65%"></div></div>
        </div>
    </div>

    <!-- TOOLS -->
    <div class="card fade-up delay-1">
        <h3>Tools & Technologies</h3>
        <div class="tags">
            <span>Bootstrap</span>
            <span>Tailwind</span>
            <span>Power BI</span>
            <span>Excel</span>
            <span>Canva</span>
            <span>GitHub</span>
        </div>
    </div>

    <!-- SOFT SKILLS -->
    <div class="card fade-up delay-2">
        <h3>Soft Skills</h3>
        <div class="tags">
            <span>Teamwork</span>
            <span>Communication</span>
            <span>Adaptability</span>
        </div>
    </div>

</section>

<style>
body { background: linear-gradient(to right, #eef2f3, #dfe9f3); }

.title {
    text-align: center;
    font-size: 30px;
    color: #1e3c72;
    margin-bottom: 30px;
}

.skills-page { padding: 60px 10%; }

.card {
    background: white;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-10px);
}

.skill { margin-bottom: 15px; }

.bar {
    background: #ddd;
    border-radius: 10px;
}

.fill {
    height: 10px;
    background: linear-gradient(90deg, #1e3c72, #2a5298);
    animation: fillAnim 2s ease;
}

@keyframes fillAnim {
    from { width: 0; }
}

.tags span {
    display: inline-block;
    background: #1e3c72;
    color: white;
    padding: 6px 12px;
    margin: 5px;
    border-radius: 20px;
    transition: 0.3s;
}

.tags span:hover {
    transform: scale(1.1);
}

.fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s forwards;
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<?php include('includes/footer.php'); ?>