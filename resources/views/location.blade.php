@extends('layouts.apps')

@section('content')

    <style>
        /* Base animations */
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

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
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

        @keyframes shimmer {
            0% { background-position: -100% 0; }
            100% { background-position: 200% 0; }
        }

        /* Animation classes */
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

        /* Hover animations */
        .stat-card, .goal-card, .regions-grid > div {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .stat-card:hover, .goal-card:hover, .regions-grid > div:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.12);
        }

        .regions-grid > div:hover {
            transform: translateY(-10px) scale(1.02);
        }

        .stat-card:hover {
            background: rgba(255,255,255,0.1) !important;
        }

        .goal-card:hover {
            box-shadow: 0 30px 60px rgba(0,0,0,0.12) !important;
        }

        /* Background elements animation */
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        .floating-element-delay {
            animation: float 8s ease-in-out 1s infinite;
        }

        .pulse-element {
            animation: pulse 3s ease-in-out infinite;
        }

        .slide-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        .slide-right {
            animation: slideInRight 0.8s ease-out forwards;
        }

        /* Progress bar animation */
        .progress-fill {
            transition: width 1.5s ease-out;
            animation: shimmer 3s infinite;
            background: linear-gradient(90deg, #DD3134, #46DE48, #DD3134);
            background-size: 200% 100%;
        }

        /* Mobile adjustments for the Hero Section */
        @media (max-width: 768px) {
            .hero-section { padding: 80px 5% 40px 5% !important; }
            .hero-title { font-size: 38px !important; letter-spacing: -1px !important; }
            .hero-subtitle { font-size: 16px !important; }
            
            /* Grid and Flex containers to stack on mobile */
            .stats-grid, .regions-grid, .goals-container { 
                grid-template-columns: 1fr !important; 
                display: flex !important;
                flex-direction: column !important;
                gap: 20px !important; 
            }
            
            .stats-section, .regions-section, .expansion-section {
                padding: 40px 5% !important;
            }

            .stat-card { padding: 30px 15px !important; }
            .goal-card { padding: 30px 20px !important; width: 100% !important; box-sizing: border-box; }
            
            .expansion-title { font-size: 32px !important; }
        }
    </style>

    <div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">

        <section class="hero-section" style="padding: 120px 10% 80px 10%; text-align: center; position: relative; overflow: hidden;">
            <div class="floating-element" style="position: absolute; top: 10%; right: 10%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%);"></div>
            <div class="floating-element-delay" style="position: absolute; bottom: 20%; left: 10%; width: 150px; height: 150px; border: 2px dashed #DD3134; border-radius: 40px; opacity: 0.1; transform: rotate(15deg);"></div>

            <div style="position: relative; z-index: 2;">
                <div class="animate-on-load" style="display: inline-flex; align-items: center; padding: 10px 30px; background: linear-gradient(90deg, rgba(70,222,72,0.1), rgba(128,143,189,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.5);">
                   <i class="fas fa-globe" style="color: #46DE48; margin-right: 10px;"></i>
 OUR GEOGRAPHIC REACH
                </div>

                <h1 class="hero-title animate-on-load-delay-1" style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px;">
                    Where We <span style="color: #DD3134;">Work</span>
                </h1>

                <p class="hero-subtitle animate-on-load-delay-2" style="font-size: 20px; color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    safeMom Navigator operates across 24 districts in Uganda, with strategic plans to expand nationwide and ensure every mother has access to maternal health support.
                </p>
            </div>
        </section>

        <section class="stats-section" style="padding: 80px 10%; background: #373358; color: white; position: relative;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 25% 25%, white 1px, transparent 1px); background-size: 40px 40px;"></div>
            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; text-align: center;">

                    <div class="stat-card animate-on-load" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #FFF; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            1 <span style="font-size: 24px; opacity: 0.7;"><i class="bi bi-geo-alt"></i></span>
                        </div>
                        <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Districts Active</div>
                        <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Across 4 regions</div>
                    </div>

                    <div class="stat-card animate-on-load-delay-1" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #FFF; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            1 <span style="font-size: 24px; opacity: 0.7;"><i class="bi bi-map"></i></span>
                        </div>
                        <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Regions Covered</div>
                        <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Central, Eastern, Northern, Western</div>
                    </div>

                    <div class="stat-card animate-on-load-delay-2" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #FFF; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            50+ <span style="font-size: 24px; opacity: 0.7;"><i class="bi bi-people"></i></span>
                        </div>
                        <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Trained Navigators</div>
                        <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Youth-led community support</div>
                    </div>

                    <div class="stat-card animate-on-load-delay-3" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #FFF; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            20+ <span style="font-size: 24px; opacity: 0.7;"><i class="bi bi-balloon-heart"></i></span>
                        </div>
                        <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Mothers Reached</div>
                        <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Since program inception</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="regions-section" style="padding: 80px 10%; background: white; position: relative;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(45deg, #363558 0px, #363558 1px, transparent 1px, transparent 30px);"></div>
            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <div class="pulse-element" style="display: inline-flex; align-items: center; gap: 15px; padding: 12px 30px; background: rgba(54,53,88,0.1); border-radius: 30px; margin-bottom: 25px;">
                        <button style="padding: 12px 25px; border-radius: 25px; border: 2px solid #f0f0f0; background: white; color: #363558; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                            <span><i class="bi bi-bar-chart"></i></span> Growth Analytics
                        </button>
                    </div>
                    <h3 style="font-size: 36px; color: #363558; margin-bottom: 20px; font-weight: 800;">Regional <span style="color: #DD3134;">Breakdown</span></h3>
                    <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: 16px;">Explore our impact across Uganda's four major regions.</p>
                </div>

                <div class="regions-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
                  

                    <div class="animate-on-load" style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                        <div style="background: #373358; color: white; padding: 25px; display: flex; justify-content: space-between; align-items: center;">
                            <div><span style="font-weight: 800; font-size: 20px;">Eastern Region</span><div style="font-size: 13px; opacity: 0.9; margin-top: 5px;">1 district</div></div>
                            <div style="background: rgba(255,255,255,0.2); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; backdrop-filter: blur(10px);"><i class="bi bi-geo-alt"></i></div>
                        </div>
                        <div style="padding: 30px;">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px;">
                                <div style="text-align: center;"><div style="font-size: 32px; font-weight: 800; color: #46DE48; margin-bottom: 5px;">50</div><div style="font-size: 12px; color: #373358; font-weight: 600;">Navigators</div></div>
                                <div style="text-align: center;"><div style="font-size: 32px; font-weight: 800; color: #46DE48; margin-bottom: 5px;">20+</div><div style="font-size: 12px; color: #373358; font-weight: 600;">Mothers</div></div>
                            </div>
                             <div style="border-top: 1px solid #f0f0f0; padding-top: 20px;">
                                <div style="font-size: 14px; color: #363558; font-weight: 600; margin-bottom: 15px;">Key Districts</div>
                                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                    <span style="font-size: 12px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 12px; border-radius: 15px; font-weight: 600; transition: all 0.3s ease;">Jinja</span>
                                    <span style="font-size: 12px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 12px; border-radius: 15px; font-weight: 600; transition: all 0.3s ease;">+2 more</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="expansion-section" style="padding: 100px 10%; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); text-align: center; position: relative;">
            <div class="floating-element" style="position: absolute; top: 20%; right: 10%; width: 100px; height: 100px; border-radius: 30px; background: linear-gradient(135deg, rgba(70,222,72,0.05), rgba(70,222,72,0)); transform: rotate(25deg);"></div>
            <div class="floating-element-delay" style="position: absolute; bottom: 30%; left: 10%; width: 150px; height: 150px; border: 2px dashed #DD3134; border-radius: 50%; opacity: 0.1;"></div>

            <div style="position: relative; z-index: 2; max-width: 1000px; margin: 0 auto;">
                <div class="animate-on-load" style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 700; margin-bottom: 25px; gap: 10px;">
                    <i class="fa-solid fa-chart-line" style="color: #46DE48; font-size: 20px;"></i>
 FUTURE EXPANSION
                </div>

                <h2 class="expansion-title animate-on-load-delay-1" style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">Expanding Our <span style="color: #46DE48;">National Reach</span></h2>
                <p class="animate-on-load-delay-2" style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">By 2035, we aim to extend our life-saving services to all 135 districts in Uganda.</p>

                <div class="goals-container" style="display: flex; justify-content: center; gap: 40px; margin-bottom: 60px; flex-wrap: wrap;">
                    <div class="goal-card animate-on-load" style="background: white; padding: 40px 50px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border-top: 6px solid #DD3134;">
                        <div style="font-size: 56px; font-weight: 800; color: #DD3134; margin-bottom: 15px; line-height: 1;">111</div>
                        <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Districts to Expand</div>
                        <div style="font-size: 13px; color: #373358;">Remaining for national coverage</div>
                    </div>

                    <div class="goal-card animate-on-load-delay-1" style="background: white; padding: 40px 50px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border-top: 6px solid #46DE48;">
                        <div style="font-size: 56px; font-weight: 800; color: #46DE48; margin-bottom: 15px; line-height: 1;">2035</div>
                        <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Target Year</div>
                        <div style="font-size: 13px; color: #373358;">For nationwide coverage</div>
                    </div>

                    <div class="goal-card animate-on-load-delay-2" style="background: white; padding: 40px 50px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border-top: 6px solid #373358;">
                        <div style="font-size: 56px; font-weight: 800; color: #373358; margin-bottom: 15px; line-height: 1;">1,500+</div>
                        <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">New Navigators</div>
                        <div style="font-size: 13px; color: #373358;">To train by 2035</div>
                    </div>
                </div>

                <div class="animate-on-load-delay-3" style="max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); transition: all 0.3s ease;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                        <div style="font-size: 16px; color: #363558; font-weight: 700;">Current Coverage</div>
                        <div style="font-size: 16px; color: #DD3134; font-weight: 800;">5%</div>
                    </div>
                    <div style="height: 12px; background: #f0f0f0; border-radius: 6px; overflow: hidden; margin-bottom: 10px;">
                        <div class="progress-fill" style="width: 18%; height: 100%; background: linear-gradient(90deg, #DD3134, #46DE48); border-radius: 6px;"></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; font-size: 13px; color: #373358;">
                        <div>1 Districts Active</div>
                        <div>135 Total Districts</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection