@extends('layouts.apps')

@section('content')
    <div
        style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%);">

        <!-- Hero Section -->
<section style="padding: clamp(80px, 10vh, 120px) 5%; background: #ffffff; position: relative; overflow: hidden; font-family: 'Inter', system-ui, -apple-system, sans-serif;">
    
    <div style="position: absolute; top: 10%; right: -5%; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.08) 0%, rgba(221,49,52,0) 70%); pointer-events: none;"></div>

    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 60px; position: relative; z-index: 2;">
        
        <div style="flex: 1.2; min-width: 320px;">
            <div style="display: inline-flex; align-items: center; padding: 10px 24px; background: rgba(221,49,52,0.08); color: #DD3134; border-radius: 100px; font-size: 13px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; border: 1px solid rgba(221,49,52,0.2);">
                <span style="margin-right: 10px;">🚨</span> EMERGENCY & BIRTH SUPPORT
            </div>

            <h1 style="font-size: clamp(40px, 6vw, 64px); color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -2px; line-height: 1.1;">
                When Every <span style="color: #DD3134;">Minute</span> Counts
            </h1>

            <p style="font-size: 19px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px; max-width: 580px;">
                Our 24/7 emergency response system ensures immediate support when labor begins. Your dedicated navigator coordinates rapid transport and stays by your side.
            </p>

            <div style="background: linear-gradient(135deg, #363558 0%, #252440 100%); color: white; border-radius: 30px; padding: clamp(25px, 5vw, 40px); max-width: 520px; box-shadow: 0 30px 60px rgba(54,53,88,0.2);">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                    <div style="width: 65px; height: 65px; background: #DD3134; border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 30px; box-shadow: 0 10px 20px rgba(221,49,52,0.3);">
                        <i class="bi bi-phone-vibrate"></i>
                    </div>
                    <div>
                        <div style="font-size: 12px; opacity: 0.7; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 4px;">24/7 Emergency Helpline</div>
                        <div style="font-size: clamp(24px, 4vw, 32px); font-weight: 800; letter-spacing: -0.5px;">+256 700 123 456</div>
                    </div>
                </div>

                <div style="display: flex; flex-wrap: wrap; gap: 15px;">
                    <a href="tel:+256700123456" style="flex: 1; min-width: 160px; background: #DD3134; color: white; text-decoration: none; padding: 18px; border-radius: 18px; font-weight: 800; font-size: 15px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px; transition: 0.3s;">
                        <i class="bi bi-telephone-fill"></i> Call Now
                    </a>
                    <a href="sms:+256700123456" style="flex: 1; min-width: 160px; background: rgba(255,255,255,0.1); color: white; text-decoration: none; padding: 18px; border-radius: 18px; font-weight: 700; font-size: 15px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px; border: 1px solid rgba(255,255,255,0.2);">
                        <i class="bi bi-chat-dots-fill"></i> SMS Alert
                    </a>
                </div>
            </div>
        </div>

        <div style="flex: 1; min-width: 320px; position: relative; display: flex; justify-content: center;">
            <div style="position: relative; width: 100%; max-width: 500px;">
                <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&q=80&w=800"
                     alt="Emergency Response"
                     style="width: 100%; height: auto; border-radius: 40px; box-shadow: 0 40px 100px rgba(54,53,88,0.15); display: block;">

                <div style="position: absolute; top: -20px; right: -15px; background: linear-gradient(135deg, #46DE48, #36b838); color: white; padding: 20px; border-radius: 24px; box-shadow: 0 20px 40px rgba(70,222,72,0.25); width: 160px; text-align: center;">
                    <div style="font-size: 38px; font-weight: 900; line-height: 1;">98%</div>
                    <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; margin-top: 4px;">Facility Births</div>
                </div>

                <div style="position: absolute; bottom: -20px; left: -15px; background: white; padding: 20px; border-radius: 24px; box-shadow: 0 20px 50px rgba(0,0,0,0.1); width: 220px; border: 1px solid #f0f0f0;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="position: relative;">
                            <div style="width: 45px; height: 45px; background: #FFF1F1; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 20px;">
                                <i class="bi bi-lightning-fill"></i>
                            </div>
                            <div style="position: absolute; top: -2px; right: -2px; width: 14px; height: 14px; background: #46DE48; border-radius: 50%; border: 3px solid white;"></div>
                        </div>
                        <div>
                            <div style="font-size: 11px; color: #808FBD; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Live Response</div>
                            <div style="font-size: 16px; font-weight: 800; color: #363558;">System Active</div>
                        </div>
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
                                <i class="bi bi-telephone"></i>
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
                                <i class="bi bi-geo-alt"></i>
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
                                <i class="bi bi-truck"></i>
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
                                <i class="bi bi-hospital"></i>
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

