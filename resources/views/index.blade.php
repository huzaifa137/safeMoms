@extends('layouts.apps')
@section('content')
  <style>
    /* First Hero Section - reduce padding */
    section:first-of-type {
      padding: 40px 5% 60px 5% !important;
    }

    /* Stats Section (Dark Background) */
    section:nth-of-type(2) {
      padding: 60px 5% !important;
    }

    /* Programs Section */
    section:nth-of-type(3) {
      padding: 60px 5% !important;
    }

    /* Testimonials Section - FIX THIS ONE */
    section:nth-of-type(4) {
      padding: 40px 10% !important;
    }

    /* Get Involved Section (Dark Theme) */
    section:nth-of-type(5) {
      padding: 60px 10% !important;
    }

    /* Reduce heading sizes and margins */
    h1 {
      margin: 0 0 15px 0 !important;
      font-size: 50px !important;
    }

    h2 {
      margin-bottom: 15px !important;
      font-size: 40px !important;
    }

    p {
      margin-bottom: 20px !important;
    }

    /* Reduce grid gaps */
    [style*="grid-template-columns: 1.2fr 1fr"] {
      gap: 30px !important;
      min-height: 60vh !important;
    }

    [style*="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))"] {
      gap: 15px !important;
      margin-bottom: 30px !important;
    }

    /* Reduce button paddings */
    button,
    [style*="padding: 20px 40px"] {
      padding: 12px 25px !important;
    }

    /* Reduce bottom overlay padding */
    [style*="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(54,53,88,0.95)"] {
      padding: 20px 20px 15px !important;
    }

    /* Reduce card paddings */
    .stats-card,
    [class*="stats-card"] {
      padding: 25px 20px !important;
    }

    [style*="padding: clamp(15px,3vw,35px) clamp(15px,3vw,30px) clamp(25px,3vw,40px)"] {
      padding: 15px 15px 20px !important;
    }

    /* Reduce header margins in sections */
    [style*="text-align: center; margin-bottom: 80px"] {
      margin-bottom: 30px !important;
    }

    /* Specifically target testimonial section header */
    section:nth-of-type(4) [style*="text-align: center; margin-bottom: 80px"] {
      margin-bottom: 20px !important;
    }

    [style*="text-align: center; margin-bottom: clamp(40px, 8vw, 90px)"] {
      margin-bottom: 30px !important;
    }

    /* Reduce spacing in stats section footer */
    [style*="margin-top: 80px; padding: 25px 40px"] {
      margin-top: 30px !important;
      padding: 15px 20px !important;
    }

    /* Reduce donation CTA padding */
    [style*="background: #D83137; border-radius: 30px; padding: clamp(40px, 8vw, 70px) clamp(20px, 5vw, 60px)"] {
      padding: 25px 20px !important;
    }

    /* Reduce testimonial card padding - make this more specific */
    section:nth-of-type(4) [style*="padding: clamp(15px,3vw,40px) clamp(15px,3vw,35px)"] {
      padding: 15px 15px !important;
    }

    /* Reduce involvement card padding */
    [style*="padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px)"] {
      padding: 15px 15px !important;
    }

    /* Reduce margins for icon containers */
    [style*="margin-bottom: clamp(20px,3vw,30px)"] {
      margin-bottom: 12px !important;
    }

    /* Reduce the decorative element size */
    [style*="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px"] {
      width: 80px !important;
      height: 80px !important;
      bottom: -15px !important;
      left: -15px !important;
    }

    /* Reduce the floating background elements */
    [style*="position: absolute; top: 10%; right: 5%; width: 200px; height: 200px"] {
      width: 100px !important;
      height: 100px !important;
    }

    [style*="position: absolute; bottom: 15%; left: 5%; width: 150px; height: 150px"] {
      width: 80px !important;
      height: 80px !important;
    }

    /* Reduce gap in flex containers */
    [style*="display: flex; gap: 20px"] {
      gap: 12px !important;
    }

    /* Reduce testimonial card bottom margins */
    section:nth-of-type(4) [style*="margin-bottom: clamp(40px,6vw,60px)"] {
      margin-bottom: 20px !important;
    }

    /* Reduce the gap between testimonial cards */
    section:nth-of-type(4) [style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr))"] {
      gap: 15px !important;
    }

    /* Reduce the quote icon size */
    section:nth-of-type(4) [style*="position: absolute; top: 15px; right: 15px"] {
      font-size: 30px !important;
    }

    /* Reduce the gap in testimonial card headers */
    section:nth-of-type(4) [style*="display: flex; align-items: center; gap: clamp(10px,2vw,20px)"] {
      gap: 10px !important;
      margin-bottom: 10px !important;
    }

    /* Reduce testimonial card paragraph margins */
    section:nth-of-type(4) p[style*="margin-bottom: clamp(20px,4vw,30px)"] {
      margin-bottom: 12px !important;
    }

    /* Reduce the colored line at bottom of testimonial cards */
    section:nth-of-type(4) [style*="display: flex; align-items: center; gap: clamp(5px,2vw,10px)"] {
      margin-top: 5px !important;
    }

    /* Reduce image sizes in testimonials */
    section:nth-of-type(4) img[style*="width: clamp(50px,12vw,70px)"] {
      width: 50px !important;
      height: 50px !important;
    }

    /* Reduce margins for the stats cards container */
    [style*="margin-bottom: 50px;"] {
      margin-bottom: 30px !important;
    }

    /* Reduce margins for the "Why These Numbers Matter" section */
    [style*="margin-top: 80px;"] {
      margin-top: 30px !important;
    }
  </style>
