<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>
<section class="hero">
    <div class="hero-container">

        <!-- LEFT CONTENT -->
        <div class="hero-text">
            <p class="intro">Hello, I'm</p>
            <h1 class="name">Moulikaa</h1>

            <p class="description">
             A passionate and curious learner currently pursuing a Bachelor of Science in Information Technology at PSG College of Arts and Science (2023–2026 batch), I am highly motivated to build a strong career in Front-End Development. I enjoy blending creativity with functionality to design and develop modern, responsive, and user-friendly web applications.

With a strong interest in continuous learning, I actively explore new technologies, tools, and design trends to enhance my skills and stay updated in the ever-evolving tech world. I take pride in writing clean, efficient code and creating intuitive user interfaces that provide meaningful user experiences.

Alongside web development, I also have an interest in data analysis, which strengthens my problem-solving and analytical thinking abilities. I am eager to grow, take on new challenges, and contribute to impactful digital solutions while continuously improving my technical and professional skills.
            </p>

            <p class="description">
                I enjoy transforming ideas into reality through clean design and efficient code. 
                With a strong interest in web development and data analysis, I continuously 
                explore new technologies to grow and innovate.
            </p>

            <!-- Buttons -->
            <div class="hero-buttons">
                <a href="projects.php" class="btn-primary">View Projects</a>
                <a href="contact.php" class="btn-secondary">Hire Me</a>
            </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="hero-image">
            <img src=".\assets\css\images\image.png" alt="My Photo">
        </div>

    </div>
</section>

<style>
.hero {
    padding: 60px 10%;
    background: #f5f7fa;
}

.hero-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
}

/* TEXT */
.hero-text {
    flex: 1;
}

.intro {
    font-size: 18px;
    color: #555;
}

.name {
    font-size: 48px;
    font-weight: 700;
    color: #1e3c72;
    margin: 10px 0;
}

.description {
    font-size: 16px;
    color: #444;
    line-height: 1.7;
    margin-bottom: 15px;
}

/* BUTTONS */
.hero-buttons {
    margin-top: 20px;
}

.btn-primary {
    background: #1e3c72;
    color: #fff;
    padding: 10px 18px;
    text-decoration: none;
    border-radius: 6px;
    margin-right: 10px;
    transition: 0.3s;
}

.btn-primary:hover {
    background: #2a5298;
}

.btn-secondary {
    border: 2px solid #1e3c72;
    color: #1e3c72;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 6px;
    transition: 0.3s;
}

.btn-secondary:hover {
    background: #1e3c72;
    color: #fff;
}

/* IMAGE */
.hero-image {
    flex: 1;
    text-align: center;
}

.hero-image img {
    width: 280px;
    height: 280px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #1e3c72;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .hero-container {
        flex-direction: column;
        text-align: center;
    }

    .name {
        font-size: 36px;
    }
}
</style>
<?php include('includes/footer.php'); ?>