<section style="padding: 80px 5%; background: #ffffff; position: relative; overflow: hidden; font-family: 'Inter', system-ui, -apple-system, sans-serif;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.04; background-image: radial-gradient(circle at 20% 80%, #DD3134 1px, transparent 1px); background-size: 60px 60px; pointer-events: none;"></div>

    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
        
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; align-items: center; gap: 40px; margin-bottom: 80px;">
            
            <div style="flex: 1; min-width: 300px;">
                <h2 style="font-size: clamp(30px, 5vw, 48px); color: #363558; margin-bottom: 20px; font-weight: 800; line-height: 1.2; letter-spacing: -0.02em;">
                    Comprehensive <span style="color: #DD3134;">Delivery</span> Support
                </h2>
                <p style="font-size: 18px; color: #5a5a5a; line-height: 1.8; margin-bottom: 35px;">
                    From the first contraction to postpartum care, we provide end-to-end support ensuring a safe, dignified, and fully supported delivery experience.
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
                    <div style="background: #F6FFF6; padding: 20px; border-radius: 15px; border-bottom: 4px solid #46DE48;">
                        <div style="font-size: 28px; font-weight: 900; color: #46DE48;">11,000+</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 700; text-transform: uppercase;">Safe Deliveries</div>
                    </div>
                    <div style="background: #F8F9FF; padding: 20px; border-radius: 15px; border-bottom: 4px solid #808FBD;">
                        <div style="font-size: 28px; font-weight: 900; color: #808FBD;">&lt; 15 min</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 700; text-transform: uppercase;">Response Time</div>
                    </div>
                </div>
            </div>

            <div style="flex: 1; min-width: 300px; position: relative; padding-bottom: 30px;">
                <div style="position: relative; border-radius: 30px;">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=800" 
                         alt="Delivery Support" 
                         style="width: 100%; height: auto; border-radius: 30px; box-shadow: 0 30px 60px rgba(0,0,0,0.1); display: block;">
                    
                    <div style="position: absolute; bottom: -20px; right: 10px; background: white; padding: 20px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); width: 80%; max-width: 260px; border-left: 6px solid #DD3134;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                            <span style="font-size: 20px;">⚡</span>
                            <div style="font-size: 14px; font-weight: 900; color: #363558;">Emergency Protocol</div>
                        </div>
                        <p style="font-size: 13px; color: #5a5a5a; line-height: 1.5; margin: 0;">
                            System-wide activation within seconds.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px;">
            
            <div style="padding: 35px 25px; background: #ffffff; border-radius: 25px; box-shadow: 0 8px 30px rgba(0,0,0,0.04); border-top: 5px solid #DD3134; display: flex; flex-direction: column;">
                <div style="width: 55px; height: 55px; background: #FFF1F1; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 24px; margin-bottom: 20px;">
                    <i class="bi bi-telephone"></i>
                </div>
                <h3 style="font-size: 20px; color: #363558; margin-bottom: 12px; font-weight: 800;">24/7 Navigator</h3>
                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                    Real-time guidance via phone or SMS. Your navigator remains on the line until you reach safety.
                </p>
                <span style="font-size: 10px; font-weight: 800; color: #DD3134; text-transform: uppercase; letter-spacing: 1px; background: rgba(221,49,52,0.1); padding: 5px 12px; border-radius: 100px; width: fit-content;">Always Active</span>
            </div>

            <div style="padding: 35px 25px; background: #ffffff; border-radius: 25px; box-shadow: 0 8px 30px rgba(0,0,0,0.04); border-top: 5px solid #91746E; display: flex; flex-direction: column;">
                <div style="width: 55px; height: 55px; background: #F9F7F6; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #91746E; font-size: 24px; margin-bottom: 20px;">
                    <i class="bi bi-truck"></i>
                </div>
                <h3 style="font-size: 20px; color: #363558; margin-bottom: 12px; font-weight: 800;">Transport Sync</h3>
                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                    We dispatch and track emergency transport, ensuring the fastest possible route to a medical facility.
                </p>
                <span style="font-size: 10px; font-weight: 800; color: #91746E; text-transform: uppercase; letter-spacing: 1px; background: rgba(145,116,110,0.1); padding: 5px 12px; border-radius: 100px; width: fit-content;">Fast Dispatch</span>
            </div>

            <div style="padding: 35px 25px; background: #ffffff; border-radius: 25px; box-shadow: 0 8px 30px rgba(0,0,0,0.04); border-top: 5px solid #808FBD; display: flex; flex-direction: column;">
                <div style="width: 55px; height: 55px; background: #F0F2F8; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #808FBD; font-size: 24px; margin-bottom: 20px;">
                    <i class="bi bi-hospital"></i>
                </div>
                <h3 style="font-size: 20px; color: #363558; margin-bottom: 12px; font-weight: 800;">Instant Referrals</h3>
                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                    Our digital referral system notifies the hospital of your condition and ETA before you arrive.
                </p>
                <span style="font-size: 10px; font-weight: 800; color: #808FBD; text-transform: uppercase; letter-spacing: 1px; background: rgba(128,143,189,0.1); padding: 5px 12px; border-radius: 100px; width: fit-content;">Priority Care</span>
            </div>

            <div style="padding: 35px 25px; background: #ffffff; border-radius: 25px; box-shadow: 0 8px 30px rgba(0,0,0,0.04); border-top: 5px solid #46DE48; display: flex; flex-direction: column;">
                <div style="width: 55px; height: 55px; background: #F2FEF2; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 24px; margin-bottom: 20px;">
                    <i class="bi bi-people"></i>
                </div>
                <h3 style="font-size: 20px; color: #363558; margin-bottom: 12px; font-weight: 800;">Birth Advocacy</h3>
                <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                    Navigators provide emotional support and ensure your birth plan is respected by medical staff.
                </p>
                <span style="font-size: 10px; font-weight: 800; color: #46DE48; text-transform: uppercase; letter-spacing: 1px; background: rgba(70,222,72,0.1); padding: 5px 12px; border-radius: 100px; width: fit-content;">Personal Support</span>
            </div>

        </div>
    </div>
</section>

        <!-- Impact Stats -->
        <section
            style="padding: 100px 5%; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); font-family: 'Inter', system-ui, -apple-system, sans-serif;">
            <div style="max-width: 1200px; margin: 0 auto;">

                <div style="text-align: center; margin-bottom: 60px;">
                    <h2
                        style="font-size: 14px; color: #DD3134; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">
                        Our Global Impact</h2>
                    <p style="font-size: 32px; color: #363558; font-weight: 800; margin: 0;">Measurable results in maternal
                        healthcare</p>
                </div>

                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 30px; text-align: center;">

                    <div
                        style="background: white; padding: 50px 30px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54, 53, 88, 0.05); border: 1px solid rgba(0,0,0,0.03); transition: transform 0.3s ease;">
                        <div
                            style="font-size: 52px; font-weight: 900; color: #DD3134; margin-bottom: 15px; line-height: 1; letter-spacing: -1px;">
                            11,000+
                        </div>
                        <div style="font-size: 18px; color: #363558; font-weight: 700; margin-bottom: 10px;">Safe Deliveries
                        </div>
                        <div style="font-size: 14px; color: #808FBD; line-height: 1.5; max-width: 200px; margin: 0 auto;">
                            Successfully supported since inception</div>
                    </div>

                    <div
                        style="background: white; padding: 50px 30px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54, 53, 88, 0.05); border: 1px solid rgba(0,0,0,0.03);">
                        <div
                            style="font-size: 52px; font-weight: 900; color: #46DE48; margin-bottom: 15px; line-height: 1; letter-spacing: -1px;">
                            98%
                        </div>
                        <div style="font-size: 18px; color: #363558; font-weight: 700; margin-bottom: 10px;">Facility Births
                        </div>
                        <div style="font-size: 14px; color: #808FBD; line-height: 1.5; max-width: 200px; margin: 0 auto;">
                            Deliveries occurring in medical facilities</div>
                    </div>

                    <div
                        style="background: white; padding: 50px 30px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54, 53, 88, 0.05); border: 1px solid rgba(0,0,0,0.03);">
                        <div
                            style="font-size: 52px; font-weight: 900; color: #91746E; margin-bottom: 15px; line-height: 1; letter-spacing: -1px;">
                            &lt; 15
                        </div>
                        <div style="font-size: 18px; color: #363558; font-weight: 700; margin-bottom: 10px;">Min Response
                        </div>
                        <div style="font-size: 14px; color: #808FBD; line-height: 1.5; max-width: 200px; margin: 0 auto;">
                            Average emergency response time</div>
                    </div>

                    <div
                        style="background: white; padding: 50px 30px; border-radius: 30px; box-shadow: 0 20px 50px rgba(54, 53, 88, 0.05); border: 1px solid rgba(0,0,0,0.03);">
                        <div
                            style="font-size: 52px; font-weight: 900; color: #808FBD; margin-bottom: 15px; line-height: 1; letter-spacing: -1px;">
                            24/7
                        </div>
                        <div style="font-size: 18px; color: #363558; font-weight: 700; margin-bottom: 10px;">Always
                            Available</div>
                        <div style="font-size: 14px; color: #808FBD; line-height: 1.5; max-width: 200px; margin: 0 auto;">
                            Round-the-clock support system</div>
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
                    <span style="color: #46DE48; font-size: 24px;">
                        <i class="bi bi-person-heart"></i>
                    </span>
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
                        <i class="bi bi-plus-circle"></i> Support SafeDelivery
                    </a>
                    <a href="#"
                        style="background: rgba(255,255,255,0.1); color: white; text-decoration: none; padding: 20px 45px; border-radius: 40px; font-weight: 700; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; border: 2px solid rgba(255,255,255,0.3);">
                        <i class="bi bi-info-circle"></i> Learn More
                    </a>
                </div>
            </div>
        </section>

    </div>
@endsection