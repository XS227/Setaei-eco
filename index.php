<?php
declare(strict_types=1);

/**
 * Portfolio landing page for Khabat Setaei.
 *
 * Built with small PHP helpers to keep content structured, avoid markup duplication,
 * and guarantee that every dynamic value is safely escaped before rendering.
 */

function esc(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$site = [
    'name' => 'Khabat Setaei',
    'title' => 'Hybrid Intelligence Strategist',
/**
 * Render a list of social icons.
 *
 * @param array<int, array{label: string, url: string, title?: string}> $links
 */
function renderSocialIcons(array $links): string
{
    if ($links === []) {
        return '';
    }

    ob_start();
    echo "<ul class=\"social-icons\">";
    foreach ($links as $link) {
        $label = $link['label'];
        $url = $link['url'];
        $title = $link['title'] ?? $label;
        echo '<li><a href="' . esc($url) . '" title="' . esc($title) . '" rel="noopener" target="_blank">';
        echo '<span class="sr-only">' . esc($label) . '</span>';
        echo '</a></li>';
    }
    echo '</ul>';

    return (string) ob_get_clean();
}

$site = [
    'name' => 'Khabat Setaei',
    'title' => 'AI & Blockchain Portfolio',
    'tagline' => 'AI & Blockchain Engineer',
    'email' => 'khabat@setaei.com',
    'phone' => '+47 4122 7175',
    'location' => 'Remote · Travels frequently',
    'website' => 'https://setaei.com/',
    'meta_description' => 'Khabat Setaei is an AI and blockchain engineer crafting hybrid intelligence products, growth systems, and narrative-driven ventures.',
    'hero_subtitle' => 'Hybrid Intelligence · Blockchain · Product Systems',
    'hero_cta' => 'https://cal.com/khabat-setaei/intro',
    'hero_subtitle' => 'AI & Blockchain • IT Marketing • Jewelry • Crypto',
    'hero_cta' => 'https://cal.com/khabat-setaei/intro',
    'meta_description' => 'Portfolio of Khabat Setaei – AI & Blockchain engineer focused on hybrid intelligence, tokenized products, and growth strategy.',
    'meta_keywords' => 'Khabat Setaei, AI engineer, blockchain consultant, tokenomics, hybrid intelligence',
];

$navigation = [
    ['anchor' => 'home', 'label' => 'Home'],
    ['anchor' => 'about', 'label' => 'About'],
    ['anchor' => 'services', 'label' => 'Services'],
    ['anchor' => 'projects', 'label' => 'Projects'],
    ['anchor' => 'books', 'label' => 'Books'],
    ['anchor' => 'references', 'label' => 'References'],
    ['anchor' => 'contact', 'label' => 'Contact'],
];

$socialLinks = [
    ['label' => 'X', 'url' => 'https://x.com/TheXebat'],
    ['label' => 'LinkedIn', 'url' => 'https://linkedin.com/in/khabat-setaei'],
    ['label' => 'GitHub', 'url' => 'https://github.com/khabat'],
    ['anchor' => 'resume', 'label' => 'Resume'],
    ['anchor' => 'testimonials', 'label' => 'Testimonials'],
    ['anchor' => 'contact', 'label' => 'Contact Me'],
];

$socialLinks = [
    ['label' => 'Facebook', 'url' => 'https://www.facebook.com/t2c360'],
    ['label' => 'X (Twitter)', 'url' => 'https://x.com/TheXebat'],
    ['label' => 'LinkedIn', 'url' => 'https://linkedin.com/in/khabat-setaei'],
    ['label' => 'Instagram', 'url' => 'https://www.instagram.com/xebat227/'],
];

$services = [
    ['title' => 'AI & Blockchain Consulting', 'summary' => 'Token economics, smart contract reviews, and hybrid AI roadmaps.'],
    ['title' => 'Product & Growth Strategy', 'summary' => 'Market positioning, revenue experiments, and analytics for scaling teams.'],
    ['title' => 'Venture Architecture', 'summary' => 'From discovery to launch for web platforms, APIs, and crypto-enabled ventures.'],
    ['title' => 'Design Systems & Identity', 'summary' => 'Minimal visual languages, investor decks, and cohesive brand toolkits.'],
];

$projects = [
    [
        'name' => 'Real Shahnameh',
        'url' => 'https://realshahnameh.setaei.com/',
        'summary' => 'Epic storytelling franchise with blockchain provenance and community tokenomics.',
    ],
    [
        'name' => 'Sisu',
        'url' => 'https://sisu.setaei.com/',
        'summary' => 'Multilingual job and tourism portal connecting Nordic resilience with global talent.',
    ],
    [
        'name' => 'Numerologist',
        'url' => 'https://numerologist.setaei.com/',
        'summary' => 'Data-informed numerology research that guides venture naming and energy mapping.',
    ],
    [
        'name' => 'LiveMesh',
        'url' => 'https://livemesh.setaei.com/',
        'summary' => 'Real-time mesh intelligence lab exploring AI observability and network effects.',
    ],
];

$books = [
    [
        'title' => 'Blockchain Intelligence: Leveraging Cryptocurrency Transactions',
        'summary' => 'Published monograph detailing investigative techniques, compliance tooling, and intelligence models across cryptocurrency railroads.',
        'url' => 'https://www.amazon.de/Blockchain-Intelligence-Leveraging-Cryptocurrency-Transactions/dp/6200696519',
    ],
    [
        'title' => 'Hybrid Intelligence for Collective Foresight',
        'summary' => 'Peer-reviewed study in the Journal of Hybrid Intelligence examining how symbolic and machine learning systems co-create decision support.',
        'url' => 'https://journalhi.com/index.php/com/article/view/247?articlesBySameAuthorPage=2',
    ],
    [
        'title' => 'Real Shahnameh: Mythic Intelligence (Collector’s Edition)',
        'summary' => 'Blockchain-authenticated storytelling series preserving Persian epics through cryptographic provenance and community activation.',
        'url' => 'https://realshahnameh.setaei.com/',
    ],
];

$references = [
    [
        'quote' => '“Khabat has been easy to collaborate with and has consistently shown creativity and dedication beyond expectations. He inspires others to explore new opportunities and brings a unique perspective on inclusion for the Church of Norway.”',
        'name' => 'Elisabeth Kristiansen',
        'link' => 'https://kirken.no/',
        'link_label' => 'kirken.no',
    ],
    [
        'quote' => '“I have collaborated with Khabat Setaei on multiple projects ranging from design, branding, and marketing to web development. One of our most successful joint projects was Dreamwork.no, where he played a key role in both the technology build and marketing strategy. He always delivers high-quality work, listens carefully to customer needs, and always goes the extra mile. I highly recommend Khabat.”',
        'name' => 'Soheil Seyedi',
        'link' => 'https://dreamwork.no/',
        'link_label' => 'dreamwork.no',
    ],
    [
        'quote' => '“We worked with Khabat Setaei on the Megacandy.no project, where he became responsible not only for SEO but also contributed to design, branding, development, and marketing strategy. He is reliable, knowledgeable, and focused on delivering good work and measurable improvements across web authority. Khabat’s ability to combine technical skills with creative marketing insights made a big difference in our success. Customer service and communication were excellent. I can strongly recommend Khabat and his team.”',
        'name' => 'Alexander Boccio',
        'link' => 'https://megacandy.no/',
        'link_label' => 'megacandy.no',
    ],
    [
        'quote' => '“Khabat Setaei provides creative, forward-thinking, and well-crafted solutions with a consistently high level of service, responsiveness, and on-time delivery. For Naturalforce.no, he was responsible for logo design, book design, website development, and social media presence. The results were professional, engaging, and perfectly aligned with our brand identity. Working with Khabat has been a smooth and inspiring experience.”',
        'name' => 'Anne-Mette Røsting',
        'link' => 'https://naturalforce.no/',
        'link_label' => 'naturalforce.no',
    ],
    [
        'quote' => '“We have had the pleasure of working with Khabat on multiple projects under several Scale Group / Viral Media brands, including website and mobile app development, Facebook application work, and digital marketing support. He brings deep technical knowledge with sharp insight and hands-on capability, whether it’s UI/UX design, technology enablement, or marketing. He is reliable and efficient, delivering high-quality results within ambitious timeframes. It is rare to find a partner you can hand a project to, knowing it will be executed with excellence, but for the investment ventures in my network, Khabat has been exactly that partner. I highly recommend him to anyone building within AI, blockchain, or product design and development.”',
        'name' => 'Tor Martin Olsen',
        'link' => 'https://scale-group.no/',
        'link_label' => 'scale-group.no',
    ],
    [
        'quote' => '“I worked together with Khabat Setaei on developing the full brand identity of Pearl Beauty. He created a professional and elegant visual identity, designed our brochures, website, and app, and implemented a modern visual communication design system that immediately elevated our presence. Working with Khabat was genuinely inspiring. We set out with Khabat’s strong commitment and ability to understand our vision, and he translated it into visuals with a consistent, modern aesthetic aligned with our brand values and narrative. His ability to understand Pearl Beauty’s values, translate them into design, and deliver on time was impressive. I can highly recommend him for any business needing brand and digital professionals.”',
        'name' => 'Anna Fors',
        'link' => 'https://pearl-beauty.no/',
        'link_label' => 'pearl-beauty.no',
    ],
    [
        'quote' => '“Khabat Setaei provides creative, forward-thinking solutions with a consistently high level of service and quality. He is always up-to-date and ahead of the curve, delivering excellent results across design, web development, and social media presence. His results were professional, engaging, and perfectly aligned with our brand identity. Working with Khabat has been a smooth and inspiring experience.”',
        'name' => 'Stein Alvern',
        'link' => 'https://anwarmedia.com/',
        'link_label' => 'anwarmedia.com',
    ],
    [
        'quote' => '“I have known Khabat Setaei since 2007 and had the pleasure of working with him for more than a decade. During this time, he has assisted me with hosting, design, and marketing, always delivering reliable and creative solutions that helped grow my business. Khabat was also the one who developed the world’s first numerology calculator for my platform, which has become an essential part of our services and strategy for Numerologens Verden. His technical expertise, combined with his innovative thinking, has been invaluable to me. He is trustworthy, professional, and consistently delivers high-quality results. I can warmly recommend him.”',
        'name' => 'Åse Steinsland',
        'link' => 'https://numerologensverden.no/',
        'link_label' => 'numerologensverden.no',
    ['title' => 'AI & Blockchain Consulting', 'summary' => 'Architecture, tokenomics, audits, smart-contract strategy.'],
    ['title' => 'Product & Growth (IT Marketing)', 'summary' => 'Positioning, funnels, analytics, SEO.'],
    ['title' => 'Web Apps & Integrations', 'summary' => 'Django/Next.js, payments, APIs (Rasmio, etc.).'],
    ['title' => 'Brand & Identity', 'summary' => 'Minimal logos, design systems, guidelines.'],
    ['title' => 'Portfolio & Resume Sites', 'summary' => 'Fast, SEO-ready, Netlify/Vercel deployments.'],
    ['title' => 'Training & Workshops', 'summary' => 'AI literacy and blockchain basics for teams.'],
];

$education = [
    [
        'year' => '2022',
        'title' => 'M.Sc. Computer Engineering (AI & Robotics)',
        'description' => 'Graduated with a thesis on hybrid SEM+ANN, focusing on artificial intelligence and robotics.',
    ],
    [
        'year' => '2018',
        'title' => 'B.Sc. Computer Engineering',
        'description' => 'Completed bachelor’s degree in software engineering and computer systems.',
    ],
    [
        'year' => '2010',
        'title' => 'High School Diploma – Mathematics & Physics',
        'description' => 'Studied advanced mathematics and physics to prepare for engineering education.',
    ],
];

$experience = [
    [
        'year' => '2025–Present',
        'title' => 'Founder & CTO – Sisu Project',
        'description' => 'Launching a multilingual portal for jobs and tourism integrating the Rasmio API and crypto payment rails.',
    ],
    [
        'year' => '2022–2024',
        'title' => 'AI & Blockchain Consultant',
        'description' => 'Designed token economies, performed smart-contract audits, and drove product growth for clients.',
    ],
    [
        'year' => '2019–2022',
        'title' => 'Front-end & Product Engineer',
        'description' => 'Collaborated with Telenor, Google Earth, and Apple on interface development and product strategy.',
    ],
];

$designSkills = [
    ['label' => 'Web Design', 'percent' => 90],
    ['label' => 'Illustration', 'percent' => 80],
    ['label' => 'HTML / CSS', 'percent' => 95],
    ['label' => 'Photoshop', 'percent' => 70],
];

$programmingSkills = [
    ['label' => 'Web Development', 'percent' => 90],
    ['label' => 'PHP / MySQL', 'percent' => 80],
    ['label' => 'Python', 'percent' => 95],
    ['label' => 'C++', 'percent' => 70],
];

$testimonials = [
    [
        'quote' => 'We used Setaei for SEO on our webshop megacandy.no and were very satisfied. We saw strong results and received thorough progress reports along the way. Customer service and communication were impeccable. Highly recommended.',
        'name' => 'Alexander Boccio',
        'title' => 'Founder, megacandy.no',
    ],
    [
        'quote' => 'I have worked with Setaei across several companies I have led and founded—from logo design and web development to marketing assets. He delivers fast, understands customer needs, and always goes the extra mile. I can warmly recommend him.',
        'name' => 'Soheil Seyedi',
        'title' => 'Entrepreneur',
    ],
    [
        'quote' => 'Setaei provides creative, forward-thinking, and well-crafted solutions with a high level of service, responsiveness, and on-time delivery. Up-to-date and ahead of the curve in web development. Recommended.',
        'name' => 'Anne-Mette Røsting',
        'title' => 'Founder, naturalforce.no',
    ],
];

$year = (int) date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= esc($site['meta_description']); ?>">
    <meta name="keywords" content="<?= esc($site['meta_keywords']); ?>">
    <meta property="og:title" content="<?= esc($site['name'] . ' – ' . $site['title']); ?>">
    <meta property="og:description" content="<?= esc($site['meta_description']); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= esc($site['website']); ?>">
    <meta property="og:image" content="https://setaei.com/images/khabat.jpg">
    <link rel="canonical" href="<?= esc($site['website']); ?>">
    <title><?= esc($site['name'] . ' – ' . $site['title']); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;400;500;600&family=IBM+Plex+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fullpage.min.css">
    <link rel="stylesheet" href="css/lity.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/menu-effect.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/background-animation.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "<?= esc($site['name']); ?>",
        "jobTitle": "<?= esc($site['tagline']); ?>",
        "url": "<?= esc($site['website']); ?>",
        "email": "mailto:<?= esc($site['email']); ?>",
        "telephone": "<?= esc($site['phone']); ?>",
        "sameAs": [
            <?php
            $sameAs = array_map(static fn($link) => '"' . esc($link['url']) . '"', $socialLinks);
            echo implode(',', $sameAs);
            ?>
        ]
    }
    </script>
</head>
<body class="light page-with-colors gradient-none" dir="ltr">
    <div class="preloader" aria-hidden="true">
        <div class="preloader-box">
            <span><?= esc($site['name']); ?></span>
        </div>
    </div>

    <div class="menu-style demo-2 animated-row">
        <div class="content--demo-2">
            <button class="hamburger js-hover animate" data-animate="fadeInDown" type="button" aria-label="Toggle navigation">
                <span class="hamburger__line hamburger__line--01"><span class="hamburger__line-in hamburger__line-in--01"></span></span>
                <span class="hamburger__line hamburger__line--02"><span class="hamburger__line-in hamburger__line-in--02"></span></span>
                <span class="hamburger__line hamburger__line--03"><span class="hamburger__line-in hamburger__line-in--03"></span></span>
                <span class="hamburger__line hamburger__line--cross01"><span class="hamburger__line-in hamburger__line-in--cross01"></span></span>
                <span class="hamburger__line hamburger__line--cross02"><span class="hamburger__line-in hamburger__line-in--cross02"></span></span>
            </button>

            <nav class="global-menu" aria-label="Primary">
                <div class="global-menu__wrap">
                    <div class="nav-box navbar-collapse">
                        <ul class="navigation-menu nav navbar-nav" id="nav">
                            <?php foreach ($navigation as $index => $item): ?>
                                <li data-menuanchor="slide<?= sprintf('%02d', $index + 1); ?>"<?= $index === 0 ? ' class="active"' : ''; ?>>
                                    <a class="global-menu__item global-menu__item--demo-2" href="#<?= esc($item['anchor']); ?>"><?= esc($item['label']); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <path class="shape-overlays__path"></path>
                <path class="shape-overlays__path"></path>
                <path class="shape-overlays__path"></path>
                <path class="shape-overlays__path"></path>
            </svg>
        </div>
    </div>

    <div class="page-background" aria-hidden="true">
        <div class="line-wrap line-black">
            <div class="line-item"></div>
            <div class="line-item"></div>
            <div class="line-item"></div>
            <div class="line-item"></div>
            <div class="line-item"></div>
        </div>
    </div>

    <div id="social-icons" class="desktop-none">
        <div class="text-right desktop-none">
            <?= renderSocialIcons($socialLinks); ?>
        </div>
    </div>
    <div class="slide-button desktop-none" aria-hidden="true">
        <div class="next-sec"></div>
        <div class="prev-sec"></div>
    </div>
    <div class="logo-and-title desktop-none">
        <div class="myimg">
            <img src="https://setaei.com/logo.png" alt="<?= esc($site['name']); ?> logo" draggable="false" loading="lazy">
        </div>
        <div class="name-box">
            <h3><?= esc($site['name']); ?></h3>
            <div class="title-box">
                <h5><?= esc($site['tagline']); ?></h5>
            </div>
        </div>
    </div>

    <div id="fullpage" class="fullpage-default">
        <section class="section home animated-row" data-section="home" id="home">
            <div class="fixed-layout-content mobile-none">
                <div class="center">
                    <div id="social-icons-desktop" class="animate" data-animate="fadeInUp">
                        <div class="text-right">
                            <?= renderSocialIcons($socialLinks); ?>
                        </div>
                    </div>
                    <div class="slide-button animate" data-animate="fadeInUp" aria-hidden="true">
                        <div class="next-sec"></div>
                        <div class="prev-sec"></div>
                    </div>
                </div>
                <div class="logo-and-title animate" data-animate="fadeInDown">
                    <div class="myimg">
                        <img src="https://setaei.com/images/khabat.jpg" alt="Portrait of <?= esc($site['name']); ?>" draggable="false" loading="lazy">
                    </div>
                    <div class="name-box">
                        <h3><?= esc($site['name']); ?></h3>
                        <div class="title-box">
                            <h5><?= esc($site['tagline']); ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="current-section animated fadeInUp" data-animate="fadeInUp">
                <div class="lg-line"></div>
                <div class="sm-line"></div>
                <div class="section-name">Welcome</div>
            </div>

            <div class="section-inner">
                <div class="line-wrap line-black" aria-hidden="true">
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                </div>
                <div class="section-hero-content">
                    <h1>Hello!<br>I'm <span><?= esc($site['name']); ?></span></h1>
                    <p class="block">
                        <strong class="sec-font"><?= esc($site['hero_subtitle']); ?></strong>
                    </p>
                    <a href="<?= esc($site['hero_cta']); ?>" class="sec-font btn theme-btn" target="_blank" rel="noopener">
                        <span>Book a 20‑min Call</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="section about animated-row" data-section="about" id="about">
            <div class="fixed-layout-content mobile-none">
                <div class="center">
                    <div class="animate" data-animate="fadeInUp">
                        <div class="text-right">
                            <?= renderSocialIcons($socialLinks); ?>
                        </div>
                    </div>
                    <div class="slide-button animate" data-animate="fadeInUp" aria-hidden="true">
                        <div class="next-sec"></div>
                        <div class="prev-sec"></div>
                    </div>
                </div>
                <div class="logo-and-title animate" data-animate="fadeInDown">
                    <div class="myimg">
                        <img src="https://setaei.com/images/khabat.jpg" alt="Portrait of <?= esc($site['name']); ?>" draggable="false" loading="lazy">
                    </div>
                    <div class="name-box">
                        <h3><?= esc($site['name']); ?></h3>
                        <div class="title-box">
                            <h5><?= esc($site['tagline']); ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="current-section animated fadeInUp" data-animate="fadeInUp">
                <div class="lg-line"></div>
                <div class="sm-line"></div>
                <div class="section-name">About</div>
            </div>

            <div class="section-inner">
                <div class="line-wrap line-black" aria-hidden="true">
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                </div>
                <div class="center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-5">
                                <div class="about-image-area">
                                    <div class="img-box">
                                        <img src="https://setaei.com/images/khabat-profile.jpg" alt="<?= esc($site['name']); ?> working" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7">
                                <div class="about-info-area">
                                    <h2>Hello, I am <span><?= esc($site['name']); ?></span><br><?= esc($site['tagline']); ?></h2>
                                    <p>
                                        I’m an AI &amp; blockchain-focused engineer and product strategist with hands-on experience in IT marketing,
                                        web systems, and tokenized products. I combine technical build with brand growth and bridge the gap between
                                        data infrastructure and storytelling.
                                    </p>
                                    <ul>
                                        <li><div class="p-info"><em>Name</em><span><?= esc($site['name']); ?></span></div></li>
                                        <li><div class="p-info"><em>Date of birth</em><span>March 8, 1983</span></div></li>
                                        <li><div class="p-info"><em>E-mail</em><span><a href="mailto:<?= esc($site['email']); ?>"><?= esc($site['email']); ?></a></span></div></li>
                                        <li><div class="p-info"><em>Phone</em><span><a href="tel:<?= esc(str_replace(' ', '', $site['phone'])); ?>"><?= esc($site['phone']); ?></a></span></div></li>
                                        <li><div class="p-info"><em>Address</em><span><?= esc($site['location']); ?></span></div></li>
                                        <li><div class="p-info"><em>Website</em><span><a href="<?= esc($site['website']); ?>">setaei.com</a></span></div></li>
                                    </ul>
                                    <div class="button-box">
                                        <a href="/docs/Khabat-Setaei-CV.pdf" class="sec-font btn theme-btn" rel="noopener" target="_blank">
                                            <span>Download resume</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section services animated-row" data-section="services" id="services">
            <div class="fixed-layout-content mobile-none">
                <div class="center">
                    <div class="animate" data-animate="fadeInUp">
                        <div class="text-right">
                            <?= renderSocialIcons($socialLinks); ?>
                        </div>
                    </div>
                    <div class="slide-button animate" data-animate="fadeInUp" aria-hidden="true">
                        <div class="next-sec"></div>
                        <div class="prev-sec"></div>
                    </div>
                </div>
                <div class="logo-and-title animate" data-animate="fadeInDown">
                    <div class="myimg">
                        <img src="https://setaei.com/images/khabat.jpg" alt="Portrait of <?= esc($site['name']); ?>" draggable="false" loading="lazy">
                    </div>
                    <div class="name-box">
                        <h3><?= esc($site['name']); ?></h3>
                        <div class="title-box">
                            <h5><?= esc($site['tagline']); ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="current-section animated fadeInUp" data-animate="fadeInUp">
                <div class="lg-line"></div>
                <div class="sm-line"></div>
                <div class="section-name">Services</div>
            </div>

            <div class="section-inner">
                <div class="line-wrap line-black" aria-hidden="true">
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                </div>
                <div class="center">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($services as $index => $service): ?>
                                <div class="col-md-6 col-lg-4">
                                    <article class="service-box<?= $index >= 3 ? ' no-margin' : ''; ?><?= $index === array_key_last($services) ? ' last' : ''; ?>">
                                        <h3><?= esc($service['title']); ?></h3>
                                        <p><?= esc($service['summary']); ?></p>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section resume animated-row" data-section="resume" id="resume">
            <div class="fixed-layout-content mobile-none">
                <div class="center">
                    <div class="animate" data-animate="fadeInUp">
                        <div class="text-right">
                            <?= renderSocialIcons($socialLinks); ?>
                        </div>
                    </div>
                    <div class="slide-button animate" data-animate="fadeInUp" aria-hidden="true">
                        <div class="next-sec"></div>
                        <div class="prev-sec"></div>
                    </div>
                </div>
                <div class="logo-and-title animate" data-animate="fadeInDown">
                    <div class="myimg">
                        <img src="https://setaei.com/images/khabat.jpg" alt="Portrait of <?= esc($site['name']); ?>" draggable="false" loading="lazy">
                    </div>
                    <div class="name-box">
                        <h3><?= esc($site['name']); ?></h3>
                        <div class="title-box">
                            <h5><?= esc($site['tagline']); ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="current-section animated fadeInUp" data-animate="fadeInUp">
                <div class="lg-line"></div>
                <div class="sm-line"></div>
                <div class="section-name">Resume</div>
            </div>

            <div class="section-inner">
                <div class="line-wrap line-black" aria-hidden="true">
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                </div>
                <div class="center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 edu">
                                <div class="resume-box-name"><span>Education</span></div>
                                <?php foreach ($education as $item): ?>
                                    <article class="resume-box">
                                        <div class="rbn">
                                            <span class="rbd"><?= esc($item['year']); ?></span>
                                            <h4><?= esc($item['title']); ?></h4>
                                        </div>
                                        <p class="rbp"><?= esc($item['description']); ?></p>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-md-6 col-lg-4 exp">
                                <div class="resume-box-name"><span>Experience</span></div>
                                <?php foreach ($experience as $item): ?>
                                    <article class="resume-box">
                                        <div class="rbn">
                                            <span class="rbd"><?= esc($item['year']); ?></span>
                                            <h4><?= esc($item['title']); ?></h4>
                                        </div>
                                        <p class="rbp"><?= esc($item['description']); ?></p>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-lg-4 col-md-12 skills">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="lws resume-box-name"><span>Design Skills</span></div>
                                        <?php foreach ($designSkills as $skill): ?>
                                            <div class="skill-box">
                                                <h4 class="skill-title"><?= esc($skill['label']); ?></h4>
                                                <div class="progress-line">
                                                    <span data-percent="<?= esc((string) $skill['percent']); ?>" style="width: <?= esc((string) $skill['percent']); ?>%;"><span class="percent-tooltip"><?= esc((string) $skill['percent']); ?>%</span></span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-6 col-lg-12">
                                        <div class="lsw resume-box-name"><span>Programming Skills</span></div>
                                        <?php foreach ($programmingSkills as $skill): ?>
                                            <div class="skill-box">
                                                <h4 class="skill-title"><?= esc($skill['label']); ?></h4>
                                                <div class="progress-line">
                                                    <span data-percent="<?= esc((string) $skill['percent']); ?>" style="width: <?= esc((string) $skill['percent']); ?>%;"><span class="percent-tooltip"><?= esc((string) $skill['percent']); ?>%</span></span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section testimonials animated-row" data-section="testimonials" id="testimonials">
            <div class="fixed-layout-content mobile-none">
                <div class="center">
                    <div class="animate" data-animate="fadeInUp">
                        <div class="text-right">
                            <?= renderSocialIcons($socialLinks); ?>
                        </div>
                    </div>
                    <div class="slide-button animate" data-animate="fadeInUp" aria-hidden="true">
                        <div class="next-sec"><em class="fa fa-arrow-down" aria-hidden="true"></em></div>
                        <div class="prev-sec"><em class="fa fa-arrow-up" aria-hidden="true"></em></div>
                    </div>
                </div>
                <div class="logo-and-title animate" data-animate="fadeInDown">
                    <div class="myimg">
                        <img src="https://setaei.com/images/khabat.jpg" alt="Portrait of <?= esc($site['name']); ?>" draggable="false" loading="lazy">
                    </div>
                    <div class="name-box">
                        <h3><?= esc($site['name']); ?></h3>
                        <div class="title-box">
                            <h5><?= esc($site['tagline']); ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="current-section animated fadeInUp" data-animate="fadeInUp">
                <div class="lg-line"></div>
                <div class="sm-line"></div>
                <div class="section-name">Clients</div>
            </div>

            <div class="section-inner">
                <div class="line-wrap line-black" aria-hidden="true">
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                </div>
                <div class="center">
                    <div class="container">
                        <div class="row align">
                            <div class="col-sm-12 col-lg-5 col-md-5">
                                <div class="section-image">
                                    <img src="https://setaei.com/images/testimonials-cover.jpg" alt="Client collaboration" loading="lazy">
                                    <div class="video-play">
                                        <a href="https://www.youtube.com/watch?v=usO_6-RuCrg" data-lity>
                                            <em class="pe-7s-play" aria-hidden="true"></em>
                                            <span class="sr-only">Play intro video</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 nb" aria-hidden="true"></div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="box-title nmt">What Others Say</div>
                                <div class="testimonials-slider owl-carousel" aria-live="polite">
                                    <?php foreach ($testimonials as $testimonial): ?>
                                        <figure class="testimonial-box">
                                            <blockquote class="testimonial-paragraph">“<?= esc($testimonial['quote']); ?>”</blockquote>
                                            <figcaption class="testimonial-img-name">
                                                <img src="https://setaei.com/images/testimonial-placeholder.jpg" alt="<?= esc($testimonial['name']); ?>" loading="lazy">
                                                <div class="client-info">
                                                    <h4 class="testimonial-name"><?= esc($testimonial['name']); ?></h4>
                                                    <span class="client-title"><?= esc($testimonial['title']); ?></span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section contact animated-row" data-section="contact" id="contact">
            <div class="fixed-layout-content mobile-none">
                <div class="center">
                    <div class="animate" data-animate="fadeInUp">
                        <div class="text-right">
                            <?= renderSocialIcons($socialLinks); ?>
                        </div>
                    </div>
                    <div class="slide-button animate" data-animate="fadeInUp" aria-hidden="true">
                        <div class="next-sec"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
                        <div class="prev-sec"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="logo-and-title animate" data-animate="fadeInDown">
                    <div class="myimg">
                        <img src="https://setaei.com/images/khabat.jpg" alt="Portrait of <?= esc($site['name']); ?>" draggable="false" loading="lazy">
                    </div>
                    <div class="name-box">
                        <h3><?= esc($site['name']); ?></h3>
                        <div class="title-box">
                            <h5><?= esc($site['location']); ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="current-section animated fadeInUp" data-animate="fadeInUp">
                <div class="lg-line"></div>
                <div class="sm-line"></div>
                <div class="section-name">Contact Me</div>
            </div>

            <div class="section-inner">
                <div class="line-wrap line-black" aria-hidden="true">
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                    <div class="line-item"></div>
                </div>
                <div class="center">
                    <div class="container">
                        <div class="row align">
                            <div class="col-md-5">
                                <img src="images/contact-cover.jpg" alt="Remote & travels frequently" style="width:100%;height:auto;border-radius:12px;object-fit:cover;" loading="lazy">
                            </div>
                            <div class="col-md-7">
                                <div class="box-title">Let's Talk.</div>
                                <form method="post" action="https://formspree.io/f/mwkzkzyb" class="contact-form" autocomplete="on">
                                    <p>Your information is kept confidential and used only to respond to your inquiry.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="sr-only" for="first-name">First Name</label>
                                            <input type="text" id="first-name" name="first_name" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only" for="last-name">Last Name</label>
                                            <input type="text" id="last-name" name="last_name" placeholder="Last Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only" for="email">Your Email Address</label>
                                            <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only" for="location">Where are you from?</label>
                                            <input type="text" id="location" name="location" placeholder="Where are you from?">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="sr-only" for="message">Message</label>
                                            <textarea id="message" name="message" placeholder="Enter Your Message" rows="4" required></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="hidden" name="context" value="<?= esc($site['name']); ?> Portfolio Inquiry">
                                            <input type="submit" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                                <div class="contact-alt">
                                    <p><strong>Email:</strong> <a href="mailto:<?= esc($site['email']); ?>"><?= esc($site['email']); ?></a></p>
                                    <p><strong>Phone:</strong> <a href="tel:<?= esc(str_replace(' ', '', $site['phone'])); ?>"><?= esc($site['phone']); ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="site-footer">
        <div class="container text-center">
            <p>© <?= esc((string) $year); ?> <?= esc($site['name']); ?> · All rights reserved · <a href="mailto:<?= esc($site['email']); ?>"><?= esc($site['email']); ?></a></p>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fullpage.min.js"></script>
    <script src="js/scrolloverflow.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/form.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s" defer></script>
    <script src="js/gmaps.js" defer></script>
    <script src="js/menu-effect.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
