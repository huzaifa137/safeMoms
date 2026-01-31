@extends('layouts.apps')
@section('content')

<section style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

    <!-- Geometric background elements -->
    <div style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05;"></div>
    <div style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #808FBD; opacity: 0.05;"></div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <!-- Hero Section -->
        <div style="text-align: center; margin-bottom: 80px;">
            <div style="display: inline-block; padding: 10px 30px; background: linear-gradient(90deg, #808FBD, #A3B4E0); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(128,143,189,0.3);">
                <svg style="width: 16px; height: 16px; fill: white; vertical-align: middle; margin-right: 8px;" viewBox="0 0 24 24">
                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                </svg>
                KNOWLEDGE CENTER
            </div>
            
            <h1 style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                Resources & <span style="color: #DD3134;">Publications</span>
            </h1>
            
            <p style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                Access evidence-based maternal health resources, research publications, training materials, and educational content developed by SafeMoms Navigator and our partners.
            </p>
            
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="#publications" style="text-decoration: none;">
                    <button style="background: linear-gradient(90deg, #363558, #434961); color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 12px 30px rgba(54,53,88,0.25);">
                        <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                            <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                        </svg>
                        Browse Publications
                    </button>
                </a>
                <a href="#resources" style="text-decoration: none;">
                    <button style="background: white; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
                        <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        View Resources
                    </button>
                </a>
            </div>
        </div>

        <!-- Quick Access -->
        <div style="background: white; border-radius: 25px; padding: 50px; margin-bottom: 80px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Quick <span style="color: #46DE48;">Access</span>
                </h2>
                <p style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Find what you need quickly with our categorized resources
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px;">
                <a href="#educational-materials" style="text-decoration: none;">
                    <div style="background: #f8f9fa; border-radius: 20px; padding: 35px 25px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent; cursor: pointer;">
                        <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <svg style="width: 32px; height: 32px; fill: #46DE48;" viewBox="0 0 24 24">
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Educational Materials</h3>
                        <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.4;">
                            Guides, brochures, and training manuals
                        </p>
                    </div>
                </a>

                <a href="#research-papers" style="text-decoration: none;">
                    <div style="background: #f8f9fa; border-radius: 20px; padding: 35px 25px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent; cursor: pointer;">
                        <div style="background: rgba(221,49,52,0.1); color: #DD3134; width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <svg style="width: 32px; height: 32px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Research Papers</h3>
                        <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.4;">
                            Peer-reviewed studies and reports
                        </p>
                    </div>
                </a>

                <a href="#training-videos" style="text-decoration: none;">
                    <div style="background: #f8f9fa; border-radius: 20px; padding: 35px 25px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent; cursor: pointer;">
                        <div style="background: rgba(145,116,110,0.1); color: #91746E; width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <svg style="width: 32px; height: 32px; fill: #91746E;" viewBox="0 0 24 24">
                                <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Training Videos</h3>
                        <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.4;">
                            Instructional and educational videos
                        </p>
                    </div>
                </a>

                <a href="#toolkits-guides" style="text-decoration: none;">
                    <div style="background: #f8f9fa; border-radius: 20px; padding: 35px 25px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent; cursor: pointer;">
                        <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: 70px; height: 70px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <svg style="width: 32px; height: 32px; fill: #808FBD;" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 20px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Toolkits & Guides</h3>
                        <p style="color: #5a5a5a; margin: 0; font-size: 14px; line-height: 1.4;">
                            Practical tools and implementation guides
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Featured Publications -->
        <div id="publications" style="margin-bottom: 100px;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Featured <span style="color: #DD3134;">Publications</span>
                </h2>
                <p style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Latest research and evidence-based publications from SafeMoms Navigator
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px;">

                <!-- Publication 1 -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative;">
                    <div style="height: 200px; background: linear-gradient(135deg, #DD3134, #FF6B6B); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 20px; left: 20px; background: rgba(255,255,255,0.9); color: #DD3134; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                            <svg style="width: 14px; height: 14px; fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
                            RESEARCH PAPER
                        </div>
                        <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; color: white;">
                            <div style="font-size: 22px; font-weight: 800; line-height: 1.2;">Impact of Youth Navigators on Maternal Outcomes</div>
                        </div>
                    </div>
                    
                    <div style="padding: 30px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div style="color: #5a5a5a; font-size: 14px; font-weight: 600;">Published: March 2024</div>
                            <div style="background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">PDF • 2.4MB</div>
                        </div>
                        
                        <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                            A comprehensive study examining how youth navigators improve maternal health outcomes in rural Uganda, featuring data from 500+ mothers.
                        </p>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <span style="color: #363558; font-size: 14px; font-weight: 600;">Peer Reviewed</span>
                            </div>
                            <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Publication 2 -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative;">
                    <div style="height: 200px; background: linear-gradient(135deg, #46DE48, #80E681); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 20px; left: 20px; background: rgba(255,255,255,0.9); color: #46DE48; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                            <svg style="width: 14px; height: 14px; fill: #46DE48;" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                            GUIDE
                        </div>
                        <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; color: white;">
                            <div style="font-size: 22px; font-weight: 800; line-height: 1.2;">Community Maternal Health Toolkit</div>
                        </div>
                    </div>
                    
                    <div style="padding: 30px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div style="color: #5a5a5a; font-size: 14px; font-weight: 600;">Published: February 2024</div>
                            <div style="background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">PDF • 5.2MB</div>
                        </div>
                        
                        <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                            A comprehensive guide for community health workers and youth navigators on maternal health support, danger signs, and emergency response.
                        </p>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <svg style="width: 16px; height: 16px; fill: #DD3134;" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg style="width: 16px; height: 16px; fill: #DD3134;" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg style="width: 16px; height: 16px; fill: #DD3134;" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg style="width: 16px; height: 16px; fill: #DD3134;" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg style="width: 16px; height: 16px; fill: #DD3134;" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <span style="color: #363558; font-size: 14px; font-weight: 600;">4.8/5</span>
                            </div>
                            <button style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Publication 3 -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.08); position: relative;">
                    <div style="height: 200px; background: linear-gradient(135deg, #91746E, #DCCEC1); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 20px; left: 20px; background: rgba(255,255,255,0.9); color: #91746E; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                            <svg style="width: 14px; height: 14px; fill: #91746E;" viewBox="0 0 24 24">
                                <path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                            </svg>
                            ANNUAL REPORT
                        </div>
                        <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; color: white;">
                            <div style="font-size: 22px; font-weight: 800; line-height: 1.2;">SMN Annual Impact Report 2023</div>
                        </div>
                    </div>
                    
                    <div style="padding: 30px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div style="color: #5a5a5a; font-size: 14px; font-weight: 600;">Published: January 2024</div>
                            <div style="background: rgba(145,116,110,0.1); color: #91746E; padding: 6px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">PDF • 8.1MB</div>
                        </div>
                        
                        <p style="color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                            Comprehensive overview of SafeMoms Navigator's achievements, impact metrics, financials, and strategic direction for 2023.
                        </p>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <svg style="width: 16px; height: 16px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <span style="color: #363558; font-size: 14px; font-weight: 600;">Transparency Award 2023</span>
                            </div>
                            <button style="background: linear-gradient(90deg, #91746E, #DCCEC1); color: white; border: none; padding: 12px 25px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                <svg style="width: 16px; height: 16px; fill: white;" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                                Download
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- View All Button -->
            <div style="text-align: center;">
                <button style="background: transparent; color: #363558; border: 2px solid #363558; padding: 16px 40px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 10px;">
                    View All Publications
                    <svg style="width: 20px; height: 20px; fill: #363558;" viewBox="0 0 24 24">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Resource Categories -->
        <div id="resources" style="margin-bottom: 100px;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Resource <span style="color: #DD3134;">Categories</span>
                </h2>
                <p style="font-size: 19px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Organized materials for different audiences and purposes
                </p>
            </div>

            <!-- Category 1: Educational Materials -->
            <div id="educational-materials" style="margin-bottom: 60px;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                    <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                        <svg style="width: 32px; height: 32px; fill: #46DE48;" viewBox="0 0 24 24">
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                        </svg>
                    </div>
                    <h3 style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Educational Materials</h3>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-bottom: 40px;">
                    <div style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                            <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <svg style="width: 24px; height: 24px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 style="font-size: 18px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Prenatal Care Guide</h4>
                                <div style="color: #46DE48; font-size: 13px; font-weight: 600;">For Expectant Mothers</div>
                            </div>
                        </div>
                        <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                            Comprehensive guide covering nutrition, exercise, warning signs, and birth preparation.
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: #5a5a5a; font-size: 13px;">PDF • 3.2MB</span>
                            <button style="background: transparent; color: #46DE48; border: 1px solid #46DE48; padding: 8px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                                Download
                            </button>
                        </div>
                    </div>

                    <div style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                            <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <svg style="width: 24px; height: 24px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 style="font-size: 18px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Postpartum Recovery</h4>
                                <div style="color: #46DE48; font-size: 13px; font-weight: 600;">For New Mothers</div>
                            </div>
                        </div>
                        <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                            Essential information on recovery, breastfeeding, mental health, and newborn care.
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: #5a5a5a; font-size: 13px;">PDF • 2.8MB</span>
                            <button style="background: transparent; color: #46DE48; border: 1px solid #46DE48; padding: 8px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                                Download
                            </button>
                        </div>
                    </div>

                    <div style="background: white; border-radius: 20px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                            <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <svg style="width: 24px; height: 24px; fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 style="font-size: 18px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Family Planning Options</h4>
                                <div style="color: #46DE48; font-size: 13px; font-weight: 600;">For All Women</div>
                            </div>
                        </div>
                        <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                            Comprehensive overview of family planning methods, effectiveness, and considerations.
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: #5a5a5a; font-size: 13px;">PDF • 4.1MB</span>
                            <button style="background: transparent; color: #46DE48; border: 1px solid #46DE48; padding: 8px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                                Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 2: Training Videos -->
            <div id="training-videos" style="margin-bottom: 60px;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                    <div style="background: rgba(145,116,110,0.1); color: #91746E; width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                        <svg style="width: 32px; height: 32px; fill: #91746E;" viewBox="0 0 24 24">
                            <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                        </svg>
                    </div>
                    <h3 style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Training Videos</h3>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                    <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div style="height: 180px; background: linear-gradient(135deg, #91746E, #DCCEC1); position: relative;">
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(255,255,255,0.9); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                                <svg style="width: 24px; height: 24px; fill: #91746E;" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div style="padding: 25px;">
                            <h4 style="font-size: 18px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Danger Signs Recognition</h4>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                                Learn to identify critical danger signs during pregnancy and postpartum that require immediate medical attention.
                            </p>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #91746E; font-size: 13px; font-weight: 600;">Duration: 15:42</span>
                                <button style="background: transparent; color: #91746E; border: 1px solid #91746E; padding: 8px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                                    Watch Now
                                </button>
                            </div>
                        </div>
                    </div>

                    <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div style="height: 180px; background: linear-gradient(135deg, #91746E, #DCCEC1); position: relative;">
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(255,255,255,0.9); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                                <svg style="width: 24px; height: 24px; fill: #91746E;" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div style="padding: 25px;">
                            <h4 style="font-size: 18px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Breastfeeding Techniques</h4>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                                Step-by-step guide to proper breastfeeding techniques, positions, and troubleshooting common issues.
                            </p>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #91746E; font-size: 13px; font-weight: 600;">Duration: 22:18</span>
                                <button style="background: transparent; color: #91746E; border: 1px solid #91746E; padding: 8px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                                    Watch Now
                                </button>
                            </div>
                        </div>
                    </div>

                    <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div style="height: 180px; background: linear-gradient(135deg, #91746E, #DCCEC1); position: relative;">
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(255,255,255,0.9); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                                <svg style="width: 24px; height: 24px; fill: #91746E;" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div style="padding: 25px;">
                            <h4 style="font-size: 18px; color: #363558; margin: 0 0 10px 0; font-weight: 700;">Emergency Transport Protocol</h4>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5; margin-bottom: 20px;">
                                Training for navigators on coordinating emergency transport and referral systems for maternal complications.
                            </p>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #91746E; font-size: 13px; font-weight: 600;">Duration: 18:35</span>
                                <button style="background: transparent; color: #91746E; border: 1px solid #91746E; padding: 8px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                                    Watch Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 3: Toolkits & Guides -->
            <div id="toolkits-guides">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                    <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                        <svg style="width: 32px; height: 32px; fill: #808FBD;" viewBox="0 0 24 24">
                            <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                        </svg>
                    </div>
                    <h3 style="font-size: 32px; color: #363558; margin: 0; font-weight: 800;">Toolkits & Guides</h3>
                </div>

                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        <div>
                            <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                                <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 24px; height: 24px; fill: #808FBD;" viewBox="0 0 24 24">
                                        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 style="font-size: 18px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Youth Navigator Toolkit</h4>
                                    <div style="color: #808FBD; font-size: 13px; font-weight: 600;">Complete Implementation Guide</div>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">
                                Comprehensive toolkit for establishing and managing youth navigator programs in communities.
                            </p>
                        </div>

                        <div>
                            <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                                <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 24px; height: 24px; fill: #808FBD;" viewBox="0 0 24 24">
                                        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 style="font-size: 18px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Monitoring & Evaluation Guide</h4>
                                    <div style="color: #808FBD; font-size: 13px; font-weight: 600;">For Program Managers</div>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">
                                Tools and templates for tracking program impact, data collection, and reporting.
                            </p>
                        </div>

                        <div>
                            <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                                <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="width: 24px; height: 24px; fill: #808FBD;" viewBox="0 0 24 24">
                                        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 style="font-size: 18px; color: #363558; margin: 0 0 5px 0; font-weight: 700;">Community Engagement Toolkit</h4>
                                    <div style="color: #808FBD; font-size: 13px; font-weight: 600;">For Outreach Teams</div>
                                </div>
                            </div>
                            <p style="color: #5a5a5a; font-size: 14px; line-height: 1.5;">
                                Strategies and materials for effective community mobilization and engagement.
                            </p>
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 40px;">
                        <button style="background: linear-gradient(90deg, #808FBD, #A3B4E0); color: white; border: none; padding: 14px 35px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 10px;">
                            <svg style="width: 18px; height: 18px; fill: white;" viewBox="0 0 24 24">
                                <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                            </svg>
                            Download All Toolkits
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Signup -->
        <div style="background: linear-gradient(135deg, #363558, #434961); border-radius: 30px; padding: 70px 60px; margin-bottom: 80px; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px); background-size: 60px 60px;"></div>

            <div style="position: relative; z-index: 2; text-align: center;">
                <div style="display: inline-flex; align-items: center; padding: 12px 30px; background: rgba(255,255,255,0.1); color: white; border-radius: 30px; font-size: 15px; font-weight: 700; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                    <svg style="width: 20px; height: 20px; fill: white; margin-right: 10px;" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    STAY UPDATED
                </div>

                <h3 style="font-size: 42px; color: white; margin: 0 0 20px 0; font-weight: 800; line-height: 1.2;">
                    Get New Resources <span style="color: #46DE48;">Delivered</span>
                </h3>

                <p style="font-size: 18px; color: #DCCEC1; margin: 0 auto 30px auto; max-width: 700px; line-height: 1.6;">
                    Subscribe to our monthly newsletter to receive new publications, research updates, and resources directly in your inbox.
                </p>

                <form style="max-width: 600px; margin: 0 auto; display: flex; gap: 15px; flex-wrap: wrap;">
                    <input type="email" style="flex: 1; min-width: 250px; padding: 18px 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white; font-size: 16px; outline: none;" placeholder="Enter your email address">
                    <button type="submit" style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 18px 35px; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 10px; white-space: nowrap;">
                        <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                        </svg>
                        Subscribe Now
                    </button>
                </form>

                <p style="color: #DCCEC1; font-size: 14px; margin-top: 20px; opacity: 0.8;">
                    <svg style="width: 16px; height: 16px; fill: #46DE48; vertical-align: middle; margin-right: 5px;" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                    We respect your privacy. Unsubscribe at any time.
                </p>
            </div>
        </div>

        <!-- Request Resources -->
        <div style="text-align: center; padding: 50px; background: white; border-radius: 30px; box-shadow: 0 20px 50px rgba(0,0,0,0.08);">
            <h2 style="font-size: 42px; color: #363558; margin: 0 0 20px 0; font-weight: 800; line-height: 1.2;">
                Can't Find What You're <span style="color: #DD3134;">Looking For</span>?
            </h2>
            <p style="font-size: 18px; color: #5a5a5a; margin: 0 auto 30px auto; max-width: 700px; line-height: 1.6;">
                Looking for specific resources or have suggestions for materials we should develop? Let us know!
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 12px;">
                    <svg style="width: 20px; height: 20px; fill: white;" viewBox="0 0 24 24">
                        <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    Request Resources
                </button>
                <button style="background: transparent; color: #363558; border: 2px solid #363558; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer;">
                    Contact Resource Team
                </button>
            </div>
        </div>

    </div>
</section>

@endsection