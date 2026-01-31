@extends('layouts.apps')
@section('content')

    <section
        style="margin: 0; padding: 100px 5% 120px 5%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

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
                    SafeMoms Navigator(SMN)
                    is a community-powered maternal health program that connects expectant and new
                    mothers with trained youth navigators who provide personalised support throughout
                    pregnancy, childbirth, and postpartum recovery.
                    Our mission is simple and powerful: no mother should walk her maternal journey
                    alone.
                </p>

                <p
                    style="font-size: 20px; line-height: 1.6; color: #5a5a5a; margin-bottom: 50px; max-width: 90%; position: relative; padding-left: 25px; border-left: 3px solid #808FBD;">
                    Through home visits, digital reminders, emergency transport coordination, and
                    compassionate guidance, we ensure mothers receive timely, respectful, and lifesaving care — right from
                    their communities.
                </p>

                <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                    <a href="our-team" style="text-decoration: none;">
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
                    </a>

                    <button
                        style="background-color: transparent; color: #363558; border: 2px solid #DCCEC1; padding: 18px 38px; border-radius: 12px; font-size: 17px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 15px; transition: all 0.3s ease;">
                        <span
                            style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #91746E; border-radius: 10px; font-size: 16px; color: white;">▶</span>
                        <span>Watch Our Story</span>
                    </button>
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
                                    style="width: 32px; height: 32px; border-radius: 50%; background: #DCCEC1; border: 3px solid white; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-stethoscope" style="font-size: 12px; color: #8B7355;"></i>
                                </div>
                                <div
                                    style="width: 32px; height: 32px; border-radius: 50%; background: #91746E; border: 3px solid white; margin-left: -12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-hands-helping" style="font-size: 12px; color: #6B4C47;"></i>
                                </div>
                                <div
                                    style="width: 32px; height: 32px; border-radius: 50%; background: #46DE48; border: 3px solid white; margin-left: -12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-baby" style="font-size: 12px; color: #2C8C2E;"></i>
                                </div>
                            </div>
                            <div>
                                <div style="font-size: 16px; font-weight: 800; color: #363558;">50+ Navigators</div>
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
                                <div style="font-size: 26px; font-weight: 800; color: #363558; line-height: 1;">100%</div>
                                <div style="font-size: 13px; color: #808FBD;">Safe Deliveries</div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom overlay -->
                    <div
                        style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(54,53,88,0.9), transparent); padding: 40px 30px 30px; color: white;">
                        <div style="font-size: 22px; font-weight: 700; margin-bottom: 10px;">Community-Centered Care</div>
                        <div style="font-size: 15px; opacity: 0.9;">Youth navigators providing essential maternal health
                            support

                            <p>At the heart of SafeMoms Navigator is a growing network of trained youth
                                navigators — passionate young people who serve as trusted companions for
                                mothers in their communities.</p>

                            <p><strong>What Youth Navigators Do</strong>
                            </p>

                            <ul style="list-style-type: none; padding-left: 0;">
                                <li style="position: relative; padding-left: 30px; margin-bottom: 10px;">
                                    <span
                                        style="position: absolute; left: 0; top: 0; font-size: 20px; color: #46DE48;">&#8226;</span>
                                    Conduct home visits during pregnancy and postpartum
                                </li>
                                <li style="position: relative; padding-left: 30px; margin-bottom: 10px;">
                                    <span
                                        style="position: absolute; left: 0; top: 0; font-size: 20px; color: #46DE48;">&#8226;</span>
                                    Screen for WHO-aligned danger signs
                                </li>
                                <li style="position: relative; padding-left: 30px; margin-bottom: 10px;">
                                    <span
                                        style="position: absolute; left: 0; top: 0; font-size: 20px; color: #46DE48;">&#8226;</span>
                                    Provide health education and emotional support
                                </li>
                                <li style="position: relative; padding-left: 30px; margin-bottom: 10px;">
                                    <span
                                        style="position: absolute; left: 0; top: 0; font-size: 20px; color: #46DE48;">&#8226;</span>
                                    Help mothers prepare for birth
                                </li>
                                <li style="position: relative; padding-left: 30px; margin-bottom: 10px;">
                                    <span
                                        style="position: absolute; left: 0; top: 0; font-size: 20px; color: #46DE48;">&#8226;</span>
                                    Coordinate emergency transport when complications arise
                                </li>
                                <li style="position: relative; padding-left: 30px;">
                                    <span
                                        style="position: absolute; left: 0; top: 0; font-size: 20px; color: #46DE48;">&#8226;</span>
                                    Follow up after delivery to ensure mother and baby are safe
                                </li>
                            </ul>

                            <p>Youth navigators bridge the gap between communities and health facilities, ensuring
                                mothers receive timely care and never feel alone.
                            </p>
                        </div>
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

        <!-- Abstract floating elements -->
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
                Key Impact <span style="color: #46DE48;">Highlights</span>
            </h2>

            <p
                style="color: #DCCEC1; font-size: 19px; max-width: 700px; margin: 0 auto 80px auto; line-height: 1.7; opacity: 0.9;">
                Our work is rooted in community, powered by youth, and strengthened by data.
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
                        style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(221,49,52,0.4);">
                        <i class="bi bi-person" style="color: white; font-size: 32px;"></i>
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px;">
                        20+
                    </div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Mothers Supported</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; justify-content: center; gap: 5px;">
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
                        style="background: linear-gradient(135deg, #46DE48, #80E681); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(70,222,72,0.4);">
                        <i class="bi bi-balloon-heart" style="color: white; font-size: 32px;"></i>
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px;">
                        100%
                    </div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Safe Deliveries</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; justify-content: center; gap: 5px;">
                        <span style="color: #46DE48;">▲</span> +8% from last year
                    </div>
                </div>


                <!-- Card 4 -->
                <div
                    style="background: linear-gradient(145deg, #434961, #363558); width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #808FBD, #A3B4E0);">
                    </div>
                    <div
                        style="background: linear-gradient(135deg, #808FBD, #A3B4E0); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(128,143,189,0.4);">
                        <i class="bi bi-geo-alt" style="color: white; font-size: 32px;"></i>
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px;">
                        1
                    </div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">District Covered</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; justify-content: center; gap: 5px;">
                        <span style="color: #46DE48;">+5</span> from last year
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    style="background: linear-gradient(145deg, #434961, #363558); width: 100%; max-width: 220px; padding: 40px 25px; border-radius: 24px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #DD3134, #46DE48);">
                    </div>
                    <div
                        style="background: linear-gradient(135deg, #DD3134, #46DE48); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; box-shadow: 0 12px 25px rgba(221,49,52,0.4);">
                        <i class="bi bi-mortarboard" style="color: white; font-size: 32px;"></i>
                    </div>
                    <div
                        style="color: white; font-size: 42px; font-weight: 800; margin-bottom: 8px; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px;">
                        50+
                    </div>
                    <div style="color: #DCCEC1; font-size: 14px; font-weight: 600;">Youth Navigators Trained</div>
                    <div
                        style="margin-top: 15px; font-size: 12px; color: #808FBD; display: flex; align-items: center; justify-content: center; gap: 5px;">
                        <span style="color: #46DE48;">▲</span> +22% growth
                    </div>
                </div>

            </div>

            <!-- Additional impact note -->
            <div
                style="margin-top: 80px; padding: 25px 40px; background: rgba(255,255,255,0.05); border-radius: 20px; max-width: 800px; margin-left: auto; margin-right: auto; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                <div
                    style="color: white; font-size: 18px; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center; justify-content: center; gap: 15px;">
                    <i class="bi bi-star-fill" style="color: #46DE48; font-size: 20px;"></i>
                    Why These Numbers Matter
                </div>
                <div style="color: #DCCEC1; font-size: 15px; margin-top: 10px;">
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
                           background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
                           font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; 
                           position: relative; 
                           overflow: hidden;">

        <!-- Background decorative elements -->
        <div
            style="position: absolute; top: 10%; right: 5%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%);">
        </div>
        <div
            style="position: absolute; bottom: 15%; left: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%);">
        </div>

        <div style="position: relative; z-index: 2;">

            <!-- Header -->
            <div
                style="text-align: center; margin-bottom: clamp(40px, 8vw, 90px); max-width: 800px; margin-left: auto; margin-right: auto;">
                <div
                    style="display: inline-block; padding: clamp(4px,1vw,8px) clamp(12px,2vw,24px); 
                                       background: linear-gradient(90deg, rgba(70,222,72,0.1), rgba(128,143,189,0.1)); 
                                       color: #363558; border-radius: 30px; font-size: clamp(12px,1.2vw,14px); font-weight: 700; margin-bottom: 20px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.5);">
                    <span style="color: #46DE48; margin-right: 6px;">✦</span> OUR COMPREHENSIVE PROGRAMS
                </div>
                <h2
                    style="font-size: clamp(28px,5vw,52px); color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.1;">
                    Three Stages of <span style="color: #DD3134;">Holistic Maternal Care</span>
                </h2>
                <p style="font-size: clamp(14px,3vw,19px); color: #5a5a5a; line-height: 1.6; opacity: 0.9;">
                    SafeMoms Navigator supports mothers through the entire maternal journey, ensuring
                    continuity of care from the first trimester to one year postpartum.
                </p>
            </div>

            <!-- Program cards container -->
            <div style="
                            display: grid;
                            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                            gap: clamp(15px,3vw,30px);
                            margin-bottom: clamp(50px, 10vw,100px);
                            width: 100%;
                        ">

                <!-- Stage 1: Prenatal Care -->
                <div style="
                                background: white;
                                border-radius: 28px;
                                overflow: hidden;
                                box-shadow: 0 20px 50px rgba(0,0,0,0.08);
                                position: relative;
                                border: 1px solid #f0f0f0;
                                transition: transform 0.4s ease, box-shadow 0.4s ease;
                                min-width: 0;
                            ">
                    <div style="position: relative; overflow: hidden; height: clamp(150px,20vw,200px);">
                        <img src="https://images.unsplash.com/photo-1518101645466-7795885ff8f8?auto=format&fit=crop&q=80&w=800"
                            alt="Pregnancy Care" style="width: 100%; height: 100%; object-fit: cover;">

                        <div style="
                                        position: absolute;
                                        inset: 0;
                                        background: linear-gradient(to bottom, transparent 0%, rgba(54,53,88,0.4) 100%);
                                    "></div>

                        <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
                            <div style="
                                            display: inline-flex;
                                            align-items: center;
                                            padding: 4px 12px;
                                            background: rgba(255,255,255,0.9);
                                            color: #363558;
                                            border-radius: 20px;
                                            font-size: clamp(11px,2vw,13px);
                                            font-weight: 700;
                                            gap: 6px;
                                            backdrop-filter: blur(10px);
                                        ">
                                Stage 1: Prenatal Care
                            </div>
                        </div>
                    </div>

                    <div style="padding: clamp(15px,3vw,35px) clamp(15px,3vw,30px) clamp(25px,3vw,40px);">
                        <h3
                            style="font-size: clamp(22px,4vw,32px); font-weight: 800; margin-bottom: 12px; line-height: 1.2;">
                            SafePregnancy
                        </h3>

                        <p style="font-size: clamp(14px,3vw,16px); color: #5a5a5a; line-height: 1.5; margin-bottom: 25px;">
                            We walk with mothers from early pregnancy through birth planning, ensuring support and
                            follow-up.
                        </p>

                        <div style="
                                        display: grid;
                                        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                                        gap: clamp(8px,2vw,15px);
                                        margin-bottom: 25px;
                                    ">
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Appointment Reminders</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Home Visits</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Health Education</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Counseling</div>
                        </div>

                        <a href="SafePregnancy" style="text-decoration: none;">
                            <button style="
                                            width: 100%;
                                            background: linear-gradient(90deg, #DD3134, #FF6B6B);
                                            color: white;
                                            border: none;
                                            padding: clamp(12px,3vw,16px);
                                            border-radius: 12px;
                                            font-size: clamp(13px,3vw,15px);
                                            font-weight: 700;
                                            cursor: pointer;
                                            box-shadow: 0 10px 20px rgba(221,49,52,0.2);
                                        ">
                                Learn More →
                            </button>
                        </a>
                    </div>

                    <div style="
                                    position: absolute;
                                    top: 15px;
                                    right: 15px;
                                    background: #DD3134;
                                    color: white;
                                    width: 36px;
                                    height: 36px;
                                    border-radius: 10px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    font-weight: 800;
                                    font-size: 14px;
                                ">
                        01
                    </div>
                </div>

                <!-- Stage 2: Birth Support -->
                <!-- (Apply same responsive tweaks as Stage 1) -->
                <div style="
                                background: white;
                                border-radius: 28px;
                                overflow: hidden;
                                box-shadow: 0 20px 50px rgba(0,0,0,0.08);
                                position: relative;
                                border: 1px solid #f0f0f0;
                                min-width: 0;
                            ">
                    <div style="position: relative; overflow: hidden; height: clamp(150px,20vw,200px);">
                        <img src="https://images.unsplash.com/photo-1531983412531-1f49a365ffed?auto=format&fit=crop&q=80&w=800"
                            alt="Delivery Support" style="width: 100%; height: 100%; object-fit: cover;">

                        <div style="
                                        position: absolute;
                                        inset: 0;
                                        background: linear-gradient(to bottom, transparent 0%, rgba(54,53,88,0.4) 100%);
                                    "></div>

                        <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
                            <div style="
                                            display: inline-flex;
                                            align-items: center;
                                            padding: 4px 12px;
                                            background: rgba(255,255,255,0.9);
                                            border-radius: 20px;
                                            font-size: clamp(11px,2vw,13px);
                                            font-weight: 700;
                                        ">
                                Stage 2: Birth Support
                            </div>
                        </div>
                    </div>

                    <div style="padding: clamp(15px,3vw,35px) clamp(15px,3vw,30px) clamp(25px,3vw,40px);">
                        <h3 style="font-size: clamp(22px,4vw,32px); font-weight: 800; margin-bottom: 12px;">
                            SafeDelivery
                        </h3>

                        <p style="font-size: clamp(14px,3vw,16px); color: #5a5a5a; margin-bottom: 25px;">
                            We ensure mothers reach skilled care safely and on time.
                        </p>

                        <div style="
                                        display: grid;
                                        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                                        gap: clamp(8px,2vw,15px);
                                        margin-bottom: 25px;
                                    ">
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">24/7 Helpline</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Transport Support</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Emergency Referral</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Birth Companion</div>
                        </div>

                        <a href="SafeDelivery" style="text-decoration: none;">
                            <button style="
                                            width: 100%;
                                            background: linear-gradient(90deg, #46DE48, #80E681);
                                            color: white;
                                            border: none;
                                            padding: clamp(12px,3vw,16px);
                                            border-radius: 12px;
                                            font-size: clamp(13px,3vw,15px);
                                            font-weight: 700;
                                            cursor: pointer;
                                        ">
                                Learn More →
                            </button>
                        </a>
                    </div>

                    <div style="
                                    position: absolute;
                                    top: 15px;
                                    right: 15px;
                                    background: #46DE48;
                                    color: white;
                                    width: 36px;
                                    height: 36px;
                                    border-radius: 10px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    font-weight: 800;
                                    font-size: 14px;
                                ">
                        02
                    </div>
                </div>

                <!-- Stage 3: Postpartum Care -->
                <!-- (Apply same responsive tweaks as Stage 1) -->
                <div style="
                                background: white;
                                border-radius: 28px;
                                overflow: hidden;
                                box-shadow: 0 20px 50px rgba(0,0,0,0.08);
                                position: relative;
                                border: 1px solid #f0f0f0;
                                min-width: 0;
                            ">
                    <div style="position: relative; overflow: hidden; height: clamp(150px,20vw,200px);">
                        <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?auto=format&fit=crop&q=80&w=800"
                            alt="Postpartum Care" style="width: 100%; height: 100%; object-fit: cover;">

                        <div style="
                                        position: absolute;
                                        inset: 0;
                                        background: linear-gradient(to bottom, transparent 0%, rgba(54,53,88,0.4) 100%);
                                    "></div>

                        <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
                            <div style="
                                            display: inline-flex;
                                            align-items: center;
                                            padding: 4px 12px;
                                            background: rgba(255,255,255,0.9);
                                            border-radius: 20px;
                                            font-size: clamp(11px,2vw,13px);
                                            font-weight: 700;
                                        ">
                                Stage 3: Postpartum Care
                            </div>
                        </div>
                    </div>

                    <div style="padding: clamp(15px,3vw,35px) clamp(15px,3vw,30px) clamp(25px,3vw,40px);">
                        <h3 style="font-size: clamp(22px,4vw,32px); font-weight: 800; margin-bottom: 12px;">
                            SafeRecovery
                        </h3>

                        <p style="font-size: clamp(14px,3vw,16px); color: #5a5a5a; margin-bottom: 25px;">
                            Continuous postpartum support for mothers and newborns.
                        </p>

                        <div style="
                                        display: grid;
                                        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                                        gap: clamp(8px,2vw,15px);
                                        margin-bottom: 25px;
                                    ">
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Mental Health</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Breastfeeding Support</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Family Planning</div>
                            <div style="font-size: clamp(12px,2vw,14px); font-weight: 600;">Progress Tracking</div>
                        </div>

                        <a href="SafePostpartum" style="text-decoration: none;">
                            <button style="
                                            width: 100%;
                                            background: linear-gradient(90deg, #91746E, #DCCEC1);
                                            color: white;
                                            border: none;
                                            padding: clamp(12px,3vw,16px);
                                            border-radius: 12px;
                                            font-size: clamp(13px,3vw,15px);
                                            font-weight: 700;
                                            cursor: pointer;
                                        ">
                                Learn More →
                            </button>
                        </a>
                    </div>

                    <div style="
                                    position: absolute;
                                    top: 15px;
                                    right: 15px;
                                    background: #91746E;
                                    color: white;
                                    width: 36px;
                                    height: 36px;
                                    border-radius: 10px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    font-weight: 800;
                                    font-size: 14px;
                                ">
                        03
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
                    Real stories from mothers,youth navigators, and medical partners who are shaping
                    the future of maternal health.
                </p>
            </div>
            <!-- Testimonial cards -->
            <div style="
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: clamp(15px,3vw,30px);
                margin-bottom: clamp(40px,6vw,60px);
                width: 100%;
            ">

                <!-- Testimonial 1 -->
                <div style="
                    background: white;
                    border-radius: 28px;
                    padding: clamp(15px,3vw,40px) clamp(15px,3vw,35px);
                    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
                    position: relative;
                    border: 1px solid #f0f0f0;
                    transition: transform 0.4s ease;
                    min-width: 0;
                ">
                    <div style="
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        color: #DD3134;
                        font-size: clamp(24px,6vw,48px);
                        opacity: 0.2;
                        font-family: Georgia, serif;
                    ">"
                    </div>

                    <div style="
                        display: flex;
                        align-items: center;
                        gap: clamp(10px,2vw,20px);
                        margin-bottom: clamp(15px,3vw,25px);
                        flex-wrap: wrap;
                    ">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=200"
                            alt="Dr. Peter Okello" style="
                            width: clamp(50px,12vw,70px);
                            height: clamp(50px,12vw,70px);
                            border-radius: 20px;
                            object-fit: cover;
                            border: 3px solid white;
                            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                            flex-shrink: 0;
                        ">

                        <div style="min-width: 160px; flex: 1;">
                            <div style="font-weight: 800; color: #363558; font-size: clamp(14px,3vw,18px);">
                                Dr. Peter Okello
                            </div>
                            <div style="font-size: clamp(12px,2.5vw,14px); color: #DD3134; font-weight: 600;">
                                Medical Partner
                            </div>
                            <div style="font-size: clamp(11px,2.5vw,13px); color: #808FBD;">
                                Mbale Regional Hospital
                            </div>
                        </div>
                    </div>

                    <p style="
                        font-size: clamp(13px,3vw,16px);
                        color: #5a5a5a;
                        line-height: 1.6;
                        margin-bottom: clamp(20px,4vw,30px);
                        font-style: italic;
                    ">
                        "SafeMoms Navigator has transformed how we connect with communities. Mothers
                        arrive prepared, supported, and accompanied by their navigators. It has
                        strengthened our referral system and improved outcomes"
                    </p>

                    <div style="display: flex; align-items: center; gap: clamp(5px,2vw,10px); flex-wrap: wrap;">
                        <div style="
                            flex: 1;
                            height: 3px;
                            background: linear-gradient(90deg, #DD3134, #FF6B6B);
                            border-radius: 2px;
                            min-width: 100px;
                        "></div>
                        <div style="color: #DD3134; font-weight: 800; font-size: clamp(12px,2.5vw,14px);">
                            Medical Partner
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div style="
                    background: white;
                    border-radius: 28px;
                    padding: clamp(15px,3vw,40px) clamp(15px,3vw,35px);
                    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
                    position: relative;
                    border: 1px solid #f0f0f0;
                    transition: transform 0.4s ease;
                    min-width: 0;
                ">
                    <div style="
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        color: #46DE48;
                        font-size: clamp(24px,6vw,48px);
                        opacity: 0.2;
                        font-family: Georgia, serif;
                    ">"
                    </div>

                    <div style="
                        display: flex;
                        align-items: center;
                        gap: clamp(10px,2vw,20px);
                        margin-bottom: clamp(15px,3vw,25px);
                        flex-wrap: wrap;
                    ">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200"
                            alt="Sarah Namugenyi" style="
                            width: clamp(50px,12vw,70px);
                            height: clamp(50px,12vw,70px);
                            border-radius: 20px;
                            object-fit: cover;
                            border: 3px solid white;
                            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                            flex-shrink: 0;
                        ">

                        <div style="min-width: 160px; flex: 1;">
                            <div style="font-weight: 800; color: #363558; font-size: clamp(14px,3vw,18px);">
                                Sarah Namugenyi
                            </div>
                            <div style="font-size: clamp(12px,2.5vw,14px); color: #46DE48; font-weight: 600;">
                                Youth Navigator
                            </div>
                            <div style="font-size: clamp(11px,2.5vw,13px); color: #808FBD;">
                                2 Years Experience
                            </div>
                        </div>
                    </div>

                    <p style="
                        font-size: clamp(13px,3vw,16px);
                        color: #5a5a5a;
                        line-height: 1.6;
                        margin-bottom: clamp(20px,4vw,30px);
                        font-style: italic;
                    ">
                        "Being a youth navigator changed my life. I’ve supported 24 mothers and seen
                        firsthand how our work saves lives and builds stronger communities."
                    </p>

                    <div style="display: flex; align-items: center; gap: clamp(5px,2vw,10px); flex-wrap: wrap;">
                        <div style="
                            flex: 1;
                            height: 3px;
                            background: linear-gradient(90deg, #46DE48, #80E681);
                            border-radius: 2px;
                            min-width: 100px;
                        "></div>
                        <div style="color: #46DE48; font-weight: 800; font-size: clamp(12px,2.5vw,14px);">
                            Youth Navigator
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div style="
                    background: white;
                    border-radius: 28px;
                    padding: clamp(15px,3vw,40px) clamp(15px,3vw,35px);
                    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
                    position: relative;
                    border: 1px solid #f0f0f0;
                    transition: transform 0.4s ease;
                    min-width: 0;
                ">
                    <div style="
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        color: #91746E;
                        font-size: clamp(24px,6vw,48px);
                        opacity: 0.2;
                        font-family: Georgia, serif;
                    ">"
                    </div>

                    <div style="
                        display: flex;
                        align-items: center;
                        gap: clamp(10px,2vw,20px);
                        margin-bottom: clamp(15px,3vw,25px);
                        flex-wrap: wrap;
                    ">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=200"
                            alt="Maria Nabirye" style="
                            width: clamp(50px,12vw,70px);
                            height: clamp(50px,12vw,70px);
                            border-radius: 20px;
                            object-fit: cover;
                            border: 3px solid white;
                            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                            flex-shrink: 0;
                        ">

                        <div style="min-width: 160px; flex: 1;">
                            <div style="font-weight: 800; color: #363558; font-size: clamp(14px,3vw,18px);">
                                Maria Nabirye
                            </div>
                            <div style="font-size: clamp(12px,2.5vw,14px); color: #91746E; font-weight: 600;">
                                Mother Supported
                            </div>
                            <div style="font-size: clamp(11px,2.5vw,13px); color: #808FBD;">
                                Safe Delivery 2023
                            </div>
                        </div>
                    </div>

                    <p style="
                        font-size: clamp(13px,3vw,16px);
                        color: #5a5a5a;
                        line-height: 1.6;
                        margin-bottom: clamp(20px,4vw,30px);
                        font-style: italic;
                    ">
                        "My navigator was with me every step of the way. From my first prenatal visit to
                        holding my healthy baby girl, I never felt alone. This program saved my life."
                    </p>

                    <div style="display: flex; align-items: center; gap: clamp(5px,2vw,10px); flex-wrap: wrap;">
                        <div style="
                            flex: 1;
                            height: 3px;
                            background: linear-gradient(90deg, #91746E, #DCCEC1);
                            border-radius: 2px;
                            min-width: 100px;
                        "></div>
                        <div style="color: #91746E; font-weight: 800; font-size: clamp(12px,2.5vw,14px);">
                            Mother Supported
                        </div>
                    </div>
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
                    <svg style="width: 16px; height: 16px; fill: #46DE48; margin-right: 8px;" viewBox="0 0 24 24">
                        <path
                            d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z" />
                    </svg>
                    GET INVOLVED
                </div>
                <h2 style="font-size: 52px; color: white; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -0.5px;">
                    Join Our <span style="color: #46DE48;">Mission</span>
                </h2>
                <p
                    style="font-size: 19px; color: #DCCEC1; line-height: 1.7; opacity: 0.9; max-width: 700px; margin: 0 auto;">
                    There are many ways to be part of the SafeMoms Navigator community.</p>
            </div>

            <!-- Involvement cards -->
            <div style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: clamp(15px, 3vw, 25px);
            margin-bottom: clamp(50px, 6vw, 80px);
        ">

                <!-- Card 1 -->
                <div style="
                background: rgba(255,255,255,0.05);
                border-radius: 25px;
                padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255,255,255,0.1);
                transition: transform 0.4s ease, background 0.4s ease;
            ">
                    <div style="
                    background: linear-gradient(135deg, #DD3134, #FF6B6B);
                    width: clamp(50px,10vw,70px);
                    height: clamp(50px,10vw,70px);
                    border-radius: 18px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: clamp(20px,5vw,28px);
                    margin-bottom: clamp(20px,3vw,30px);
                    box-shadow: 0 15px 30px rgba(221,49,52,0.3);
                ">
                        <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>
                    <h4 style="color: white; font-size: clamp(18px, 4vw, 22px); margin: 0 0 12px 0; font-weight: 800;">
                        Become a Navigator</h4>
                    <p
                        style="color: #DCCEC1; font-size: clamp(13px, 3vw, 15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px);">
                        Train as a youth navigator and make a direct impact in your community.
                    </p>
                    <a href="{{url('become-a-navigator')}}"
                        style="display: inline-flex; align-items: center; color: #DD3134; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px;">
                        Learn More
                        <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div style="
                background: rgba(255,255,255,0.05);
                border-radius: 25px;
                padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255,255,255,0.1);
                transition: transform 0.4s ease, background 0.4s ease;
            ">
                    <div style="
                    background: linear-gradient(135deg, #46DE48, #80E681);
                    width: clamp(50px,10vw,70px);
                    height: clamp(50px,10vw,70px);
                    border-radius: 18px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: clamp(20px,5vw,28px);
                    margin-bottom: clamp(20px,3vw,30px);
                    box-shadow: 0 15px 30px rgba(70,222,72,0.3);
                ">
                        <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <h4 style="color: white; font-size: clamp(18px,4vw,22px); margin: 0 0 12px 0; font-weight: 800;">
                        Volunteer With Us</h4>
                    <p
                        style="color: #DCCEC1; font-size: clamp(13px,3vw,15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px);">
                        Share your skills and time to support mothers and families.
                    </p>
                    <a href="{{ url('become-a-volunteer') }}"
                        style="display: inline-flex; align-items: center; color: #46DE48; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px;">
                        Learn More
                        <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

                <!-- Card 3 -->
                <div style="
                background: rgba(255,255,255,0.05);
                border-radius: 25px;
                padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255,255,255,0.1);
                transition: transform 0.4s ease, background 0.4s ease;
            ">
                    <div style="
                    background: linear-gradient(135deg, #91746E, #DCCEC1);
                    width: clamp(50px,10vw,70px);
                    height: clamp(50px,10vw,70px);
                    border-radius: 18px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: clamp(20px,5vw,28px);
                    margin-bottom: clamp(20px,3vw,30px);
                    box-shadow: 0 15px 30px rgba(145,116,110,0.3);
                ">
                        <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;"
                            viewBox="0 0 24 24">
                            <path
                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-8-2h2v-4h4v-2h-4V7h-2v4H7v2h4z" />
                        </svg>
                    </div>
                    <h4 style="color: white; font-size: clamp(18px,4vw,22px); margin: 0 0 12px 0; font-weight: 800;">Partner
                        With SMN</h4>
                    <p
                        style="color: #DCCEC1; font-size: clamp(13px,3vw,15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px);">
                        Collaborate with us to expand maternal health support across Uganda.
                    </p>
                    <a href="{{ url('partner-with-smn') }}"
                        style="display: inline-flex; align-items: center; color: #91746E; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px;">
                        Learn More
                        <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

                <!-- Card 4 -->
                <div style="
                background: rgba(255,255,255,0.05);
                border-radius: 25px;
                padding: clamp(20px, 4vw, 40px) clamp(15px, 4vw, 30px);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255,255,255,0.1);
                transition: transform 0.4s ease, background 0.4s ease;
            ">
                    <div style="
                    background: linear-gradient(135deg, #808FBD, #A3B4E0);
                    width: clamp(50px,10vw,70px);
                    height: clamp(50px,10vw,70px);
                    border-radius: 18px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: clamp(20px,5vw,28px);
                    margin-bottom: clamp(20px,3vw,30px);
                    box-shadow: 0 15px 30px rgba(128,143,189,0.3);
                ">
                        <svg style="width: clamp(24px,6vw,32px); height: clamp(24px,6vw,32px); fill: white;"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                    <h4 style="color: white; font-size: clamp(18px,4vw,22px); margin: 0 0 12px 0; font-weight: 800;">Sponsor
                        a Mother</h4>
                    <p
                        style="color: #DCCEC1; font-size: clamp(13px,3vw,15px); line-height: 1.6; margin-bottom: clamp(20px,4vw,30px);">
                        Your donation covers a mother’s full journey — pregnancy, delivery, and postpartum care.
                    </p>
                    <a href="{{ url('donate') }}"
                        style="display: inline-flex; align-items: center; color: #808FBD; text-decoration: none; font-size: clamp(13px,3vw,15px); font-weight: 700; gap: 6px;">
                        Learn More
                        <span style="font-size: clamp(14px,3vw,18px); transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

            </div>


            <!-- Donation CTA -->
            <div style="
        background: linear-gradient(135deg, #DD3134, #FF6B6B);
        border-radius: 30px;
        padding: clamp(40px, 8vw, 70px) clamp(20px, 5vw, 60px);
        position: relative;
        overflow: hidden;
        box-shadow: 0 30px 60px rgba(221,49,52,0.3);
    ">

                <!-- Background pattern -->
                <div style="
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            opacity: 0.1;
            background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px);
            background-size: 60px 60px;
        "></div>

                <div style="position: relative; z-index: 2; text-align: center; color: white;">

                    <div style="
                display: inline-flex;
                align-items: center;
                padding: clamp(8px,2vw,12px) clamp(15px,4vw,30px);
                background: rgba(255,255,255,0.2);
                color: white;
                border-radius: 30px;
                font-size: clamp(12px,3vw,15px);
                font-weight: 700;
                margin-bottom: clamp(15px,3vw,25px);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255,255,255,0.3);
            ">
                        <svg style="width: clamp(16px,4vw,20px); height: clamp(16px,4vw,20px); fill: white; margin-right: 8px;"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        MAKE A DIFFERENCE
                    </div>

                    <h3 style="
                font-size: clamp(28px, 7vw, 42px);
                font-weight: 800;
                margin: 0 0 clamp(15px,4vw,20px) 0;
                line-height: 1.2;
            ">
                        Every Mother Deserves <span style="color: #363558;">Safe Care</span>
                    </h3>

                    <p style="
                font-size: clamp(14px,4vw,18px);
                margin: 0 auto clamp(20px,5vw,30px) auto;
                max-width: 100%;
                opacity: 0.9;
                line-height: 1.6;
            ">
                        Your donation of <span
                            style="font-weight: 800; font-size: clamp(18px,5vw,24px); color: #363558;">$50</span> can
                        sponsor a mother's complete journey from pregnancy to postpartum care, ensuring she receives the
                        support she needs.
                    </p>

                    <div style="display: flex; gap: clamp(10px,3vw,20px); justify-content: center; flex-wrap: wrap;">
                        <a href="{{ url('donate') }}" style="
                    background: white;
                    color: #DD3134;
                    border: none;
                    padding: clamp(12px,3vw,18px) clamp(25px,5vw,40px);
                    border-radius: 12px;
                    font-size: clamp(14px,4vw,17px);
                    font-weight: 800;
                    cursor: pointer;
                    display: inline-flex;
                    align-items: center;
                    gap: clamp(8px,2vw,12px);
                    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
                    transition: all 0.3s ease;
                    text-decoration:none;
                ">
                            <svg style="width: clamp(16px,4vw,20px); height: clamp(16px,4vw,20px); fill: #DD3134;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                            Donate Now →
                        </a>
                        <a href="{{ url('News') }}" style="
                    background: transparent;
                    color: white;
                    border: 2px solid rgba(255,255,255,0.3);
                    padding: clamp(12px,3vw,18px) clamp(25px,5vw,40px);
                    border-radius: 12px;
                    font-size: clamp(14px,4vw,17px);
                    font-weight: 700;
                    cursor: pointer;
                    backdrop-filter: blur(10px);
                    transition: all 0.3s ease;
                    text-decoration:none;
                ">
                            Learn About Impact →
                        </a>
                    </div>

                    <div style="
                display: flex;
                justify-content: center;
                gap: clamp(15px,3vw,30px);
                margin-top: clamp(30px,5vw,40px);
                color: rgba(255,255,255,0.8);
                font-size: clamp(12px,3vw,14px);
                flex-wrap: wrap;
            ">
                        <div style="text-align: center; min-width: 80px;">
                            <div style="font-size: clamp(18px,5vw,24px); font-weight: 800; color: white;">100%</div>
                            <div>Direct to Programs</div>
                        </div>
                        <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
                        <div style="text-align: center; min-width: 80px;">
                            <div style="font-size: clamp(18px,5vw,24px); font-weight: 800; color: white;">2,500+</div>
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

@endsection