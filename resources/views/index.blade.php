@extends('layouts.apps')
@section('content')

    <section
        style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 10rem;">

        <!-- Geometric background elements -->
        <div
            style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05;">
        </div>
        <div
            style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #DD3134; opacity: 0.05;">
        </div>

        <div
            style="position: relative; z-index: 2; display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: center; min-height: 80vh; max-width: 1400px; margin: 0 auto;">

            <div style="padding-right: 40px;">
                <div
                    style="display: inline-flex; align-items: center; padding: 8px 20px; background-color: white; color: #363558; border-radius: 50px; font-size: 14px; font-weight: 700; margin-bottom: 30px; box-shadow: 0 8px 20px rgba(0,0,0,0.06);">
                    <span
                        style="display: inline-block; width: 10px; height: 10px; background-color: #46DE48; border-radius: 50%; margin-right: 10px;"></span>
                    Youth-Led Maternal Health Initiative
                </div>

                <h1
                    style="font-size: 70px; line-height: 1.05; margin: 0 0 25px 0; color: #363558; font-weight: 800; letter-spacing: -1.5px;">
                    Guiding <span style="color: #DD3134;">Mothers</span> <br>
                    Safely <span style="color: #46DE48;">Home</span>
                </h1>

                <p
                    style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 90%; position: relative; padding-left: 25px; border-left: 3px solid #808FBD;">
                    We connect expectant mothers with trained youth navigators who provide personalized support through
                    pregnancy, delivery, and postpartum—ensuring no mother walks alone.
                </p>

                <div style="display: flex; gap: 20px; align-items: center; margin-bottom: 70px; flex-wrap: wrap;">
                    <button
                        style="background-color: #363558; color: white; border: none; padding: 20px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 12px 25px rgba(54,53,88,0.25); position: relative; overflow: hidden;">
                        <span style="position: relative; z-index: 2; display: flex; align-items: center;">
                            Join Our Mission
                            <span style="margin-left: 15px; font-size: 20px; transition: transform 0.3s ease;">→</span>
                        </span>
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to right, #808FBD, #363558); opacity: 0; transition: opacity 0.3s ease;">
                        </div>
                    </button>
                    <button
                        style="background-color: transparent; color: #363558; border: 2px solid #DCCEC1; padding: 18px 38px; border-radius: 12px; font-size: 17px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 15px; transition: all 0.3s ease;">
                        <span
                            style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #91746E; border-radius: 10px; font-size: 16px; color: white;">▶</span>
                        <span>Watch Our Story</span>
                    </button>
                </div>

                <div
                    style="display: flex; gap: 30px; border-top: 1px solid rgba(0,0,0,0.08); padding-top: 40px; max-width: 90%;">
                    <div style="text-align: center;">
                        <div
                            style="font-size: 42px; font-weight: 800; color: #363558; margin-bottom: 8px; position: relative; display: inline-block;">
                            12,000+
                            <div
                                style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 4px; background-color: #46DE48; border-radius: 2px;">
                            </div>
                        </div>
                        <div style="font-size: 15px; color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>
                    <div style="text-align: center;">
                        <div
                            style="font-size: 42px; font-weight: 800; color: #363558; margin-bottom: 8px; position: relative; display: inline-block;">
                            350+
                            <div
                                style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 4px; background-color: #DD3134; border-radius: 2px;">
                            </div>
                        </div>
                        <div style="font-size: 15px; color: #808FBD; font-weight: 600;">Youth Navigators</div>
                    </div>
                    <div style="text-align: center;">
                        <div
                            style="font-size: 42px; font-weight: 800; color: #363558; margin-bottom: 8px; position: relative; display: inline-block;">
                            24
                            <div
                                style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 4px; background-color: #91746E; border-radius: 2px;">
                            </div>
                        </div>
                        <div style="font-size: 15px; color: #808FBD; font-weight: 600;">Districts</div>
                    </div>
                </div>
            </div>

            <div style="position: relative;">
                <div
                    style="position: relative; width: 100%; height: 500px; border-radius: 30px; overflow: hidden; box-shadow: 0 35px 70px rgba(0,0,0,0.15); transform: perspective(1000px) rotateY(-5deg); transition: transform 0.5s ease;">
                    <img src="https://images.unsplash.com/photo-1510154221590-ff63e90a136f?auto=format&fit=crop&q=80&w=1000"
                        alt="Mother and Child" style="width: 100%; height: 100%; object-fit: cover;">

                    <!-- Overlay stats -->
                    <div
                        style="position: absolute; top: 30px; right: 30px; background: rgba(255,255,255,0.95); padding: 20px 25px; border-radius: 16px; box-shadow: 0 15px 35px rgba(0,0,0,0.15); max-width: 220px; backdrop-filter: blur(10px);">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                            <div style="display: flex;">
                                <div
                                    style="width: 32px; height: 32px; border-radius: 50%; background: #DCCEC1; border: 3px solid white;">
                                </div>
                                <div
                                    style="width: 32px; height: 32px; border-radius: 50%; background: #91746E; border: 3px solid white; margin-left: -12px;">
                                </div>
                                <div
                                    style="width: 32px; height: 32px; border-radius: 50%; background: #46DE48; border: 3px solid white; margin-left: -12px;">
                                </div>
                            </div>
                            <div>
                                <div style="font-size: 16px; font-weight: 800; color: #363558;">350+ Navigators</div>
                                <div style="font-size: 12px; color: #808FBD;">Ready to help</div>
                            </div>
                        </div>
                        <div style="height: 1px; background: #f0f0f0; margin: 15px 0;"></div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div
                                style="background-color: #DD3134; color: white; width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; font-weight: bold;">
                                ♥
                            </div>
                            <div>
                                <div style="font-size: 26px; font-weight: 800; color: #363558; line-height: 1;">98%</div>
                                <div style="font-size: 13px; color: #808FBD;">Safe Deliveries</div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom overlay -->
                    <div
                        style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(54,53,88,0.9), transparent); padding: 40px 30px 30px; color: white;">
                        <div style="font-size: 22px; font-weight: 700; margin-bottom: 10px;">Community-Centered Care</div>
                        <div style="font-size: 15px; opacity: 0.9;">Youth navigators providing essential maternal health
                            support</div>
                    </div>
                </div>

                <!-- Decorative element -->
                <div
                    style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 25px; transform: rotate(-15deg); z-index: -1; opacity: 0.9; box-shadow: 0 25px 50px rgba(70,222,72,0.2);">
                </div>
            </div>
        </div>
    </section>


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

        <!-- Animated floating elements -->
        <div
            style="position: absolute; top: 15%; left: 10%; width: 80px; height: 80px; border-radius: 50%; background: radial-gradient(circle, rgba(220,206,193,0.1) 0%, rgba(220,206,193,0) 70%);">
        </div>
        <div
            style="position: absolute; bottom: 20%; right: 15%; width: 120px; height: 120px; border-radius: 50%; background: radial-gradient(circle, rgba(128,143,189,0.1) 0%, rgba(128,143,189,0) 70%);">
        </div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div
                style="display: inline-block; padding: 10px 30px; background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(221,49,52,0.3);">
                MEASURABLE IMPACT
            </div>

            <h2 style="color: white; font-size: 52px; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                Our Impact <span style="color: #46DE48;">in Numbers</span>
            </h2>

            <p
                style="color: #DCCEC1; font-size: 19px; max-width: 700px; margin: 0 auto 80px auto; line-height: 1.7; opacity: 0.9;">
                Every number represents a life touched, a family supported, and a mother empowered through our youth-led
                maternal health initiative.
            </p>

            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px; justify-items: center;">

                <!-- Card 1 -->
                <div
                    style="background: linear-gradient(145deg, #434961, #363558); width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #DD3134, #FF8E8E);">
                    </div>
                    <div
                        style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; box-shadow: 0 12px 25px rgba(221,49,52,0.4);">
                        👤
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: monospace; letter-spacing: 1px;">
                        12,847</div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Mothers Supported</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; gap: 5px;">
                        <span style="color: #46DE48;">▲</span> +12% from last year
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    style="background: linear-gradient(145deg, #434961, #363558); width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #46DE48, #80E681);">
                    </div>
                    <div
                        style="background: linear-gradient(135deg, #46DE48, #80E681); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; box-shadow: 0 12px 25px rgba(70,222,72,0.4);">
                        👶
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: monospace; letter-spacing: 1px;">
                        11,234</div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Safe Deliveries</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; gap: 5px;">
                        <span style="color: #46DE48;">▲</span> +8% from last year
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    style="background: linear-gradient(145deg, #434961, #363558); width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #91746E, #DCCEC1);">
                    </div>
                    <div
                        style="background: linear-gradient(135deg, #91746E, #DCCEC1); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; box-shadow: 0 12px 25px rgba(145,116,110,0.4);">
                        ❤️
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: monospace; letter-spacing: 1px;">
                        98%</div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Success Rate</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; gap: 5px;">
                        <span style="color: #46DE48;">●</span> Industry leading
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    style="background: linear-gradient(145deg, #434961, #363558); width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #808FBD, #A3B4E0);">
                    </div>
                    <div
                        style="background: linear-gradient(135deg, #808FBD, #A3B4E0); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; box-shadow: 0 12px 25px rgba(128,143,189,0.4);">
                        📍
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: monospace; letter-spacing: 1px;">
                        24</div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Districts Covered</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; gap: 5px;">
                        <span style="color: #DD3134;">+5</span> new this year
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    style="background: linear-gradient(145deg, #434961, #363558); width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #DD3134, #46DE48);">
                    </div>
                    <div
                        style="background: linear-gradient(135deg, #DD3134, #46DE48); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; box-shadow: 0 12px 25px rgba(221,49,52,0.4);">
                        🏅
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: monospace; letter-spacing: 1px;">
                        350+</div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Youth Navigators</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; gap: 5px;">
                        <span style="color: #46DE48;">▲</span> +22% growth
                    </div>
                </div>

            </div>

            <!-- Additional impact note -->
            <div
                style="margin-top: 80px; padding: 25px 40px; background: rgba(255,255,255,0.05); border-radius: 20px; max-width: 800px; margin-left: auto; margin-right: auto; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                <div
                    style="color: white; font-size: 18px; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center; justify-content: center; gap: 15px;">
                    <span style="color: #46DE48; font-size: 24px;">★</span>
                    Real impact, measured in lives changed
                </div>
                <div style="color: #DCCEC1; font-size: 15px; opacity: 0.8;">
                    These numbers are updated quarterly based on verified data from our community health partners.
                </div>
            </div>
        </div>
    </section>

    <section
        style="padding: 120px 10%; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative; overflow: hidden;">

        <!-- Background decorative elements -->
        <div
            style="position: absolute; top: 10%; right: 5%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%);">
        </div>
        <div
            style="position: absolute; bottom: 15%; left: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%);">
        </div>

        <div style="position: relative; z-index: 2;">
            <div style="text-align: center; margin-bottom: 90px; max-width: 800px; margin-left: auto; margin-right: auto;">
                <div
                    style="display: inline-block; padding: 8px 24px; background: linear-gradient(90deg, rgba(70,222,72,0.1), rgba(128,143,189,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 20px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.5);">
                    <span style="color: #46DE48; margin-right: 8px;">✦</span> OUR COMPREHENSIVE PROGRAMS
                </div>
                <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Three Stages of <span style="color: #DD3134;">Holistic Care</span>
                </h2>
                <p style="font-size: 19px; color: #5a5a5a; line-height: 1.7; opacity: 0.9;">
                    We support mothers through every step of their journey—from pregnancy to delivery to postpartum
                    recovery, ensuring comprehensive care at every stage.
                </p>
            </div>

            <!-- Program cards container -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 100px;">

                <!-- Stage 1: Prenatal Care -->
                <div
                    style="background: white; border-radius: 28px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease;">
                    <div style="position: relative; overflow: hidden; height: 200px;">
                        <img src="https://images.unsplash.com/photo-1518101645466-7795885ff8f8?auto=format&fit=crop&q=80&w=800"
                            alt="Pregnancy Care" style="width: 100%; height: 100%; object-fit: cover;">
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, transparent 0%, rgba(54,53,88,0.4) 100%);">
                        </div>
                        <div style="position: absolute; bottom: 25px; left: 25px; right: 25px;">
                            <div
                                style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(255,255,255,0.9); color: #363558; border-radius: 20px; font-size: 13px; font-weight: 700; gap: 8px; backdrop-filter: blur(10px);">
                                <span style="color: #DD3134;">📅</span> Stage 1: Prenatal Care
                            </div>
                        </div>
                    </div>

                    <div style="padding: 35px 30px 40px;">
                        <h3
                            style="font-size: 32px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.2;">
                            SafePregnancy
                        </h3>
                        <p style="font-size: 16px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Comprehensive support from the first trimester through birth planning, with regular check-ins
                            and health education.
                        </p>

                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-bottom: 35px;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(221,49,52,0.1); color: #DD3134; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    🔔
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Appointment Reminders</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    🏠
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Home Visits</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(145,116,110,0.1); color: #91746E; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    📖
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Health Education</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    💬
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Counseling</div>
                            </div>
                        </div>

                        <button
                            style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: 16px 32px; border-radius: 12px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 20px rgba(221,49,52,0.2); transition: all 0.3s ease; position: relative; overflow: hidden;">
                            <span style="position: relative; z-index: 2;">Learn More &nbsp; →</span>
                            <div
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, #FF6B6B, #DD3134); opacity: 0; transition: opacity 0.3s ease;">
                            </div>
                        </button>
                    </div>

                    <!-- Stage indicator -->
                    <div
                        style="position: absolute; top: 20px; right: 20px; background: #DD3134; color: white; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; box-shadow: 0 8px 20px rgba(221,49,52,0.3);">
                        01
                    </div>
                </div>

                <!-- Stage 2: Birth Support -->
                <div
                    style="background: white; border-radius: 28px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease;">
                    <div style="position: relative; overflow: hidden; height: 200px;">
                        <img src="https://images.unsplash.com/photo-1531983412531-1f49a365ffed?auto=format&fit=crop&q=80&w=800"
                            alt="Delivery Support" style="width: 100%; height: 100%; object-fit: cover;">
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, transparent 0%, rgba(54,53,88,0.4) 100%);">
                        </div>
                        <div style="position: absolute; bottom: 25px; left: 25px; right: 25px;">
                            <div
                                style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(255,255,255,0.9); color: #363558; border-radius: 20px; font-size: 13px; font-weight: 700; gap: 8px; backdrop-filter: blur(10px);">
                                <span style="color: #46DE48;">🚑</span> Stage 2: Birth Support
                            </div>
                        </div>
                    </div>

                    <div style="padding: 35px 30px 40px;">
                        <h3
                            style="font-size: 32px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.2;">
                            SafeDelivery
                        </h3>
                        <p style="font-size: 16px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            24/7 navigator availability for labor support, emergency referrals, and transport coordination
                            to health facilities.
                        </p>

                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-bottom: 35px;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    📞
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">24/7 Helpline</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    🚐
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Transport Support</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(145,116,110,0.1); color: #91746E; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    🛡️
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Emergency Referral</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(220,206,193,0.1); color: #DCCEC1; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    👩‍⚕️
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Birth Companion</div>
                            </div>
                        </div>

                        <button
                            style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: 16px 32px; border-radius: 12px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 20px rgba(70,222,72,0.2); transition: all 0.3s ease; position: relative; overflow: hidden;">
                            <span style="position: relative; z-index: 2;">Learn More &nbsp; →</span>
                            <div
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, #80E681, #46DE48); opacity: 0; transition: opacity 0.3s ease;">
                            </div>
                        </button>
                    </div>

                    <!-- Stage indicator -->
                    <div
                        style="position: absolute; top: 20px; right: 20px; background: #46DE48; color: white; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; box-shadow: 0 8px 20px rgba(70,222,72,0.3);">
                        02
                    </div>
                </div>

                <!-- Stage 3: Postpartum Care -->
                <div
                    style="background: white; border-radius: 28px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease, box-shadow 0.4s ease;">
                    <div style="position: relative; overflow: hidden; height: 200px;">
                        <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?auto=format&fit=crop&q=80&w=800"
                            alt="Postpartum Care" style="width: 100%; height: 100%; object-fit: cover;">
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, transparent 0%, rgba(54,53,88,0.4) 100%);">
                        </div>
                        <div style="position: absolute; bottom: 25px; left: 25px; right: 25px;">
                            <div
                                style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(255,255,255,0.9); color: #363558; border-radius: 20px; font-size: 13px; font-weight: 700; gap: 8px; backdrop-filter: blur(10px);">
                                <span style="color: #91746E;">🏠</span> Stage 3: Postpartum Care
                            </div>
                        </div>
                    </div>

                    <div style="padding: 35px 30px 40px;">
                        <h3
                            style="font-size: 32px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.2;">
                            SafeRecovery
                        </h3>
                        <p style="font-size: 16px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Continued support for mothers after delivery, including mental health check-ins, breastfeeding
                            guidance, and family planning.
                        </p>

                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-bottom: 35px;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(145,116,110,0.1); color: #91746E; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    🧠
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Mental Health</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(128,143,189,0.1); color: #808FBD; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    🤱
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Breastfeeding Support</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(220,206,193,0.1); color: #DCCEC1; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    👨‍👩‍👧
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Family Planning</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div
                                    style="background: rgba(70,222,72,0.1); color: #46DE48; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    📊
                                </div>
                                <div style="font-size: 13px; color: #363558; font-weight: 600;">Progress Tracking</div>
                            </div>
                        </div>

                        <button
                            style="background: linear-gradient(90deg, #91746E, #DCCEC1); color: white; border: none; padding: 16px 32px; border-radius: 12px; font-size: 15px; font-weight: 700; cursor: pointer; width: 100%; box-shadow: 0 10px 20px rgba(145,116,110,0.2); transition: all 0.3s ease; position: relative; overflow: hidden;">
                            <span style="position: relative; z-index: 2;">Learn More &nbsp; →</span>
                            <div
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, #DCCEC1, #91746E); opacity: 0; transition: opacity 0.3s ease;">
                            </div>
                        </button>
                    </div>

                    <!-- Stage indicator -->
                    <div
                        style="position: absolute; top: 20px; right: 20px; background: #91746E; color: white; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; box-shadow: 0 8px 20px rgba(145,116,110,0.3);">
                        03
                    </div>
                </div>

            </div>

            <!-- Process timeline -->
            <div
                style="background: linear-gradient(90deg, #363558, #434961); border-radius: 25px; padding: 40px 50px; box-shadow: 0 20px 50px rgba(54,53,88,0.2);">
                <div style="color: white; font-size: 22px; font-weight: 700; margin-bottom: 30px; text-align: center;">
                    <span style="color: #46DE48;">📋</span> Complete Maternal Journey Support
                </div>
                <div style="display: flex; justify-content: space-between; position: relative; margin-top: 40px;">
                    <!-- Timeline line -->
                    <div
                        style="position: absolute; top: 25px; left: 10%; right: 10%; height: 3px; background: rgba(255,255,255,0.2); z-index: 1;">
                    </div>

                    <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
                        <div
                            style="background: #DD3134; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px; box-shadow: 0 10px 20px rgba(221,49,52,0.3);">
                            1
                        </div>
                        <div style="color: white; font-size: 16px; font-weight: 600;">Prenatal</div>
                        <div style="color: #DCCEC1; font-size: 13px; margin-top: 5px;">Months 1-9</div>
                    </div>

                    <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
                        <div
                            style="background: #46DE48; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px; box-shadow: 0 10px 20px rgba(70,222,72,0.3);">
                            2
                        </div>
                        <div style="color: white; font-size: 16px; font-weight: 600;">Delivery</div>
                        <div style="color: #DCCEC1; font-size: 13px; margin-top: 5px;">Birth Support</div>
                    </div>

                    <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
                        <div
                            style="background: #91746E; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px; box-shadow: 0 10px 20px rgba(145,116,110,0.3);">
                            3
                        </div>
                        <div style="color: white; font-size: 16px; font-weight: 600;">Postpartum</div>
                        <div style="color: #DCCEC1; font-size: 13px; margin-top: 5px;">Months 1-12</div>
                    </div>

                    <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
                        <div
                            style="background: #808FBD; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px; box-shadow: 0 10px 20px rgba(128,143,189,0.3);">
                            ✓
                        </div>
                        <div style="color: white; font-size: 16px; font-weight: 600;">Continued Care</div>
                        <div style="color: #DCCEC1; font-size: 13px; margin-top: 5px;">Ongoing Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stories of Hope Section -->
    <section
        style="padding: 120px 10%; background: linear-gradient(135deg, #E7E9ED 0%, #ffffff 100%); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative; overflow: hidden;">

        <!-- Background elements -->
        <div
            style="position: absolute; top: 10%; right: 5%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%);">
        </div>
        <div
            style="position: absolute; bottom: 15%; left: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%);">
        </div>

        <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 80px;">
                <div
                    style="display: inline-flex; align-items: center; padding: 8px 24px; background: linear-gradient(90deg, rgba(70,222,72,0.1), rgba(128,143,189,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 20px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.5);">
                    <span style="color: #46DE48; margin-right: 8px;">✦</span> TESTIMONIALS & STORIES
                </div>
                <h2 style="font-size: 52px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Voices from the <span style="color: #DD3134;">Field</span>
                </h2>
                <p
                    style="font-size: 19px; color: #5a5a5a; line-height: 1.7; opacity: 0.9; max-width: 700px; margin: 0 auto;">
                    Real stories from mothers, navigators, and partners who are part of our journey toward better maternal
                    health.
                </p>
            </div>

            <!-- Testimonial cards -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 60px;">

                <!-- Testimonial 1 -->
                <div
                    style="background: white; border-radius: 28px; padding: 40px 35px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 25px; right: 25px; color: #DD3134; font-size: 48px; opacity: 0.2; font-family: Georgia, serif;">
                        "</div>
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=200"
                            alt="Dr. Peter Okello"
                            style="width: 70px; height: 70px; border-radius: 20px; object-fit: cover; border: 3px solid white; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                        <div>
                            <div style="font-weight: 800; color: #363558; font-size: 18px;">Dr. Peter Okello</div>
                            <div style="font-size: 14px; color: #DD3134; font-weight: 600;">Medical Partner</div>
                            <div style="font-size: 13px; color: #808FBD;">Mbale Regional Hospital</div>
                        </div>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-bottom: 30px; font-style: italic;">
                        "SafeMoms Navigator has revolutionized how we connect with communities. The referral system means
                        mothers arrive at our facility prepared, with their navigators by their side."
                    </p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div
                            style="width: 100%; height: 3px; background: linear-gradient(90deg, #DD3134, #FF6B6B); border-radius: 2px;">
                        </div>
                        <div style="color: #DD3134; font-weight: 800; font-size: 14px;">Medical Partner</div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    style="background: white; border-radius: 28px; padding: 40px 35px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 25px; right: 25px; color: #46DE48; font-size: 48px; opacity: 0.2; font-family: Georgia, serif;">
                        "</div>
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200"
                            alt="Sarah Johnson"
                            style="width: 70px; height: 70px; border-radius: 20px; object-fit: cover; border: 3px solid white; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                        <div>
                            <div style="font-weight: 800; color: #363558; font-size: 18px;">Sarah Johnson</div>
                            <div style="font-size: 14px; color: #46DE48; font-weight: 600;">Youth Navigator</div>
                            <div style="font-size: 13px; color: #808FBD;">2 Years Experience</div>
                        </div>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-bottom: 30px; font-style: italic;">
                        "Being a youth navigator changed my life. I've supported 24 mothers through their pregnancies and
                        seen firsthand how our work saves lives and strengthens communities."
                    </p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div
                            style="width: 100%; height: 3px; background: linear-gradient(90deg, #46DE48, #80E681); border-radius: 2px;">
                        </div>
                        <div style="color: #46DE48; font-weight: 800; font-size: 14px;">Youth Navigator</div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    style="background: white; border-radius: 28px; padding: 40px 35px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); position: relative; border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 25px; right: 25px; color: #91746E; font-size: 48px; opacity: 0.2; font-family: Georgia, serif;">
                        "</div>
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=200"
                            alt="Maria Rodriguez"
                            style="width: 70px; height: 70px; border-radius: 20px; object-fit: cover; border: 3px solid white; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                        <div>
                            <div style="font-weight: 800; color: #363558; font-size: 18px;">Maria Rodriguez</div>
                            <div style="font-size: 14px; color: #91746E; font-weight: 600;">Mother Supported</div>
                            <div style="font-size: 13px; color: #808FBD;">Safe Delivery 2023</div>
                        </div>
                    </div>
                    <p style="font-size: 16px; color: #5a5a5a; line-height: 1.7; margin-bottom: 30px; font-style: italic;">
                        "My navigator was with me every step of the way. From my first prenatal visit to holding my healthy
                        baby girl, I never felt alone. This program saved my life."
                    </p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div
                            style="width: 100%; height: 3px; background: linear-gradient(90deg, #91746E, #DCCEC1); border-radius: 2px;">
                        </div>
                        <div style="color: #91746E; font-weight: 800; font-size: 14px;">Mother Supported</div>
                    </div>
                </div>
            </div>

            <!-- Navigation & Avatars -->
            <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 50px;">
                <div style="display: flex; align-items: center; gap: 20px;">
                    <div style="font-size: 15px; color: #363558; font-weight: 600;">More Stories:</div>
                    <div style="display: flex; gap: 15px;">
                        <div style="width: 60px; height: 60px; border-radius: 18px; overflow: hidden; opacity: 0.6;">
                            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&q=80&w=200"
                                alt="Story 1" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="width: 60px; height: 60px; border-radius: 18px; overflow: hidden; opacity: 0.6;">
                            <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&q=80&w=200"
                                alt="Story 2" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div
                            style="width: 60px; height: 60px; border-radius: 18px; overflow: hidden; border: 3px solid #DD3134; opacity: 1;">
                            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=200"
                                alt="Current Story" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 15px;">
                    <button
                        style="width: 50px; height: 50px; border-radius: 50%; border: none; background: white; cursor: pointer; color: #363558; font-size: 18px; font-weight: bold; box-shadow: 0 10px 25px rgba(0,0,0,0.08); display: flex; align-items: center; justify-content: center;">
                        ←
                    </button>
                    <div style="display: flex; gap: 8px;">
                        <div style="width: 10px; height: 10px; border-radius: 50%; background: #DD3134; opacity: 0.3;">
                        </div>
                        <div style="width: 10px; height: 10px; border-radius: 50%; background: #46DE48; opacity: 0.3;">
                        </div>
                        <div
                            style="width: 30px; height: 10px; border-radius: 5px; background: linear-gradient(90deg, #DD3134, #46DE48);">
                        </div>
                        <div style="width: 10px; height: 10px; border-radius: 50%; background: #91746E; opacity: 0.3;">
                        </div>
                    </div>
                    <button
                        style="width: 50px; height: 50px; border-radius: 50%; border: none; background: white; cursor: pointer; color: #363558; font-size: 18px; font-weight: bold; box-shadow: 0 10px 25px rgba(0,0,0,0.08); display: flex; align-items: center; justify-content: center;">
                        →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Involved Section -->
    <section
        style="padding: 120px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative; overflow: hidden;">

        <!-- Background pattern -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 25% 25%, white 1px, transparent 1px); background-size: 50px 50px;">
        </div>

        <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 80px;">
                <div
                    style="display: inline-flex; align-items: center; padding: 8px 24px; background: rgba(255,255,255,0.1); color: white; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 20px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                    <span style="color: #46DE48; margin-right: 8px;">✦</span> GET INVOLVED
                </div>
                <h2 style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Join Our <span style="color: #46DE48;">Mission</span>
                </h2>
                <p
                    style="font-size: 19px; color: #DCCEC1; line-height: 1.7; opacity: 0.9; max-width: 700px; margin: 0 auto;">
                    There are many ways to be part of the SafeMoms Navigator community and help save lives. Choose your path
                    to make a difference.
                </p>
            </div>

            <!-- Involvement cards -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; margin-bottom: 80px;">

                <!-- Card 1 -->
                <div
                    style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease;">
                    <div
                        style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px; margin-bottom: 30px; box-shadow: 0 15px 30px rgba(221,49,52,0.3);">
                        👤
                    </div>
                    <h4 style="color: white; font-size: 22px; margin: 0 0 15px 0; font-weight: 800;">Become a Navigator</h4>
                    <p style="color: #DCCEC1; font-size: 15px; line-height: 1.6; margin-bottom: 30px;">
                        Join our team of youth navigators and make a direct impact in maternal health through training and
                        community support.
                    </p>
                    <a href="#"
                        style="display: inline-flex; align-items: center; color: #DD3134; text-decoration: none; font-size: 15px; font-weight: 700; gap: 8px;">
                        Learn More
                        <span style="font-size: 18px; transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div
                    style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease;">
                    <div
                        style="background: linear-gradient(135deg, #46DE48, #80E681); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px; margin-bottom: 30px; box-shadow: 0 15px 30px rgba(70,222,72,0.3);">
                        🤝
                    </div>
                    <h4 style="color: white; font-size: 22px; margin: 0 0 15px 0; font-weight: 800;">Volunteer With Us</h4>
                    <p style="color: #DCCEC1; font-size: 15px; line-height: 1.6; margin-bottom: 30px;">
                        Contribute your skills and time to support mothers in your community through various volunteer
                        opportunities.
                    </p>
                    <a href="#"
                        style="display: inline-flex; align-items: center; color: #46DE48; text-decoration: none; font-size: 15px; font-weight: 700; gap: 8px;">
                        Learn More
                        <span style="font-size: 18px; transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

                <!-- Card 3 -->
                <div
                    style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease;">
                    <div
                        style="background: linear-gradient(135deg, #91746E, #DCCEC1); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px; margin-bottom: 30px; box-shadow: 0 15px 30px rgba(145,116,110,0.3);">
                        🏢
                    </div>
                    <h4 style="color: white; font-size: 22px; margin: 0 0 15px 0; font-weight: 800;">Partner With SMN</h4>
                    <p style="color: #DCCEC1; font-size: 15px; line-height: 1.6; margin-bottom: 30px;">
                        Organizations and institutions can collaborate with us to expand our reach and impact in maternal
                        health.
                    </p>
                    <a href="#"
                        style="display: inline-flex; align-items: center; color: #91746E; text-decoration: none; font-size: 15px; font-weight: 700; gap: 8px;">
                        Learn More
                        <span style="font-size: 18px; transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

                <!-- Card 4 -->
                <div
                    style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.4s ease, background 0.4s ease;">
                    <div
                        style="background: linear-gradient(135deg, #808FBD, #A3B4E0); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px; margin-bottom: 30px; box-shadow: 0 15px 30px rgba(128,143,189,0.3);">
                        ❤️
                    </div>
                    <h4 style="color: white; font-size: 22px; margin: 0 0 15px 0; font-weight: 800;">Sponsor a Mother</h4>
                    <p style="color: #DCCEC1; font-size: 15px; line-height: 1.6; margin-bottom: 30px;">
                        Your donation covers prenatal care, delivery support, and postpartum follow-up for one mother's
                        complete journey.
                    </p>
                    <a href="#"
                        style="display: inline-flex; align-items: center; color: #808FBD; text-decoration: none; font-size: 15px; font-weight: 700; gap: 8px;">
                        Learn More
                        <span style="font-size: 18px; transition: transform 0.3s ease;">→</span>
                    </a>
                </div>
            </div>

            <!-- Donation CTA -->
            <div
                style="background: linear-gradient(135deg, #DD3134, #FF6B6B); border-radius: 30px; padding: 70px 60px; position: relative; overflow: hidden; box-shadow: 0 30px 60px rgba(221,49,52,0.3);">

                <!-- Background pattern -->
                <div
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px); background-size: 60px 60px;">
                </div>

                <div style="position: relative; z-index: 2; text-align: center; color: white;">
                    <div
                        style="display: inline-flex; align-items: center; padding: 12px 30px; background: rgba(255,255,255,0.2); color: white; border-radius: 30px; font-size: 15px; font-weight: 700; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                        <span style="font-size: 20px; margin-right: 10px;">❤️</span> MAKE A DIFFERENCE
                    </div>

                    <h3 style="font-size: 42px; font-weight: 800; margin: 0 0 20px 0; line-height: 1.2;">
                        Every Mother Deserves <span style="color: #363558;">Safe Care</span>
                    </h3>

                    <p style="font-size: 18px; margin: 0 auto 30px auto; max-width: 700px; opacity: 0.9; line-height: 1.6;">
                        Your donation of <span style="font-weight: 800; font-size: 24px; color: #363558;">$50</span> can
                        sponsor a mother's complete journey from pregnancy to postpartum care, ensuring she receives the
                        support she needs.
                    </p>

                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <button
                            style="background: white; color: #DD3134; border: none; padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); transition: all 0.3s ease;">
                            <span style="font-size: 20px;">❤️</span> Donate Now →
                        </button>
                        <button
                            style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3); padding: 18px 40px; border-radius: 12px; font-size: 17px; font-weight: 700; cursor: pointer; backdrop-filter: blur(10px); transition: all 0.3s ease;">
                            Learn About Impact →
                        </button>
                    </div>

                    <div
                        style="display: flex; justify-content: center; gap: 30px; margin-top: 40px; color: rgba(255,255,255,0.8); font-size: 14px;">
                        <div style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 800; color: white;">100%</div>
                            <div>Direct to Programs</div>
                        </div>
                        <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
                        <div style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 800; color: white;">2,500+</div>
                            <div>Mothers Sponsored</div>
                        </div>
                        <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
                        <div style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 800; color: white;">$50</div>
                            <div>Complete Journey</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection