@extends('layouts.apps')

@section('content')
    <div
        style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #E7E9ED 100%); margin-top: 8em;">

        <!-- Hero Section -->
        <section style="padding: 120px 10% 80px 10%; text-align: center; position: relative; overflow: hidden;">
            <!-- Background Elements -->
            <div
                style="position: absolute; top: 10%; left: 10%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.08) 0%, rgba(70,222,72,0) 70%);">
            </div>
            <div
                style="position: absolute; bottom: 20%; right: 10%; width: 150px; height: 150px; border: 2px dashed #DD3134; border-radius: 40px; opacity: 0.1; transform: rotate(15deg);">
            </div>

            <div style="position: relative; z-index: 2;">
                <div
                    style="display: inline-flex; align-items: center; padding: 12px 30px; background: linear-gradient(90deg, rgba(70,222,72,0.1), rgba(128,143,189,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.8);">
                    <span style="color: #46DE48; margin-right: 10px;">
                        <i class="bi bi-lightbulb"></i>
                    </span>
                    INNOVATION & TECHNOLOGY
                </div>

                <h1
                    style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                    Simple <span style="color: #DD3134;">Solutions</span>,<br>Lasting <span
                        style="color: #46DE48;">Impact</span>
                </h1>

                <p style="font-size: 20px; color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    We develop practical, scalable innovations designed for resource-limited settings. Our tools work
                    anywhere—no internet or smartphones required.
                </p>
            </div>
        </section>

        <!-- Innovation Principles -->
        <section
            style="padding: 80px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
            <!-- Grid Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 25% 25%, #46DE48 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">

                    <!-- Principle 1 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: center; transition: transform 0.3s ease;">
                        <div
                            style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; font-size: 28px; box-shadow: 0 15px 30px rgba(221,49,52,0.3);">
                            <i class="bi bi-plug" style="color: white;"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 15px; color: white;">Low-Tech First
                        </h4>
                        <p style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">Works without
                            smartphones or internet connectivity</p>
                        <div
                            style="display: inline-flex; align-items: center; gap: 8px; background: rgba(221,49,52,0.2); color: #DD3134; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">
                            UNIVERSAL ACCESS
                        </div>
                    </div>

                    <!-- Principle 2 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: center; transition: transform 0.3s ease;">
                        <div
                            style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; font-size: 28px; box-shadow: 0 15px 30px rgba(145,116,110,0.3);">
                            <i class="bi bi-globe" style="color: white;"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 15px; color: white;">Locally Designed
                        </h4>
                        <p style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">Built with and for
                            the communities we serve</p>
                        <div
                            style="display: inline-flex; align-items: center; gap: 8px; background: rgba(145,116,110,0.2); color: #91746E; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">
                            COMMUNITY-LED
                        </div>
                    </div>

                    <!-- Principle 3 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: center; transition: transform 0.3s ease;">
                        <div
                            style="width: 70px; height: 70px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; font-size: 28px; box-shadow: 0 15px 30px rgba(128,143,189,0.3);">
                            <i class="bi bi-graph-up" style="color: white;"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 15px; color: white;">Scalable</h4>
                        <p style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">Proven model ready
                            for rapid nationwide replication</p>
                        <div
                            style="display: inline-flex; align-items: center; gap: 8px; background: rgba(128,143,189,0.2); color: #808FBD; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">
                            EXPANDABLE
                        </div>
                    </div>

                    <!-- Principle 4 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: center; transition: transform 0.3s ease;">
                        <div
                            style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; font-size: 28px; box-shadow: 0 15px 30px rgba(70,222,72,0.3);">
                            <i class="bi bi-arrow-repeat" style="color: white;"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 15px; color: white;">Sustainable</h4>
                        <p style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">Affordable and
                            maintainable for long-term impact</p>
                        <div
                            style="display: inline-flex; align-items: center; gap: 8px; background: rgba(70,222,72,0.2); color: #46DE48; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">
                            LONG-TERM
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SMS Innovation -->
        <section
            style="padding: 100px 10%; display: flex; align-items: center; gap: 80px; background: white; position: relative;">
            <!-- Background Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(45deg, #46DE48 0px, #46DE48 1px, transparent 1px, transparent 30px);">
            </div>

            <div
                style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; display: flex; align-items: center; gap: 80px;">
                <div style="flex: 1;">
                    <div
                        style="display: inline-flex; align-items: center; padding: 10px 25px; background: rgba(221,49,52,0.1); color: #DD3134; border-radius: 25px; font-size: 13px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px;">
                        <span style="margin-right: 10px;">💬</span> LOW-TECH INNOVATION
                    </div>

                    <h2 style="font-size: 48px; color: #363558; margin-bottom: 25px; font-weight: 800; line-height: 1.2;">
                        SMS <span style="color: #DD3134;">Reminder</span> System
                    </h2>

                    <p style="font-size: 18px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px;">
                        Our SMS-based system delivers automated reminders for prenatal visits, immunizations, and health
                        education. It works on any basic phone—no smartphone or internet required.
                    </p>

                    <!-- Features Grid -->
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(221,49,52,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 18px;">
                                ✓
                            </div>
                            <div>
                                <div style="font-size: 15px; font-weight: 700; color: #363558;">Basic Phone Compatible</div>
                                <div style="font-size: 13px; color: #808FBD;">No smartphone required</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(221,49,52,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 18px;">
                                ✓
                            </div>
                            <div>
                                <div style="font-size: 15px; font-weight: 700; color: #363558;">4 Local Languages</div>
                                <div style="font-size: 13px; color: #808FBD;">Luganda, Runyankole, Ateso, Luo</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(221,49,52,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 18px;">
                                ✓
                            </div>
                            <div>
                                <div style="font-size: 15px; font-weight: 700; color: #363558;">Two-way Communication</div>
                                <div style="font-size: 13px; color: #808FBD;">Mothers can reply for support</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(221,49,52,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 18px;">
                                ✓
                            </div>
                            <div>
                                <div style="font-size: 15px; font-weight: 700; color: #363558;">Customizable Schedules</div>
                                <div style="font-size: 13px; color: #808FBD;">Personalized reminder timing</div>
                            </div>
                        </div>
                    </div>

                    <!-- Impact Stats -->
                    <div
                        style="display: flex; gap: 40px; background: rgba(54,53,88,0.05); padding: 30px; border-radius: 25px; border-left: 4px solid #DD3134;">
                        <div style="text-align: center;">
                            <div style="font-size: 42px; font-weight: 800; color: #DD3134; line-height: 1;">250,000+</div>
                            <div style="font-size: 14px; color: #363558; font-weight: 600;">SMS Messages Sent</div>
                            <div style="font-size: 12px; color: #808FBD; margin-top: 5px;">Since program launch</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 42px; font-weight: 800; color: #DD3134; line-height: 1;">95%</div>
                            <div style="font-size: 14px; color: #363558; font-weight: 600;">Reach Rate</div>
                            <div style="font-size: 12px; color: #808FBD; margin-top: 5px;">Of targeted mothers</div>
                        </div>
                    </div>
                </div>

                <div style="flex: 1; position: relative;">
                    <div
                        style="background: white; border-radius: 30px; padding: 25px; box-shadow: 0 40px 80px rgba(54,53,88,0.15); border: 1px solid #f0f0f0; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80&w=800"
                            style="width: 100%; border-radius: 20px; margin-bottom: 20px;">

                        <!-- Floating Element -->
                        <div
                            style="position: absolute; top: -25px; right: -25px; background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; padding: 20px; border-radius: 20px; box-shadow: 0 20px 40px rgba(221,49,52,0.3); width: 180px;">
                            <div style="font-size: 32px; font-weight: 800; text-align: center; margin-bottom: 10px;">📱
                            </div>
                            <div style="font-size: 12px; opacity: 0.9; text-align: center; font-weight: 600;">ANY PHONE
                                WORKS</div>
                        </div>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background: rgba(54,53,88,0.05); border-radius: 15px;">
                            <div>
                                <div style="font-size: 13px; color: #808FBD; font-weight: 600; margin-bottom: 5px;">SAMPLE
                                    MESSAGE</div>
                                <div style="font-size: 16px; font-weight: 700; color: #363558;">"Reminder: Your prenatal
                                    visit tomorrow"</div>
                            </div>
                            <div style="color: #DD3134; font-weight: 800; font-size: 24px;">→</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Emergency System -->
        <section
            style="padding: 100px 10%; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); position: relative;">
            <!-- Background Elements -->
            <div
                style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; border-radius: 30px; background: linear-gradient(135deg, rgba(70,222,72,0.05), rgba(70,222,72,0)); transform: rotate(25deg);">
            </div>
            <div
                style="position: absolute; bottom: 30%; right: 10%; width: 150px; height: 150px; border: 2px dashed #808FBD; border-radius: 50%; opacity: 0.1;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div style="display: flex; align-items: center; gap: 80px; margin-bottom: 100px;">
                    <div style="flex: 1; position: relative;">
                        <div
                            style="background: white; border-radius: 30px; padding: 25px; box-shadow: 0 40px 80px rgba(54,53,88,0.15); border: 1px solid #f0f0f0; overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?auto=format&fit=crop&q=80&w=800"
                                style="width: 100%; border-radius: 20px;">

                            <!-- Floating Element -->
                            <div
                                style="position: absolute; bottom: -25px; left: -25px; background: linear-gradient(135deg, #46DE48, #80E681); color: white; padding: 20px; border-radius: 20px; box-shadow: 0 20px 40px rgba(70,222,72,0.3); width: 200px;">
                                <div style="font-size: 32px; font-weight: 800; text-align: center; margin-bottom: 10px;">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <div style="font-size: 12px; opacity: 0.9; text-align: center; font-weight: 600;">RAPID
                                    RESPONSE</div>
                            </div>
                        </div>
                    </div>

                    <div style="flex: 1;">
                        <div
                            style="display: inline-flex; align-items: center; padding: 10px 25px; background: rgba(70,222,72,0.1); color: #46DE48; border-radius: 25px; font-size: 13px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px;">
                            <i class="bi bi-exclamation-triangle" style="margin-right: 10px;"></i>
                            EMERGENCY INNOVATION
                        </div>

                        <h2
                            style="font-size: 48px; color: #363558; margin-bottom: 25px; font-weight: 800; line-height: 1.2;">
                            Digital <span style="color: #46DE48;">Referral</span> System
                        </h2>

                        <p style="font-size: 18px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px;">
                            When emergencies arise, our digital referral system connects mothers with transport and health
                            facilities within minutes, dramatically reducing response times.
                        </p>

                        <!-- Features List -->
                        <div
                            style="background: white; padding: 30px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); margin-bottom: 40px;">
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li
                                    style="padding: 15px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 15px;">
                                    <div
                                        style="width: 30px; height: 30px; background: rgba(70,222,72,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 14px;">
                                        ✓
                                    </div>
                                    <span style="font-size: 15px; color: #363558; font-weight: 600;">Real-time location
                                        tracking</span>
                                </li>
                                <li
                                    style="padding: 15px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 15px;">
                                    <div
                                        style="width: 30px; height: 30px; background: rgba(70,222,72,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 14px;">
                                        ✓
                                    </div>
                                    <span style="font-size: 15px; color: #363558; font-weight: 600;">Automated transport
                                        dispatch</span>
                                </li>
                                <li
                                    style="padding: 15px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 15px;">
                                    <div
                                        style="width: 30px; height: 30px; background: rgba(70,222,72,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 14px;">
                                        ✓
                                    </div>
                                    <span style="font-size: 15px; color: #363558; font-weight: 600;">Facility notification
                                        system</span>
                                </li>
                                <li style="padding: 15px 0; display: flex; align-items: center; gap: 15px;">
                                    <div
                                        style="width: 30px; height: 30px; background: rgba(70,222,72,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 14px;">
                                        ✓
                                    </div>
                                    <span style="font-size: 15px; color: #363558; font-weight: 600;">Post-emergency
                                        follow-up</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Impact Stats -->
                        <div style="display: flex; gap: 30px;">
                            <div style="text-align: center;">
                                <div style="font-size: 36px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">
                                    < 15 min</div>
                                        <div style="font-size: 14px; color: #363558; font-weight: 600;">Average Response
                                            Time</div>
                                        <div style="font-size: 12px; color: #808FBD;">From call to dispatch</div>
                                </div>
                                <div style="text-align: center;">
                                    <div style="font-size: 36px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">98%
                                    </div>
                                    <div style="font-size: 14px; color: #363558; font-weight: 600;">Success Rate</div>
                                    <div style="font-size: 12px; color: #808FBD;">Emergency referrals completed</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Training Platform -->
                    <div style="display: flex; align-items: center; gap: 80px;">
                        <div style="flex: 1;">
                            <div
                                style="display: inline-flex; align-items: center; padding: 10px 25px; background: rgba(128,143,189,0.1); color: #808FBD; border-radius: 25px; font-size: 13px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px;">
                                <i class="bi bi-person-workspace" style="margin-right: 10px;"></i>
                                CAPACITY BUILDING
                            </div>

                            <h2
                                style="font-size: 48px; color: #363558; margin-bottom: 25px; font-weight: 800; line-height: 1.2;">
                                Navigator <span style="color: #808FBD;">Training</span> Platform
                            </h2>

                            <p style="font-size: 18px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px;">
                                Our comprehensive training program equips young people with the skills to become effective
                                maternal health navigators through both digital and in-person learning.
                            </p>

                            <!-- Curriculum Highlights -->
                            <div
                                style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px;">
                                <div
                                    style="background: rgba(128,143,189,0.05); padding: 20px; border-radius: 20px; border-left: 4px solid #808FBD;">
                                    <div style="font-size: 15px; font-weight: 700; color: #363558; margin-bottom: 10px;">
                                        40-Hour Core Curriculum</div>
                                    <div style="font-size: 13px; color: #5a5a5a;">Comprehensive maternal health training
                                    </div>
                                </div>
                                <div
                                    style="background: rgba(128,143,189,0.05); padding: 20px; border-radius: 20px; border-left: 4px solid #808FBD;">
                                    <div style="font-size: 15px; font-weight: 700; color: #363558; margin-bottom: 10px;">
                                        Practical Field Training</div>
                                    <div style="font-size: 13px; color: #5a5a5a;">Hands-on experience with supervision</div>
                                </div>
                                <div
                                    style="background: rgba(128,143,189,0.05); padding: 20px; border-radius: 20px; border-left: 4px solid #808FBD;">
                                    <div style="font-size: 15px; font-weight: 700; color: #363558; margin-bottom: 10px;">
                                        Monthly Refreshers</div>
                                    <div style="font-size: 13px; color: #5a5a5a;">Continuous learning and skill updates
                                    </div>
                                </div>
                                <div
                                    style="background: rgba(128,143,189,0.05); padding: 20px; border-radius: 20px; border-left: 4px solid #808FBD;">
                                    <div style="font-size: 15px; font-weight: 700; color: #363558; margin-bottom: 10px;">
                                        Certification Pathway</div>
                                    <div style="font-size: 13px; color: #5a5a5a;">Official recognition of skills and
                                        training</div>
                                </div>
                            </div>

                            <!-- Impact Stats -->
                            <div style="display: flex; gap: 40px;">
                                <div style="text-align: center;">
                                    <div style="font-size: 42px; font-weight: 800; color: #808FBD; line-height: 1;">500+
                                    </div>
                                    <div style="font-size: 14px; color: #363558; font-weight: 600;">Navigators Trained</div>
                                    <div style="font-size: 12px; color: #808FBD;">Youth equipped for service</div>
                                </div>
                                <div style="text-align: center;">
                                    <div style="font-size: 42px; font-weight: 800; color: #808FBD; line-height: 1;">92%
                                    </div>
                                    <div style="font-size: 14px; color: #363558; font-weight: 600;">Retention Rate</div>
                                    <div style="font-size: 12px; color: #808FBD;">Continue serving after 1 year</div>
                                </div>
                            </div>
                        </div>

                        <div style="flex: 1; position: relative;">
                            <div
                                style="background: white; border-radius: 30px; padding: 25px; box-shadow: 0 40px 80px rgba(54,53,88,0.15); border: 1px solid #f0f0f0; overflow: hidden;">
                                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=800"
                                    style="width: 100%; border-radius: 20px;">

                                <!-- Floating Element -->
                                <div
                                    style="position: absolute; top: -25px; right: -25px; background: linear-gradient(135deg, #91746E, #DCCEC1); color: white; padding: 20px; border-radius: 20px; box-shadow: 0 20px 40px rgba(145,116,110,0.3); width: 180px;">
                                    <div style="font-size: 32px; font-weight: 800; text-align: center; margin-bottom: 10px;">
    <i class="bi bi-mortarboard"></i>
</div>
                                    <div style="font-size: 12px; opacity: 0.9; text-align: center; font-weight: 600;">
                                        CERTIFIED TRAINING</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Tech Approach -->
        <section
            style="padding: 100px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; text-align: center; position: relative;">
            <!-- Grid Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div
                    style="display: inline-flex; align-items: center; background: rgba(255,255,255,0.1); padding: 15px 30px; border-radius: 30px; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                    <i class="bi bi-lightbulb" style="color: #46DE48; margin-right: 10px;"></i>
                    <div style="font-size: 14px; font-weight: 800;">OUR TECH APPROACH</div>
                </div>

                <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 20px; color: white;">
                    Technology That <span style="color: #46DE48;">Works</span> for Everyone
                </h2>

                <p style="font-size: 18px; opacity: 0.8; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.6;">
                    Our tools are designed for universal accessibility, ensuring every mother can benefit regardless of
                    location, device, or connectivity.
                </p>

               <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
    <!-- Approach 1 -->
    <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: left;">
        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; font-size: 28px;">
            <i class="bi bi-phone" style="color: white;"></i>
        </div>
        <h4 style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: white;">Works on Any Phone
        </h4>
        <p style="font-size: 15px; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">
            Our SMS system functions perfectly on basic feature phones. No smartphone or data plan required
            for access.
        </p>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(221,49,52,0.2); color: #DD3134; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">
            100% COMPATIBLE
        </div>
    </div>

    <!-- Approach 2 -->
    <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: left;">
        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; font-size: 28px;">
            <i class="bi bi-shield-check" style="color: white;"></i>
        </div>
        <h4 style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: white;">Secure Data
            Management</h4>
        <p style="font-size: 15px; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">
            All mother and health data is securely stored with encryption, accessible only to authorized
            navigators and health workers.
        </p>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(145,116,110,0.2); color: #91746E; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">
            END-TO-END SECURE
        </div>
    </div>

    <!-- Approach 3 -->
    <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: left;">
        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; font-size: 28px;">
            <i class="bi bi-people" style="color: white;"></i>
        </div>
        <h4 style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: white;">Community-Driven
            Design</h4>
        <p style="font-size: 15px; opacity: 0.8; line-height: 1.6; margin-bottom: 20px;">
            Every tool is designed with continuous input from navigators and mothers who use them daily,
            ensuring real-world effectiveness.
        </p>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(70,222,72,0.2); color: #46DE48; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 700;">
            USER-CENTERED
        </div>
    </div>
</div>

                <!-- Overall Impact -->
                <div
                    style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); margin-top: 60px;">
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; text-align: center;">
                        <div>
                            <div style="font-size: 42px; font-weight: 800; color: #DD3134; margin-bottom: 10px;">250K+</div>
                            <div style="font-size: 14px; opacity: 0.8; font-weight: 600;">SMS Delivered</div>
                        </div>
                        <div>
                            <div style="font-size: 42px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">98%</div>
                            <div style="font-size: 14px; opacity: 0.8; font-weight: 600;">Emergency Success</div>
                        </div>
                        <div>
                            <div style="font-size: 42px; font-weight: 800; color: #808FBD; margin-bottom: 10px;">500+</div>
                            <div style="font-size: 14px; opacity: 0.8; font-weight: 600;">Navigators Trained</div>
                        </div>
                        <div>
                            <div style="font-size: 42px; font-weight: 800; color: #91746E; margin-bottom: 10px;">95%</div>
                            <div style="font-size: 14px; opacity: 0.8; font-weight: 600;">Reach Rate</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection