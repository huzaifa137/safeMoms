@extends('layouts.apps')
@section('content')

<style>
    /* Animation Keyframes */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes float {
        0% { transform: translateY(0px) rotate(15deg); }
        50% { transform: translateY(-10px) rotate(15deg); }
        100% { transform: translateY(0px) rotate(15deg); }
    }

    @keyframes floatRight {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    @keyframes checkmarkPop {
        0% { transform: scale(0.8); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    @keyframes rotateIn {
        from {
            opacity: 0;
            transform: rotate(-10deg) scale(0.9);
        }
        to {
            opacity: 1;
            transform: rotate(0deg) scale(1);
        }
    }

    /* Animation Classes */
    .animate-on-load {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }

    .animate-on-load-delay-1 {
        animation: fadeInUp 0.8s ease-out 0.2s forwards;
        opacity: 0;
    }

    .animate-on-load-delay-2 {
        animation: fadeInUp 0.8s ease-out 0.4s forwards;
        opacity: 0;
    }

    .animate-on-load-delay-3 {
        animation: fadeInUp 0.8s ease-out 0.6s forwards;
        opacity: 0;
    }

    .slide-in-left {
        animation: slideInLeft 0.8s ease-out forwards;
        opacity: 0;
    }

    .slide-in-right {
        animation: slideInRight 0.8s ease-out forwards;
        opacity: 0;
    }

    .fade-in {
        animation: fadeIn 1s ease-out forwards;
        opacity: 0;
    }

    .floating-bg {
        animation: float 6s ease-in-out infinite;
    }

    .floating-bg-right {
        animation: floatRight 8s ease-in-out infinite;
    }

    .pulse-element {
        animation: pulse 2s ease-in-out infinite;
    }

    .pulse-on-hover {
        transition: all 0.3s ease;
    }
    .pulse-on-hover:hover {
        animation: pulse 1s ease-in-out;
    }

    .shimmer-effect {
        background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%);
        background-size: 200% 100%;
        animation: shimmer 3s infinite;
    }

    .rotate-in {
        animation: rotateIn 0.6s ease-out forwards;
    }

    /* Hover Effects */
    .responsive-card,
    .responsive-benefit-card,
    .responsive-faq-item,
    .stat-card,
    .goal-card,
    .training-module {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .responsive-card:hover,
    .responsive-benefit-card:hover,
    .responsive-faq-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.12) !important;
    }

    .responsive-benefit-card:hover {
        transform: translateY(-10px) scale(1.02);
    }

    .responsive-card:hover .responsive-icon-large,
    .responsive-benefit-card:hover div[style*="width: 70px; height: 70px;"] {
        transform: scale(1.1) rotate(5deg);
        transition: transform 0.4s ease;
    }

    .responsive-icon-large,
    .responsive-icon-small,
    .responsive-benefit-card div[style*="width: 70px; height: 70px;"] {
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .responsive-button {
        transition: all 0.3s ease !important;
    }
    .responsive-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(70,222,72,0.4) !important;
    }

    input, textarea {
        transition: all 0.3s ease;
    }
    input:hover, textarea:hover {
        background: rgba(255,255,255,0.15) !important;
        border-color: rgba(255,255,255,0.3) !important;
    }
    input:focus, textarea:focus {
        transform: scale(1.01);
        background: rgba(255,255,255,0.2) !important;
        border-color: #46DE48 !important;
        box-shadow: 0 0 0 3px rgba(70,222,72,0.1);
    }

    .faq-question {
        transition: all 0.3s ease;
    }
    .faq-question:hover {
        color: #DD3134;
    }

    .faq-icon {
        transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .faq-answer {
        animation: fadeInUp 0.5s ease-out;
    }

    .check-icon {
        animation: checkmarkPop 0.5s ease-out;
    }

    .responsive-cta {
        transition: all 0.3s ease;
    }
    .responsive-cta:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 20px 35px rgba(54,53,88,0.3) !important;
    }

    .badge-shimmer {
        position: relative;
        overflow: hidden;
    }
    .badge-shimmer::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 3s infinite;
    }

    /* Form validation animation */
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
    }

    .form-error {
        animation: shake 0.6s ease-in-out;
        border-color: #DD3134 !important;
    }

    /* List item animations */
    .responsive-do-item {
        transition: all 0.3s ease;
    }
    .responsive-do-item:hover {
        transform: translateX(5px);
    }
    .responsive-do-item:hover .responsive-icon-small {
        transform: scale(1.15);
        background: rgba(70,222,72,0.2) !important;
    }

    ul li {
        transition: all 0.2s ease;
        animation: slideInRight 0.5s ease-out;
        animation-fill-mode: both;
    }
    ul li:hover {
        transform: translateX(5px);
        color: #363558;
    }

    ul li:nth-child(1) { animation-delay: 0.1s; }
    ul li:nth-child(2) { animation-delay: 0.2s; }
    ul li:nth-child(3) { animation-delay: 0.3s; }
    ul li:nth-child(4) { animation-delay: 0.4s; }

    /* Responsive styles for smaller screens */
    @media screen and (max-width: 768px) {
        /* Main section adjustments */
        .responsive-section {
            padding: 60px 4% 80px 4% !important;
        }
        
        /* Header section */
        .responsive-header h1 {
            font-size: 42px !important;
            letter-spacing: -0.5px !important;
        }
        
        .responsive-header p {
            font-size: 16px !important;
            padding: 0 10px !important;
        }
        
        /* Two column layout becomes single column */
        .responsive-grid {
            display: block !important;
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }
        
        /* Card adjustments */
        .responsive-card {
            padding: 25px !important;
            border-radius: 20px !important;
        }
        
        /* Icon sizes */
        .responsive-icon-large {
            width: 40px !important;
            height: 40px !important;
            border-radius: 10px !important;
        }
        
        .responsive-icon-small {
            width: 40px !important;
            height: 40px !important;
        }
        
        /* Heading sizes */
        .responsive-h2 {
            font-size: 26px !important;
        }
        
        /* Training program grid */
        .responsive-training-grid {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }
        
        /* Benefits grid */
        .responsive-benefits-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .responsive-benefit-card {
            padding: 25px 20px !important;
        }
        
        /* FAQ section */
        .responsive-faq h2 {
            font-size: 32px !important;
        }
        
        .responsive-faq-item {
            padding: 20px !important;
        }
        
        /* Form adjustments */
        .responsive-form {
            padding: 25px !important;
        }
        
        /* Background elements */
        .responsive-bg-left {
            width: 60% !important;
            clip-path: polygon(0 0, 100% 0, 50% 100%, 0% 100%) !important;
        }
        
        .responsive-bg-right {
            width: 200px !important;
            height: 200px !important;
        }

        /* Animation adjustments for mobile */
        .animate-on-load,
        .animate-on-load-delay-1,
        .animate-on-load-delay-2,
        .animate-on-load-delay-3,
        .slide-in-left,
        .slide-in-right {
            animation-duration: 0.5s;
        }
    }
    
    @media screen and (max-width: 480px) {
        /* Extra small screens */
        .responsive-section {
            padding: 50px 3% 60px 3% !important;
        }
        
        .responsive-header h1 {
            font-size: 36px !important;
            line-height: 1.1 !important;
        }
        
        .responsive-header p {
            font-size: 15px !important;
            line-height: 1.5 !important;
        }
        
        /* Button adjustments */
        .responsive-badge {
            padding: 8px 20px !important;
            font-size: 13px !important;
        }
        
        .responsive-button {
            padding: 16px !important;
            font-size: 15px !important;
        }
        
        /* What you'll do items */
        .responsive-do-item {
            flex-direction: column !important;
            gap: 10px !important;
            text-align: center !important;
        }
        
        /* FAQ */
        .responsive-faq h2 {
            font-size: 28px !important;
        }
        
        .responsive-faq p {
            font-size: 16px !important;
        }
        
        /* Contact CTA */
        .responsive-cta {
            padding: 14px 25px !important;
            font-size: 15px !important;
        }
        
        /* Margins reduction */
        .responsive-margin-top {
            margin-top: 60px !important;
        }
        
        .responsive-margin-bottom {
            margin-bottom: 40px !important;
        }
    }
    
    @media screen and (min-width: 769px) and (max-width: 1024px) {
        /* Tablet adjustments */
        .responsive-grid {
            gap: 40px !important;
        }
        
        .responsive-header h1 {
            font-size: 56px !important;
        }
        
        .responsive-header p {
            font-size: 18px !important;
        }
        
        .responsive-card {
            padding: 30px !important;
        }
        
        .responsive-training-grid {
            gap: 15px !important;
        }
        
        .responsive-benefits-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    
    /* Improve touch targets on mobile */
    @media (hover: none) and (pointer: coarse) {
        input, textarea, button, select {
            font-size: 16px !important;
            min-height: 44px !important;
        }
        
        button, a {
            min-height: 44px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        
        .responsive-faq-item {
            cursor: pointer;
            padding: 20px !important;
        }

        /* Disable hover animations on touch devices */
        .responsive-card:hover,
        .responsive-benefit-card:hover,
        .responsive-faq-item:hover {
            transform: none;
        }
    }
</style>

<section class="responsive-section"
    style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

    <!-- Geometric background elements with floating animation -->
    <div class="responsive-bg-left floating-bg"
        style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05;">
    </div>
    <div class="responsive-bg-right floating-bg-right"
        style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #DD3134; opacity: 0.05;">
    </div>

    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">

        <!-- Header Section -->
        <div class="responsive-header" style="text-align: center; margin-bottom: 80px;">
            <div class="responsive-badge badge-shimmer animate-on-load"
                style="display: inline-block; padding: 10px 30px; background: linear-gradient(90deg, #46DE48, #80E681); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(70,222,72,0.3); position: relative; overflow: hidden;">
                <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                    viewBox="0 0 24 24">
                    <path
                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                </svg>
                JOIN OUR MOVEMENT
            </div>

            <h1 class="animate-on-load-delay-1"
                style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                Become a <span style="color: #DD3134;">Youth Navigator</span>
            </h1>

            <p class="animate-on-load-delay-2"
                style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                Join a growing network of trained young leaders who provide essential maternal health support in their
                communities. Make a direct impact while gaining valuable skills and experience.
            </p>
        </div>

        <!-- Two Column Layout -->
        <div class="responsive-grid" style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: start;">

            <!-- Left Column: Main Content -->
            <div>
                <!-- What You'll Do Section -->
                <div class="responsive-card slide-in-left"
                    style="background: white; border-radius: 25px; padding: 40px; margin-bottom: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <div class="responsive-icon-large rotate-in"
                            style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; fill: white;" viewBox="0 0 24 24">
                                <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3z" />
                            </svg>
                        </div>
                        <h2 class="responsive-h2" style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">What You'll Do</h2>
                    </div>

                    <div style="display: grid; gap: 25px;">
                        <div class="responsive-do-item" style="display: flex; gap: 20px; animation: slideInRight 0.6s ease-out 0.1s both;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">
                                    Conduct Home Visits</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Visit expectant and new mothers
                                    during pregnancy and postpartum periods to provide personalized support.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; gap: 20px; animation: slideInRight 0.6s ease-out 0.2s both;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(128,143,189,0.1); color: #373358; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #373358;" viewBox="0 0 24 24">
                                        <path
                                            d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12zM11 5h2v6h-2zm0 8h2v2h-2z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">Health
                                    Education</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Provide essential health
                                    information and counsel mothers on prenatal, delivery, and postpartum care.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; gap: 20px; animation: slideInRight 0.6s ease-out 0.3s both;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(145,116,110,0.1); color: #91746E; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #91746E;" viewBox="0 0 24 24">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">Birth
                                    Companion</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Accompany mothers during
                                    delivery and provide emotional support throughout the birthing process.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; gap: 20px; animation: slideInRight 0.6s ease-out 0.4s both;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(221,49,52,0.1); color: #DD3134; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #DD3134;" viewBox="0 0 24 24">
                                        <path
                                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">
                                    Emergency Coordination</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Coordinate emergency transport
                                    and referrals when complications arise during pregnancy or delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Training Program Section -->
                <div class="responsive-card slide-in-left"
                    style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); animation-delay: 0.2s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <div class="responsive-icon-large rotate-in"
                            style="background: linear-gradient(135deg, #46DE48, #80E681); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; fill: white;" viewBox="0 0 24 24">
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                            </svg>
                        </div>
                        <h2 class="responsive-h2" style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Training Program</h2>
                    </div>

                    <div class="responsive-training-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 30px;">
                        <div class="training-module" style="background: #f8f9fa; border-radius: 15px; padding: 25px; transition: all 0.3s ease;">
                            <div style="color: #DD3134; font-size: 14px; font-weight: 700; margin-bottom: 10px;">PHASE 1
                            </div>
                            <h3 style="font-size: 18px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Core
                                Training</h3>
                            <ul
                                style="color: #5a5a5a; margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.5;">
                                <li>Maternal health basics</li>
                                <li>Danger signs recognition</li>
                                <li>Communication skills</li>
                                <li>Community engagement</li>
                            </ul>
                        </div>

                        <div class="training-module" style="background: #f8f9fa; border-radius: 15px; padding: 25px; transition: all 0.3s ease; animation-delay: 0.1s;">
                            <div style="color: #46DE48; font-size: 14px; font-weight: 700; margin-bottom: 10px;">PHASE 2
                            </div>
                            <h3 style="font-size: 18px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Field
                                Practicum</h3>
                            <ul
                                style="color: #5a5a5a; margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.5;">
                                <li>Supervised home visits</li>
                                <li>Case management</li>
                                <li>Emergency simulation</li>
                                <li>Mentorship sessions</li>
                            </ul>
                        </div>
                    </div>

                    <div class="pulse-on-hover"
                        style="background: linear-gradient(135deg, #363558, #434961); border-radius: 15px; padding: 25px; color: white; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                            <svg class="check-icon" style="width: 20px; height: 20px; fill: #46DE48;" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <h3 style="font-size: 18px; margin: 0; font-weight: 700;">Certification & Support</h3>
                        </div>
                        <p style="color: #DCCEC1; margin: 0; font-size: 14px; line-height: 1.5;">
                            Upon completion, you'll receive a nationally recognized certification as a Maternal Health
                            Navigator.
                            Ongoing mentorship and peer support groups ensure continued growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Application & Requirements -->
            <div>
                <!-- Requirements Card -->
                <div class="responsive-card slide-in-right"
                    style="background: white; border-radius: 25px; padding: 40px; margin-bottom: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <div class="responsive-icon-large rotate-in"
                            style="background: #91746E; width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; fill: white;" viewBox="0 0 24 24">
                                <path
                                    d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                            </svg>
                        </div>
                        <h2 class="responsive-h2" style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Requirements</h2>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <div class="responsive-do-item" style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; animation: slideInLeft 0.5s ease-out 0.1s both;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Age &
                                    Education</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Aged 18-30 with
                                    at least secondary education.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; animation: slideInLeft 0.5s ease-out 0.2s both;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">
                                    Commitment</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Minimum
                                    12-month commitment, 10-15 hours per week.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; animation: slideInLeft 0.5s ease-out 0.3s both;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">
                                    Community Connection</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Resident of the
                                    community you'll serve, with local language proficiency.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; align-items: flex-start; gap: 15px; animation: slideInLeft 0.5s ease-out 0.4s both;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">
                                    Technology Access</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Access to a
                                    mobile phone for communication and reporting.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="javascript:void();" method="post">
                    <!-- Application Form -->
                    <div class="responsive-form slide-in-right"
                        style="background: linear-gradient(135deg, #363558, #434961); border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(54,53,88,0.3); animation-delay: 0.3s;">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <h2 style="font-size: 28px; color: white; margin: 0 0 15px 0; font-weight: 800;">Start Your
                                Journey</h2>
                            <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                                Submit your application and join our next training cohort
                            </p>
                        </div>

                        <form style="display: grid; gap: 20px;">
                            <div style="animation: fadeInUp 0.5s ease-out 0.4s both;">
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Full
                                    Name</label>
                                <input type="text"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                    placeholder="Enter your full name">
                            </div>

                            <div style="animation: fadeInUp 0.5s ease-out 0.5s both;">
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Email
                                    Address</label>
                                <input type="email"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                    placeholder="Enter your email">
                            </div>

                            <div style="animation: fadeInUp 0.5s ease-out 0.6s both;">
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Phone
                                    Number</label>
                                <input type="tel"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                    placeholder="Enter your phone number">
                            </div>

                            <div style="animation: fadeInUp 0.5s ease-out 0.7s both;">
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Location/Community</label>
                                <input type="text"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                    placeholder="Enter your community">
                            </div>

                            <div style="animation: fadeInUp 0.5s ease-out 0.8s both;">
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Why
                                    do you want to become a Navigator?</label>
                                <textarea rows="4"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; resize: vertical; transition: all 0.3s ease;"
                                    placeholder="Share your motivation..."></textarea>
                            </div>

                            <button type="submit" class="responsive-button"
                                style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 18px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 20px rgba(70,222,72,0.3); transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 10px; animation: fadeInUp 0.5s ease-out 0.9s both;">
                                <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                                </svg>
                                Submit Application
                            </button>
                        </form>

                        <div style="text-align: center; margin-top: 25px; animation: fadeIn 0.5s ease-out 1s both;">
                            <p style="color: #DCCEC1; font-size: 13px; margin: 0;">
                                <svg style="width: 14px; height: 14px; fill: #46DE48; vertical-align: middle; margin-right: 5px;"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                                We'll contact you within 3 business days
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="responsive-margin-top" style="margin-top: 80px;">
            <div class="responsive-margin-bottom" style="text-align: center; margin-bottom: 50px;">
                <h2 class="animate-on-load" style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800;">Benefits of Being a
                    Navigator</h2>
                <p class="animate-on-load-delay-1" style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Join a transformative program that empowers you while serving your community
                </p>
            </div>

            <div class="responsive-benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
                <div class="responsive-benefit-card animate-on-load"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08); animation-delay: 0.1s;">
                    <div
                        style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; transition: all 0.3s ease;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Skill Development
                    </h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Gain valuable skills in healthcare, communication, leadership, and community engagement.
                    </p>
                </div>

                <div class="responsive-benefit-card animate-on-load-delay-1"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <div
                        style="background: linear-gradient(135deg, #46DE48, #80E681); width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; transition: all 0.3s ease;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Community Impact
                    </h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Make a direct, measurable impact on maternal and child health in your own community.
                    </p>
                </div>

                <div class="responsive-benefit-card animate-on-load-delay-2"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <div
                        style="background: #91746E; width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; transition: all 0.3s ease;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Professional
                        Growth</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Receive certification, mentorship, and networking opportunities with healthcare professionals.
                    </p>
                </div>

                <div class="responsive-benefit-card animate-on-load-delay-3"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <div
                        style="background: #373358; width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; transition: all 0.3s ease;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Stipend & Support
                    </h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Receive a monthly stipend, transportation allowance, and all necessary training materials.
                    </p>
                </div>
            </div>
        </div>

