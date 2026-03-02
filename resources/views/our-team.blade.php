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
            .leadership-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .navigator-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Mobile Phones */
        @media (max-width: 768px) {
            .leadership-grid {
                grid-template-columns: 1fr;
            }

            .navigator-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-section {
                padding-top: 120px;
            }

            .section-title {
                font-size: 32px !important;
            }
        }

        @media (max-width: 480px) {
            .navigator-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <style>
        /* Responsive Utility Classes - Only for hero section */
        .team-container {
            padding: 60px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero-section {
            padding: 100px 5% 40px 5%;
            /* Further reduced padding */
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-size: clamp(24px, 4vw, 36px);
            /* Much smaller now */
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 10px;
            /* Reduced */
            color: #363558;
        }

        /* Adjust the MEET OUR TEAM badge - using more specific selector */
        .hero-section .badge-container {
            margin-bottom: 15px !important;
            padding: 6px 18px !important;
            font-size: 12px !important;
        }

        /* Adjust the paragraph */
        .hero-section p {
            font-size: clamp(14px, 2.5vw, 16px) !important;
            max-width: 700px !important;
            margin-top: 5px !important;
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding-top: 80px;
                padding-bottom: 30px;
            }

            .hero-title {
                font-size: clamp(22px, 5vw, 28px);
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding-top: 60px;
            }
        }

        /* Remove all other styles that might affect leadership section */
        /* DO NOT include any .leadership-grid, .leader-card, etc. styles here */
    </style>

    <style>
        /* Responsive Utility Classes - Only for hero section */
        .team-container {
            padding: 60px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero-section {
            padding: 100px 5% 40px 5%;
            /* Further reduced padding */
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-size: clamp(24px, 4vw, 36px);
            /* Much smaller now */
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 10px;
            /* Reduced */
            color: #363558;
        }

        /* Adjust the MEET OUR TEAM badge - using more specific selector */
        .hero-section .badge-container {
            margin-bottom: 15px !important;
            padding: 6px 18px !important;
            font-size: 12px !important;
        }

        /* Adjust the paragraph */
        .hero-section p {
            font-size: clamp(14px, 2.5vw, 16px) !important;
            max-width: 700px !important;
            margin-top: 5px !important;
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding-top: 80px;
                padding-bottom: 30px;
            }

            .hero-title {
                font-size: clamp(22px, 5vw, 28px);
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding-top: 60px;
            }
        }

        /* Remove all other styles that might affect leadership section */
        /* DO NOT include any .leadership-grid, .leader-card, etc. styles here */
    </style>

    <div
        style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #d2e0ed 100%);">

        <section class="hero-section">
            <div
                style="position: absolute; top: 15%; left: 5%; width: 100px; height: 100px; border: 2px dashed #DD3134; border-radius: 30px; opacity: 0.1; transform: rotate(25deg);">
            </div>

            <div style="position: relative; z-index: 2;">
                <div class="badge-container"
                    style="display: inline-flex; align-items: center; padding: 12px 25px; background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 30px; border: 1px solid rgba(54,53,88,0.2); backdrop-filter: blur(10px);">
                    <span style="margin-right: 12px; font-size: 18px;"><i class="bi bi-people"></i></span>
                    MEET OUR TEAM
                </div>

                <h1 class="hero-title">
                    The People Behind <br>the Mission
                </h1>

                <p
                    style="font-size: clamp(16px, 4vw, 22px); color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    From visionary leadership to dedicated field navigators, every team member plays a crucial role in our
                    mission to save mothers' lives across Uganda.
                </p>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- OUR LEADERSHIP - FROM PDF - HORIZONTAL GRID   -->
        <!-- ============================================ -->
        <!-- ============================================ -->
        <!-- OUR LEADERSHIP - FROM PDF - HORIZONTAL GRID   -->
        <!-- ============================================ -->
        <section style="padding: clamp(40px, 6vw, 70px) 5%; background: white; position: relative;">
            <!-- Reduced from clamp(60px, 8vw, 100px) -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 10% 20%, #363558 1px, transparent 1px); background-size: clamp(30px, 5vw, 50px) clamp(30px, 5vw, 50px);">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: clamp(25px, 4vw, 50px); padding: 0 20px;">
                    <!-- Reduced from clamp(40px, 6vw, 80px) -->
                    <div
                        style="display: inline-block; padding: 8px clamp(18px, 2.5vw, 24px); background: rgba(221,49,52,0.1); color: #363558; border-radius: 30px; font-size: clamp(11px, 1.3vw, 13px); font-weight: 700; margin-bottom: 15px; border: 1px solid rgba(221,49,52,0.2);">
                        <!-- Reduced padding and margin -->
                        LEADERSHIP TEAM
                    </div>
                    <h3 style="font-size: clamp(28px, 3.5vw, 42px); color: #363558; margin-bottom: 15px; font-weight: 800;">
                        Our <span style="color: #DD3134;">Leadership</span></h3> <!-- Reduced font size and margin -->
                    <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: clamp(15px, 1.8vw, 17px);">
                        <!-- Reduced font size -->
                        Powered by a diverse team of leaders who bring passion, expertise, and lived experience to maternal
                        health.
                    </p>
                </div>

                <!-- Leadership Grid - HORIZONTAL LAYOUT with responsive columns -->
                <style>
                    .leadership-grid {
                        display: grid;
                        grid-template-columns: repeat(4, 1fr);
                        gap: 25px;
                        /* Reduced from 30px */
                        padding: 0 15px;
                        /* Reduced from 20px */
                        margin-bottom: 30px;
                        /* Reduced from 40px */
                    }

                    @media (max-width: 1100px) {
                        .leadership-grid {
                            grid-template-columns: repeat(2, 1fr);
                            gap: 20px;
                            /* Reduced */
                        }
                    }

                    @media (max-width: 640px) {
                        .leadership-grid {
                            grid-template-columns: 1fr;
                            gap: 20px;
                            /* Reduced */
                        }
                    }

                    .leadership-grid-second {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        gap: 25px;
                        /* Reduced from 30px */
                        padding: 0 15px;
                        /* Reduced from 20px */
                    }

                    @media (max-width: 900px) {
                        .leadership-grid-second {
                            grid-template-columns: repeat(2, 1fr);
                            gap: 20px;
                            /* Reduced */
                        }
                    }

                    @media (max-width: 640px) {
                        .leadership-grid-second {
                            grid-template-columns: 1fr;
                            gap: 20px;
                            /* Reduced */
                        }
                    }

                    .leader-card {
                        background: white;
                        border-radius: 20px;
                        /* Reduced from 25px */
                        overflow: hidden;
                        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
                        /* Reduced shadow */
                        border: 1px solid #f0f0f0;
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                        /* Faster transition */
                        height: 100%;
                        display: flex;
                        flex-direction: column;
                    }

                    .leader-card:hover {
                        transform: translateY(-5px);
                        /* Reduced from -8px */
                        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
                        /* Reduced shadow */
                    }

                    .leader-image-container {
                        position: relative;
                        height: 240px;
                        /* Reduced from 280px */
                        overflow: hidden;
                    }

                    .leader-image {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.5s ease;
                        /* Faster transition */
                    }

                    .leader-image:hover {
                        transform: scale(1.03);
                        /* Reduced from 1.05 */
                    }

                    .leader-badge {
                        position: absolute;
                        top: 15px;
                        /* Reduced from 20px */
                        right: 15px;
                        /* Reduced from 20px */
                        width: 40px;
                        /* Reduced from 50px */
                        height: 40px;
                        /* Reduced from 50px */
                        border-radius: 10px;
                        /* Reduced from 12px */
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 16px;
                        /* Reduced from 20px */
                        font-weight: bold;
                        color: white;
                        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
                        /* Reduced shadow */
                    }

                    .leader-tag {
                        position: absolute;
                        top: -15px;
                        /* Adjusted from -20px */
                        left: 20px;
                        /* Reduced from 25px */
                        padding: 4px 16px;
                        /* Reduced from 6px 20px */
                        border-radius: 12px;
                        /* Reduced from 15px */
                        font-size: 11px;
                        /* Reduced from 12px */
                        font-weight: 700;
                        color: white;
                        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
                        /* Reduced shadow */
                    }

                    .leader-content {
                        padding: 20px 20px;
                        /* Reduced from 30px 25px */
                        position: relative;
                        flex-grow: 1;
                    }

                    .leader-content h4 {
                        margin: 10px 0 3px 0 !important;
                        /* Reduced from 15px 0 5px 0 */
                        font-size: 20px !important;
                        /* Reduced from 22px */
                    }

                    .leader-content div[style*="color"] {
                        margin-bottom: 10px !important;
                        /* Reduced from 15px */
                        font-size: 14px !important;
                        /* Reduced from 15px */
                    }

                    .leader-content p {
                        font-size: 13px !important;
                        /* Reduced from 14px */
                        line-height: 1.5 !important;
                        /* Slightly reduced */
                        margin-bottom: 15px !important;
                        /* Reduced from 20px */
                    }

                    .leader-content div[style*="border-top"] {
                        padding-top: 12px !important;
                        /* Reduced from 15px */
                        font-size: 12px !important;
                        /* Reduced from 13px */
                    }
                </style>

                <!-- First Row - 4 Leaders -->
                <div class="leadership-grid">
                    <!-- 1. Isiko Isaac - Executive Director & Co-Founder -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.1s; animation-fill-mode: both;">
                        <!-- Faster animation -->
                        <div class="leader-image-container">
                            <img src="{{ asset('assets/images/president.jpg') }}" class="leader-image" alt="Isiko Isaac">
                            <div class="leader-badge" style="background: #DD3134;">ED</div>
                            <div class="leader-tag" style="background: #DD3134;">FOUNDER</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Isiko Isaac
                            </h4> <!-- Reduced margin and font size -->
                            <div style="color: #DD3134; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Executive
                                Director & Co-Founder</div> <!-- Reduced -->
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                <!-- Reduced -->
                                Founder of SafeMom Navigator, public health practitioner, and youth empowerment advocate.
                                Leads strategic direction and partnerships.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <!-- Reduced -->
                                <span style="color: #DD3134;">10+</span> Years Experience
                            </div>
                        </div>
                    </div>

                    <!-- 2. Mr Tobiloba Oyejide Alex Omotosho - Director Research and Innovation -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.2s; animation-fill-mode: both;">
                        <div class="leader-image-container">
                            <img src="{{ asset('assets/images/man.jpg') }}" class="leader-image"
                                alt="Tobiloba Oyejide Alex Omotosho">
                            <div class="leader-badge" style="background: #46DE48;">PhD</div>
                            <div class="leader-tag" style="background: #46DE48;">RESEARCH</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Mr Tobiloba
                                Oyejide Alex Omotosho</h4>
                            <div style="color: #46DE48; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Director
                                Research and Innovation</div>
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                BSc in Nursing, MSc in Community Health Nursing. Registered nurse and lecturer, pursuing PhD
                                in Nursing at UBC.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <span style="color: #46DE48;">PhD Candidate</span>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Dr Mirembe Christine Sabano - Programs Director -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.3s; animation-fill-mode: both;">
                        <div class="leader-image-container">
                            <img src="{{ asset('assets/images/woman.jpg') }}" class="leader-image"
                                alt="Dr Mirembe Christine Sabano">
                            <div class="leader-badge" style="background: #DD3134;">MD</div>
                            <div class="leader-tag" style="background: #DD3134;">PROGRAMS</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Dr Mirembe
                                Christine Sabano</h4>
                            <div style="color: #91746E; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Programs
                                Director</div>
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                Medical doctor from Uganda Christian University. Leads maternal and child health
                                initiatives, navigator training, and community engagement.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <span style="color: #91746E;">MBChB</span>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Mr Bukenya Huzaifah - Digital Health Lead -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.4s; animation-fill-mode: both;">
                        <div class="leader-image-container">
                            <img src="{{ asset('assets/images/man.jpg') }}" class="leader-image" alt="Mr Bukenya Huzaifah">
                            <div class="leader-badge" style="background: #373358;">DH</div>
                            <div class="leader-tag" style="background: #373358;">DIGITAL</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Mr Bukenya
                                Huzaifah</h4>
                            <div style="color: #373358; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Digital
                                Health Lead</div>
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                Oversees the SafeMoms Navigator digital platform, managing data systems, technology
                                integration, and digital solutions.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <span style="color: #373358;">Tech Innovation</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Row - 3 Leaders (Centered) -->
                <div class="leadership-grid-second" style="justify-content: center; max-width: 1100px; margin: 0 auto;">
                    <!-- 5. Nakatabira Rebecca - Community Engagement Coordinator -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.5s; animation-fill-mode: both;">
                        <div class="leader-image-container">
                            <img src="{{ asset('assets/images/Nakatabira.jpg') }}" class="leader-image" alt="Nakatabira Rebecca">
                            <div class="leader-badge" style="background: #DD3134;">CE</div>
                            <div class="leader-tag" style="background: #DD3134;">COMMUNITY</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Nakatabira
                                Rebecca</h4>
                            <div style="color: #DD3134; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Community
                                Engagement Coordinator</div>
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                Leads community outreach and health education initiatives in remote areas. Builds
                                partnerships with local leaders and advocates for culturally sensitive interventions.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <span style="color: #DD3134;">Midwifery Expert</span>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Mr Isiko Jonathan Emmanuel - Operations Director -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.6s; animation-fill-mode: both;">
                        <div class="leader-image-container">
                            <img src="{{ asset('assets/images/Isiko.jpg') }}" class="leader-image"
                                alt="Mr Isiko Jonathan Emmanuel">
                            <div class="leader-badge" style="background: #46DE48;">OD</div>
                            <div class="leader-tag" style="background: #46DE48;">OPERATIONS</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Mr Isiko
                                Jonathan Emmanuel</h4>
                            <div style="color: #46DE48; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Operations
                                Director</div>
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                Leads community mobilisation efforts, coordinates mother support groups, and develops local
                                partnerships to strengthen maternal health services.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <span style="color: #46DE48;">Community Mobilization</span>
                            </div>
                        </div>
                    </div>

                    <!-- 7. Ms Okoro Irene - Partnership Manager -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.7s; animation-fill-mode: both;">
                        <div class="leader-image-container mt-4">
                            <img src="{{ asset('assets/images/woman.jpg') }}" class="leader-image" alt="Ms Okoro Irene">
                            <div class="leader-badge" style="background: #DD3134;">PM</div>
                            <div class="leader-tag" style="background: #DD3134;">PARTNERSHIPS</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Ms Okoro Irene
                            </h4>
                            <div style="color: #91746E; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Partnership
                                Manager</div>
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                Builds and manages strategic partnerships with organisations, stakeholders, and community
                                groups to support maternal health programs.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <span style="color: #91746E;">Strategic Partnerships</span>
                            </div>
                        </div>
                    </div>

                    <!-- 8. Mr Isiko Jonathan Emmanuel - Operations Director -->
                    <div class="leader-card"
                        style="animation: fadeSlideUp 0.6s ease; animation-delay: 0.6s; animation-fill-mode: both;">
                        <div class="leader-image-container">
                            <img src="{{ asset('assets/images/Kiprotich.jpg') }}" class="leader-image"
                                alt="Mr Isiko Jonathan Emmanuel">
                            <div class="leader-badge" style="background: #46DE48;">PC</div>
                            <div class="leader-tag" style="background: #46DE48;">PROJECTS</div>
                        </div>
                        <div class="leader-content">
                            <h4 style="margin: 0 0 3px 0; color: #363558; font-size: 20px; font-weight: 800;">Mr Daniel Kiprotich Bett</h4>
                            <div style="color: #46DE48; font-size: 14px; font-weight: 700; margin-bottom: 10px;">Project Coordinator</div>
                            <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin-bottom: 15px;">
                                Leads community mobilisation efforts, coordinates mother support groups, and develops local
                                partnerships to strengthen maternal health services.
                            </p>
                            <div
                                style="font-size: 12px; color: #373358; font-weight: 600; border-top: 1px solid #f0f0f0; padding-top: 12px;">
                                <span style="color: #46DE48;">Community Mobilization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection