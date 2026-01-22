@extends('layouts.apps')

@section('content')
    <div
        style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%); margin-top: 8em;">

        <!-- Hero Section -->
        <section
            style="padding: 120px 10% 80px 10%; display: flex; align-items: center; gap: 60px; position: relative; overflow: hidden;">
            <!-- Emergency Glow -->
            <div
                style="position: absolute; top: 20%; right: 5%; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.15) 0%, rgba(221,49,52,0) 70%);">
            </div>

            <div style="flex: 1; position: relative; z-index: 2;">
                <div
                    style="display: inline-flex; align-items: center; padding: 12px 28px; background: rgba(221,49,52,0.1); color: #DD3134; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(221,49,52,0.3);">
                    <span style="margin-right: 10px;">🚨</span> EMERGENCY & BIRTH SUPPORT
                </div>

                <h1
                    style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                    When Every <span style="color: #DD3134;">Minute</span> Counts
                </h1>

                <p style="font-size: 20px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px; max-width: 600px;">
                    Our 24/7 emergency response system ensures immediate support when labor begins. Your dedicated navigator
                    coordinates rapid transport and accompanies you to the health facility.
                </p>

                <!-- Emergency Contact Card -->
                <div
                    style="background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; border-radius: 25px; padding: 35px; max-width: 500px; box-shadow: 0 25px 50px rgba(54,53,88,0.15);">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div
                            style="width: 70px; height: 70px; background: #DD3134; border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 28px;">
                            📞
                        </div>
                        <div>
                            <div style="font-size: 14px; opacity: 0.8; margin-bottom: 5px;">24/7 EMERGENCY HELPLINE</div>
                            <div style="font-size: 32px; font-weight: 800; color: white;">+256 700 123 456</div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 15px;">
                        <a href="#"
                            style="flex: 1; background: #DD3134; color: white; text-decoration: none; padding: 16px; border-radius: 15px; font-weight: 800; font-size: 14px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <span>🚑</span> Call Now
                        </a>
                        <a href="#"
                            style="flex: 1; background: rgba(255,255,255,0.1); color: white; text-decoration: none; padding: 16px; border-radius: 15px; font-weight: 700; font-size: 14px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px; border: 1px solid rgba(255,255,255,0.2);">
                            <span>📱</span> SMS Alert
                        </a>
                    </div>
                </div>
            </div>

            <div style="flex: 1; position: relative; z-index: 2;">
                <div style="position: relative;">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&q=80&w=800"
                        style="width: 100%; border-radius: 30px; box-shadow: 0 40px 80px rgba(54,53,88,0.15);">

                    <!-- Success Badge -->
                    <div
                        style="position: absolute; top: -25px; right: -25px; background: linear-gradient(135deg, #46DE48, #80E681); color: white; padding: 25px; border-radius: 20px; box-shadow: 0 20px 40px rgba(70,222,72,0.3); width: 200px;">
                        <div style="font-size: 42px; font-weight: 800; text-align: center; line-height: 1;">98%</div>
                        <div
                            style="font-size: 12px; opacity: 0.9; text-align: center; font-weight: 600; letter-spacing: 1px;">
                            FACILITY DELIVERIES</div>
                        <div style="font-size: 10px; opacity: 0.7; text-align: center; margin-top: 5px;">Success Rate</div>
                    </div>

                    <!-- Live Response Indicator -->
                    <div
                        style="position: absolute; bottom: -25px; left: -25px; background: white; padding: 20px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); width: 220px;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="position: relative;">
                                <div
                                    style="width: 40px; height: 40px; background: #DD3134; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">
                                    ⚡
                                </div>
                                <div
                                    style="position: absolute; top: -5px; right: -5px; width: 15px; height: 15px; background: #46DE48; border-radius: 50%; border: 2px solid white;">
                                </div>
                            </div>
                            <div>
                                <div style="font-size: 14px; color: #808FBD; font-weight: 600;">LIVE RESPONSE</div>
                                <div style="font-size: 16px; font-weight: 800; color: #363558;">System Active</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Response Timeline -->
        <section
            style="padding: 80px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
            <!-- Grid Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 20px; color: white;">
                        Rapid <span style="color: #46DE48;">Emergency</span> Response
                    </h2>
                    <p style="font-size: 18px; opacity: 0.8; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Our streamlined emergency protocol ensures help reaches you in record time when minutes matter most.
                    </p>
                </div>

                <!-- Timeline Steps - Fixed Layout -->
                <div style="position: relative; padding: 60px 0 40px 0;">
                    <!-- Connecting Line -->
                    <div
                        style="position: absolute; top: 140px; left: 100px; right: 100px; height: 3px; background: rgba(255,255,255,0.2); z-index: 1;">
                    </div>

                    <!-- Step 1 -->
                    <div style="display: flex; gap: 40px; justify-content: center; flex-wrap: wrap;">
                        <div style="flex: 0 1 250px; text-align: center; position: relative; z-index: 2;">
                            <div
                                style="width: 100px; height: 100px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(221,49,52,0.4); border: 4px solid #363558;">
                                📞
                            </div>
                            <div
                                style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); height: 280px; display: flex; flex-direction: column;">
                                <div
                                    style="font-size: 14px; opacity: 0.8; margin-bottom: 12px; font-weight: 600; letter-spacing: 1px;">
                                    STEP 01</div>
                                <h4
                                    style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: white; line-height: 1.3;">
                                    Emergency Call</h4>
                                <p
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 25px; flex-grow: 1;">
                                    Instant connection to your dedicated navigator via our 24/7 emergency helpline
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(221,49,52,0.2); color: #DD3134; padding: 10px 20px; border-radius: 20px; font-size: 13px; font-weight: 800; margin: 0 auto;">
                                    ⏱ INSTANT RESPONSE
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div style="flex: 0 1 250px; text-align: center; position: relative; z-index: 2;">
                            <div
                                style="width: 100px; height: 100px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(145,116,110,0.4); border: 4px solid #363558;">
                                📍
                            </div>
                            <div
                                style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); height: 280px; display: flex; flex-direction: column;">
                                <div
                                    style="font-size: 14px; opacity: 0.8; margin-bottom: 12px; font-weight: 600; letter-spacing: 1px;">
                                    STEP 02</div>
                                <h4
                                    style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: white; line-height: 1.3;">
                                    Location & Assessment</h4>
                                <p
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 25px; flex-grow: 1;">
                                    GPS tracking and rapid situation assessment to determine the best response strategy
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(145,116,110,0.2); color: #91746E; padding: 10px 20px; border-radius: 20px; font-size: 13px; font-weight: 800; margin: 0 auto;">
                                    ⏱ UNDER 1 MINUTE
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div style="flex: 0 1 250px; text-align: center; position: relative; z-index: 2;">
                            <div
                                style="width: 100px; height: 100px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(128,143,189,0.4); border: 4px solid #363558;">
                                🚑
                            </div>
                            <div
                                style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); height: 280px; display: flex; flex-direction: column;">
                                <div
                                    style="font-size: 14px; opacity: 0.8; margin-bottom: 12px; font-weight: 600; letter-spacing: 1px;">
                                    STEP 03</div>
                                <h4
                                    style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: white; line-height: 1.3;">
                                    Transport Dispatch</h4>
                                <p
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 25px; flex-grow: 1;">
                                    Emergency vehicle coordination and dispatch to your location with real-time tracking
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(128,143,189,0.2); color: #808FBD; padding: 10px 20px; border-radius: 20px; font-size: 13px; font-weight: 800; margin: 0 auto;">
                                    ⏱ UNDER 15 MINUTES
                                </div>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div style="flex: 0 1 250px; text-align: center; position: relative; z-index: 2;">
                            <div
                                style="width: 100px; height: 100px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(70,222,72,0.4); border: 4px solid #363558;">
                                🏥
                            </div>
                            <div
                                style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); height: 280px; display: flex; flex-direction: column;">
                                <div
                                    style="font-size: 14px; opacity: 0.8; margin-bottom: 12px; font-weight: 600; letter-spacing: 1px;">
                                    STEP 04</div>
                                <h4
                                    style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: white; line-height: 1.3;">
                                    Hospital Coordination</h4>
                                <p
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-bottom: 25px; flex-grow: 1;">
                                    Medical facility alerted and prepared for your arrival with priority access and
                                    pre-notification
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(70,222,72,0.2); color: #46DE48; padding: 10px 20px; border-radius: 20px; font-size: 13px; font-weight: 800; margin: 0 auto;">
                                    ⏱ UNDER 5 MINUTES
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Direction -->
                    <div style="text-align: center; margin-top: 50px;">
                        <div
                            style="display: inline-flex; align-items: center; gap: 15px; background: rgba(255,255,255,0.1); padding: 12px 30px; border-radius: 30px; backdrop-filter: blur(10px);">
                            <div style="font-size: 14px; font-weight: 600; opacity: 0.8;">EMERGENCY RESPONSE FLOW</div>
                            <div style="display: flex; align-items: center; gap: 8px; color: #46DE48;">
                                <span>→</span>
                                <span>→</span>
                                <span>→</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Delivery Support Features -->
        <section style="padding: 100px 10%; background: white; position: relative;">
            <!-- Background Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 20% 80%, #DD3134 1px, transparent 1px); background-size: 60px 60px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div style="display: flex; align-items: center; gap: 80px; margin-bottom: 80px;">
                    <div style="flex: 1;">
                        <h2
                            style="font-size: 48px; color: #363558; margin-bottom: 30px; font-weight: 800; line-height: 1.2;">
                            Comprehensive <span style="color: #DD3134;">Delivery</span> Support
                        </h2>
                        <p style="font-size: 18px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px;">
                            From the first contraction to postpartum care, we provide end-to-end support ensuring a safe and
                            supported delivery experience.
                        </p>

                        <!-- Stats Grid -->
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px;">
                            <div
                                style="background: rgba(70,222,72,0.05); padding: 25px; border-radius: 20px; border-left: 4px solid #46DE48;">
                                <div style="font-size: 32px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">11,000+
                                </div>
                                <div style="font-size: 14px; color: #363558; font-weight: 600;">Safe Deliveries</div>
                                <div style="font-size: 12px; color: #808FBD; margin-top: 5px;">Successfully supported</div>
                            </div>
                            <div
                                style="background: rgba(128,143,189,0.05); padding: 25px; border-radius: 20px; border-left: 4px solid #808FBD;">
                                <div style="font-size: 32px; font-weight: 800; color: #808FBD; margin-bottom: 10px;">
                                    < 15 min</div>
                                        <div style="font-size: 14px; color: #363558; font-weight: 600;">Avg Response Time
                                        </div>
                                        <div style="font-size: 12px; color: #808FBD; margin-top: 5px;">From call to dispatch
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div style="flex: 1; position: relative;">
                            <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=800"
                                style="width: 100%; border-radius: 30px; box-shadow: 0 40px 80px rgba(0,0,0,0.1);">

                            <!-- Floating Info Card -->
                            <div
                                style="position: absolute; bottom: -40px; right: -40px; background: white; padding: 30px; border-radius: 25px; box-shadow: 0 30px 60px rgba(0,0,0,0.15); width: 280px; border-top: 5px solid #DD3134;">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                                    <div
                                        style="width: 50px; height: 50px; background: rgba(221,49,52,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 22px;">
                                        ⚡
                                    </div>
                                    <div>
                                        <div style="font-size: 14px; color: #808FBD; font-weight: 600;">EMERGENCY PROTOCOL
                                        </div>
                                        <div style="font-size: 18px; font-weight: 800; color: #363558;">Activated in Seconds
                                        </div>
                                    </div>
                                </div>
                                <p style="font-size: 13px; color: #5a5a5a; line-height: 1.6; margin: 0;">
                                    Our emergency response system is designed to activate within seconds of receiving an
                                    alert, ensuring rapid assistance.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Services Grid -->
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
                        <!-- Service 1 -->
                        <div
                            style="display: flex; gap: 20px; padding: 30px; background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                            <div style="flex-shrink: 0;">
                                <div
                                    style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                    📞
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">24/7
                                    Navigator Support</h3>
                                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin: 0 0 20px 0;">
                                    Your dedicated navigator is available around the clock via phone or SMS, providing
                                    immediate guidance and support.
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 16px; border-radius: 15px; font-size: 12px; font-weight: 700;">
                                    ⏱ 24/7 AVAILABILITY
                                </div>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div
                            style="display: flex; gap: 20px; padding: 30px; background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                            <div style="flex-shrink: 0;">
                                <div
                                    style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                    🚑
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Transport
                                    Coordination</h3>
                                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin: 0 0 20px 0;">
                                    We arrange and coordinate emergency transport to the nearest equipped health facility,
                                    ensuring timely arrival.
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(145,116,110,0.1); color: #91746E; padding: 8px 16px; border-radius: 15px; font-size: 12px; font-weight: 700;">
                                    ⏱ UNDER 15 MIN
                                </div>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div
                            style="display: flex; gap: 20px; padding: 30px; background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                            <div style="flex-shrink: 0;">
                                <div
                                    style="width: 70px; height: 70px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                    🏥
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Emergency
                                    Referrals</h3>
                                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin: 0 0 20px 0;">
                                    Fast-track referral system to appropriate medical facilities ensures immediate attention
                                    upon arrival.
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(128,143,189,0.1); color: #808FBD; padding: 8px 16px; border-radius: 15px; font-size: 12px; font-weight: 700;">
                                    ⚡ PRIORITY ACCESS
                                </div>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div
                            style="display: flex; gap: 20px; padding: 30px; background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                            <div style="flex-shrink: 0;">
                                <div
                                    style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                    🫂
                                </div>
                            </div>
                            <div>
                                <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Birth
                                    Companion</h3>
                                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin: 0 0 20px 0;">
                                    Navigator accompanies you to provide emotional support, advocacy, and assistance
                                    throughout the delivery process.
                                </p>
                                <div
                                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 16px; border-radius: 15px; font-size: 12px; font-weight: 700;">
                                    🤝 CONTINUOUS SUPPORT
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Impact Stats -->
        <section style="padding: 80px 10%; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%);">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; text-align: center;">
                    <div
                        style="background: white; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">
                        <div
                            style="font-size: 56px; font-weight: 800; color: #DD3134; margin-bottom: 15px; line-height: 1;">
                            11,000+</div>
                        <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Safe Deliveries
                        </div>
                        <div style="font-size: 13px; color: #808FBD;">Successfully supported since inception</div>
                    </div>

                    <div
                        style="background: white; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">
                        <div
                            style="font-size: 56px; font-weight: 800; color: #46DE48; margin-bottom: 15px; line-height: 1;">
                            98%</div>
                        <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Facility Births
                        </div>
                        <div style="font-size: 13px; color: #808FBD;">Deliveries in medical facilities</div>
                    </div>

                    <div
                        style="background: white; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">
                        <div
                            style="font-size: 56px; font-weight: 800; color: #91746E; margin-bottom: 15px; line-height: 1;">
                            < 15</div>
                                <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Minutes
                                    Response</div>
                                <div style="font-size: 13px; color: #808FBD;">Average emergency response time</div>
                        </div>

                        <div
                            style="background: white; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">
                            <div
                                style="font-size: 56px; font-weight: 800; color: #808FBD; margin-bottom: 15px; line-height: 1;">
                                24/7</div>
                            <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Always
                                Available</div>
                            <div style="font-size: 13px; color: #808FBD;">Round-the-clock support system</div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Call to Action -->
        <section
            style="padding: 120px 10%; text-align: center; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative; overflow: hidden;">
            <!-- Animated Background -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: repeating-linear-gradient(45deg, rgba(255,255,255,0.02) 0px, rgba(255,255,255,0.02) 1px, transparent 1px, transparent 50px);">
            </div>

            <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
                <div
                    style="display: inline-flex; align-items: center; gap: 15px; background: rgba(70,222,72,0.15); padding: 15px 30px; border-radius: 30px; margin-bottom: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.3);">
                    <span style="color: #46DE48; font-size: 24px;">🤰</span>
                    <div style="font-size: 14px; font-weight: 700; color: white;">MAKING A DIFFERENCE</div>
                </div>

                <h2 style="font-size: 56px; font-weight: 800; margin: 0 0 25px 0; line-height: 1.2; color: white;">
                    Every Mother Deserves a <span style="color: #46DE48;">Safe</span> Delivery
                </h2>

                <p style="font-size: 20px; opacity: 0.9; max-width: 600px; margin: 0 auto 50px auto; line-height: 1.6;">
                    Help us expand our emergency response services to ensure more mothers have access to life-saving support
                    when they need it most.
                </p>

                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="#"
                        style="background: #DD3134; color: white; text-decoration: none; padding: 20px 45px; border-radius: 40px; font-weight: 800; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 40px rgba(221,49,52,0.3);">
                        🚑 Support SafeDelivery
                    </a>
                    <a href="#"
                        style="background: rgba(255,255,255,0.1); color: white; text-decoration: none; padding: 20px 45px; border-radius: 40px; font-weight: 700; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; border: 2px solid rgba(255,255,255,0.3);">
                        📞 Learn More
                    </a>
                </div>
            </div>
        </section>

    </div>
@endsection