<section style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #FFF; position: relative; overflow: hidden; margin-top: 0rem;">

    <!-- Geometric background elements -->
    <div style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.03;"></div>
    <div style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #D83137; opacity: 0.03;"></div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <!-- Header - Responsive -->
        <div style="display: inline-flex; align-items: center; padding: 8px 20px; background-color: #FFF; color: #363558; border-radius: 50px; font-size: 14px; font-weight: 700; margin-bottom: 30px; box-shadow: 0 8px 20px rgba(0,0,0,0.06); border: 1px solid #f0f0f0;">
            <span style="display: inline-block; width: 10px; height: 10px; background-color: #46DE48; border-radius: 50%; margin-right: 10px;"></span>
            <span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Youth-Led Maternal Health Initiative</span>
        </div>

        <!-- Carousel Container -->
        <div style="position: relative; width: 100%; margin: 0px 0 60px 0;">

            <!-- Main Carousel -->
            <div id="storyCarousel" style="position: relative; width: 100%; border-radius: 30px; overflow: hidden; box-shadow: 0 35px 70px rgba(0,0,0,0.15);">

                <!-- Carousel Items Container -->
                <div id="carouselItems" style="display: flex; transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94); width: 400%;">

                    <!-- Slide 1: Our Mission (Original Hero with Words) -->
                    <div style="width: 25%; position: relative; height: 650px;">
                        <img src="{{ asset('assets/images/carousel1.png') }}" alt="Mother and Child" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(54,53,88,0.95), rgba(54,53,88,0.7));"></div>

                        <!-- Text Content - Responsive -->
                        <div class="slide1-content" style="position: absolute; top: 0; left: 0; width: 60%; height: 100%; padding: 60px 50px; color: white; display: flex; flex-direction: column; justify-content: center;">
                            <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 25px; line-height: 1.1;">Guiding Mothers Safely Home</h2>
                            <p style="font-size: 18px; line-height: 1.7; margin-bottom: 25px; opacity: 0.95;">
                                safeMom Navigator(SMN) is a community-powered maternal health program that connects expectant and new mothers with trained youth navigators who provide personalised support throughout pregnancy, childbirth, and postpartum recovery.
                            </p>
                            <p style="font-size: 18px; line-height: 1.7; font-weight: 600; border-left: 4px solid #46DE48; padding-left: 20px;">
                                Our mission is simple and powerful: no mother should walk her maternal journey alone.
                            </p>
                            <p style="font-size: 18px; line-height: 1.7; margin-top: 20px; opacity: 0.95;">
                                Through home visits, digital reminders, emergency transport coordination, and compassionate guidance, we ensure mothers receive timely, respectful, and lifesaving care — right from their communities.
                            </p>
                        </div>

                        <!-- Stats Overlay - Right Side (Hidden on mobile) -->
                        <div class="stats-overlay" style="position: absolute; top: 30px; right: 30px; background: #FFF; padding: 20px 25px; border-radius: 16px; box-shadow: 0 15px 35px rgba(0,0,0,0.15); max-width: 220px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div style="display: flex;">
                                    <div style="width: 32px; height: 32px; border-radius: 50%; background: #363558; border: 3px solid white; display: flex; align-items: center; justify-content: center;"><i class="fas fa-stethoscope" style="font-size: 12px; color: #FFF;"></i></div>
                                    <div style="width: 32px; height: 32px; border-radius: 50%; background: #363558; border: 3px solid white; margin-left: -12px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-hands-helping" style="font-size: 12px; color: #FFF;"></i></div>
                                    <div style="width: 32px; height: 32px; border-radius: 50%; background: #46DE48; border: 3px solid white; margin-left: -12px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-baby" style="font-size: 12px; color: #FFF;"></i></div>
                                </div>
                                <div>
                                    <div style="font-size: 16px; font-weight: 800; color: #363558;">50+ Navigators</div>
                                    <div style="font-size: 12px; color: #363558;">Ready to help</div>
                                </div>
                            </div>
                            <div style="height: 1px; background: #f0f0f0; margin: 15px 0;"></div>
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="background-color: #D83137; color: white; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; font-weight: bold;">♥</div>
                                <div>
                                    <div style="font-size: 26px; font-weight: 800; color: #363558; line-height: 1;">100%</div>
                                    <div style="font-size: 13px; color: #363558;">Safe Deliveries</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Community-Centered Care with Words -->
                    <div style="width: 25%; position: relative; height: 650px;">
                        <img src="{{ asset('assets/images/carousel2.png') }}" alt="Community Health Worker" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(54,53,88,0.95), rgba(54,53,88,0.7));"></div>

                        <div class="slide2-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80%; text-align: center; color: white;">
                            <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 30px;">Community-Centered Care</h2>
                            <p style="font-size: 20px; line-height: 1.6; margin-bottom: 40px;">Youth navigators providing essential maternal health support</p>
                            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                                <p style="font-size: 18px; line-height: 1.7;">At the heart of safeMom Navigator is a growing network of trained youth navigators — passionate young people who serve as trusted companions for mothers in their communities.</p>
                                <div class="stats-row" style="display: flex; gap: 30px; justify-content: center; margin-top: 30px; flex-wrap: wrap;">
                                    <div><div style="font-size: 36px; font-weight: 800; color: #46DE48;">24/7</div><div>Support Line</div></div>
                                    <div><div style="font-size: 36px; font-weight: 800; color: #46DE48;">50+</div><div>Communities</div></div>
                                    <div><div style="font-size: 36px; font-weight: 800; color: #46DE48;">100%</div><div>Dedication</div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Impact Stats with Words -->
                    <div style="width: 25%; position: relative; height: 650px;">
                        <img src="{{ asset('assets/images/carousel3.png') }}" alt="Happy Mothers" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(54,53,88,0.95), rgba(54,53,88,0.7)); opacity: 0.92;"></div>

                        <div class="slide3-content" style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center; padding: 40px;">
                            <div style="font-size: 42px; font-weight: 800; margin-bottom: 20px;">Our Impact in Numbers</div>
                            <p style="font-size: 18px; max-width: 600px; margin-bottom: 40px;">Every number represents a life changed, a mother supported, and a community strengthened through our work.</p>

                            <div class="impact-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; max-width: 500px;">
                                <div><div style="font-size: 56px; font-weight: 800; color: #46DE48;">20+</div><div style="font-size: 16px;">Mothers Supported</div><div style="font-size: 13px; opacity: 0.8;">Direct beneficiaries</div></div>
                                <div><div style="font-size: 56px; font-weight: 800; color: #46DE48;">100%</div><div style="font-size: 16px;">Safe Deliveries</div><div style="font-size: 13px; opacity: 0.8;">Zero complications</div></div>
                                <div><div style="font-size: 56px; font-weight: 800; color: #46DE48;">50+</div><div style="font-size: 16px;">Youth Trained</div><div style="font-size: 13px; opacity: 0.8;">Active navigators</div></div>
                                <div><div style="font-size: 56px; font-weight: 800; color: #46DE48;">1</div><div style="font-size: 16px;">District Covered</div><div style="font-size: 13px; opacity: 0.8;">Expanding soon</div></div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Join the Movement -->
                    <div style="width: 25%; position: relative; height: 650px;">
                        <img src="{{ asset('assets/images/carousel4.png') }}" alt="Community" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(54,53,88,0.95), rgba(54,53,88,0.7)); opacity: 0.9;"></div>

                        <div class="slide4-content" style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center; padding: 40px;">
                            <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 20px;">Be Part of the Change</h2>
                            <p style="font-size: 20px; max-width: 600px; margin-bottom: 30px;">There are many ways to support safeMom Navigator and help us reach more mothers in need.</p>

                            <div class="action-buttons" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
                                <div style="background: white; color: #363558; padding: 15px 30px; border-radius: 12px; font-weight: 700; cursor: pointer;">Become a Navigator</div>
                                <div style="background: #D83137; color: white; padding: 15px 30px; border-radius: 12px; font-weight: 700; cursor: pointer;">Volunteer</div>
                                <div style="background: #363558; color: white; padding: 15px 30px; border-radius: 12px; font-weight: 700; cursor: pointer;">Donate</div>
                            </div>

                            <div class="stats-row" style="margin-top: 50px; display: flex; gap: 40px; flex-wrap: wrap; justify-content: center;">
                                <div><div style="font-size: 30px; font-weight: 800;">20+</div><div>Active Volunteers</div></div>
                                <div><div style="font-size: 30px; font-weight: 800;">5</div><div>Partner Organizations</div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows - Responsive -->
                <button onclick="changeSlide(-1)" class="carousel-arrow left-arrow" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; box-shadow: 0 5px 15px rgba(0,0,0,0.2); font-size: 24px; display: flex; align-items: center; justify-content: center; z-index: 10; transition: all 0.3s ease;">←</button>
                <button onclick="changeSlide(1)" class="carousel-arrow right-arrow" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; box-shadow: 0 5px 15px rgba(0,0,0,0.2); font-size: 24px; display: flex; align-items: center; justify-content: center; z-index: 10; transition: all 0.3s ease;">→</button>
            </div>

            <!-- Dots Indicator -->
            <div style="display: flex; justify-content: center; gap: 12px; margin-top: 30px;">
                <span class="dot" onclick="currentSlide(1)" style="width: 40px; height: 4px; background: #363558; cursor: pointer; border-radius: 2px;"></span>
                <span class="dot" onclick="currentSlide(2)" style="width: 40px; height: 4px; background: #ddd; cursor: pointer; border-radius: 2px;"></span>
                <span class="dot" onclick="currentSlide(3)" style="width: 40px; height: 4px; background: #ddd; cursor: pointer; border-radius: 2px;"></span>
                <span class="dot" onclick="currentSlide(4)" style="width: 40px; height: 4px; background: #ddd; cursor: pointer; border-radius: 2px;"></span>
            </div>
        </div>

        <!-- Action Buttons - Responsive -->
        <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap; justify-content: center;">
            <a href="our-team" style="text-decoration: none;">
                <button style="background-color: #363558; color: white; border: none; padding: 20px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 12px 25px rgba(54,53,88,0.25); position: relative; overflow: hidden;">
                    <span style="position: relative; z-index: 2; display: flex; align-items: center;">Join Our Mission<span style="margin-left: 15px; font-size: 20px; transition: transform 0.3s ease;">→</span></span>
                </button>
            </a>
            <button style="background-color: transparent; color: #363558; border: 2px solid #363558; padding: 18px 38px; border-radius: 12px; font-size: 17px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 15px; transition: all 0.3s ease;">
                <span style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #363558; border-radius: 10px; font-size: 16px; color: white;">▶</span>
                <span>Watch Our Story</span>
            </button>
        </div>
    </div>

    <!-- Decorative element -->
    <div style="position: absolute; bottom: -30px; right: -30px; width: 150px; height: 150px; background-color: #46DE48; border-radius: 25px; transform: rotate(15deg); z-index: -1; opacity: 0.6; box-shadow: 0 25px 50px rgba(70,222,72,0.2);"></div>
