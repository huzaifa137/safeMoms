@extends('layouts.apps')
@section('content')

    <section
        style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

        <!-- Geometric background elements -->
        <div
            style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05;">
        </div>
        <div
            style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #46DE48; opacity: 0.05;">
        </div>

        <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

            <!-- Hero Section -->
            <div style="text-align: center; margin-bottom: 80px;">
                <div
                    style="display: inline-block; padding: 10px 30px; background: linear-gradient(90deg, #46DE48, #80E681); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(70,222,72,0.3);">
                    <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;"
                        viewBox="0 0 24 24">
                        <path
                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                    VOLUNTEER OPPORTUNITIES
                </div>

                <h1
                    style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                    Share Your <span style="color: #DD3134;">Skills</span>,<br>Transform <span
                        style="color: #46DE48;">Lives</span>
                </h1>

                <p
                    style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Join our community of dedicated volunteers who are making maternal healthcare accessible to every
                    mother.
                    Whether you have a few hours or regular time to give, your contribution matters.
                </p>

                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="#opportunities" style="text-decoration: none;">
                        <button
                            style="background: linear-gradient(90deg, #363558, #434961); color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 12px 30px rgba(54,53,88,0.25);">
                            <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                            </svg>
                            View Opportunities
                        </button>
                    </a>
                    <a href="#application" style="text-decoration: none;">
                        <button
                            style="background: white; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
                            <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            Apply Now
                        </button>
                    </a>
                </div>
            </div>

            <!-- Stats Section -->
            <div
                style="background: linear-gradient(135deg, #363558, #434961); border-radius: 25px; padding: 50px; margin-bottom: 80px; box-shadow: 0 20px 50px rgba(54,53,88,0.2);">
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
                    <div>
                        <div style="font-size: 48px; font-weight: 800; color: white; margin-bottom: 10px;">500+</div>
                        <div style="font-size: 16px; color: #DCCEC1; font-weight: 600;">Active Volunteers</div>
                    </div>
                    <div>
                        <div style="font-size: 48px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">15K+</div>
                        <div style="font-size: 16px; color: #DCCEC1; font-weight: 600;">Hours Contributed</div>
                    </div>
                    <div>
                        <div style="font-size: 48px; font-weight: 800; color: #DD3134; margin-bottom: 10px;">98%</div>
                        <div style="font-size: 16px; color: #DCCEC1; font-weight: 600;">Satisfaction Rate</div>
                    </div>
                    <div>
                        <div style="font-size: 48px; font-weight: 800; color: #91746E; margin-bottom: 10px;">40+</div>
                        <div style="font-size: 16px; color: #DCCEC1; font-weight: 600;">Skills Categories</div>
                    </div>
                </div>
            </div>

            <!-- Volunteer Opportunities -->
            <div id="opportunities" style="margin-bottom: 100px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Find Your <span style="color: #DD3134;">Volunteer Role</span>
                    </h2>
                    <p style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        We have diverse opportunities that match different skills, interests, and availability.
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

                    <!-- Opportunity 1 -->
                    <div
                        style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #DD3134;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div
                                    style="background: rgba(221,49,52,0.1); color: #DD3134; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #DD3134;" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #DD3134; font-size: 14px; font-weight: 700;">ON-SITE • FLEXIBLE</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">
                                        Community Outreach</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Engage with communities, conduct awareness campaigns, and help identify mothers who need
                                support.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Public
                                    Speaking</span>
                                <span
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Community
                                    Engagement</span>
                                <span
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Local
                                    Languages</span>
                            </div>
                            <button
                                style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                </svg>
                                Apply for this Role
                            </button>
                        </div>
                    </div>

                    <!-- Opportunity 2 -->
                    <div
                        style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #46DE48;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zM3 18.5V7c1.1-.35 2.3-.5 3.5-.5 1.34 0 3.13.41 4.5.99v11.5C9.63 18.41 7.84 18 6.5 18c-1.2 0-2.4.15-3.5.5zm18 0c-1.1-.35-2.3-.5-3.5-.5-1.34 0-3.13.41-4.5.99V7.49c1.37-.59 3.16-.99 4.5-.99 1.2 0 2.4.15 3.5.5v11.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #46DE48; font-size: 14px; font-weight: 700;">REMOTE • FLEXIBLE</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">
                                        Content Creation</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Create educational materials, social media content, and awareness campaigns about maternal
                                health.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Writing</span>
                                <span
                                    style="background: rgba(145,116,110,0.1); color: #91746E; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Graphic
                                    Design</span>
                                <span
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Video
                                    Editing</span>
                            </div>
                            <button
                                style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                </svg>
                                Apply for this Role
                            </button>
                        </div>
                    </div>

                    <!-- Opportunity 3 -->
                    <div
                        style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #91746E;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div
                                    style="background: rgba(145,116,110,0.1); color: #91746E; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #91746E;" viewBox="0 0 24 24">
                                        <path
                                            d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12zM11 5h2v6h-2zm0 8h2v2h-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #91746E; font-size: 14px; font-weight: 700;">HYBRID • WEEKLY</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">
                                        Counseling Support</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Provide emotional support and counseling to expectant and new mothers via phone or in-person
                                sessions.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(145,116,110,0.1); color: #91746E; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Active
                                    Listening</span>
                                <span
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Empathy</span>
                                <span
                                    style="background: rgba(220,206,193,0.1); color: #DCCEC1; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Psychology
                                    Background</span>
                            </div>
                            <button
                                style="background: linear-gradient(90deg, #91746E, #DCCEC1); color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                </svg>
                                Apply for this Role
                            </button>
                        </div>
                    </div>

                    <!-- Opportunity 4 -->
                    <div
                        style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #808FBD;">
                        <div style="padding: 35px 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 28px; height: 28px; fill: #808FBD;" viewBox="0 0 24 24">
                                        <path
                                            d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="color: #808FBD; font-size: 14px; font-weight: 700;">REMOTE • FLEXIBLE</div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 5px 0 0 0; font-weight: 800;">Data
                                        Analysis</h3>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Help analyze program data, create reports, and contribute to evidence-based improvements.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                                <span
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Excel</span>
                                <span
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Statistics</span>
                                <span
                                    style="background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">Reporting</span>
                            </div>
                            <button
                                style="background: linear-gradient(90deg, #808FBD, #A3B4E0); color: white; border: none; padding: 14px 30px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                </svg>
                                Apply for this Role
                            </button>
                        </div>
                    </div>

                </div>

                <!-- View All Button -->
                <div style="text-align: center; margin-top: 50px;">
                    <button
                        style="background: transparent; color: #363558; border: 2px solid #363558; padding: 16px 40px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 10px;">
                        View All Opportunities
                        <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" />
                        </svg>
                    </button>
                </div>
            </div>

        <style>
    .volunteer-section {
        padding: 80px 60px;
    }
    .volunteer-title {
        font-size: 52px;
    }
    @media (max-width: 600px) {
        .volunteer-section {
            padding: 40px 20px !important;
            margin-bottom: 40px !important;
        }
        .volunteer-title {
            font-size: 32px !important;
        }
        .volunteer-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
    }
</style>

<div class="volunteer-section"
    style="background: linear-gradient(135deg, #363558, #434961); border-radius: 30px; margin-bottom: 80px; position: relative; overflow: hidden;">
    
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 30% 30%, white 2px, transparent 2px); background-size: 50px 50px;">
    </div>

    <div style="position: relative; z-index: 2;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 class="volunteer-title"
                style="color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.1;">
                Why <span style="color: #46DE48;">Volunteer</span> With Us?
            </h2>
            <p style="font-size: 18px; color: #DCCEC1; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Discover the meaningful impact you can make while gaining valuable experience.
            </p>
        </div>

        <div class="volunteer-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            
            <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <div style="background: rgba(70,222,72,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <svg style="width: 22px; height: 22px; fill: #46DE48;" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Skill Development</h3>
                </div>
                <p style="color: #DCCEC1; margin: 0; line-height: 1.5; font-size: 15px;">
                    Gain hands-on experience and develop transferable skills in healthcare and communication.
                </p>
            </div>

            <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <div style="background: rgba(221,49,52,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <svg style="width: 22px; height: 22px; fill: #DD3134;" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Meaningful Impact</h3>
                </div>
                <p style="color: #DCCEC1; margin: 0; line-height: 1.5; font-size: 15px;">
                    Directly contribute to improving maternal health outcomes and saving lives in your community.
                </p>
            </div>

            <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <div style="background: rgba(128,143,189,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <svg style="width: 22px; height: 22px; fill: #808FBD;" viewBox="0 0 24 24">
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Community Network</h3>
                </div>
                <p style="color: #DCCEC1; margin: 0; line-height: 1.5; font-size: 15px;">
                    Connect with like-minded individuals, healthcare professionals, and community leaders.
                </p>
            </div>

            <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <div style="background: rgba(145,116,110,0.2); min-width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <svg style="width: 22px; height: 22px; fill: #91746E;" viewBox="0 0 24 24">
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 20px; color: white; margin: 0; font-weight: 800;">Growth</h3>
                </div>
                <p style="color: #DCCEC1; margin: 0; line-height: 1.5; font-size: 15px;">
                    Receive certificates, references, and opportunities for advancement within the organization.
                </p>
            </div>
        </div>
    </div>
