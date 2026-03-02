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
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
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

    @keyframes numberCount {
        from { opacity: 0; transform: scale(0.8); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes badgePulse {
        0% { box-shadow: 0 8px 20px rgba(145,116,110,0.3); }
        50% { box-shadow: 0 12px 30px rgba(145,116,110,0.5); }
        100% { box-shadow: 0 8px 20px rgba(145,116,110,0.3); }
    }

    @keyframes stepPop {
        0% { transform: scale(0.8); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    @keyframes borderPulse {
        0% { border-color: rgba(221,49,52,0.3); }
        50% { border-color: rgba(221,49,52,1); }
        100% { border-color: rgba(221,49,52,0.3); }
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

    .animate-on-load-delay-5 {
        animation: fadeInUp 0.8s ease-out 1.0s forwards;
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
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 3s infinite;
    }

    .rotate-in {
        animation: rotateIn 0.6s ease-out forwards;
    }

    .number-animate {
        animation: numberCount 0.8s ease-out forwards;
    }

    .step-number {
        animation: stepPop 0.6s ease-out forwards;
        opacity: 0;
    }

    /* Hover Effects */
    .responsive-model-card,
    .responsive-stat-box,
    .responsive-partner-box,
    .responsive-form-container,
    .responsive-process-step,
    .responsive-final-cta {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .responsive-model-card:hover,
    .responsive-stat-box:hover,
    .responsive-partner-box:hover,
    .responsive-form-container:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.12) !important;
    }

    .responsive-model-card:hover {
        transform: translateY(-10px) scale(1.02);
    }

    .responsive-model-card:hover .responsive-model-icon,
    .responsive-stat-box:hover .responsive-stat-number {
        transform: scale(1.1) rotate(5deg);
        transition: transform 0.4s ease;
    }

    .responsive-process-step:hover .responsive-process-number {
        transform: scale(1.1);
        box-shadow: 0 20px 40px rgba(0,0,0,0.25) !important;
    }

    .responsive-partner-box {
        position: relative;
        overflow: hidden;
    }
    .responsive-partner-box:hover {
        background: #f0f0f0 !important;
    }
    .responsive-partner-box:hover .responsive-partner-name {
        transform: scale(1.05);
        color: #363558 !important;
    }

    .responsive-partner-name {
        transition: all 0.3s ease;
    }

    .responsive-model-icon,
    .responsive-stat-number,
    .responsive-process-number,
    .responsive-button,
    button {
        transition: all 0.3s ease;
    }

    button:hover,
    .responsive-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2) !important;
    }

    .hero-button-primary:hover {
        background: linear-gradient(90deg, #2a2a45, #363558) !important;
    }

    .hero-button-secondary:hover {
        background: #f5f5f5 !important;
    }

    input, select, textarea {
        transition: all 0.3s ease;
    }
    input:hover, select:hover, textarea:hover {
        border-color: rgba(255,255,255,0.5) !important;
        background: rgba(255,255,255,0.15) !important;
    }
    input:focus, select:focus, textarea:focus {
        transform: scale(1.01);
        border-color: #46DE48 !important;
        box-shadow: 0 0 0 3px rgba(70,222,72,0.2);
        background: rgba(255,255,255,0.2) !important;
    }

    .responsive-process-step {
        position: relative;
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }
    .responsive-process-step:nth-child(1) { animation-delay: 0.1s; }
    .responsive-process-step:nth-child(2) { animation-delay: 0.2s; }
    .responsive-process-step:nth-child(3) { animation-delay: 0.3s; }
    .responsive-process-step:nth-child(4) { animation-delay: 0.4s; }
    .responsive-process-step:nth-child(5) { animation-delay: 0.5s; }

    .responsive-model-badge {
        transition: all 0.3s ease;
    }
    .responsive-model-card:hover .responsive-model-badge {
        transform: translateX(-5px);
    }

    .responsive-process-line {
        animation: slideInLeft 1s ease-out 0.5s both;
        width: 0%;
        animation: growLine 1.2s ease-out 0.5s forwards;
    }
    @keyframes growLine {
        from { width: 0%; opacity: 0; }
        to { width: 80%; opacity: 1; }
    }

    /* Stagger children animations */
    .stagger-children > * {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }
    .stagger-children > *:nth-child(1) { animation-delay: 0.1s; }
    .stagger-children > *:nth-child(2) { animation-delay: 0.2s; }
    .stagger-children > *:nth-child(3) { animation-delay: 0.3s; }
    .stagger-children > *:nth-child(4) { animation-delay: 0.4s; }

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
        
        .responsive-model-card:hover,
        .responsive-stat-box:hover,
        .responsive-partner-box:hover {
            transform: translateY(-5px);
        }

        @keyframes growLine {
            from { width: 0%; opacity: 0; }
            to { width: 0%; opacity: 0; }
        }
    }

    @media (hover: none) and (pointer: coarse) {
        .responsive-model-card:hover,
        .responsive-stat-box:hover,
        .responsive-partner-box:hover,
        .responsive-process-step:hover {
            transform: none;
        }
        
        button:hover {
            transform: none;
        }
    }

    /* Responsive styles for partnership page */
    @media screen and (max-width: 1024px) {
        .responsive-section {
            padding: 80px 4% 100px 4% !important;
        }

        .responsive-header h1 {
            font-size: 56px !important;
        }

        .responsive-header p {
            font-size: 18px !important;
        }

        .responsive-hero-buttons {
            flex-direction: column !important;
            align-items: center !important;
            gap: 15px !important;
        }

        .responsive-hero-buttons button {
            width: 100% !important;
            max-width: 350px !important;
            justify-content: center !important;
        }

        .responsive-impact-container {
            padding: 50px 40px !important;
        }

        .responsive-impact-title {
            font-size: 42px !important;
        }

        .responsive-models-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .responsive-process-timeline {
            flex-wrap: wrap !important;
            gap: 40px !important;
            justify-content: center !important;
        }

        .responsive-process-step {
            width: 45% !important;
            min-width: 180px !important;
        }

        .responsive-process-line {
            display: none !important;
        }

        .responsive-contact-grid {
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }

        .responsive-partners-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 30px !important;
        }

        .responsive-form-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
    }

    @media screen and (max-width: 768px) {
        .responsive-section {
            padding: 60px 3% 80px 3% !important;
        }

        .responsive-header h1 {
            font-size: 42px !important;
            line-height: 1.1 !important;
        }

        .responsive-header p {
            font-size: 16px !important;
        }

        .responsive-badge {
            padding: 8px 20px !important;
            font-size: 13px !important;
        }

        .responsive-impact-container {
            padding: 40px 30px !important;
            border-radius: 25px !important;
        }

        .responsive-impact-title {
            font-size: 36px !important;
        }

        .responsive-impact-stats {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 20px !important;
        }

        .responsive-models-grid {
            grid-template-columns: 1fr !important;
        }

        .responsive-model-card {
            padding: 30px !important;
        }

        .responsive-model-icon {
            width: 60px !important;
            height: 60px !important;
        }

        .responsive-model-title {
            font-size: 24px !important;
        }

        .responsive-process-step {
            width: 100% !important;
            margin-bottom: 30px !important;
        }

        .responsive-process-number {
            width: 60px !important;
            height: 60px !important;
            font-size: 20px !important;
        }

        .responsive-partners-container {
            padding: 30px !important;
        }

        .responsive-partners-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }

        .responsive-partner-box {
            height: 100px !important;
            padding: 20px !important;
        }

        .responsive-contact-container {
            padding: 40px 30px !important;
            border-radius: 25px !important;
        }

        .responsive-contact-title {
            font-size: 36px !important;
        }

        .responsive-form-container {
            padding: 30px !important;
        }

        .responsive-form-title {
            font-size: 20px !important;
        }

        .responsive-final-cta {
            padding: 40px 30px !important;
        }

        .responsive-final-title {
            font-size: 32px !important;
        }
    }

    @media screen and (max-width: 480px) {
        .responsive-header h1 {
            font-size: 32px !important;
        }

        .responsive-header p {
            font-size: 15px !important;
        }

        .responsive-hero-buttons button {
            padding: 16px 20px !important;
            font-size: 15px !important;
        }

        .responsive-impact-title {
            font-size: 28px !important;
        }

        .responsive-impact-stats {
            grid-template-columns: 1fr !important;
        }

        .responsive-stat-box {
            padding: 25px 20px !important;
        }

        .responsive-stat-number {
            font-size: 36px !important;
        }

        .responsive-stat-title {
            font-size: 18px !important;
        }

        .responsive-section-title {
            font-size: 32px !important;
        }

        .responsive-section-subtitle {
            font-size: 16px !important;
        }

        .responsive-model-card {
            padding: 25px !important;
        }

        .responsive-model-badge {
            padding: 8px 15px !important;
            font-size: 12px !important;
        }

        .responsive-process-step {
            margin-bottom: 25px !important;
        }

        .responsive-step-title {
            font-size: 16px !important;
        }

        .responsive-step-desc {
            font-size: 13px !important;
        }

        .responsive-partner-name {
            font-size: 16px !important;
        }

        .responsive-partner-type {
            font-size: 13px !important;
        }

        .responsive-contact-title {
            font-size: 28px !important;
        }

        .responsive-contact-subtitle {
            font-size: 16px !important;
        }

        .responsive-input-grid {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }

        input,
        select,
        textarea {
            font-size: 16px !important;
            min-height: 44px !important;
        }

        button,
        .responsive-button {
            min-height: 44px !important;
        }

        .responsive-final-title {
            font-size: 28px !important;
        }

        .responsive-final-subtitle {
            font-size: 16px !important;
        }
    }

    @media (hover: none) and (pointer: coarse) {
        input,
        textarea,
        button,
        select {
            font-size: 16px !important;
            min-height: 44px !important;
        }

        button,
        .responsive-button {
            min-height: 44px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .responsive-model-card,
        .responsive-stat-box {
            cursor: pointer;
        }
    }

    @media screen and (max-width: 768px) {
        .responsive-process-container {
            position: relative !important;
        }

        .responsive-process-steps {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
        }
    }
</style>

<style>
/* ========== SPACING REDUCTIONS FOR PARTNERSHIP PAGE ========== */

/* Override section padding */
.responsive-section[style*="padding: 100px 5% 120px 5%"] {
    padding: 40px 5% 50px 5% !important;
}

/* Reduce hero section margin */
.responsive-header[style*="text-align: center; margin-bottom: 80px"] {
    margin-bottom: 30px !important;
}

/* Reduce badge padding */
.responsive-badge[style*="padding: 10px 30px; background: #D83137; border-radius: 30px; font-size: 14px; margin-bottom: 25px"] {
    padding: 6px 20px !important;
    font-size: 12px !important;
    margin-bottom: 15px !important;
}

/* Reduce main heading size */
.responsive-header-title[style*="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0"] {
    font-size: 42px !important;
    margin-bottom: 10px !important;
}

/* Reduce paragraph size and margin */
.responsive-header-subtitle[style*="font-size: 20px; line-height: 1.6; margin-bottom: 50px"] {
    font-size: 16px !important;
    margin-bottom: 20px !important;
}

/* Reduce hero buttons gap */
.responsive-hero-buttons[style*="display: flex; gap: 20px; justify-content: center"] {
    gap: 10px !important;
}

/* Reduce button padding */
.responsive-button[style*="padding: 18px 40px; border-radius: 12px; font-size: 17px"] {
    padding: 10px 20px !important;
    font-size: 14px !important;
}

/* Impact Through Partnership section */
.responsive-impact-container[style*="padding: 70px 60px; margin-bottom: 80px"] {
    padding: 30px 25px !important;
    margin-bottom: 30px !important;
}

.responsive-impact-title[style*="font-size: 52px; margin: 0 0 20px 0"] {
    font-size: 32px !important;
    margin-bottom: 10px !important;
}

.responsive-impact-subtitle[style*="font-size: 19px"] {
    font-size: 15px !important;
}

[style*="text-align: center; margin-bottom: 60px"] {
    margin-bottom: 20px !important;
}

/* Stats grid */
.responsive-impact-stats[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px"] {
    gap: 15px !important;
}

.responsive-stat-box[style*="padding: 35px 30px"] {
    padding: 20px 15px !important;
}

.responsive-stat-number[style*="font-size: 42px; margin-bottom: 15px"] {
    font-size: 32px !important;
    margin-bottom: 8px !important;
}

.responsive-stat-title[style*="font-size: 20px; margin: 0 0 10px 0"] {
    font-size: 16px !important;
    margin-bottom: 5px !important;
}

.responsive-stat-box p[style*="font-size: 15px"] {
    font-size: 12px !important;
}

/* Partnership Models section */
#partnership-models[style*="margin-bottom: 100px"] {
    margin-bottom: 40px !important;
}

.responsive-section-title[style*="font-size: 52px; margin: 0 0 20px 0"] {
    font-size: 32px !important;
    margin-bottom: 8px !important;
}

.responsive-section-subtitle[style*="font-size: 19px"] {
    font-size: 15px !important;
}

/* Models grid */
.responsive-models-grid[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px"] {
    gap: 15px !important;
    margin-bottom: 30px !important;
}

.responsive-model-card[style*="padding: 40px"] {
    padding: 20px !important;
}

.responsive-model-badge[style*="padding: 10px 25px; font-size: 14px"] {
    padding: 5px 15px !important;
    font-size: 11px !important;
}

[style*="text-align: center; margin-bottom: 35px"] {
    margin-bottom: 15px !important;
}

.responsive-model-icon[style*="width: 80px; height: 80px; border-radius: 20px; margin: 0 auto 25px"] {
    width: 50px !important;
    height: 50px !important;
    border-radius: 12px !important;
    margin-bottom: 10px !important;
}

.responsive-model-icon svg[style*="width: 40px; height: 40px"] {
    width: 24px !important;
    height: 24px !important;
}

.responsive-model-title[style*="font-size: 28px; margin: 0 0 15px 0"] {
    font-size: 20px !important;
    margin-bottom: 8px !important;
}

.responsive-model-card p[style*="color: #5a5a5a; margin: 0; line-height: 1.6"] {
    font-size: 13px !important;
}

[style*="margin-bottom: 30px"] {
    margin-bottom: 15px !important;
}

[style*="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px"] {
    gap: 6px !important;
    margin-bottom: 8px !important;
}

[style*="font-weight: 600; color: #363558"] {
    font-size: 13px !important;
}

/* Additional Model section */
[style*="background: #363558; border-radius: 25px; padding: 40px; text-align: center"] {
    padding: 20px !important;
}

[style*="display: flex; align-items: center; gap: 20px; margin-bottom: 25px; justify-content: center"] {
    gap: 10px !important;
    margin-bottom: 10px !important;
}

[style*="width: 60px; height: 60px; border-radius: 15px"] {
    width: 40px !important;
    height: 40px !important;
}

[style*="width: 32px; height: 32px"] {
    width: 20px !important;
    height: 20px !important;
}

h3[style*="font-size: 28px; margin: 0; font-weight: 800"] {
    font-size: 20px !important;
}

.additional-model p[style*="color: #FFF; margin-bottom: 25px"] {
    font-size: 13px !important;
    margin-bottom: 15px !important;
}

.additional-model button[style*="padding: 14px 30px; border-radius: 10px; font-size: 15px"] {
    padding: 8px 15px !important;
    font-size: 13px !important;
}

/* Partnership Process section */
[style*="margin-bottom: 100px"]:nth-of-type(2) {
    margin-bottom: 40px !important;
}

.responsive-process-container[style*="position: relative; margin-top: 40px"] {
    margin-top: 20px !important;
}

.responsive-process-line[style*="top: 35px; height: 3px"] {
    top: 25px !important;
    height: 2px !important;
}

.responsive-process-number[style*="width: 70px; height: 70px; font-size: 24px"] {
    width: 45px !important;
    height: 45px !important;
    font-size: 18px !important;
    margin-bottom: 10px !important;
}

.responsive-step-title[style*="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px"] {
    font-size: 14px !important;
    margin-bottom: 5px !important;
}

.responsive-step-desc[style*="color: #5a5a5a; font-size: 14px; line-height: 1.4"] {
    font-size: 11px !important;
}

/* Current Partners Showcase */
[style*="margin-bottom: 100px"]:nth-of-type(3) {
    margin-bottom: 40px !important;
}

.responsive-partners-container[style*="padding: 50px"] {
    padding: 20px !important;
}

.responsive-partners-grid[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px"] {
    gap: 15px !important;
}

.responsive-partner-box[style*="padding: 25px; height: 120px"] {
    padding: 10px !important;
    height: 80px !important;
}

.responsive-partner-name[style*="font-size: 18px; font-weight: 800"] {
    font-size: 14px !important;
}

.responsive-partner-type[style*="color: #5a5a5a; font-size: 14px; margin-top: 10px"] {
    font-size: 11px !important;
    margin-top: 5px !important;
}

/* Contact Form */
#contact-form[style*="margin-bottom: 80px"] {
    margin-bottom: 30px !important;
}

.responsive-contact-container[style*="padding: 70px 60px"] {
    padding: 25px 20px !important;
}

.responsive-contact-title[style*="font-size: 52px; margin: 0 0 20px 0"] {
    font-size: 32px !important;
    margin-bottom: 8px !important;
}