</section>

<!-- Responsive Styles -->
<style>
    @media screen and (max-width: 1024px) {
        .slide1-content h2 { font-size: 40px !important; }
        .slide1-content p { font-size: 16px !important; }
        .stats-overlay { max-width: 180px !important; padding: 15px !important; }
    }

    @media screen and (max-width: 768px) {
        #storyCarousel { height: auto !important; }
        #carouselItems>div { height: 550px !important; }
        
        .slide1-content { width: 100% !important; padding: 40px 25px !important; justify-content: flex-start !important; overflow-y: auto !important; }
        .slide1-content h2 { font-size: 32px !important; margin-bottom: 15px !important; }
        .slide1-content p { font-size: 15px !important; line-height: 1.5 !important; margin-bottom: 15px !important; }
        .stats-overlay { display: none !important; }
        
        .slide2-content { width: 90% !important; }
        .slide2-content h2 { font-size: 32px !important; margin-bottom: 15px !important; }
        .slide2-content p { font-size: 16px !important; }
        .slide2-content .stats-row { gap: 15px !important; }
        .slide2-content .stats-row div div { font-size: 24px !important; }
        
        .slide3-content { padding: 25px !important; overflow-y: auto !important; }
        .slide3-content>div:first-child { font-size: 32px !important; }
        .slide3-content p { font-size: 16px !important; margin-bottom: 25px !important; }
        .impact-grid { gap: 20px !important; }
        .impact-grid div div:first-child { font-size: 36px !important; }
        
        .slide4-content { padding: 25px !important; overflow-y: auto !important; }
        .slide4-content h2 { font-size: 32px !important; }
        .slide4-content p { font-size: 16px !important; }
        .action-buttons { gap: 10px !important; }
        .action-buttons div { padding: 12px 20px !important; font-size: 14px !important; }
        .stats-row { gap: 20px !important; margin-top: 30px !important; }
        .stats-row div div:first-child { font-size: 24px !important; }
        
        .carousel-arrow { width: 40px !important; height: 40px !important; font-size: 18px !important; }
        .left-arrow { left: 10px !important; }
        .right-arrow { right: 10px !important; }
        .dot { width: 25px !important; height: 3px !important; }
        .action-buttons+div button { padding: 15px 25px !important; font-size: 15px !important; }
    }

    @media screen and (max-width: 480px) {
        #carouselItems>div { height: 500px !important; }
        .slide1-content h2 { font-size: 28px !important; }
        .impact-grid { grid-template-columns: 1fr !important; gap: 15px !important; }
        .action-buttons { flex-direction: column !important; width: 100% !important; }
        .action-buttons div { width: 100% !important; text-align: center !important; }
    }

    .carousel-arrow { -webkit-tap-highlight-color: transparent; }
    .dot { transition: background 0.3s ease; }
    .slide1-content, .slide3-content, .slide4-content { -webkit-overflow-scrolling: touch; }


    /* Fix spacing issues - Add this at the end of your existing style section */

/* Remove any top margin from the testimonials section */
section:nth-of-type(4) {
  margin-top: 0 !important;
  padding-top: 10px !important; /* Keep your existing padding */
}

/* Ensure the previous section (programs) has no bottom margin causing space */
section:nth-of-type(3) {
  margin-bottom: 0 !important;
  padding-bottom: 60px !important; /* Keep your existing padding */
}

/* Remove any default margins from the header inside testimonials */
section:nth-of-type(4) div[style*="text-align: center; margin-bottom: 80px"] {
  margin-bottom: 20px !important; /* Reduced from 80px */
}

/* Remove any potential margins from the last element in programs section */
section:nth-of-type(3) div:last-child {
  margin-bottom: 0 !important;
}

/* Ensure the container has no extra spacing */
section:nth-of-type(4) div[style*="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;"] {
  margin-top: 0 !important;
}

/* Reset any default browser margins */
section {
  margin: 0 !important;
}

/* If the space is coming from the programs section's bottom margin */
.hover-lift:last-child {
  margin-bottom: 0 !important;
}

/* Force remove any top margin from the first element in testimonials */
section:nth-of-type(4) div[style*="text-align: center;"] {
  margin-top: 0 !important;
}
</style>

