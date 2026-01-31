@extends('layouts.apps')
@section('content')

<section style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

    <!-- Geometric background elements -->
    <div style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05;"></div>
    <div style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #DD3134; opacity: 0.05;"></div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <!-- Hero Section -->
        <div style="text-align: center; margin-bottom: 80px;">
            <div style="display: inline-block; padding: 10px 30px; background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(221,49,52,0.3);">
                <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                </svg>
                TRANSPARENCY & ACCOUNTABILITY
            </div>
            
            <h1 style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                Program <span style="color: #DD3134;">Reports</span>
            </h1>
            
            <p style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                Access comprehensive reports detailing SafeMoms Navigator's impact, financial transparency, program outcomes, and strategic progress.
            </p>
            
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="#annual-reports" style="text-decoration: none;">
                    <button style="background: linear-gradient(90deg, #363558, #434961); color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 12px 30px rgba(54,53,88,0.25);">
                        <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                            <path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                        </svg>
                        Annual Reports
                    </button>
                </a>
                <a href="#financial-reports" style="text-decoration: none;">
                    <button style="background: white; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
                        <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                        </svg>
                        Financial Reports
                    </button>
                </a>
            </div>
        </div>

        <!-- Report Statistics -->
        <div style="background: linear-gradient(135deg, #363558, #434961); border-radius: 30px; padding: 70px 60px; margin-bottom: 80px; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 20% 80%, white 2px, transparent 2px); background-size: 40px 40px;"></div>
            
            <div style="position: relative; z-index: 2;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                        Reporting <span style="color: #46DE48;">Excellence</span>
                    </h2>
                    <p style="font-size: 19px; color: #DCCEC1; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Our commitment to transparency through comprehensive reporting
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <div style="font-size: 42px; font-weight: 800; color: #46DE48; margin-bottom: 15px;">100%</div>
                        <h3 style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Timely Reports</h3>
                        <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                            All reports published within 90 days of period end
                        </p>
                    </div>

                    <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <div style="font-size: 42px; font-weight: 800; color: #DD3134; margin-bottom: 15px;">24+</div>
                        <h3 style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Reports Published</h3>
                        <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                            Comprehensive reports since program inception
                        </p>
                    </div>

                    <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <div style="font-size: 42px; font-weight: 800; color: #91746E; margin-bottom: 15px;">15K+</div>
                        <h3 style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Data Points</h3>
                        <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                            Metrics tracked across all program areas
                        </p>
                    </div>

                    <div style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 35px 30px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <div style="font-size: 42px; font-weight: 800; color: #808FBD; margin-bottom: 15px;">4.8/5</div>
                        <h3 style="font-size: 20px; color: white; margin: 0 0 10px 0; font-weight: 700;">Stakeholder Rating</h3>
                        <p style="color: #DCCEC1; margin: 0; font-size: 15px; line-height: 1.5;">
                            Report clarity and transparency rating
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Annual Reports -->
        <div id="annual-reports" style="margin-bottom: 100px;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Annual <span style="color: #DD3134;">Impact Reports</span>
                </h2>
                <p style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Comprehensive yearly overviews of our program impact, achievements, and strategic direction
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px;">

                <!-- Report 2023 -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #DD3134;">
                    <div style="height: 250px; background: linear-gradient(135deg, #363558, #434961); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 30% 30%, white 2px, transparent 2px); background-size: 50px 50px;"></div>
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 100%; padding: 0 30px;">
                            <div style="font-size: 24px; font-weight: 700; margin-bottom: 10px; color: #46DE48;">ANNUAL REPORT</div>
                            <div style="font-size: 48px; font-weight: 800; line-height: 1;">2023</div>
                            <div style="font-size: 18px; opacity: 0.9; margin-top: 10px;">Year of Expansion & Impact</div>
                        </div>
                    </div>
                    
                    <div style="padding: 35px 30px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                            <div>
                                <div style="color: #DD3134; font-size: 14px; font-weight: 700; margin-bottom: 5px;">PUBLISHED: MARCH 2024</div>
                                <div style="color: #5a5a5a; font-size: 14px;">148 Pages • Comprehensive Review</div>
                            </div>
                            <div style="background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 20px; border-radius: 20px; font-size: 13px; font-weight: 700;">
                                PDF • 12.5MB
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Expanded to 5 new districts</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Supported 2,500+ mothers</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Achieved 100% safe deliveries</span>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 15px;">
                            <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 14px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; flex: 1; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download Full Report
                            </button>
                            <button style="background: transparent; color: #363558; border: 2px solid #363558; padding: 14px 20px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: #363558;" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                                Summary
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Report 2022 -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #46DE48;">
                    <div style="height: 250px; background: linear-gradient(135deg, #46DE48, #80E681); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 70% 70%, white 2px, transparent 2px); background-size: 50px 50px;"></div>
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 100%; padding: 0 30px;">
                            <div style="font-size: 24px; font-weight: 700; margin-bottom: 10px; color: #363558;">ANNUAL REPORT</div>
                            <div style="font-size: 48px; font-weight: 800; line-height: 1;">2022</div>
                            <div style="font-size: 18px; opacity: 0.9; margin-top: 10px;">Year of Consolidation</div>
                        </div>
                    </div>
                    
                    <div style="padding: 35px 30px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                            <div>
                                <div style="color: #46DE48; font-size: 14px; font-weight: 700; margin-bottom: 5px;">PUBLISHED: MARCH 2023</div>
                                <div style="color: #5a5a5a; font-size: 14px;">132 Pages • Strategic Review</div>
                            </div>
                            <div style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 20px; border-radius: 20px; font-size: 13px; font-weight: 700;">
                                PDF • 10.8MB
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Strengthened referral systems</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Trained 200+ youth navigators</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Improved data collection systems</span>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 15px;">
                            <button style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 14px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; flex: 1; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download Full Report
                            </button>
                            <button style="background: transparent; color: #363558; border: 2px solid #363558; padding: 14px 20px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: #363558;" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                                Summary
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Report 2021 -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative; border-top: 5px solid #91746E;">
                    <div style="height: 250px; background: linear-gradient(135deg, #91746E, #DCCEC1); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 30% 70%, white 2px, transparent 2px); background-size: 50px 50px;"></div>
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 100%; padding: 0 30px;">
                            <div style="font-size: 24px; font-weight: 700; margin-bottom: 10px; color: #363558;">ANNUAL REPORT</div>
                            <div style="font-size: 48px; font-weight: 800; line-height: 1;">2021</div>
                            <div style="font-size: 18px; opacity: 0.9; margin-top: 10px;">Foundational Year</div>
                        </div>
                    </div>
                    
                    <div style="padding: 35px 30px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                            <div>
                                <div style="color: #91746E; font-size: 14px; font-weight: 700; margin-bottom: 5px;">PUBLISHED: MARCH 2022</div>
                                <div style="color: #5a5a5a; font-size: 14px;">118 Pages • Program Launch</div>
                            </div>
                            <div style="background: rgba(145,116,110,0.1); color: #91746E; padding: 8px 20px; border-radius: 20px; font-size: 13px; font-weight: 700;">
                                PDF • 9.2MB
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Program pilot in 2 districts</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">First cohort of 50 navigators</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg style="width: 20px; height: 20px; fill: #46DE48; flex-shrink: 0;" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600;">Established key partnerships</span>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 15px;">
                            <button style="background: linear-gradient(90deg, #91746E, #DCCEC1); color: white; border: none; padding: 14px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; flex: 1; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download Full Report
                            </button>
                            <button style="background: transparent; color: #363558; border: 2px solid #363558; padding: 14px 20px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: #363558;" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                                Summary
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- View All Button -->
            <div style="text-align: center;">
                <button style="background: transparent; color: #363558; border: 2px solid #363558; padding: 16px 40px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 10px;">
                    View All Annual Reports
                    <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Financial Reports -->
        <div id="financial-reports" style="margin-bottom: 100px;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Financial <span style="color: #46DE48;">Transparency</span>
                </h2>
                <p style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Detailed financial reports showcasing responsible stewardship of resources and donor funds
                </p>
            </div>

            <div style="background: white; border-radius: 30px; padding: 60px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                <!-- Financial Overview -->
                <div style="margin-bottom: 60px;">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                        <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 32px; height: 32px; fill: #46DE48;" viewBox="0 0 24 24">
                                <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Financial Overview 2023</h3>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px; margin-bottom: 40px;">
                        <div style="text-align: center; padding: 30px 20px; background: #f8f9fa; border-radius: 20px;">
                            <div style="font-size: 36px; font-weight: 800; color: #DD3134; margin-bottom: 10px;">$850K</div>
                            <div style="color: #363558; font-weight: 700; margin-bottom: 8px;">Total Revenue</div>
                            <div style="color: #5a5a5a; font-size: 14px;">Grants, donations, partnerships</div>
                        </div>

                        <div style="text-align: center; padding: 30px 20px; background: #f8f9fa; border-radius: 20px;">
                            <div style="font-size: 36px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">92%</div>
                            <div style="color: #363558; font-weight: 700; margin-bottom: 8px;">Program Spending</div>
                            <div style="color: #5a5a5a; font-size: 14px;">Direct program implementation</div>
                        </div>

                        <div style="text-align: center; padding: 30px 20px; background: #f8f9fa; border-radius: 20px;">
                            <div style="font-size: 36px; font-weight: 800; color: #91746E; margin-bottom: 10px;">6%</div>
                            <div style="color: #363558; font-weight: 700; margin-bottom: 8px;">Administrative Costs</div>
                            <div style="color: #5a5a5a; font-size: 14px;">Management and operations</div>
                        </div>

                        <div style="text-align: center; padding: 30px 20px; background: #f8f9fa; border-radius: 20px;">
                            <div style="font-size: 36px; font-weight: 800; color: #808FBD; margin-bottom: 10px;">2%</div>
                            <div style="color: #363558; font-weight: 700; margin-bottom: 8px;">Fundraising Costs</div>
                            <div style="color: #5a5a5a; font-size: 14px;">Resource mobilization</div>
                        </div>
                    </div>

                    <!-- Financial Report Cards -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                        <div style="border: 2px solid #46DE48; border-radius: 20px; padding: 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                                <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 24px; height: 24px; fill: #46DE48;" viewBox="0 0 24 24">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 style="font-size: 20px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Audited Financial Statements</h4>
                                    <div style="color: #46DE48; font-size: 13px; font-weight: 600;">FY 2023 • KPMG Audited</div>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                                Complete audited financial statements including balance sheet, income statement, and cash flow statement.
                            </p>
                            <button style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download Full Audit
                            </button>
                        </div>

                        <div style="border: 2px solid #DD3134; border-radius: 20px; padding: 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                                <div style="background: rgba(221,49,52,0.1); color: #DD3134; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 24px; height: 24px; fill: #DD3134;" viewBox="0 0 24 24">
                                        <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 style="font-size: 20px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Donor Reports</h4>
                                    <div style="color: #DD3134; font-size: 13px; font-weight: 600;">Quarterly • Detailed</div>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                                Comprehensive reports to donors detailing fund utilization, impact achieved, and future plans.
                            </p>
                            <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download Donor Reports
                            </button>
                        </div>

                        <div style="border: 2px solid #808FBD; border-radius: 20px; padding: 30px;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                                <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 24px; height: 24px; fill: #808FBD;" viewBox="0 0 24 24">
                                        <path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 style="font-size: 20px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Budget vs. Actual Reports</h4>
                                    <div style="color: #808FBD; font-size: 13px; font-weight: 600;">Monthly • Comparative</div>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                                Detailed comparison of budgeted vs. actual expenditures across all program areas and activities.
                            </p>
                            <button style="background: linear-gradient(90deg, #808FBD, #A3B4E0); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download Budget Reports
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Financial Transparency Badges -->
                <div style="text-align: center; padding: 40px; background: #f8f9fa; border-radius: 20px;">
                    <h4 style="font-size: 22px; color: #363558; margin: 0 0 30px 0; font-weight: 700;">Financial Transparency Accreditations</h4>
                    <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                        <div style="text-align: center;">
                            <div style="background: white; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">
                                <svg style="width: 40px; height: 40px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div style="font-weight: 700; color: #363558;">GuideStar Platinum</div>
                            <div style="color: #5a5a5a; font-size: 13px;">Transparency 2024</div>
                        </div>

                        <div style="text-align: center;">
                            <div style="background: white; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">
                                <svg style="width: 40px; height: 40px; fill: #DD3134;" viewBox="0 0 24 24">
                                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                </svg>
                            </div>
                            <div style="font-weight: 700; color: #363558;">Annual Audit</div>
                            <div style="color: #5a5a5a; font-size: 13px;">KPMG Certified</div>
                        </div>

                        <div style="text-align: center;">
                            <div style="background: white; width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">
                                <svg style="width: 40px; height: 40px; fill: #91746E;" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                            </div>
                            <div style="font-weight: 700; color: #363558;">4.9/5 Rating</div>
                            <div style="color: #5a5a5a; font-size: 13px;">Donor Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program Reports -->
        <div style="margin-bottom: 100px;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Program <span style="color: #DD3134;">Performance</span> Reports
                </h2>
                <p style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Detailed reports on program implementation, outcomes, and impact across different regions and initiatives
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div style="background: white; border-radius: 25px; padding: 35px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-left: 5px solid #DD3134;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                        <div style="background: rgba(221,49,52,0.1); color: #DD3134; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 28px; height: 28px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 24px; color: #363558; margin: 0 0 5px 0; font-weight: 800;">Navigator Impact Report</h3>
                            <div style="color: #DD3134; font-size: 14px; font-weight: 600;">Q4 2023 • Performance Analysis</div>
                        </div>
                    </div>
                    <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                        Analysis of youth navigator performance, case management outcomes, and community impact metrics.
                    </p>
                    <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                            <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                        </svg>
                        Download Report
                    </button>
                </div>

                <div style="background: white; border-radius: 25px; padding: 35px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-left: 5px solid #46DE48;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                        <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 28px; height: 28px; fill: #46DE48;" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 24px; color: #363558; margin: 0 0 5px 0; font-weight: 800;">SafeDelivery Outcomes</h3>
                            <div style="color: #46DE48; font-size: 14px; font-weight: 600;">2023 • Clinical Outcomes</div>
                        </div>
                    </div>
                    <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                        Comprehensive review of delivery outcomes, emergency response times, and facility referral success rates.
                    </p>
                    <button style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                            <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                        </svg>
                        Download Report
                    </button>
                </div>

                <div style="background: white; border-radius: 25px; padding: 35px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-left: 5px solid #808FBD;">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                        <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 28px; height: 28px; fill: #808FBD;" viewBox="0 0 24 24">
                                <path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 24px; color: #363558; margin: 0 0 5px 0; font-weight: 800;">Regional Expansion Analysis</h3>
                            <div style="color: #808FBD; font-size: 14px; font-weight: 600;">New Districts • 2023</div>
                        </div>
                    </div>
                    <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                        Evaluation of program expansion into new districts, challenges faced, and lessons learned for scale-up.
                    </p>
                    <button style="background: linear-gradient(90deg, #808FBD, #A3B4E0); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                            <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                        </svg>
                        Download Report
                    </button>
                </div>
            </div>
        </div>

        <!-- Report Request -->
        <div style="background: linear-gradient(135deg, #363558, #434961); border-radius: 30px; padding: 70px 60px; text-align: center; color: white; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px); background-size: 60px 60px;"></div>

            <div style="position: relative; z-index: 2;">
                <h3 style="font-size: 42px; font-weight: 800; margin: 0 0 20px 0; line-height: 1.2;">
                    Need a <span style="color: #46DE48;">Custom Report</span>?
                </h3>

                <p style="font-size: 18px; color: #DCCEC1; margin: 0 auto 30px auto; max-width: 700px; line-height: 1.6;">
                    Looking for specific data or analysis not covered in our standard reports? Our monitoring and evaluation team can prepare custom reports for partners, researchers, and stakeholders.
                </p>

                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <button style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 12px;">
                        <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        Request Custom Report
                    </button>
                    <button style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3); padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; backdrop-filter: blur(10px);">
                        Contact M&E Team
                    </button>
                </div>

                <div style="display: flex; justify-content: center; gap: 30px; margin-top: 40px; color: rgba(255,255,255,0.8); font-size: 14px; flex-wrap: wrap;">
                    <div style="text-align: center;">
                        <div style="font-size: 24px; font-weight: 800; color: white;">5-10</div>
                        <div>Business Days Turnaround</div>
                    </div>
                    <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
                    <div style="text-align: center;">
                        <div style="font-size: 24px; font-weight: 800; color: white;">Free</div>
                        <div>For Partners & Researchers</div>
                    </div>
                    <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
                    <div style="text-align: center;">
                        <div style="font-size: 24px; font-weight: 800; color: white;">100%</div>
                        <div>Data Privacy Protected</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection