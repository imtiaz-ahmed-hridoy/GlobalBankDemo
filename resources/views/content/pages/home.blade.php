<!doctype html>
<html lang="en">

<head>
    <title>Global Bank - Secure Banking for Your Future</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #0066cc;
            --primary-dark: #004999;
            --secondary-color: #1a365d;
            --accent-color: #000000;
            --text-dark: #2d3748;
            --text-light: #718096;
            --bg-light: #f7fafc;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Header & Navigation */
        .site-navbar {
            background: var(--white);
            padding: 16px 0;
            box-shadow: var(--shadow);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .site-navbar.scrolled {
            padding: 12px 0;
            box-shadow: var(--shadow-lg);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .site-logo {
            font-size: 24px;
            font-weight: 800;
            color: var(--secondary-color);
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .site-logo span {
            color: var(--primary-color);
        }

        .desktop-menu {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 32px;
        }

        .desktop-menu a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 15px;
            transition: color 0.3s;
            position: relative;
        }

        .desktop-menu a:hover {
            color: var(--primary-color);
        }

        .desktop-menu a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s;
        }

        .desktop-menu a:hover::after {
            width: 100%;
        }

        .btn-login {
            background: var(--primary-color);
            color: var(--white) !important;
            padding: 10px 24px;
            border-radius: 6px;
            transition: all 0.3s;
            font-weight: 600;
        }

        .btn-login:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .btn-login::after {
            display: none;
        }

        /* Mobile Menu Toggle */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            z-index: 1002;
        }

        .mobile-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background: var(--secondary-color);
            margin: 5px 0;
            transition: all 0.3s;
            border-radius: 3px;
        }

        .mobile-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(8px, 8px);
        }

        .mobile-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .mobile-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 85%;
            max-width: 400px;
            height: 100vh;
            background: var(--white);
            box-shadow: -5px 0 20px rgba(0, 0, 0, 0.1);
            transition: right 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            z-index: 1001;
            overflow-y: auto;
            padding: 80px 32px 32px;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu-list {
            list-style: none;
        }

        .mobile-menu-list li {
            margin-bottom: 8px;
        }

        .mobile-menu-list a {
            display: block;
            padding: 16px;
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 16px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .mobile-menu-list a:hover,
        .mobile-menu-list a:active {
            background: var(--bg-light);
            color: var(--primary-color);
            transform: translateX(8px);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 999;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Hero Section */
        .hero-section {
            margin-top: 70px;
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            color: var(--white);
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="40" fill="rgba(255,255,255,0.03)"/></svg>');
            background-size: 100px 100px;
            animation: moveBackground 20s linear infinite;
        }

        @keyframes moveBackground {
            0% { transform: translate(0, 0); }
            100% { transform: translate(100px, 100px); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 56px;
            margin-bottom: 24px;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1px;
            font-family: 'Playfair Display', serif;
        }

        .creative-text {
            display: inline-block;
            position: relative;
        }

        .creative-text::after {
            content: '';
            position: absolute;
            bottom: 10px;
            left: 0;
            width: 100%;
            height: 15px;
            background: rgba(255, 107, 53, 0.4);
            z-index: -1;
            transform: skewX(-12deg);
        }

        .gradient-text {
            background: linear-gradient(45deg, #ffffff, #ffd700, #ffffff);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% center; }
            50% { background-position: 100% center; }
        }

        .hero-section p {
            font-size: 20px;
            margin-bottom: 32px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.95;
            line-height: 1.7;
        }

        .btn-primary {
            background: var(--white);
            color: var(--primary-color);
            padding: 16px 40px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: var(--accent-color);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-primary:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary span {
            position: relative;
            z-index: 1;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            color: var(--white);
        }

        /* Image Carousel */
        .carousel-section {
            padding: 80px 0;
            background: var(--white);
        }

        .carousel-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
        }

        .carousel-wrapper {
            display: flex;
            transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }

        .carousel-slide {
            min-width: 100%;
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .carousel-slide:nth-child(2) {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .carousel-slide:nth-child(3) {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .carousel-slide:nth-child(4) {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .carousel-content {
            text-align: center;
            color: white;
            padding: 40px;
        }

        .carousel-content h2 {
            font-size: 48px;
            margin-bottom: 20px;
            font-family: 'Playfair Display', serif;
        }

        .carousel-content p {
            font-size: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .carousel-nav {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s;
        }

        .carousel-dot.active {
            width: 40px;
            border-radius: 6px;
            background: white;
        }

        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.3);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 24px;
            color: white;
            transition: all 0.3s;
            z-index: 10;
            backdrop-filter: blur(5px);
        }

        .carousel-arrow:hover {
            background: rgba(255, 255, 255, 0.5);
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-arrow.prev {
            left: 20px;
        }

        .carousel-arrow.next {
            right: 20px;
        }

        /* Section Styles */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 42px;
            margin-bottom: 48px;
            color: var(--secondary-color);
            font-weight: 800;
            letter-spacing: -0.5px;
            font-family: 'Playfair Display', serif;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        /* Features Section */
        .features-section {
            background: var(--bg-light);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
        }

        .feature-card {
            background: var(--white);
            padding: 40px 32px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            transition: all 0.3s;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 102, 204, 0.1), transparent);
            transition: left 0.5s;
        }

        .feature-card:hover::before {
            left: 100%;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 24px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .feature-icon::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .feature-card:hover .feature-icon::before {
            width: 100px;
            height: 100px;
        }

        .feature-card h3 {
            color: var(--secondary-color);
            margin-bottom: 16px;
            font-size: 22px;
            font-weight: 700;
        }

        .feature-card p {
            color: var(--text-light);
            line-height: 1.7;
            font-size: 15px;
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            margin-top: 48px;
        }

        .service-card {
            text-align: center;
            padding: 40px 24px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            transition: all 0.3s;
            background: var(--white);
            position: relative;
            overflow: hidden;
        }

        .service-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            transition: height 0.4s;
            z-index: 0;
        }

        .service-card:hover::after {
            height: 100%;
        }

        .service-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-4px);
            color: white;
        }

        .service-card:hover h3,
        .service-card:hover p {
            color: white;
            position: relative;
            z-index: 1;
        }

        .service-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1), rgba(0, 102, 204, 0.2));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: var(--primary-color);
            transition: all 0.3s;
            position: relative;
            z-index: 1;
        }

        .service-card:hover .service-icon {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: rotateY(360deg);
        }

        .service-card h3 {
            color: var(--secondary-color);
            margin-bottom: 12px;
            font-size: 20px;
            font-weight: 700;
            transition: color 0.3s;
        }

        .service-card p {
            color: var(--text-light);
            font-size: 14px;
            line-height: 1.6;
            transition: color 0.3s;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: var(--white);
            padding: 64px 0;
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .stats-section::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 48px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .stat-item {
            position: relative;
        }

        .stat-item::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        .stat-item h3 {
            font-size: 48px;
            margin-bottom: 8px;
            font-weight: 800;
            font-family: 'Playfair Display', serif;
        }

        .stat-item p {
            font-size: 16px;
            opacity: 0.9;
        }

        /* About Section */
        .about-section {
            background: var(--white);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 64px;
            align-items: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .about-content .section-title {
            text-align: center;
            margin-bottom: 16px;
        }

        .about-content h3 {
            color: var(--primary-color);
            font-size: 24px;
            margin-bottom: 24px;
            font-weight: 600;
            text-align: center;
        }

        .about-content p {
            color: var(--text-light);
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .about-features {
            margin: 32px 0;
        }

        .about-feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 20px;
            background: var(--bg-light);
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .about-feature-item:hover {
            background: rgba(0, 102, 204, 0.05);
            transform: translateX(8px);
        }

        .about-feature-icon {
            width: 48px;
            height: 48px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .about-feature-text h4 {
            color: var(--secondary-color);
            margin-bottom: 8px;
            font-size: 18px;
            font-weight: 700;
        }

        .about-feature-text p {
            color: var(--text-light);
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
        }

        .btn-primary-outline {
            display: inline-block;
            padding: 14px 32px;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 16px;
            position: relative;
            overflow: hidden;
        }

        .btn-primary-outline::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--primary-color);
            transition: left 0.4s;
            z-index: -1;
        }

        .btn-primary-outline:hover::before {
            left: 0;
        }

        .about-content > a {
            display: block;
            text-align: center;
        }

        .btn-primary-outline:hover {
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 102, 204, 0.3);
        }

        /* Contact Section */
        .contact-section {
            background: var(--bg-light);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            margin-top: 48px;
        }

        .contact-item {
            text-align: center;
            padding: 40px 24px;
            background: var(--white);
            border-radius: 12px;
            box-shadow: var(--shadow);
            transition: all 0.3s;
        }

        .contact-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .contact-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: var(--white);
        }

        .contact-item h3 {
            color: var(--secondary-color);
            margin-bottom: 12px;
            font-size: 20px;
            font-weight: 700;
        }

        .contact-item p {
            color: var(--text-light);
            line-height: 1.7;
            font-size: 15px;
        }

        .contact-item a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .contact-item a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .site-footer {
            background: var(--secondary-color);
            color: var(--white);
            padding: 64px 0 24px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 48px;
            margin-bottom: 48px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 700;
        }

        .footer-section p {
            font-size: 14px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 12px;
        }

        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s;
            font-size: 14px;
        }

        .footer-section a:hover {
            color: var(--white);
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            font-size: 16px;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 32px;
            text-align: center;
        }

        .footer-bottom p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 8px;
            line-height: 1.6;
        }

        /* Icon placeholders */
        .icon {
            display: inline-block;
        }

        .icon-shield::before { content: '🛡️'; }
        .icon-mobile::before { content: '📱'; }
        .icon-percent::before { content: '💰'; }
        .icon-support::before { content: '🎧'; }
        .icon-bank::before { content: '🏦'; }
        .icon-chart::before { content: '📈'; }
        .icon-piggy::before { content: '🐷'; }
        .icon-check::before { content: '✓'; }
        .icon-card::before { content: '💳'; }
        .icon-home::before { content: '🏠'; }
        .icon-car::before { content: '🚗'; }
        .icon-briefcase::before { content: '💼'; }
        .icon-award::before { content: '🏆'; }
        .icon-users::before { content: '👥'; }
        .icon-leaf::before { content: '🌱'; }
        .icon-location::before { content: '📍'; }
        .icon-phone::before { content: '📞'; }
        .icon-email::before { content: '✉️'; }
        .icon-facebook::before { content: 'f'; }
        .icon-twitter::before { content: '𝕏'; }
        .icon-linkedin::before { content: 'in'; }
        .icon-instagram::before { content: '📷'; }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .features-grid,
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 32px;
            }

            .hero-section h1 {
                font-size: 42px;
            }

            .section-title {
                font-size: 36px;
            }
        }

        @media (max-width: 768px) {
            .desktop-menu {
                display: none;
            }

            .mobile-toggle {
                display: block;
            }

            .hero-section {
                padding: 80px 0 60px;
            }

            .hero-section h1 {
                font-size: 36px;
            }

            .hero-section p {
                font-size: 18px;
            }

            section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 32px;
                margin-bottom: 32px;
            }

            .features-grid,
            .services-grid,
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }

            .stat-item h3 {
                font-size: 36px;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 32px;
            }

            .carousel-slide {
                height: 400px;
            }

            .carousel-content h2 {
                font-size: 32px;
            }

            .carousel-content p {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .site-logo {
                font-size: 20px;
            }

            .hero-section h1 {
                font-size: 28px;
            }

            .hero-section p {
                font-size: 16px;
            }

            .btn-primary {
                padding: 14px 32px;
                font-size: 15px;
            }

            .section-title {
                font-size: 26px;
            }

            .feature-card,
            .service-card,
            .contact-item {
                padding: 32px 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .stat-item h3 {
                font-size: 32px;
            }

            .about-feature-item {
                padding: 16px;
            }

            .about-feature-icon {
                width: 40px;
                height: 40px;
                font-size: 20px;
                margin-right: 16px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .mobile-menu {
                width: 100%;
                max-width: 100%;
                padding: 80px 24px 24px;
            }

            .carousel-slide {
                height: 350px;
            }

            .carousel-content h2 {
                font-size: 28px;
            }

            .carousel-content p {
                font-size: 14px;
            }

            .carousel-arrow {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Navigation -->
    <header class="site-navbar" id="navbar">
        <div class="container">
            <nav class="nav-wrapper">
                <a href="#home" class="site-logo">Global Bank<span>.</span></a>

                <ul class="desktop-menu" aria-label="Main navigation">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="{{url('login')}}" class="btn-login">Login</a></li>
                </ul>

                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu" aria-hidden="true">
        <ul class="mobile-menu-list">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{url('login')}}" class="btn-login">Login</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Banking Made <span class="creative-text gradient-text">Simple</span>, Secure & Personal</h1>
                <p>Experience world-class banking with competitive rates, 24/7 digital access, and personalized financial solutions designed to help you achieve your financial goals.</p>
                <a href="#services" class="btn-primary"><span>Explore Our Services</span></a>
            </div>
        </div>
    </section>

    <!-- Image Carousel Section -->
    <section class="carousel-section">
        <div class="container">
            <h2 class="section-title">Discover Our Solutions</h2>
            <div class="carousel-container">
                <div class="carousel-wrapper" id="carouselWrapper">
                    <div class="carousel-slide">
                        <div class="carousel-content">
                            <h2>Digital Banking Excellence</h2>
                            <p>Experience seamless banking with our award-winning mobile and online platforms</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <div class="carousel-content">
                            <h2>Investment Solutions</h2>
                            <p>Grow your wealth with personalized investment strategies and expert guidance</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <div class="carousel-content">
                            <h2>Business Growth Partner</h2>
                            <p>Scale your business with tailored financing and cash management solutions</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <div class="carousel-content">
                            <h2>Sustainable Banking</h2>
                            <p>Join us in building a greener future with our eco-friendly banking initiatives</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-arrow prev" id="prevBtn">‹</button>
                <button class="carousel-arrow next" id="nextBtn">›</button>
                <div class="carousel-nav" id="carouselNav">
                    <span class="carousel-dot active" data-slide="0"></span>
                    <span class="carousel-dot" data-slide="1"></span>
                    <span class="carousel-dot" data-slide="2"></span>
                    <span class="carousel-dot" data-slide="3"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Why Choose <span class="gradient-text" style="background: linear-gradient(45deg, #0066cc, #ff6b35); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Global Bank</span>?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><span class="icon icon-shield"></span></div>
                    <h3>Bank-Level Security</h3>
                    <p>Your money is protected by 256-bit encryption, multi-factor authentication, and FDIC insurance up to $250,000 per depositor.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><span class="icon icon-mobile"></span></div>
                    <h3>24/7 Mobile Banking</h3>
                    <p>Manage your accounts anytime, anywhere with our award-winning mobile app. Check balances, transfer funds, and pay bills on the go.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><span class="icon icon-percent"></span></div>
                    <h3>Competitive Rates</h3>
                    <p>Earn up to 4.5% APY on high-yield savings accounts with no monthly fees and no minimum balance requirements.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><span class="icon icon-support"></span></div>
                    <h3>Expert Support</h3>
                    <p>Our dedicated customer service team is available 24/7 to assist you with any questions or concerns via phone, chat, or email.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><span class="icon icon-bank"></span></div>
                    <h3>Nationwide Network</h3>
                    <p>Access over 55,000 fee-free ATMs nationwide and visit any of our 1,200+ branch locations for in-person service.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><span class="icon icon-chart"></span></div>
                    <h3>Financial Planning</h3>
                    <p>Get personalized financial advice from our certified advisors to help you plan for retirement, invest wisely, and achieve your goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <h2 class="section-title">Our Banking Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><span class="icon icon-piggy"></span></div>
                    <h3>Savings Accounts</h3>
                    <p>High-yield savings with competitive interest rates and no hidden fees.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><span class="icon icon-check"></span></div>
                    <h3>Checking Accounts</h3>
                    <p>Free checking with unlimited transactions and debit card access.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><span class="icon icon-card"></span></div>
                    <h3>Credit Cards</h3>
                    <p>Earn rewards on every purchase with our cashback and travel credit cards.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><span class="icon icon-home"></span></div>
                    <h3>Home Loans</h3>
                    <p>Competitive mortgage rates with flexible terms and fast approval.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><span class="icon icon-car"></span></div>
                    <h3>Auto Loans</h3>
                    <p>Finance your dream car with rates as low as 3.99% APR.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><span class="icon icon-briefcase"></span></div>
                    <h3>Business Banking</h3>
                    <p>Tailored solutions for small businesses and large enterprises.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3 data-count="50">50+</h3>
                    <p>Years of Excellence</p>
                </div>
                <div class="stat-item">
                    <h3 data-count="5">5M+</h3>
                    <p>Satisfied Customers</p>
                </div>
                <div class="stat-item">
                    <h3 data-count="1200">1,200+</h3>
                    <p>Branch Locations</p>
                </div>
                <div class="stat-item">
                    <h3 data-count="150">$150B+</h3>
                    <p>Assets Under Management</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2 class="section-title">About Global Bank</h2>
                    <h3>Your Trusted Financial Partner Since 1973</h3>
                    <p>Global Bank has been at the forefront of banking innovation for over five decades. Founded with a vision to democratize access to financial services, we've grown from a single branch to a nationwide network serving millions of customers.</p>
                    
                    <p>Our commitment goes beyond traditional banking. We believe in empowering individuals, families, and businesses with the financial tools and expertise they need to thrive in an ever-changing world.</p>

                    <div class="about-features">
                        <div class="about-feature-item">
                            <div class="about-feature-icon">
                                <span class="icon icon-award"></span>
                            </div>
                            <div class="about-feature-text">
                                <h4>Award-Winning Service</h4>
                                <p>Recognized as "Best National Bank" for 5 consecutive years by J.D. Power</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <div class="about-feature-icon">
                                <span class="icon icon-users"></span>
                            </div>
                            <div class="about-feature-text">
                                <h4>Community Focused</h4>
                                <p>$2.5 billion invested in local communities and small businesses annually</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <div class="about-feature-icon">
                                <span class="icon icon-leaf"></span>
                            </div>
                            <div class="about-feature-text">
                                <h4>Sustainability Commitment</h4>
                                <p>Carbon-neutral operations and $10 billion in green financing initiatives</p>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="btn-primary-outline">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-icon"><span class="icon icon-location"></span></div>
                    <h3>Visit Us</h3>
                    <p>1500 Broadway, Suite 2400<br>New York, NY 10036</p>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><span class="icon icon-phone"></span></div>
                    <h3>Call Us</h3>
                    <p><a href="tel:1-800-555-0199">1-800-555-0199</a><br>Mon-Fri: 8am-8pm ET</p>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><span class="icon icon-email"></span></div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:support@globalbank.com">support@globalbank.com</a><br>24/7 Response</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>About Global Bank</h3>
                    <p>Global Bank is a full-service financial institution dedicated to providing exceptional banking services with integrity, innovation, and personalized customer care since 1973.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><span class="icon icon-facebook"></span></a>
                        <a href="#" aria-label="Twitter"><span class="icon icon-twitter"></span></a>
                        <a href="#" aria-label="LinkedIn"><span class="icon icon-linkedin"></span></a>
                        <a href="#" aria-label="Instagram"><span class="icon icon-instagram"></span></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="{{url('login')}}">Login</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press Releases</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Security Center</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">Regulatory Compliance</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Financial Education</a></li>
                        <li><a href="#">Calculators & Tools</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Fraud Prevention</a></li>
                        <li><a href="#">Mobile App</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Global Bank. All rights reserved. | Member FDIC | Equal Housing Lender</p>
                <p>Global Bank, N.A. is a federally chartered financial institution. Deposit products are FDIC insured up to applicable limits. Investment and insurance products are not FDIC insured, not bank guaranteed, and may lose value.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize GSAP and ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

/* -----------------------------
           Mobile Menu: Toggle & overlay
           ----------------------------- */
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const navbar = document.getElementById('navbar');

        function openMenu() {
            mobileToggle.classList.add('active');
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
            mobileToggle.setAttribute('aria-expanded', 'true');
            mobileMenu.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
        function closeMenu() {
            mobileToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            mobileToggle.setAttribute('aria-expanded', 'false');
            mobileMenu.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
        function toggleMenu() {
            if (mobileMenu.classList.contains('active')) closeMenu();
            else openMenu();
        }

        mobileToggle.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', closeMenu);
        document.querySelectorAll('.mobile-menu-list a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

     

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });

        // Carousel Functionality
        const carouselWrapper = document.getElementById('carouselWrapper');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const carouselDots = document.querySelectorAll('.carousel-dot');
        let currentSlide = 0;
        const totalSlides = 4;
        let autoplayInterval;

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            const offset = -slideIndex * 100;
            carouselWrapper.style.transform = `translateX(${offset}%)`;
            
            carouselDots.forEach((dot, index) => {
                dot.classList.toggle('active', index === slideIndex);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            goToSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            goToSlide(currentSlide);
        }

        function startAutoplay() {
            autoplayInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoplay();
            startAutoplay();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoplay();
            startAutoplay();
        });

        carouselDots.forEach(dot => {
            dot.addEventListener('click', () => {
                const slideIndex = parseInt(dot.getAttribute('data-slide'));
                goToSlide(slideIndex);
                stopAutoplay();
                startAutoplay();
            });
        });

        // Start autoplay
        startAutoplay();

       

        // GSAP Animations
        // Navbar animation on load
        gsap.from('.site-navbar', {
            y: -100,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });

        // Hero section animations
        gsap.from('.hero-content h1', {
            y: 50,
            opacity: 0,
            duration: 1,
            delay: 0.3,
            ease: 'power3.out'
        });

        gsap.from('.hero-content p', {
            y: 50,
            opacity: 0,
            duration: 1,
            delay: 0.5,
            ease: 'power3.out'
        });

        gsap.from('.hero-content .btn-primary', {
            scale: 0,
            opacity: 0,
            duration: 0.8,
            delay: 0.7,
            ease: 'back.out(1.7)'
        });



        // Service icons scale animation
        gsap.utils.toArray('.service-icon').forEach(icon => {
            gsap.from(icon, {
                scrollTrigger: {
                    trigger: icon,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                },
                scale: 0,
                rotation: 360,
                duration: 0.8,
                ease: 'back.out(1.7)'
            });
        });

        // Contact icons bounce animation
        gsap.utils.toArray('.contact-icon').forEach(icon => {
            gsap.from(icon, {
                scrollTrigger: {
                    trigger: icon,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                },
                y: -50,
                opacity: 0,
                duration: 0.8,
                ease: 'bounce.out'
            });
        });


      

        // Service card hover animation enhancement
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.05,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
            
            card.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });

        // Feature card wave animation
        gsap.utils.toArray('.feature-card').forEach((card, index) => {
            card.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    y: -15,
                    duration: 0.4,
                    ease: 'power2.out'
                });
            });
            
            card.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    y: 0,
                    duration: 0.4,
                    ease: 'power2.out'
                });
            });
        });

        // Continuous subtle animation for hero background
        gsap.to('.hero-section::before', {
            backgroundPosition: '200px 200px',
            duration: 20,
            repeat: -1,
            ease: 'none'
        });

        // Social icons stagger animation
        gsap.from('.social-links a', {
            scrollTrigger: {
                trigger: '.social-links',
                start: 'top 90%',
                toggleActions: 'play none none reverse'
            },
            scale: 0,
            rotation: 360,
            duration: 0.6,
            stagger: 0.1,
            ease: 'back.out(1.7)'
        });

        // About feature items sliding animation with rotation
        gsap.utils.toArray('.about-feature-icon').forEach((icon, index) => {
            gsap.from(icon, {
                scrollTrigger: {
                    trigger: icon,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                },
                x: -100,
                rotation: -360,
                opacity: 0,
                duration: 1,
                ease: 'power3.out'
            });
        });

        // Button hover animations with GSAP
        document.querySelectorAll('.btn-primary').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.05,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
            
            btn.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });

        // Section title underline animation
        gsap.utils.toArray('.section-title').forEach(title => {
            gsap.from(title.querySelector('::after'), {
                scrollTrigger: {
                    trigger: title,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                width: 0,
                duration: 1,
                ease: 'power2.out'
            });
        });

        // Carousel arrow pulse animation
        gsap.to('.carousel-arrow', {
            scale: 1.1,
            duration: 0.8,
            repeat: -1,
            yoyo: true,
            ease: 'power1.inOut',
            stagger: 0.2
        });

        // Stats section reveal animation with split effect
        gsap.from('.stats-grid', {
            scrollTrigger: {
                trigger: '.stats-section',
                start: 'top 70%',
                toggleActions: 'play none none reverse'
            },
            clipPath: 'inset(0 50% 0 50%)',
            duration: 1.2,
            ease: 'power3.out'
        });

        // Contact section reveal with blur effect
        gsap.from('.contact-grid', {
            scrollTrigger: {
                trigger: '.contact-section',
                start: 'top 75%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            filter: 'blur(20px)',
            duration: 1,
            ease: 'power2.out'
        });

        // Navigation menu items stagger on load
        gsap.from('.desktop-menu li', {
            y: -20,
            opacity: 0,
            duration: 0.5,
            stagger: 0.1,
            delay: 1,
            ease: 'power2.out'
        });

        // Logo animation on load
        gsap.from('.site-logo', {
            x: -50,
            opacity: 0,
            duration: 0.8,
            delay: 0.5,
            ease: 'power3.out'
        });

        // Floating animation for carousel content
        gsap.utils.toArray('.carousel-content').forEach(content => {
            gsap.to(content, {
                y: -10,
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: 'power1.inOut'
            });
        });

        // Footer bottom fade in
        gsap.from('.footer-bottom', {
            scrollTrigger: {
                trigger: '.footer-bottom',
                start: 'top 90%',
                toggleActions: 'play none none reverse'
            },
            y: 20,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out'
        });

        // Create a continuous animation for the accent gradient
        gsap.to('.gradient-text', {
            backgroundPosition: '200% center',
            duration: 3,
            repeat: -1,
            ease: 'none'
        });

        // Magnetic effect for buttons
        document.querySelectorAll('.btn-primary, .btn-login').forEach(button => {
            button.addEventListener('mousemove', (e) => {
                const rect = button.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                gsap.to(button, {
                    x: x * 0.3,
                    y: y * 0.3,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
            
            button.addEventListener('mouseleave', () => {
                gsap.to(button, {
                    x: 0,
                    y: 0,
                    duration: 0.5,
                    ease: 'elastic.out(1, 0.5)'
                });
            });
        });

        // Scroll-triggered rotation for feature icons
        gsap.utils.toArray('.feature-icon').forEach(icon => {
            ScrollTrigger.create({
                trigger: icon,
                start: 'top 80%',
                end: 'bottom 20%',
                onEnter: () => {
                    gsap.to(icon, {
                        rotation: 360,
                        duration: 1,
                        ease: 'power2.out'
                    });
                }
            });
        });

        // Stagger animation for footer links
        gsap.from('.footer-section ul li', {
            scrollTrigger: {
                trigger: '.footer-grid',
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            },
            x: -20,
            opacity: 0,
            duration: 0.5,
            stagger: 0.05,
            ease: 'power2.out'
        });

        // Smooth reveal for contact info text
        gsap.from('.contact-item p', {
            scrollTrigger: {
                trigger: '.contact-grid',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            y: 20,
            duration: 0.8,
            stagger: 0.2,
            ease: 'power2.out'
        });

        // Create a pulsing effect for the carousel dots
        gsap.to('.carousel-dot:not(.active)', {
            scale: 1.2,
            opacity: 0.7,
            duration: 1,
            repeat: -1,
            yoyo: true,
            stagger: 0.2,
            ease: 'power1.inOut'
        });

       

        // Parallax scrolling effect for sections
        gsap.utils.toArray('section').forEach((section, index) => {
            if (index % 2 === 0) {
                gsap.to(section, {
                    scrollTrigger: {
                        trigger: section,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 1
                    },
                    y: -50,
                    ease: 'none'
                });
            }
        });

        // Refresh ScrollTrigger after all animations are set
        ScrollTrigger.refresh();
    </script>
</body>

</html>