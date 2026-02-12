@extends('layouts.apps')

@section('content')

<style>
    /* ---------- SMOOTH ANIMATIONS - SAFE POSTPARTUM PAGE ---------- */
    @keyframes gentleFloat {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-8px); }
        100% { transform: translateY(0px); }
    }
    
    @keyframes pulseGlow {
        0% { box-shadow: 0 10px 30px rgba(55,51,88,0.2); }
        50% { box-shadow: 0 20px 50px rgba(55,51,88,0.4); }
        100% { box-shadow: 0 10px 30px rgba(55,51,88,0.2); }
    }
    
    @keyframes fadeSlideUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
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
        0% { transform: scale(1); color: #373358; }
        50% { transform: scale(1.05); color: #91746E; }
        100% { transform: scale(1); color: #373358; }
    }
    
    @keyframes heartBeat {
        0% { transform: scale(1); }
        25% { transform: scale(1.1); }
        40% { transform: scale(1); }
        60% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    @keyframes borderPulse {
        0% { border-color: rgba(145,116,110,0.3); }
        50% { border-color: rgba(145,116,110,0.8); }
        100% { border-color: rgba(145,116,110,0.3); }
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
    
    @keyframes iconRotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    @keyframes gentleWave {
        0% { transform: rotate(0deg); }
        25% { transform: rotate(10deg); }
        75% { transform: rotate(-5deg); }
        100% { transform: rotate(0deg); }
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
    
    .animate-heart {
        animation: heartBeat 2s infinite ease-in-out;
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
        box-shadow: 0 20px 40px rgba(145,116,110,0.3);
    }
    
    .timeline-card {
        transition: all 0.4s ease;
    }
    
    .timeline-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 60px rgba(54,53,88,0.15);
    }
    
    .stat-card {
        transition: all 0.3s ease;
    }
    
    .stat-card:hover {
        transform: scale(1.02);
        box-shadow: 0 25px 50px rgba(54,53,88,0.1);
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
    
    .story-card {
        transition: all 0.4s ease;
    }
    
    .story-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(54,53,88,0.15);
    }
    
    .story-card:hover .story-image {
        transform: scale(1.05);
    }
</style>

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%); overflow-x: hidden; position: relative;">

    <!-- ============================================ -->
    <!-- DECORATIVE BACKGROUND ELEMENTS - ANIMATED    -->
    <!-- ============================================ -->
    <div style="position: absolute; top: 5%; left: -2%; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(145,116,110,0.05) 0%, rgba(145,116,110,0) 70%); animation: backgroundBreath 15s infinite ease-in-out; pointer-events: none;"></div>
    <div style="position: absolute; bottom: 10%; right: -2%; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(55,51,88,0.05) 0%, rgba(55,51,88,0) 70%); animation: backgroundBreath 18s infinite ease-in-out; animation-delay: 2s; pointer-events: none;"></div>
    
    <!-- Floating Particles -->
    <div class="floating-particle" style="top: 15%; left: 10%; background: #DD3134;"></div>
    <div class="floating-particle" style="top: 25%; right: 15%; width: 12px; height: 12px; background: #46DE48; animation-delay: 1s;"></div>
    <div class="floating-particle" style="bottom: 30%; left: 20%; width: 10px; height: 10px; background: #91746E; animation-delay: 2s;"></div>
    <div class="floating-particle" style="bottom: 20%; right: 25%; background: #373358; animation-delay: 1.5s;"></div>
    <div class="floating-particle" style="top: 40%; left: 15%; width: 6px; height: 6px; background: #46DE48; animation-delay: 0.5s;"></div>
    <div class="floating-particle" style="top: 70%; right: 10%; width: 14px; height: 14px; background: #DD3134; animation-delay: 2.5s;"></div>

    <!-- ============================================ -->
    <!-- HERO SECTION - SAFE POSTPARTUM               -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 120px) clamp(20px, 5vw, 10%) clamp(40px, 6vw, 80px); display: flex; flex-wrap: wrap; align-items: center; gap: clamp(30px, 5vw, 60px); position: relative; overflow: hidden;">
        
        <!-- Animated background elements - now visible -->
        <div style="position: absolute; top: 10%; left: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.08) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 20s infinite ease-in-out; display: block;"></div>
        <div style="position: absolute; bottom: 20%; right: -50px; width: 200px; height: 200px; border: 2px dashed #373358; border-radius: 40px; opacity: 0.1; transform: rotate(25deg); animation: gentleFloat 12s infinite ease-in-out; display: block;"></div>
        <div style="position: absolute; top: 60%; left: 5%; width: 100px; height: 100px; border: 2px dashed #91746E; border-radius: 30px; opacity: 0.05; transform: rotate(-15deg); animation: gentleFloat 10s infinite ease-in-out; animation-delay: 1s; display: block;"></div>

        <div style="flex: 1; min-width: min(100%, 320px); position: relative; z-index: 2; order: 1;" class="animate-fade-right">
            <div style="display: inline-flex; align-items: center; padding: clamp(10px, 2vw, 12px) clamp(20px, 3vw, 28px); background: linear-gradient(90deg, rgba(145,116,110,0.15), rgba(220,206,193,0.15)); color: #363558; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 800; margin-bottom: clamp(15px, 3vw, 25px); letter-spacing: 0.5px; backdrop-filter: blur(10px); border: 1px solid rgba(145,116,110,0.3); animation: borderPulse 3s infinite;">
                <span style="color: #91746E; margin-right: 8px; animation: gentleWave 2s infinite;"><i class="bi bi-balloon-heart"></i></span> 
                SAFE POSTPARTUM
            </div>

            <h1 style="font-size: clamp(32px, 6vw, 64px); color: #363558; margin: 0 0 clamp(15px, 3vw, 25px) 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                Nurturing the <span style="color: #91746E; position: relative; display: inline-block; animation: gentleFloat 5s infinite ease-in-out;">Bond</span> Beyond Birth
            </h1>

            <p style="font-size: clamp(16px, 3vw, 20px); color: #5a5a5a; line-height: 1.6; margin-bottom: clamp(25px, 4vw, 40px); max-width: 100%;">
                <strong style="color: #363558;">SafeMom Navigator's Newborn & Mother Care Program</strong> provides comprehensive postpartum support for both mothers and newborns during the critical fourth trimester and beyond. Our mission is to ensure a healthy transition into parenthood, with continuous guidance, monitoring, and education that empower families to thrive.
            </p>

            <div style="display: flex; gap: clamp(12px, 2vw, 20px); flex-wrap: wrap; margin-bottom: clamp(30px, 5vw, 40px);">
                <a href="#" style="background: #91746E; color: white; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 40px; font-weight: 800; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 8px 25px rgba(145,116,110,0.4); transition: all 0.3s ease; white-space: nowrap;"
                   onmouseover="this.style.background='#7A615B'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 35px rgba(145,116,110,0.5)'"
                   onmouseout="this.style.background='#91746E'; this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(145,116,110,0.4)'">
                    Learn More <span style="font-size: clamp(16px, 2.5vw, 20px); transition: transform 0.2s;" onmouseover="this.style.transform='translateX(5px)'" onmouseout="this.style.transform='translateX(0)'">→</span>
                </a>
                <a href="#" style="background: white; color: #363558; border: 2px solid #f0f0f0; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 40px; font-weight: 700; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 8px 20px rgba(0,0,0,0.05); transition: all 0.3s ease; white-space: nowrap;"
                   onmouseover="this.style.background='#f8f8f8'; this.style.borderColor='#91746E'; this.style.transform='translateY(-3px)'"
                   onmouseout="this.style.background='white'; this.style.borderColor='#f0f0f0'; this.style.transform='translateY(0)'">
                    <span style="color: #46DE48; font-size: clamp(14px, 2.5vw, 16px); animation: heartBeat 2s infinite;">▶</span> Watch Testimonial
                </a>
            </div>

            <!-- Quick Stats - Our Impact -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: clamp(15px, 4vw, 40px);">
                <div class="stat-card" style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); background: rgba(145,116,110,0.03); padding: 12px; border-radius: 15px; transition: all 0.3s ease;"
                     onmouseover="this.style.background='rgba(145,116,110,0.08)'"
                     onmouseout="this.style.background='rgba(145,116,110,0.03)'">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(145,116,110,0.1); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; color: #91746E; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-balloon-heart"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;" class="count-number">8,500+</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #5a5a5a; font-weight: 600;">Postpartum Follow-ups</div>
                    </div>
                </div>
                <div class="stat-card" style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); background: rgba(70,222,72,0.03); padding: 12px; border-radius: 15px; transition: all 0.3s ease;"
                     onmouseover="this.style.background='rgba(70,222,72,0.08)'"
                     onmouseout="this.style.background='rgba(70,222,72,0.03)'">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(70,222,72,0.1); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-heart-fill animate-heart"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;" class="count-number">92%</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #5a5a5a; font-weight: 600;">Breastfeeding Success</div>
                    </div>
                </div>
                <div class="stat-card" style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); background: rgba(145,116,110,0.03); padding: 12px; border-radius: 15px; transition: all 0.3s ease;"
                     onmouseover="this.style.background='rgba(145,116,110,0.08)'"
                     onmouseout="this.style.background='rgba(145,116,110,0.03)'">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(145,116,110,0.1); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; color: #91746E; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;" class="count-number">98%</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #5a5a5a; font-weight: 600;">Mother Satisfaction</div>
                    </div>
                </div>
            </div>
            
            <!-- Supporting text -->
            <p style="font-size: 14px; color: #5a5a5a; margin-top: 20px; font-style: italic; border-left: 3px solid #91746E; padding-left: 15px;">
                Through trained youth navigators, home visits, and digital tools, mothers are never alone after childbirth.
            </p>
        </div>

        <div style="flex: 1; min-width: min(100%, 320px); position: relative; z-index: 2; order: 2;" class="animate-fade-left">
            <div style="background: white; border-radius: clamp(20px, 4vw, 30px); padding: clamp(15px, 3vw, 25px); box-shadow: 0 20px 50px rgba(54,53,88,0.15); border: 1px solid #f0f0f0; overflow: hidden; position: relative; transition: all 0.4s ease;"
                 onmouseover="this.style.boxShadow='0 30px 70px rgba(54,53,88,0.2)'; this.style.transform='translateY(-5px)'"
                 onmouseout="this.style.boxShadow='0 20px 50px rgba(54,53,88,0.15)'; this.style.transform='translateY(0)'">
                
                <div style="position: relative; overflow: hidden; border-radius: clamp(15px, 3vw, 20px);">
                    <img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?auto=format&fit=crop&q=80&w=800"
                        style="width: 100%; height: auto; border-radius: clamp(15px, 3vw, 20px); margin-bottom: clamp(15px, 3vw, 20px); aspect-ratio: 4/3; object-fit: cover; transition: transform 0.7s ease;"
                        alt="Mother and newborn"
                        onmouseover="this.style.transform='scale(1.05)'"
                        onmouseout="this.style.transform='scale(1)'">
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; padding: clamp(15px, 3vw, 20px); background: rgba(145,116,110,0.05); border-radius: clamp(12px, 2vw, 15px); gap: 15px; transition: all 0.3s ease;">
                    <div style="min-width: 0;">
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #91746E; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Featured Mother Story</div>
                        <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 800; color: #363558;">Grace & Baby Joy</div>
                    </div>
                    <a href="#" style="color: #91746E; text-decoration: none; font-weight: 800; font-size: clamp(12px, 2vw, 14px); display: flex; align-items: center; gap: 5px; white-space: nowrap; transition: all 0.3s ease;"
                       onmouseover="this.style.color='#5a4a45'; this.style.gap='10px'"
                       onmouseout="this.style.color='#91746E'; this.style.gap='5px'">
                        Read Journey <span style="transition: transform 0.3s;">→</span>
                    </a>
                </div>
            </div>

            <!-- Floating Element - 6 Weeks Postpartum -->
            <div style="position: absolute; top: -20px; right: clamp(-15px, 2vw, -30px); background: #91746E; color: white; padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); box-shadow: 0 15px 30px rgba(145,116,110,0.3); width: clamp(140px, 25vw, 180px); z-index: 3; animation: gentleFloat 7s infinite ease-in-out;">
                <div style="font-size: clamp(24px, 4vw, 32px); font-weight: 800; text-align: center; margin-bottom: 5px;">6 WKS</div>
                <div style="font-size: clamp(10px, 1.8vw, 12px); opacity: 0.9; text-align: center; font-weight: 600;">Comprehensive Postpartum Care</div>
            </div>
            
            <!-- Promise Badge -->
            <div style="position: absolute; bottom: 30px; left: -15px; background: #373358; color: white; padding: 12px 25px; border-radius: 40px; font-size: 13px; font-weight: 700; box-shadow: 0 15px 30px rgba(55,51,88,0.3); border: 2px solid #46DE48; animation: gentleFloat 6s infinite ease-in-out; animation-delay: 1s; display: flex; align-items: center; gap: 8px;">
                <i class="bi bi-shield-check" style="color: #46DE48;"></i> Never Alone After Childbirth
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- HOLISTIC POSTPARTUM SERVICES - 6 CARDS       -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 10%); background: white; position: relative;">
        
        <!-- Animated Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.02; background-image: radial-gradient(circle at 25% 25%, #91746E 1px, transparent 1px); background-size: 50px 50px; animation: backgroundBreath 25s infinite ease-in-out; display: block;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            
            <div style="text-align: center; margin-bottom: clamp(30px, 6vw, 60px); padding: 0 clamp(10px, 3vw, 0);" class="animate-fade-up">
                <div style="display: inline-flex; align-items: center; padding: 10px 30px; background: rgba(145,116,110,0.1); color: #91746E; border-radius: 30px; font-size: 13px; font-weight: 800; margin-bottom: 20px; border: 1px solid rgba(145,116,110,0.2);">
                    <span style="margin-right: 10px;">🛡️</span> HOLISTIC POSTPARTUM SERVICES
                </div>
                <h2 style="font-size: clamp(28px, 5vw, 48px); color: #363558; margin-bottom: clamp(15px, 3vw, 20px); font-weight: 800; line-height: 1.2;">
                    Comprehensive <span style="color: #91746E;">Mother & Newborn</span> Care
                </h2>
                <p style="color: #5a5a5a; max-width: 100%; margin: 0 auto; font-size: clamp(16px, 3vw, 18px); line-height: 1.6;">
                    SafeMom Navigator combines community-led support and digital health innovation to address the physical, emotional, and developmental needs of mothers and babies.
                </p>
            </div>

            <!-- 6 Service Cards Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 340px), 1fr)); gap: clamp(20px, 4vw, 30px); padding: 0 clamp(10px, 3vw, 0);">
                
                <!-- 1. Newborn Health Checks -->
                <div class="service-card" style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 35px); box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #DD3134; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.1s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(24px, 4vw, 32px); transition: all 0.4s ease; box-shadow: 0 10px 25px rgba(221,49,52,0.2);">
                            <i class="bi bi-clipboard2-pulse"></i>
                        </div>
                        <h3 style="font-size: clamp(20px, 3vw, 24px); color: #363558; margin: 0; font-weight: 800;">Newborn Health Checks</h3>
                    </div>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Continuous monitoring of growth, feeding patterns, and developmental milestones. Early detection of health concerns for timely intervention.
                    </p>
                    <div style="background: rgba(221,49,52,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #373358; font-weight: 700; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.5px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134; font-weight: 800;">✓</span> Growth monitoring</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134; font-weight: 800;">✓</span> Feeding assessment</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134; font-weight: 800;">✓</span> Developmental milestone checks</li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Breastfeeding Support -->
                <div class="service-card" style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 35px); box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #46DE48; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.2s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); background: linear-gradient(135deg, #46DE48, #80E681); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(24px, 4vw, 32px); transition: all 0.4s ease; box-shadow: 0 10px 25px rgba(70,222,72,0.2);">
                            <i class="bi bi-droplet"></i>
                        </div>
                        <h3 style="font-size: clamp(20px, 3vw, 24px); color: #363558; margin: 0; font-weight: 800;">Breastfeeding Support</h3>
                    </div>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Expert guidance for proper latching, feeding schedules, and addressing challenges. Ensuring optimal nutrition and mother-baby bonding.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #373358; font-weight: 700; margin-bottom: 12px; text-transform: uppercase;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48; font-weight: 800;">✓</span> Latching techniques</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48; font-weight: 800;">✓</span> Feeding schedules</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48; font-weight: 800;">✓</span> Solutions to common challenges</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Maternal Mental Health Screening -->
                <div class="service-card" style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 35px); box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #373358; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.3s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); background: #373358; border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(24px, 4vw, 32px); transition: all 0.4s ease; box-shadow: 0 10px 25px rgba(55,51,88,0.2);">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h3 style="font-size: clamp(20px, 3vw, 24px); color: #363558; margin: 0; font-weight: 800;">Maternal Mental Health</h3>
                    </div>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Early detection of postpartum depression and anxiety using validated tools. Specialist referrals for mothers needing professional support.
                    </p>
                    <div style="background: rgba(55,51,88,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #373358; font-weight: 700; margin-bottom: 12px; text-transform: uppercase;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #373358; font-weight: 800;">✓</span> Depression screening</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #373358; font-weight: 800;">✓</span> Anxiety assessment</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #373358; font-weight: 800;">✓</span> Specialist referrals</li>
                        </ul>
                    </div>
                </div>

                <!-- 4. Immunisation Support -->
                <div class="service-card" style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 35px); box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #91746E; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.4s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(24px, 4vw, 32px); transition: all 0.4s ease; box-shadow: 0 10px 25px rgba(145,116,110,0.2);">
                            <i class="bi bi-eyedropper"></i>
                        </div>
                        <h3 style="font-size: clamp(20px, 3vw, 24px); color: #363558; margin: 0; font-weight: 800;">Immunisation Support</h3>
                    </div>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        SMS reminders and scheduling assistance to ensure infants receive timely vaccinations. Monitoring and follow-up for vaccine adherence.
                    </p>
                    <div style="background: rgba(145,116,110,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #373358; font-weight: 700; margin-bottom: 12px; text-transform: uppercase;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #91746E; font-weight: 800;">✓</span> SMS reminders</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #91746E; font-weight: 800;">✓</span> Vaccination schedule planning</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #91746E; font-weight: 800;">✓</span> Follow-up support</li>
                        </ul>
                    </div>
                </div>

                <!-- 5. Mother Recovery Care -->
                <div class="service-card" style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 35px); box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #DD3134; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.5s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(24px, 4vw, 32px); transition: all 0.4s ease; box-shadow: 0 10px 25px rgba(221,49,52,0.2);">
                            <i class="bi bi-bandaid"></i>
                        </div>
                        <h3 style="font-size: clamp(20px, 3vw, 24px); color: #363558; margin: 0; font-weight: 800;">Mother Recovery Care</h3>
                    </div>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Guidance on physical recovery, wound care, nutrition, and overall postpartum health. Personalised plans to ensure complete healing and wellness.
                    </p>
                    <div style="background: rgba(221,49,52,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #373358; font-weight: 700; margin-bottom: 12px; text-transform: uppercase;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134; font-weight: 800;">✓</span> Wound care</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134; font-weight: 800;">✓</span> Nutrition counseling</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134; font-weight: 800;">✓</span> Recovery tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- 6. Family Planning & Reproductive Health -->
                <div class="service-card" style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 35px); box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-bottom: 6px solid #46DE48; transition: all 0.4s ease; animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.6s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div class="service-icon" style="width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); background: linear-gradient(135deg, #46DE48, #80E681); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(24px, 4vw, 32px); transition: all 0.4s ease; box-shadow: 0 10px 25px rgba(70,222,72,0.2);">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3 style="font-size: clamp(20px, 3vw, 24px); color: #363558; margin: 0; font-weight: 800;">Family Planning</h3>
                    </div>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Counseling and support for postpartum contraception. Empowering mothers to make informed decisions about birth spacing.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #373358; font-weight: 700; margin-bottom: 12px; text-transform: uppercase;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48; font-weight: 800;">✓</span> Contraception options</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48; font-weight: 800;">✓</span> Spacing guidance</li>
                            <li style="padding: clamp(4px, 1vw, 6px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48; font-weight: 800;">✓</span> Informed decision support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- YOUR 6-WEEK POSTPARTUM JOURNEY - TIMELINE    -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 10%); background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); text-align: center; position: relative;">
        
        <!-- Animated background elements -->
        <div style="position: absolute; top: 10%; left: 5%; width: 150px; height: 150px; border: 2px dashed #91746E; border-radius: 30px; opacity: 0.1; transform: rotate(15deg); animation: gentleFloat 14s infinite ease-in-out; display: block;"></div>
        <div style="position: absolute; bottom: 10%; right: 5%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(145,116,110,0.05) 0%, rgba(145,116,110,0) 70%); animation: backgroundBreath 18s infinite ease-in-out; display: block;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            
            <div style="display: inline-flex; align-items: center; background: rgba(145,116,110,0.1); padding: clamp(12px, 2vw, 15px) clamp(20px, 3vw, 30px); border-radius: 30px; color: #363558; font-size: clamp(12px, 2.5vw, 14px); font-weight: 800; margin-bottom: clamp(15px, 3vw, 25px); gap: 8px; backdrop-filter: blur(5px); border: 1px solid rgba(145,116,110,0.3); animation: borderPulse 3s infinite;">
                <span style="color: #91746E; font-size: clamp(16px, 3vw, 20px);">
                    <i class="bi bi-calendar-heart"></i>
                </span> YOUR 6-WEEK POSTPARTUM JOURNEY
            </div>

            <h2 style="font-size: clamp(28px, 5vw, 48px); color: #363558; margin-bottom: clamp(15px, 3vw, 20px); font-weight: 800; line-height: 1.2;" class="animate-fade-up">
                Structured <span style="color: #91746E;">Support</span> at Every Stage
            </h2>

            <p style="color: #5a5a5a; max-width: 100%; margin: 0 auto clamp(30px, 6vw, 60px) auto; line-height: 1.6; font-size: clamp(16px, 3vw, 18px); padding: 0 clamp(10px, 3vw, 0);" class="animate-fade-up">
                Our program follows a structured timeline to support mothers and newborns through the critical postpartum period.
            </p>

            <!-- Timeline - 3 Phases -->
            <div style="position: relative; padding: clamp(30px, 6vw, 60px) 0 clamp(20px, 4vw, 40px) 0;">
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 320px), 1fr)); gap: clamp(20px, 4vw, 40px); padding: 0 clamp(10px, 3vw, 0);">
                    
                    <!-- Phase 1: Days 1-21 - Initial Recovery -->
                    <div class="timeline-card" style="text-align: center; position: relative; z-index: 2; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.1s;">
                        <div style="width: clamp(80px, 15vw, 100px); height: clamp(80px, 15vw, 100px); background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: clamp(20px, 3vw, 25px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 4vw, 30px) auto; font-size: clamp(32px, 6vw, 40px); position: relative; z-index: 3; box-shadow: 0 15px 30px rgba(221,49,52,0.3); border: 4px solid white; transition: all 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 25px 50px rgba(221,49,52,0.4)'"
                             onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 15px 30px rgba(221,49,52,0.3)'">
                            <i class="bi bi-house-heart"></i>
                        </div>
                        <div style="background: white; padding: clamp(20px, 4vw, 30px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-left: 5px solid #DD3134; height: 100%; transition: all 0.4s ease;">
                            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 16px; border-radius: 20px; font-size: clamp(10px, 2vw, 12px); font-weight: 800; margin: 0 auto clamp(15px, 3vw, 20px) auto; letter-spacing: 0.5px;">
                                DAYS 1–21
                            </div>
                            <h4 style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin-bottom: clamp(12px, 2vw, 15px); color: #363558; line-height: 1.3;">
                                Initial Recovery Phase</h4>
                            <div style="background: rgba(221,49,52,0.03); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px); text-align: left;">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #DD3134; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Post-birth care education: cord care, feeding guidance, and warning sign recognition</span>
                                    </li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #DD3134; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Mental health assessment and early intervention</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Phase 2: Weeks 1-4 - Regular Home Visits -->
                    <div class="timeline-card" style="text-align: center; position: relative; z-index: 2; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.3s;">
                        <div style="width: clamp(80px, 15vw, 100px); height: clamp(80px, 15vw, 100px); background: linear-gradient(135deg, #373358, #A3B4E0); border-radius: clamp(20px, 3vw, 25px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 4vw, 30px) auto; font-size: clamp(32px, 6vw, 40px); position: relative; z-index: 3; box-shadow: 0 15px 30px rgba(55,51,88,0.3); border: 4px solid white; transition: all 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 25px 50px rgba(55,51,88,0.4)'"
                             onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 15px 30px rgba(55,51,88,0.3)'">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div style="background: white; padding: clamp(20px, 4vw, 30px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-left: 5px solid #373358; height: 100%; transition: all 0.4s ease;">
                            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(55,51,88,0.1); color: #373358; padding: 6px 16px; border-radius: 20px; font-size: clamp(10px, 2vw, 12px); font-weight: 800; margin: 0 auto clamp(15px, 3vw, 20px) auto; letter-spacing: 0.5px;">
                                WEEKS 1–4
                            </div>
                            <h4 style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin-bottom: clamp(12px, 2vw, 15px); color: #363558; line-height: 1.3;">
                                Regular Home Visits</h4>
                            <div style="background: rgba(55,51,88,0.03); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px); text-align: left;">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #373358; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Baby weight checks and growth monitoring</span>
                                    </li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #373358; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Feeding evaluation and breastfeeding support</span>
                                    </li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #373358; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Mental health screening and counselling sessions</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Phase 3: Weeks 4-6+ - Long-Term Wellness -->
                    <div class="timeline-card" style="text-align: center; position: relative; z-index: 2; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.5s;">
                        <div style="width: clamp(80px, 15vw, 100px); height: clamp(80px, 15vw, 100px); background: linear-gradient(135deg, #46DE48, #80E681); border-radius: clamp(20px, 3vw, 25px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 4vw, 30px) auto; font-size: clamp(32px, 6vw, 40px); position: relative; z-index: 3; box-shadow: 0 15px 30px rgba(70,222,72,0.3); border: 4px solid white; transition: all 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 25px 50px rgba(70,222,72,0.4)'"
                             onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 15px 30px rgba(70,222,72,0.3)'">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <div style="background: white; padding: clamp(20px, 4vw, 30px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-left: 5px solid #46DE48; height: 100%; transition: all 0.4s ease;">
                            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 16px; border-radius: 20px; font-size: clamp(10px, 2vw, 12px); font-weight: 800; margin: 0 auto clamp(15px, 3vw, 20px) auto; letter-spacing: 0.5px;">
                                WEEKS 4–6+
                            </div>
                            <h4 style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin-bottom: clamp(12px, 2vw, 15px); color: #363558; line-height: 1.3;">
                                Long-Term Wellness</h4>
                            <div style="background: rgba(70,222,72,0.03); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px); text-align: left;">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 14px); color: #363558;">
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #46DE48; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Postpartum checkups and follow-up appointments</span>
                                    </li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #46DE48; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Vaccination milestone tracking and reminders</span>
                                    </li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;">
                                        <span style="color: #46DE48; font-size: 16px; font-weight: 800;">•</span> 
                                        <span>Family planning counselling and ongoing support</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Direction -->
                <div style="text-align: center; margin-top: clamp(30px, 6vw, 50px);" class="animate-fade-up">
                    <div style="display: inline-flex; align-items: center; gap: clamp(10px, 2vw, 15px); background: rgba(54,53,88,0.1); padding: clamp(10px, 2vw, 12px) clamp(20px, 3vw, 30px); border-radius: 30px;">
                        <div style="font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; color: #363558;">POSTPARTUM CARE JOURNEY</div>
                        <div style="display: flex; align-items: center; gap: 8px; color: #91746E;">
                            <span style="animation: arrowSlide 1s infinite;">→</span>
                            <span style="animation: arrowSlide 1s infinite; animation-delay: 0.2s;">→</span>
                            <span style="animation: arrowSlide 1s infinite; animation-delay: 0.4s;">→</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- MENTAL HEALTH MATTERS - FOCUS SECTION        -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 10%); background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
        
        <!-- Animated background elements -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: repeating-linear-gradient(45deg, white 1px, transparent 1px, transparent 30px); background-size: 60px 60px; animation: backgroundBreath 30s infinite linear;"></div>
        <div style="position: absolute; top: 20%; right: 5%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.1) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 16s infinite ease-in-out;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="display: flex; flex-wrap: wrap; gap: clamp(30px, 6vw, 80px); align-items: center;">
                
                <div style="flex: 1; min-width: min(100%, 320px); position: relative; order: 2;" class="animate-fade-left">
                    <div style="position: relative; overflow: hidden; border-radius: clamp(20px, 4vw, 30px); box-shadow: 0 20px 40px rgba(0,0,0,0.3); transition: all 0.4s ease;"
                         onmouseover="this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)'; this.style.transform='translateY(-5px)'"
                         onmouseout="this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)'; this.style.transform='translateY(0)'">
                        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&q=80&w=800"
                            style="width: 100%; border-radius: clamp(20px, 4vw, 30px); aspect-ratio: 4/3; object-fit: cover; transition: transform 0.7s ease; display: block;"
                            alt="Mother's mental health"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>

                    <!-- Floating Stat - 1 in 7 -->
                    <div style="position: absolute; bottom: -20px; left: clamp(-20px, 3vw, -40px); background: #46DE48; color: white; padding: clamp(15px, 3vw, 25px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(70,222,72,0.4); width: clamp(180px, 30vw, 220px); z-index: 3; animation: gentleFloat 7s infinite ease-in-out;">
                        <div style="font-size: clamp(32px, 6vw, 42px); font-weight: 900; text-align: center; line-height: 1; letter-spacing: -2px;">1 in 7</div>
                        <div style="font-size: clamp(10px, 2vw, 12px); opacity: 0.95; text-align: center; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">
                            MOTHERS AFFECTED</div>
                        <div style="font-size: clamp(9px, 1.5vw, 10px); opacity: 0.8; text-align: center; margin-top: 5px;">By Postpartum Depression</div>
                    </div>
                </div>

                <div style="flex: 1; min-width: min(100%, 320px); order: 1;" class="animate-fade-right">
                    <div style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.15); padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 25px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 800; margin-bottom: clamp(15px, 3vw, 25px); backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.3); animation: borderPulse 3s infinite;">
                        <span style="color: #46DE48; margin-right: 8px; font-size: 18px; animation: heartBeat 2s infinite;">🧠</span> 
                        MENTAL HEALTH MATTERS
                    </div>

                    <h2 style="font-size: clamp(28px, 5vw, 48px); color: white; margin-bottom: clamp(15px, 3vw, 25px); font-weight: 800; line-height: 1.2;">
                        Supporting <span style="color: #46DE48;">Mother's</span> Mental Well-being
                    </h2>

                    <p style="font-size: clamp(16px, 3vw, 18px); opacity: 0.95; line-height: 1.6; margin-bottom: clamp(25px, 4vw, 40px);">
                        Postpartum depression affects <strong style="color: #46DE48;">1 in 7 mothers</strong> yet often goes undiagnosed. Our navigators are specially trained to recognize early warning signs and provide compassionate support.
                    </p>

                    <!-- Mental Health Services Grid -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: clamp(15px, 3vw, 20px);">
                        
                        <div style="background: rgba(255,255,255,0.08); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease;"
                             onmouseover="this.style.background='rgba(70,222,72,0.15)'; this.style.transform='translateY(-5px)'"
                             onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 20px); font-weight: 800;">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 800;">Regular Screening</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.9;">Validated screening tools during home visits</div>
                        </div>

                        <div style="background: rgba(255,255,255,0.08); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease;"
                             onmouseover="this.style.background='rgba(70,222,72,0.15)'; this.style.transform='translateY(-5px)'"
                             onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 20px); font-weight: 800;">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 800;">Specialist Referrals</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.9;">Pathways to mental health professionals</div>
                        </div>

                        <div style="background: rgba(255,255,255,0.08); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease;"
                             onmouseover="this.style.background='rgba(70,222,72,0.15)'; this.style.transform='translateY(-5px)'"
                             onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 20px); font-weight: 800;">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 800;">Peer Support</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.9;">Mother-to-mother support groups</div>
                        </div>

                        <div style="background: rgba(255,255,255,0.08); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease;"
                             onmouseover="this.style.background='rgba(70,222,72,0.15)'; this.style.transform='translateY(-5px)'"
                             onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 20px); font-weight: 800;">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 800;">Family Education</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.9;">Teaching family members to recognize warning signs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- REAL MOTHER STORIES - GRACE & BABY JOY       -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 10%); background: white; position: relative;">
        
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.02; background-image: radial-gradient(circle at 80% 20%, #91746E 1px, transparent 1px); background-size: 60px 60px; animation: backgroundBreath 25s infinite ease-in-out;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1000px; margin: 0 auto;">
            
            <div style="text-align: center; margin-bottom: 40px;" class="animate-fade-up">
                <div style="display: inline-flex; align-items: center; gap: 10px; background: rgba(145,116,110,0.1); padding: 12px 30px; border-radius: 40px; margin-bottom: 20px;">
                    <span style="color: #91746E; font-size: 20px;"><i class="bi bi-quote"></i></span>
                    <span style="color: #363558; font-size: 14px; font-weight: 800; letter-spacing: 1px;">REAL MOTHER STORIES</span>
                </div>
            </div>
            
            <div class="story-card" style="background: linear-gradient(135deg, #f9f5f0 0%, white 100%); border-radius: 30px; padding: clamp(30px, 5vw, 50px); box-shadow: 0 20px 50px rgba(145,116,110,0.1); border: 1px solid rgba(145,116,110,0.2); position: relative; overflow: hidden; animation: scaleIn 0.8s ease forwards;">
                
                <!-- Decorative quote marks -->
                <div style="position: absolute; top: 20px; left: 20px; font-size: 120px; color: rgba(145,116,110,0.1); font-family: Georgia, serif; line-height: 1;">"</div>
                
                <div style="display: flex; flex-wrap: wrap; gap: 30px; align-items: center; position: relative; z-index: 2;">
                    
                    <div style="flex: 0 0 120px;">
                        <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; border: 5px solid white; box-shadow: 0 15px 30px rgba(145,116,110,0.2); margin: 0 auto; transition: all 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 20px 40px rgba(145,116,110,0.3)'"
                             onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 15px 30px rgba(145,116,110,0.2)'">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&q=80&w=400" 
                                 style="width: 100%; height: 100%; object-fit: cover;"
                                 alt="Grace & Baby Joy">
                        </div>
                    </div>
                    
                    <div style="flex: 1;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                            <span style="background: #91746E; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 800; text-transform: uppercase;">Featured Story</span>
                            <span style="color: #91746E; font-size: 20px;">❤️</span>
                        </div>
                        
                        <p style="font-size: clamp(16px, 3vw, 20px); color: #363558; line-height: 1.7; font-style: italic; margin-bottom: 20px; font-weight: 500;">
                            "After giving birth, I felt overwhelmed and unsure how to care for my baby. My SafeMom navigator visited me at home, guided me on breastfeeding, monitored my baby's growth, and checked my mental health. I felt supported every step of the way. Today, my baby is thriving, and I feel confident as a mother."
                        </p>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-size: 18px; font-weight: 800; color: #363558;">Grace & Baby Joy</div>
                                <div style="font-size: 13px; color: #91746E; font-weight: 600;">SafePostpartum Program Graduate</div>
                            </div>
                            <a href="#" style="background: #91746E; color: white; text-decoration: none; padding: 12px 25px; border-radius: 40px; font-weight: 700; font-size: 14px; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;"
                               onmouseover="this.style.background='#5a4a45'; this.style.transform='translateX(5px)'"
                               onmouseout="this.style.background='#91746E'; this.style.transform='translateX(0)'">
                                Read Grace's Journey <span style="font-size: 16px;">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Why Choose Us - Key Points -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 50px;">
                <div style="display: flex; align-items: center; gap: 12px; background: white; padding: 15px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); transition: all 0.3s ease;"
                     onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 10px 25px rgba(145,116,110,0.1)'"
                     onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.03)'">
                    <div style="width: 40px; height: 40px; background: rgba(145,116,110,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #91746E; font-size: 20px;">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div style="font-size: 14px; font-weight: 600; color: #363558;">Comprehensive Support</div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px; background: white; padding: 15px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); transition: all 0.3s ease;"
                     onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 10px 25px rgba(145,116,110,0.1)'"
                     onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.03)'">
                    <div style="width: 40px; height: 40px; background: rgba(145,116,110,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #91746E; font-size: 20px;">
                        <i class="bi bi-people"></i>
                    </div>
                    <div style="font-size: 14px; font-weight: 600; color: #363558;">Community-Powered</div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px; background: white; padding: 15px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); transition: all 0.3s ease;"
                     onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 10px 25px rgba(145,116,110,0.1)'"
                     onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.03)'">
                    <div style="width: 40px; height: 40px; background: rgba(145,116,110,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #91746E; font-size: 20px;">
                        <i class="bi bi-phone"></i>
                    </div>
                    <div style="font-size: 14px; font-weight: 600; color: #363558;">Digital Health Integration</div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px; background: white; padding: 15px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); transition: all 0.3s ease;"
                     onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 10px 25px rgba(145,116,110,0.1)'"
                     onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.03)'">
                    <div style="width: 40px; height: 40px; background: rgba(145,116,110,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #91746E; font-size: 20px;">
                        <i class="bi bi-heart"></i>
                    </div>
                    <div style="font-size: 14px; font-weight: 600; color: #363558;">Mental Health Focus</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- CALL TO ACTION - SUPPORT SAFEPOSTPARTUM      -->
    <!-- ============================================ -->
    <section style="padding: clamp(40px, 8vw, 120px) clamp(20px, 5vw, 10%); text-align: center; background: linear-gradient(135deg, #91746E 0%, #A58A82 100%); color: white; position: relative; overflow: hidden;">
        
        <!-- Animated background elements -->
        <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%); animation: backgroundBreath 15s infinite ease-in-out;"></div>
        <div style="position: absolute; bottom: -50px; left: -50px; width: 250px; height: 250px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.1) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 18s infinite ease-in-out; animation-delay: 2s;"></div>
        
        <!-- Floating hearts -->
        <div style="position: absolute; top: 20%; left: 15%; font-size: 24px; opacity: 0.2; animation: gentleFloat 7s infinite;">❤️</div>
        <div style="position: absolute; bottom: 25%; right: 10%; font-size: 30px; opacity: 0.2; animation: gentleFloat 9s infinite; animation-delay: 1s;">❤️</div>
        <div style="position: absolute; top: 60%; left: 10%; font-size: 20px; opacity: 0.15; animation: gentleFloat 8s infinite; animation-delay: 0.5s;">❤️</div>
        
        <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto;" class="animate-fade-up">
            
            <div style="display: inline-flex; align-items: center; gap: 12px; background: rgba(255,255,255,0.15); padding: 15px 35px; border-radius: 50px; margin-bottom: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); animation: borderPulse 3s infinite;">
                <span style="color: white; font-size: 22px; animation: heartBeat 2s infinite;">👶</span>
                <span style="font-size: 15px; font-weight: 800; letter-spacing: 2px; color: white;">YOUR NEWBORN DESERVES THE BEST START</span>
            </div>

            <h2 style="font-size: clamp(32px, 6vw, 56px); font-weight: 800; margin: 0 0 20px 0; line-height: 1.2; color: white;">
                The Journey <span style="color: #46DE48;">Continues</span> After Birth
            </h2>

            <p style="font-size: clamp(18px, 3vw, 22px); opacity: 0.95; max-width: 700px; margin: 0 auto 30px auto; line-height: 1.6; font-weight: 500;">
                Your newborn deserves the best start in life, and you deserve personalised support, education, and care during the postpartum period.
            </p>
            
            <p style="font-size: 16px; opacity: 0.9; max-width: 600px; margin: 0 auto 40px auto; line-height: 1.6;">
                Support our Newborn & Mother Care Program to ensure more mothers and newborns receive the care they need during the critical first weeks of life.
            </p>

            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="#" style="background: #46DE48; color: #363558; text-decoration: none; padding: 20px 50px; border-radius: 60px; font-weight: 900; font-size: 18px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 40px rgba(70,222,72,0.3); transition: all 0.3s ease;"
                   onmouseover="this.style.background='#80E681'; this.style.transform='translateY(-5px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(70,222,72,0.5)'"
                   onmouseout="this.style.background='#46DE48'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 40px rgba(70,222,72,0.3)'">
                    <i class="bi bi-balloon-heart"></i> Support SafePostpartum
                </a>
                <a href="#" style="background: rgba(255,255,255,0.15); color: white; text-decoration: none; padding: 20px 50px; border-radius: 60px; font-weight: 700; font-size: 18px; display: inline-flex; align-items: center; gap: 12px; border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px); transition: all 0.3s ease;"
                   onmouseover="this.style.background='rgba(255,255,255,0.25)'; this.style.borderColor='#46DE48'; this.style.transform='translateY(-5px)'"
                   onmouseout="this.style.background='rgba(255,255,255,0.15)'; this.style.borderColor='rgba(255,255,255,0.3)'; this.style.transform='translateY(0)'">
                    <i class="bi bi-info-circle"></i> Learn More
                </a>
            </div>

            <!-- Impact Stats Footer -->
            <div style="display: flex; justify-content: center; gap: 40px; margin-top: 60px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.2);">
                <div style="text-align: center;">
                    <div style="font-size: 24px; font-weight: 800; color: white;">8,500+</div>
                    <div style="font-size: 13px; opacity: 0.9;">Postpartum Follow-ups</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 24px; font-weight: 800; color: #46DE48;">92%</div>
                    <div style="font-size: 13px; opacity: 0.9;">Breastfeeding Success</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 24px; font-weight: 800; color: white;">98%</div>
                    <div style="font-size: 13px; opacity: 0.9;">Mother Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection