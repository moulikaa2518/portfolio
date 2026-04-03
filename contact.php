<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>
<section class="contact">

    <h2 class="fade-in">Contact Me</h2>

    <p class="intro fade-in delay-1">
        I am always open to discussing new opportunities, collaborations, and innovative ideas. 
        Feel free to reach out if you would like to connect, work together, or have any queries. 
        I will get back to you as soon as possible.
    </p>

    <!-- CONTACT DETAILS -->
    <div class="contact-details fade-in delay-2">
        <p><strong>👤 Name:</strong> Moulikaa SN</p>
        <p><strong>💼 Role:</strong> Full Stack Web Developer</p>
        <p><strong>📧 Email:</strong> moulikaamouli18@gmail.com</p>
    </div>

    <!-- SOCIAL LINKS -->
    <div class="social-links fade-in delay-3">
        <a href="https://www.linkedin.com/in/moulikaa-sn-012434272" target="_blank">LinkedIn</a>
        <a href="https://github.com/moulikaa2518" target="_blank">GitHub</a>
    </div>

</section>

<style>
.contact {
    padding: 60px 10%;
    background: #f5f7fa;
    text-align: left;
}

/* TITLE */
.contact h2 {
    color: #1e3c72;
    font-size: 28px;
    margin-bottom: 10px;
}

/* TEXT */
.intro {
    margin: 15px 0;
    color: #555;
    line-height: 1.6;
    max-width: 600px;
}

/* DETAILS */
.contact-details p {
    margin: 8px 0;
    font-size: 15px;
    transition: transform 0.3s ease;
}

.contact-details p:hover {
    transform: translateX(5px);
}

/* SOCIAL */
.social-links {
    margin-top: 20px;
}

.social-links a {
    display: inline-block;
    margin-right: 10px;
    text-decoration: none;
    background: #1e3c72;
    color: #fff;
    padding: 10px 16px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.social-links a:hover {
    background: #2a5298;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.2);
}

/* ANIMATION */
.fade-in {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease forwards;
}

.delay-1 { animation-delay: 0.3s; }
.delay-2 { animation-delay: 0.6s; }
.delay-3 { animation-delay: 0.9s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .contact {
        padding: 40px 5%;
    }
}
</style>
<?php include('includes/footer.php'); ?>