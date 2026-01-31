@extends('layouts.apps')
@section('content')

<style>
    /* Responsive styles for smaller screens */
    @media screen and (max-width: 768px) {
        /* Main section adjustments */
        .responsive-section {
            padding: 60px 4% 80px 4% !important;
        }
        
        /* Header section */
        .responsive-header h1 {
            font-size: 42px !important;
            letter-spacing: -0.5px !important;
        }
        
        .responsive-header p {
            font-size: 16px !important;
            padding: 0 10px !important;
        }
        
        /* Two column layout becomes single column */
        .responsive-grid {
            display: block !important;
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }
        
        /* Card adjustments */
        .responsive-card {
            padding: 25px !important;
            border-radius: 20px !important;
        }
        
        /* Icon sizes */
        .responsive-icon-large {
            width: 40px !important;
            height: 40px !important;
            border-radius: 10px !important;
        }
        
        .responsive-icon-small {
            width: 40px !important;
            height: 40px !important;
        }
        
        /* Heading sizes */
        .responsive-h2 {
            font-size: 26px !important;
        }
        
        /* Training program grid */
        .responsive-training-grid {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }
        
        /* Benefits grid */
        .responsive-benefits-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .responsive-benefit-card {
            padding: 25px 20px !important;
        }
        
        /* FAQ section */
        .responsive-faq h2 {
            font-size: 32px !important;
        }
        
        .responsive-faq-item {
            padding: 20px !important;
        }
        
        /* Form adjustments */
        .responsive-form {
            padding: 25px !important;
        }
        
        /* Background elements */
        .responsive-bg-left {
            width: 60% !important;
            clip-path: polygon(0 0, 100% 0, 50% 100%, 0% 100%) !important;
        }
        
        .responsive-bg-right {
            width: 200px !important;
            height: 200px !important;
        }
    }
    
    @media screen and (max-width: 480px) {
        /* Extra small screens */
        .responsive-section {
            padding: 50px 3% 60px 3% !important;
        }
        
        .responsive-header h1 {
            font-size: 36px !important;
            line-height: 1.1 !important;
        }
        
        .responsive-header p {
            font-size: 15px !important;
            line-height: 1.5 !important;
        }
        
        /* Button adjustments */
        .responsive-badge {
            padding: 8px 20px !important;
            font-size: 13px !important;
        }
        
        .responsive-button {
            padding: 16px !important;
            font-size: 15px !important;
        }
        
        /* What you'll do items */
        .responsive-do-item {
            flex-direction: column !important;
            gap: 10px !important;
            text-align: center !important;
        }
        
        /* FAQ */
        .responsive-faq h2 {
            font-size: 28px !important;
        }
        
        .responsive-faq p {
            font-size: 16px !important;
        }
        
        /* Contact CTA */
        .responsive-cta {
            padding: 14px 25px !important;
            font-size: 15px !important;
        }
        
        /* Margins reduction */
        .responsive-margin-top {
            margin-top: 60px !important;
        }
        
        .responsive-margin-bottom {
            margin-bottom: 40px !important;
        }
    }
    
    @media screen and (min-width: 769px) and (max-width: 1024px) {
        /* Tablet adjustments */
        .responsive-grid {
            gap: 40px !important;
        }
        
        .responsive-header h1 {
            font-size: 56px !important;
        }
        
        .responsive-header p {
            font-size: 18px !important;
        }
        
        .responsive-card {
            padding: 30px !important;
        }
        
        .responsive-training-grid {
            gap: 15px !important;
        }
        
        .responsive-benefits-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    
    /* Improve touch targets on mobile */
    @media (hover: none) and (pointer: coarse) {
        input, textarea, button, select {
            font-size: 16px !important; /* Prevents iOS zoom on focus */
            min-height: 44px !important; /* Better touch target */
        }
        
        button, a {
            min-height: 44px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        
        .responsive-faq-item {
            cursor: pointer;
            padding: 20px !important;
        }
    }
</style>

<section class="responsive-section"
    style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

    <!-- Geometric background elements -->
    <div class="responsive-bg-left"
        style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05;">
    </div>
    <div class="responsive-bg-right"
        style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #DD3134; opacity: 0.05;">
    </div>

    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">

        <!-- Header Section -->
        <div class="responsive-header" style="text-align: center; margin-bottom: 80px;">
            <div class="responsive-badge"
                style="display: inline-block; padding: 10px 30px; background: linear-gradient(90deg, #46DE48, #80E681); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(70,222,72,0.3);">
                <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                    viewBox="0 0 24 24">
                    <path
                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                </svg>
                JOIN OUR MOVEMENT
            </div>

            <h1
                style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                Become a <span style="color: #DD3134;">Youth Navigator</span>
            </h1>

            <p
                style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                Join a growing network of trained young leaders who provide essential maternal health support in their
                communities. Make a direct impact while gaining valuable skills and experience.
            </p>
        </div>

        <!-- Two Column Layout -->
        <div class="responsive-grid" style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: start;">

            <!-- Left Column: Main Content -->
            <div>
                <!-- What You'll Do Section -->
                <div class="responsive-card"
                    style="background: white; border-radius: 25px; padding: 40px; margin-bottom: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <div class="responsive-icon-large"
                            style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; fill: white;" viewBox="0 0 24 24">
                                <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3z" />
                            </svg>
                        </div>
                        <h2 class="responsive-h2" style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">What You'll Do</h2>
                    </div>

                    <div style="display: grid; gap: 25px;">
                        <div class="responsive-do-item" style="display: flex; gap: 20px;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">
                                    Conduct Home Visits</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Visit expectant and new mothers
                                    during pregnancy and postpartum periods to provide personalized support.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; gap: 20px;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #808FBD;" viewBox="0 0 24 24">
                                        <path
                                            d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12zM11 5h2v6h-2zm0 8h2v2h-2z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">Health
                                    Education</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Provide essential health
                                    information and counsel mothers on prenatal, delivery, and postpartum care.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; gap: 20px;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(145,116,110,0.1); color: #91746E; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #91746E;" viewBox="0 0 24 24">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">Birth
                                    Companion</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Accompany mothers during
                                    delivery and provide emotional support throughout the birthing process.</p>
                            </div>
                        </div>

                        <div class="responsive-do-item" style="display: flex; gap: 20px;">
                            <div style="flex-shrink: 0;">
                                <div class="responsive-icon-small"
                                    style="background: rgba(221,49,52,0.1); color: #DD3134; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                    <svg style="width: 22px; height: 22px; fill: #DD3134;" viewBox="0 0 24 24">
                                        <path
                                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 18px; color: #363558; margin: 0 0 8px 0; font-weight: 700;">
                                    Emergency Coordination</h3>
                                <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">Coordinate emergency transport
                                    and referrals when complications arise during pregnancy or delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Training Program Section -->
                <div class="responsive-card"
                    style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <div class="responsive-icon-large"
                            style="background: linear-gradient(135deg, #46DE48, #80E681); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; fill: white;" viewBox="0 0 24 24">
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                            </svg>
                        </div>
                        <h2 class="responsive-h2" style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Training Program</h2>
                    </div>

                    <div class="responsive-training-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 30px;">
                        <div style="background: #f8f9fa; border-radius: 15px; padding: 25px;">
                            <div style="color: #DD3134; font-size: 14px; font-weight: 700; margin-bottom: 10px;">PHASE 1
                            </div>
                            <h3 style="font-size: 18px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Core
                                Training</h3>
                            <ul
                                style="color: #5a5a5a; margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.5;">
                                <li>Maternal health basics</li>
                                <li>Danger signs recognition</li>
                                <li>Communication skills</li>
                                <li>Community engagement</li>
                            </ul>
                        </div>

                        <div style="background: #f8f9fa; border-radius: 15px; padding: 25px;">
                            <div style="color: #46DE48; font-size: 14px; font-weight: 700; margin-bottom: 10px;">PHASE 2
                            </div>
                            <h3 style="font-size: 18px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Field
                                Practicum</h3>
                            <ul
                                style="color: #5a5a5a; margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.5;">
                                <li>Supervised home visits</li>
                                <li>Case management</li>
                                <li>Emergency simulation</li>
                                <li>Mentorship sessions</li>
                            </ul>
                        </div>
                    </div>

                    <div
                        style="background: linear-gradient(135deg, #363558, #434961); border-radius: 15px; padding: 25px; color: white;">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48;" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <h3 style="font-size: 18px; margin: 0; font-weight: 700;">Certification & Support</h3>
                        </div>
                        <p style="color: #DCCEC1; margin: 0; font-size: 14px; line-height: 1.5;">
                            Upon completion, you'll receive a nationally recognized certification as a Maternal Health
                            Navigator.
                            Ongoing mentorship and peer support groups ensure continued growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Application & Requirements -->
            <div>
                <!-- Requirements Card -->
                <div class="responsive-card"
                    style="background: white; border-radius: 25px; padding: 40px; margin-bottom: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <div class="responsive-icon-large"
                            style="background: linear-gradient(135deg, #91746E, #DCCEC1); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; fill: white;" viewBox="0 0 24 24">
                                <path
                                    d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                            </svg>
                        </div>
                        <h2 class="responsive-h2" style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Requirements</h2>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Age &
                                    Education</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Aged 18-30 with
                                    at least secondary education.</p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">
                                    Commitment</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Minimum
                                    12-month commitment, 10-15 hours per week.</p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">
                                    Community Connection</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Resident of the
                                    community you'll serve, with local language proficiency.</p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 15px;">
                            <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <div>
                                <h3 style="font-size: 16px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">
                                    Technology Access</h3>
                                <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.5;">Access to a
                                    mobile phone for communication and reporting.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="javascript:void();" method="post">
                    <!-- Application Form -->
                    <div class="responsive-form"
                        style="background: linear-gradient(135deg, #363558, #434961); border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(54,53,88,0.3);">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <h2 style="font-size: 28px; color: white; margin: 0 0 15px 0; font-weight: 800;">Start Your
                                Journey</h2>
                            <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                                Submit your application and join our next training cohort
                            </p>
                        </div>

                        <form style="display: grid; gap: 20px;">
                            <div>
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Full
                                    Name</label>
                                <input type="text"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                    placeholder="Enter your full name">
                            </div>

                            <div>
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Email
                                    Address</label>
                                <input type="email"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                    placeholder="Enter your email">
                            </div>

                            <div>
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Phone
                                    Number</label>
                                <input type="tel"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                    placeholder="Enter your phone number">
                            </div>

                            <div>
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Location/Community</label>
                                <input type="text"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                    placeholder="Enter your community">
                            </div>

                            <div>
                                <label
                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Why
                                    do you want to become a Navigator?</label>
                                <textarea rows="4"
                                    style="width: 100%; padding: 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; resize: vertical;"
                                    placeholder="Share your motivation..."></textarea>
                            </div>

                            <button type="submit" class="responsive-button"
                                style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 18px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 20px rgba(70,222,72,0.3); transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                                </svg>
                                Submit Application
                            </button>
                        </form>

                        <div style="text-align: center; margin-top: 25px;">
                            <p style="color: #DCCEC1; font-size: 13px; margin: 0;">
                                <svg style="width: 14px; height: 14px; fill: #46DE48; vertical-align: middle; margin-right: 5px;"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                                We'll contact you within 3 business days
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="responsive-margin-top" style="margin-top: 80px;">
            <div class="responsive-margin-bottom" style="text-align: center; margin-bottom: 50px;">
                <h2 style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800;">Benefits of Being a
                    Navigator</h2>
                <p style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Join a transformative program that empowers you while serving your community
                </p>
            </div>

            <div class="responsive-benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
                <div class="responsive-benefit-card"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <div
                        style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Skill Development
                    </h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Gain valuable skills in healthcare, communication, leadership, and community engagement.
                    </p>
                </div>

                <div class="responsive-benefit-card"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <div
                        style="background: linear-gradient(135deg, #46DE48, #80E681); width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Community Impact
                    </h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Make a direct, measurable impact on maternal and child health in your own community.
                    </p>
                </div>

                <div class="responsive-benefit-card"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <div
                        style="background: linear-gradient(135deg, #91746E, #DCCEC1); width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Professional
                        Growth</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Receive certification, mentorship, and networking opportunities with healthcare professionals.
                    </p>
                </div>

                <div class="responsive-benefit-card"
                    style="background: white; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <div
                        style="background: linear-gradient(135deg, #808FBD, #A3B4E0); width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                        <svg style="width: 32px; height: 32px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: #363558; margin: 0 0 15px 0; font-weight: 700;">Stipend & Support
                    </h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: 15px; line-height: 1.5;">
                        Receive a monthly stipend, transportation allowance, and all necessary training materials.
                    </p>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="responsive-margin-top" style="margin-top: 80px;">
            <div class="responsive-faq responsive-margin-bottom" style="text-align: center; margin-bottom: 50px;">
                <h2 style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800;">Frequently Asked
                    Questions</h2>
                <p style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Find answers to common questions about becoming a SafeMoms Navigator
                </p>
            </div>

            <div style="max-width: 900px; margin: 0 auto;">
                <div class="responsive-faq-item"
                    style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">What is the time
                            commitment required?</h3>
                        <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                            <path d="M19 13H5v-2h14v2z" />
                        </svg>
                    </div>
                    <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                        Navigators commit 10-15 hours per week for a minimum of 12 months. This includes home visits,
                        reporting, training sessions, and community engagement activities.
                    </p>
                </div>

                <div class="responsive-faq-item"
                    style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">Is prior healthcare
                            experience required?</h3>
                        <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                            <path d="M19 13H5v-2h14v2z" />
                        </svg>
                    </div>
                    <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                        No prior healthcare experience is required. We provide comprehensive training covering all
                        necessary skills and knowledge. What matters most is your passion for helping mothers and
                        your connection to the community.
                    </p>
                </div>

                <div class="responsive-faq-item"
                    style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">What support will I
                            receive as a Navigator?</h3>
                        <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                            <path d="M19 13H5v-2h14v2z" />
                        </svg>
                    </div>
                    <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                        You'll receive ongoing mentorship, monthly stipends, transportation allowances, regular training
                        refreshers, peer support groups, and 24/7 access to medical supervisors for consultation.
                    </p>
                </div>

                <div class="responsive-faq-item"
                    style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">How are Navigators
                            matched with mothers?</h3>
                        <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                            <path d="M19 13H5v-2h14v2z" />
                        </svg>
                    </div>
                    <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                        Navigators are typically assigned to mothers in their own communities or nearby areas.
                        We consider language, cultural background, and proximity to ensure effective communication
                        and relationship building.
                    </p>
                </div>
            </div>

            <!-- Contact CTA -->
            <div style="text-align: center; margin-top: 60px;">
                <p style="font-size: 18px; color: #5a5a5a; margin-bottom: 25px;">
                    Still have questions? Contact our Navigator Program Coordinator
                </p>
                <a href="mailto:navigators@safemoms.org" class="responsive-cta"
                    style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(90deg, #363558, #434961); color: white; padding: 16px 35px; border-radius: 12px; text-decoration: none; font-size: 16px; font-weight: 700; box-shadow: 0 10px 25px rgba(54,53,88,0.2);">
                    <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

@endsection