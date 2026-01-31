@extends('layouts.apps')

@section('content')

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%); overflow-x: hidden;">

    <!-- Hero Section -->
    <section style="padding: clamp(40px, 8vw, 120px) clamp(20px, 5vw, 5%); display: flex; flex-wrap: wrap; align-items: center; gap: clamp(20px, 4vw, 60px); position: relative; overflow: hidden;">
        <!-- Background decoration -->
        <div style="position: absolute; top: 10%; left: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.08) 0%, rgba(70,222,72,0) 70%); pointer-events: none; display: none;"></div>
        
        <!-- Left Content -->
        <div style="flex: 1.2; min-width: min(100%, 320px); position: relative; z-index: 2;">
            <!-- Badge -->
            <div style="display: inline-flex; align-items: center; padding: 10px 20px; background: rgba(255,255,255,0.7); color: #363558; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; margin-bottom: 20px; letter-spacing: 0.5px; backdrop-filter: blur(10px); border: 1px solid rgba(221,49,52,0.2); width: fit-content;">
                <span style="color: #DD3134; margin-right: 8px;"><i class="bi bi-person-heart"></i></span> SAFE PREGNANCY PROGRAM
            </div>

            <!-- Main Heading -->
            <h1 style="font-size: clamp(28px, 5.5vw, 64px); color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                Journey to a <span style="color: #DD3134;">Safe</span> & Healthy Pregnancy
            </h1>

            <!-- Description -->
            <p style="font-size: clamp(16px, 3vw, 20px); color: #5a5a5a; line-height: 1.6; margin-bottom: 30px; max-width: 100%;">
                From conception to delivery, our comprehensive prenatal support ensures you and your baby receive personalized care every step of the way.
            </p>

            <!-- Buttons -->
            <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 40px;">
                <a href="#" style="background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 35px); border-radius: 40px; font-weight: 800; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 8px 20px rgba(221,49,52,0.3); white-space: nowrap;">
                    Enroll Now <span style="font-size: clamp(16px, 2.5vw, 20px);">→</span>
                </a>
                <a href="#" style="background: white; color: #363558; border: 2px solid #f0f0f0; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 35px); border-radius: 40px; font-weight: 700; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; white-space: nowrap;">
                    <span style="color: #46DE48; font-size: clamp(14px, 2.5vw, 16px);">▶</span> Watch Video
                </a>
            </div>

            <!-- Stats -->
            <div style="display: flex; gap: clamp(15px, 4vw, 40px); flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 12px; min-width: 140px;">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(221,49,52,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 24px); font-weight: 800; color: #363558; line-height: 1;">5,200+</div>
                        <div style="font-size: clamp(10px, 2vw, 12px); color: #808FBD; font-weight: 600;">Mothers</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px; min-width: 140px;">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(70,222,72,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 24px); font-weight: 800; color: #363558; line-height: 1;">98%</div>
                        <div style="font-size: clamp(10px, 2vw, 12px); color: #808FBD; font-weight: 600;">Success</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Image Card -->
        <div style="flex: 1; min-width: min(100%, 320px); position: relative; z-index: 2; margin-top: clamp(20px, 5vw, 0);">
            <div style="background: white; border-radius: clamp(20px, 4vw, 30px); padding: clamp(12px, 2vw, 15px); box-shadow: 0 20px 40px rgba(54,53,88,0.1); border: 1px solid #f0f0f0; position: relative;">
                <img 
                    src="https://images.unsplash.com/photo-1518101645466-7795885ff8f8?auto=format&fit=crop&q=80&w=800" 
                    style="width: 100%; height: auto; border-radius: clamp(15px, 3vw, 20px); display: block; aspect-ratio: 4/3; object-fit: cover;"
                    alt="Mother and child"
                >
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: clamp(15px, 3vw, 20px); background: #fdfcfb; border-radius: clamp(12px, 2vw, 15px); margin-top: clamp(10px, 2vw, 15px);">
                    <div style="min-width: 0;">
                        <div style="font-size: clamp(10px, 2vw, 12px); color: #808FBD; font-weight: 600; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Sarah's Journey</div>
                        <div style="font-size: clamp(13px, 2.5vw, 15px); font-weight: 700; color: #363558; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Real Mother Story</div>
                    </div>
                    <a href="#" style="color: #DD3134; text-decoration: none; font-weight: 700; font-size: clamp(12px, 2vw, 14px); white-space: nowrap; margin-left: 10px;">Read →</a>
                </div>

                <!-- 24/7 Support Badge -->
                <div style="position: absolute; top: -15px; right: clamp(-5px, 2vw, -10px); background: #363558; color: white; padding: clamp(10px, 2vw, 15px) clamp(15px, 3vw, 25px); border-radius: clamp(15px, 3vw, 20px); box-shadow: 0 10px 20px rgba(0,0,0,0.15); text-align: center; z-index: 3;">
                    <div style="font-size: clamp(18px, 4vw, 24px); font-weight: 800;">24/7</div>
                    <div style="font-size: clamp(8px, 1.5vw, 10px); opacity: 0.8; text-transform: uppercase;">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section style="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 5%); background: white;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: clamp(30px, 6vw, 60px);">
                <h2 style="font-size: clamp(24px, 5vw, 48px); color: #363558; font-weight: 800; line-height: 1.2; padding: 0 clamp(10px, 3vw, 20px);">
                    Comprehensive <span style="color: #46DE48;">Care</span> Services
                </h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 300px), 1fr)); gap: clamp(20px, 3vw, 30px); padding: 0 clamp(10px, 3vw, 0);">
                @php
                    $services = [
                        ['title' => 'Smart Reminders', 'color' => '#DD3134', 'icon' => 'bi-bell', 'bg' => 'rgba(221,49,52,0.05)'],
                        ['title' => 'Home Health Visits', 'color' => '#46DE48', 'icon' => 'bi-house', 'bg' => 'rgba(70,222,72,0.05)'],
                        ['title' => 'Health Education', 'color' => '#808FBD', 'icon' => 'bi-journal-text', 'bg' => 'rgba(128,143,189,0.05)'],
                        ['title' => 'Birth Planning', 'color' => '#91746E', 'icon' => 'bi-people', 'bg' => 'rgba(145,116,110,0.05)']
                    ];
                @endphp

                @foreach($services as $service)
                <div style="background: #ffffff; border-radius: clamp(20px, 3vw, 25px); padding: clamp(20px, 4vw, 40px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-top: 5px solid {{ $service['color'] }}; height: 100%;">
                    <div style="display: flex; align-items: center; margin-bottom: clamp(20px, 3vw, 25px); gap: clamp(12px, 2vw, 15px); flex-wrap: wrap;">
                        <div style="width: clamp(50px, 8vw, 60px); height: clamp(50px, 8vw, 60px); background: {{ $service['color'] }}; border-radius: clamp(15px, 2vw, 18px); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(20px, 3vw, 24px); flex-shrink: 0;">
                            <i class="bi {{ $service['icon'] }}"></i>
                        </div>
                        <h3 style="font-size: clamp(18px, 3vw, 20px); color: #363558; font-weight: 800; margin: 0; word-break: break-word;">{{ $service['title'] }}</h3>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: clamp(10px, 2vw, 15px);">
                        <div style="background: {{ $service['bg'] }}; padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                            <div style="font-size: clamp(13px, 2vw, 14px); font-weight: 700; color: #363558; margin-bottom: 5px;">Phase 1</div>
                            <div style="font-size: clamp(11px, 1.8vw, 12px); color: #5a5a5a; line-height: 1.4;">Monitoring & Care</div>
                        </div>
                        <div style="background: {{ $service['bg'] }}; padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                            <div style="font-size: clamp(13px, 2vw, 14px); font-weight: 700; color: #363558; margin-bottom: 5px;">Phase 2</div>
                            <div style="font-size: clamp(11px, 1.8vw, 12px); color: #5a5a5a; line-height: 1.4;">Regular Support</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section style="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 5%); background: #f8f9fa; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-size: clamp(24px, 5vw, 48px); color: #363558; font-weight: 800; margin-bottom: clamp(30px, 5vw, 50px); line-height: 1.2; padding: 0 clamp(10px, 3vw, 20px);">
                Your <span style="color: #46DE48;">9-Month</span> Journey
            </h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 300px), 1fr)); gap: clamp(20px, 4vw, 40px); padding: 0 clamp(10px, 3vw, 0);">
                @php
                    $trimesters = [
                        ['n' => '1st', 'title' => 'First Trimester', 'weeks' => '1-12', 'color' => '#DD3134'],
                        ['n' => '2nd', 'title' => 'Second Trimester', 'weeks' => '13-27', 'color' => '#46DE48'],
                        ['n' => '3rd', 'title' => 'Third Trimester', 'weeks' => '28-40', 'color' => '#808FBD']
                    ];
                @endphp

                @foreach($trimesters as $tri)
                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.05); position: relative; border: 1px solid #eee; height: 100%;">
                    <div style="background: {{ $tri['color'] }}; color: white; padding: clamp(40px, 6vw, 50px) clamp(15px, 3vw, 20px) clamp(20px, 3vw, 25px); position: relative;">
                        <div style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); width: clamp(50px, 8vw, 60px); height: clamp(50px, 8vw, 60px); background: inherit; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 4px solid white; font-weight: 800; font-size: clamp(18px, 3vw, 20px); z-index: 2;">
                            {{ $tri['n'] }}
                        </div>
                        <div style="font-size: clamp(10px, 2vw, 11px); text-transform: uppercase; opacity: 0.8; margin-top: 10px;">Weeks {{ $tri['weeks'] }}</div>
                        <div style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin-top: 5px;">{{ $tri['title'] }}</div>
                    </div>
                    <div style="padding: clamp(20px, 4vw, 30px); text-align: left;">
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(13px, 2vw, 14px); color: #5a5a5a; line-height: 1.8;">
                            <li style="margin-bottom: 8px;">• Initial screenings & tests</li>
                            <li style="margin-bottom: 8px;">• Personalized health tracking</li>
                            <li style="margin-bottom: 0;">• Navigator consultations</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

@endsection