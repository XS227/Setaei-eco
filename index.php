<?php
declare(strict_types=1);

function esc(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$site = [
    'name' => 'Khabat Setaei',
    'title' => 'Hybrid Intelligence Strategist',
    'tagline' => 'AI & Blockchain Engineer',
    'email' => 'khabat@setaei.com',
    'phone' => '+47 4122 7175',
    'location' => 'Remote · Travels frequently',
    'website' => 'https://setaei.com/',
    'meta_description' => 'Khabat Setaei is an AI and blockchain engineer crafting hybrid intelligence products, growth systems, and narrative-driven ventures.',
    'hero_subtitle' => 'Hybrid Intelligence · Blockchain · Product Systems',
    'hero_cta' => 'https://cal.com/khabat-setaei/intro',
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
    <link rel="canonical" href="<?= esc($site['website']); ?>">
    <title><?= esc($site['name'] . ' – ' . $site['title']); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;600;700&family=IBM+Plex+Mono:wght@300;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f9f9f9;
            --fg: #111111;
            --muted: #555555;
            --line: #dcdcdc;
            --card-bg: #ffffff;
            --max-width: 1100px;
        }
        *, *::before, *::after { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'IBM Plex Sans', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg);
            color: var(--fg);
            line-height: 1.7;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        a:hover,
        a:focus {
            text-decoration: underline;
        }
        header, section, footer { padding: 80px 20px; }
        .container { max-width: var(--max-width); margin: 0 auto; }
        header { padding-top: 40px; }
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding-bottom: 24px;
            margin-bottom: 48px;
            border-bottom: 1px solid var(--line);
        }
        .nav-brand { font-size: 1.5rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; }
        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
        }
        .nav-links a { color: var(--muted); }
        .hero {
            display: grid;
            gap: 36px;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            align-items: center;
        }
        .hero h1 { font-size: clamp(2.4rem, 5vw, 3.4rem); margin: 0 0 16px; }
        .hero p { margin: 0 0 20px; color: var(--muted); font-size: 1.05rem; }
        .hero .cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 26px;
            border: 1px solid var(--fg);
            color: var(--fg);
            font-weight: 600;
            border-radius: 999px;
            transition: background-color 0.2s ease, color 0.2s ease;
        }
        .hero .cta:hover,
        .hero .cta:focus {
            background: var(--fg);
            color: #ffffff;
        }
        .hero-portrait {
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--line);
            background: var(--card-bg);
            min-height: 320px;
        }
        .hero-portrait img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .section-title {
            text-transform: uppercase;
            letter-spacing: 0.28em;
            font-size: 0.82rem;
            color: var(--muted);
            margin-bottom: 14px;
        }
        h2 { margin: 0 0 20px; font-size: clamp(2rem, 4vw, 2.6rem); }
        p { margin: 0 0 18px; }
        .grid {
            display: grid;
            gap: 22px;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }
        .card {
            background: var(--card-bg);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 24px;
            min-height: 170px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .card h3 { margin: 0; font-size: 1.18rem; }
        .card p { margin: 0; color: var(--muted); }
        .card a {
            margin-top: auto;
            font-family: 'IBM Plex Mono', monospace;
            font-size: 0.9rem;
            color: var(--fg);
        }
        .about-list { display: grid; gap: 8px; margin: 0; padding: 0; list-style: none; font-size: 0.95rem; color: var(--muted); }
        blockquote {
            margin: 0 0 12px;
            padding: 0;
            font-size: 1.02rem;
        }
        .reference-meta {
            margin-top: auto;
            color: var(--muted);
            font-family: 'IBM Plex Mono', monospace;
            font-size: 0.85rem;
            letter-spacing: 0.04em;
        }
        .social-list {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            list-style: none;
            padding: 0;
            margin: 28px 0 0;
        }
        .social-list a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            border: 1px solid var(--line);
            border-radius: 999px;
            font-size: 0.85rem;
            color: var(--fg);
        }
        .contact-panel {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 22px;
            align-items: stretch;
        }
        .contact-card {
            background: var(--card-bg);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 24px;
        }
        .contact-card h3 {
            margin-top: 0;
            font-size: 1.18rem;
        }
        footer {
            padding: 40px 20px;
            text-align: center;
            color: var(--muted);
            font-size: 0.88rem;
            border-top: 1px solid var(--line);
        }
        @media (max-width: 720px) {
            nav { flex-direction: column; align-items: flex-start; }
            .nav-links { flex-wrap: wrap; justify-content: flex-start; }
        }
    </style>
