@extends('layouts.apps')

@section('content')
<style>
    /* Responsive Utility Classes */
    .team-container {
        padding: 80px 5%;
        max-width: 1400px;
        margin: 0 auto;
    }

    .hero-section {
        padding: 160px 5% 80px 5%;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .leadership-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        margin-bottom: 80px;
    }

    .navigator-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
        margin-bottom: 60px;
    }

    .hero-title {
        font-size: clamp(40px, 8vw, 72px);
        line-height: 1.1;
        font-weight: 800;
        margin-bottom: 30px;
        color: #363558;
    }

    /* Tablets (Desktop and large tablets) */
    @media (max-width: 1200px) {
        .leadership-grid { grid-template-columns: repeat(2, 1fr); }
        .navigator-grid { grid-template-columns: repeat(3, 1fr); }
    }

    /* Mobile Phones */
    @media (max-width: 768px) {
        .leadership-grid { grid-template-columns: 1fr; }
        .navigator-grid { grid-template-columns: repeat(2, 1fr); }
        .hero-section { padding-top: 120px; }
        .section-title { font-size: 32px !important; }
    }

    @media (max-width: 480px) {
        .navigator-grid { grid-template-columns: 1fr; }
    }
</style>

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #d2e0ed 100%);">

    <section class="hero-section">
        <div style="position: absolute; top: 15%; left: 5%; width: 100px; height: 100px; border: 2px dashed #DD3134; border-radius: 30px; opacity: 0.1; transform: rotate(25deg);"></div>
        
        <div style="position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; padding: 12px 25px; background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 30px; border: 1px solid rgba(54,53,88,0.2); backdrop-filter: blur(10px);">
                <span style="margin-right: 12px; font-size: 18px;"><i class="bi bi-people"></i></span>
                MEET OUR TEAM
            </div>

            <h1 class="hero-title">
                The People Behind <br><span style="color: #DD3134;">the Mission</span>
            </h1>

            <p style="font-size: clamp(16px, 4vw, 22px); color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                From visionary leadership to dedicated field navigators, every team member plays a crucial role in our mission to save mothers' lives across Uganda.
            </p>
        </div>
    </section>

    <section style="padding: 60px 0; background: white; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 10% 20%, #363558 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="team-container">
            <div style="text-align: center; margin-bottom: 60px;">
                <div style="display: inline-block; padding: 8px 25px; background: rgba(221,49,52,0.1); color: #363558; border-radius: 30px; font-size: 13px; font-weight: 700; margin-bottom: 20px; border: 1px solid rgba(221,49,52,0.2);">
                    LEADERSHIP TEAM
                </div>
                <h3 class="section-title" style="font-size: 42px; color: #363558; font-weight: 800;">Our <span style="color: #DD3134;">Leadership</span></h3>
            </div>

            <div class="leadership-grid">
                @php
                    $leaders = [
                        ['name' => 'Dr. Sarah Nakato', 'role' => 'Executive Director', 'tag' => 'EXECUTIVE', 'color' => '#DD3134', 'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400'],
                        ['name' => 'James Okello', 'role' => 'Program Director', 'tag' => 'PROGRAM', 'color' => '#46DE48', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400'],
                        ['name' => 'Grace Mwangi', 'role' => 'Operations Director', 'tag' => 'OPERATIONS', 'color' => '#91746E', 'img' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400'],
                        ['name' => 'David Omondi', 'role' => 'Partnerships Manager', 'tag' => 'PARTNERSHIPS', 'color' => '#808FBD', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400']
                    ];
                @endphp

                @foreach($leaders as $index => $leader)
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                    <div style="height: 250px; overflow: hidden; position: relative;">
                        <img src="{{ $leader['img'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 15px; right: 15px; background: {{ $leader['color'] }}; color: white; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: bold;">0{{ $index + 1 }}</div>
                    </div>
                    <div style="padding: 25px; position: relative;">
                        <div style="position: absolute; top: -15px; left: 20px; background: {{ $leader['color'] }}; color: white; padding: 5px 15px; border-radius: 10px; font-size: 11px; font-weight: 700;">{{ $leader['tag'] }}</div>
                        <h4 style="margin: 10px 0 5px 0; color: #363558; font-size: 20px; font-weight: 800;">{{ $leader['name'] }}</h4>
                        <p style="color: {{ $leader['color'] }}; font-size: 14px; font-weight: 700; margin-bottom: 15px;">{{ $leader['role'] }}</p>
                        <p style="font-size: 14px; color: #666; line-height: 1.5;">Expert professional dedicated to maternal health excellence in rural Uganda.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section style="padding: 60px 0; background: linear-gradient(135deg, #E7E9ED 0%, #ffffff 100%);">
        <div class="team-container">
            <div style="text-align: center; margin-bottom: 50px;">
                <div style="display: inline-flex; align-items: center; padding: 10px 25px; background: white; border-radius: 30px; font-size: 13px; font-weight: 700; color: #363558; border: 1px solid #ddd;">
                    <i class="bi bi-star-fill" style="color: #FFD700; margin-right: 10px;"></i> STAR NAVIGATORS
                </div>
                <h3 class="section-title" style="font-size: 42px; margin-top: 20px; color: #363558; font-weight: 800;">Top <span style="color: #46DE48;">Impact</span></h3>
            </div>

            <div class="navigator-grid">
                @php
                    $navs = [
                        ['name' => 'Faith Akello', 'dist' => 'Gulu', 'count' => '80+', 'color' => '#DD3134'],
                        ['name' => 'Agnes Nambi', 'dist' => 'Wakiso', 'count' => '75+', 'color' => '#46DE48'],
                        ['name' => 'Rose Atim', 'dist' => 'Lira', 'count' => '68+', 'color' => '#91746E'],
                        ['name' => 'Diana Namatovu', 'dist' => 'Mbale', 'count' => '72+', 'color' => '#808FBD'],
                        ['name' => 'Esther Amongin', 'dist' => 'Soroti', 'count' => '65+', 'color' => '#DD3134'],
                        ['name' => 'Joan Nantume', 'dist' => 'Kampala', 'count' => '78+', 'color' => '#46DE48']
                    ];
                @endphp

                @foreach($navs as $nav)
                <div style="background: white; border-radius: 20px; padding: 20px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
                    <div style="width: 70px; height: 70px; margin: 0 auto 15px auto; border-radius: 50%; border: 3px solid {{ $nav['color'] }}; padding: 3px;">
                        <img src="https://i.pravatar.cc/150?u={{ $nav['name'] }}" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                    </div>
                    <div style="font-weight: 800; color: #363558; font-size: 15px;">{{ $nav['name'] }}</div>
                    <div style="font-size: 12px; color: #46DE48; font-weight: 700; margin: 5px 0;"><i class="bi bi-geo-alt"></i> {{ $nav['dist'] }}</div>
                    <div style="font-size: 20px; font-weight: 800; color: {{ $nav['color'] }};">{{ $nav['count'] }}</div>
                    <div style="font-size: 10px; color: #808FBD; text-transform: uppercase; letter-spacing: 1px;">Mothers</div>
                </div>
                @endforeach
            </div>

            <div style="text-align: center;">
                <div style="display: inline-flex; align-items: center; background: #363558; color: white; padding: 15px 35px; border-radius: 50px; gap: 15px; box-shadow: 0 10px 30px rgba(54,53,88,0.3);">
                    <i class="bi bi-people-fill" style="font-size: 24px;"></i>
                    <div style="text-align: left;">
                        <div style="font-weight: 800; font-size: 18px;">350+ Active Navigators</div>
                        <div style="font-size: 12px; opacity: 0.8;">Making a difference every single day</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection