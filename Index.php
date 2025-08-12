<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Developer - Biyografi</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --gs-yellow: #FFD700;
            --gs-red: #FF0000;
            --gs-orange: #FFA500;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .bg-gs-gradient {
            background: linear-gradient(135deg, var(--gs-yellow) 0%, var(--gs-orange) 50%, var(--gs-red) 100%);
        }

        .text-gs-red {
            color: var(--gs-red) !important;
        }

        .text-gs-yellow {
            color: var(--gs-yellow) !important;
        }

        .border-gs-yellow {
            border-color: var(--gs-yellow) !important;
        }

        .border-gs-red {
            border-color: var(--gs-red) !important;
        }

        .btn-gs {
            background: linear-gradient(135deg, var(--gs-yellow), var(--gs-red));
            border: none;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gs:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
            color: white;
        }

        .card-gs {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .card-gs:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .skill-bar {
            height: 8px;
            background: #e9ecef;
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--gs-yellow), var(--gs-red));
            border-radius: 4px;
            transition: width 1s ease-in-out;
        }

        .tech-badge {
            background: linear-gradient(135deg, var(--gs-yellow), var(--gs-orange));
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border: 4px solid var(--gs-yellow);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
        }

        .section-divider {
            height: 3px;
            background: linear-gradient(90deg, var(--gs-yellow), var(--gs-red));
            border-radius: 2px;
            width: 60px;
            margin: 0 auto 2rem;
        }

        .experience-timeline {
            position: relative;
            padding-left: 2rem;
        }

        .experience-timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--gs-red);
        }

        .experience-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .experience-item::before {
            content: '';
            position: absolute;
            left: -2.5rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: var(--gs-yellow);
            border: 2px solid var(--gs-red);
            border-radius: 50%;
        }

        .header-gs {
            background: linear-gradient(135deg, var(--gs-yellow) 0%, var(--gs-orange) 50%, var(--gs-red) 100%);
            color: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);
        }

        .info-item {
            background: #f8f9fa;
            border-left: 3px solid var(--gs-yellow);
            border-radius: 8px;
        }

        .info-item strong {
            color: var(--gs-red);
        }
    </style>