.responsive-contact-subtitle[style*="font-size: 19px"] {
    font-size: 15px !important;
}

[style*="text-align: center; margin-bottom: 50px"] {
    margin-bottom: 20px !important;
}

.responsive-contact-grid[style*="display: grid; grid-template-columns: 1fr 1fr; gap: 60px"] {
    gap: 20px !important;
}

/* Form styles */
.responsive-input-grid[style*="display: grid; grid-template-columns: 1fr 1fr; gap: 20px"] {
    gap: 10px !important;
}

label[style*="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px"] {
    font-size: 12px !important;
    margin-bottom: 4px !important;
}

input[type="text"], input[type="email"], input[type="tel"], select, textarea {
    padding: 10px !important;
    font-size: 13px !important;
}

form button[type="submit"][style*="padding: 18px; border-radius: 12px; font-size: 16px"] {
    padding: 10px !important;
    font-size: 14px !important;
}

/* Sidebar styles */
.responsive-form-container[style*="padding: 40px; margin-bottom: 30px"] {
    padding: 20px !important;
    margin-bottom: 15px !important;
}

.responsive-form-container[style*="display: flex; align-items: center; gap: 15px; margin-bottom: 25px"] {
    gap: 8px !important;
    margin-bottom: 15px !important;
}

.responsive-form-container [style*="width: 50px; height: 50px; border-radius: 10px"] {
    width: 40px !important;
    height: 40px !important;
}

.responsive-form-container [style*="width: 24px; height: 24px"] {
    width: 18px !important;
    height: 18px !important;
}

.responsive-form-title[style*="font-size: 24px; color: white; margin: 0; font-weight: 800"] {
    font-size: 18px !important;
}

[style*="display: grid; gap: 15px"] {
    gap: 8px !important;
}

[style*="display: flex; gap: 12px; align-items: flex-start"] {
    gap: 6px !important;
}

[style*="font-weight: 600; color: white; margin-bottom: 5px"] {
    font-size: 13px !important;
    margin-bottom: 2px !important;
}

[style*="color: #FFF; opacity: 0.8; font-size: 14px"] {
    font-size: 12px !important;
}

/* Second sidebar card */
.responsive-form-container[style*="padding: 30px; border: 1px solid rgba(255,255,255,0.2)"] {
    padding: 15px !important;
}

[style*="display: flex; align-items: center; gap: 10px; margin-bottom: 15px"] {
    gap: 5px !important;
    margin-bottom: 8px !important;
}

[style*="width: 20px; height: 20px"] {
    width: 16px !important;
    height: 16px !important;
}

[style*="color: white; font-weight: 700"] {
    font-size: 14px !important;
}

.responsive-form-container p[style*="color: #FFF; margin: 0; font-size: 14px; line-height: 1.5"] {
    font-size: 12px !important;
}

/* Final CTA */
.responsive-final-cta[style*="padding: 50px"] {
    padding: 20px !important;
}

.responsive-final-title[style*="font-size: 42px; margin: 0 0 20px 0"] {
    font-size: 28px !important;
    margin-bottom: 8px !important;
}

.responsive-final-subtitle[style*="font-size: 18px; margin: 0 auto 30px auto"] {
    font-size: 14px !important;
    margin-bottom: 15px !important;
}

.responsive-final-cta button[style*="padding: 18px 40px; border-radius: 12px; font-size: 17px"] {
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
.animate-on-load-delay-5,
.slide-in-left,
.slide-in-right {
    animation-duration: 0.5s !important;
}

/* Responsive overrides */
@media screen and (max-width: 1024px) {
    .responsive-contact-grid[style*="display: grid; grid-template-columns: 1fr 1fr; gap: 20px"] {
        grid-template-columns: 1fr !important;
    }
    
    .responsive-models-grid[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media screen and (max-width: 768px) {
    .responsive-section[style*="padding: 40px 5% 50px 5%"] {
        padding: 30px 4% 40px 4% !important;
    }
    
    .responsive-header-title {
        font-size: 32px !important;
    }
    
    .responsive-models-grid {
        grid-template-columns: 1fr !important;
    }
    
    .responsive-impact-stats[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px"] {
        grid-template-columns: 1fr !important;
    }
    
    .responsive-process-steps {
        flex-direction: column !important;
        align-items: center !important;
    }
    
    .responsive-process-step {
        width: 100% !important;
    }
    
    .responsive-partners-grid {
        grid-template-columns: 1fr !important;
    }
}

@media screen and (max-width: 480px) {
    .responsive-header-title {
        font-size: 28px !important;
    }
    
    .responsive-section-title {
        font-size: 28px !important;
    }
    
    .responsive-impact-title {
        font-size: 26px !important;
    }
    
    .responsive-stat-number {
        font-size: 28px !important;
    }
    
    .responsive-stat-title {
        font-size: 14px !important;
    }
    
    .responsive-model-title {
        font-size: 18px !important;
    }
    
    .responsive-partner-name {
        font-size: 12px !important;
    }
    
    .responsive-final-title {
        font-size: 24px !important;
    }
}

/* Disable hover animations on touch devices */
@media (hover: none) and (pointer: coarse) {
    .responsive-model-card:hover,
    .responsive-stat-box:hover,
    .responsive-partner-box:hover,
    .responsive-process-step:hover {
        transform: none !important;
    }
    
    button:hover {
        transform: none !important;
    }
}
</style>
    <section class="responsive-section"
        style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #FFF; position: relative; overflow: hidden; margin-top: 0rem;">

        <!-- Geometric background elements with floating animation -->
        <div class="floating-bg"
            style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.03;">
        </div>
        <div class="floating-bg-right"
            style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #D83137; opacity: 0.03;">
        </div>

        <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

            <!-- Hero Section -->
            <div class="responsive-header" style="text-align: center; margin-bottom: 80px;">
                <div class="responsive-badge badge-pulse shimmer-effect animate-on-load"
                    style="display: inline-block; padding: 10px 30px; background: #D83137; color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(216,49,55,0.3); position: relative; overflow: hidden;">
                    <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                        viewBox="0 0 24 24">
                        <path
                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                    STRATEGIC PARTNERSHIPS
                </div>

                <h1 class="responsive-header-title animate-on-load-delay-1"
                    style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                    Partner With safeMom Navigator
                </h1>

                <p class="responsive-header-subtitle animate-on-load-delay-2"
                    style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Join forces with us to expand maternal healthcare access across Uganda. Together, we can create
                    sustainable impact, strengthen health systems, and save more mothers and babies.
                </p>

                <div class="responsive-hero-buttons"
                    style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="#partnership-models" style="text-decoration: none;">
                        <button class="responsive-button animate-on-load-delay-3 hero-button-primary"
                            style="background: #363558; color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 12px 30px rgba(54,53,88,0.25); transition: all 0.3s ease;">
                            <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                <path
                                    d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                            </svg>
                            Explore Partnership Models
                        </button>
                    </a>
                    <a href="#contact-form" style="text-decoration: none;">
                        <button class="responsive-button animate-on-load-delay-4 hero-button-secondary"
                            style="background: #FFF; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            Start Partnership Discussion
                        </button>
                    </a>
                </div>
            </div>

            <!-- Impact Through Partnership -->
            <div class="responsive-impact-container animate-on-load"
                style="background: #363558; border-radius: 30px; padding: 70px 60px; margin-bottom: 80px; position: relative; overflow: hidden; transition: all 0.4s ease;">
                <div class="floating-bg"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 20% 80%, white 2px, transparent 2px); background-size: 40px 40px;">
                </div>

                <div style="position: relative; z-index: 2;">
                    <div style="text-align: center; margin-bottom: 60px;">
                        <h2 class="responsive-impact-title animate-on-load"
                            style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                            Impact Through Collaboration
                        </h2>
                        <p class="responsive-impact-subtitle animate-on-load-delay-1"
                            style="font-size: 19px; color: #FFF; max-width: 700px; margin: 0 auto; line-height: 1.6; opacity: 0.9;">
                            Our partnerships have enabled us to expand our reach and deepen our impact across Uganda
                        </p>
                    </div>

                    <div class="responsive-impact-stats stagger-children"
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div class="responsive-stat-number number-animate"
                                style="font-size: 42px; font-weight: 800; color: #46DE48; margin-bottom: 15px; transition: all 0.3s ease;">1+</div>
                            <h3 class="responsive-stat-title"
                                style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Active Partners
                            </h3>
                            <p style="color: #FFF; margin: 0; font-size: 15px; line-height: 1.5; opacity: 0.9;">
                                Healthcare facilities, NGOs, and community organizations
                            </p>
                        </div>

                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div class="responsive-stat-number number-animate"
                                style="font-size: 42px; font-weight: 800; color: #D83137; margin-bottom: 15px; transition: all 0.3s ease;">1</div>
                            <h3 class="responsive-stat-title"
                                style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Districts
                                Reached</h3>
                            <p style="color: #FFF; margin: 0; font-size: 15px; line-height: 1.5; opacity: 0.9;">
                                Expanding maternal health services across Uganda
                            </p>
                        </div>

                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div class="responsive-stat-number number-animate"
                                style="font-size: 42px; font-weight: 800; color: #46DE48; margin-bottom: 15px; transition: all 0.3s ease;">5K+</div>
                            <h3 class="responsive-stat-title"
                                style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Mothers
                                Supported</h3>
                            <p style="color: #FFF; margin: 0; font-size: 15px; line-height: 1.5; opacity: 0.9;">
                                Through collaborative programs and referrals
                            </p>
                        </div>

                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease;">
                            <div class="responsive-stat-number number-animate"
                                style="font-size: 42px; font-weight: 800; color: #D83137; margin-bottom: 15px; transition: all 0.3s ease;">100%</div>
                            <h3 class="responsive-stat-title"
                                style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Program Success
                            </h3>
                            <p style="color: #FFF; margin: 0; font-size: 15px; line-height: 1.5; opacity: 0.9;">
                                Safe deliveries across all partnership facilities
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partnership Models -->
            <div id="partnership-models" style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 class="responsive-section-title animate-on-load"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Partnership Models
                    </h2>
                    <p class="responsive-section-subtitle animate-on-load-delay-1"
                        style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        We offer various partnership frameworks tailored to your organization's goals and capabilities
                    </p>
                </div>

                <div class="responsive-models-grid"
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px;">

                    <!-- Model 1: Healthcare Facilities -->
                    <div class="responsive-model-card animate-on-load"
                        style="background: #FFF; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; overflow: hidden; border: 2px solid #D83137; transition: all 0.4s ease; animation-delay: 0.1s;">
                        <div class="responsive-model-badge"
                            style="position: absolute; top: 0; right: 0; padding: 10px 25px; background: #D83137; color: white; font-size: 14px; font-weight: 700; border-radius: 0 0 0 20px; transition: all 0.3s ease;">
                            <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                            </svg>
                            HEALTHCARE
                        </div>

                        <div style="text-align: center; margin-bottom: 35px;">
                            <div class="responsive-model-icon rotate-in"
                                style="background: rgba(216,49,55,0.1); color: #D83137; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; transition: all 0.3s ease;">
                                <svg style="width: 40px; height: 40px; fill: #D83137;" viewBox="0 0 24 24">
                                    <path
                                        d="M19 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-6 16h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 11.9 13 12.5 13 14h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z" />
                                </svg>
                            </div>
                            <h3 class="responsive-model-title"
                                style="font-size: 28px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Healthcare
                                Facilities</h3>
                            <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">
                                Hospitals, clinics, and health centers partnering for referrals and integrated care
                            </p>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px; animation: slideInRight 0.5s ease-out 0.2s both;">
                                <svg style="width: 20px; height: 20px; fill: #D83137; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Streamlined patient referrals</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px; animation: slideInRight 0.5s ease-out 0.3s both;">
                                <svg style="width: 20px; height: 20px; fill: #D83137; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Joint training programs</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; animation: slideInRight 0.5s ease-out 0.4s both;">
                                <svg style="width: 20px; height: 20px; fill: #D83137; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Data sharing for continuum of care</span>
                            </div>
                        </div>
                    </div>

                    <!-- Model 2: Corporate Partners -->
                    <div class="responsive-model-card animate-on-load-delay-1"
                        style="background: #FFF; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; overflow: hidden; border: 2px solid #46DE48; transition: all 0.4s ease;">
                        <div class="responsive-model-badge"
                            style="position: absolute; top: 0; right: 0; padding: 10px 25px; background: #46DE48; color: white; font-size: 14px; font-weight: 700; border-radius: 0 0 0 20px; transition: all 0.3s ease;">
                            <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                            </svg>
                            CORPORATE
                        </div>

                        <div style="text-align: center; margin-bottom: 35px;">
                            <div class="responsive-model-icon rotate-in"
                                style="background: rgba(70,222,72,0.1); color: #46DE48; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; transition: all 0.3s ease;">
                                <svg style="width: 40px; height: 40px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path
                                        d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zm-7.5-1h3v-3.5H17v-3h-3.5V7h-3v3.5H7v3h3.5V15z" />
                                </svg>
                            </div>
                            <h3 class="responsive-model-title"
                                style="font-size: 28px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Corporate
                                Partners</h3>
                            <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">
                                Businesses supporting maternal health through CSR, employee engagement, and funding
                            </p>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px; animation: slideInRight 0.5s ease-out 0.2s both;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">CSR program development</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px; animation: slideInRight 0.5s ease-out 0.3s both;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Employee volunteer programs</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; animation: slideInRight 0.5s ease-out 0.4s both;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Strategic funding opportunities</span>
                            </div>
                        </div>

                    </div>

                    <!-- Model 3: NGO & Community Organizations -->
                    <div class="responsive-model-card animate-on-load-delay-2"
                        style="background: #FFF; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; overflow: hidden; border: 2px solid #363558; transition: all 0.4s ease;">
                        <div class="responsive-model-badge"
                            style="position: absolute; top: 0; right: 0; padding: 10px 25px; background: #363558; color: white; font-size: 14px; font-weight: 700; border-radius: 0 0 0 20px; transition: all 0.3s ease;">
                            <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                            </svg>
                            COMMUNITY
                        </div>

                        <div style="text-align: center; margin-bottom: 35px;">
                            <div class="responsive-model-icon rotate-in"
                                style="background: rgba(54,53,88,0.1); color: #363558; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; transition: all 0.3s ease;">
                                <svg style="width: 40px; height: 40px; fill: #363558;" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>
                            <h3 class="responsive-model-title"
                                style="font-size: 28px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">NGO &
                                Community Orgs</h3>
                            <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">
                                Local organizations working together to strengthen community health systems
                            </p>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px; animation: slideInRight 0.5s ease-out 0.2s both;">
                                <svg style="width: 20px; height: 20px; fill: #363558; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Joint program implementation</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px; animation: slideInRight 0.5s ease-out 0.3s both;">
                                <svg style="width: 20px; height: 20px; fill: #363558; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Capacity building workshops</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; animation: slideInRight 0.5s ease-out 0.4s both;">
                                <svg style="width: 20px; height: 20px; fill: #363558; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Resource sharing and optimization</span>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Additional Model -->
                <div class="animate-on-load-delay-3"
                    style="background: #363558; border-radius: 25px; padding: 40px; text-align: center; color: white; transition: all 0.4s ease;">
                    <div
                        style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px; justify-content: center; flex-wrap: wrap;">
                        <div class="rotate-in"
                            style="background: rgba(255,255,255,0.1); color: #46DE48; width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <svg style="width: 32px; height: 32px; fill: #46DE48;" viewBox="0 0 24 24">
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                            </svg>
                        </div>
                        <h3 style="font-size: 28px; margin: 0; font-weight: 800;">Research & Academic Institutions</h3>
                    </div>
                    <p
                        style="color: #FFF; margin-bottom: 25px; line-height: 1.6; max-width: 800px; margin-left: auto; margin-right: auto; opacity: 0.9;">
                        Universities and research organizations collaborating on maternal health studies, program
                        evaluation, and innovation development.
                    </p>
                    <button class="pulse-element"
                        style="background: #D83137; color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        Explore Research Partnership
                    </button>
                </div>
            </div>

            <!-- Partnership Process -->
            <div style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 class="responsive-section-title animate-on-load"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Partnership Process
                    </h2>
                    <p class="responsive-section-subtitle animate-on-load-delay-1"
                        style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Our structured approach ensures successful and sustainable partnerships
                    </p>
                </div>

                <div class="responsive-process-container" style="position: relative; margin-top: 40px;">
                    <!-- Timeline line -->
                    <div class="responsive-process-line"
                        style="position: absolute; top: 35px; left: 10%; right: 10%; height: 3px; background: linear-gradient(90deg, #D83137, #46DE48, #363558, #D83137); z-index: 1; width: 80%; animation: growLine 1.2s ease-out 0.5s forwards;">
                    </div>

                    <div class="responsive-process-steps"
                        style="display: flex; justify-content: space-between; position: relative; z-index: 2; flex-wrap: wrap; gap: 20px;">
                        <div class="responsive-process-step" style="text-align: center; width: 18%; min-width: 150px;">
                            <div class="responsive-process-number step-number"
                                style="background: #D83137; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(216,49,55,0.3); font-size: 24px; transition: all 0.3s ease; animation-delay: 0.1s;">
                                1
                            </div>
                            <div class="responsive-step-title"
                                style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Initial
                                Discussion</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Share your goals and explore alignment
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%; min-width: 150px;">
                            <div class="responsive-process-number step-number"
                                style="background: #46DE48; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(70,222,72,0.3); font-size: 24px; transition: all 0.3s ease; animation-delay: 0.2s;">
                                2
                            </div>
                            <div class="responsive-step-title"
                                style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Needs
                                Assessment</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Joint evaluation of needs and opportunities
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%; min-width: 150px;">
                            <div class="responsive-process-number step-number"
                                style="background: #363558; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(54,53,88,0.3); font-size: 24px; transition: all 0.3s ease; animation-delay: 0.3s;">
                                3
                            </div>
                            <div class="responsive-step-title"
                                style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Agreement
                                Design</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Co-create partnership terms and MOU
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%; min-width: 150px;">
                            <div class="responsive-process-number step-number"
                                style="background: #D83137; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(216,49,55,0.3); font-size: 24px; transition: all 0.3s ease; animation-delay: 0.4s;">
                                4
                            </div>
                            <div class="responsive-step-title"
                                style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">
                                Implementation
                            </div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Launch and manage partnership activities
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%; min-width: 150px;">
                            <div class="responsive-process-number step-number"
                                style="background: #46DE48; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(70,222,72,0.3); font-size: 24px; transition: all 0.3s ease; animation-delay: 0.5s;">
                                5
                            </div>
                            <div class="responsive-step-title"
                                style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Monitoring &
                                Growth</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Regular review and strategic expansion
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Partners Showcase -->
            <div style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 class="responsive-section-title animate-on-load"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Our Partners
                    </h2>
                    <p class="responsive-section-subtitle animate-on-load-delay-1"
                        style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Trusted organizations that are making maternal healthcare accessible across Uganda
                    </p>
                </div>

                <div class="responsive-partners-container animate-on-load"
                    style="background: #FFF; border-radius: 25px; padding: 50px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.4s ease;">
                    <div class="responsive-partners-grid stagger-children"
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; align-items: center; justify-items: center;">
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center; transition: all 0.4s ease;">
                                <div class="responsive-partner-name"
                                    style="font-size: 18px; font-weight: 800; color: #D83137; transition: all 0.3s ease;">Mbale Regional Hospital
                                </div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">
                                Healthcare Partner since 2021
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center; transition: all 0.4s ease;">
                                <div class="responsive-partner-name"
                                    style="font-size: 18px; font-weight: 800; color: #46DE48; transition: all 0.3s ease;">Ministry of Health Uganda
                                </div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">
                                Government Partner</div>
                        </div>
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center; transition: all 0.4s ease;">
                                <div class="responsive-partner-name"
                                    style="font-size: 18px; font-weight: 800; color: #363558; transition: all 0.3s ease;">UN Women Uganda</div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">
                                Development Partner</div>
                        </div>
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center; transition: all 0.4s ease;">
                                <div class="responsive-partner-name"
                                    style="font-size: 18px; font-weight: 800; color: #D83137; transition: all 0.3s ease;">Makerere University</div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">
                                Research Partner</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <form action="javascript:void();" method="post">
                <div id="contact-form" style="margin-bottom: 80px;">
                    <div class="responsive-contact-container animate-on-load"
                        style="background: #363558; border-radius: 30px; padding: 70px 60px; position: relative; overflow: hidden; transition: all 0.4s ease;">
                        <div class="floating-bg"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px); background-size: 60px 60px;">
                        </div>

                        <div style="position: relative; z-index: 2;">
                            <div style="text-align: center; margin-bottom: 50px;">
                                <h2 class="responsive-contact-title animate-on-load"
                                    style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                                    Start the Conversation
                                </h2>
                                <p class="responsive-contact-subtitle animate-on-load-delay-1"
                                    style="font-size: 19px; color: #FFF; max-width: 700px; margin: 0 auto; line-height: 1.6; opacity: 0.9;">
                                    Ready to partner with us? Share your details and we'll schedule an introductory meeting.
                                </p>
                            </div>

                            <div class="responsive-contact-grid"
                                style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
                                <!-- Form -->
                                <div>
                                    <form style="display: grid; gap: 25px;">
                                        <div class="responsive-input-grid"
                                            style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                            <div style="animation: fadeInUp 0.5s ease-out 0.2s both;">
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">First
                                                    Name *</label>
                                                <input type="text"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                                    placeholder="Enter first name">
                                            </div>
                                            <div style="animation: fadeInUp 0.5s ease-out 0.3s both;">
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Last
                                                    Name *</label>
                                                <input type="text"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div>

                                        <div style="animation: fadeInUp 0.5s ease-out 0.4s both;">
                                            <label
                                                style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Organization
                                                *</label>
                                            <input type="text"
                                                style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                                placeholder="Enter organization name">
                                        </div>

                                        <div class="responsive-input-grid"
                                            style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                            <div style="animation: fadeInUp 0.5s ease-out 0.5s both;">
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Email
                                                    Address *</label>
                                                <input type="email"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                                    placeholder="Enter email">
                                            </div>
                                            <div style="animation: fadeInUp 0.5s ease-out 0.6s both;">
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Phone
                                                    Number</label>
                                                <input type="tel"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;"
                                                    placeholder="Enter phone">
                                            </div>
                                        </div>

                                        <div style="animation: fadeInUp 0.5s ease-out 0.7s both;">
                                            <label
                                                style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Partnership
                                                Interest *</label>
                                            <select
                                                style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; transition: all 0.3s ease;">
                                                <option value="">Select partnership type</option>
                                                <option value="healthcare">Healthcare Facility Partnership</option>
                                                <option value="corporate">Corporate Partnership</option>
                                                <option value="community">Community Organization Partnership</option>
                                                <option value="research">Research & Academic Partnership</option>
                                                <option value="other">Other Partnership Type</option>
                                            </select>
                                        </div>

                                        <div style="animation: fadeInUp 0.5s ease-out 0.8s both;">
                                            <label
                                                style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Tell
                                                us about your organization and partnership goals *</label>
                                            <textarea rows="5"
                                                style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; resize: vertical; transition: all 0.3s ease;"
                                                placeholder="Describe your organization and what you hope to achieve through partnership..."></textarea>
                                        </div>

                                        <button type="submit" class="responsive-button mt-3"
                                            style="background: #46DE48; color: white; border: none; padding: 18px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 25px rgba(70,222,72,0.3); display: flex; align-items: center; justify-content: center; gap: 12px; transition: all 0.3s ease; animation: fadeInUp 0.5s ease-out 0.9s both;">
                                            <svg style="width: 20px; height: 20px; fill: white; transition: transform 0.3s ease;" viewBox="0 0 24 24">
                                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                                            </svg>
                                            Submit Partnership Inquiry
                                        </button>
                                    </form>
                                </div>

                                <!-- Sidebar -->
                                <div>
                                    <div class="responsive-form-container slide-in-right"
                                        style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; border: 1px solid rgba(255,255,255,0.2); margin-bottom: 30px; transition: all 0.4s ease;">
                                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                            <div class="rotate-in"
                                                style="background: rgba(216,49,55,0.2); color: #D83137; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                                <svg style="width: 24px; height: 24px; fill: #D83137;" viewBox="0 0 24 24">
                                                    <path
                                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                                </svg>
                                            </div>
                                            <h3 class="responsive-form-title"
                                                style="font-size: 24px; color: white; margin: 0; font-weight: 800;">Contact
                                                Information</h3>
                                        </div>
                                        <div style="display: grid; gap: 15px;">
                                            <div style="display: flex; gap: 12px; align-items: flex-start; animation: slideInRight 0.5s ease-out 0.2s both;">
                                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                                </svg>
                                                <div>
                                                    <div style="font-weight: 600; color: white; margin-bottom: 5px;">Email
                                                    </div>
                                                    <div style="color: #FFF; opacity: 0.8; font-size: 14px;">partnerships@safemomug.org
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display: flex; gap: 12px; align-items: flex-start; animation: slideInRight 0.5s ease-out 0.3s both;">
                                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                                </svg>
                                                <div>
                                                    <div style="font-weight: 600; color: white; margin-bottom: 5px;">Phone
                                                    </div>
                                                    <div style="color: #FFF; opacity: 0.8; font-size: 14px;">+256 700 123 456</div>
                                                </div>
                                            </div>
                                            <div style="display: flex; gap: 12px; align-items: flex-start; animation: slideInRight 0.5s ease-out 0.4s both;">
                                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px; transition: transform 0.3s ease;"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                                </svg>
                                                <div>
                                                    <div style="font-weight: 600; color: white; margin-bottom: 5px;">Address
                                                    </div>
                                                    <div style="color: #FFF; opacity: 0.8; font-size: 14px;">Plot 123, Maternal Health
                                                        Hub, Kampala, Uganda</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="responsive-form-container slide-in-right"
                                        style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; border: 1px solid rgba(255,255,255,0.2); transition: all 0.4s ease; animation-delay: 0.2s;">
                                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                                            <svg style="width: 20px; height: 20px; fill: #46DE48;" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                            </svg>
                                            <div style="color: white; font-weight: 700;">Response Time</div>
                                        </div>
                                        <p style="color: #FFF; margin: 0; font-size: 14px; line-height: 1.5; opacity: 0.9;">
                                            We respond to all partnership inquiries within 2 business days. Expect an
                                            initial meeting invitation within 5 business days.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Final CTA -->
            <div class="responsive-final-cta animate-on-load"
                style="text-align: center; padding: 50px; background: #FFF; border-radius: 30px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.4s ease;">
                <h2 class="responsive-final-title animate-on-load"
                    style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800; line-height: 1.2;">
                    Together, We Can Transform Maternal Healthcare
                </h2>
                <p class="responsive-final-subtitle animate-on-load-delay-1"
                    style="font-size: 18px; color: #5a5a5a; margin: 0 auto 30px auto; max-width: 700px; line-height: 1.6;">
                    Join our network of partners committed to making maternal healthcare accessible, respectful, and safe
                    for every mother in Uganda.
                </p>
                <a href="{{ url('contact') }}" style="text-decoration: none;">
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <button class="responsive-button animate-on-load-delay-2"
                            style="background: transparent; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">
                            contact us for more Information
                        </button>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <script>
        // Add hover animation for partner boxes
        document.addEventListener('DOMContentLoaded', function() {
            const partnerBoxes = document.querySelectorAll('.responsive-partner-box');
            partnerBoxes.forEach(box => {
                box.addEventListener('mouseenter', function() {
                    const name = this.querySelector('.responsive-partner-name');
                    if (name) {
                        name.style.transform = 'scale(1.05)';
                    }
                });
                
                box.addEventListener('mouseleave', function() {
                    const name = this.querySelector('.responsive-partner-name');
                    if (name) {
                        name.style.transform = 'scale(1)';
                    }
                });
            });
            
            // Add hover effect for stat boxes
            const statBoxes = document.querySelectorAll('.responsive-stat-box');
            statBoxes.forEach(box => {
                box.addEventListener('mouseenter', function() {
                    const number = this.querySelector('.responsive-stat-number');
                    if (number) {
                        number.style.transform = 'scale(1.1) rotate(5deg)';
                    }
                });
                
                box.addEventListener('mouseleave', function() {
                    const number = this.querySelector('.responsive-stat-number');
                    if (number) {
                        number.style.transform = 'scale(1) rotate(0deg)';
                    }
                });
            });
            
            // Add click animation for buttons
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!e.target.closest('a')) {
                        this.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 200);
                    }
                });
            });
            
            // Form input animations
            const formInputs = document.querySelectorAll('input, select, textarea');
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.01)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });
        });
    </script>
@endsection