<!-- JavaScript for Carousel - FIXED VERSION -->
<script>
    (function() {
        let slideIndex = 1;
        const slides = document.getElementById('carouselItems');
        const dots = document.getElementsByClassName('dot');
        const totalSlides = 4;
        let autoAdvanceTimer;
        let isTransitioning = false;

        function updateCarousel() {
            if (isTransitioning) return;
            
            isTransitioning = true;
            slides.style.transform = `translateX(-${(slideIndex - 1) * 25}%)`;

            // Update dots
            for (let i = 0; i < dots.length; i++) {
                dots[i].style.background = i + 1 === slideIndex ? '#363558' : '#ddd';
            }

            // Reset transition flag after animation completes
            setTimeout(() => {
                isTransitioning = false;
            }, 600);
        }

        function changeSlide(n) {
            if (isTransitioning) return;
            
            slideIndex += n;
            
            // Handle wrap-around
            if (slideIndex > totalSlides) {
                slideIndex = 1;
            }
            if (slideIndex < 1) {
                slideIndex = totalSlides;
            }
            
            updateCarousel();
            resetAutoAdvance();
        }

        function currentSlide(n) {
            if (isTransitioning || slideIndex === n) return;
            
            slideIndex = n;
            updateCarousel();
            resetAutoAdvance();
        }

        function startAutoAdvance() {
            if (autoAdvanceTimer) clearInterval(autoAdvanceTimer);
            autoAdvanceTimer = setInterval(() => {
                if (!isTransitioning) {
                    changeSlide(1);
                }
            }, 6000);
        }

        function resetAutoAdvance() {
            if (autoAdvanceTimer) {
                clearInterval(autoAdvanceTimer);
                startAutoAdvance();
            }
        }

        // Initialize
        startAutoAdvance();

        // Pause on hover
        document.getElementById('storyCarousel').addEventListener('mouseenter', () => {
            if (autoAdvanceTimer) clearInterval(autoAdvanceTimer);
        });

        document.getElementById('storyCarousel').addEventListener('mouseleave', () => {
            startAutoAdvance();
        });

        // Make functions globally available for onclick handlers
        window.changeSlide = changeSlide;
        window.currentSlide = currentSlide;
    })();
</script>