</div>
            <!-- Application Form -->
            <div id="application" style="margin-bottom: 80px;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 id="application2"
                        style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Ready to <span style="color: #DD3134;">Make a Difference</span>?
                    </h2>
                    <p style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Start your volunteer journey with us. Fill out the application form and we'll match you with the
                        perfect opportunity.
                    </p>
                </div>

                <form action="javascript:void();" method="post">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
                        <!-- Form -->
                        <div
                            style="background: white; border-radius: 25px; padding: 50px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                            <h3 style="font-size: 28px; color: #363558; margin: 0 0 35px 0; font-weight: 800;">Volunteer
                                Application</h3>

                            <form style="display: grid; gap: 25px;">
                                <div>
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Full
                                        Name *</label>
                                    <input type="text"
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; transition: border 0.3s ease;"
                                        placeholder="Enter your full name">
                                </div>

                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                    <div>
                                        <label
                                            style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Email
                                            Address *</label>
                                        <input type="email"
                                            style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none;"
                                            placeholder="Enter your email">
                                    </div>
                                    <div>
                                        <label
                                            style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Phone
                                            Number *</label>
                                        <input type="tel"
                                            style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none;"
                                            placeholder="Enter your phone">
                                    </div>
                                </div>

                                <div>
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Location
                                        *</label>
                                    <input type="text"
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none;"
                                        placeholder="City, District, or Region">
                                </div>

                                <div>
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Areas
                                        of Interest *</label>
                                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                            <input type="checkbox" style="width: 18px; height: 18px;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Community Outreach</span>
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                            <input type="checkbox" style="width: 18px; height: 18px;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Content Creation</span>
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                            <input type="checkbox" style="width: 18px; height: 18px;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Counseling Support</span>
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                            <input type="checkbox" style="width: 18px; height: 18px;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Data Analysis</span>
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                            <input type="checkbox" style="width: 18px; height: 18px;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Fundraising</span>
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                            <input type="checkbox" style="width: 18px; height: 18px;">
                                            <span style="color: #5a5a5a; font-size: 14px;">Event Planning</span>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Availability
                                        *</label>
                                    <select
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none;">
                                        <option value="">Select your availability</option>
                                        <option value="flexible">Flexible (any time)</option>
                                        <option value="weekends">Weekends only</option>
                                        <option value="weekdays">Weekdays only</option>
                                        <option value="evenings">Evenings only</option>
                                        <option value="remote">Remote only</option>
                                    </select>
                                </div>

                                <div>
                                    <label
                                        style="display: block; color: #363558; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Tell
                                        us about yourself *</label>
                                    <textarea rows="4"
                                        style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: 15px; outline: none; resize: vertical;"
                                        placeholder="Share your background, skills, and motivation for volunteering..."></textarea>
                                </div>

                                <button type="submit"
                                    style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 18px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 25px rgba(221,49,52,0.3); display: flex; align-items: center; justify-content: center; gap: 12px;">
                                    <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                                    </svg>
                                    Submit Application
                                </button>
                            </form>
                        </div>

                        <!-- Sidebar -->
                        <div>
                            <!-- What to Expect -->
                            <div
                                style="background: white; border-radius: 25px; padding: 40px; margin-bottom: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                    <div
                                        style="background: rgba(70,222,72,0.1); color: #46DE48; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                        <svg style="width: 24px; height: 24px; fill: #46DE48;" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <h3 style="font-size: 24px; color: #363558; margin: 0; font-weight: 800;">What to Expect
                                    </h3>
                                </div>
                                <div style="display: grid; gap: 15px;">
                                    <div style="display: flex; gap: 12px;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Initial
                                                Screening
                                            </div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">We review
                                                applications within 3-5 business days</div>
                                        </div>
                                    </div>
                                    <div style="display: flex; gap: 12px;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Interview
                                            </div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">Brief virtual
                                                interview to discuss interests and availability</div>
                                        </div>
                                    </div>
                                    <div style="display: flex; gap: 12px;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Orientation
                                            </div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">Comprehensive
                                                orientation and training for your role</div>
                                        </div>
                                    </div>
                                    <div style="display: flex; gap: 12px;">
                                        <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0; margin-top: 3px;"
                                            viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                        <div>
                                            <div style="font-weight: 600; color: #363558; margin-bottom: 5px;">Start
                                                Volunteering</div>
                                            <div style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">Begin making an
                                                impact with ongoing support</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Volunteer Testimonial -->
                            <div
                                style="background: linear-gradient(135deg, #363558, #434961); border-radius: 25px; padding: 40px; color: white;">
                                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=200"
                                        alt="Volunteer"
                                        style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover; border: 3px solid #46DE48;">
                                    <div>
                                        <div style="font-weight: 800; font-size: 18px;">David Kato</div>
                                        <div style="color: #46DE48; font-size: 14px; font-weight: 600;">Volunteer since 2022
                                        </div>
                                    </div>
                                </div>
                                <p style="font-style: italic; line-height: 1.6; margin-bottom: 20px;">
                                    "Volunteering with SafeMoms has been the most rewarding experience of my life. Seeing
                                    the
                                    direct impact of our work on mothers and babies keeps me motivated every day."
                                </p>
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- FAQ Section -->
            <div style="margin-bottom: 80px;">
                <div style="text-align: center; margin-bottom: 50px;">
                    <h2 style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800;">Volunteer FAQs</h2>
                    <p style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Common questions about volunteering with SafeMoms Navigator
                    </p>
                </div>

                <div style="max-width: 900px; margin: 0 auto;">
                    <div
                        style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                        <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">How much time do I
                                need to commit?</h3>
                            <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M19 13H5v-2h14v2z" />
                            </svg>
                        </div>
                        <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            We offer flexible volunteering opportunities ranging from 2-20 hours per week. Most roles
                            require
                            a minimum commitment of 3 months, but we have options for short-term projects as well.
                        </p>
                    </div>

                    <div
                        style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                        <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">Do I need specific
                                qualifications?</h3>
                            <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M19 13H5v-2h14v2z" />
                            </svg>
                        </div>
                        <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            Most roles don't require specific qualifications—just passion and commitment. Some specialized
                            roles may require relevant experience, which will be clearly stated in the opportunity
                            description.
                        </p>
                    </div>

                    <div
                        style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                        <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">Can I volunteer
                                remotely?</h3>
                            <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M19 13H5v-2h14v2z" />
                            </svg>
                        </div>
                        <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            Yes! We have many remote volunteering opportunities in areas like content creation, data
                            analysis,
                            virtual counseling, and social media management.
                        </p>
                    </div>

                    <div
                        style="background: white; border-radius: 20px; padding: 30px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                        <div style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <h3 style="font-size: 18px; color: #363558; margin: 0; font-weight: 700;">What support will I
                                receive?</h3>
                            <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M19 13H5v-2h14v2z" />
                            </svg>
                        </div>
                        <p style="color: #5a5a5a; margin: 15px 0 0 0; line-height: 1.6; display: none;">
                            All volunteers receive comprehensive training, regular check-ins with a supervisor, access to
                            resources and materials, and opportunities for skill development and networking.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Final CTA -->
            <div
                style="background: linear-gradient(135deg, #DD3134, #FF6B6B); border-radius: 30px; padding: 70px; text-align: center; color: white;">
                <h2 style="font-size: 42px; font-weight: 800; margin: 0 0 20px 0; line-height: 1.2;">
                    Join Our <span style="color: #363558;">Volunteer Family</span>
                </h2>
                <p style="font-size: 19px; margin: 0 auto 30px auto; max-width: 700px; opacity: 0.9; line-height: 1.6;">
                    Your time and skills can transform maternal healthcare in your community.
                    Join 500+ volunteers who are making a difference every day.
                </p>
                <a href="#application2" style="text-decoration: none;">
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <button
                            style="background: white; color: #DD3134; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 30px rgba(0,0,0,0.2);">
                            <svg style="width: 20px; height: 20px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                            </svg>
                            Apply Now
                        </button>
                        <a href="{{ url('contact') }}">
                            <button
                                style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3); padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; backdrop-filter: blur(10px);">
                                Contact Volunteer Team
                            </button>
                        </a>
                    </div>
                </a>
            </div>

        </div>
    </section>

@endsection