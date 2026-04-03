<?php include('includes/header.php'); ?>

<section class="about">

    <!-- INTRO -->
    <div class="about-box fade-up">
        <h2>About Me</h2>
        <h3>Moulikaa SN</h3>
        <p><strong>B.Sc Information Technology (2023–2026)</strong></p>
        <p class="role">Frontend Developer</p>
    </div>

    <!-- DESCRIPTION -->
    <div class="about-box fade-up delay-1">
        <h2>My Journey</h2>
        <p>
            I chose Information Technology because of my strong interest in understanding how technology 
            shapes the digital world. Over time, this curiosity grew into a passion for web development, 
            where I discovered the power of creating interactive and meaningful user experiences.
        </p>
        <p>
            I am particularly passionate about UI/UX design, as I enjoy crafting clean, intuitive, and 
            visually appealing interfaces. I focus on building responsive and user-friendly applications 
            that provide seamless experiences across devices.
        </p>
    </div>

    <!-- SKILLS -->
    <div class="about-box fade-up delay-2">
        <h2>Technical Skills</h2>
        <div class="skills">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>React</span>
            <span>PHP</span>
            <span>C++</span>
            <span>Python</span>
        </div>
    </div>

    <!-- PROJECTS -->
    <div class="about-box fade-up delay-3">
        <h2>Projects</h2>
        <ul>
            <li><strong>Portfolio Website:</strong> Designed and developed a personal portfolio to showcase my skills and projects.</li>
            <li><strong>Blood Bank System:</strong> Built a system to manage donor details and blood requests efficiently.</li>
            <li><strong>AI Content Generator:</strong> Developed a tool to generate content using AI-based logic.</li>
        </ul>
    </div>

    <!-- ACHIEVEMENTS -->
    <div class="about-box fade-up delay-4">
        <h2>Achievements & Activities</h2>
        <ul>
            <li>IIC Champion (2023–2026)</li>
            <li>Event Organizer (Inter-college & Intra-college events)</li>
            <li>Executive Member – Entrepreneurship Development Cell</li>
        </ul>
    </div>

</section>

<style>
.about {
    padding: 60px 10%;
    background: #f5f7fa;
}

/* CARD STYLE */
.about-box {
    background: #fff;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

/* HOVER EFFECT */
.about-box:hover {
    transform: translateY(-8px) scale(1.01);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.about-box h2 {
    color: #1e3c72;
    margin-bottom: 10px;
}

.about-box h3 {
    margin: 5px 0;
}

.role {
    color: #2a5298;
    font-weight: bold;
}

/* SKILLS */
.skills {
    margin-top: 10px;
}

.skills span {
    display: inline-block;
    background: #1e3c72;
    color: #fff;
    padding: 6px 12px;
    margin: 5px;
    border-radius: 20px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.skills span:hover {
    background: #2a5298;
    transform: scale(1.1);
}

/* LIST */
.about-box ul {
    padding-left: 20px;
}

.about-box ul li {
    margin-bottom: 10px;
    transition: transform 0.3s;
}

.about-box ul li:hover {
    transform: translateX(5px);
}

/* ANIMATION */
.fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s ease forwards;
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
.delay-4 { animation-delay: 0.8s; }

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .about {
        padding: 40px 5%;
    }
}
</style>

<?php include('includes/footer.php'); ?>