<!-- Add Font Awesome for icons if not already included -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <section style="
       background-color: #363558; 
       padding: 120px 5%; 
       font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; 
       text-align: center;
       position: relative;
       overflow: hidden;
   ">
    <!-- Background elements -->
    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(circle at 20% 80%, rgba(70,222,72,0.05) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(221,49,52,0.05) 0%, transparent 50%);">
    </div>

    <!-- Abstract floating elements -->
    <div
      style="position: absolute; top: 15%; left: 10%; width: 80px; height: 80px; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);">
    </div>
    <div
      style="position: absolute; bottom: 20%; right: 15%; width: 120px; height: 120px; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);">
    </div>

    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
      <div
        style="display: inline-block; padding: 10px 30px; background: #D83137; color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(221,49,52,0.3);">
        MEASURABLE IMPACT
      </div>

      <h2 style="color: white; font-size: 52px; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
        Key Impact Highlights
      </h2>

      <p
        style="color: #FFF; font-size: 19px; max-width: 700px; margin: 0 auto 80px auto; line-height: 1.7; opacity: 0.9;">
        Our work is rooted in community, powered by youth, and strengthened by data.
      </p>

      <!-- Metrics Cards with smooth animations - exactly your structure + subtle interactive effects -->
      <div
        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px; justify-items: center; margin-bottom: 50px;">

        <!-- CARD 1 - Mother supported -->
        <div class="stats-card"
          style="background: #FFF; width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25); position: relative; overflow: hidden; transition: transform 0.4s ease, box-shadow 0.5s ease;">
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: #D83137;">
          </div>
          <div class="icon-pulse"
            style="background: #D83137; width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(221,49,52,0.4); transition: all 0.4s ease;">
            <i class="bi bi-person" style="color: white; font-size: 32px; display: inline-block;"></i>
          </div>
          <div class="stat-number"
            style="color: #363558; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px; transition: transform 0.3s ease;">
            20+
          </div>
          <div style="color: #363558; font-size: 14px; font-weight: 600; transition: color 0.3s ease;">Mothers
            Supported</div>
          <div
            style="margin-top: 15px; font-size: 12px; color: #363558; display: flex; align-items: center; justify-content: center; gap: 5px; transition: color 0.3s ease;">
            <span style="color: #46DE48; display: inline-block;">▲</span>
            +12% from last year
          </div>
        </div>

        <!-- CARD 2 - Safe deliveries -->
        <div class="stats-card"
          style="background: #FFF; width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25); position: relative; overflow: hidden; transition: transform 0.4s ease, box-shadow 0.5s ease;">
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: #46DE48;">
          </div>
          <div class="icon-pulse"
            style="background: #46DE48; width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(70,222,72,0.4); transition: all 0.4s ease;">
            <i class="bi bi-balloon-heart" style="color: white; font-size: 32px;"></i>
          </div>
          <div class="stat-number"
            style="color: #363558; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px; transition: transform 0.3s ease;">
            100%
          </div>
          <div style="color: #363558; font-size: 14px; font-weight: 600; transition: color 0.3s ease;">Safe
            Deliveries</div>
          <div
            style="margin-top: 15px; font-size: 12px; color: #363558; display: flex; align-items: center; justify-content: center; gap: 5px; transition: color 0.3s ease;">
            <span style="color: #46DE48; display: inline-block;">▲</span>
            +8% from last year
          </div>
        </div>

        <!-- CARD 3 - District Covered -->
        <div class="stats-card"
          style="background: #FFF; width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25); position: relative; overflow: hidden; transition: transform 0.4s ease, box-shadow 0.5s ease;">
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: #363558;">
          </div>
          <div class="icon-pulse"
            style="background: #363558; width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(54,53,88,0.4); transition: all 0.4s ease;">
            <i class="bi bi-geo-alt" style="color: white; font-size: 32px;"></i>
          </div>
          <div class="stat-number"
            style="color: #363558; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px; transition: transform 0.3s ease;">
            1
          </div>
          <div style="color: #363558; font-size: 14px; font-weight: 600; transition: color 0.3s ease;">District
            Covered</div>
          <div
            style="margin-top: 15px; font-size: 12px; color: #363558; display: flex; align-items: center; justify-content: center; gap: 5px; transition: color 0.3s ease;">
            <span style="color: #46DE48; display: inline-block;">+5</span>
            from last year
          </div>
        </div>

        <!-- CARD 4 - Youth Navigators Trained -->
        <div class="stats-card"
          style="background: #FFF; width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25); position: relative; overflow: hidden; transition: transform 0.4s ease, box-shadow 0.5s ease;">
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: #D83137;">
          </div>
          <div class="icon-pulse"
            style="background: #D83137; width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(221,49,52,0.4); transition: all 0.4s ease;">
            <i class="bi bi-mortarboard" style="color: white; font-size: 32px;"></i>
          </div>
          <div class="stat-number"
            style="color: #363558; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px; transition: transform 0.3s ease;">
            50+
          </div>
          <div style="color: #363558; font-size: 14px; font-weight: 600; transition: color 0.3s ease;">Youth
            Navigators Trained</div>
          <div
            style="margin-top: 15px; font-size: 12px; color: #363558; display: flex; align-items: center; justify-content: center; gap: 5px; transition: color 0.3s ease;">
            <span style="color: #46DE48; display: inline-block;">▲</span>
            +22% growth
          </div>
        </div>
      </div>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

      <div
        style="margin-top: 80px; padding: 25px 40px; background: rgba(255,255,255,0.05); border-radius: 20px; max-width: 800px; margin-left: auto; margin-right: auto; border: 1px solid rgba(255,255,255,0.1);">
        <div
          style="color: white; font-size: 18px; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center; justify-content: center; gap: 15px;">
          <i class="bi bi-star-fill" style="color: #46DE48; font-size: 20px;"></i>
          Why These Numbers Matter
        </div>
        <div style="color: #FFF; font-size: 15px; margin-top: 10px;">
          <div style="display: flex; flex-direction: column; gap: 8px;">
            <div style="display: flex; align-items: flex-start; gap: 10px;">
              <i class="fas fa-female" style="color: #46DE48; font-size: 14px; margin-top: 2px;"></i>
              <div>More mothers are accessing timely ANC and PNC</div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 10px;">
              <i class="fas fa-home" style="color: #46DE48; font-size: 14px; margin-top: 2px;"></i>
              <div>More families are prepared for childbirth</div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 10px;">
              <i class="fas fa-ambulance" style="color: #46DE48; font-size: 14px; margin-top: 2px;"></i>
              <div>More emergencies are handled quickly</div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 10px;">
              <i class="fas fa-user-graduate" style="color: #46DE48; font-size: 14px; margin-top: 2px;"></i>
              <div>More youth are employed and empowered</div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 10px;">
              <i class="fas fa-shield-alt" style="color: #46DE48; font-size: 14px; margin-top: 2px;"></i>
              <div>More communities are becoming safer for mothers</div>
            </div>
          </div>
        </div>
        <p class="mt-3" style="color:#FFF;"><i>Impact data is updated quarterly in collaboration with our community
            health partners.</i></p>
      </div>
    </div>
  </section>


  <section style="padding: clamp(40px, 10vw, 120px) clamp(5%, 8vw, 10%); 
                          background: #FFF;
                          font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; 
                          position: relative; 
                          overflow: hidden;">

    <!-- Background decorative elements -->
    <div class="animated-bg"
      style="position: absolute; top: 10%; right: 5%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%);">
    </div>
    <div class="animated-bg"
      style="position: absolute; bottom: 15%; left: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%);">
    </div>

    <div style="position: relative; z-index: 2;">

      <!-- Header -->
      <div
        style="text-align: center; margin-bottom: clamp(40px, 8vw, 90px); max-width: 800px; margin-left: auto; margin-right: auto;">
        <div
          style="display: inline-block; padding: clamp(4px,1vw,8px) clamp(12px,2vw,24px); 
                            background: rgba(54,53,88,0.05); 
                            color: #363558; border-radius: 30px; font-size: clamp(12px,1.2vw,14px); font-weight: 700; margin-bottom: 20px; letter-spacing: 1px; border: 1px solid rgba(54,53,88,0.1);">
          <span style="color: #46DE48; margin-right: 6px;">✦</span> OUR COMPREHENSIVE PROGRAMS
        </div>
        <h2
          style="font-size: clamp(28px,5vw,52px); color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.1;">
          Three Stages of Holistic Maternal Care
        </h2>
        <p style="font-size: clamp(14px,3vw,19px); color: #5a5a5a; line-height: 1.6; opacity: 0.9;">
          safeMom Navigator supports mothers through the entire maternal journey, ensuring
          continuity of care from the first trimester to one year postpartum.
        </p>
      </div>

      <!-- Program cards container -->
      <div
        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: clamp(15px,3vw,30px); margin-bottom: clamp(50px, 10vw,100px); width: 100%;">

        <!-- Stage 1: Prenatal Care - animated card -->
        <div class="hover-lift"
          style="background: #FFF; border-radius: 28px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease; min-width: 0;">
          <div style="position: relative; overflow: hidden; height: clamp(150px,20vw,200px);">
            <img src="https://images.unsplash.com/photo-1518101645466-7795885ff8f8?auto=format&fit=crop&q=80&w=800"
              alt="Pregnancy Care" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
            <div style="position: absolute; inset: 0; background: rgba(54,53,88,0.2);">
            </div>
            <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
              <div
                style="display: inline-flex; align-items: center; padding: 4px 12px; background: #FFF; color: #363558; border-radius: 20px; font-size: clamp(11px,2vw,13px); font-weight: 700; gap: 6px;">
                Stage 1: Prenatal Care
              </div>
            </div>
          </div>
          <div style="padding: clamp(15px,3vw,35px) clamp(15px,3vw,30px) clamp(25px,3vw,40px);">
            <h3
              style="font-size: clamp(22px,4vw,32px); font-weight: 800; margin-bottom: 12px; line-height: 1.2; color: #363558;">
              SafePregnancy</h3>
            <p style="font-size: clamp(14px,3vw,16px); color: #5a5a5a; line-height: 1.5; margin-bottom: 25px;">
              We walk with mothers from early pregnancy through birth planning, ensuring support and follow-up.
            </p>
            <div
              style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: clamp(8px,2vw,15px); margin-bottom: 25px;">
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Appointment Reminders</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Home Visits</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Health Education</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Counseling</div>
            </div>
            <a href="SafePregnancy" style="text-decoration: none;">
              <button
                style="width: 100%; background: #D83137; color: white; border: none; padding: clamp(12px,3vw,16px); border-radius: 12px; font-size: clamp(13px,3vw,15px); font-weight: 700; cursor: pointer; box-shadow: 0 10px 20px rgba(221,49,52,0.2); transition: all 0.3s ease;">
                Learn More →
              </button>
            </a>
          </div>
          <div
            style="position: absolute; top: 15px; right: 15px; background: #D83137; color: white; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; box-shadow: 0 8px 16px rgba(221,49,52,0.3);">
            01
          </div>
        </div>

        <!-- Stage 2: Birth Support - animated card -->
        <div class="hover-lift"
          style="background: #FFF; border-radius: 28px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease; min-width: 0;">
          <div style="position: relative; overflow: hidden; height: clamp(150px,20vw,200px);">
            <img src="https://images.unsplash.com/photo-1531983412531-1f49a365ffed?auto=format&fit=crop&q=80&w=800"
              alt="Delivery Support"
              style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
            <div style="position: absolute; inset: 0; background: rgba(54,53,88,0.2);">
            </div>
            <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
              <div
                style="display: inline-flex; align-items: center; padding: 4px 12px; background: #FFF; color: #363558; border-radius: 20px; font-size: clamp(11px,2vw,13px); font-weight: 700;">
                Stage 2: Birth Support
              </div>
            </div>
          </div>
          <div style="padding: clamp(15px,3vw,35px) clamp(15px,3vw,30px) clamp(25px,3vw,40px);">
            <h3 style="font-size: clamp(22px,4vw,32px); font-weight: 800; margin-bottom: 12px; color: #363558;">
              SafeDelivery</h3>
            <p style="font-size: clamp(14px,3vw,16px); color: #5a5a5a; margin-bottom: 25px;">
              We ensure mothers reach skilled care safely and on time.
            </p>
            <div
              style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: clamp(8px,2vw,15px); margin-bottom: 25px;">
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">24/7 Helpline</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Transport Support</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Emergency Referral</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Birth Companion</div>
            </div>
            <a href="SafeDelivery" style="text-decoration: none;">
              <button
                style="width: 100%; background: #46DE48; color: white; border: none; padding: clamp(12px,3vw,16px); border-radius: 12px; font-size: clamp(13px,3vw,15px); font-weight: 700; cursor: pointer; transition: all 0.3s ease;">
                Learn More →
              </button>
            </a>
          </div>
          <div
            style="position: absolute; top: 15px; right: 15px; background: #46DE48; color: white; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; box-shadow: 0 8px 16px rgba(70,222,72,0.3);">
            02
          </div>
        </div>

        <!-- Stage 3: Postpartum Care - animated card -->
        <div class="hover-lift"
          style="background: #FFF; border-radius: 28px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease; min-width: 0;">
          <div style="position: relative; overflow: hidden; height: clamp(150px,20vw,200px);">
            <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?auto=format&fit=crop&q=80&w=800"
              alt="Postpartum Care"
              style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
            <div style="position: absolute; inset: 0; background: rgba(54,53,88,0.2);">
            </div>
            <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
              <div
                style="display: inline-flex; align-items: center; padding: 4px 12px; background: #FFF; color: #363558; border-radius: 20px; font-size: clamp(11px,2vw,13px); font-weight: 700;">
                Stage 3: Postpartum Care
              </div>
            </div>
          </div>
          <div style="padding: clamp(15px,3vw,35px) clamp(15px,3vw,30px) clamp(25px,3vw,40px);">
            <h3 style="font-size: clamp(22px,4vw,32px); font-weight: 800; margin-bottom: 12px; color: #363558;">
              SafeRecovery</h3>
            <p style="font-size: clamp(14px,3vw,16px); color: #5a5a5a; margin-bottom: 25px;">
              Continuous postpartum support for mothers and newborns.
            </p>
            <div
              style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: clamp(8px,2vw,15px); margin-bottom: 25px;">
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Mental Health</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Breastfeeding Support</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Family Planning</div>
              <div style="font-size: clamp(12px,2vw,14px); font-weight: 600; color: #363558;">Progress Tracking</div>
            </div>
            <a href="SafePostpartum" style="text-decoration: none;">
              <button
                style="width: 100%; background: #363558; color: white; border: none; padding: clamp(12px,3vw,16px); border-radius: 12px; font-size: clamp(13px,3vw,15px); font-weight: 700; cursor: pointer; transition: all 0.3s ease;">
                Learn More →
              </button>
            </a>
          </div>
          <div
            style="position: absolute; top: 15px; right: 15px; background: #363558; color: white; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; box-shadow: 0 8px 16px rgba(54,53,88,0.3);">
            03
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- SECTION 2: STORIES OF HOPE (TESTIMONIALS)    -->
  <!-- ============================================ -->
  <section
    style="padding: 10px 10%; background: #FFF; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative; overflow: hidden;">

    <!-- Animated background elements -->
    <div class="animated-bg"
      style="position: absolute; top: 10%; right: 5%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%);">
    </div>
    <div class="animated-bg"
      style="position: absolute; bottom: 15%; left: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%);">
    </div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

      <!-- Header -->
      <div style="text-align: center; margin-bottom: 80px;">
        <div
          style="display: inline-flex; align-items: center; padding: 8px 24px; background: rgba(54,53,88,0.05); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 20px; letter-spacing: 1px; border: 1px solid rgba(54,53,88,0.1);">
          <span style="color: #46DE48; margin-right: 8px;">✦</span> TESTIMONIALS & STORIES
        </div>
        <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
          Voices from the Field
        </h2>
        <p style="font-size: 19px; color: #5a5a5a; line-height: 1.7; opacity: 0.9; max-width: 700px; margin: 0 auto;">
          Real stories from mothers, youth navigators, and medical partners who are shaping
          the future of maternal health.
        </p>
      </div>

      <!-- Testimonial cards -->
      <div
        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: clamp(15px,3vw,30px); margin-bottom: clamp(40px,6vw,60px); width: 100%;">

        <!-- Testimonial 1 - Medical Partner -->
        <div class="hover-lift"
          style="background: #FFF; border-radius: 28px; padding: clamp(15px,3vw,40px) clamp(15px,3vw,35px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease; min-width: 0;">
          <div
            style="position: absolute; top: 15px; right: 15px; color: #D83137; font-size: clamp(24px,6vw,48px); opacity: 0.2; font-family: Georgia, serif;">
            "</div>
          <div
            style="display: flex; align-items: center; gap: clamp(10px,2vw,20px); margin-bottom: clamp(15px,3vw,25px); flex-wrap: wrap;">
            <img
              src="https://images.unsplash.com/photo-1666887360742-974c8fce8e6b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Dr. Peter Okello"
              style="width: clamp(50px,12vw,70px); height: clamp(50px,12vw,70px); border-radius: 20px; object-fit: cover; border: 3px solid white; box-shadow: 0 10px 20px rgba(0,0,0,0.1); flex-shrink: 0; transition: transform 0.3s ease;">
            <div style="min-width: 160px; flex: 1;">
              <div style="font-weight: 800; color: #363558; font-size: clamp(14px,3vw,18px);">Dr. Peter Okello</div>
              <div style="font-size: clamp(12px,2.5vw,14px); color: #D83137; font-weight: 600;">Medical Partner</div>
              <div style="font-size: clamp(11px,2.5vw,13px); color: #363558;">Mbale Regional Hospital</div>
            </div>
          </div>
          <p
            style="font-size: clamp(13px,3vw,16px); color: #5a5a5a; line-height: 1.6; margin-bottom: clamp(20px,4vw,30px); font-style: italic;">
            "safeMom Navigator has transformed how we connect with communities. Mothers
            arrive prepared, supported, and accompanied by their navigators. It has
            strengthened our referral system and improved outcomes"
          </p>
          <div style="display: flex; align-items: center; gap: clamp(5px,2vw,10px); flex-wrap: wrap;">
            <div style="flex: 1; height: 3px; background: #D83137; border-radius: 2px; min-width: 100px;"></div>
            <div style="color: #D83137; font-weight: 800; font-size: clamp(12px,2.5vw,14px);">Medical Partner</div>
          </div>
        </div>

        <!-- Testimonial 2 - Youth Navigator -->
        <div class="hover-lift"
          style="background: #FFF; border-radius: 28px; padding: clamp(15px,3vw,40px) clamp(15px,3vw,35px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease; min-width: 0;">
          <div
            style="position: absolute; top: 15px; right: 15px; color: #46DE48; font-size: clamp(24px,6vw,48px); opacity: 0.2; font-family: Georgia, serif;">
            "</div>
          <div
            style="display: flex; align-items: center; gap: clamp(10px,2vw,20px); margin-bottom: clamp(15px,3vw,25px); flex-wrap: wrap;">
            <img
              src="https://images.unsplash.com/photo-1507152832244-10d45c7eda57?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Sarah Namugenyi"
              style="width: clamp(50px,12vw,70px); height: clamp(50px,12vw,70px); border-radius: 20px; object-fit: cover; border: 3px solid white; box-shadow: 0 10px 20px rgba(0,0,0,0.1); flex-shrink: 0; transition: transform 0.3s ease;">
            <div style="min-width: 160px; flex: 1;">
              <div style="font-weight: 800; color: #363558; font-size: clamp(14px,3vw,18px);">Sarah Namugenyi</div>
              <div style="font-size: clamp(12px,2.5vw,14px); color: #46DE48; font-weight: 600;">Youth Navigator</div>
              <div style="font-size: clamp(11px,2.5vw,13px); color: #363558;">2 Years Experience</div>
            </div>
          </div>
          <p
            style="font-size: clamp(13px,3vw,16px); color: #5a5a5a; line-height: 1.6; margin-bottom: clamp(20px,4vw,30px); font-style: italic;">
            "Being a youth navigator changed my life. I’ve supported 24 mothers and seen
            firsthand how our work saves lives and builds stronger communities."
          </p>
          <div style="display: flex; align-items: center; gap: clamp(5px,2vw,10px); flex-wrap: wrap;">
            <div style="flex: 1; height: 3px; background: #46DE48; border-radius: 2px; min-width: 100px;">
            </div>
            <div style="color: #46DE48; font-weight: 800; font-size: clamp(12px,2.5vw,14px);">Youth Navigator</div>
          </div>
        </div>

        <!-- Testimonial 3 - Mother Supported -->
        <div class="hover-lift"
          style="background: #FFF; border-radius: 28px; padding: clamp(15px,3vw,40px) clamp(15px,3vw,35px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease; min-width: 0;">
          <div
            style="position: absolute; top: 15px; right: 15px; color: #363558; font-size: clamp(24px,6vw,48px); opacity: 0.2; font-family: Georgia, serif;">
            "</div>
          <div
            style="display: flex; align-items: center; gap: clamp(10px,2vw,20px); margin-bottom: clamp(15px,3vw,25px); flex-wrap: wrap;">
            <img
              src="https://images.unsplash.com/photo-1583994009785-37ec30bf9342?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Maria Nabirye"
              style="width: clamp(50px,12vw,70px); height: clamp(50px,12vw,70px); border-radius: 20px; object-fit: cover; border: 3px solid white; box-shadow: 0 10px 20px rgba(0,0,0,0.1); flex-shrink: 0; transition: transform 0.3s ease;">
            <div style="min-width: 160px; flex: 1;">
              <div style="font-weight: 800; color: #363558; font-size: clamp(14px,3vw,18px);">Maria Nabirye</div>
              <div style="font-size: clamp(12px,2.5vw,14px); color: #363558; font-weight: 600;">Mother Supported</div>
              <div style="font-size: clamp(11px,2.5vw,13px); color: #363558;">Safe Delivery 2023</div>
            </div>
          </div>
          <p
            style="font-size: clamp(13px,3vw,16px); color: #5a5a5a; line-height: 1.6; margin-bottom: clamp(20px,4vw,30px); font-style: italic;">
            "My navigator was with me every step of the way. From my first prenatal visit to
            holding my healthy baby girl, I never felt alone. This program saved my life."
          </p>
          <div style="display: flex; align-items: center; gap: clamp(5px,2vw,10px); flex-wrap: wrap;">
            <div style="flex: 1; height: 3px; background: #363558; border-radius: 2px; min-width: 100px;">
            </div>
            <div style="color: #363558; font-weight: 800; font-size: clamp(12px,2.5vw,14px);">Mother Supported</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- SECTION 3: GET INVOLVED (DARK THEME)         -->
  <!-- ============================================ -->
  <section
    style="padding: 120px 10%; background: #363558; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative; overflow: hidden;">

    <!-- Animated background pattern -->
    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 25% 25%, white 1px, transparent 1px); background-size: 50px 50px;">
    </div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

      <!-- Header -->
      <div style="text-align: center; margin-bottom: 80px;">
        <div
          style="display: inline-flex; align-items: center; padding: 8px 24px; background: rgba(255,255,255,0.1); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 20px; letter-spacing: 1px; border: 1px solid rgba(255,255,255,0.2);">
          <svg style="width: 16px; height: 16px; fill: #46DE48; margin-right: 8px;" viewBox="0 0 24 24">
            <path
              d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z" />
          </svg>
          GET INVOLVED
        </div>
        <h2 style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
          Join Our Mission
        </h2>
        <p style="font-size: 19px; color: #FFF; line-height: 1.7; opacity: 0.9; max-width: 700px; margin: 0 auto;">
          There are many ways to be part of the safeMom Navigator community.
        </p>
      </div>

      <!-- Involvement cards -->
      <div
        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: clamp(15px, 3vw, 25px); margin-bottom: clamp(50px, 6vw, 80px);">

        <!-- Card 1: Become a Navigator -->
        <div class="hover-lift"
          style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease, border-color 0.3s ease;">
          <div
            style="background: #D83137; width: clamp(50px,10vw,70px); height: clamp(50px,10vw,70px); border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(20px,5vw,28px); margin-bottom: clamp(20px,3vw,30px); box-shadow: 0 15px 30px rgba(221,49,52,0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;" viewBox="0 0 24 24">
              <path
                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
          </div>
          <h4 style="color: white; font-size: clamp(18px, 4vw, 22px); margin: 0 0 12px 0; font-weight: 800;">Become a
            Navigator</h4>
          <p
            style="color: #FFF; font-size: clamp(13px, 3vw, 15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px); opacity: 0.9;">
            Train as a youth navigator and make a direct impact in your community.
          </p>
          <a href="{{url('become-a-navigator')}}" class="hover-arrow"
            style="display: inline-flex; align-items: center; color: #FFF; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px; transition: color 0.2s ease;">
            Learn More
            <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
          </a>
        </div>

        <!-- Card 2: Volunteer With Us -->
        <div class="hover-lift"
          style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease, border-color 0.3s ease;">
          <div
            style="background: #46DE48; width: clamp(50px,10vw,70px); height: clamp(50px,10vw,70px); border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(20px,5vw,28px); margin-bottom: clamp(20px,3vw,30px); box-shadow: 0 15px 30px rgba(70,222,72,0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;" viewBox="0 0 24 24">
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
            </svg>
          </div>
          <h4 style="color: white; font-size: clamp(18px,4vw,22px); margin: 0 0 12px 0; font-weight: 800;">Volunteer With
            Us</h4>
          <p
            style="color: #FFF; font-size: clamp(13px,3vw,15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px); opacity: 0.9;">
            Share your skills and time to support mothers and families.
          </p>
          <a href="{{ url('become-a-volunteer') }}" class="hover-arrow"
            style="display: inline-flex; align-items: center; color: #FFF; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px; transition: color 0.2s ease;">
            Learn More
            <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
          </a>
        </div>

        <!-- Card 3: Partner With SMN -->
        <div class="hover-lift"
          style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease, border-color 0.3s ease;">
          <div
            style="background: #D83137; width: clamp(50px,10vw,70px); height: clamp(50px,10vw,70px); border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(20px,5vw,28px); margin-bottom: clamp(20px,3vw,30px); box-shadow: 0 15px 30px rgba(221,49,52,0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;" viewBox="0 0 24 24">
              <path
                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-8-2h2v-4h4v-2h-4V7h-2v4H7v2h4z" />
            </svg>
          </div>
          <h4 style="color: white; font-size: clamp(18px,4vw,22px); margin: 0 0 12px 0; font-weight: 800;">Partner With
            SMN</h4>
          <p
            style="color: #FFF; font-size: clamp(13px,3vw,15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px); opacity: 0.9;">
            Collaborate with us to expand maternal health support across Uganda.
          </p>
          <a href="{{ url('partner-with-smn') }}" class="hover-arrow"
            style="display: inline-flex; align-items: center; color: #FFF; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px; transition: color 0.2s ease;">
            Learn More
            <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
          </a>
        </div>

        <!-- Card 4: Sponsor a Mother -->
        <div class="hover-lift"
          style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease, border-color 0.3s ease;">
          <div
            style="background: #363558; width: clamp(50px,10vw,70px); height: clamp(50px,10vw,70px); border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(20px,5vw,28px); margin-bottom: clamp(20px,3vw,30px); box-shadow: 0 15px 30px rgba(54,53,88,0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;" viewBox="0 0 24 24">
              <path
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg>
          </div>
          <h4 style="color: white; font-size: clamp(18px,4vw,22px); margin: 0 0 12px 0; font-weight: 800;">Sponsor a
            Mother</h4>
          <p
            style="color: #FFF; font-size: clamp(13px,3vw,15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px); opacity: 0.9;">
            Your donation covers a mother's full journey — pregnancy, delivery, and postpartum care.
          </p>
          <a href="{{ url('donate') }}" class="hover-arrow"
            style="display: inline-flex; align-items: center; color: #FFF; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px; transition: color 0.2s ease;">
            Learn More
            <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
          </a>
        </div>
      </div>

      <!-- Donation CTA -->
      <div
        style="background: #D83137; border-radius: 30px; padding: clamp(40px, 8vw, 70px) clamp(20px, 5vw, 60px); position: relative; overflow: hidden; box-shadow: 0 30px 60px rgba(221,49,52,0.3);">

        <!-- Background pattern -->
        <div
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px); background-size: 60px 60px;">
        </div>

        <div style="position: relative; z-index: 2; text-align: center; color: white;">
          <div
            style="display: inline-flex; align-items: center; padding: clamp(8px,2vw,12px) clamp(15px,4vw,30px); background: rgba(255,255,255,0.2); color: white; border-radius: 30px; font-size: clamp(12px,3vw,15px); font-weight: 700; margin-bottom: clamp(15px,3vw,25px); border: 1px solid rgba(255,255,255,0.3); transition: transform 0.3s ease;">
            <svg style="width: clamp(16px,4vw,20px); height: clamp(16px,4vw,20px); fill: white; margin-right: 8px;"
              viewBox="0 0 24 24">
              <path
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg>
            MAKE A DIFFERENCE
          </div>

          <h3
            style="font-size: clamp(28px, 7vw, 42px); font-weight: 800; margin: 0 0 clamp(15px,4vw,20px) 0; line-height: 1.2;">
            Every Mother Deserves Safe Care
          </h3>

          <p
            style="font-size: clamp(14px,4vw,18px); margin: 0 auto clamp(20px,5vw,30px) auto; max-width: 100%; opacity: 0.9; line-height: 1.6;">
            Your donation of <span style="font-weight: 800; font-size: clamp(18px,5vw,24px); color: #363558;">$50</span>
            can
            sponsor a mother's complete journey from pregnancy to postpartum care, ensuring she receives the support she
            needs.
          </p>

          <div style="display: flex; gap: clamp(10px,3vw,20px); justify-content: center; flex-wrap: wrap;">
            <a href="{{ url('donate') }}"
              style="background: white; color: #D83137; border: none; padding: clamp(12px,3vw,18px) clamp(25px,5vw,40px); border-radius: 12px; font-size: clamp(14px,4vw,17px); font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: clamp(8px,2vw,12px); box-shadow: 0 15px 30px rgba(0,0,0,0.2); transition: all 0.3s ease; text-decoration:none; transform: translateY(0);"
              onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 25px 40px rgba(0,0,0,0.3)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
              <svg
                style="width: clamp(16px,4vw,20px); height: clamp(16px,4vw,20px); fill: #D83137; transition: transform 0.2s;"
                viewBox="0 0 24 24">
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
              </svg>
              Donate Now →
            </a>
            <a href="{{ url('Impact') }}"
              style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3); padding: clamp(12px,3vw,18px) clamp(25px,5vw,40px); border-radius: 12px; font-size: clamp(14px,4vw,17px); font-weight: 700; cursor: pointer; transition: all 0.3s ease; text-decoration:none;"
              onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='rgba(255,255,255,0.6)'; this.style.transform='translateY(-3px)';"
              onmouseout="this.style.background='transparent'; this.style.borderColor='rgba(255,255,255,0.3)'; this.style.transform='translateY(0)';">
              Learn About Impact →
            </a>
          </div>

          <div
            style="display: flex; justify-content: center; gap: clamp(15px,3vw,30px); margin-top: clamp(30px,5vw,40px); color: rgba(255,255,255,0.8); font-size: clamp(12px,3vw,14px); flex-wrap: wrap;">
            <div style="text-align: center; min-width: 80px;">
              <div style="font-size: clamp(18px,5vw,24px); font-weight: 800; color: white;">100%</div>
              <div>Direct to Programs</div>
            </div>
            <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
            <div style="text-align: center; min-width: 80px;">
              <div style="font-size: clamp(18px,5vw,24px); font-weight: 800; color: white;">20+</div>
              <div>Mothers Sponsored</div>
            </div>
            <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
            <div style="text-align: center; min-width: 80px;">
              <div style="font-size: clamp(18px,5vw,24px); font-weight: 800; color: white;">$50</div>
              <div>Complete Journey</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap Icons (preserved) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@endsection