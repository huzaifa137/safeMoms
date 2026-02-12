@extends('layouts.apps')

@section('content')

  <!-- ABOUT US PAGE - SAFEMOM NAVIGATOR STORY, MISSION, TEAM & IMPACT -->
  <style>
    /* ---------- SOFT ANIMATIONS (preserved from original) ---------- */
    @keyframes gentleFloat {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-5px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    @keyframes iconSoftPulse {
      0% {
        box-shadow: 0 15px 30px rgba(221, 49, 52, 0.3);
        transform: scale(1);
      }

      50% {
        box-shadow: 0 20px 40px rgba(221, 49, 52, 0.5);
        transform: scale(1.03);
      }

      100% {
        box-shadow: 0 15px 30px rgba(221, 49, 52, 0.3);
        transform: scale(1);
      }
    }

    @keyframes fadeSlideUp {
      0% {
        opacity: 0.7;
        transform: translateY(15px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes arrowSlide {
      0% {
        transform: translateX(0);
      }

      50% {
        transform: translateX(5px);
      }

      100% {
        transform: translateX(0);
      }
    }

    @keyframes backgroundBreath {
      0% {
        opacity: 0.05;
        transform: scale(1);
      }

      50% {
        opacity: 0.1;
        transform: scale(1.08);
      }

      100% {
        opacity: 0.05;
        transform: scale(1);
      }
    }

    @keyframes softBadgePulse {
      0% {
        box-shadow: 0 5px 15px rgba(221, 49, 52, 0.3);
        transform: scale(1);
      }

      50% {
        box-shadow: 0 8px 20px rgba(221, 49, 52, 0.5);
        transform: scale(1.05);
      }

      100% {
        box-shadow: 0 5px 15px rgba(221, 49, 52, 0.3);
        transform: scale(1);
      }
    }

    .hover-lift-team {
      transition: transform 0.4s ease, box-shadow 0.4s ease !important;
    }

    .hover-lift-team:hover {
      transform: translateY(-8px) !important;
      box-shadow: 0 35px 70px rgba(0, 0, 0, 0.15) !important;
    }

    .hover-arrow-team:hover span {
      animation: arrowSlide 0.6s ease infinite;
    }

    .bg-decorative {
      animation: backgroundBreath 12s infinite ease-in-out;
      display: block !important;
    }

    .stagger-fade {
      animation: fadeSlideUp 0.7s ease forwards;
      opacity: 0;
    }

    .nav-card-hover {
      transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.3s ease;
    }

    .nav-card-hover:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
    }

    .value-card {
      transition: all 0.3s ease;
    }

    .value-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(54, 53, 88, 0.1);
    }

    /* Responsive media queries - preserved and enhanced */
    @media (min-width: 640px) {
      .bg-decorative {
        display: block !important;
      }

      section:nth-of-type(3)>div>div:nth-of-type(2) {
        grid-template-columns: repeat(2, 1fr);
      }

      section:nth-of-type(4)>div>div:nth-of-type(2) {
        grid-template-columns: repeat(2, 1fr);
      }

      section:nth-of-type(5)>div>div:last-child {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (min-width: 768px) {
      section:nth-of-type(3)>div>div:nth-of-type(2) {
        grid-template-columns: repeat(2, 1fr);
      }

      section:nth-of-type(4)>div>div:nth-of-type(2) {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (min-width: 1024px) {
      section:nth-of-type(3)>div>div:nth-of-type(2) {
        grid-template-columns: repeat(4, 1fr);
      }

      section:nth-of-type(4)>div>div:nth-of-type(2) {
        grid-template-columns: repeat(4, 1fr);
      }

      section:nth-of-type(5)>div>div:last-child {
        display: flex;
        justify-content: center;
        gap: 40px;
      }
    }
  </style>

  <div
    style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #d2e0ed 100%);">

    <!-- ============================================ -->
    <!-- HERO SECTION - OUR STORY & BELIEF            -->
    <!-- ============================================ -->
    <section
      style="padding: clamp(80px, 10vw, 140px) 5% clamp(60px, 8vw, 100px); text-align: center; position: relative; overflow: hidden;">

      <!-- Animated background elements -->
      <div
        style="position: absolute; top: 15%; left: 3%; width: clamp(60px, 10vw, 100px); height: clamp(60px, 10vw, 100px); border: 2px dashed #DD3134; border-radius: 30px; opacity: 0.1; transform: rotate(25deg); animation: gentleFloat 8s infinite ease-in-out; display: block;"
        class="bg-decorative"></div>
      <div
        style="position: absolute; bottom: 20%; right: 5%; width: clamp(100px, 15vw, 150px); height: clamp(100px, 15vw, 150px); border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%); animation: backgroundBreath 10s infinite ease-in-out; display: block;"
        class="bg-decorative"></div>

      <div style="position: relative; z-index: 2; padding: 0 20px; animation: fadeSlideUp 0.8s ease;">
        <div
          style="display: inline-flex; align-items: center; padding: 10px clamp(20px, 3vw, 35px); background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: clamp(13px, 1.5vw, 15px); font-weight: 700; margin-bottom: 30px; letter-spacing: 1px; border: 1px solid rgba(54,53,88,0.2); backdrop-filter: blur(10px); margin-top: clamp(2rem, 5vw, 10rem);">
          <span style="color: #363558; margin-right: 12px; font-size: clamp(16px, 2vw, 20px);">
            <i class="bi bi-heart-fill" style="color: #DD3134;"></i>
          </span>
          OUR STORY
        </div>

        <h1
          style="font-size: clamp(32px, 6vw, 72px); color: #363558; margin: 0 0 30px 0; font-weight: 800; letter-spacing: -1px; line-height: 1.1;">
          Every Mother Deserves <br><span style="color: #DD3134;">a Safe Journey</span>
        </h1>

        <p
          style="font-size: clamp(18px, 2.2vw, 24px); color: #5a5a5a; max-width: 900px; margin: 0 auto 30px; line-height: 1.6; font-weight: 500;">
          SafeMom Navigator was born from a simple but powerful belief:
        </p>

        <p
          style="font-size: clamp(20px, 2.5vw, 28px); color: #363558; max-width: 900px; margin: 0 auto; line-height: 1.5; font-weight: 700; font-style: italic; padding: 20px; background: rgba(221,49,52,0.05); border-radius: 20px; border-left: 5px solid #DD3134;">
          "Every mother deserves a safe, supported, and dignified journey through pregnancy, childbirth, and postpartum."
        </p>
      </div>
    </section>

    <!-- ============================================ -->
    <!-- THE GAP & OUR SOLUTION                       -->
    <!-- ============================================ -->
    <section style="padding: clamp(60px, 8vw, 100px) 5%; background: white; position: relative;">
      <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 10% 20%, #363558 1px, transparent 1px); background-size: clamp(30px, 5vw, 50px) clamp(30px, 5vw, 50px); animation: backgroundBreath 20s infinite ease-in-out;">
      </div>

      <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: clamp(30px, 5vw, 60px); align-items: center;">

          <!-- The Challenge -->
          <div style="animation: fadeSlideUp 0.7s ease;">
            <div
              style="display: inline-block; padding: 10px clamp(20px, 3vw, 30px); background: rgba(221,49,52,0.1); color: #363558; border-radius: 30px; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; margin-bottom: 25px;">
              THE CHALLENGE
            </div>
            <h3 style="font-size: clamp(28px, 3.5vw, 36px); color: #363558; margin-bottom: 25px; font-weight: 800;">
              Three <span style="color: #DD3134;">Preventable</span> Delays
            </h3>
            <p style="color: #5a5a5a; font-size: clamp(16px, 1.8vw, 18px); line-height: 1.7; margin-bottom: 20px;">
              Yet in many communities, mothers still face <span style="color: #DD3134; font-weight: 700;">preventable
                delays</span> — delays in recognising danger signs, delays in reaching a health facility, and delays in
              receiving timely care.
            </p>
            <div style="background: rgba(54,53,88,0.05); padding: 25px; border-radius: 20px; margin-top: 20px;">
              <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: center;">
                <span
                  style="background: #DD3134; color: white; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                <span style="font-weight: 600; color: #363558;">Delay in recognizing danger signs</span>
              </div>
              <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: center;">
                <span
                  style="background: #DD3134; color: white; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                <span style="font-weight: 600; color: #363558;">Delay in reaching a health facility</span>
              </div>
              <div style="display: flex; gap: 15px; align-items: center;">
                <span
                  style="background: #DD3134; color: white; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                <span style="font-weight: 600; color: #363558;">Delay in receiving timely care</span>
              </div>
            </div>
          </div>

          <!-- Our Solution -->
          <div style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.2s; animation-fill-mode: both;">
            <div
              style="display: inline-block; padding: 10px clamp(20px, 3vw, 30px); background: rgba(70,222,72,0.1); color: #363558; border-radius: 30px; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; margin-bottom: 25px;">
              OUR SOLUTION
            </div>
            <h3 style="font-size: clamp(28px, 3.5vw, 36px); color: #363558; margin-bottom: 25px; font-weight: 800;">
              Youth-Led, <span style="color: #46DE48;">Community-Powered</span>
            </h3>
            <p style="color: #5a5a5a; font-size: clamp(16px, 1.8vw, 18px); line-height: 1.7;">
              To bridge these gaps, SafeMom Navigator introduced a <span
                style="color: #46DE48; font-weight: 700;">youth-led, community-powered model</span> that places trained
              young people at the heart of maternal health support. These youth navigators walk alongside mothers from the
              first trimester to one year postpartum, offering education, follow-up, emotional support, and emergency
              coordination.
            </p>
            <div style="margin-top: 30px; padding: 20px; background: #363558; border-radius: 20px; color: white;">
              <span style="font-size: 20px; font-weight: 700;">What began as a small initiative in Jinja District</span>
              <p style="margin-top: 10px; opacity: 0.9;">has grown into a scalable model that strengthens community health
                systems, empowers youth, and saves lives.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!-- MISSION, VISION & CORE VALUES                -->
    <!-- ============================================ -->
    <section
      style="padding: clamp(60px, 8vw, 100px) 5%; background: linear-gradient(135deg, #E7E9ED 0%, #ffffff 100%); position: relative;">

      <div
        style="position: absolute; top: 10%; right: 5%; width: clamp(100px, 15vw, 200px); height: clamp(100px, 15vw, 200px); border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%); animation: backgroundBreath 14s infinite ease-in-out;"
        class="bg-decorative"></div>

      <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <!-- Mission & Vision Cards -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: clamp(25px, 4vw, 40px); margin-bottom: 60px;">

          <!-- Mission Card -->
          <div class="hover-lift-team"
            style="background: white; border-radius: 25px; padding: 40px 30px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; animation: fadeSlideUp 0.7s ease;">
            <div
              style="width: 60px; height: 60px; background: rgba(221,49,52,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
              <i class="bi bi-bullseye" style="font-size: 30px; color: #DD3134;"></i>
            </div>
            <h3 style="font-size: clamp(28px, 3vw, 32px); color: #363558; margin-bottom: 20px; font-weight: 800;">Our
              Mission</h3>
            <p style="font-size: clamp(16px, 1.8vw, 18px); color: #5a5a5a; line-height: 1.7;">
              To empower communities with the knowledge, tools, and support needed to ensure <span
                style="color: #DD3134; font-weight: 700;">safe pregnancy, safe delivery, and safe postpartum care</span>
              for every mother — starting at the household level.
            </p>
          </div>

          <!-- Vision Card -->
          <div class="hover-lift-team"
            style="background: white; border-radius: 25px; padding: 40px 30px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; animation: fadeSlideUp 0.7s ease; animation-delay: 0.15s; animation-fill-mode: both;">
            <div
              style="width: 60px; height: 60px; background: rgba(70,222,72,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
              <i class="bi bi-eye" style="font-size: 30px; color: #46DE48;"></i>
            </div>
            <h3 style="font-size: clamp(28px, 3vw, 32px); color: #363558; margin-bottom: 20px; font-weight: 800;">Our
              Vision</h3>
            <p style="font-size: clamp(16px, 1.8vw, 18px); color: #5a5a5a; line-height: 1.7;">
              <span style="font-weight: 700;">A Uganda where no mother dies while giving life</span>, and where every
              woman — regardless of location, income, or background — receives timely, compassionate, and high-quality
              maternal health support.
            </p>
          </div>
        </div>

        <!-- Core Values Section -->
        <div
          style="text-align: center; margin-bottom: 40px; animation: fadeSlideUp 0.7s ease; animation-delay: 0.3s; animation-fill-mode: both;">
          <div
            style="display: inline-block; padding: 10px clamp(20px, 3vw, 30px); background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; margin-bottom: 25px;">
            OUR CORE VALUES
          </div>
          <h3 style="font-size: clamp(32px, 4vw, 42px); color: #363558; margin-bottom: 20px; font-weight: 800;">
            What <span style="color: #DD3134;">Guides</span> Us
          </h3>
        </div>

        <!-- Values Grid -->
        <div
          style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; padding: 0 20px;">

          <div class="value-card"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.3s ease;">
            <span style="font-size: 32px; color: #DD3134; margin-bottom: 15px; display: block;"><i
                class="bi bi-heart-fill"></i></span>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 12px;">Compassion</h4>
            <p style="color: #5a5a5a; line-height: 1.6;">Every mother deserves dignity and care</p>
          </div>

          <div class="value-card"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
            <span style="font-size: 32px; color: #46DE48; margin-bottom: 15px; display: block;"><i
                class="bi bi-people-fill"></i></span>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 12px;">Equity</h4>
            <p style="color: #5a5a5a; line-height: 1.6;">No woman should be left behind</p>
          </div>

          <div class="value-card"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
            <span style="font-size: 32px; color: #91746E; margin-bottom: 15px; display: block;"><i
                class="bi bi-house-heart-fill"></i></span>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 12px;">Community</h4>
            <p style="color: #5a5a5a; line-height: 1.6;">Solutions must be rooted in local realities</p>
          </div>

          <div class="value-card"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
            <span style="font-size: 32px; color: #373358; margin-bottom: 15px; display: block;"><i
                class="bi bi-stars"></i></span>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 12px;">Youth Empowerment</h4>
            <p style="color: #5a5a5a; line-height: 1.6;">Young people are catalysts for change</p>
          </div>

          <div class="value-card"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
            <span style="font-size: 32px; color: #DD3134; margin-bottom: 15px; display: block;"><i
                class="bi bi-lightbulb-fill"></i></span>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 12px;">Innovation</h4>
            <p style="color: #5a5a5a; line-height: 1.6;">Technology should simplify, not complicate</p>
          </div>

          <div class="value-card"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
            <span style="font-size: 32px; color: #46DE48; margin-bottom: 15px; display: block;"><i
                class="bi bi-bar-chart-fill"></i></span>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 12px;">Accountability</h4>
            <p style="color: #5a5a5a; line-height: 1.6;">Data drives improvement and transparency</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!-- OUR LEADERSHIP - FROM PDF                    -->
    <!-- ============================================ -->
<!-- ============================================ -->
<!-- OUR LEADERSHIP - FROM PDF - HORIZONTAL GRID   -->
<!-- ============================================ -->
<section style="padding: clamp(60px, 8vw, 100px) 5%; background: white; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 10% 20%, #363558 1px, transparent 1px); background-size: clamp(30px, 5vw, 50px) clamp(30px, 5vw, 50px);"></div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: clamp(40px, 6vw, 80px); padding: 0 20px;">
            <div style="display: inline-block; padding: 10px clamp(20px, 3vw, 30px); background: rgba(221,49,52,0.1); color: #363558; border-radius: 30px; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; margin-bottom: 25px; border: 1px solid rgba(221,49,52,0.2);">
                LEADERSHIP TEAM
            </div>
            <h3 style="font-size: clamp(32px, 4vw, 48px); color: #363558; margin-bottom: 25px; font-weight: 800;">Our <span style="color: #DD3134;">Leadership</span></h3>
            <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: clamp(16px, 2vw, 18px);">
                Powered by a diverse team of leaders who bring passion, expertise, and lived experience to maternal health.
            </p>
        </div>

        <!-- Leadership Grid - HORIZONTAL LAYOUT with responsive columns -->
        <style>
            .leadership-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 30px;
                padding: 0 20px;
                margin-bottom: 40px;
            }
            
            @media (max-width: 1100px) {
                .leadership-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            
            @media (max-width: 640px) {
                .leadership-grid {
                    grid-template-columns: 1fr;
                }
            }
            
            .leadership-grid-second {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
                padding: 0 20px;
            }
            
            @media (max-width: 900px) {
                .leadership-grid-second {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            
            @media (max-width: 640px) {
                .leadership-grid-second {
                    grid-template-columns: 1fr;
                }
            }
            
            .leader-card {
                background: white;
                border-radius: 25px;
                overflow: hidden;
                box-shadow: 0 25px 60px rgba(0,0,0,0.1);
                border: 1px solid #f0f0f0;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
                height: 100%;
                display: flex;
                flex-direction: column;
            }
            
            .leader-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 35px 70px rgba(0,0,0,0.15);
            }
            
            .leader-image-container {
                position: relative;
                height: 280px;
                overflow: hidden;
            }
            
            .leader-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.7s ease;
            }
            
            .leader-image:hover {
                transform: scale(1.05);
            }
            
            .leader-badge {
                position: absolute;
                top: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                font-weight: bold;
                color: white;
                box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            }
            
            .leader-tag {
                position: absolute;
                top: -20px;
                left: 25px;
                padding: 6px 20px;
                border-radius: 15px;
                font-size: 12px;
                font-weight: 700;
                color: white;
                box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            }
            
            .leader-content {
                padding: 30px 25px;
                position: relative;
                flex-grow: 1;
            }
        </style>

        <!-- First Row - 4 Leaders -->
        <div class="leadership-grid">
            <!-- 1. Isiko Isaac - Executive Director & Co-Founder -->
            <div class="leader-card" style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.1s; animation-fill-mode: both;">
                <div class="leader-image-container">
                    <img src="{{ asset('assets/images/president.jpg') }}" class="leader-image" alt="Isiko Isaac">
                    <div class="leader-badge" style="background: #DD3134;">ED</div>
                    <div class="leader-tag" style="background: #DD3134;">FOUNDER</div>
                </div>
                <div class="leader-content">
                    <h4 style="margin: 15px 0 5px 0; color: #363558; font-size: 22px; font-weight: 800;">Isiko Isaac</h4>
                    <div style="color: #DD3134; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Executive Director & Co-Founder</div>
                    <p style="font-size: 14px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Founder of SafeMom Navigator, public health practitioner, and youth empowerment advocate. Leads strategic direction and partnerships.
                    </p>
                    <div style="font-size: 13px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                        <span style="color: #DD3134;">10+</span> Years Experience
                    </div>
                </div>
            </div>

            <!-- 2. Mr Tobiloba Oyejide Alex Omotosho - Director Research and Innovation -->
            <div class="leader-card" style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.2s; animation-fill-mode: both;">
                <div class="leader-image-container">
                    <img src="{{ asset('assets/images/man.jpg') }}" class="leader-image" alt="Tobiloba Oyejide Alex Omotosho">
                    <div class="leader-badge" style="background: #46DE48;">PhD</div>
                    <div class="leader-tag" style="background: #46DE48;">RESEARCH</div>
                </div>
                <div class="leader-content">
                    <h4 style="margin: 15px 0 5px 0; color: #363558; font-size: 22px; font-weight: 800;">Mr Tobiloba Oyejide Alex Omotosho</h4>
                    <div style="color: #46DE48; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Director Research and Innovation</div>
                    <p style="font-size: 14px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        BSc in Nursing, MSc in Community Health Nursing. Registered nurse and lecturer, pursuing PhD in Nursing at UBC.
                    </p>
                    <div style="font-size: 13px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                        <span style="color: #46DE48;">PhD Candidate</span>
                    </div>
                </div>
            </div>

            <!-- 3. Dr Mirembe Christine Sabano - Programs Director -->
            <div class="leader-card" style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.3s; animation-fill-mode: both;">
                <div class="leader-image-container">
                    <img src="{{ asset('assets/images/woman.jpg') }}" class="leader-image" alt="Dr Mirembe Christine Sabano">
                    <div class="leader-badge" style="background: #91746E;">MD</div>
                    <div class="leader-tag" style="background: #91746E;">PROGRAMS</div>
                </div>
                <div class="leader-content">
                    <h4 style="margin: 15px 0 5px 0; color: #363558; font-size: 22px; font-weight: 800;">Dr Mirembe Christine Sabano</h4>
                    <div style="color: #91746E; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Programs Director</div>
                    <p style="font-size: 14px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Medical doctor from Uganda Christian University. Leads maternal and child health initiatives, navigator training, and community engagement.
                    </p>
                    <div style="font-size: 13px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                        <span style="color: #91746E;">MBChB</span>
                    </div>
                </div>
            </div>

            <!-- 4. Mr Bukenya Huzaifah - Digital Health Lead -->
            <div class="leader-card" style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.4s; animation-fill-mode: both;">
                <div class="leader-image-container">
                    <img src="{{ asset('assets/images/man.jpg') }}" class="leader-image" alt="Mr Bukenya Huzaifah">
                    <div class="leader-badge" style="background: #373358;">DH</div>
                    <div class="leader-tag" style="background: #373358;">DIGITAL</div>
                </div>
                <div class="leader-content">
                    <h4 style="margin: 15px 0 5px 0; color: #363558; font-size: 22px; font-weight: 800;">Mr Bukenya Huzaifah</h4>
                    <div style="color: #373358; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Digital Health Lead</div>
                    <p style="font-size: 14px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Oversees the SafeMoms Navigator digital platform, managing data systems, technology integration, and digital solutions.
                    </p>
                    <div style="font-size: 13px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                        <span style="color: #373358;">Tech Innovation</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row - 3 Leaders (Centered) -->
        <div class="leadership-grid-second" style="justify-content: center; max-width: 1100px; margin: 0 auto;">
            <!-- 5. Nakatabira Rebecca - Community Engagement Coordinator -->
            <div class="leader-card" style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.5s; animation-fill-mode: both;">
                <div class="leader-image-container">
                    <img src="{{ asset('assets/images/woman.jpg') }}" class="leader-image" alt="Nakatabira Rebecca">
                    <div class="leader-badge" style="background: #DD3134;">CE</div>
                    <div class="leader-tag" style="background: #DD3134;">COMMUNITY</div>
                </div>
                <div class="leader-content">
                    <h4 style="margin: 15px 0 5px 0; color: #363558; font-size: 22px; font-weight: 800;">Nakatabira Rebecca</h4>
                    <div style="color: #DD3134; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Community Engagement Coordinator</div>
                    <p style="font-size: 14px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Leads community outreach and health education initiatives in remote areas. Builds partnerships with local leaders and advocates for culturally sensitive interventions.
                    </p>
                    <div style="font-size: 13px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                        <span style="color: #DD3134;">Midwifery Expert</span>
                    </div>
                </div>
            </div>

            <!-- 6. Mr Isiko Jonathan Emmanuel - Operations Director -->
            <div class="leader-card" style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.6s; animation-fill-mode: both;">
                <div class="leader-image-container">
                    <img src="{{ asset('assets/images/man.jpg') }}" class="leader-image" alt="Mr Isiko Jonathan Emmanuel">
                    <div class="leader-badge" style="background: #46DE48;">OD</div>
                    <div class="leader-tag" style="background: #46DE48;">OPERATIONS</div>
                </div>
                <div class="leader-content">
                    <h4 style="margin: 15px 0 5px 0; color: #363558; font-size: 22px; font-weight: 800;">Mr Isiko Jonathan Emmanuel</h4>
                    <div style="color: #46DE48; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Operations Director</div>
                    <p style="font-size: 14px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Leads community mobilisation efforts, coordinates mother support groups, and develops local partnerships to strengthen maternal health services.
                    </p>
                    <div style="font-size: 13px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                        <span style="color: #46DE48;">Community Mobilization</span>
                    </div>
                </div>
            </div>

            <!-- 7. Ms Okoro Irene - Partnership Manager -->
            <div class="leader-card" style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.7s; animation-fill-mode: both;">
                <div class="leader-image-container">
                    <img src="{{ asset('assets/images/woman.jpg') }}" class="leader-image" alt="Ms Okoro Irene">
                    <div class="leader-badge" style="background: #91746E;">PM</div>
                    <div class="leader-tag" style="background: #91746E;">PARTNERSHIPS</div>
                </div>
                <div class="leader-content">
                    <h4 style="margin: 15px 0 5px 0; color: #363558; font-size: 22px; font-weight: 800;">Ms Okoro Irene</h4>
                    <div style="color: #91746E; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Partnership Manager</div>
                    <p style="font-size: 14px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px;">
                        Builds and manages strategic partnerships with organisations, stakeholders, and community groups to support maternal health programs.
                    </p>
                    <div style="font-size: 13px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                        <span style="color: #91746E;">Strategic Partnerships</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ============================================ -->
    <!-- BOARD OF GOVERNORS - FROM PDF                -->
    <!-- ============================================ -->
    <section
      style="padding: clamp(60px, 8vw, 100px) 5%; background: linear-gradient(135deg, #E7E9ED 0%, #ffffff 100%); position: relative;">
      <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <div style="text-align: center; margin-bottom: clamp(40px, 6vw, 80px);">
          <div
            style="display: inline-block; padding: 10px clamp(20px, 3vw, 30px); background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; margin-bottom: 25px;">
            BOARD OF GOVERNORS
          </div>
          <h3 style="font-size: clamp(32px, 4vw, 48px); color: #363558; margin-bottom: 25px; font-weight: 800;">Strategic
            <span style="color: #46DE48;">Oversight</span></h3>
          <p style="color: #5a5a5a; max-width: 800px; margin: 0 auto; font-size: clamp(16px, 2vw, 18px);">
            Our Board of Governors provides strategic oversight, governance, and accountability. They bring expertise in
            public health, maternal care, youth development, digital innovation, and community systems.
          </p>
        </div>

        <!-- Board Members Grid -->
        <div
          style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; padding: 0 20px;">

          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div
              style="width: 80px; height: 80px; background: #DD3134; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
              <span style="color: white; font-size: 32px; font-weight: bold;">CL</span>
            </div>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 5px;">Dr Okoro Lenz Nwachinemere
            </h4>
            <div style="color: #DD3134; font-weight: 700; margin-bottom: 15px;">Board Chair</div>
            <p style="color: #5a5a5a; font-size: 14px;">Expert in maternal and child health systems strengthening.</p>
          </div>

          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div
              style="width: 80px; height: 80px; background: #46DE48; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
              <span style="color: white; font-size: 32px; font-weight: bold;">KF</span>
            </div>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 5px;">Kuli Faith Rombe</h4>
            <div style="color: #46DE48; font-weight: 700; margin-bottom: 15px;">Board Member</div>
            <p style="color: #5a5a5a; font-size: 14px;">Public health researcher, specialising in malaria, HIV, and
              epidemiology.</p>
          </div>

          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div
              style="width: 80px; height: 80px; background: #91746E; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
              <span style="color: white; font-size: 32px; font-weight: bold;">KB</span>
            </div>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 5px;">Mr Kyomuhendo Bruhan</h4>
            <div style="color: #91746E; font-weight: 700; margin-bottom: 15px;">Board Member</div>
            <p style="color: #5a5a5a; font-size: 14px;">Digital health and innovation specialist.</p>
          </div>

          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div
              style="width: 80px; height: 80px; background: #373358; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
              <span style="color: white; font-size: 32px; font-weight: bold;">AM</span>
            </div>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 5px;">Mr Asingwire Micheal
              Jackson</h4>
            <div style="color: #373358; font-weight: 700; margin-bottom: 15px;">Board Member</div>
            <p style="color: #5a5a5a; font-size: 14px;">Community development and youth empowerment advocate.</p>
          </div>

          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 30px 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; grid-column: span 1; max-width: 350px; margin: 0 auto;">
            <div
              style="width: 80px; height: 80px; background: #DD3134; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
              <span style="color: white; font-size: 32px; font-weight: bold;">NO</span>
            </div>
            <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 5px;">Nabiryo Oliver</h4>
            <div style="color: #DD3134; font-weight: 700; margin-bottom: 15px;">Board Member</div>
            <p style="color: #5a5a5a; font-size: 14px;">Registered nurse with expertise in child and maternal health,
              mental health and youth advocacy.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!-- TOP-PERFORMING NAVIGATORS - FROM PDF         -->
    <!-- ============================================ -->
    <section style="padding: clamp(60px, 8vw, 100px) 5%; background: white; position: relative;">
      <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <div style="text-align: center; margin-bottom: clamp(40px, 6vw, 80px); padding: 0 20px;">
          <div
            style="display: inline-flex; align-items: center; padding: 10px clamp(20px, 3vw, 35px); background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: clamp(13px, 1.5vw, 15px); font-weight: 700; margin-bottom: 25px;">
            <span style="color: #DD3134; margin-right: 12px;"><i class="bi bi-star-fill"></i></span>
            STAR NAVIGATORS
          </div>
          <h3 style="font-size: clamp(32px, 4vw, 48px); color: #363558; margin-bottom: 25px; font-weight: 800;">Heart of
            <span style="color: #46DE48;">SafeMom</span></h3>
          <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: clamp(16px, 2vw, 18px);">
            Our youth navigators are the heart of SafeMom Navigator. They are trained, compassionate, and deeply committed
            to supporting mothers in their communities.
          </p>
        </div>

        <!-- Navigator Grid -->
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; padding: 0 20px;">

          <!-- Sarah - Jinja District -->
          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div style="position: relative; width: 80px; height: 80px; margin: 0 auto 15px;">
              <img src="https://images.unsplash.com/photo-1666867540898-aaa1993ffabc?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
              <div
                style="position: absolute; top: -5px; right: -5px; background: #DD3134; color: white; font-size: 12px; padding: 3px 8px; border-radius: 12px; font-weight: bold;">
                TOP</div>
            </div>
            <div style="font-size: 18px; font-weight: 800; color: #363558; margin-bottom: 5px;">Sarah</div>
            <div style="font-size: 13px; color: #46DE48; font-weight: 700; margin-bottom: 8px;">
              <i class="bi bi-geo-alt"></i> Jinja District
            </div>
            <div style="font-size: 24px; font-weight: 800; color: #DD3134; margin-bottom: 5px;">24+</div>
            <div style="font-size: 12px; color: #373358;">Mothers Supported</div>
            <p style="font-size: 13px; color: #5a5a5a; margin-top: 10px; font-style: italic;">"Known for dedication and
              emergency response skills"</p>
          </div>

          <!-- Maria Nansubuga - Walukuba-Masese -->
          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div style="position: relative; width: 80px; height: 80px; margin: 0 auto 15px;">
              <img src="https://images.unsplash.com/photo-1694452882464-65ccaac5dcc1?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8b2ZmaWNlJTIwZ2lybCUyMGFmcmljYXxlbnwwfHwwfHx8MA%3D%3D"
                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
              <div
                style="position: absolute; top: -5px; right: -5px; background: #46DE48; color: white; font-size: 12px; padding: 3px 8px; border-radius: 12px; font-weight: bold;">
                TOP</div>
            </div>
            <div style="font-size: 18px; font-weight: 800; color: #363558; margin-bottom: 5px;">Maria Nansubuga</div>
            <div style="font-size: 13px; color: #46DE48; font-weight: 700; margin-bottom: 8px;">
              <i class="bi bi-geo-alt"></i> Walukuba-Masese
            </div>
            <p style="font-size: 13px; color: #5a5a5a; margin-top: 10px; font-style: italic;">"Recognised for outstanding
              postpartum follow-up and newborn care support"</p>
          </div>

          <!-- Peter Mugisha - Bugembe -->
          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div style="position: relative; width: 80px; height: 80px; margin: 0 auto 15px;">
              <img src="https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmxhY2slMjBndXl8ZW58MHx8MHx8fDA%3D"
                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
              <div
                style="position: absolute; top: -5px; right: -5px; background: #91746E; color: white; font-size: 12px; padding: 3px 8px; border-radius: 12px; font-weight: bold;">
                TOP</div>
            </div>
            <div style="font-size: 18px; font-weight: 800; color: #363558; margin-bottom: 5px;">Peter Mugisha</div>
            <div style="font-size: 13px; color: #46DE48; font-weight: 700; margin-bottom: 8px;">
              <i class="bi bi-geo-alt"></i> Bugembe
            </div>
            <p style="font-size: 13px; color: #5a5a5a; margin-top: 10px; font-style: italic;">"Leads in community
              mobilisation and birth preparedness education"</p>
          </div>

          <!-- Abdul Kizza - Mafubira -->
          <div class="nav-card-hover"
            style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0;">
            <div style="position: relative; width: 80px; height: 80px; margin: 0 auto 15px;">
              <img src="https://images.unsplash.com/photo-1605980776566-0486c3ac7617?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YmxhY2slMjBndXl8ZW58MHx8MHx8fDA%3D"
                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
              <div
                style="position: absolute; top: -5px; right: -5px; background: #373358; color: white; font-size: 12px; padding: 3px 8px; border-radius: 12px; font-weight: bold;">
                TOP</div>
            </div>
            <div style="font-size: 18px; font-weight: 800; color: #363558; margin-bottom: 5px;">Abdul Kizza</div>
            <div style="font-size: 13px; color: #46DE48; font-weight: 700; margin-bottom: 8px;">
              <i class="bi bi-geo-alt"></i> Mafubira
            </div>
            <p style="font-size: 13px; color: #5a5a5a; margin-top: 10px; font-style: italic;">"Known for strong
              counselling skills and high-risk case referrals"</p>
          </div>
        </div>

        <!-- Navigator Stats -->
        <div style="text-align: center; margin-top: 40px; padding: 0 20px;">
          <div
            style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 20px; color: #363558; font-size: 14px; font-weight: 700; gap: 15px; max-width: 600px;">
            <span style="color: #DD3134; font-size: 20px;"><i class="bi bi-people-fill"></i></span>
            <div>These navigators represent the excellence, passion, and resilience of the entire SafeMom Navigator youth
              network.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!-- WHERE WE WORK - FROM PDF                     -->
    <!-- ============================================ -->
    <section
      style="padding: clamp(60px, 8vw, 100px) 5%; background: linear-gradient(135deg, #E7E9ED 0%, #ffffff 100%); position: relative;">
      <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: clamp(30px, 5vw, 60px); align-items: center;">

          <!-- Left Content -->
          <div style="animation: fadeSlideUp 0.7s ease;">
            <div
              style="display: inline-block; padding: 10px clamp(20px, 3vw, 30px); background: rgba(221,49,52,0.1); color: #363558; border-radius: 30px; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; margin-bottom: 25px;">
              WHERE WE WORK
            </div>
            <h3 style="font-size: clamp(32px, 4vw, 42px); color: #363558; margin-bottom: 25px; font-weight: 800;">
              Serving <span style="color: #DD3134;">Uganda's</span> Communities
            </h3>
            <p style="color: #5a5a5a; font-size: 18px; line-height: 1.7; margin-bottom: 30px;">
              SafeMom Navigator operates in Uganda, focusing on communities where maternal health needs are greatest and
              where digital and community-based solutions can make the strongest impact.
            </p>

            <div
              style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 15px 30px rgba(0,0,0,0.05); margin-bottom: 20px;">
              <h4 style="color: #363558; font-size: 20px; font-weight: 800; margin-bottom: 15px;">Core Areas of Operation
              </h4>
              <ul style="list-style: none; padding: 0;">
                <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                  <span style="color: #DD3134; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                  <span><strong>Jinja District</strong> – Our primary operational base and pilot implementation
                    area</span>
                </li>
                <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                  <span style="color: #46DE48; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                  <span><strong>Surrounding Rural and Peri-Urban Communities</strong> – Where access remains
                    limited</span>
                </li>
                <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                  <span style="color: #91746E; font-size: 18px;"><i class="bi bi-check-circle-fill"></i></span>
                  <span><strong>Health Facility Catchment Areas</strong> – Strengthening referral pathways</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Right Content - Community Model -->
          <div style="animation: fadeSlideUp 0.7s ease; animation-delay: 0.2s; animation-fill-mode: both;">
            <div
              style="background: #363558; border-radius: 25px; padding: 40px 30px; color: white; box-shadow: 0 30px 60px rgba(54,53,88,0.2);">
              <h4 style="font-size: 24px; font-weight: 800; margin-bottom: 25px; color: white;">Our Community-Centred
                Model</h4>
              <p style="margin-bottom: 25px; opacity: 0.95; font-size: 16px;">
                We work directly within communities through:
              </p>
              <ul style="list-style: none; padding: 0;">
                <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                  <span
                    style="background: #46DE48; width: 24px; height: 24px; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #363558; font-weight: bold;">✓</span>
                  Household-level maternal support
                </li>
                <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                  <span
                    style="background: #46DE48; width: 24px; height: 24px; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #363558; font-weight: bold;">✓</span>
                  Youth-led navigation and follow-up
                </li>
                <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                  <span
                    style="background: #46DE48; width: 24px; height: 24px; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #363558; font-weight: bold;">✓</span>
                  Digital tools linking mothers, navigators, and facilities
                </li>
                <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                  <span
                    style="background: #46DE48; width: 24px; height: 24px; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #363558; font-weight: bold;">✓</span>
                  Strong partnerships with local leaders and healthcare providers
                </li>
              </ul>
              <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.2);">
                <p style="font-size: 16px; font-style: italic; font-weight: 600;">
                  "Scaling with purpose — expanding responsibly, guided by community needs, data insights, and health
                  system readiness."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!-- JOIN OUR MISSION - CTA                       -->
    <!-- ============================================ -->
    <section style="padding: clamp(60px, 8vw, 100px) 5%; text-align: center; position: relative;">
      <div
        style="position: relative; z-index: 2; max-width: 1000px; margin: 0 auto; padding: 0 20px; animation: fadeSlideUp 0.8s ease;">
        <div
          style="background: linear-gradient(135deg, #363558 0%, #434961 100%); padding: clamp(40px, 6vw, 80px) clamp(25px, 4vw, 60px); border-radius: 35px; color: white; box-shadow: 0 30px 60px rgba(54,53,88,0.3); position: relative; overflow: hidden;">

          <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 20px 20px, white 1px, transparent 1px); background-size: 40px 40px; animation: backgroundBreath 16s infinite ease-in-out;">
          </div>

          <div style="position: relative; z-index: 2;">
            <div
              style="display: inline-flex; align-items: center; padding: 10px 30px; background: rgba(255,255,255,0.2); color: white; border-radius: 30px; font-size: 15px; font-weight: 700; margin-bottom: 25px; backdrop-filter: blur(10px);">
              <span style="font-size: 20px; margin-right: 10px;"><i class="bi bi-megaphone-fill"></i></span>
              OUR GOAL
            </div>

            <h2 style="font-size: clamp(32px, 4vw, 48px); font-weight: 800; margin: 0 0 20px 0; line-height: 1.2;">
              <span style="color:#FFF">A Uganda where</span> <span style="color: #46DE48;">no mother dies</span>
            </h2>

            <p style="font-size: 20px; margin: 0 auto 40px; max-width: 700px; opacity: 0.95; font-weight: 600;">
              while giving life.
            </p>

            <p style="font-size: 18px; margin: 0 auto 40px; max-width: 700px; opacity: 0.9;">
              Every woman — regardless of location, income, or background — deserves timely, compassionate, and
              high-quality maternal health support.
            </p>

            <div style="display: flex; flex-direction: column; gap: 15px; justify-content: center; align-items: center;">
              <a href="#"
                style="background: #46DE48; color: white; text-decoration: none; padding: 18px 45px; border-radius: 12px; font-size: 17px; font-weight: 800; box-shadow: 0 15px 35px rgba(70,222,72,0.3); display: inline-flex; align-items: center; gap: 12px; width: 100%; max-width: 300px; justify-content: center; transition: all 0.3s ease;">
                Join Our Mission <span style="font-size: 20px;">→</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection