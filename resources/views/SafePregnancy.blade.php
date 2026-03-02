@extends('layouts.apps')

@section('content')


<style>
    /* ---------- SMOOTH ANIMATIONS - SAFE PREGNANCY PAGE ---------- */
    @keyframes gentleFloat {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-8px); }
        100% { transform: translateY(0px); }
    }
    
    @keyframes pulseGlow {
        0% { box-shadow: 0 10px 30px rgba(221,49,52,0.2); }
        50% { box-shadow: 0 20px 50px rgba(221,49,52,0.4); }
        100% { box-shadow: 0 10px 30px rgba(221,49,52,0.2); }
    }
    
    @keyframes fadeSlideUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: transform: translateY(0); }
    }
    
    @keyframes fadeSlideRight {
        0% { opacity: 0; transform: translateX(-30px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes fadeSlideLeft {
        0% { opacity: 0; transform: translateX(30px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes scaleIn {
        0% { opacity: 0; transform: scale(0.9); }
        100% { opacity: 1; transform: scale(1); }
    }
    
    @keyframes countPulse {
        0% { transform: scale(1); color: #DD3134; }
        50% { transform: scale(1.05); color: #ff6b6b; }
        100% { transform: scale(1); color: #DD3134; }
    }
    
    @keyframes heartbeat {
        0% { transform: scale(1); }
        25% { transform: scale(1.1); }
        40% { transform: scale(1); }
        60% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    @keyframes borderPulse {
        0% { border-color: rgba(221,49,52,0.3); }
        50% { border-color: rgba(221,49,52,0.8); }
        100% { border-color: rgba(221,49,52,0.3); }
    }
    
    @keyframes backgroundBreath {
        0% { opacity: 0.03; transform: scale(1); }
        50% { opacity: 0.08; transform: scale(1.05); }
        100% { opacity: 0.03; transform: scale(1); }
    }
    
    @keyframes slideInStep {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes rotateIn {
        0% { opacity: 0; transform: rotate(-10deg) scale(0.9); }
        100% { opacity: 1; transform: rotate(0) scale(1); }
    }
    
    @keyframes progressPulse {
        0% { width: 0%; opacity: 0.8; }
        50% { opacity: 1; }
        100% { width: 100%; opacity: 0.8; }
    }
    
    .animate-float {
        animation: gentleFloat 6s infinite ease-in-out;
    }
    
    .animate-pulse-glow {
        animation: pulseGlow 3s infinite ease-in-out;
    }
    
    .animate-fade-up {
        animation: fadeSlideUp 0.8s ease forwards;
        opacity: 0;
    }
    
    .animate-fade-right {
        animation: fadeSlideRight 0.8s ease forwards;
        opacity: 0;
    }
    
    .animate-fade-left {
        animation: fadeSlideLeft 0.8s ease forwards;
        opacity: 0;
    }
    
    .animate-scale {
        animation: scaleIn 0.6s ease forwards;
        opacity: 0;
    }
    
    .animate-heartbeat {
        animation: heartbeat 2s infinite ease-in-out;
    }
    
    .animate-rotate-in {
        animation: rotateIn 0.8s ease forwards;
        opacity: 0;
    }
    
    .count-number {
        animation: countPulse 3s infinite ease-in-out;
    }
    
    .hover-lift {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 60px rgba(54,53,88,0.12);
    }
    
    .service-card {
        transition: all 0.4s ease;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
    }
    
    .service-card:hover .service-icon {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 20px 40px rgba(221,49,52,0.3);
    }
    
    .trimester-card {
        transition: all 0.4s ease;
    }
    
    .trimester-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 60px rgba(54,53,88,0.15);
    }
    
    .trimester-card:hover .trimester-badge {
        transform: scale(1.1);
        box-shadow: 0 0 0 6px rgba(255,255,255,0.3);
    }
    
    .stat-card {
        transition: all 0.3s ease;
    }
    
    .stat-card:hover {
        transform: scale(1.05);
        background: rgba(221,49,52,0.08);
    }
    
    .bg-decorative {
        animation: backgroundBreath 12s infinite ease-in-out;
    }
    
    .floating-particle {
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        opacity: 0.3;
        animation: gentleFloat 8s infinite ease-in-out;
    }
    
    .progress-animation {
        animation: progressPulse 3s infinite ease-in-out;
    }
</style>

<style>
/* ========== SPACING REDUCTIONS FOR SAFE PREGNANCY PAGE ========== */

/* Hero section reduction */
section[style*="padding: clamp(40px, 8vw, 120px) clamp(20px, 5vw, 5%)"] {
    padding: 30px 5% !important;
}

/* Reduce hero section gap */
[style*="display: flex; flex-wrap: wrap; align-items: center; gap: clamp(20px, 4vw, 60px)"] {
    gap: 20px !important;
}

/* Reduce badge padding */
[style*="display: inline-flex; align-items: center; padding: 10px 24px; background: #FFF; border-radius: 30px; margin-bottom: 25px"] {
    padding: 6px 16px !important;
    margin-bottom: 15px !important;
    font-size: 12px !important;
}

/* Reduce main heading size */
h1[style*="font-size: clamp(32px, 5.5vw, 64px)"] {
    font-size: clamp(28px, 4.5vw, 42px) !important;
    margin-bottom: 10px !important;
}

/* Reduce paragraph size and margin */
p[style*="font-size: clamp(16px, 3vw, 20px); color: #5a5a5a; line-height: 1.7; margin-bottom: 35px"] {
    font-size: 15px !important;
    margin-bottom: 20px !important;
}

/* Reduce button padding */
a[style*="padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 50px"] {
    padding: 10px 20px !important;
    font-size: 14px !important;
}

/* Reduce stats card padding */
[style*="display: flex; align-items: center; gap: 12px; min-width: 140px; padding: 8px 16px; border-radius: 20px"] {
    padding: 5px 10px !important;
    gap: 8px !important;
}

[style*="width: clamp(45px, 8vw, 55px); height: clamp(45px, 8vw, 55px); background: rgba(216,49,55,0.1); border-radius: 15px"] {
    width: 40px !important;
    height: 40px !important;
    font-size: 16px !important;
}

[style*="font-size: clamp(22px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1"] {
    font-size: 20px !important;
}

[style*="font-size: clamp(11px, 2vw, 13px); color: #5a5a5a; font-weight: 600"] {
    font-size: 10px !important;
}

/* Reduce trust message margin */
[style*="margin-top: 30px; display: flex; align-items: center; gap: 12px"] {
    margin-top: 15px !important;
    gap: 8px !important;
}

/* Reduce right card padding */
div[style*="background: #FFF; border-radius: clamp(20px, 4vw, 35px); padding: clamp(12px, 2vw, 18px); box-shadow: 0 25px 50px rgba(54,53,88,0.15)"] {
    padding: 10px !important;
}

/* Reduce bottom card padding */
[style*="display: flex; justify-content: space-between; align-items: center; padding: clamp(15px, 3vw, 22px) clamp(10px, 2vw, 15px); background: #fdfcfb; border-radius: clamp(12px, 2vw, 18px); margin-top: clamp(12px, 2vw, 18px)"] {
    padding: 10px !important;
    margin-top: 8px !important;
}

/* Reduce badge sizes */
[style*="position: absolute; top: -15px; right: clamp(-5px, 2vw, -15px); background: #363558; color: white; padding: clamp(12px, 2vw, 18px) clamp(15px, 3vw, 28px); border-radius: clamp(15px, 3vw, 25px)"] {
    padding: 8px 12px !important;
}

[style*="font-size: clamp(20px, 4vw, 28px); font-weight: 900; line-height: 1"] {
    font-size: 18px !important;
}

/* Why Prenatal Care Matters section */
section[style*="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%)"]:nth-of-type(2) {
    padding: 30px 5% !important;
}

[style*="display: flex; flex-wrap: wrap; align-items: center; gap: 40px"] {
    gap: 20px !important;
}

[style*="display: inline-block; padding: 8px 20px; background: rgba(216,49,55,0.1); border-radius: 30px; font-size: 12px; font-weight: 800; margin-bottom: 20px"] {
    padding: 4px 12px !important;
    font-size: 11px !important;
    margin-bottom: 10px !important;
}

h2[style*="font-size: clamp(28px, 4vw, 42px); color: #363558; margin-bottom: 20px; font-weight: 800"] {
    font-size: clamp(24px, 3.5vw, 32px) !important;
    margin-bottom: 10px !important;
}

p[style*="font-size: 17px; color: #5a5a5a; line-height: 1.7; margin-bottom: 30px"] {
    font-size: 15px !important;
    margin-bottom: 15px !important;
}

[style*="display: grid; grid-template-columns: 1fr 1fr; gap: 20px"] {
    gap: 10px !important;
}

[style*="background: #f8f9fa; padding: 20px; border-radius: 20px"] {
    padding: 12px !important;
}

[style*="font-size: 32px; font-weight: 800; margin-bottom: 5px"] {
    font-size: 24px !important;
    margin-bottom: 2px !important;
}

[style*="font-size: 14px; color: #5a5a5a"] {
    font-size: 12px !important;
}

/* Right side card */
[style*="background: #363558; border-radius: 30px; padding: 35px; color: white; box-shadow: 0 25px 50px rgba(54,53,88,0.2)"] {
    padding: 20px !important;
}

[style*="display: flex; align-items: center; gap: 15px; margin-bottom: 25px"] {
    gap: 8px !important;
    margin-bottom: 12px !important;
}

[style*="width: 50px; height: 50px; background: rgba(255,255,255,0.15); border-radius: 15px; font-size: 24px"] {
    width: 40px !important;
    height: 40px !important;
    font-size: 18px !important;
}

h3[style*="font-size: 22px; font-weight: 800; margin: 0"] {
    font-size: 18px !important;
}

li[style*="display: flex; align-items: center; gap: 12px; margin-bottom: 18px"] {
    gap: 8px !important;
    margin-bottom: 10px !important;
    font-size: 14px !important;
}

/* Comprehensive Care Services section */
section[style*="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%)"]:nth-of-type(3) {
    padding: 30px 5% !important;
}

[style*="text-align: center; margin-bottom: 50px"] {
    margin-bottom: 25px !important;
}

[style*="display: inline-flex; align-items: center; padding: 10px 30px; background: rgba(216,49,55,0.1); border-radius: 30px; font-size: 13px; font-weight: 800; margin-bottom: 20px"] {
    padding: 5px 15px !important;
    font-size: 11px !important;
    margin-bottom: 10px !important;
}

h2[style*="font-size: clamp(28px, 5vw, 48px); color: #363558; margin-bottom: 15px; font-weight: 800"] {
    font-size: clamp(24px, 4vw, 36px) !important;
    margin-bottom: 8px !important;
}

p[style*="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: 17px"] {
    font-size: 15px !important;
}

/* Service cards */
[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr)); gap: 25px"] {
    gap: 15px !important;
}

.service-card[style*="padding: 30px"] {
    padding: 20px !important;
}

[style*="display: flex; align-items: center; gap: 15px; margin-bottom: 20px"] {
    gap: 8px !important;
    margin-bottom: 10px !important;
}

.service-icon[style*="width: 60px; height: 60px; background: #D83137; border-radius: 18px; font-size: 26px"] {
    width: 45px !important;
    height: 45px !important;
    font-size: 20px !important;
}

h3[style*="font-size: 20px; color: #363558; margin: 0; font-weight: 800"] {
    font-size: 16px !important;
}

.service-card p[style*="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px"] {
    font-size: 13px !important;
    margin-bottom: 12px !important;
}

[style*="background: rgba(216,49,55,0.05); padding: 15px; border-radius: 15px"] {
    padding: 10px !important;
}

[style*="font-size: 14px"] {
    font-size: 12px !important;
}

/* 9-Month Journey section */
section[style*="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 5%)"] {
    padding: 30px 5% !important;
}

[style*="display: inline-flex; align-items: center; padding: 10px 25px; background: rgba(70,222,72,0.1); border-radius: 30px; font-size: 13px; font-weight: 800; margin-bottom: 20px"] {
    padding: 5px 15px !important;
    font-size: 11px !important;
    margin-bottom: 10px !important;
}

[style*="color: #5a5a5a; max-width: 700px; margin: 0 auto 50px auto; font-size: 17px"] {
    margin-bottom: 25px !important;
    font-size: 15px !important;
}

[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 300px), 1fr)); gap: 30px; padding: 20px 0"] {
    gap: 15px !important;
    padding: 10px 0 !important;
}

/* Trimester cards */
.trimester-card[style*="padding: 45px 20px 25px"] {
    padding: 35px 15px 20px !important;
}

.trimester-badge[style*="width: 60px; height: 60px; background: #D83137; border-radius: 50%; font-size: 22px"] {
    width: 45px !important;
    height: 45px !important;
    font-size: 18px !important;
    top: -20px !important;
}

[style*="font-size: 13px; text-transform: uppercase; opacity: 0.9; letter-spacing: 1px; margin-top: 5px"] {
    font-size: 11px !important;
}

[style*="font-size: 24px; font-weight: 800; margin-top: 8px"] {
    font-size: 18px !important;
    margin-top: 5px !important;
}

[style*="padding: 30px 25px; text-align: left"] {
    padding: 15px !important;
}

li[style*="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px"] {
    gap: 5px !important;
    margin-bottom: 8px !important;
}

li span[style*="color: #5a5a5a; font-size: 15px"] {
    font-size: 13px !important;
}

[style*="margin-top: 50px; display: flex; justify-content: center; align-items: center; gap: 20px; flex-wrap: wrap"] {
    margin-top: 20px !important;
    gap: 10px !important;
}

/* Navigator Support section */
section[style*="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%)"]:nth-of-type(5) {
    padding: 30px 5% !important;
}

[style*="display: flex; flex-wrap: wrap; align-items: center; gap: 50px"] {
    gap: 20px !important;
}

[style*="display: inline-flex; align-items: center; padding: 10px 25px; background: rgba(70,222,72,0.15); border-radius: 40px; margin-bottom: 25px"] {
    padding: 5px 15px !important;
    margin-bottom: 12px !important;
}

h2[style*="font-size: clamp(28px, 5vw, 42px); font-weight: 800; margin-bottom: 20px"] {
    font-size: 24px !important;
    margin-bottom: 10px !important;
}

p[style*="font-size: 17px; opacity: 0.95; line-height: 1.7; margin-bottom: 30px"] {
    font-size: 14px !important;
    margin-bottom: 15px !important;
}

[style*="display: grid; grid-template-columns: 1fr 1fr; gap: 20px"] {
    gap: 10px !important;
}

[style*="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 10px; font-size: 18px"] {
    width: 30px !important;
    height: 30px !important;
    font-size: 14px !important;
}

[style*="font-size: 15px"] {
    font-size: 13px !important;
}

/* Right side card */
[style*="background: rgba(255,255,255,0.1); border-radius: 30px; padding: 35px; border: 1px solid rgba(255,255,255,0.2)"] {
    padding: 20px !important;
}

[style*="display: flex; align-items: center; gap: 20px; margin-bottom: 25px"] {
    gap: 10px !important;
    margin-bottom: 12px !important;
}

[style*="width: 70px; height: 70px; background: #FFF; border-radius: 20px; font-size: 30px"] {
    width: 50px !important;
    height: 50px !important;
    font-size: 22px !important;
}

[style*="font-size: 20px; font-weight: 800"] {
    font-size: 16px !important;
}

[style*="font-size: 14px; opacity: 0.9"] {
    font-size: 12px !important;
}

p[style*="font-size: 16px; line-height: 1.7; margin-bottom: 20px; font-style: italic"] {
    font-size: 14px !important;
    margin-bottom: 10px !important;
}

/* Real Mother Story section */
section[style*="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%)"]:nth-of-type(6) {
    padding: 30px 5% !important;
}

[style*="display: flex; flex-wrap: wrap; gap: 40px; align-items: center"] {
    gap: 20px !important;
}

[style*="display: inline-block; padding: 8px 20px; background: rgba(216,49,55,0.1); border-radius: 30px; font-size: 12px; font-weight: 800; margin-bottom: 20px"] {
    padding: 4px 12px !important;
    font-size: 11px !important;
    margin-bottom: 10px !important;
}

h3[style*="font-size: 28px; font-weight: 800; color: #363558; margin-bottom: 20px"] {
    font-size: 22px !important;
    margin-bottom: 10px !important;
}

p[style*="font-size: 17px; color: #5a5a5a; line-height: 1.7; margin-bottom: 25px; font-style: italic"] {
    font-size: 15px !important;
    margin-bottom: 15px !important;
}

a[style*="padding: 12px 30px; border-radius: 40px; font-weight: 700; font-size: 14px"] {
    padding: 8px 20px !important;
    font-size: 12px !important;
}

/* Call to Action section */
section[style*="padding: clamp(50px, 8vw, 100px) clamp(20px, 5vw, 5%)"]:last-of-type {
    padding: 30px 5% !important;
}

[style*="display: inline-flex; align-items: center; gap: 12px; background: rgba(255,255,255,0.15); padding: 15px 35px; border-radius: 50px; margin-bottom: 30px"] {
    padding: 8px 20px !important;
    margin-bottom: 15px !important;
    gap: 6px !important;
}

h2[style*="font-size: clamp(32px, 6vw, 56px); font-weight: 800; margin: 0 0 20px 0"] {
    font-size: 28px !important;
    margin-bottom: 10px !important;
}

p[style*="font-size: 18px; opacity: 0.95; max-width: 600px; margin: 0 auto 35px auto"] {
    font-size: 15px !important;
    margin-bottom: 20px !important;
}

/* CTA buttons */
a[style*="padding: 20px 50px; border-radius: 60px; font-weight: 900; font-size: 18px"] {
    padding: 12px 30px !important;
    font-size: 15px !important;
}

[style*="margin-top: 40px; display: flex; justify-content: center; gap: 40px; flex-wrap: wrap"] {
    margin-top: 20px !important;
    gap: 15px !important;
}

/* Reduce floating decorative elements */
[style*="width: 300px; height: 300px; border-radius: 50%"] {
    width: 150px !important;
    height: 150px !important;
}

[style*="width: 400px; height: 400px; border-radius: 50%"] {
    width: 200px !important;
    height: 200px !important;
}

[style*="width: 200px; height: 200px; border: 2px dashed #D83137; border-radius: 40px"] {
    width: 100px !important;
    height: 100px !important;
}

.floating-particle {
    width: 6px !important;
    height: 6px !important;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    section[style*="padding: 30px 5%"] {
        padding: 20px 5% !important;
    }
    
    h1[style*="font-size: clamp(28px, 4.5vw, 42px)"] {
        font-size: 24px !important;
    }
    
    [style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr)); gap: 15px"] {
        grid-template-columns: 1fr !important;
    }
    
    .service-card {
        padding: 15px !important;
    }
    
    [style*="display: flex; gap: clamp(25px, 4vw, 50px); flex-wrap: wrap"] {
        gap: 10px !important;
    }
}
</style>
<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #FFF; overflow-x: hidden; position: relative;">

    <!-- ============================================ -->
    <!-- DECORATIVE BACKGROUND ELEMENTS - ANIMATED    -->
    <!-- ============================================ -->
    <div style="position: absolute; top: 5%; left: -2%; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(216,49,55,0.05) 0%, rgba(216,49,55,0) 70%); animation: backgroundBreath 15s infinite ease-in-out; pointer-events: none;"></div>
    <div style="position: absolute; bottom: 10%; right: -2%; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 18s infinite ease-in-out; animation-delay: 2s; pointer-events: none;"></div>
    <div style="position: absolute; top: 40%; left: 5%; width: 200px; height: 200px; border: 2px dashed #D83137; border-radius: 40px; opacity: 0.05; transform: rotate(25deg); animation: gentleFloat 12s infinite ease-in-out; display: block;"></div>
    
    <!-- Floating Particles -->
    <div class="floating-particle" style="top: 15%; left: 10%; background: #D83137;"></div>
    <div class="floating-particle" style="top: 25%; right: 15%; width: 12px; height: 12px; background: #46DE48; animation-delay: 1s;"></div>
    <div class="floating-particle" style="bottom: 30%; left: 20%; width: 10px; height: 10px; background: #363558; animation-delay: 2s;"></div>
    <div class="floating-particle" style="bottom: 20%; right: 25%; background: #363558; animation-delay: 1.5s;"></div>
    <div class="floating-particle" style="top: 70%; right: 10%; width: 14px; height: 14px; background: #D83137; animation-delay: 2.5s;"></div>

    <!-- ============================================ -->
    <!-- HERO SECTION - SAFE PREGNANCY PROGRAM        -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 120px) clamp(20px, 5vw, 5%); display: flex; flex-wrap: wrap; align-items: center; gap: clamp(20px, 4vw, 60px); position: relative; overflow: hidden;">
        
        <!-- Background decoration - now visible -->
        <div style="position: absolute; top: 10%; left: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(216,49,55,0.08) 0%, rgba(216,49,55,0) 70%); animation: backgroundBreath 20s infinite ease-in-out; display: block;"></div>
        <div style="position: absolute; bottom: 20%; right: -30px; width: 200px; height: 200px; border: 2px dashed #46DE48; border-radius: 40px; opacity: 0.1; transform: rotate(-15deg); animation: gentleFloat 14s infinite ease-in-out; display: block;"></div>
        
        <!-- Left Content -->
        <div style="flex: 1.2; min-width: min(100%, 320px); position: relative; z-index: 2;" class="animate-fade-right">
            
            <!-- Badge with pulse animation -->
            <div style="display: inline-flex; align-items: center; padding: 10px 24px; background: #FFF; color: #363558; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 800; margin-bottom: 25px; letter-spacing: 0.5px; border: 1px solid rgba(216,49,55,0.3); box-shadow: 0 4px 12px rgba(216,49,55,0.1); animation: borderPulse 3s infinite; width: fit-content;">
                <span style="color: #D83137; margin-right: 8px; font-size: 16px; animation: heartbeat 2s infinite;"><i class="bi bi-heart-fill"></i></span> 
                SAFE PREGNANCY PROGRAM
            </div>

            <!-- Main Heading -->
            <h1 style="font-size: clamp(32px, 5.5vw, 64px); color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -1px; line-height: 1.2;">
                Journey to a Safe & Healthy Pregnancy
            </h1>

            <!-- Description -->
            <p style="font-size: clamp(16px, 3vw, 20px); color: #5a5a5a; line-height: 1.7; margin-bottom: 35px; max-width: 90%;">
                <strong style="color: #363558;">From conception to delivery</strong>, our comprehensive prenatal support ensures you and your baby receive personalized care, expert guidance, and compassionate support every step of the way.
            </p>

            <!-- Buttons with hover animations -->
            <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 45px;">
                <a href="{{url('become-a-volunteer')}}" style="background: #D83137; color: white; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 50px; font-weight: 800; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 10px 25px rgba(216,49,55,0.3); transition: all 0.3s ease; white-space: nowrap;"
                   onmouseover="this.style.background='#b8272a'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 20px 35px rgba(216,49,55,0.4)'"
                   onmouseout="this.style.background='#D83137'; this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 25px rgba(216,49,55,0.3)'">
                    Enroll Now <span style="font-size: clamp(16px, 2.5vw, 20px); transition: transform 0.2s;" onmouseover="this.style.transform='translateX(5px)'" onmouseout="this.style.transform='translateX(0)'">→</span>
                </a>
                <a href="javascript:void()" style="background: #FFF; color: #363558; border: 2px solid #f0f0f0; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 50px; font-weight: 700; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease; white-space: nowrap;"
                   onmouseover="this.style.background='#f8f8f8'; this.style.borderColor='#D83137'; this.style.transform='translateY(-4px)'"
                   onmouseout="this.style.background='#FFF'; this.style.borderColor='#f0f0f0'; this.style.transform='translateY(0)'">
                    <span style="color: #46DE48; font-size: clamp(14px, 2.5vw, 16px);">▶</span> Watch Video
                </a>
            </div>

            <!-- Stats with hover effects -->
            <div style="display: flex; gap: clamp(25px, 4vw, 50px); flex-wrap: wrap;">
                <div class="stat-card" style="display: flex; align-items: center; gap: 12px; min-width: 140px; padding: 8px 16px; border-radius: 20px; transition: all 0.3s ease; cursor: default;">
                    <div style="width: clamp(45px, 8vw, 55px); height: clamp(45px, 8vw, 55px); background: rgba(216,49,55,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #D83137; font-size: clamp(18px, 3vw, 22px); transition: all 0.3s ease;">
                        <i class="bi bi-heart-fill animate-heartbeat"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(22px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;" class="count-number">2,500+</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #5a5a5a; font-weight: 600;">Active Pregnancies</div>
                    </div>
                </div>
                <div class="stat-card" style="display: flex; align-items: center; gap: 12px; min-width: 140px; padding: 8px 16px; border-radius: 20px; transition: all 0.3s ease; cursor: default;">
                    <div style="width: clamp(45px, 8vw, 55px); height: clamp(45px, 8vw, 55px); background: rgba(70,222,72,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(18px, 3vw, 22px); transition: all 0.3s ease;">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(22px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;" class="count-number">99%</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #5a5a5a; font-weight: 600;">Maternal Satisfaction</div>
                    </div>
                </div>
                <div class="stat-card" style="display: flex; align-items: center; gap: 12px; min-width: 140px; padding: 8px 16px; border-radius: 20px; transition: all 0.3s ease; cursor: default;">
                    <div style="width: clamp(45px, 8vw, 55px); height: clamp(45px, 8vw, 55px); background: rgba(54,53,88,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #363558; font-size: clamp(18px, 3vw, 22px); transition: all 0.3s ease;">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(22px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;" class="count-number">24/7</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #5a5a5a; font-weight: 600;">Navigator Access</div>
                    </div>
                </div>
            </div>
            
            <!-- Trust message -->
            <div style="margin-top: 30px; display: flex; align-items: center; gap: 12px;">
                <div style="display: flex;">
                    <div style="width: 30px; height: 30px; background: rgba(216,49,55,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #D83137; font-size: 14px; border: 2px solid #FFF;"><i class="bi bi-check-lg"></i></div>
                    <div style="width: 30px; height: 30px; background: rgba(216,49,55,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #D83137; font-size: 14px; margin-left: -8px; border: 2px solid #FFF;"><i class="bi bi-check-lg"></i></div>
                    <div style="width: 30px; height: 30px; background: rgba(216,49,55,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #D83137; font-size: 14px; margin-left: -8px; border: 2px solid #FFF;"><i class="bi bi-check-lg"></i></div>
                </div>
                <span style="font-size: 13px; color: #5a5a5a; font-weight: 600;">Trusted by 5,000+ expectant mothers across Uganda</span>
            </div>
        </div>

        <!-- Right Image Card with animations -->
        <div style="flex: 1; min-width: min(100%, 320px); position: relative; z-index: 2; margin-top: clamp(20px, 5vw, 0);" class="animate-fade-left">
            <div style="background: #FFF; border-radius: clamp(20px, 4vw, 35px); padding: clamp(12px, 2vw, 18px); box-shadow: 0 25px 50px rgba(54,53,88,0.15); border: 1px solid #f0f0f0; position: relative; transition: all 0.4s ease;"
                 onmouseover="this.style.boxShadow='0 35px 70px rgba(54,53,88,0.2)'; this.style.transform='translateY(-5px)'"
                 onmouseout="this.style.boxShadow='0 25px 50px rgba(54,53,88,0.15)'; this.style.transform='translateY(0)'">
                
                <div style="position: relative; overflow: hidden; border-radius: clamp(15px, 3vw, 22px);">
                    <img 
                        src="{{ asset('assets/images/safePregenancy.png') }}"
                        style="width: 100%; height: auto; border-radius: clamp(15px, 3vw, 22px); display: block; aspect-ratio: 4/3; object-fit: cover; transition: transform 0.7s ease;"
                        alt="Mother and child"
                        onmouseover="this.style.transform='scale(1.05)'"
                        onmouseout="this.style.transform='scale(1)'"
                    >
                    
                    <!-- Ultrasound Badge -->
                    <div style="position: absolute; bottom: 15px; left: 15px; background: rgba(255,255,255,0.95); padding: 10px 18px; border-radius: 40px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; gap: 10px; animation: gentleFloat 6s infinite ease-in-out;">
                        <span style="color: #D83137; font-size: 18px;"><i class="bi bi-heart-pulse"></i></span>
                        <span style="color: #363558; font-weight: 700; font-size: 13px;">12 Weeks + Healthy</span>
                    </div>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: clamp(15px, 3vw, 22px) clamp(10px, 2vw, 15px); background: #fdfcfb; border-radius: clamp(12px, 2vw, 18px); margin-top: clamp(12px, 2vw, 18px);">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 45px; height: 45px; background: rgba(216,49,55,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #D83137; font-size: 20px;">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div>
                            <div style="font-size: clamp(11px, 2vw, 13px); color: #363558; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Sarah's Journey</div>
                            <div style="font-size: clamp(13px, 2.5vw, 15px); font-weight: 600; color: #363558;">"My navigator is family"</div>
                        </div>
                    </div>
                    <a href="javascript:void()" style="color: #D83137; text-decoration: none; font-weight: 800; font-size: clamp(12px, 2vw, 14px); display: flex; align-items: center; gap: 5px; transition: all 0.3s ease;"
                       onmouseover="this.style.color='#b8272a'; this.style.gap='10px'"
                       onmouseout="this.style.color='#D83137'; this.style.gap='5px'">
                        Read Story <span style="font-size: 16px; transition: transform 0.3s;">→</span>
                    </a>
                </div>

                <!-- 24/7 Support Badge - Animated -->
                <div style="position: absolute; top: -15px; right: clamp(-5px, 2vw, -15px); background: #363558; color: white; padding: clamp(12px, 2vw, 18px) clamp(15px, 3vw, 28px); border-radius: clamp(15px, 3vw, 25px); box-shadow: 0 15px 30px rgba(54,53,88,0.3); text-align: center; z-index: 3; animation: gentleFloat 7s infinite ease-in-out; border: 2px solid #46DE48;">
                    <div style="font-size: clamp(20px, 4vw, 28px); font-weight: 900; line-height: 1; letter-spacing: -1px;">24/7</div>
                    <div style="font-size: clamp(8px, 1.5vw, 11px); opacity: 0.9; text-transform: uppercase; font-weight: 700;">Pregnancy Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- WHY PRENATAL CARE MATTERS                    -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%); background: #FFF; position: relative;">
        
        <!-- Background Pattern - Animated -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.02; background-image: radial-gradient(circle at 20% 30%, #D83137 1px, transparent 1px); background-size: 60px 60px; animation: backgroundBreath 25s infinite ease-in-out; display: block;"></div>
        
        <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 2;">
            
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
                
                <!-- Left side - Stats -->
                <div style="flex: 1; min-width: 300px;" class="animate-fade-right">
                    <div style="display: inline-block; padding: 8px 20px; background: rgba(216,49,55,0.1); color: #D83137; border-radius: 30px; font-size: 12px; font-weight: 800; margin-bottom: 20px; letter-spacing: 1px;">
                        WHY IT MATTERS
                    </div>
                    
                    <h2 style="font-size: clamp(28px, 4vw, 42px); color: #363558; margin-bottom: 20px; font-weight: 800; line-height: 1.2;">
                        Early & Consistent Prenatal Care Saves Lives
                    </h2>
                    
                    <p style="font-size: 17px; color: #5a5a5a; line-height: 1.7; margin-bottom: 30px;">
                        Regular check-ups and continuous support during pregnancy reduce the risk of complications by up to 70% and ensure both mother and baby are healthy throughout the journey.
                    </p>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: #f8f9fa; padding: 20px; border-radius: 20px; border-left: 5px solid #D83137; transition: all 0.3s ease;"
                             onmouseover="this.style.background='#FFF'; this.style.boxShadow='0 10px 25px rgba(216,49,55,0.1)'"
                             onmouseout="this.style.background='#f8f9fa'; this.style.boxShadow='none'">
                            <div style="font-size: 32px; font-weight: 800; color: #D83137; margin-bottom: 5px;">70%</div>
                            <div style="font-size: 14px; color: #5a5a5a;">Reduction in complications</div>
                        </div>
                        <div style="background: #f8f9fa; padding: 20px; border-radius: 20px; border-left: 5px solid #46DE48; transition: all 0.3s ease;"
                             onmouseover="this.style.background='#FFF'; this.style.boxShadow='0 10px 25px rgba(70,222,72,0.1)'"
                             onmouseout="this.style.background='#f8f9fa'; this.style.boxShadow='none'">
                            <div style="font-size: 32px; font-weight: 800; color: #46DE48; margin-bottom: 5px;">95%</div>
                            <div style="font-size: 14px; color: #5a5a5a;">Positive birth outcomes</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right side - Key benefits -->
                <div style="flex: 1; min-width: 300px;" class="animate-fade-left">
                    <div style="background: #363558; border-radius: 30px; padding: 35px; color: white; box-shadow: 0 25px 50px rgba(54,53,88,0.2);">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                            <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.15); border-radius: 15px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3 style="font-size: 22px; font-weight: 800; margin: 0;">Our Prenatal Promise</h3>
                        </div>
                        
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="display: flex; align-items: center; gap: 12px; margin-bottom: 18px;">
                                <span style="color: #46DE48; font-size: 20px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span>Personalized care plan for every trimester</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 12px; margin-bottom: 18px;">
                                <span style="color: #46DE48; font-size: 20px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span>Same navigator from enrollment to delivery</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 12px; margin-bottom: 18px;">
                                <span style="color: #46DE48; font-size: 20px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span>Emergency coordination 24/7/365</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 12px;">
                                <span style="color: #46DE48; font-size: 20px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span>Birth preparedness & facility referrals</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- COMPREHENSIVE CARE SERVICES - 6 SERVICES     -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%); background: #FFF; position: relative;">
        
        <!-- Decorative elements -->
        <div style="position: absolute; top: 20%; right: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(216,49,55,0.05) 0%, rgba(216,49,55,0) 70%); animation: backgroundBreath 16s infinite ease-in-out;"></div>
        
        <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 2;">
            
            <div style="text-align: center; margin-bottom: 50px;" class="animate-fade-up">
                <div style="display: inline-flex; align-items: center; padding: 10px 30px; background: rgba(216,49,55,0.1); color: #D83137; border-radius: 30px; font-size: 13px; font-weight: 800; margin-bottom: 20px; border: 1px solid rgba(216,49,55,0.2);">
                    <span style="margin-right: 10px;">🫄</span> COMPREHENSIVE PRENATAL SERVICES
                </div>
                <h2 style="font-size: clamp(28px, 5vw, 48px); color: #363558; margin-bottom: 15px; font-weight: 800; line-height: 1.2;">
                    Complete Pregnancy Care
                </h2>
                <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: 17px;">
                    From your first positive test to delivery day, we provide comprehensive support tailored to each stage of your pregnancy.
                </p>
            </div>

            <!-- 6 Service Cards Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr)); gap: 25px;">
                
                <!-- 1. Smart Reminders & Appointments -->
                <div class="service-card" style="background: #FFF; border-radius: 25px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #D83137; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.1s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: 60px; height: 60px; background: #D83137; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; transition: all 0.4s ease; box-shadow: 0 10px 20px rgba(216,49,55,0.2);">
                            <i class="bi bi-bell-fill"></i>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0; font-weight: 800;">Smart Reminders</h3>
                    </div>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Never miss an appointment with automated SMS and app reminders for prenatal visits, tests, and important milestones.
                    </p>
                    <div style="background: rgba(216,49,55,0.05); padding: 15px; border-radius: 15px;">
                        <div style="display: flex; align-items: center; gap: 8px; color: #363558;">
                            <span style="color: #D83137; font-weight: 800;">✓</span>
                            <span style="font-size: 14px;">Appointment scheduling & tracking</span>
                        </div>
                    </div>
                </div>
                
                <!-- 2. Home Health Visits -->
                <div class="service-card" style="background: #FFF; border-radius: 25px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #46DE48; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.2s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: 60px; height: 60px; background: #46DE48; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; transition: all 0.4s ease; box-shadow: 0 10px 20px rgba(70,222,72,0.2);">
                            <i class="bi bi-house-heart-fill"></i>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0; font-weight: 800;">Home Health Visits</h3>
                    </div>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Trained youth navigators visit you at home to monitor blood pressure, weight, and provide personalized health education.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: 15px; border-radius: 15px;">
                        <div style="display: flex; align-items: center; gap: 8px; color: #363558;">
                            <span style="color: #46DE48; font-weight: 800;">✓</span>
                            <span style="font-size: 14px;">Bi-weekly check-ins & health tracking</span>
                        </div>
                    </div>
                </div>
                
                <!-- 3. Health Education -->
                <div class="service-card" style="background: #FFF; border-radius: 25px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #363558; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.3s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: 60px; height: 60px; background: #363558; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; transition: all 0.4s ease; box-shadow: 0 10px 20px rgba(54,53,88,0.2);">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0; font-weight: 800;">Health Education</h3>
                    </div>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Culturally-sensitive guidance on nutrition, danger signs, exercise, and what to expect in each trimester.
                    </p>
                    <div style="background: rgba(54,53,88,0.05); padding: 15px; border-radius: 15px;">
                        <div style="display: flex; align-items: center; gap: 8px; color: #363558;">
                            <span style="color: #363558; font-weight: 800;">✓</span>
                            <span style="font-size: 14px;">Weekly educational modules & resources</span>
                        </div>
                    </div>
                </div>
                
                <!-- 4. Birth Planning -->
                <div class="service-card" style="background: #FFF; border-radius: 25px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #D83137; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.4s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: 60px; height: 60px; background: #D83137; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; transition: all 0.4s ease; box-shadow: 0 10px 20px rgba(216,49,55,0.2);">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0; font-weight: 800;">Birth Planning</h3>
                    </div>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Create your personalized birth plan, coordinate with health facilities, and prepare for a safe delivery.
                    </p>
                    <div style="background: rgba(216,49,55,0.05); padding: 15px; border-radius: 15px;">
                        <div style="display: flex; align-items: center; gap: 8px; color: #363558;">
                            <span style="color: #D83137; font-weight: 800;">✓</span>
                            <span style="font-size: 14px;">Facility referral & transport planning</span>
                        </div>
                    </div>
                </div>
                
                <!-- 5. Nutrition Counseling -->
                <div class="service-card" style="background: #FFF; border-radius: 25px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #46DE48; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.5s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: 60px; height: 60px; background: #46DE48; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; transition: all 0.4s ease; box-shadow: 0 10px 20px rgba(70,222,72,0.2);">
                            <i class="bi bi-cup-straw"></i>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0; font-weight: 800;">Nutrition Counseling</h3>
                    </div>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Personalized nutrition plans, iron and folate supplementation tracking, and locally-available food guidance.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: 15px; border-radius: 15px;">
                        <div style="display: flex; align-items: center; gap: 8px; color: #363558;">
                            <span style="color: #46DE48; font-weight: 800;">✓</span>
                            <span style="font-size: 14px;">Anemia prevention & healthy weight gain</span>
                        </div>
                    </div>
                </div>
                
                <!-- 6. Mental Wellbeing -->
                <div class="service-card" style="background: #FFF; border-radius: 25px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #363558; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.6s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: 60px; height: 60px; background: #363558; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; transition: all 0.4s ease; box-shadow: 0 10px 20px rgba(54,53,88,0.2);">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0; font-weight: 800;">Mental Wellbeing</h3>
                    </div>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Emotional support, stress management techniques, and screening for antenatal depression and anxiety.
                    </p>
                    <div style="background: rgba(54,53,88,0.05); padding: 15px; border-radius: 15px;">
                        <div style="display: flex; align-items: center; gap: 8px; color: #363558;">
                            <span style="color: #363558; font-weight: 800;">✓</span>
                            <span style="font-size: 14px;">Coping strategies & peer support groups</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- YOUR 9-MONTH JOURNEY - TRIMESTER TIMELINE    -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 5%); background: #FFF; text-align: center; position: relative;">
        
        <!-- Decorative elements -->
        <div style="position: absolute; top: 10%; left: 5%; width: 200px; height: 200px; border: 2px dashed #46DE48; border-radius: 50%; opacity: 0.05; animation: gentleFloat 15s infinite ease-in-out;"></div>
        <div style="position: absolute; bottom: 10%; right: 5%; width: 150px; height: 150px; border: 2px dashed #D83137; border-radius: 30px; opacity: 0.05; transform: rotate(25deg); animation: gentleFloat 12s infinite ease-in-out;"></div>
        
        <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 2;">
            
            <div style="display: inline-flex; align-items: center; padding: 10px 25px; background: rgba(70,222,72,0.1); color: #46DE48; border-radius: 30px; font-size: 13px; font-weight: 800; margin-bottom: 20px; border: 1px solid rgba(70,222,72,0.3); animation: borderPulse 3s infinite;">
                <span style="margin-right: 8px;">📆</span> YOUR 9-MONTH JOURNEY
            </div>
            
            <h2 style="font-size: clamp(28px, 5vw, 48px); color: #363558; font-weight: 800; margin-bottom: 15px; line-height: 1.2;" class="animate-fade-up">
                Every Trimester, Supported
            </h2>
            
            <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto 50px auto; font-size: 17px;" class="animate-fade-up">
                Your pregnancy journey is unique. We provide trimester-specific support tailored to your changing needs and baby's development.
            </p>
            
            <!-- Trimester Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 300px), 1fr)); gap: 30px; padding: 20px 0;">
                
                <!-- 1st Trimester -->
                <div class="trimester-card" style="background: #FFF; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.05); position: relative; border: 1px solid #f0f0f0; transition: all 0.4s ease; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.1s;">
                    <div style="background: #D83137; color: white; padding: 45px 20px 25px; position: relative;">
                        <div class="trimester-badge" style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; background: #D83137; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 5px solid #FFF; font-weight: 900; font-size: 22px; box-shadow: 0 10px 20px rgba(216,49,55,0.3); transition: all 0.4s ease;">
                            1st
                        </div>
                        <div style="font-size: 13px; text-transform: uppercase; opacity: 0.9; letter-spacing: 1px; margin-top: 5px;">Weeks 1-12</div>
                        <div style="font-size: 24px; font-weight: 800; margin-top: 8px;">First Trimester</div>
                    </div>
                    <div style="padding: 30px 25px; text-align: left;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #D83137; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Early pregnancy confirmation & dating</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #D83137; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Initial health screening & risk assessment</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #D83137; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Nutrition counseling & supplementation</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <span style="color: #D83137; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Navigator introduction & care plan</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- 2nd Trimester -->
                <div class="trimester-card" style="background: #FFF; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.05); position: relative; border: 1px solid #f0f0f0; transition: all 0.4s ease; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.3s;">
                    <div style="background: #46DE48; color: white; padding: 45px 20px 25px; position: relative;">
                        <div class="trimester-badge" style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; background: #46DE48; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 5px solid #FFF; font-weight: 900; font-size: 22px; box-shadow: 0 10px 20px rgba(70,222,72,0.3); transition: all 0.4s ease;">
                            2nd
                        </div>
                        <div style="font-size: 13px; text-transform: uppercase; opacity: 0.9; letter-spacing: 1px; margin-top: 5px;">Weeks 13-27</div>
                        <div style="font-size: 24px; font-weight: 800; margin-top: 8px;">Second Trimester</div>
                    </div>
                    <div style="padding: 30px 25px; text-align: left;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #46DE48; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Regular BP & weight monitoring</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #46DE48; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Fetal movement tracking education</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #46DE48; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Glucose screening coordination</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <span style="color: #46DE48; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Birth preparedness education</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- 3rd Trimester -->
                <div class="trimester-card" style="background: #FFF; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.05); position: relative; border: 1px solid #f0f0f0; transition: all 0.4s ease; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.5s;">
                    <div style="background: #363558; color: white; padding: 45px 20px 25px; position: relative;">
                        <div class="trimester-badge" style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; background: #363558; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 5px solid #FFF; font-weight: 900; font-size: 22px; box-shadow: 0 10px 20px rgba(54,53,88,0.3); transition: all 0.4s ease;">
                            3rd
                        </div>
                        <div style="font-size: 13px; text-transform: uppercase; opacity: 0.9; letter-spacing: 1px; margin-top: 5px;">Weeks 28-40</div>
                        <div style="font-size: 24px; font-weight: 800; margin-top: 8px;">Third Trimester</div>
                    </div>
                    <div style="padding: 30px 25px; text-align: left;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #363558; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Danger sign recognition training</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #363558; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Facility referral & transport planning</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                                <span style="color: #363558; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Final birth plan review</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <span style="color: #363558; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                                <span style="color: #5a5a5a; font-size: 15px;">Postpartum preparation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Journey Progress Indicator -->
            <div style="margin-top: 50px; display: flex; justify-content: center; align-items: center; gap: 20px; flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div style="width: 12px; height: 12px; background: #D83137; border-radius: 50%; animation: pulseGlow 2s infinite;"></div>
                    <span style="color: #363558; font-weight: 600;">1st Trimester: Foundation</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div style="width: 12px; height: 12px; background: #46DE48; border-radius: 50%; animation: pulseGlow 2s infinite; animation-delay: 0.3s;"></div>
                    <span style="color: #363558; font-weight: 600;">2nd Trimester: Growth</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div style="width: 12px; height: 12px; background: #363558; border-radius: 50%; animation: pulseGlow 2s infinite; animation-delay: 0.6s;"></div>
                    <span style="color: #363558; font-weight: 600;">3rd Trimester: Preparation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- NAVIGATOR SUPPORT SECTION                    -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%); background: #363558; color: white; position: relative;">
        
        <!-- Animated background -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: repeating-linear-gradient(45deg, white 1px, transparent 1px, transparent 30px); background-size: 60px 60px; animation: backgroundBreath 30s infinite linear;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
            
            <div style="flex: 1; min-width: 300px;" class="animate-fade-right">
                <div style="display: inline-flex; align-items: center; padding: 10px 25px; background: rgba(70,222,72,0.15); border-radius: 40px; margin-bottom: 25px; border: 1px solid rgba(70,222,72,0.3);">
                    <span style="color: #46DE48; margin-right: 8px;"><i class="bi bi-people-fill"></i></span>
                    <span style="font-size: 14px; font-weight: 800; letter-spacing: 1px;">YOUR PREGNANCY NAVIGATOR</span>
                </div>
                
                <h2 style="font-size: clamp(28px, 5vw, 42px); font-weight: 800; margin-bottom: 20px; color: white;">
                    One Consistent Companion From Start to Finish
                </h2>
                
                <p style="font-size: 17px; opacity: 0.95; line-height: 1.7; margin-bottom: 30px;">
                    Unlike rotating clinic staff, your dedicated SafeMom Navigator stays with you throughout your entire pregnancy journey. They learn your history, understand your concerns, and become a trusted member of your support system.
                </p>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span style="font-size: 15px;">Same navigator, all 9 months</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span style="font-size: 15px;">24/7 phone & SMS access</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span style="font-size: 15px;">Home visits as needed</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span style="font-size: 15px;">Birth attendance support</span>
                    </div>
                </div>
            </div>
            
            <div style="flex: 1; min-width: 300px;" class="animate-fade-left">
                <div style="background: rgba(255,255,255,0.1); border-radius: 30px; padding: 35px; border: 1px solid rgba(255,255,255,0.2);">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 70px; height: 70px; background: #FFF; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: #363558; font-size: 30px;">
                            <i class="bi bi-person-heart"></i>
                        </div>
                        <div>
                            <div style="font-size: 20px; font-weight: 800;">Meet Grace</div>
                            <div style="font-size: 14px; opacity: 0.9;">Lead Pregnancy Navigator, 4+ years</div>
                        </div>
                    </div>
                    
                    <p style="font-size: 16px; line-height: 1.7; margin-bottom: 20px; font-style: italic;">
                        "I've supported over 200 mothers through their pregnancies. Seeing their confidence grow and welcoming their babies is the greatest joy. I'm not just a navigator — I become family."
                    </p>
                    
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="display: flex;">
                            <span style="color: #FFD700; font-size: 18px;">★</span>
                            <span style="color: #FFD700; font-size: 18px;">★</span>
                            <span style="color: #FFD700; font-size: 18px;">★</span>
                            <span style="color: #FFD700; font-size: 18px;">★</span>
                            <span style="color: #FFD700; font-size: 18px;">★</span>
                        </div>
                        <span style="font-size: 14px; opacity: 0.9;">4.9/5 from 180+ mothers</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- REAL MOTHER STORY - SARAH'S JOURNEY          -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%); background: #FFF; position: relative;">
        
        <div style="max-width: 1000px; margin: 0 auto;">
            
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                
                <div style="flex: 1; min-width: 280px;" class="animate-fade-right">
                    <div style="position: relative;">
                        <div style="position: relative; border-radius: 30px; overflow: hidden; box-shadow: 0 25px 50px rgba(54,53,88,0.1);">
                            <img src="{{ asset('assets/images/pregnantStory.png') }}"
                                 style="width: 100%; height: auto; aspect-ratio: 1/1; object-fit: cover; display: block; transition: transform 0.7s ease;"
                                 onmouseover="this.style.transform='scale(1.03)'"
                                 onmouseout="this.style.transform='scale(1)'"
                                 alt="Sarah - Mother Story">
                            
                            <div style="position: absolute; bottom: 20px; left: 20px; background: #FFF; padding: 15px 20px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); display: inline-flex; align-items: center; gap: 10px;">
                                <span style="background: #D83137; color: white; width: 35px; height: 35px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    <i class="bi bi-quote"></i>
                                </span>
                                <span style="color: #363558; font-weight: 700;">Sarah's Story</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="flex: 1.2; min-width: 300px;" class="animate-fade-left">
                    <div style="display: inline-block; padding: 8px 20px; background: rgba(216,49,55,0.1); color: #D83137; border-radius: 30px; font-size: 12px; font-weight: 800; margin-bottom: 20px;">
                        REAL MOTHER STORY
                    </div>
                    
                    <h3 style="font-size: 28px; font-weight: 800; color: #363558; margin-bottom: 20px;">"My navigator was with me every step of the way."</h3>
                    
                    <p style="font-size: 17px; color: #5a5a5a; line-height: 1.7; margin-bottom: 25px; font-style: italic;">
                        "When I first enrolled, I was anxious and didn't know what to expect. My navigator, Grace, explained everything — from the tests I needed to the foods I should eat. She reminded me of every appointment and even visited me at home when I was too tired to travel. When I went into labor at 2 AM, she was on the phone with me until I reached the hospital. I wasn't alone."
                    </p>
                    
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <div style="font-size: 18px; font-weight: 800; color: #363558;">Sarah</div>
                            <div style="font-size: 14px; color: #363558;">Mother of baby Michael, 3 months</div>
                        </div>
                        <a href="javascript:void()" style="background: #D83137; color: white; text-decoration: none; padding: 12px 30px; border-radius: 40px; font-weight: 700; font-size: 14px; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;"
                           onmouseover="this.style.background='#b8272a'; this.style.transform='translateX(5px)'"
                           onmouseout="this.style.background='#D83137'; this.style.transform='translateX(0)'">
                            Read Full Story <span style="font-size: 16px;">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- CALL TO ACTION - SUPPORT SAFE PREGNANCY      -->
    <!-- ============================================ -->
    <section style="padding: clamp(50px, 8vw, 100px) clamp(20px, 5vw, 5%); background: #D83137; color: white; position: relative; overflow: hidden;">
        
        <!-- Animated background -->
        <div style="position: absolute; top: -30px; right: -30px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%); animation: backgroundBreath 15s infinite ease-in-out;"></div>
        <div style="position: absolute; bottom: -30px; left: -30px; width: 250px; height: 250px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.1) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 18s infinite ease-in-out;"></div>
        
        <!-- Floating hearts -->
        <div style="position: absolute; top: 20%; left: 10%; font-size: 30px; opacity: 0.2; animation: gentleFloat 8s infinite;">❤️</div>
        <div style="position: absolute; bottom: 30%; right: 15%; font-size: 40px; opacity: 0.15; animation: gentleFloat 10s infinite; animation-delay: 1s;">🫄</div>
        
        <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto; text-align: center;" class="animate-fade-up">
            
            <div style="display: inline-flex; align-items: center; gap: 12px; background: rgba(255,255,255,0.15); padding: 15px 35px; border-radius: 50px; margin-bottom: 30px; border: 1px solid rgba(255,255,255,0.3); animation: borderPulse 3s infinite;">
                <span style="font-size: 22px; animation: heartbeat 2s infinite;">👶</span>
                <span style="font-size: 15px; font-weight: 800; letter-spacing: 2px;">START YOUR JOURNEY TODAY</span>
            </div>

            <h2 style="font-size: clamp(32px, 6vw, 56px); font-weight: 800; margin: 0 0 20px 0; line-height: 1.2; color: white;">
                Every Mother Deserves a Safe Pregnancy
            </h2>

            <p style="font-size: 18px; opacity: 0.95; max-width: 600px; margin: 0 auto 35px auto; line-height: 1.6;">
                Join thousands of mothers who have experienced the confidence and peace of mind that comes with continuous, compassionate pregnancy support.
            </p>

            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ url('become-a-navigator')}}" style="background: #46DE48; color: #363558; text-decoration: none; padding: 20px 50px; border-radius: 60px; font-weight: 900; font-size: 18px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 40px rgba(0,0,0,0.2); transition: all 0.3s ease;"
                   onmouseover="this.style.background='#80E681'; this.style.transform='translateY(-5px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(0,0,0,0.3)'"
                   onmouseout="this.style.background='#46DE48'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.2)'">
                    <i class="bi bi-heart-fill"></i> Enroll in Safe Pregnancy
                </a>
                <a href="{{ url('become-a-navigator')}}" style="background: rgba(255,255,255,0.15); color: white; text-decoration: none; padding: 20px 50px; border-radius: 60px; font-weight: 700; font-size: 18px; display: inline-flex; align-items: center; gap: 12px; border: 2px solid rgba(255,255,255,0.3); transition: all 0.3s ease;"
                   onmouseover="this.style.background='rgba(255,255,255,0.25)'; this.style.borderColor='#46DE48'; this.style.transform='translateY(-5px)'"
                   onmouseout="this.style.background='rgba(255,255,255,0.15)'; this.style.borderColor='rgba(255,255,255,0.3)'; this.style.transform='translateY(0)'">
                    <i class="bi bi-telephone-fill"></i> Talk to a Navigator
                </a>
            </div>
            
            <div style="margin-top: 40px; display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="background: rgba(255,255,255,0.2); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">✓</span>
                    <span>Free enrollment</span>
                </div>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="background: rgba(255,255,255,0.2); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">✓</span>
                    <span>No long-term commitment</span>
                </div>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="background: rgba(255,255,255,0.2); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">✓</span>
                    <span>Cancel anytime</span>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection