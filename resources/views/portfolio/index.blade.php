<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio personal Mochamad Rico Andreano, mahasiswa Sistem Informasi.">
    <title>Mochamad Rico Andreano | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #09090B;
            --section: #111114;
            --card: #18181B;
            --card-soft: #202024;
            --primary: #7C3AED;
            --accent: #A855F7;
            --accent-light: #C084FC;
            --text: #F5F3FF;
            --muted: #A1A1AA;
            --border: rgba(192, 132, 252, .17);
            --glow: 0 0 35px rgba(124, 58, 237, .22);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; scroll-padding-top: 90px; }
        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            line-height: 1.7;
            overflow-x: hidden;
        }
        .starfield {
            position: fixed;
            inset: 0;
            z-index: 2;
            overflow: hidden;
            pointer-events: none;
        }
        .starfield::before,
        .starfield::after {
            content: "";
            position: absolute;
            inset: -50%;
            background-repeat: repeat;
            animation: star-drift 90s linear infinite, star-twinkle 4s ease-in-out infinite alternate;
        }
        .starfield::before {
            opacity: .55;
            background-image:
                radial-gradient(1.5px 1.5px at 24px 38px, #fff 99%, transparent),
                radial-gradient(2px 2px at 118px 162px, #E9D5FF 99%, transparent),
                radial-gradient(2.5px 2.5px at 206px 83px, #fff 99%, transparent),
                radial-gradient(1.5px 1.5px at 284px 224px, #D8B4FE 99%, transparent);
            background-size: 320px 280px;
        }
        .starfield::after {
            opacity: .38;
            background-image:
                radial-gradient(2px 2px at 56px 118px, #fff 99%, transparent),
                radial-gradient(2.5px 2.5px at 194px 36px, #E9D5FF 99%, transparent),
                radial-gradient(1.5px 1.5px at 318px 196px, #fff 99%, transparent);
            background-size: 420px 340px;
            animation-duration: 130s, 6s;
            animation-direction: reverse, alternate;
        }
        .cosmic-scene {
            position: fixed;
            inset: 0;
            z-index: 1;
            overflow: hidden;
            pointer-events: none;
        }
        .cosmic-scene::before {
            content: "";
            position: absolute;
            inset: -25%;
            opacity: .48;
            background:
                radial-gradient(ellipse at 18% 28%, rgba(124, 58, 237, .12), transparent 28%),
                radial-gradient(ellipse at 78% 62%, rgba(56, 189, 248, .08), transparent 25%),
                radial-gradient(ellipse at 54% 12%, rgba(168, 85, 247, .08), transparent 22%);
            filter: blur(18px);
            animation: nebula-drift 32s ease-in-out infinite alternate;
        }
        .cosmic-orbit {
            position: absolute;
            top: 28%;
            left: 76%;
            width: 150px;
            height: 70px;
            border: 1px solid rgba(192, 132, 252, .16);
            border-radius: 50%;
            box-shadow: 0 0 22px rgba(124, 58, 237, .08);
            transform: rotate(-24deg);
            animation: orbit-drift 18s ease-in-out infinite alternate;
        }
        .cosmic-orbit::before {
            content: "";
            position: absolute;
            top: 50%;
            left: -7px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 30%, #E9D5FF, #A855F7 55%, #4C1D95);
            box-shadow: 0 0 18px 4px rgba(168, 85, 247, .4);
            transform: translateY(-50%);
        }
        .cosmic-orb {
            position: absolute;
            top: 68%;
            left: 17%;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 30%, #BAE6FD, #38BDF8 60%, #075985);
            box-shadow: 0 0 20px 5px rgba(56, 189, 248, .28);
            animation: orb-pulse 5s ease-in-out infinite alternate;
        }
        @keyframes nebula-drift {
            to { transform: translate3d(3%, -2%, 0) scale(1.06); opacity: .72; }
        }
        @keyframes orbit-drift {
            to { transform: translate3d(-18px, 24px, 0) rotate(12deg) scale(1.08); }
        }
        @keyframes orb-pulse {
            to { opacity: .55; box-shadow: 0 0 28px 8px rgba(56, 189, 248, .4); }
        }
        @keyframes star-drift {
            to { transform: translate3d(80px, 60px, 0); }
        }
        @keyframes star-twinkle {
            from { filter: brightness(.85); }
            to { filter: brightness(2.2); }
        }
        @media (prefers-reduced-motion: reduce) {
            .starfield::before,
            .starfield::after { animation: none; }
            .cosmic-scene::before,
            .cosmic-orbit,
            .cosmic-orb { animation: none; }
        }
        a { color: inherit; text-decoration: none; }
        button, input, textarea { font: inherit; }
        .container { width: min(1120px, calc(100% - 48px)); margin: auto; }
        .section { padding: 100px 0; position: relative; }
        .section:nth-of-type(even) { background: var(--section); }
        .js .hero,
        .js .section {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .65s ease, transform .65s ease;
        }
        .js .hero.is-visible,
        .js .section.is-visible { opacity: 1; transform: translateY(0); }
        @media (prefers-reduced-motion: reduce) {
            .js .hero, .js .section { opacity: 1; transform: none; transition: none; }
        }
        .section-heading { text-align: center; margin-bottom: 52px; }
        .eyebrow {
            color: var(--accent-light); text-transform: uppercase; letter-spacing: 3px;
            font-size: 11px; font-weight: 700; display: inline-block; margin-bottom: 12px;
        }
        h1, h2, h3, .brand { font-family: 'Space Grotesk', sans-serif; }
        .section-heading h2 { font-size: clamp(30px, 4vw, 42px); line-height: 1.2; }
        .section-heading p { color: var(--muted); margin-top: 12px; }
        .gradient-text {
            background: linear-gradient(100deg, #C084FC, #9333EA 55%, #7C3AED);
            -webkit-background-clip: text; background-clip: text; color: transparent;
        }

        /* NAVBAR */
        .navbar {
            position: sticky; top: 0; z-index: 1000; height: 76px;
            background: rgba(9, 9, 11, .86); backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--border);
        }
        .nav-inner { height: 100%; display: flex; align-items: center; justify-content: space-between; }
        .brand { font-size: 21px; font-weight: 700; letter-spacing: -.7px; }
        .nav-links { display: flex; align-items: center; gap: 30px; list-style: none; }
        .nav-links a { color: #D4D4D8; font-size: 13px; font-weight: 600; transition: .25s; }
        .nav-links a:hover { color: var(--accent-light); }
        .menu-toggle {
            display: none; border: 1px solid var(--border); color: var(--text);
            background: var(--card); width: 42px; height: 42px; border-radius: 12px; cursor: pointer;
        }

        /* HERO */
        .hero {
            min-height: 650px; display: flex; align-items: center; position: relative;
            overflow: hidden; background:
            radial-gradient(ellipse at 12% 45%, rgba(124,58,237,.20), transparent 38%),
            radial-gradient(ellipse at 85% 18%, rgba(147,51,234,.13), transparent 32%), var(--bg);
        }
        .hero::after {
            content: ""; position: absolute; width: 440px; height: 440px; border-radius: 50%;
            border: 1px solid rgba(168,85,247,.12); right: -190px; bottom: -250px;
            box-shadow: 0 0 0 45px rgba(168,85,247,.025), 0 0 0 90px rgba(168,85,247,.02);
        }
        .hero-grid { display: grid; grid-template-columns: 1.25fr .75fr; gap: 70px; align-items: center; position: relative; z-index: 1; padding: 85px 0; }
        .hero-copy .eyebrow { padding: 7px 14px; border: 1px solid var(--border); border-radius: 30px; background: rgba(124,58,237,.10); letter-spacing: 1.5px; }
        .hero h1 { font-size: clamp(42px, 6vw, 68px); line-height: 1.08; letter-spacing: -2.5px; margin: 18px 0; }
        .hero-copy > p { color: #B8B5C2; max-width: 650px; font-size: 15px; }
        .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; margin-top: 30px; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: 9px;
            padding: 12px 21px; border-radius: 30px; font-size: 13px; font-weight: 700;
            border: 1px solid transparent; transition: .25s; cursor: pointer;
        }
        .btn-primary { background: linear-gradient(110deg, #7C3AED, #A855F7); color: white; box-shadow: 0 8px 25px rgba(124,58,237,.28); }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 12px 32px rgba(124,58,237,.4); }
        .btn-outline { border-color: rgba(192,132,252,.45); color: #E9D5FF; background: rgba(24,24,27,.55); }
        .btn-outline:hover { background: rgba(124,58,237,.15); }
        .social-links { display: flex; gap: 11px; margin-top: 27px; }
        .social-links a {
            width: 39px; height: 39px; display: grid; place-items: center; border-radius: 50%;
            border: 1px solid var(--border); color: var(--accent-light); font-size: 12px; font-weight: 700;
            transition: .25s;
        }
        .social-links a:hover { background: var(--primary); color: white; transform: translateY(-3px); }
        .social-links svg {
            width: 18px; height: 18px; display: block; fill: currentColor;
        }
        .profile-wrap { display: flex; justify-content: center; position: relative; }
        .profile-ring {
            width: min(330px, 75vw); aspect-ratio: 1; padding: 9px; border-radius: 50%;
            background: linear-gradient(135deg, #7C3AED, #C084FC, #4C1D95);
            box-shadow: 0 0 35px rgba(147,51,234,.34), 0 0 90px rgba(124,58,237,.15);
        }
        .profile-ring img {
            width: 100%; height: 100%; border-radius: 50%; object-fit: cover;
            border: 5px solid var(--bg); background: #21152E;
        }
        .profile-fallback {
            width: 100%; height: 100%; border-radius: 50%; display: grid; place-items: center;
            background: radial-gradient(circle, #382052, #17111F); color: #E9D5FF;
            font: 700 74px 'Space Grotesk', sans-serif; border: 5px solid var(--bg);
        }

        /* ABOUT */
        .about-grid { display: grid; grid-template-columns: 1.15fr .85fr; gap: 28px; align-items: stretch; }
        .about-copy, .info-panel {
            background: linear-gradient(145deg, rgba(39,39,42,.8), rgba(24,24,27,.9));
            border: 1px solid var(--border); border-radius: 20px; padding: 30px;
        }
        .about-copy p { color: #C4C1CC; margin-bottom: 14px; font-size: 14px; }
        .info-panel { display: grid; gap: 18px; }
        .info-item { display: flex; gap: 14px; align-items: flex-start; padding-bottom: 15px; border-bottom: 1px solid var(--border); }
        .info-item:last-child { border-bottom: 0; padding-bottom: 0; }
        .info-icon { width: 38px; height: 38px; flex: 0 0 38px; border-radius: 12px; display: grid; place-items: center; color: var(--accent-light); background: rgba(124,58,237,.16); }
        .info-item small { display: block; color: var(--muted); font-size: 11px; }
        .info-item strong { font-size: 13px; }

        /* TIMELINE */
        #experience .container { width: min(1600px, calc(100% - 48px)); }
        .timeline { max-width: 1600px; margin: auto; position: relative; }
        .timeline::before { content: ""; position: absolute; left: 50%; top: 8px; bottom: 8px; width: 2px; transform: translateX(-50%); background: linear-gradient(var(--accent), rgba(124,58,237,.08)); }
        .timeline-card {
            position: relative; width: calc(50% - 58px); margin: 0 0 24px; padding: 25px 27px;
            background: #160c20; border: 1px solid var(--border); border-radius: 16px;
            transition: .25s;
        }
        .timeline-card:nth-child(odd) { margin-right: auto; }
        .timeline-card:nth-child(even) { margin-left: auto; }
        .timeline-card:hover { border-color: rgba(192,132,252,.5); transform: translateY(-2px); }
        .experience-card {
            width: calc(50% - 58px); padding: 0; background: transparent;
            border: 0; perspective: 1200px;
        }
        .experience-card:hover { border-color: transparent; }
        .experience-card-inner {
            display: grid; width: min(100%, 560px); aspect-ratio: 3 / 2;
            transform-style: preserve-3d; margin-left: auto;
            transition: transform .7s cubic-bezier(.2,.7,.2,1); border-radius: 16px;
        }
        .experience-card:nth-child(even) .experience-card-inner { margin-right: auto; margin-left: 0; }
        .experience-card:hover .experience-card-inner { transform: rotateY(180deg); }
        .experience-card-face {
            grid-area: 1 / 1; position: relative; overflow: hidden; border: 1px solid var(--border);
            border-radius: 16px; backface-visibility: hidden;
        }
        .experience-card-front { padding: 25px 27px; background: #160c20; }
        .experience-card-back {
            min-height: 180px; transform: rotateY(180deg); background: #160c20;
        }
        .experience-card-back img {
            position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;
        }
        .experience-card-back::after {
            content: ""; position: absolute; inset: 0;
            background: linear-gradient(180deg, transparent 20%, rgba(9,9,11,.86));
        }
        .experience-card-caption {
            position: absolute; z-index: 1; right: 24px; bottom: 20px; left: 24px;
            color: white; font: 600 16px/1.4 'Space Grotesk', sans-serif;
        }
        .experience-card-caption small {
            display: block; margin-bottom: 5px; color: #E9D5FF;
            font: 700 10px/1.4 'DM Sans', sans-serif; letter-spacing: 1.5px; text-transform: uppercase;
        }
        .timeline-card::before {
            content: ""; position: absolute; top: 19px; width: 12px; height: 12px;
            border-radius: 50%; background: var(--accent); box-shadow: 0 0 14px var(--accent);
        }
        .timeline-card:nth-child(odd)::before { right: -64px; }
        .timeline-card:nth-child(even)::before { left: -64px; }
        .timeline-date {
            position: absolute; top: 12px; width: max-content; white-space: nowrap;
            color: var(--accent-light); font-size: 20px; font-weight: 700; line-height: 1.3;
        }
        .timeline-card:nth-child(odd) .timeline-date {
            left: calc(100% + 80px); right: auto; text-align: left;
        }
        .timeline-card:nth-child(even) .timeline-date {
            right: calc(100% + 80px); left: auto; text-align: right;
        }
        .timeline-card h3 { font-size: 17px; line-height: 1.45; margin: 25px 0 3px; }
        .timeline-card p { color: var(--muted); font-size: 13px; }
        .timeline-card ul { margin: 8px 0 0; padding-left: 20px; color: var(--muted); font-size: 13px; }
        .timeline-card li { padding-left: 4px; margin-top: 5px; }

        /* SKILLS */
        .skills-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .skill-card {
            min-height: 132px; padding: 20px 16px; display: flex; flex-direction: column;
            align-items: center; justify-content: center; gap: 11px; text-align: center;
            border: 1px solid var(--border);
            background: linear-gradient(145deg, #1D1D22, #141417); border-radius: 15px; transition: .25s;
        }
        .skill-card:hover { transform: translateY(-5px); border-color: var(--accent); box-shadow: var(--glow); }
        .skill-logo {
            width: 48px; height: 48px; padding: 6px; object-fit: contain;
            background: #F5F3FF; border-radius: 9px;
        }
        .skill-card h3 {
            position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px;
            overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0;
        }
        .skill-card p { color: var(--muted); font-size: 11px; }

        /* PROJECTS */
        .projects-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .project-card {
            overflow: hidden; border: 1px solid var(--border); border-radius: 17px;
            background: linear-gradient(150deg, #202024, #141417); transition: .28s;
        }
        .project-card:hover { transform: translateY(-6px); border-color: rgba(192,132,252,.55); box-shadow: var(--glow); }
        .project-visual {
            height: 175px; position: relative; overflow: hidden; display: grid; place-items: center;
            background: radial-gradient(circle at 50% 35%, rgba(147,51,234,.28), transparent 55%), #21172D;
        }
        .project-visual img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .project-placeholder {
            position: absolute; inset: 0; display: grid; place-items: center; padding: 20px;
            text-align: center; color: #E9D5FF; font: 600 18px 'Space Grotesk', sans-serif;
            background: radial-gradient(circle at 50% 35%, rgba(147,51,234,.28), transparent 55%), #21172D;
        }
        .project-content { padding: 21px; }
        .project-content h3 { font-size: 16px; line-height: 1.4; margin: 6px 0 9px; }
        .project-content > p { color: var(--muted); font-size: 12px; min-height: 60px; }
        .project-label { color: var(--accent-light); font-size: 9px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; }
        .tech-list { display: flex; flex-wrap: wrap; gap: 7px; margin-top: 16px; }
        .tech-list span { background: rgba(124,58,237,.15); border: 1px solid rgba(168,85,247,.18); color: #DDD6FE; padding: 4px 9px; border-radius: 20px; font-size: 9px; }

        /* FOOTER */
        footer { padding: 25px 0; background: #070708; border-top: 1px solid var(--border); }
        .footer-inner { display: flex; justify-content: center; align-items: center; text-align: center; }
        .footer-inner p { color: var(--muted); font-size: 11px; }
        .footer-social { display: flex; gap: 15px; color: var(--accent-light); font-size: 12px; }

        @media (max-width: 900px) {
            .hero-grid { gap: 35px; grid-template-columns: 1.1fr .9fr; }
            .skills-grid { grid-template-columns: repeat(3, 1fr); }
            .projects-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 680px) {
            .container { width: min(100% - 34px, 520px); }
            .navbar { height: 68px; }
            .menu-toggle { display: block; }
            .nav-links {
                display: none; position: absolute; top: 68px; left: 0; right: 0; padding: 20px 24px;
                background: rgba(12,12,15,.98); border-bottom: 1px solid var(--border);
                flex-direction: column; align-items: flex-start; gap: 18px;
            }
            .nav-links.show { display: flex; }
            .hero-grid { grid-template-columns: 1fr; text-align: center; padding: 70px 0; }
            .hero-copy > p { margin: auto; }
            .hero-actions, .social-links { justify-content: center; }
            .profile-wrap { grid-row: 1; }
            .profile-ring { width: 220px; }
            .hero h1 { letter-spacing: -1.5px; }
            .section { padding: 75px 0; }
            .timeline { padding-left: 30px; }
            .timeline::before { left: 8px; transform: none; }
            .timeline-card, .timeline-card:nth-child(odd), .timeline-card:nth-child(even) { width: 100%; margin: 0 0 20px; padding: 20px; }
            .timeline-card.experience-card { width: 100%; padding: 0; }
            .experience-card .experience-card-inner { width: 100%; margin: 0; }
            .timeline-card:nth-child(odd)::before, .timeline-card:nth-child(even)::before { left: -29px; right: auto; top: 28px; }
            .timeline-date, .timeline-card:nth-child(odd) .timeline-date, .timeline-card:nth-child(even) .timeline-date {
                position: static; display: block; width: auto; text-align: left; font-size: 15px;
            }
            .timeline-card h3 { font-size: 15px; margin-top: 8px; }
            .timeline-card p, .timeline-card ul { font-size: 12px; }
            .about-grid { grid-template-columns: 1fr; }
            .skills-grid { grid-template-columns: repeat(2, 1fr); gap: 11px; }
            .projects-grid { grid-template-columns: 1fr; }
            .project-visual { height: 195px; }
            .footer-inner { justify-content: center; text-align: center; }
        }
    </style>
</head>
<body>
    <div class="cosmic-scene" aria-hidden="true">
        <span class="cosmic-orbit"></span>
        <span class="cosmic-orb"></span>
    </div>
    <div class="starfield" aria-hidden="true"></div>

    <nav class="navbar">
        <div class="container nav-inner">
            <a href="#home" class="brand">Mochamad <span class="gradient-text">Rico Andreano</span></a>
            <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero" id="home">
        <div class="container hero-grid">
            <div class="hero-copy">
                <span class="eyebrow">Personal Portfolio</span>
                <h1>Hai, Saya <span class="gradient-text">Rico Andreano.</span></h1>
                <p>
                    Saya merupakan mahasiswa Program Studi Sistem Informasi di UPN Veteran Jawa Timur.
                    Saya memiliki ketertarikan pada pengembangan aplikasi, pengelolaan basis data,
                    jaringan komputer, serta penerapan teknologi informasi untuk menyelesaikan masalah.
                </p>
                <div class="social-links">
                    <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.94 8.5A1.56 1.56 0 1 1 6.94 5.4a1.56 1.56 0 0 1 0 3.1ZM5.5 9.7h2.88v8.8H5.5V9.7Zm4.7 0h2.76v1.2h.04c.38-.73 1.33-1.5 2.73-1.5 2.92 0 3.46 1.92 3.46 4.42v6.68h-2.88v-6.25c0-1.49-.03-3.4-2.07-3.4-2.08 0-2.4 1.62-2.4 3.29v6.36H10.2V9.7Z"/></svg>
                    </a>
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .75A11.25 11.25 0 0 0 8.12 22.2c.56.1.76-.25.76-.54v-1.9c-3.1.68-3.75-1.3-3.75-1.3-.5-1.3-1.23-1.64-1.23-1.64-.99-.69.08-.68.08-.68 1.1.08 1.68 1.14 1.68 1.14.98 1.7 2.57 1.2 3.2.92.1-.72.38-1.2.69-1.48-2.48-.28-5.09-1.25-5.09-5.56 0-1.23.44-2.24 1.15-3.03-.12-.28-.5-1.42.11-2.96 0 0 .94-.3 3.08 1.14A10.6 10.6 0 0 1 12 6.14c.95 0 1.9.13 2.79.38 2.12-1.44 3.07-1.14 3.07-1.14.62 1.54.23 2.68.11 2.96.72.79 1.15 1.8 1.15 3.03 0 4.32-2.62 5.27-5.12 5.55.39.34.73 1 .73 2.03v3.01c0 .29.2.65.77.54A11.25 11.25 0 0 0 12 .75Z"/></svg>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.7A4.05 4.05 0 0 0 3.7 7.75v8.5a4.05 4.05 0 0 0 4.05 4.05h8.5a4.05 4.05 0 0 0 4.05-4.05v-8.5a4.05 4.05 0 0 0-4.05-4.05h-8.5Zm8.88 1.55a1.13 1.13 0 1 1 0 2.26 1.13 1.13 0 0 1 0-2.26ZM12 6.28A5.72 5.72 0 1 1 12 17.72 5.72 5.72 0 0 1 12 6.28Zm0 1.7A4.02 4.02 0 1 0 12 16.02 4.02 4.02 0 0 0 12 7.98Z"/></svg>
                    </a>
                </div>
                <div class="hero-actions">
                    <a href="{{ asset('files/CV-Mochamad-Rico-Andreano.pdf') }}" class="btn btn-primary" target="_blank" rel="noopener">Unduh CV ↗</a>
                    <a href="#projects" class="btn btn-outline">Lihat Proyek</a>
                </div>
            </div>
            <div class="profile-wrap">
                <div class="profile-ring">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Foto Mochamad Rico Andreano"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">
                    <div class="profile-fallback" style="display:none;">RA</div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section" id="about">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Introduction</span>
                    <h2>About <span class="gradient-text">Me</span></h2>
                    <p>Mengenal latar belakang dan ketertarikan saya.</p>
                </div>
                <div class="about-grid">
                    <div class="about-copy">
                        <p>Saya adalah mahasiswa Sistem Informasi di UPN Veteran Jawa Timur yang tertarik pada bidang teknologi informasi, pengembangan aplikasi, dan pengelolaan data.</p>
                        <p>Selama perkuliahan, saya mempelajari pengembangan web, pemrograman aplikasi, basis data, jaringan komputer, serta analisis sistem melalui kegiatan akademik dan berbagai proyek.</p>
                        <p>Saya terus mengembangkan kemampuan teknis, komunikasi, dan pemecahan masalah untuk mempersiapkan diri menghadapi lingkungan profesional.</p>
                    </div>
                    <div class="info-panel">
                        <div class="info-item"><span class="info-icon">✦</span><div><small>Nama Lengkap</small><strong>Mochamad Rico Andreano</strong></div></div>
                        <div class="info-item"><span class="info-icon">⌘</span><div><small>Program Studi</small><strong>S1 Sistem Informasi</strong></div></div>
                        <div class="info-item"><span class="info-icon">⌂</span><div><small>Universitas</small><strong>UPN Veteran Jawa Timur</strong></div></div>
                        <div class="info-item"><span class="info-icon">◷</span><div><small>Status Akademik</small><strong>Semester 5</strong></div></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="education">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">My Journey</span>
                    <h2>Education</h2>
                    <p>Riwayat pendidikan saya.</p>
                </div>
                <div class="timeline">
                    @forelse ($educations as $education)
                        <article class="timeline-card">
                            <span class="timeline-date">
                                {{ !empty($education['start_date']) ? date('Y', strtotime($education['start_date'])) : '' }}
                                —
                                {{ !empty($education['end_date']) ? date('Y', strtotime($education['end_date'])) : 'Present' }}
                            </span>
                            <h3>{{ $education['institution'] }}</h3>
                            <p>{{ $education['degree'] }}{{ !empty($education['field_of_study']) ? ' · ' . $education['field_of_study'] : '' }}</p>
                            @if (!empty($education['description']))<p>{{ $education['description'] }}</p>@endif
                        </article>
                    @empty
                        <p style="color:var(--muted);text-align:center;">Data pendidikan belum tersedia.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="section" id="experience">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Experience</span>
                    <h2>Organization & <span class="gradient-text">Experience</span></h2>
                    <p>Pengalaman organisasi dan kegiatan yang pernah diikuti.</p>
                </div>
                <div class="timeline">
                    @forelse ($experiences as $experience)
                        <article class="timeline-card experience-card">
                            <span class="timeline-date">{{ $experience['date'] }}</span>
                            <div class="experience-card-inner">
                                <div class="experience-card-face experience-card-front">
                                    <h3>{{ $experience['company'] }}</h3>
                                    <p>{{ $experience['position'] }}</p>
                                    <ul>
                                        @foreach ($experience['description'] as $responsibility)
                                            <li>{{ $responsibility }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="experience-card-face experience-card-back">
                                    <img src="{{ asset('images/experiences/' . $experience['image']) }}" alt="Dokumentasi {{ $experience['company'] }}" loading="lazy" decoding="async">
                                    <div class="experience-card-caption">
                                        <small>{{ $experience['date'] }}</small>
                                        {{ $experience['company'] }}
                                    </div>
                                </div>
                            </div>
                        </article>
                    @empty
                        <p style="color:var(--muted);text-align:center;">Data pengalaman belum tersedia.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="section" id="skills">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">My Expertise</span>
                    <h2>Technical <span class="gradient-text">Skills</span></h2>
                    <p>Teknologi dan bidang yang telah saya pelajari.</p>
                </div>
                @php
                    $skillLogos = [
                        'Python' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg',
                        'HTML' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg',
                        'CSS' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg',
                        'Tailwind CSS' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg',
                        'JavaScript' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg',
                        'React' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg',
                        'PHP' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg',
                        'Laravel' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg',
                        'MySQL' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg',
                        'Java' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg',
                        'Flutter' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/flutter/flutter-original.svg',
                        'Dart' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/dart/dart-original.svg',
                        'Firebase' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/firebase/firebase-plain.svg',
                        'MikroTik' => 'https://cdn.simpleicons.org/mikrotik',
                        'Winbox' => 'https://cdn.simpleicons.org/mikrotik',
                        'Networking' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.7.2/svgs/solid/network-wired.svg',
                    ];
                @endphp
                <div class="skills-grid">
                    @forelse ($skills as $skill)
                        <article class="skill-card" title="{{ $skill['name'] }}">
                            <img class="skill-logo" src="{{ $skillLogos[$skill['name']] ?? 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/code/code-original.svg' }}" alt="{{ $skill['name'] }} logo" loading="lazy" decoding="async">
                            <h3>{{ $skill['name'] }}</h3>
                            <p>{{ $skill['category'] }}</p>
                        </article>
                    @empty
                        <p style="grid-column:1/-1;color:var(--muted);text-align:center;">Data kemampuan belum tersedia.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="section" id="projects">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">My Work</span>
                    <h2>Featured <span class="gradient-text">Projects</span></h2>
                    <p>Kumpulan proyek dan aplikasi yang pernah saya kerjakan.</p>
                </div>
                <div class="projects-grid">
                    @forelse ($projects as $project)
                        <article class="project-card">
                            <div class="project-visual">
                                @if (!empty($project['image']))
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">
                                    <div class="project-placeholder" style="display:none;">{{ $project['title'] }}</div>
                                @else
                                    <div class="project-placeholder">{{ $project['title'] }}</div>
                                @endif
                            </div>
                            <div class="project-content">
                                <span class="project-label">Portfolio Project</span>
                                <h3>{{ $project['title'] }}</h3>
                                <p>{{ $project['description'] }}</p>
                                @if (!empty($project['tech_stack']) && is_array($project['tech_stack']))
                                    <div class="tech-list">
                                        @foreach ($project['tech_stack'] as $technology)
                                            <span>{{ $technology }}</span>
                                        @endforeach
                                    </div>
                                @endif
                                @php $projectUrl = $project['project_url'] ?? null; $githubUrl = $project['github_url'] ?? null; @endphp
                                @if ($projectUrl || $githubUrl)
                                    <div style="display:flex;gap:14px;margin-top:16px;font-size:11px;font-weight:700;color:#D8B4FE;">
                                        @if ($projectUrl)<a href="{{ $projectUrl }}" target="_blank" rel="noopener">Live Project ↗</a>@endif
                                        @if ($githubUrl)<a href="{{ $githubUrl }}" target="_blank" rel="noopener">GitHub ↗</a>@endif
                                    </div>
                                @endif
                            </div>
                        </article>
                    @empty
                        <p style="grid-column:1/-1;color:var(--muted);text-align:center;">Data proyek belum tersedia.</p>
                    @endforelse
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="container footer-inner">
            <p>© {{ date('Y') }} Mochamad Rico Andreano. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.documentElement.classList.add('js');

        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });

        document.querySelectorAll('.nav-links a').forEach((link) => {
            link.addEventListener('click', () => navLinks.classList.remove('show'));
        });

        const fadeSections = document.querySelectorAll('.hero, .section');

        if ('IntersectionObserver' in window) {
            const fadeObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    entry.target.classList.toggle('is-visible', entry.isIntersecting);
                });
            }, { rootMargin: '-10% 0px -10% 0px', threshold: 0 });

            fadeSections.forEach((section) => fadeObserver.observe(section));
        } else {
            fadeSections.forEach((section) => section.classList.add('is-visible'));
        }
    </script>
</body>
</html>
