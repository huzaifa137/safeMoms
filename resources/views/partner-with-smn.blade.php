<style>
    /* Responsive styles for partnership page */
    @media screen and (max-width: 1024px) {
        .responsive-section {
            padding: 80px 4% 100px 4% !important;
        }
        
        .responsive-header h1 {
            font-size: 56px !important;
        }
        
        .responsive-header p {
            font-size: 18px !important;
        }
        
        .responsive-hero-buttons {
            flex-direction: column !important;
            align-items: center !important;
            gap: 15px !important;
        }
        
        .responsive-hero-buttons button {
            width: 100% !important;
            max-width: 350px !important;
            justify-content: center !important;
        }
        
        .responsive-impact-container {
            padding: 50px 40px !important;
        }
        
        .responsive-impact-title {
            font-size: 42px !important;
        }
        
        .responsive-models-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        
        .responsive-process-timeline {
            flex-wrap: wrap !important;
            gap: 40px !important;
            justify-content: center !important;
        }
        
        .responsive-process-step {
            width: 45% !important;
            min-width: 180px !important;
        }
        
        .responsive-process-line {
            display: none !important;
        }
        
        .responsive-contact-grid {
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }
        
        .responsive-partners-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 30px !important;
        }
        
        .responsive-form-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
    }
    
    @media screen and (max-width: 768px) {
        .responsive-section {
            padding: 60px 3% 80px 3% !important;
        }
        
        .responsive-header h1 {
            font-size: 42px !important;
            line-height: 1.1 !important;
        }
        
        .responsive-header p {
            font-size: 16px !important;
        }
        
        .responsive-badge {
            padding: 8px 20px !important;
            font-size: 13px !important;
        }
        
        .responsive-impact-container {
            padding: 40px 30px !important;
            border-radius: 25px !important;
        }
        
        .responsive-impact-title {
            font-size: 36px !important;
        }
        
        .responsive-impact-stats {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 20px !important;
        }
        
        .responsive-models-grid {
            grid-template-columns: 1fr !important;
        }
        
        .responsive-model-card {
            padding: 30px !important;
        }
        
        .responsive-model-icon {
            width: 60px !important;
            height: 60px !important;
        }
        
        .responsive-model-title {
            font-size: 24px !important;
        }
        
        .responsive-process-step {
            width: 100% !important;
            margin-bottom: 30px !important;
        }
        
        .responsive-process-number {
            width: 60px !important;
            height: 60px !important;
            font-size: 20px !important;
        }
        
        .responsive-partners-container {
            padding: 30px !important;
        }
        
        .responsive-partners-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .responsive-partner-box {
            height: 100px !important;
            padding: 20px !important;
        }
        
        .responsive-contact-container {
            padding: 40px 30px !important;
            border-radius: 25px !important;
        }
        
        .responsive-contact-title {
            font-size: 36px !important;
        }
        
        .responsive-form-container {
            padding: 30px !important;
        }
        
        .responsive-form-title {
            font-size: 20px !important;
        }
        
        .responsive-final-cta {
            padding: 40px 30px !important;
        }
        
        .responsive-final-title {
            font-size: 32px !important;
        }
    }
    
    @media screen and (max-width: 480px) {
        .responsive-header h1 {
            font-size: 32px !important;
        }
        
        .responsive-header p {
            font-size: 15px !important;
        }
        
        .responsive-hero-buttons button {
            padding: 16px 20px !important;
            font-size: 15px !important;
        }
        
        .responsive-impact-title {
            font-size: 28px !important;
        }
        
        .responsive-impact-stats {
            grid-template-columns: 1fr !important;
        }
        
        .responsive-stat-box {
            padding: 25px 20px !important;
        }
        
        .responsive-stat-number {
            font-size: 36px !important;
        }
        
        .responsive-stat-title {
            font-size: 18px !important;
        }
        
        .responsive-section-title {
            font-size: 32px !important;
        }
        
        .responsive-section-subtitle {
            font-size: 16px !important;
        }
        
        .responsive-model-card {
            padding: 25px !important;
        }
        
        .responsive-model-badge {
            padding: 8px 15px !important;
            font-size: 12px !important;
        }
        
        .responsive-process-step {
            margin-bottom: 25px !important;
        }
        
        .responsive-step-title {
            font-size: 16px !important;
        }
        
        .responsive-step-desc {
            font-size: 13px !important;
        }
        
        .responsive-partner-name {
            font-size: 16px !important;
        }
        
        .responsive-partner-type {
            font-size: 13px !important;
        }
        
        .responsive-contact-title {
            font-size: 28px !important;
        }
        
        .responsive-contact-subtitle {
            font-size: 16px !important;
        }
        
        .responsive-input-grid {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }
        
        input, select, textarea {
            font-size: 16px !important; /* Prevents iOS zoom on focus */
            min-height: 44px !important; /* Better touch target */
        }
        
        button, .responsive-button {
            min-height: 44px !important;
        }
        
        .responsive-final-title {
            font-size: 28px !important;
        }
        
        .responsive-final-subtitle {
            font-size: 16px !important;
        }
    }
    
    @media (hover: none) and (pointer: coarse) {
        /* Better touch targets for mobile */
        input, textarea, button, select {
            font-size: 16px !important;
            min-height: 44px !important;
        }
        
        button, .responsive-button {
            min-height: 44px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        
        .responsive-model-card, .responsive-stat-box {
            cursor: pointer;
        }
    }
    
    /* Fix for timeline on mobile */
    @media screen and (max-width: 768px) {
        .responsive-process-container {
            position: relative !important;
        }
        
        .responsive-process-steps {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
        }
    }
</style>

@extends('layouts.apps')
@section('content')

    <section class="responsive-section"
        style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

        <!-- Geometric background elements -->
        <div
            style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05;">
        </div>
        <div
            style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #91746E; opacity: 0.05;">
        </div>

        <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

            <!-- Hero Section -->
            <div class="responsive-header" style="text-align: center; margin-bottom: 80px;">
                <div class="responsive-badge"
                    style="display: inline-block; padding: 10px 30px; background: linear-gradient(90deg, #91746E, #DCCEC1); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(145,116,110,0.3);">
                    <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                        viewBox="0 0 24 24">
                        <path
                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                    STRATEGIC PARTNERSHIPS
                </div>

                <h1 class="responsive-header-title"
                    style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                    Partner With <span style="color: #DD3134;">SafeMoms Navigator</span>
                </h1>

                <p class="responsive-header-subtitle"
                    style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Join forces with us to expand maternal healthcare access across Uganda. Together, we can create
                    sustainable impact, strengthen health systems, and save more mothers and babies.
                </p>

                <div class="responsive-hero-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="#partnership-models" style="text-decoration: none;">
                        <button class="responsive-button"
                            style="background: linear-gradient(90deg, #363558, #434961); color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 12px 30px rgba(54,53,88,0.25);">
                            <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                <path
                                    d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                            </svg>
                            Explore Partnership Models
                        </button>
                    </a>
                    <a href="#contact-form" style="text-decoration: none;">
                        <button class="responsive-button"
                            style="background: white; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
                            <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            Start Partnership Discussion
                        </button>
                    </a>
                </div>
            </div>

            <!-- Impact Through Partnership -->
            <div class="responsive-impact-container"
                style="background: linear-gradient(135deg, #363558, #434961); border-radius: 30px; padding: 70px 60px; margin-bottom: 80px; position: relative; overflow: hidden;">
                <div
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 20% 80%, white 2px, transparent 2px); background-size: 40px 40px;">
                </div>

                <div style="position: relative; z-index: 2;">
                    <div style="text-align: center; margin-bottom: 60px;">
                        <h2 class="responsive-impact-title"
                            style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                            Impact Through <span style="color: #46DE48;">Collaboration</span>
                        </h2>
                        <p class="responsive-impact-subtitle" style="font-size: 19px; color: #DCCEC1; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                            Our partnerships have enabled us to expand our reach and deepen our impact across Uganda
                        </p>
                    </div>

                    <div class="responsive-impact-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                            <div class="responsive-stat-number" style="font-size: 42px; font-weight: 800; color: #46DE48; margin-bottom: 15px;">25+</div>
                            <h3 class="responsive-stat-title" style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Active Partners
                            </h3>
                            <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                                Healthcare facilities, NGOs, and community organizations
                            </p>
                        </div>

                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                            <div class="responsive-stat-number" style="font-size: 42px; font-weight: 800; color: #DD3134; margin-bottom: 15px;">12</div>
                            <h3 class="responsive-stat-title" style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Districts
                                Reached</h3>
                            <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                                Expanding maternal health services across Uganda
                            </p>
                        </div>

                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                            <div class="responsive-stat-number" style="font-size: 42px; font-weight: 800; color: #91746E; margin-bottom: 15px;">5K+</div>
                            <h3 class="responsive-stat-title" style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Mothers
                                Supported</h3>
                            <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                                Through collaborative programs and referrals
                            </p>
                        </div>

                        <div class="responsive-stat-box"
                            style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                            <div class="responsive-stat-number" style="font-size: 42px; font-weight: 800; color: #808FBD; margin-bottom: 15px;">100%</div>
                            <h3 class="responsive-stat-title" style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Program Success
                            </h3>
                            <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                                Safe deliveries across all partnership facilities
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partnership Models -->
            <div id="partnership-models" style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 class="responsive-section-title"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Partnership <span style="color: #DD3134;">Models</span>
                    </h2>
                    <p class="responsive-section-subtitle" style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        We offer various partnership frameworks tailored to your organization's goals and capabilities
                    </p>
                </div>

                <div class="responsive-models-grid"
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px;">

                    <!-- Model 1: Healthcare Facilities -->
                    <div class="responsive-model-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; overflow: hidden; border: 2px solid #DD3134;">
                        <div class="responsive-model-badge"
                            style="position: absolute; top: 0; right: 0; padding: 10px 25px; background: #DD3134; color: white; font-size: 14px; font-weight: 700; border-radius: 0 0 0 20px;">
                            <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                            </svg>
                            HEALTHCARE
                        </div>

                        <div style="text-align: center; margin-bottom: 35px;">
                            <div class="responsive-model-icon"
                                style="background: rgba(221,49,52,0.1); color: #DD3134; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                                <svg style="width: 40px; height: 40px; fill: #DD3134;" viewBox="0 0 24 24">
                                    <path
                                        d="M19 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-6 16h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 11.9 13 12.5 13 14h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z" />
                                </svg>
                            </div>
                            <h3 class="responsive-model-title" style="font-size: 28px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Healthcare
                                Facilities</h3>
                            <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">
                                Hospitals, clinics, and health centers partnering for referrals and integrated care
                            </p>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #DD3134; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Streamlined patient referrals</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #DD3134; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Joint training programs</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px;">
                                <svg style="width: 20px; height: 20px; fill: #DD3134; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Data sharing for continuum of care</span>
                            </div>
                        </div>
                    </div>

                    <!-- Model 2: Corporate Partners -->
                    <div class="responsive-model-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; overflow: hidden; border: 2px solid #46DE48;">
                        <div class="responsive-model-badge"
                            style="position: absolute; top: 0; right: 0; padding: 10px 25px; background: #46DE48; color: white; font-size: 14px; font-weight: 700; border-radius: 0 0 0 20px;">
                            <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                            </svg>
                            CORPORATE
                        </div>

                        <div style="text-align: center; margin-bottom: 35px;">
                            <div class="responsive-model-icon"
                                style="background: rgba(70,222,72,0.1); color: #46DE48; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                                <svg style="width: 40px; height: 40px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path
                                        d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zm-7.5-1h3v-3.5H17v-3h-3.5V7h-3v3.5H7v3h3.5V15z" />
                                </svg>
                            </div>
                            <h3 class="responsive-model-title" style="font-size: 28px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Corporate
                                Partners</h3>
                            <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">
                                Businesses supporting maternal health through CSR, employee engagement, and funding
                            </p>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">CSR program development</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Employee volunteer programs</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Strategic funding opportunities</span>
                            </div>
                        </div>

                    </div>

                    <!-- Model 3: NGO & Community Organizations -->
                    <div class="responsive-model-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; overflow: hidden; border: 2px solid #91746E;">
                        <div class="responsive-model-badge"
                            style="position: absolute; top: 0; right: 0; padding: 10px 25px; background: #91746E; color: white; font-size: 14px; font-weight: 700; border-radius: 0 0 0 20px;">
                            <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                            </svg>
                            COMMUNITY
                        </div>

                        <div style="text-align: center; margin-bottom: 35px;">
                            <div class="responsive-model-icon"
                                style="background: rgba(145,116,110,0.1); color: #91746E; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                                <svg style="width: 40px; height: 40px; fill: #91746E;" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>
                            <h3 class="responsive-model-title" style="font-size: 28px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">NGO &
                                Community Orgs</h3>
                            <p style="color: #5a5a5a; margin: 0; line-height: 1.6;">
                                Local organizations working together to strengthen community health systems
                            </p>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #91746E; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Joint program implementation</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #91746E; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Capacity building workshops</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 12px;">
                                <svg style="width: 20px; height: 20px; fill: #91746E; flex-shrink: 0; margin-top: 3px;"
                                    viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Resource sharing and optimization</span>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Additional Model -->
                <div
                    style="background: linear-gradient(135deg, #363558, #434961); border-radius: 25px; padding: 40px; text-align: center; color: white;">
                    <div
                        style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px; justify-content: center; flex-wrap: wrap;">
                        <div
                            style="background: rgba(128,143,189,0.2); color: #808FBD; width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 32px; height: 32px; fill: #808FBD;" viewBox="0 0 24 24">
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                            </svg>
                        </div>
                        <h3 style="font-size: 28px; margin: 0; font-weight: 800;">Research & Academic Institutions</h3>
                    </div>
                    <p
                        style="color: #DCCEC1; margin-bottom: 25px; line-height: 1.6; max-width: 800px; margin-left: auto; margin-right: auto;">
                        Universities and research organizations collaborating on maternal health studies, program
                        evaluation, and innovation development.
                    </p>
                    <button
                        style="background: linear-gradient(90deg, #808FBD, #A3B4E0); color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 10px;">
                        <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        Explore Research Partnership
                    </button>
                </div>
            </div>

            <!-- Partnership Process -->
            <div style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 class="responsive-section-title"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Partnership <span style="color: #DD3134;">Process</span>
                    </h2>
                    <p class="responsive-section-subtitle" style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Our structured approach ensures successful and sustainable partnerships
                    </p>
                </div>

                <div class="responsive-process-container" style="position: relative; margin-top: 40px;">
                    <!-- Timeline line -->
                    <div class="responsive-process-line"
                        style="position: absolute; top: 35px; left: 10%; right: 10%; height: 3px; background: linear-gradient(90deg, #DD3134, #46DE48, #91746E, #808FBD); z-index: 1;">
                    </div>

                    <div class="responsive-process-steps" style="display: flex; justify-content: space-between; position: relative; z-index: 2;">
                        <div class="responsive-process-step" style="text-align: center; width: 18%;">
                            <div class="responsive-process-number"
                                style="background: #DD3134; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(221,49,52,0.3); font-size: 24px;">
                                1
                            </div>
                            <div class="responsive-step-title" style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Initial
                                Discussion</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Share your goals and explore alignment
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%;">
                            <div class="responsive-process-number"
                                style="background: #46DE48; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(70,222,72,0.3); font-size: 24px;">
                                2
                            </div>
                            <div class="responsive-step-title" style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Needs
                                Assessment</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Joint evaluation of needs and opportunities
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%;">
                            <div class="responsive-process-number"
                                style="background: #91746E; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(145,116,110,0.3); font-size: 24px;">
                                3
                            </div>
                            <div class="responsive-step-title" style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Agreement
                                Design</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Co-create partnership terms and MOU
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%;">
                            <div class="responsive-process-number"
                                style="background: #808FBD; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(128,143,189,0.3); font-size: 24px;">
                                4
                            </div>
                            <div class="responsive-step-title" style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Implementation
                            </div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Launch and manage partnership activities
                            </div>
                        </div>

                        <div class="responsive-process-step" style="text-align: center; width: 18%;">
                            <div class="responsive-process-number"
                                style="background: #363558; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 20px; box-shadow: 0 15px 30px rgba(54,53,88,0.3); font-size: 24px;">
                                5
                            </div>
                            <div class="responsive-step-title" style="color: #363558; font-size: 18px; font-weight: 700; margin-bottom: 10px;">Monitoring &
                                Growth</div>
                            <div class="responsive-step-desc" style="color: #5a5a5a; font-size: 14px; line-height: 1.4;">
                                Regular review and strategic expansion
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Partners Showcase -->
            <div style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 class="responsive-section-title"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Our <span style="color: #DD3134;">Partners</span>
                    </h2>
                    <p class="responsive-section-subtitle" style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Trusted organizations that are making maternal healthcare accessible across Uganda
                    </p>
                </div>

                <div class="responsive-partners-container"
                    style="background: white; border-radius: 25px; padding: 50px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <div class="responsive-partners-grid"
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; align-items: center; justify-items: center;">
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center;">
                                <div class="responsive-partner-name" style="font-size: 18px; font-weight: 800; color: #DD3134;">Mbale Regional Hospital
                                </div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">Healthcare Partner since 2021
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center;">
                                <div class="responsive-partner-name" style="font-size: 18px; font-weight: 800; color: #46DE48;">Ministry of Health Uganda
                                </div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">Government Partner</div>
                        </div>
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center;">
                                <div class="responsive-partner-name" style="font-size: 18px; font-weight: 800; color: #91746E;">UN Women Uganda</div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">Development Partner</div>
                        </div>
                        <div style="text-align: center;">
                            <div class="responsive-partner-box"
                                style="background: #f8f9fa; border-radius: 15px; padding: 25px; height: 120px; display: flex; align-items: center; justify-content: center;">
                                <div class="responsive-partner-name" style="font-size: 18px; font-weight: 800; color: #808FBD;">Makerere University</div>
                            </div>
                            <div class="responsive-partner-type" style="color: #5a5a5a; font-size: 14px; margin-top: 10px;">Research Partner</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <form action="javascript:void();" method="post">
                <div id="contact-form" style="margin-bottom: 80px;">
                    <div class="responsive-contact-container"
                        style="background: linear-gradient(135deg, #363558, #434961); border-radius: 30px; padding: 70px 60px; position: relative; overflow: hidden;">
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px); background-size: 60px 60px;">
                        </div>

                        <div style="position: relative; z-index: 2;">
                            <div style="text-align: center; margin-bottom: 50px;">
                                <h2 class="responsive-contact-title"
                                    style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                                    Start the <span style="color: #46DE48;">Conversation</span>
                                </h2>
                                <p class="responsive-contact-subtitle"
                                    style="font-size: 19px; color: #DCCEC1; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                                    Ready to partner with us? Share your details and we'll schedule an introductory meeting.
                                </p>
                            </div>

                            <div class="responsive-contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
                                <!-- Form -->
                                <div>
                                    <form style="display: grid; gap: 25px;">
                                        <div class="responsive-input-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                            <div>
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">First
                                                    Name *</label>
                                                <input type="text"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                                    placeholder="Enter first name">
                                            </div>
                                            <div>
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Last
                                                    Name *</label>
                                                <input type="text"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div>

                                        <div>
                                            <label
                                                style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Organization
                                                *</label>
                                            <input type="text"
                                                style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                                placeholder="Enter organization name">
                                        </div>

                                        <div class="responsive-input-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                            <div>
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Email
                                                    Address *</label>
                                                <input type="email"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                                    placeholder="Enter email">
                                            </div>
                                            <div>
                                                <label
                                                    style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Phone
                                                    Number</label>
                                                <input type="tel"
                                                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;"
                                                    placeholder="Enter phone">
                                            </div>
                                        </div>

                                        <div>
                                            <label
                                                style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Partnership
                                                Interest *</label>
                                            <select
                                                style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none;">
                                                <option value="">Select partnership type</option>
                                                <option value="healthcare">Healthcare Facility Partnership</option>
                                                <option value="corporate">Corporate Partnership</option>
                                                <option value="community">Community Organization Partnership</option>
                                                <option value="research">Research & Academic Partnership</option>
                                                <option value="other">Other Partnership Type</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label
                                                style="display: block; color: white; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Tell
                                                us about your organization and partnership goals *</label>
                                            <textarea rows="5"
                                                style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 15px; outline: none; resize: vertical;"
                                                placeholder="Describe your organization and what you hope to achieve through partnership..."></textarea>
                                        </div>

                                        <button type="submit" class="responsive-button"
                                            style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 18px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 25px rgba(70,222,72,0.3); display: flex; align-items: center; justify-content: center; gap: 12px;">
                                            <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                                            </svg>
                                            Submit Partnership Inquiry
                                        </button>
                                    </form>
                                </div>

                                <!-- Sidebar -->
                                <div>
                                    <div class="responsive-form-container"
                                        style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); margin-bottom: 30px;">
                                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                            <div
                                                style="background: rgba(221,49,52,0.2); color: #DD3134; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                                <svg style="width: 24px; height: 24px; fill: #DD3134;" viewBox="0 0 24 24">
                                                    <path
                                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                                </svg>
                                            </div>
                                            <h3 class="responsive-form-title" style="font-size: 24px; color: white; margin: 0; font-weight: 800;">Contact
                                                Information</h3>
                                        </div>
                                        <div style="display: grid; gap: 15px;">
                                            <div style="display: flex; gap: 12px; align-items: flex-start;">
                                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                                </svg>
                                                <div>
                                                    <div style="font-weight: 600; color: white; margin-bottom: 5px;">Email
                                                    </div>
                                                    <div style="color: #DCCEC1; font-size: 14px;">partnerships@safemoms.org
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display: flex; gap: 12px; align-items: flex-start;">
                                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                                </svg>
                                                <div>
                                                    <div style="font-weight: 600; color: white; margin-bottom: 5px;">Phone
                                                    </div>
                                                    <div style="color: #DCCEC1; font-size: 14px;">+256 700 123 456</div>
                                                </div>
                                            </div>
                                            <div style="display: flex; gap: 12px; align-items: flex-start;">
                                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                                </svg>
                                                <div>
                                                    <div style="font-weight: 600; color: white; margin-bottom: 5px;">Address
                                                    </div>
                                                    <div style="color: #DCCEC1; font-size: 14px;">Plot 123, Maternal Health
                                                        Hub, Kampala, Uganda</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="responsive-form-container"
                                        style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                                            <svg style="width: 20px; height: 20px; fill: #46DE48;" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                            </svg>
                                            <div style="color: white; font-weight: 700;">Response Time</div>
                                        </div>
                                        <p style="color: #DCCEC1; margin: 0; font-size: 14px; line-height: 1.5;">
                                            We respond to all partnership inquiries within 2 business days. Expect an
                                            initial meeting invitation within 5 business days.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Final CTA -->
            <div class="responsive-final-cta"
                style="text-align: center; padding: 50px; background: white; border-radius: 30px; box-shadow: 0 20px 50px rgba(0,0,0,0.08);">
                <h2 class="responsive-final-title" style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800; line-height: 1.2;">
                    Together, We Can <span style="color: #DD3134;">Transform</span> Maternal Healthcare
                </h2>
                <p class="responsive-final-subtitle" style="font-size: 18px; color: #5a5a5a; margin: 0 auto 30px auto; max-width: 700px; line-height: 1.6;">
                    Join our network of partners committed to making maternal healthcare accessible, respectful, and safe
                    for every mother in Uganda.
                </p>
                <a href="{{ url('contact') }}" style="text-decoration: none;">
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <button class="responsive-button"
                            style="background: transparent; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer;">
                            contact us for more Information
                        </button>
                    </div>
                </a>
            </div>

        </div>
    </section>
@endsection