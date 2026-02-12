@extends('layouts.apps')

@section('content')

<style>
    /* ---------- SMOOTH ANIMATIONS - ADDED DYNAMIC MOTION ---------- */
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
        0% { transform: scale(1); }
        50% { transform: scale(1.05); color: #DD3134; }
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
    
    @keyframes iconRotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
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
    
    .count-number {
        animation: countPulse 3s infinite ease-in-out;
    }
    
    .hover-lift {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 60px rgba(54,53,88,0.15);
    }
    
    .step-card {
        transition: all 0.4s ease;
    }
    
    .step-card:hover {
        transform: translateY(-10px);
    }
    
    .step-card:hover .step-icon {
        transform: scale(1.1);
        box-shadow: 0 20px 40px rgba(221,49,52,0.4);
    }
    
    .stat-card {
        transition: all 0.3s ease;
    }
    
    .stat-card:hover {
        transform: scale(1.02);
        box-shadow: 0 25px 60px rgba(54,53,88,0.1);
    }
    
    .stat-card:hover .stat-number {
        color: #DD3134;
    }
    
    .delay-badge {
        transition: all 0.3s ease;
    }
    
    .step-card:hover .delay-badge {
        background: rgba(221,49,52,0.25);
        transform: scale(1.05);
    }
    
    .bg-decorative {
        animation: backgroundBreath 12s infinite ease-in-out;
    }
</style>

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%);">

    <!-- ============================================ -->
    <!-- HERO SECTION - SAFE DELIVERY                -->
    <!-- ============================================ -->
    <section style="padding: clamp(80px, 10vh, 120px) 5%; background: #ffffff; position: relative; overflow: hidden; font-family: 'Inter', system-ui, -apple-system, sans-serif;">
        
        <!-- Animated background elements -->
        <div style="position: absolute; top: 10%; right: -5%; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%); animation: backgroundBreath 15s infinite ease-in-out; pointer-events: none;"></div>
        <div style="position: absolute; bottom: 5%; left: -2%; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 18s infinite ease-in-out; animation-delay: 2s; pointer-events: none;"></div>
        
        <!-- Decorative dots -->
        <div style="position: absolute; top: 20%; left: 10%; width: 6px; height: 6px; background: #DD3134; border-radius: 50%; opacity: 0.3; animation: gentleFloat 4s infinite ease-in-out;"></div>
        <div style="position: absolute; top: 60%; left: 15%; width: 8px; height: 8px; background: #46DE48; border-radius: 50%; opacity: 0.3; animation: gentleFloat 5s infinite ease-in-out; animation-delay: 1s;"></div>
        <div style="position: absolute; bottom: 30%; right: 12%; width: 10px; height: 10px; background: #373358; border-radius: 50%; opacity: 0.2; animation: gentleFloat 7s infinite ease-in-out; animation-delay: 0.5s;"></div>

        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 60px; position: relative; z-index: 2;">
            
            <!-- Left Content -->
            <div style="flex: 1.2; min-width: 320px;" class="animate-fade-right">
                <div style="display: inline-flex; align-items: center; padding: 10px 24px; background: rgba(221,49,52,0.08); color: #DD3134; border-radius: 100px; font-size: 13px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; border: 1px solid rgba(221,49,52,0.2); animation: borderPulse 3s infinite ease-in-out;">
                    <i class="fa-solid fa-bell" style="margin-right: 10px; font-size: 16px;"></i>
 SAFE DELIVERY PROGRAM
                </div>

                <h1 style="font-size: clamp(40px, 6vw, 64px); color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -2px; line-height: 1.1;">
                    When Every <span style="color: #DD3134; position: relative; display: inline-block; animation: gentleFloat 5s infinite ease-in-out;">Minute</span> Counts
                </h1>

                <p style="font-size: 19px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px; max-width: 580px; opacity: 0.9;">
                    SafeMom Navigator's Safe Delivery program is a <strong style="color: #363558;">community-powered, digital health initiative</strong> designed to ensure that every mother has access to timely, lifesaving support during pregnancy, labour, and postpartum recovery.
                </p>

                <div style="background: linear-gradient(135deg, #363558 0%, #252440 100%); color: white; border-radius: 30px; padding: clamp(25px, 5vw, 40px); max-width: 520px; box-shadow: 0 30px 60px rgba(54,53,88,0.2); transform: translateY(0); transition: transform 0.4s ease, box-shadow 0.4s ease;" 
                     onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 40px 80px rgba(54,53,88,0.3)'"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 30px 60px rgba(54,53,88,0.2)'">
                    
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                        <div style="width: 65px; height: 65px; background: #DD3134; border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 30px; box-shadow: 0 10px 20px rgba(221,49,52,0.3; animation: pulseGlow 3s infinite ease-in-out;">
                            <i class="bi bi-phone-vibrate"></i>
                        </div>
                        <div>
                            <div style="font-size: 12px; opacity: 0.7; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 4px;">24/7 Emergency Helpline</div>
                            <div style="font-size: clamp(24px, 4vw, 32px); font-weight: 800; letter-spacing: -0.5px;">+256 700 123 456</div>
                        </div>
                    </div>

                    <div style="display: flex; flex-wrap: wrap; gap: 15px;">
                        <a href="tel:+256700123456" style="flex: 1; min-width: 160px; background: #DD3134; color: white; text-decoration: none; padding: 18px; border-radius: 18px; font-weight: 800; font-size: 15px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px; transition: 0.3s;"
                           onmouseover="this.style.background='#b8272a'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 25px rgba(221,49,52,0.4)'"
                           onmouseout="this.style.background='#DD3134'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="sms:+256700123456" style="flex: 1; min-width: 160px; background: rgba(255,255,255,0.1); color: white; text-decoration: none; padding: 18px; border-radius: 18px; font-weight: 700; font-size: 15px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px; border: 1px solid rgba(255,255,255,0.2); transition: 0.3s;"
                           onmouseover="this.style.background='rgba(255,255,255,0.2)'; this.style.borderColor='#46DE48'; this.style.transform='translateY(-3px)'"
                           onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='rgba(255,255,255,0.2)'; this.style.transform='translateY(0)'">
                            <i class="bi bi-chat-dots-fill"></i> SMS Alert
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Content - Image with animations -->
            <div style="flex: 1; min-width: 320px; position: relative; display: flex; justify-content: center;" class="animate-fade-left">
                <div style="position: relative; width: 100%; max-width: 500px;">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&q=80&w=800"
                         alt="Safe Delivery Support"
                         style="width: 100%; height: auto; border-radius: 40px; box-shadow: 0 40px 100px rgba(54,53,88,0.15); display: block; transition: transform 0.7s ease;"
                         onmouseover="this.style.transform='scale(1.02)'"
                         onmouseout="this.style.transform='scale(1)'">

                    <div style="position: absolute; top: -20px; right: -15px; background: linear-gradient(135deg, #46DE48, #36b838); color: white; padding: 20px; border-radius: 24px; box-shadow: 0 20px 40px rgba(70,222,72,0.25); width: 160px; text-align: center; animation: gentleFloat 6s infinite ease-in-out;">
                        <div style="font-size: 38px; font-weight: 900; line-height: 1;" class="count-number">98%</div>
                        <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; margin-top: 4px;">Facility Births</div>
                    </div>

                    <div style="position: absolute; bottom: -20px; left: -15px; background: white; padding: 20px; border-radius: 24px; box-shadow: 0 20px 50px rgba(0,0,0,0.1); width: 220px; border: 1px solid #f0f0f0; animation: gentleFloat 7s infinite ease-in-out; animation-delay: 1s;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="position: relative;">
                                <div style="width: 45px; height: 45px; background: #FFF1F1; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 20px;">
                                    <i class="bi bi-lightning-fill"></i>
                                </div>
                                <div style="position: absolute; top: -2px; right: -2px; width: 14px; height: 14px; background: #46DE48; border-radius: 50%; border: 3px solid white; animation: pulseGlow 2s infinite;"></div>
                            </div>
                            <div>
                                <div style="font-size: 11px; color: #373358; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Live Response</div>
                                <div style="font-size: 16px; font-weight: 800; color: #363558;">System Active 24/7</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Promise Badge -->
                    <div style="position: absolute; bottom: 40%; right: -10px; background: #363558; color: white; padding: 12px 25px; border-radius: 40px; font-size: 14px; font-weight: 700; box-shadow: 0 15px 30px rgba(54,53,88,0.3); border: 2px solid #46DE48; animation: gentleFloat 5s infinite ease-in-out; animation-delay: 0.5s;">
                        <i class="bi bi-shield-check" style="color: #46DE48; margin-right: 8px;"></i> A Promise to Every Mother
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- WHY SAFE DELIVERY MATTERS                    -->
    <!-- ============================================ -->
    <section style="padding: 80px 5%; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); position: relative;">
        
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.02; background-image: radial-gradient(circle at 10% 20%, #DD3134 1px, transparent 1px); background-size: 40px 40px; animation: backgroundBreath 20s infinite ease-in-out;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                
                <!-- Left Side - Why It Matters -->
                <div class="animate-fade-right">
                    <div style="display: inline-block; padding: 8px 20px; background: rgba(221,49,52,0.1); color: #DD3134; border-radius: 30px; font-size: 12px; font-weight: 800; margin-bottom: 20px; letter-spacing: 1px;">
                        WHY SAFE DELIVERY MATTERS
                    </div>
                    
                    <h2 style="font-size: clamp(32px, 4vw, 42px); color: #363558; margin-bottom: 25px; font-weight: 800; line-height: 1.2;">
                        Pregnancy and childbirth can be <span style="color: #DD3134;">unpredictable</span>
                    </h2>
                    
                    <p style="font-size: 18px; color: #5a5a5a; line-height: 1.7; margin-bottom: 35px;">
                        Delays in reaching care, lack of guidance, and poor coordination during emergencies are key contributors to maternal and newborn complications.
                    </p>
                    
                    <div style="display: grid; gap: 20px;">
                        <div style="display: flex; align-items: center; gap: 15px; background: white; padding: 20px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: transform 0.3s ease;"
                             onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 15px 40px rgba(221,49,52,0.1)'"
                             onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.03)'">
                            <div style="width: 45px; height: 45px; background: rgba(221,49,52,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 20px;">
                                <i class="bi bi-lightning-fill"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 800; color: #363558; margin-bottom: 5px;">Rapid Response</h4>
                                <p style="font-size: 14px; color: #5a5a5a; margin: 0;">Connecting mothers with navigators within seconds</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 15px; background: white; padding: 20px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: transform 0.3s ease;"
                             onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 15px 40px rgba(70,222,72,0.1)'"
                             onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.03)'">
                            <div style="width: 45px; height: 45px; background: rgba(70,222,72,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px;">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 800; color: #363558; margin-bottom: 5px;">Coordinated Transport</h4>
                                <p style="font-size: 14px; color: #5a5a5a; margin: 0;">Ensuring quick access to medical facilities</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 15px; background: white; padding: 20px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: transform 0.3s ease;"
                             onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 15px 40px rgba(145,116,110,0.1)'"
                             onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.03)'">
                            <div style="width: 45px; height: 45px; background: rgba(145,116,110,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #91746E; font-size: 20px;">
                                <i class="bi bi-heart"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 800; color: #363558; margin-bottom: 5px;">Continuous Support</h4>
                                <p style="font-size: 14px; color: #5a5a5a; margin: 0;">From early labour through postpartum recovery</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 15px; background: white; padding: 20px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: transform 0.3s ease;"
                             onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 15px 40px rgba(54,53,88,0.1)'"
                             onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.03)'">
                            <div style="width: 45px; height: 45px; background: rgba(54,53,88,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #363558; font-size: 20px;">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 800; color: #363558; margin-bottom: 5px;">Digital & Community Integration</h4>
                                <p style="font-size: 14px; color: #5a5a5a; margin: 0;">Combining technology with local knowledge</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Stats Preview -->
                <div style="background: #363558; border-radius: 30px; padding: 40px; color: white; box-shadow: 0 30px 60px rgba(54,53,88,0.2);" class="animate-fade-left">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <div style="width: 50px; height: 50px; background: #46DE48; border-radius: 15px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #363558;">
                            <i class="bi bi-bar-chart-fill"></i>
                        </div>
                        <h3 style="font-size: 24px; font-weight: 800; margin: 0;">Our Impact So Far</h3>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                        <div style="text-align: center;">
                            <div style="font-size: 44px; font-weight: 900; color: #46DE48; line-height: 1; margin-bottom: 8px; animation: countPulse 3s infinite;">11,000+</div>
                            <div style="font-size: 14px; opacity: 0.9;">Safe Deliveries Supported</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 44px; font-weight: 900; color: #DD3134; line-height: 1; margin-bottom: 8px;">98%</div>
                            <div style="font-size: 14px; opacity: 0.9;">Facility Births</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 44px; font-weight: 900; color: #46DE48; line-height: 1; margin-bottom: 8px;">&#60;15</div>
                            <div style="font-size: 14px; opacity: 0.9;">Min Response Time</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 44px; font-weight: 900; color: #DD3134; line-height: 1; margin-bottom: 8px;">24/7</div>
                            <div style="font-size: 14px; opacity: 0.9;">Navigator Support</div>
                        </div>
                    </div>
                    
                    <div style="margin-top: 30px; padding-top: 25px; border-top: 1px solid rgba(255,255,255,0.2); font-style: italic; text-align: center;">
                        "Safe Delivery is more than a program—it's a promise: a commitment to every mother that she will receive timely, respectful, and lifesaving care, wherever she lives."
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- 4-STEP EMERGENCY RESPONSE - WITH ANIMATIONS -->
    <!-- ============================================ -->
    <section style="padding: 80px 5%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
        
        <!-- Animated background pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px; animation: backgroundBreath 20s infinite ease-in-out;"></div>
        
        <!-- Floating decorative elements -->
        <div style="position: absolute; top: 15%; left: 5%; width: 100px; height: 100px; border: 2px dashed rgba(70,222,72,0.2); border-radius: 30px; opacity: 0.3; transform: rotate(15deg); animation: gentleFloat 10s infinite ease-in-out;"></div>
        <div style="position: absolute; bottom: 10%; right: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.1) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 15s infinite ease-in-out;"></div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            
            <div style="text-align: center; margin-bottom: 60px;" class="animate-fade-up">
                <div style="display: inline-flex; align-items: center; padding: 10px 30px; background: rgba(70,222,72,0.15); border-radius: 30px; margin-bottom: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.3); animation: borderPulse 3s infinite;">
                    <span style="color: #46DE48; margin-right: 10px; font-size: 20px;">⚡</span>
                    <span style="font-size: 14px; font-weight: 800; letter-spacing: 2px;">4-STEP EMERGENCY RESPONSE</span>
                </div>
                <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 20px; color: white;">
                    How It <span style="color: #46DE48;">Works</span>
                </h2>
                <p style="font-size: 18px; opacity: 0.9; max-width: 700px; margin: 0 auto;">
                    Our streamlined emergency protocol ensures help reaches you in record time when minutes matter most.
                </p>
            </div>

            <!-- Timeline Steps - With Step Cards Animations -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; margin-top: 40px;">
                
                <!-- STEP 1 - Emergency Call -->
                <div class="step-card" style="text-align: center; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.1s;">
                    <div style="position: relative; margin-bottom: 20px;">
                        <div class="step-icon" style="width: 100px; height: 100px; background: #DD3134; border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(221,49,52,0.4); border: 4px solid #363558; transition: all 0.4s ease;">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div style="position: absolute; top: -8px; right: 15px; width: 30px; height: 30px; background: #46DE48; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900; color: #363558; border: 3px solid #363558; animation: pulseGlow 2s infinite;">1</div>
                    </div>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 25px 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); transition: all 0.4s ease;"
                         onmouseover="this.style.background='rgba(221,49,52,0.15)'; this.style.borderColor='#DD3134'"
                         onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.15)'">
                        
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: white;">Emergency Call</h4>
                        <p style="font-size: 14px; opacity: 0.85; line-height: 1.6; margin-bottom: 20px;">
                            Your dedicated navigator is instantly reachable via our 24/7 helpline. They assess your situation and guide you from the first moment.
                        </p>
                        <div class="delay-badge" style="display: inline-flex; align-items: center; gap: 6px; background: rgba(221,49,52,0.2); color: #FF8A8A; padding: 8px 20px; border-radius: 30px; font-size: 13px; font-weight: 800; transition: all 0.3s ease;">
                            <i class="bi bi-clock-fill"></i>  IMMEDIATE
                        </div>
                    </div>
                </div>

                <!-- STEP 2 - Location & Assessment -->
                <div class="step-card" style="text-align: center; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.3s;">
                    <div style="position: relative; margin-bottom: 20px;">
                        <div class="step-icon" style="width: 100px; height: 100px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 40px; box-shadow: 0 20px 40px rgba(145,116,110,0.4); border: 4px solid #363558; transition: all 0.4s ease;">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div style="position: absolute; top: -8px; right: 15px; width: 30px; height: 30px; background: #46DE48; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900; color: #363558; border: 3px solid #363558; animation: pulseGlow 2s infinite; animation-delay: 0.3s;">2</div>
                    </div>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 25px 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); transition: all 0.4s ease;"
                         onmouseover="this.style.background='rgba(145,116,110,0.15)'; this.style.borderColor='#91746E'"
                         onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.15)'">
                        
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: white;">Location & Assessment</h4>
                        <p style="font-size: 14px; opacity: 0.85; line-height: 1.6; margin-bottom: 20px;">
                            Using GPS tracking and real-time assessment, your navigator determines the fastest, safest route and appropriate care pathway.
                        </p>
                        <div class="delay-badge" style="display: inline-flex; align-items: center; gap: 6px; background: rgba(145,116,110,0.2); color: #DCCEC1; padding: 8px 20px; border-radius: 30px; font-size: 13px; font-weight: 800;">
                            <i class="bi bi-clock-fill"></i>  UNDER 1 MINUTE
                        </div>
                    </div>
                </div>

                <!-- STEP 3 - Transport Dispatch -->
                <div class="step-card" style="text-align: center; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.5s;">
                    <div style="position: relative; margin-bottom: 20px;">
                        <div class="step-icon" style="width: 100px; height: 100px; background: linear-gradient(135deg, #373358); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 40px; box-shadow: 0 20px 40px rgba(128,143,189,0.4); border: 4px solid #363558; transition: all 0.4s ease;">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div style="position: absolute; top: -8px; right: 15px; width: 30px; height: 30px; background: #46DE48; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900; color: #363558; border: 3px solid #363558; animation: pulseGlow 2s infinite; animation-delay: 0.6s;">3</div>
                    </div>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 25px 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); transition: all 0.4s ease;"
                         onmouseover="this.style.background='rgba(128,143,189,0.15)'; this.style.borderColor='#373358'"
                         onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.15)'">
                        
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: white;">Transport Dispatch</h4>
                        <p style="font-size: 14px; opacity: 0.85; line-height: 1.6; margin-bottom: 20px;">
                            We coordinate emergency transport with live GPS tracking. Navigators and hospitals monitor progress in real-time.
                        </p>
                        <div class="delay-badge" style="display: inline-flex; align-items: center; gap: 6px; background: rgba(128,143,189,0.2); color: #A3B4E0; padding: 8px 20px; border-radius: 30px; font-size: 13px; font-weight: 800;">
                            <i class="bi bi-clock-fill"></i>  UNDER 15 MINUTES
                        </div>
                    </div>
                </div>

                <!-- STEP 4 - Hospital Coordination -->
                <div class="step-card" style="text-align: center; animation: slideInStep 0.6s ease forwards; opacity: 0; animation-delay: 0.7s;">
                    <div style="position: relative; margin-bottom: 20px;">
                        <div class="step-icon" style="width: 100px; height: 100px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 40px; box-shadow: 0 20px 40px rgba(70,222,72,0.4); border: 4px solid #363558; transition: all 0.4s ease;">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <div style="position: absolute; top: -8px; right: 15px; width: 30px; height: 30px; background: #46DE48; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900; color: #363558; border: 3px solid #363558; animation: pulseGlow 2s infinite; animation-delay: 0.9s;">4</div>
                    </div>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 25px 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); transition: all 0.4s ease;"
                         onmouseover="this.style.background='rgba(70,222,72,0.15)'; this.style.borderColor='#46DE48'"
                         onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.15)'">
                        
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: white;">Hospital Coordination</h4>
                        <p style="font-size: 14px; opacity: 0.85; line-height: 1.6; margin-bottom: 20px;">
                            Your arrival is pre-notified to the nearest medical facility, allowing priority access and preparation for your delivery.
                        </p>
                        <div class="delay-badge" style="display: inline-flex; align-items: center; gap: 6px; background: rgba(70,222,72,0.2); color: #80E681; padding: 8px 20px; border-radius: 30px; font-size: 13px; font-weight: 800;">
                            <i class="bi bi-clock-fill"></i>  UNDER 5 MINUTES
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 50px;" class="animate-fade-up">
                <div style="display: inline-flex; align-items: center; gap: 15px; background: rgba(255,255,255,0.1); padding: 15px 35px; border-radius: 50px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                    <div style="font-size: 14px; font-weight: 600; opacity: 0.9;"> END-TO-END RESPONSE: CONTINUOUS UNINTERRUPTED SUPPORT</div>
                    <div style="display: flex; align-items: center; gap: 8px; color: #46DE48;">
                        <span style="animation: arrowSlide 1s infinite;">→</span>
                        <span style="animation: arrowSlide 1s infinite; animation-delay: 0.2s;">→</span>
                        <span style="animation: arrowSlide 1s infinite; animation-delay: 0.4s;">→</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- COMPREHENSIVE DELIVERY SUPPORT              -->
    <!-- ============================================ -->
    <section style="padding: 80px 5%; background: #ffffff; position: relative;">
        
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.02; background-image: radial-gradient(circle at 80% 30%, #46DE48 1px, transparent 1px); background-size: 50px 50px; animation: backgroundBreath 25s infinite ease-in-out;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            
            <div style="text-align: center; margin-bottom: 50px;" class="animate-fade-up">
                <div style="display: inline-flex; align-items: center; padding: 10px 30px; background: rgba(70,222,72,0.1); color: #46DE48; border-radius: 30px; font-size: 13px; font-weight: 800; margin-bottom: 20px; border: 1px solid rgba(70,222,72,0.2);">
                    <span style="margin-right: 10px;">🛡️</span> COMPREHENSIVE DELIVERY SUPPORT
                </div>
                <h2 style="font-size: 42px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                    Beyond <span style="color: #46DE48;">Emergency</span> Response
                </h2>
                <p style="font-size: 18px; color: #5a5a5a; max-width: 800px; margin: 0 auto;">
                    Safe Delivery provides full-spectrum care and advocacy to make every birth safe and dignified.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                
                <!-- 24/7 Real-Time Guidance -->
                <div class="hover-lift" style="background: white; border-radius: 25px; padding: 35px 25px; box-shadow: 0 15px 40px rgba(0,0,0,0.03); border: 1px solid #f0f0f0; border-bottom: 5px solid #DD3134; animation: fadeSlideUp 0.7s ease forwards; opacity: 0; animation-delay: 0.1s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: rgba(221,49,52,0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #DD3134; transition: all 0.3s ease;"
                             onmouseover="this.style.background='#DD3134'; this.style.color='white'; this.style.transform='rotate(10deg)'"
                             onmouseout="this.style.background='rgba(221,49,52,0.1)'; this.style.color='#DD3134'; this.style.transform='rotate(0)'">
                            <i class="bi bi-phone-vibrate"></i>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 800; color: #363558; margin: 0;">24/7 Real-Time Guidance</h3>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-left: 15px;">
                        Navigators stay connected via call or SMS throughout the entire delivery journey.
                    </p>
                </div>
                
                <!-- Transport Coordination & Monitoring -->
                <div class="hover-lift" style="background: white; border-radius: 25px; padding: 35px 25px; box-shadow: 0 15px 40px rgba(0,0,0,0.03); border: 1px solid #f0f0f0; border-bottom: 5px solid #91746E; animation: fadeSlideUp 0.7s ease forwards; opacity: 0; animation-delay: 0.3s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: rgba(145,116,110,0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #91746E; transition: all 0.3s ease;"
                             onmouseover="this.style.background='#91746E'; this.style.color='white'; this.style.transform='rotate(10deg)'"
                             onmouseout="this.style.background='rgba(145,116,110,0.1)'; this.style.color='#91746E'; this.style.transform='rotate(0)'">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 800; color: #363558; margin: 0;">Transport Coordination</h3>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-left: 15px;">
                        Fastest, safest route with live GPS tracking and real-time monitoring.
                    </p>
                </div>
                
                <!-- Hospital Referrals & Notifications -->
                <div class="hover-lift" style="background: white; border-radius: 25px; padding: 35px 25px; box-shadow: 0 15px 40px rgba(0,0,0,0.03); border: 1px solid #f0f0f0; border-bottom: 5px solid #373358; animation: fadeSlideUp 0.7s ease forwards; opacity: 0; animation-delay: 0.5s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: rgba(54,53,88,0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #363558; transition: all 0.3s ease;"
                             onmouseover="this.style.background='#363558'; this.style.color='white'; this.style.transform='rotate(10deg)'"
                             onmouseout="this.style.background='rgba(54,53,88,0.1)'; this.style.color='#363558'; this.style.transform='rotate(0)'">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 800; color: #363558; margin: 0;">Hospital Referrals</h3>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-left: 15px;">
                        Medical staff are alerted in advance, ensuring priority care upon arrival.
                    </p>
                </div>
                
                <!-- Emotional & Birth Advocacy -->
                <div class="hover-lift" style="background: white; border-radius: 25px; padding: 35px 25px; box-shadow: 0 15px 40px rgba(0,0,0,0.03); border: 1px solid #f0f0f0; border-bottom: 5px solid #46DE48; animation: fadeSlideUp 0.7s ease forwards; opacity: 0; animation-delay: 0.7s;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: rgba(70,222,72,0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #46DE48; transition: all 0.3s ease;"
                             onmouseover="this.style.background='#46DE48'; this.style.color='white'; this.style.transform='rotate(10deg)'"
                             onmouseout="this.style.background='rgba(70,222,72,0.1)'; this.style.color='#46DE48'; this.style.transform='rotate(0)'">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 800; color: #363558; margin: 0;">Birth Advocacy</h3>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-left: 15px;">
                        Support mothers in informed decisions, respecting birth plans and navigating facility procedures.
                    </p>
                </div>
                
                <!-- Postpartum Follow-Up -->
                <div class="hover-lift" style="background: white; border-radius: 25px; padding: 35px 25px; box-shadow: 0 15px 40px rgba(0,0,0,0.03); border: 1px solid #f0f0f0; border-bottom: 5px solid #DD3134; animation: fadeSlideUp 0.7s ease forwards; opacity: 0; animation-delay: 0.9s; grid-column: span 1;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: rgba(221,49,52,0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #DD3134; transition: all 0.3s ease;"
                             onmouseover="this.style.background='#DD3134'; this.style.color='white'; this.style.transform='rotate(10deg)'"
                             onmouseout="this.style.background='rgba(221,49,52,0.1)'; this.style.color='#DD3134'; this.style.transform='rotate(0)'">
                            <i class="bi bi-house-heart"></i>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 800; color: #363558; margin: 0;">Postpartum Follow-Up</h3>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-left: 15px;">
                        Home visits, digital check-ins, and counselling to support recovery and newborn care.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- IMPACT STATS - WITH ANIMATED COUNTERS       -->
    <!-- ============================================ -->
    <section style="padding: 80px 5%; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); position: relative;">
        
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(45deg, #363558 1px, transparent 1px, transparent 20px); background-size: 30px 30px; animation: backgroundBreath 30s infinite linear;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            
            <div style="text-align: center; margin-bottom: 60px;" class="animate-fade-up">
                <div style="display: inline-flex; align-items: center; gap: 10px; background: rgba(221,49,52,0.1); padding: 12px 30px; border-radius: 40px; margin-bottom: 20px;">
                    <i class="fa-solid fa-chart-line" style="color: #DD3134; font-size: 20px;"></i>

                    <span style="color: #363558; font-size: 14px; font-weight: 800; letter-spacing: 1px;">OUR IMPACT SO FAR</span>
                </div>
                <h2 style="font-size: 42px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                    Measurable <span style="color: #46DE48;">Results</span>
                </h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px;">
                
                <!-- Stat 1 - 11,000+ Safe Deliveries -->
                <div class="stat-card" style="background: white; padding: 40px 20px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54,53,88,0.05); text-align: center; border: 1px solid rgba(0,0,0,0.02); animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.1s;">
                    <div style="font-size: 56px; font-weight: 900; color: #DD3134; margin-bottom: 15px; line-height: 1; letter-spacing: -2px;" class="stat-number">
                        11,000+
                    </div>
                    <div style="font-size: 18px; color: #363558; font-weight: 800; margin-bottom: 10px;">Safe Deliveries</div>
                    <div style="font-size: 14px; color: #5a5a5a;">Mothers & newborns successfully guided to safety</div>
                </div>
                
                <!-- Stat 2 - 98% Facility Births -->
                <div class="stat-card" style="background: white; padding: 40px 20px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54,53,88,0.05); text-align: center; border: 1px solid rgba(0,0,0,0.02); animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.3s;">
                    <div style="font-size: 56px; font-weight: 900; color: #46DE48; margin-bottom: 15px; line-height: 1; letter-spacing: -2px;" class="stat-number">
                        98%
                    </div>
                    <div style="font-size: 18px; color: #363558; font-weight: 800; margin-bottom: 10px;">Facility Births</div>
                    <div style="font-size: 14px; color: #5a5a5a;">Deliveries occurring in equipped health facilities</div>
                </div>
                
                <!-- Stat 3 - <15 Min Response -->
                <div class="stat-card" style="background: white; padding: 40px 20px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54,53,88,0.05); text-align: center; border: 1px solid rgba(0,0,0,0.02); animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.5s;">
                    <div style="font-size: 56px; font-weight: 900; color: #91746E; margin-bottom: 15px; line-height: 1; letter-spacing: -2px;" class="stat-number">
                        &lt;15
                    </div>
                    <div style="font-size: 18px; color: #363558; font-weight: 800; margin-bottom: 10px;">Avg Response Time</div>
                    <div style="font-size: 14px; color: #5a5a5a;">From emergency call to hospital arrival</div>
                </div>
                
                <!-- Stat 4 - 24/7 Support -->
                <div class="stat-card" style="background: white; padding: 40px 20px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54,53,88,0.05); text-align: center; border: 1px solid rgba(0,0,0,0.02); animation: scaleIn 0.6s ease forwards; opacity: 0; animation-delay: 0.7s;">
                    <div style="font-size: 56px; font-weight: 900; color: #373358; margin-bottom: 15px; line-height: 1; letter-spacing: -2px;" class="stat-number">
                        24/7
                    </div>
                    <div style="font-size: 18px; color: #363558; font-weight: 800; margin-bottom: 10px;">Navigator Support</div>
                    <div style="font-size: 14px; color: #5a5a5a;">Every mother is never alone during her maternal journey</div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 50px; padding: 30px; background: rgba(54,53,88,0.03); border-radius: 50px;" class="animate-fade-up">
                <p style="font-size: 20px; color: #363558; font-weight: 600; margin: 0;">
                    <span style="color: #DD3134; font-weight: 800;">Safe Delivery is more than a program—it's a promise.</span> A commitment to every mother that she will receive timely, respectful, and lifesaving care, wherever she lives.
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- CALL TO ACTION - GET INVOLVED               -->
    <!-- ============================================ -->
    <section style="padding: 100px 5%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative; overflow: hidden;">
        
        <!-- Animated background elements -->
        <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.1) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 15s infinite ease-in-out;"></div>
        <div style="position: absolute; bottom: -50px; left: -50px; width: 250px; height: 250px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.1) 0%, rgba(221,49,52,0) 70%); animation: backgroundBreath 18s infinite ease-in-out; animation-delay: 2s;"></div>
        
        <!-- Floating particles -->
        <div style="position: absolute; top: 20%; left: 10%; width: 8px; height: 8px; background: #46DE48; border-radius: 50%; opacity: 0.5; animation: gentleFloat 7s infinite;"></div>
        <div style="position: absolute; top: 70%; right: 15%; width: 12px; height: 12px; background: #DD3134; border-radius: 50%; opacity: 0.4; animation: gentleFloat 9s infinite; animation-delay: 1s;"></div>
        <div style="position: absolute; bottom: 30%; left: 20%; width: 6px; height: 6px; background: white; border-radius: 50%; opacity: 0.3; animation: gentleFloat 5s infinite;"></div>

        <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto; text-align: center;">
            
            <div style="display: inline-flex; align-items: center; gap: 12px; background: rgba(70,222,72,0.15); padding: 15px 35px; border-radius: 50px; margin-bottom: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.3); animation: borderPulse 3s infinite;">
                <i class="fa-solid fa-users" style="color: #46DE48; font-size: 22px;"></i>

                <span style="font-size: 15px; font-weight: 800; letter-spacing: 2px; color: white;">GET INVOLVED</span>
            </div>

            <h2 style="font-size: 52px; font-weight: 800; margin: 0 0 25px 0; line-height: 1.2; color: white; animation: fadeSlideUp 0.8s ease;">
                Help Us Expand <span style="color: #46DE48;">Safe Delivery</span>
            </h2>

            <p style="font-size: 20px; opacity: 0.95; max-width: 650px; margin: 0 auto 40px auto; line-height: 1.6; animation: fadeSlideUp 0.8s ease; animation-delay: 0.2s; animation-fill-mode: both;">
                Your support ensures that more mothers across Uganda and beyond experience safe, supported, and empowered births.
            </p>

            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; animation: fadeSlideUp 0.8s ease; animation-delay: 0.4s; animation-fill-mode: both;">
                <a href="#" 
                   style="background: #46DE48; color: #363558; text-decoration: none; padding: 22px 55px; border-radius: 60px; font-weight: 900; font-size: 18px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 40px rgba(70,222,72,0.3); transition: all 0.3s ease;"
                   onmouseover="this.style.background='#80E681'; this.style.transform='translateY(-5px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(70,222,72,0.5)'"
                   onmouseout="this.style.background='#46DE48'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 40px rgba(70,222,72,0.3)'">
                    <i class="bi bi-shield-check" style="font-size: 22px;"></i> Support Safe Delivery
                </a>
                <a href="#" 
                   style="background: rgba(255,255,255,0.1); color: white; text-decoration: none; padding: 22px 55px; border-radius: 60px; font-weight: 700; font-size: 18px; display: inline-flex; align-items: center; gap: 12px; border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px); transition: all 0.3s ease;"
                   onmouseover="this.style.background='rgba(255,255,255,0.2)'; this.style.borderColor='#46DE48'; this.style.transform='translateY(-5px)'"
                   onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='rgba(255,255,255,0.3)'; this.style.transform='translateY(0)'">
                    <i class="bi bi-info-circle"></i> Learn More
                </a>
            </div>
            
            <div style="margin-top: 50px; font-size: 15px; opacity: 0.8; display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
                <span><i class="bi bi-check-circle-fill" style="color: #46DE48;"></i> 11,000+ safe deliveries</span>
                <span><i class="bi bi-check-circle-fill" style="color: #46DE48;"></i> 98% facility births</span>
                <span><i class="bi bi-check-circle-fill" style="color: #46DE48;"></i> 24/7 support</span>
            </div>
        </div>
    </section>

</div>

@endsection