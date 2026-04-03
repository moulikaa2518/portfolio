<?php include('includes/header.php'); ?>

<section class="certifications">

    <h2 class="title">My Certifications</h2>

    <div class="cert-card fade-up">
        <p>Introduction to Generative AI Studio – Simplilearn (2024)</p>
    </div>

    <div class="cert-card fade-up delay-1">
        <p>Web Designing Certification – PSGCAS (2024)</p>
    </div>

    <div class="cert-card fade-up delay-2">
        <p>Enhancing Soft Skills – NPTEL (IIT Kanpur) (2024)</p>
    </div>

    <div class="cert-card fade-up delay-3">
        <p>Introduction to Data Mining – Simplilearn (2025)</p>
    </div>

    <div class="cert-card fade-up delay-4">
        <p>Cloud Computing – Simplilearn (2026)</p>
    </div>

    <div class="cert-card fade-up delay-5">
        <p>Ignite India 5.0 – Wadhwani Foundation (2026)</p>
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

.certifications { padding: 60px 10%; }

.cert-card {
    background: white;
    padding: 15px;
    margin: 10px 0;
    border-left: 5px solid #1e3c72;
    border-radius: 8px;
    transition: 0.3s;
}

.cert-card:hover {
    transform: translateX(10px);
}

.fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s forwards;
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
.delay-4 { animation-delay: 0.8s; }
.delay-5 { animation-delay: 1s; }

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<?php include('includes/footer.php'); ?>