</head>
<body>
    <?php
    // PHP 8+ özellikleri kullanarak veri yapıları
    $personalInfo = [
        'name' => 'Ahmet Yılmaz',
        'title' => 'Senior Frontend Developer',
        'age' => 28,
        'location' => 'İstanbul, Türkiye',
        'email' => 'ahmet.yilmaz@email.com',
        'phone' => '+90 555 123 4567',
        'website' => 'www.ahmetyilmaz.dev',
        'github' => 'github.com/ahmetyilmaz',
        'linkedin' => 'linkedin.com/in/ahmetyilmaz'
    ];

    $skills = [
        'Frontend' => [
            'HTML5' => 95,
            'CSS3' => 90,
            'JavaScript (ES6+)' => 88,
            'React.js' => 85,
            'Vue.js' => 80,
            'TypeScript' => 75
        ],
        'Backend & Tools' => [
            'Node.js' => 70,
            'PHP' => 65,
            'Git' => 90,
            'Webpack' => 75,
            'Docker' => 60
        ],
        'Design & UI/UX' => [
            'Figma' => 85,
            'Adobe XD' => 80,
            'Responsive Design' => 95,
            'UI/UX Principles' => 85,
            'Accessibility' => 80
        ]
    ];

    $experience = [
        [
            'title' => 'Senior Frontend Developer',
            'company' => 'TechCorp İstanbul',
            'period' => '2022 - Günümüz',
            'description' => 'React ve TypeScript kullanarak büyük ölçekli web uygulamaları geliştirme, takım liderliği ve mentorluk yapma.'
        ],
        [
            'title' => 'Frontend Developer',
            'company' => 'Digital Solutions Ltd.',
            'period' => '2020 - 2022',
            'description' => 'Vue.js ve modern JavaScript teknolojileri ile e-ticaret platformları geliştirme.'
        ],
        [
            'title' => 'Junior Frontend Developer',
            'company' => 'StartupHub',
            'period' => '2019 - 2020',
            'description' => 'HTML, CSS, JavaScript ile responsive web siteleri ve kullanıcı arayüzleri tasarlama.'
        ]
    ];

    $projects = [
        [
            'name' => 'E-Ticaret Platformu',
            'description' => 'React ve Node.js ile geliştirilmiş modern e-ticaret platformu. Redux state management ve responsive tasarım.',
            'tech' => ['React', 'Node.js', 'MongoDB', 'Redux', 'Stripe']
        ],
        [
            'name' => 'Task Management App',
            'description' => 'Vue.js ile geliştirilmiş görev yönetim uygulaması. Drag & drop özelliği ve real-time güncellemeler.',
            'tech' => ['Vue.js', 'Firebase', 'Vuex', 'Vuetify']
        ],
        [
            'name' => 'Portfolio Website',
            'description' => 'Modern ve responsive portfolio web sitesi. CSS Grid, Flexbox ve animasyonlar ile geliştirildi.',
            'tech' => ['HTML5', 'CSS3', 'JavaScript', 'GSAP']
        ],
        [
            'name' => 'Weather Dashboard',
            'description' => 'Hava durumu dashboard uygulaması. API entegrasyonu ve interaktif grafikler.',
            'tech' => ['React', 'Chart.js', 'OpenWeather API', 'Axios']
        ]
    ];

    // PHP 8+ match expression kullanımı
    $getSkillLevel = fn(int $percentage): string => match(true) {
        $percentage >= 90 => 'Uzman',
        $percentage >= 80 => 'İleri',
        $percentage >= 70 => 'Orta-İleri',
        $percentage >= 60 => 'Orta',
        default => 'Başlangıç'
    };
    ?>

    <div class="container py-5">
        <!-- Header Section -->
        <div class="header-gs text-center py-5 mb-5">
            <div class="container">
                <h1 class="display-4 fw-bold mb-3"><?= htmlspecialchars($personalInfo['name']) ?></h1>
                <p class="lead mb-0"><?= htmlspecialchars($personalInfo['title']) ?></p>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="card card-gs mb-5">
            <div class="card-body p-4">
                <h2 class="text-gs-red text-center mb-4">Kişisel Bilgiler</h2>
                <div class="section-divider"></div>
                
                <div class="row align-items-center">
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <img src="https://via.placeholder.com/150x150/FFD700/FF0000?text=AY" 
                             alt="Ahmet Yılmaz" 
                             class="profile-img rounded-circle">
                    </div>
                    <div class="col-md-9">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="info-item p-3">
                                    <strong><i class="bi bi-person-circle me-2"></i>Yaş:</strong> <?= $personalInfo['age'] ?> yaşında
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-item p-3">
                                    <strong><i class="bi bi-geo-alt me-2"></i>Konum:</strong> <?= htmlspecialchars($personalInfo['location']) ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-item p-3">
                                    <strong><i class="bi bi-envelope me-2"></i>E-posta:</strong> <?= htmlspecialchars($personalInfo['email']) ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-item p-3">
                                    <strong><i class="bi bi-telephone me-2"></i>Telefon:</strong> <?= htmlspecialchars($personalInfo['phone']) ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="info-item p-3">
                                    <strong><i class="bi bi-globe me-2"></i>Website:</strong> <?= htmlspecialchars($personalInfo['website']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="card card-gs mb-5">
            <div class="card-body p-4">
                <h2 class="text-gs-red text-center mb-4">Yetenekler</h2>
                <div class="section-divider"></div>
                
                <div class="row g-4">
                    <?php foreach ($skills as $category => $skillList): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 border-gs-yellow">
                                <div class="card-header bg-light text-gs-red text-center fw-bold">
                                    <i class="bi bi-code-slash me-2"></i><?= htmlspecialchars($category) ?>
                                </div>
                                <div class="card-body">
                                    <?php foreach ($skillList as $skill => $percentage): ?>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span class="fw-medium"><?= htmlspecialchars($skill) ?></span>
                                                <small class="text-muted"><?= $percentage ?>%</small>
                                            </div>
                                            <div class="skill-bar">
                                                <div class="skill-fill" style="width: <?= $percentage ?>%"></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Experience Section -->
        <div class="card card-gs mb-5">
            <div class="card-body p-4">
                <h2 class="text-gs-red text-center mb-4">Deneyim</h2>
                <div class="section-divider"></div>
                
                <div class="experience-timeline">
                    <?php foreach ($experience as $exp): ?>
                        <div class="experience-item">
                            <div class="card border-gs-red">
                                <div class="card-body">
                                    <h5 class="card-title text-gs-red mb-2">
                                        <i class="bi bi-briefcase me-2"></i><?= htmlspecialchars($exp['title']) ?>
                                    </h5>
                                    <h6 class="card-subtitle mb-3 text-muted">
                                        <i class="bi bi-building me-2"></i><?= htmlspecialchars($exp['company']) ?> | <?= htmlspecialchars($exp['period']) ?>
                                    </h6>
                                    <p class="card-text mb-0"><?= htmlspecialchars($exp['description']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Projects Section -->
        <div class="card card-gs mb-5">
            <div class="card-body p-4">
                <h2 class="text-gs-red text-center mb-4">Projeler</h2>
                <div class="section-divider"></div>
                
                <div class="row g-4">
                    <?php foreach ($projects as $project): ?>
                        <div class="col-lg-6">
                            <div class="card h-100 card-gs border-gs-yellow">
                                <div class="card-body">
                                    <h5 class="card-title text-gs-red mb-3">
                                        <i class="bi bi-folder2-open me-2"></i><?= htmlspecialchars($project['name']) ?>
                                    </h5>
                                    <p class="card-text mb-3"><?= htmlspecialchars($project['description']) ?></p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <?php foreach ($project['tech'] as $tech): ?>
                                            <span class="badge tech-badge"><?= htmlspecialchars($tech) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="card card-gs">
            <div class="card-body p-4 text-center">
                <h2 class="text-gs-red mb-4">İletişim</h2>
                <div class="section-divider"></div>
                
                <p class="lead mb-4">Benimle iletişime geçmek için aşağıdaki linkleri kullanabilirsiniz.</p>
                
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="mailto:<?= htmlspecialchars($personalInfo['email']) ?>" 
                       class="btn btn-gs btn-lg">
                        <i class="bi bi-envelope me-2"></i>E-posta
                    </a>
                    <a href="https://<?= htmlspecialchars($personalInfo['github']) ?>" 
                       class="btn btn-gs btn-lg" target="_blank">
                        <i class="bi bi-github me-2"></i>GitHub
                    </a>
                    <a href="https://<?= htmlspecialchars($personalInfo['linkedin']) ?>" 
                       class="btn btn-gs btn-lg" target="_blank">
                        <i class="bi bi-linkedin me-2"></i>LinkedIn
                    </a>
                    <a href="https://<?= htmlspecialchars($personalInfo['website']) ?>" 
                       class="btn btn-gs btn-lg" target="_blank">
                        <i class="bi bi-globe me-2"></i>Website
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Modern JavaScript ile interaktif özellikler
        document.addEventListener('DOMContentLoaded', function() {
            // Skill animasyonları
            const skillFills = document.querySelectorAll('.skill-fill');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.width = entry.target.style.width;
                    }
                });
            });

            skillFills.forEach(fill => observer.observe(fill));

            // Bootstrap tooltip'leri aktifleştir
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Smooth scroll için
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Galatasaray renk teması ile hover efektleri
            document.querySelectorAll('.card-gs').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>