<!-- FAQ Section -->
<div class="responsive-margin-top" style="margin-top: 80px;">
    <div class="responsive-faq responsive-margin-bottom" style="text-align: center; margin-bottom: 50px;">
        <h2 class="animate-on-load" style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800;">Frequently Asked
            Questions</h2>
        <p class="animate-on-load-delay-1" style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
            Find answers to common questions about becoming a safeMom Navigator
        </p>
    </div>

    <div style="max-width: 900px; margin: 0 auto;">
        <div class="responsive-faq-item animate-on-load"
            style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); animation-delay: 0.1s;">
            <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">What is the time
                    commitment required?</h3>
                <svg class="faq-icon" style="width: 20px; height: 20px; fill: #DD3134; transition: transform 0.3s ease;" viewBox="0 0 24 24">
                    <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                    <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                </svg>
            </div>
            <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                Navigators commit 10-15 hours per week for a minimum of 12 months. This includes home visits,
                reporting, training sessions, and community engagement activities.
            </p>
        </div>

        <div class="responsive-faq-item animate-on-load-delay-1"
            style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
            <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">Is prior healthcare
                    experience required?</h3>
                <svg class="faq-icon" style="width: 20px; height: 20px; fill: #DD3134; transition: transform 0.3s ease;" viewBox="0 0 24 24">
                    <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                    <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                </svg>
            </div>
            <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                No prior healthcare experience is required. We provide comprehensive training covering all
                necessary skills and knowledge. What matters most is your passion for helping mothers and
                your connection to the community.
            </p>
        </div>

        <div class="responsive-faq-item animate-on-load-delay-2"
            style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
            <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">What support will I
                    receive as a Navigator?</h3>
                <svg class="faq-icon" style="width: 20px; height: 20px; fill: #DD3134; transition: transform 0.3s ease;" viewBox="0 0 24 24">
                    <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                    <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                </svg>
            </div>
            <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                You'll receive ongoing mentorship, monthly stipends, transportation allowances, regular training
                refreshers, peer support groups, and 24/7 access to medical supervisors for consultation.
            </p>
        </div>

        <div class="responsive-faq-item animate-on-load-delay-3"
            style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
            <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">How are Navigators
                    matched with mothers?</h3>
                <svg class="faq-icon" style="width: 20px; height: 20px; fill: #DD3134; transition: transform 0.3s ease;" viewBox="0 0 24 24">
                    <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                    <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                </svg>
            </div>
            <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                Navigators are typically assigned to mothers in their own communities or nearby areas.
                We consider language, cultural background, and proximity to ensure effective communication
                and relationship building.
            </p>
        </div>
    </div>

    <!-- Contact CTA -->
    <div style="text-align: center; margin-top: 60px;">
        <p class="animate-on-load" style="font-size: 18px; color: #5a5a5a; margin-bottom: 25px;">
            Still have questions? Contact our Navigator Program Coordinator
        </p>
        <a href="mailto:navigators@safeMom.org" class="responsive-cta animate-on-load-delay-1"
            style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(90deg, #363558, #434961); color: white; padding: 16px 35px; border-radius: 12px; text-decoration: none; font-size: 16px; font-weight: 700; box-shadow: 0 10px 25px rgba(54,53,88,0.2);">
            <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                <path
                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
            </svg>
            Contact Us
        </a>
    </div>
</div>

<script>
// FAQ Dropdown Functionality with Animation
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.responsive-faq-item');
    
    faqItems.forEach((item, index) => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');
        const plusIcon = icon ? icon.querySelector('.plus-icon') : null;
        const plusIconVertical = icon ? icon.querySelector('.plus-icon-vertical') : null;
        
        question.addEventListener('click', function() {
            // Toggle answer visibility with smooth animation
            if (answer.style.display === 'none' || answer.style.display === '') {
                answer.style.display = 'block';
                answer.style.animation = 'fadeInUp 0.5s ease-out';
                
                if (plusIcon && plusIconVertical) {
                    plusIcon.style.display = 'none';
                    plusIconVertical.style.display = 'block';
                }
                
                if (icon) {
                    icon.style.transform = 'rotate(45deg)';
                }
                
                // Smooth scroll to show full content
                setTimeout(() => {
                    item.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            } else {
                answer.style.display = 'none';
                
                if (plusIcon && plusIconVertical) {
                    plusIcon.style.display = 'block';
                    plusIconVertical.style.display = 'none';
                }
                
                if (icon) {
                    icon.style.transform = 'rotate(0deg)';
                }
            }
        });
        
        // Add hover effect for the whole FAQ item
        item.addEventListener('mouseenter', function() {
            icon.style.transform = 'scale(1.2)';
        });
        
        item.addEventListener('mouseleave', function() {
            if (answer.style.display === 'none' || answer.style.display === '') {
                icon.style.transform = 'rotate(0deg) scale(1)';
            } else {
                icon.style.transform = 'rotate(45deg) scale(1)';
            }
        });
    });
    
    // Add form input animations
    const formInputs = document.querySelectorAll('input, textarea');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });
    
    // Add submit button animation
    const submitBtn = document.querySelector('.responsive-button');
    if (submitBtn) {
        submitBtn.addEventListener('click', function(e) {
            e.preventDefault();
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
            
            // Add success animation (you can customize this)
            const checkIcon = document.createElement('svg');
            checkIcon.setAttribute('style', 'width: 20px; height: 20px; fill: white; margin-left: 10px;');
            checkIcon.setAttribute('viewBox', '0 0 24 24');
            checkIcon.innerHTML = '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>';
            
            const existingIcon = this.querySelector('svg:last-child');
            if (existingIcon) {
                existingIcon.remove();
            }
            this.appendChild(checkIcon);
            
            setTimeout(() => {
                if (this.querySelector('svg:last-child')) {
                    this.querySelector('svg:last-child').remove();
                }
                const originalIcon = document.createElement('svg');
                originalIcon.setAttribute('style', 'width: 20px; height: 20px; fill: white;');
                originalIcon.setAttribute('viewBox', '0 0 24 24');
                originalIcon.innerHTML = '<path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>';
                this.insertBefore(originalIcon, this.firstChild);
            }, 2000);
        });
    }
});
</script>
    </div>
</section>

@endsection