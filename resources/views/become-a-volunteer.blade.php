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
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
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
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes floatRight {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        @keyframes checkmarkPop {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
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

        @keyframes numberCount {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes badgePulse {
            0% {
                box-shadow: 0 8px 20px rgba(70, 222, 72, 0.3);
            }

            50% {
                box-shadow: 0 12px 30px rgba(70, 222, 72, 0.5);
            }

            100% {
                box-shadow: 0 8px 20px rgba(70, 222, 72, 0.3);
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

        .animate-on-load-delay-4 {
            animation: fadeInUp 0.8s ease-out 0.8s forwards;
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

        .badge-pulse {
            animation: badgePulse 3s ease-in-out infinite;
        }

        .shimmer-effect {
            position: relative;
            overflow: hidden;
        }

        .shimmer-effect::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 3s infinite;
        }

        .rotate-in {
            animation: rotateIn 0.6s ease-out forwards;
        }

        .number-animate {
            animation: numberCount 0.8s ease-out forwards;
        }

        /* Hover Effects */
        .opportunity-card,
        .volunteer-grid>div,
        .faq-item,
        .sidebar-card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .opportunity-card:hover,
        .volunteer-grid>div:hover,
        .faq-item:hover,
        .sidebar-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12) !important;
        }

        .opportunity-card:hover {
            transform: translateY(-10px) scale(1.02);
        }

        .opportunity-card:hover .opportunity-icon,
        .sidebar-card:hover .sidebar-icon,
        .volunteer-grid>div:hover div[style*="background: rgba"]:first-child {
            transform: scale(1.1) rotate(5deg);
            transition: transform 0.4s ease;
        }

        .opportunity-icon,
        .sidebar-icon,
        .volunteer-grid>div div[style*="background: rgba"] {
            transition: transform 0.3s ease, background 0.3s ease;
        }

        button {
            transition: all 0.3s ease !important;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
        }

        .hero-button-primary:hover {
            background: #2a2a45 !important;
            border-color: #2a2a45 !important;
        }

        .hero-button-secondary:hover {
            background: #f5f5f5 !important;
        }

        input,
        select,
        textarea {
            transition: all 0.3s ease;
        }

        input:hover,
        select:hover,
        textarea:hover {
            border-color: #363558 !important;
            background: white !important;
        }

        input:focus,
        select:focus,
        textarea:focus {
            transform: scale(1.01);
            border-color: #46DE48 !important;
            box-shadow: 0 0 0 3px rgba(70, 222, 72, 0.1);
            background: white !important;
        }

        .checkbox-label {
            transition: all 0.2s ease;
        }

        .checkbox-label:hover {
            background: rgba(70, 222, 72, 0.05);
            border-radius: 6px;
        }

        .stat-number {
            animation: numberCount 0.8s ease-out forwards;
            display: inline-block;
        }

        .testimonial-image {
            transition: all 0.4s ease;
        }

        .testimonial-image:hover {
            transform: scale(1.1) rotate(2deg);
            border-color: white !important;
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

        /* Stagger children animations */
        .stagger-children>* {
            animation: slideInRight 0.5s ease-out forwards;
            opacity: 0;
        }

        .stagger-children>*:nth-child(1) {
            animation-delay: 0.1s;
        }

        .stagger-children>*:nth-child(2) {
            animation-delay: 0.2s;
        }

        .stagger-children>*:nth-child(3) {
            animation-delay: 0.3s;
        }

        .stagger-children>*:nth-child(4) {
            animation-delay: 0.4s;
        }

        /* Responsive adjustments for animations */
        @media (max-width: 768px) {

            .animate-on-load,
            .animate-on-load-delay-1,
            .animate-on-load-delay-2,
            .animate-on-load-delay-3,
            .slide-in-left,
            .slide-in-right {
                animation-duration: 0.5s;
            }

            .opportunity-card:hover,
            .volunteer-grid>div:hover,
            .faq-item:hover {
                transform: translateY(-5px);
            }
        }

        @media (hover: none) and (pointer: coarse) {

            .opportunity-card:hover,
            .volunteer-grid>div:hover,
            .faq-item:hover,
            .sidebar-card:hover {
                transform: none;
            }

            button:hover {
                transform: none;
            }
        }
    </style>

<style>
/* ========== SPACING REDUCTIONS FOR VOLUNTEER OPPORTUNITIES PAGE ========== */

/* Override section padding */
section[style*="padding: 100px 5% 120px 5%"] {
    padding: 40px 5% 50px 5% !important;
}

/* Reduce hero section margin */
[style*="text-align: center; margin-bottom: 80px"] {
    margin-bottom: 30px !important;
}

/* Reduce badge padding */
[style*="display: inline-block; padding: 10px 30px; background: #46DE48; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px"] {
    padding: 6px 20px !important;
    font-size: 12px !important;
    margin-bottom: 15px !important;
}

/* Reduce main heading size */
h1[style*="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0"] {
    font-size: 42px !important;
    margin-bottom: 10px !important;
}

/* Reduce paragraph size and margin */
[style*="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px"] {
    font-size: 16px !important;
    margin-bottom: 20px !important;
}

/* Reduce hero buttons gap */
[style*="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap"] {
    gap: 10px !important;
}

/* Reduce button padding */
.hero-button-primary[style*="padding: 18px 40px; border-radius: 12px; font-size: 17px"] {
    padding: 12px 25px !important;
    font-size: 15px !important;
}

.hero-button-secondary[style*="padding: 18px 40px; border-radius: 12px; font-size: 17px"] {
    padding: 12px 25px !important;
    font-size: 15px !important;
}

/* Stats Section */
[style*="background: #363558; border-radius: 25px; padding: 50px; margin-bottom: 80px"] {
    padding: 25px !important;
    margin-bottom: 30px !important;
}

[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px"] {
    gap: 15px !important;
}

.stat-number[style*="font-size: 48px; font-weight: 800; color: white; margin-bottom: 10px"] {
    font-size: 32px !important;
    margin-bottom: 5px !important;
}

[style*="font-size: 16px; color: #FFF; opacity: 0.9; font-weight: 600"] {
    font-size: 13px !important;
}

/* Volunteer Opportunities section */
#opportunities[style*="margin-bottom: 100px"] {
    margin-bottom: 40px !important;
}

[style*="text-align: center; margin-bottom: 60px"]:nth-of-type(2) {
    margin-bottom: 25px !important;
}

h2[style*="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800"] {
    font-size: 32px !important;
    margin-bottom: 10px !important;
}

[style*="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6"] {
    font-size: 15px !important;
}

/* Opportunities grid */
[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px"] {
    gap: 15px !important;
}

.opportunity-card[style*="padding: 35px 30px"] {
    padding: 20px !important;
}

.opportunity-card [style*="display: flex; align-items: center; gap: 15px; margin-bottom: 25px"] {
    gap: 10px !important;
    margin-bottom: 15px !important;
}

.opportunity-icon[style*="width: 60px; height: 60px; border-radius: 12px"] {
    width: 45px !important;
    height: 45px !important;
}

.opportunity-icon svg[style*="width: 28px; height: 28px; fill"] {
    width: 22px !important;
    height: 22px !important;
}

[style*="color: #D83137; font-size: 14px; font-weight: 700"] {
    font-size: 12px !important;
}

.opportunity-card h3[style*="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800"] {
    font-size: 18px !important;
}

.opportunity-card p[style*="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px"] {
    font-size: 13px !important;
    margin-bottom: 15px !important;
    line-height: 1.5 !important;
}

[style*="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px"] {
    gap: 5px !important;
    margin-bottom: 15px !important;
}

[style*="padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600"] {
    padding: 4px 10px !important;
    font-size: 11px !important;
}

.opportunity-card button[style*="padding: 14px 30px; border-radius: 10px; font-size: 15px"] {
    padding: 10px 15px !important;
    font-size: 13px !important;
}

/* Volunteer section with dark background */
.volunteer-section[style*="padding: 80px 60px"] {
    padding: 30px 20px !important;
    margin-bottom: 40px !important;
}

.volunteer-title[style*="font-size: 52px"] {
    font-size: 32px !important;
}

[style*="font-size: 18px; color: #FFF; max-width: 700px; margin: 0 auto; line-height: 1.6; opacity: 0.9"] {
    font-size: 14px !important;
}

.volunteer-grid[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px"] {
    gap: 15px !important;
}

.volunteer-grid>div[style*="padding: 30px"] {
    padding: 15px !important;
}

.volunteer-grid>div [style*="min-width: 45px; height: 45px; border-radius: 10px"] {
    min-width: 35px !important;
    height: 35px !important;
}

.volunteer-grid>div svg[style*="width: 22px; height: 22px"] {
    width: 18px !important;
    height: 18px !important;
}

.volunteer-grid>div h3[style*="font-size: 20px; color: white; margin: 0; font-weight: 800"] {
    font-size: 16px !important;
}

.volunteer-grid>div p[style*="color: #FFF; margin: 0; line-height: 1.5; font-size: 15px; opacity: 0.9"] {
    font-size: 12px !important;
}

/* Application Form section */
#application[style*="margin-bottom: 80px"] {
    margin-bottom: 40px !important;
}

[style*="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start"] {
    gap: 20px !important;
}

/* Form card */
.slide-in-left[style*="padding: 50px"] {
    padding: 20px !important;
}

.slide-in-left h3[style*="font-size: 28px; color: #363558; margin: 0 0 35px 0; font-weight: 800"] {
    font-size: 22px !important;
    margin-bottom: 20px !important;
}

[style*="display: grid; gap: 25px"] {
    gap: 12px !important;
}

label[style*="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px"] {
    font-size: 12px !important;
    margin-bottom: 4px !important;
}

input[type="text"], input[type="email"], input[type="tel"], select, textarea {
    padding: 10px !important;
    font-size: 13px !important;
}

[style*="display: grid; grid-template-columns: 1fr 1fr; gap: 20px"] {
    gap: 10px !important;
}

/* Checkbox grid */
[style*="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px"] {
    gap: 6px !important;
}

.checkbox-label {
    padding: 2px !important;
}

.checkbox-label span[style*="color: #5a5a5a; font-size: 14px"] {
    font-size: 12px !important;
}

input[type="checkbox"] {
    width: 16px !important;
    height: 16px !important;
}

/* Submit button */
form button[type="submit"][style*="padding: 18px; border-radius: 12px; font-size: 16px"] {
    padding: 12px !important;
    font-size: 14px !important;
}

/* Sidebar cards */
.sidebar-card[style*="padding: 40px; margin-bottom: 30px"] {
    padding: 20px !important;
    margin-bottom: 15px !important;
}

.sidebar-card [style*="display: flex; align-items: center; gap: 15px; margin-bottom: 25px"] {
    gap: 8px !important;
    margin-bottom: 15px !important;
}

.sidebar-icon[style*="width: 50px; height: 50px; border-radius: 10px"] {
    width: 40px !important;
    height: 40px !important;
}

.sidebar-icon svg[style*="width: 24px; height: 24px"] {
    width: 20px !important;
    height: 20px !important;
}

.sidebar-card h3[style*="font-size: 24px; color: #363558; margin: 0; font-weight: 800"] {
    font-size: 18px !important;
}

[style*="display: grid; gap: 15px"] {
    gap: 8px !important;
}

[style*="display: flex; gap: 12px"] {
    gap: 6px !important;
}

[style*="font-weight: 600; color: #363558; margin-bottom: 5px"] {
    font-size: 13px !important;
    margin-bottom: 2px !important;
}

[style*="color: #5a5a5a; font-size: 14px; line-height: 1.5"] {
    font-size: 12px !important;
}

/* Testimonial card */
.sidebar-card[style*="background: #363558; border-radius: 25px; padding: 40px"] {
    padding: 20px !important;
}

[style*="display: flex; align-items: center; gap: 20px; margin-bottom: 25px"] {
    gap: 10px !important;
    margin-bottom: 15px !important;
}

.testimonial-image[style*="width: 70px; height: 70px; border-radius: 50%"] {
    width: 50px !important;
    height: 50px !important;
}

[style*="font-weight: 800; font-size: 18px"] {
    font-size: 15px !important;
}

[style*="color: #46DE48; font-size: 14px; font-weight: 600"] {
    font-size: 12px !important;
}

.sidebar-card p[style*="font-style: italic; line-height: 1.6; margin-bottom: 20px"] {
    font-size: 13px !important;
    margin-bottom: 10px !important;
}

/* FAQ Section */
[style*="margin-bottom: 80px"]:last-of-type {
    margin-bottom: 30px !important;
}

[style*="text-align: center; margin-bottom: 50px"]:nth-of-type(3) {
    margin-bottom: 20px !important;
}

h2[style*="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800"] {
    font-size: 28px !important;
    margin-bottom: 8px !important;
}

[style*="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6"] {
    font-size: 14px !important;
}

.faq-item[style*="padding: 30px; margin-bottom: 20px"] {
    padding: 15px !important;
    margin-bottom: 10px !important;
}

.faq-item h3[style*="font-size: 18px; color: #363558; margin: 0; font-weight: 700"] {
    font-size: 15px !important;
}

.faq-answer[style*="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6"] {
    margin-top: 8px !important;
    font-size: 13px !important;
}

/* Final CTA */
[style*="background: #D83137; border-radius: 30px; padding: 70px; text-align: center"] {
    padding: 30px 20px !important;
}

[style*="font-size: 42px; font-weight: 800; margin: 0 0 20px 0"] {
    font-size: 28px !important;
    margin-bottom: 10px !important;
}

[style*="font-size: 19px; margin: 0 auto 30px auto; max-width: 700px"] {
    font-size: 14px !important;
    margin-bottom: 15px !important;
}

[style*="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap"] {
    gap: 10px !important;
}

.final-cta button[style*="padding: 18px 40px; border-radius: 12px; font-size: 17px"] {
    padding: 10px 20px !important;
    font-size: 14px !important;
}

/* Reduce floating background elements */
.floating-bg[style*="width: 40%; height: 100%"] {
    width: 30% !important;
}

.floating-bg-right[style*="width: 300px; height: 300px"] {
    width: 150px !important;
    height: 150px !important;
}

/* Reduce animation durations for better performance */
.animate-on-load,
.animate-on-load-delay-1,
.animate-on-load-delay-2,
.animate-on-load-delay-3,
.animate-on-load-delay-4,
.slide-in-left,
.slide-in-right {
    animation-duration: 0.5s !important;
}

/* Responsive overrides */
@media screen and (max-width: 1024px) {
    [style*="display: grid; grid-template-columns: 1fr 1fr; gap: 20px"] {
        grid-template-columns: 1fr !important;
    }
}

@media screen and (max-width: 768px) {
    section[style*="padding: 40px 5% 50px 5%"] {
        padding: 30px 4% 40px 4% !important;
    }
    
    h1[style*="font-size: 42px"] {
        font-size: 32px !important;
    }
    
    .volunteer-section {
        padding: 20px !important;
    }
    
    .volunteer-title {
        font-size: 28px !important;
    }
    
    .volunteer-grid {
        grid-template-columns: 1fr !important;
    }
    
    .opportunity-card {
        padding: 15px !important;
    }
    
    .sidebar-card {
        padding: 15px !important;
    }
}

@media screen and (max-width: 480px) {
    h1[style*="font-size: 32px"] {
        font-size: 28px !important;
    }
    
    [style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px"] {
        grid-template-columns: 1fr !important;
    }
    
    .opportunity-card h3 {
        font-size: 16px !important;
    }
    
    .stat-number {
        font-size: 26px !important;
    }
    
    h2[style*="font-size: 28px"] {
        font-size: 24px !important;
    }
    
    h2[style*="font-size: 32px"] {
        font-size: 26px !important;
    }
    
    .final-cta button {
        width: 100% !important;
    }
}

/* Disable hover animations on touch devices */
@media (hover: none) and (pointer: coarse) {
    .opportunity-card:hover,
    .volunteer-grid>div:hover,
    .faq-item:hover,
    .sidebar-card:hover {
        transform: none !important;
    }
    
    button:hover {
        transform: none !important;
    }
}
</style>
    <section
        style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #FFF; position: relative; overflow: hidden; margin-top: 0rem;">

        <!-- Geometric background elements with floating animation -->
        <div class="floating-bg"
            style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.03;">
        </div>
        <div class="floating-bg-right"
            style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #46DE48; opacity: 0.03;">
        </div>

        <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

            <!-- Hero Section -->
            <div style="text-align: center; margin-bottom: 80px;">
                <div class="animate-on-load badge-pulse shimmer-effect"
                    style="display: inline-block; padding: 10px 30px; background: #46DE48; color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(70,222,72,0.3); position: relative; overflow: hidden;">
                    <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                        viewBox="0 0 24 24">
                        <path
                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                    VOLUNTEER OPPORTUNITIES
                </div>

                <h1 class="animate-on-load-delay-1"
                    style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                    Share Your Skills,<br>Transform Lives
                </h1>

                <p class="animate-on-load-delay-2"
                    style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Join our community of dedicated volunteers who are making maternal healthcare accessible to every
                    mother. Whether you have a few hours or regular time to give, your contribution matters.
                </p>

                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="#opportunities" style="text-decoration: none;">
                        <button class="animate-on-load-delay-3 hero-button-primary"
                            style="background: #363558; color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 12px 30px rgba(54,53,88,0.25); transition: all 0.3s ease;">
                            <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                            </svg>
                            View Opportunities
                        </button>
                    </a>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMdtpefsFrYSB8CjgSrdfy4akQUcMil7zISToC5ex8oEVUfw/viewform?usp=publish-editor" style="text-decoration: none;">
                        <button class="animate-on-load-delay-4 hero-button-secondary"
                            style="background: #FFF; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            Apply Now
                        </button>
                    </a>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="animate-on-load"
                style="background: #363558; border-radius: 25px; padding: 50px; margin-bottom: 80px; box-shadow: 0 20px 50px rgba(54,53,88,0.2); transition: all 0.4s ease;">
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
                    <div>
                        <div class="stat-number"
                            style="font-size: 48px; font-weight: 800; color: white; margin-bottom: 10px;">500+</div>
                        <div style="font-size: 16px; color: #FFF; opacity: 0.9; font-weight: 600;">Active Volunteers</div>
                    </div>
                    <div>
                        <div class="stat-number"
                            style="font-size: 48px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">15K+</div>
                        <div style="font-size: 16px; color: #FFF; opacity: 0.9; font-weight: 600;">Hours Contributed</div>
                    </div>
                    <div>
                        <div class="stat-number"
                            style="font-size: 48px; font-weight: 800; color: #D83137; margin-bottom: 10px;">98%</div>
                        <div style="font-size: 16px; color: #FFF; opacity: 0.9; font-weight: 600;">Satisfaction Rate</div>
                    </div>
                    <div>
                        <div class="stat-number"
                            style="font-size: 48px; font-weight: 800; color: #363558; margin-bottom: 10px;">40+</div>
                        <div style="font-size: 16px; color: #FFF; opacity: 0.9; font-weight: 600;">Skills Categories</div>
                    </div>
                </div>
            </div>

            <!-- Volunteer Opportunities -->
            <div id="opportunities" style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 class="animate-on-load"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Find Your Volunteer Role
                    </h2>
                    <p class="animate-on-load-delay-1"
                        style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        We have diverse opportunities that match different skills, interests, and availability.
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

                    <!-- Opportunity 1 -->
                    <div class="opportunity-card animate-on-load"
                        style="background: #FFF; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #D83137; border: 1px solid #f0f0f0; animation-delay: 0.1s;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="opportunity-icon rotate-in"
                                    style="background: rgba(216,49,55,0.1); color: #D83137; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #D83137;" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #D83137; font-size: 14px; font-weight: 700;">ON-SITE • FLEXIBLE</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">
                                        Community Outreach</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Engage with communities, conduct awareness campaigns, and help identify mothers who need
                                support.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(216,49,55,0.1); color: #D83137; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Public
                                    Speaking</span>
                                <span
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Community
                                    Engagement</span>
                                <span
                                    style="background: rgba(54,53,88,0.1); color: #363558; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Local
                                    Languages</span>
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMdtpefsFrYSB8CjgSrdfy4akQUcMil7zISToC5ex8oEVUfw/viewform?usp=publish-editor" style="text-decoration: none;"> <button
                                    style="background: #D83137; color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.3s ease;">
                                    <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                    </svg>
                                    Apply for this Role
                                </button></a>

                        </div>
                    </div>

                    <!-- Opportunity 2 -->
                    <div class="opportunity-card animate-on-load-delay-1"
                        style="background: #FFF; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #46DE48; border: 1px solid #f0f0f0;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="opportunity-icon rotate-in"
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zM3 18.5V7c1.1-.35 2.3-.5 3.5-.5 1.34 0 3.13.41 4.5.99v11.5C9.63 18.41 7.84 18 6.5 18c-1.2 0-2.4.15-3.5.5zm18 0c-1.1-.35-2.3-.5-3.5-.5-1.34 0-3.13.41-4.5.99V7.49c1.37-.59 3.16-.99 4.5-.99 1.2 0 2.4.15 3.5.5v11.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #46DE48; font-size: 14px; font-weight: 700;">REMOTE • FLEXIBLE</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">
                                        Content Creation</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Create educational materials, social media content, and awareness campaigns about maternal
                                health.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Writing</span>
                                <span
                                    style="background: rgba(216,49,55,0.1); color: #D83137; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Graphic
                                    Design</span>
                                <span
                                    style="background: rgba(54,53,88,0.1); color: #363558; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Video
                                    Editing</span>
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMdtpefsFrYSB8CjgSrdfy4akQUcMil7zISToC5ex8oEVUfw/viewform?usp=publish-editor" style="text-decoration: none;">
                                <button
                                    style="background: #46DE48; color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.3s ease;">
                                    <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                    </svg>
                                    Apply for this Role
                                </button>
                            </a>
                        </div>
                    </div>

                    <!-- Opportunity 3 -->
                    <div class="opportunity-card animate-on-load-delay-2"
                        style="background: #FFF; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #363558; border: 1px solid #f0f0f0;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="opportunity-icon rotate-in"
                                    style="background: rgba(54,53,88,0.1); color: #363558; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #363558;" viewBox="0 0 24 24">
                                        <path
                                            d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12zM11 5h2v6h-2zm0 8h2v2h-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #363558; font-size: 14px; font-weight: 700;">HYBRID • WEEKLY</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">
                                        Counseling Support</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Provide emotional support and counseling to expectant and new mothers via phone or in-person
                                sessions.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(54,53,88,0.1); color: #363558; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Active
                                    Listening</span>
                                <span
                                    style="background: rgba(216,49,55,0.1); color: #D83137; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Empathy</span>
                                <span
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Psychology
                                    Background</span>
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMdtpefsFrYSB8CjgSrdfy4akQUcMil7zISToC5ex8oEVUfw/viewform?usp=publish-editor" style="text-decoration: none;">
                                <button
                                    style="background: #363558; color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.3s ease;">
                                    <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                    </svg>
                                    Apply for this Role
                                </button>
                            </a>
                        </div>
                    </div>

                    <!-- Opportunity 4 -->
                    <div class="opportunity-card animate-on-load-delay-3"
                        style="background: #FFF; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #D83137; border: 1px solid #f0f0f0;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="opportunity-icon rotate-in"
                                    style="background: rgba(216,49,55,0.1); color: #D83137; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #D83137;" viewBox="0 0 24 24">
                                        <path
                                            d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #D83137; font-size: 14px; font-weight: 700;">REMOTE • FLEXIBLE</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">Data
                                        Analysis</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Help analyze program data, create reports, and contribute to evidence-based improvements.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(54,53,88,0.1); color: #363558; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Excel</span>
                                <span
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Statistics</span>
                                <span
                                    style="background: rgba(216,49,55,0.1); color: #D83137; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; transition: all 0.3s ease;">Reporting</span>
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMdtpefsFrYSB8CjgSrdfy4akQUcMil7zISToC5ex8oEVUfw/viewform?usp=publish-editor" style="text-decoration: none;">
                                <button
                                    style="background: #D83137; color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.3s ease;">
                                    <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                    </svg>
                                    Apply for this Role
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .volunteer-section {
                    padding: 80px 60px;
                }

                .volunteer-title {
                    font-size: 52px;
                }

                @media (max-width: 600px) {
                    .volunteer-section {
                        padding: 40px 20px !important;
                        margin-bottom: 40px !important;
                    }

                    .volunteer-title {
                        font-size: 32px !important;
                    }

                    .volunteer-grid {
                        grid-template-columns: 1fr !important;
                        gap: 20px !important;
                    }
                }
            </style>

            <div class="volunteer-section animate-on-load"
                style="background: #363558; border-radius: 30px; margin-bottom: 80px; position: relative; overflow: hidden;">

                <div class="floating-bg"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 30% 30%, white 2px, transparent 2px); background-size: 50px 50px;">
                </div>

                <div style="position: relative; z-index: 2;">
                    <div style="text-align: center; margin-bottom: 40px;">
                        <h2 class="volunteer-title animate-on-load"
                            style="color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.1;">
                            Why Volunteer With Us?
                        </h2>
                        <p class="animate-on-load-delay-1"
                            style="font-size: 18px; color: #FFF; max-width: 700px; margin: 0 auto; line-height: 1.6; opacity: 0.9;">
                            Discover the meaningful impact you can make while gaining valuable experience.
                        </p>
                    </div>

                    <div class="volunteer-grid stagger-children"
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">

                        <div
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div
                                    style="background: rgba(70,222,72,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                    <svg style="width: 22px; height: 22px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                    </svg>
                                </div>
                                <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Skill Development
                                </h3>
                            </div>
                            <p style="color: #FFF; margin: 0; line-height: 1.5; font-size: 15px; opacity: 0.9;">
                                Gain hands-on experience and develop transferable skills in healthcare and communication.
                            </p>
                        </div>

                        <div
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div
                                    style="background: rgba(216,49,55,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                    <svg style="width: 22px; height: 22px; fill: #D83137;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                </div>
                                <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Meaningful Impact
                                </h3>
                            </div>
                            <p style="color: #FFF; margin: 0; line-height: 1.5; font-size: 15px; opacity: 0.9;">
                                Directly contribute to improving maternal health outcomes and saving lives in your
                                community.
                            </p>
                        </div>

                        <div
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div
                                    style="background: rgba(54,53,88,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                    <svg style="width: 22px; height: 22px; fill: #363558;" viewBox="0 0 24 24">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                    </svg>
                                </div>
                                <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Community Network
                                </h3>
                            </div>
                            <p style="color: #FFF; margin: 0; line-height: 1.5; font-size: 15px; opacity: 0.9;">
                                Connect with like-minded individuals, healthcare professionals, and community leaders.
                            </p>
                        </div>

                        <div
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div
                                    style="background: rgba(70,222,72,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                    <svg style="width: 22px; height: 22px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                                    </svg>
                                </div>
                                <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Professional Growth
                                </h3>
                            </div>
                            <p style="color: #FFF; margin: 0; line-height: 1.5; font-size: 15px; opacity: 0.9;">
                                Receive certificates, references, and opportunities for advancement within the organization.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Application Form -->
            <div id="application" style="margin-bottom: 80px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 id="application2" class="animate-on-load"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Ready to Make a Difference?
                    </h2>
                    <p class="animate-on-load-delay-1"
                        style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Start your volunteer journey with us. Fill out the application form and we'll match you with the
                        perfect opportunity.
                    </p>
                </div>

                <form action="javascript:void();" method="post">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
                        <!-- Form -->
                        <div class="slide-in-left"
                            style="background: #FFF; border-radius: 25px; padding: 50px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.4s ease;">
                            <h3 style="font-size: 28px; color: #363558; margin: 0 0 35px 0; font-weight: 800;">Volunteer
                                Application</h3>

                            <form style="display: grid; gap: 25px;">
                                <div style="animation: fadeInUp 0.5s ease-out 0.2s both;">
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Full
                                        Name *</label>
                                    <input type="text"
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                        placeholder="Enter your full name">
                                </div>

                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                    <div style="animation: fadeInUp 0.5s ease-out 0.3s both;">
                                        <label
                                            style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Email
                                            Address *</label>
                                        <input type="email"
                                            style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                            placeholder="Enter your email">
                                    </div>
                                    <div style="animation: fadeInUp 0.5s ease-out 0.4s both;">
                                        <label
                                            style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Phone
                                            Number *</label>
                                        <input type="tel"
                                            style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                            placeholder="Enter your phone">
                                    </div>
                                </div>

                                <div style="animation: fadeInUp 0.5s ease-out 0.5s both;">
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Location
                                        *</label>
                                    <input type="text"
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                        placeholder="City, District, or Region">
                                </div>

                                <div style="animation: fadeInUp 0.5s ease-out 0.6s both;">
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Areas
                                        of Interest *</label>
                                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                                        <label class="checkbox-label"
                                            style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px; border-radius: 6px; transition: all 0.2s ease;">
                                            <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Community Outreach</span>
                                        </label>
                                        <label class="checkbox-label"
                                            style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px; border-radius: 6px; transition: all 0.2s ease;">
                                            <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Content Creation</span>
                                        </label>
                                        <label class="checkbox-label"
                                            style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px; border-radius: 6px; transition: all 0.2s ease;">
                                            <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Counseling Support</span>
                                        </label>
                                        <label class="checkbox-label"
                                            style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px; border-radius: 6px; transition: all 0.2s ease;">
                                            <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Data Analysis</span>
                                        </label>
                                        <label class="checkbox-label"
                                            style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px; border-radius: 6px; transition: all 0.2s ease;">
                                            <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Fundraising</span>
                                        </label>
                                        <label class="checkbox-label"
                                            style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px; border-radius: 6px; transition: all 0.2s ease;">
                                            <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Event Planning</span>
                                        </label>
                                    </div>
                                </div>

                                <div style="animation: fadeInUp 0.5s ease-out 0.7s both;">
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Availability
                                        *</label>
                                    <select
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; transition: all 0.3s ease;">
                                        <option value="">Select your availability</option>
                                        <option value="flexible">Flexible (any time)</option>
                                        <option value="weekends">Weekends only</option>
                                        <option value="weekdays">Weekdays only</option>
                                        <option value="evenings">Evenings only</option>
                                        <option value="remote">Remote only</option>
                                    </select>
                                </div>

                                <div style="animation: fadeInUp 0.5s ease-out 0.8s both;">
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Tell
                                        us about yourself *</label>
                                    <textarea rows="4"
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; resize: vertical; transition: all 0.3s ease;"
                                        placeholder="Share your background, skills, and motivation for volunteering..."></textarea>
                                </div>

                                <button type="submit"
                                    style="background: #D83137; color: white; border: none; padding: 18px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 25px rgba(216,49,55,0.3); display: flex; align-items: center; justify-content: center; gap: 12px; transition: all 0.3s ease; animation: fadeInUp 0.5s ease-out 0.9s both;">
                                    <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                                    </svg>
                                    Submit Application
                                </button>
                            </form>
                        </div>

                        <!-- Sidebar -->
                        <div>
                            <!-- What to Expect -->
                            <div class="sidebar-card slide-in-right"
                                style="background: #FFF; border-radius: 25px; padding: 40px; margin-bottom: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.4s ease;">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                    <div class="sidebar-icon rotate-in"
                                        style="background: rgba(70,222,72,0.1); color: #46DE48; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                        <svg style="width: 24px; height: 24px; fill: #46DE48;" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 0; font-weight: 800;">What to Expect
                                    </h3>
                                </div>
                                <div style="display: grid; gap: 15px;">
                                    <div style="display: flex; gap: 12px; animation: slideInRight 0.5s ease-out 0.2s both;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Initial
                                                Screening
                                            </div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">We review
                                                applications within 3-5 business days</div>
                                        </div>
                                    </div>
                                    <div style="display: flex; gap: 12px; animation: slideInRight 0.5s ease-out 0.3s both;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Interview
                                            </div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">Brief virtual
                                                interview to discuss interests and availability</div>
                                        </div>
                                    </div>
                                    <div style="display: flex; gap: 12px; animation: slideInRight 0.5s ease-out 0.4s both;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Orientation
                                            </div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">Comprehensive
                                                orientation and training for your role</div>
                                        </div>
                                    </div>
                                    <div style="display: flex; gap: 12px; animation: slideInRight 0.5s ease-out 0.5s both;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Start
                                                Volunteering</div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">Begin making an
                                                impact with ongoing support</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Volunteer Testimonial -->
                            <div class="sidebar-card slide-in-right"
                                style="background: #363558; border-radius: 25px; padding: 40px; color: white; transition: all 0.4s ease; animation-delay: 0.3s;">
                                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=200"
                                        alt="Volunteer" class="testimonial-image"
                                        style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover; border: 3px solid #46DE48; transition: all 0.4s ease;">
                                    <div>
                                        <div style="font-weight: 800; font-size: 18px;">David Kato</div>
                                        <div style="color: #46DE48; font-size: 14px; font-weight: 600;">Volunteer since 2023
                                        </div>
                                    </div>
                                </div>
                                <p style="font-style: italic; line-height: 1.6; margin-bottom: 20px; color: #FFF; opacity: 0.9;">
                                    "Volunteering with safeMom has been the most rewarding experience of my life. Seeing
                                    the
                                    direct impact of our work on mothers and babies keeps me motivated every day."
                                </p>
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- FAQ Section -->
            <div style="margin-bottom: 80px;">
                <div style="text-align: center; margin-bottom: 50px;">
                    <h2 class="animate-on-load"
                        style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800;">Volunteer FAQs</h2>
                    <p class="animate-on-load-delay-1"
                        style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Common questions about volunteering with safeMom Navigator
                    </p>
                </div>

                <div style="max-width: 900px; margin: 0 auto;">
                    <div class="faq-item animate-on-load"
                        style="background: #FFF; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.4s ease; animation-delay: 0.1s;">
                        <div class="faq-question"
                            style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.3s ease;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">How much time do I
                                need to commit?</h3>
                            <svg class="faq-icon"
                                style="width: 20px; height: 20px; fill: #D83137; transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);"
                                viewBox="0 0 24 24">
                                <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                                <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                            </svg>
                        </div>
                        <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            We offer flexible volunteering opportunities ranging from 2-20 hours per week. Most roles
                            require
                            a minimum commitment of 3 months, but we have options for short-term projects as well.
                        </p>
                    </div>

                    <div class="faq-item animate-on-load-delay-1"
                        style="background: #FFF; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.4s ease;">
                        <div class="faq-question"
                            style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.3s ease;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">Do I need specific
                                qualifications?</h3>
                            <svg class="faq-icon"
                                style="width: 20px; height: 20px; fill: #D83137; transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);"
                                viewBox="0 0 24 24">
                                <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                                <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                            </svg>
                        </div>
                        <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            Most roles don't require specific qualifications—just passion and commitment. Some specialized
                            roles may require relevant experience, which will be clearly stated in the opportunity
                            description.
                        </p>
                    </div>

                    <div class="faq-item animate-on-load-delay-2"
                        style="background: #FFF; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.4s ease;">
                        <div class="faq-question"
                            style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.3s ease;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">Can I volunteer
                                remotely?</h3>
                            <svg class="faq-icon"
                                style="width: 20px; height: 20px; fill: #D83137; transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);"
                                viewBox="0 0 24 24">
                                <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                                <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                            </svg>
                        </div>
                        <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            Yes! We have many remote volunteering opportunities in areas like content creation, data
                            analysis,
                            virtual counseling, and social media management.
                        </p>
                    </div>

                    <div class="faq-item animate-on-load-delay-3"
                        style="background: #FFF; border-radius: 20px; padding: 30px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.4s ease;">
                        <div class="faq-question"
                            style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.3s ease;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">What support will I
                                receive?</h3>
                            <svg class="faq-icon"
                                style="width: 20px; height: 20px; fill: #D83137; transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);"
                                viewBox="0 0 24 24">
                                <path class="plus-icon" d="M19 13H5v-2h14v2z" />
                                <path class="plus-icon-vertical" d="M13 5v14h-2V5h2z" style="display: none;" />
                            </svg>
                        </div>
                        <p class="faq-answer" style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            All volunteers receive comprehensive training, regular check-ins with a supervisor, access to
                            resources and materials, and opportunities for skill development and networking.
                        </p>
                    </div>
                </div>
            </div>

            <script>
                // FAQ Dropdown Functionality with Enhanced Animations
                document.addEventListener('DOMContentLoaded', function () {
                    const faqItems = document.querySelectorAll('.faq-item');

                    faqItems.forEach(item => {
                        const question = item.querySelector('.faq-question');
                        const answer = item.querySelector('.faq-answer');
                        const icon = item.querySelector('.faq-icon');
                        const plusIcon = icon ? icon.querySelector('.plus-icon') : null;
                        const plusIconVertical = icon ? icon.querySelector('.plus-icon-vertical') : null;

                        question.addEventListener('click', function () {
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

                        // Hover effect for FAQ icon
                        item.addEventListener('mouseenter', function () {
                            if (icon) {
                                icon.style.transform = answer.style.display === 'none' || answer.style.display === ''
                                    ? 'scale(1.2)'
                                    : 'rotate(45deg) scale(1.2)';
                            }
                        });

                        item.addEventListener('mouseleave', function () {
                            if (icon) {
                                icon.style.transform = answer.style.display === 'none' || answer.style.display === ''
                                    ? 'rotate(0deg) scale(1)'
                                    : 'rotate(45deg) scale(1)';
                            }
                        });
                    });
                });
            </script>

            <!-- Final CTA -->
            <div class="animate-on-load"
                style="background: #D83137; border-radius: 30px; padding: 70px; text-align: center; color: white; transition: all 0.4s ease;">
                <h2 class="animate-on-load"
                    style="font-size: 42px; font-weight: 800; margin: 0 0 20px 0; line-height: 1.2;">
                    Join Our Volunteer Family
                </h2>
                <p class="animate-on-load-delay-1"
                    style="font-size: 19px; margin: 0 auto 30px auto; max-width: 700px; opacity: 0.9; line-height: 1.6;">
                    Your time and skills can transform maternal healthcare in your community.
                    Join 500+ volunteers who are making a difference every day.
                </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMdtpefsFrYSB8CjgSrdfy4akQUcMil7zISToC5ex8oEVUfw/viewform?usp=publish-editor" style="text-decoration: none;">
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <button class="animate-on-load-delay-2"
                            style="background: #FFF; color: #D83137; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); transition: all 0.3s ease;">
                            <svg style="width: 20px; height: 20px; fill: #D83137; transition: transform 0.3s ease;"
                                viewBox="0 0 24 24">
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                            </svg>
                            Apply Now
                        </button>
                        <a href="{{ url('contact') }}">
                            <button class="animate-on-load-delay-3"
                                style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3); padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">
                                Contact Volunteer Team
                            </button>
                        </a>
                    </div>
                </a>
            </div>

        </div>
    </section>

@endsection