</head>
<body>
    <header id="home">
        <div class="container">
            <nav>
                <div class="nav-brand"><?= esc($site['name']); ?></div>
                <ul class="nav-links">
                    <?php foreach ($navigation as $item): ?>
                        <li><a href="#<?= esc($item['anchor']); ?>"><?= esc($item['label']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="hero">
                <div>
                    <span class="section-title">Hybrid Intelligence Studio</span>
                    <h1><?= esc($site['name']); ?></h1>
                    <p><?= esc($site['hero_subtitle']); ?></p>
                    <a class="cta" href="<?= esc($site['hero_cta']); ?>" target="_blank" rel="noopener">Book a 20‑min call →</a>
                    <ul class="social-list">
                        <?php foreach ($socialLinks as $link): ?>
                            <li><a href="<?= esc($link['url']); ?>" target="_blank" rel="noopener"><?= esc($link['label']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="hero-portrait">
                    <img src="https://setaei.com/images/khabat.jpg" alt="Portrait of <?= esc($site['name']); ?>" loading="lazy">
                </div>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <span class="section-title">About</span>
            <h2>Designing systems where data, finance, and myth co-exist.</h2>
            <p>
                I bridge AI architectures with tokenized products and crafted storytelling. From Nordic growth funds to
                independent founders, teams work with me to architect resilient products, build brand equity, and translate
                complex technology into market-ready experiences.
            </p>
            <p>
                I recently completed an M.Sc. in Computer Engineering (AI &amp; Robotics), focusing on hybrid intelligence models
                that blend symbolic reasoning with neural systems. That research now informs advisory work across venture design,
                data strategy, and narrative systems.
            </p>
            <p>
                Selected experiments, prototypes, and research notes are shared openly on GitHub to support peers exploring
                hybrid intelligence, blockchain infrastructure, and computational storytelling.
            </p>
            <ul class="about-list">
                <li><strong>Email:</strong> <a href="mailto:<?= esc($site['email']); ?>"><?= esc($site['email']); ?></a></li>
                <li><strong>Phone:</strong> <a href="tel:+4741227175"><?= esc($site['phone']); ?></a></li>
                <li><strong>Location:</strong> <?= esc($site['location']); ?></li>
                <li><strong>Website:</strong> <a href="<?= esc($site['website']); ?>">setaei.com</a></li>
            </ul>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <span class="section-title">Services</span>
            <h2>What I lead and deliver.</h2>
            <div class="grid">
                <?php foreach ($services as $service): ?>
                    <article class="card">
                        <h3><?= esc($service['title']); ?></h3>
                        <p><?= esc($service['summary']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <span class="section-title">Ongoing Projects</span>
            <h2>Current ventures under active development.</h2>
            <div class="grid">
                <?php foreach ($projects as $project): ?>
                    <article class="card">
                        <h3><?= esc($project['name']); ?></h3>
                        <p><?= esc($project['summary']); ?></p>
                        <a href="<?= esc($project['url']); ?>" target="_blank" rel="noopener">Visit project →</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="books">
        <div class="container">
            <span class="section-title">Books &amp; Publications</span>
            <h2>Authoring works that translate hybrid intelligence into practice.</h2>
            <div class="grid">
                <?php foreach ($books as $book): ?>
                    <article class="card">
                        <h3><?= esc($book['title']); ?></h3>
                        <p><?= esc($book['summary']); ?></p>
                        <a href="<?= esc($book['url']); ?>" target="_blank" rel="noopener">Explore →</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="references">
        <div class="container">
            <span class="section-title">References</span>
            <h2>Trusted by investors, founders, and creative technologists.</h2>
            <div class="grid">
                <?php foreach ($references as $reference): ?>
                    <article class="card reference-card">
                        <blockquote><?= esc($reference['quote']); ?></blockquote>
                        <p class="reference-meta">— <strong><?= esc($reference['name']); ?></strong> · <a href="<?= esc($reference['link']); ?>" target="_blank" rel="noopener"><?= esc($reference['link_label']); ?></a></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <span class="section-title">Contact</span>
            <h2>Let’s align on your next build or investment.</h2>
            <div class="contact-panel">
                <div class="contact-card">
                    <h3>Direct outreach</h3>
                    <p>Share a short brief on your hybrid intelligence, blockchain, or product venture. I respond to every serious inquiry within 24 hours.</p>
                    <p><strong>Email:</strong> <a href="mailto:<?= esc($site['email']); ?>"><?= esc($site['email']); ?></a><br>
                    <strong>Phone:</strong> <a href="tel:+4741227175"><?= esc($site['phone']); ?></a></p>
                </div>
                <div class="contact-card">
                    <h3>Schedule a call</h3>
                    <p>Book a focused strategy session to outline scope, delivery models, and investment readiness.</p>
                    <a class="cta" href="<?= esc($site['hero_cta']); ?>" target="_blank" rel="noopener">Book a 20‑min call →</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            © <?= esc((string) $year); ?> <?= esc($site['name']); ?> · All rights reserved · <a href="mailto:<?= esc($site['email']); ?>"><?= esc($site['email']); ?></a>
        </div>
    </footer>
</body>
</html>
