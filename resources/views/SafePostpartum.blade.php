@extends('layouts.apps')

@section('content')

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%); margin-top: 8em;">

    <!-- Hero Section -->
    <section style="padding: 120px 10% 80px 10%; display: flex; align-items: center; gap: 60px; position: relative; overflow: hidden;">
        <!-- Background Elements -->
        <div style="position: absolute; top: 10%; left: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.08) 0%, rgba(70,222,72,0) 70%);"></div>
        <div style="position: absolute; bottom: 20%; right: -50px; width: 200px; height: 200px; border: 2px dashed #808FBD; border-radius: 40px; opacity: 0.1; transform: rotate(25deg);"></div>
        
        <div style="flex: 1; position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; padding: 12px 28px; background: linear-gradient(90deg, rgba(128,143,189,0.1), rgba(220,206,193,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.8);">
                <span style="color: #808FBD; margin-right: 10px;">👶</span> NEWBORN & MOTHER CARE
            </div>
            
            <h1 style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                Nurturing the <span style="color: #808FBD;">Bond</span> Beyond Birth
            </h1>
            
            <p style="font-size: 20px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px; max-width: 600px;">
                Our comprehensive postpartum program provides continuous support for both mother and newborn through the critical fourth trimester and beyond, ensuring a healthy transition into parenthood.
            </p>
            
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <a href="#" style="background: linear-gradient(135deg, #808FBD, #A3B4E0); color: white; text-decoration: none; padding: 18px 40px; border-radius: 40px; font-weight: 800; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 10px 30px rgba(128,143,189,0.3);">
                    Learn More <span style="font-size: 20px;">→</span>
                </a>
                <a href="#" style="background: white; color: #363558; border: 2px solid #f0f0f0; text-decoration: none; padding: 18px 40px; border-radius: 40px; font-weight: 700; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <span style="color: #46DE48;">▶</span> Watch Testimonial
                </a>
            </div>
            
            <!-- Quick Stats -->
            <div style="display: flex; gap: 40px; margin-top: 60px; flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: rgba(128,143,189,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #808FBD; font-size: 20px;">👶</div>
                    <div>
                        <div style="font-size: 28px; font-weight: 800; color: #363558; line-height: 1;">8,500+</div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Postpartum Follow-ups</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: rgba(70,222,72,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px;">❤️</div>
                    <div>
                        <div style="font-size: 28px; font-weight: 800; color: #363558; line-height: 1;">92%</div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Breastfeeding Success</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: rgba(220,206,193,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #91746E; font-size: 20px;">😊</div>
                    <div>
                        <div style="font-size: 28px; font-weight: 800; color: #363558; line-height: 1;">98%</div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Mother Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="flex: 1; position: relative; z-index: 2;">
            <div style="background: white; border-radius: 30px; padding: 25px; box-shadow: 0 40px 80px rgba(54,53,88,0.15); border: 1px solid #f0f0f0; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?auto=format&fit=crop&q=80&w=800" style="width: 100%; border-radius: 20px; margin-bottom: 20px;">
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background: rgba(54,53,88,0.05); border-radius: 15px;">
                    <div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600; margin-bottom: 5px;">Featured Mother Story</div>
                        <div style="font-size: 16px; font-weight: 700; color: #363558;">Grace & Baby Joy</div>
                    </div>
                    <a href="#" style="color: #808FBD; text-decoration: none; font-weight: 700; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                        Read Journey <span>→</span>
                    </a>
                </div>
            </div>
            
            <!-- Floating Element -->
            <div style="position: absolute; top: -30px; right: -30px; background: linear-gradient(135deg, #91746E, #DCCEC1); color: white; padding: 20px; border-radius: 20px; box-shadow: 0 20px 40px rgba(145,116,110,0.3); width: 180px;">
                <div style="font-size: 32px; font-weight: 800; text-align: center; margin-bottom: 10px;">6 WKS</div>
                <div style="font-size: 12px; opacity: 0.9; text-align: center; font-weight: 600;">Postpartum Care</div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section style="padding: 80px 10%; background: white; position: relative;">
        <!-- Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 25% 25%, #91746E 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                    Holistic <span style="color: #91746E;">Postpartum</span> Care
                </h2>
                <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: 18px; line-height: 1.6;">
                    Supporting both mother and baby through comprehensive services designed for the critical postpartum period.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                <!-- Card 1 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #DD3134;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; color: white; font-size: 32px;">🩺</div>
                    <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; text-align: center;">Newborn Health Checks</h3>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: 25px;">
                        Regular monitoring of your baby's growth, feeding patterns, and developmental milestones in the critical first weeks.
                    </p>
                    <div style="background: rgba(221,49,52,0.05); padding: 15px; border-radius: 15px;">
                        <div style="font-size: 12px; color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #DD3134;">✓</span> Growth monitoring
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #DD3134;">✓</span> Feeding assessment
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #DD3134;">✓</span> Developmental checks
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #46DE48;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; color: white; font-size: 32px;">💧</div>
                    <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; text-align: center;">Breastfeeding Support</h3>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: 25px;">
                        Expert guidance on proper latching techniques, feeding schedules, and solutions for common breastfeeding challenges.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: 15px; border-radius: 15px;">
                        <div style="font-size: 12px; color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #46DE48;">✓</span> Latching techniques
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #46DE48;">✓</span> Feeding schedules
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #46DE48;">✓</span> Challenge solutions
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #808FBD;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; color: white; font-size: 32px;">🧠</div>
                    <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; text-align: center;">Mental Health Screening</h3>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: 25px;">
                        Regular check-ins for postpartum depression and anxiety with validated screening tools and specialist referrals.
                    </p>
                    <div style="background: rgba(128,143,189,0.05); padding: 15px; border-radius: 15px;">
                        <div style="font-size: 12px; color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #808FBD;">✓</span> Depression screening
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #808FBD;">✓</span> Anxiety assessment
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #808FBD;">✓</span> Specialist referrals
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #91746E;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; color: white; font-size: 32px;">💉</div>
                    <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; text-align: center;">Immunization Support</h3>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: 25px;">
                        SMS reminders and scheduling assistance for all childhood vaccinations to ensure your baby stays protected.
                    </p>
                    <div style="background: rgba(145,116,110,0.05); padding: 15px; border-radius: 15px;">
                        <div style="font-size: 12px; color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #91746E;">✓</span> SMS reminders
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #91746E;">✓</span> Schedule planning
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #91746E;">✓</span> Follow-up support
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 5 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #DD3134;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; color: white; font-size: 32px;">🩹</div>
                    <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; text-align: center;">Mother Recovery Care</h3>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: 25px;">
                        Comprehensive monitoring of your physical recovery, wound care, nutrition, and overall postpartum health.
                    </p>
                    <div style="background: rgba(221,49,52,0.05); padding: 15px; border-radius: 15px;">
                        <div style="font-size: 12px; color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #DD3134;">✓</span> Wound care
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #DD3134;">✓</span> Nutrition guidance
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #DD3134;">✓</span> Recovery tracking
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 6 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #46DE48;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px auto; color: white; font-size: 32px;">👪</div>
                    <h3 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; text-align: center;">Family Planning</h3>
                    <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: 25px;">
                        Counseling and support for postpartum contraception and informed family planning decisions.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: 15px; border-radius: 15px;">
                        <div style="font-size: 12px; color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #46DE48;">✓</span> Contraception options
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #46DE48;">✓</span> Spacing guidance
                            </li>
                            <li style="padding: 5px 0; display: flex; align-items: center; gap: 8px;">
                                <span style="color: #46DE48;">✓</span> Decision support
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Postpartum Timeline -->
<!-- Postpartum Timeline -->
<section style="padding: 100px 10%; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); text-align: center; position: relative;">
    <!-- Background Elements -->
    <div style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; border-radius: 30px; background: linear-gradient(135deg, rgba(128,143,189,0.05), rgba(128,143,189,0)); transform: rotate(25deg);"></div>
    <div style="position: absolute; bottom: 30%; right: 10%; width: 150px; height: 150px; border: 2px dashed #46DE48; border-radius: 50%; opacity: 0.1;"></div>
    
    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
        <div style="display: inline-flex; align-items: center; background: rgba(128,143,189,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 700; margin-bottom: 25px; gap: 10px;">
            <span style="color: #808FBD; font-size: 20px;">📅</span> POSTPARTUM TIMELINE
        </div>
        
        <h2 style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
            Your <span style="color: #91746E;">6-Week</span> Journey
        </h2>
        
        <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">
            Structured support through every stage of the postpartum period, from immediate recovery to long-term wellness.
        </p>

        <!-- Timeline -->
        <div style="position: relative; padding: 60px 0 40px 0;">
            <!-- Connecting Line -->
            <div style="position: absolute; top: 140px; left: 150px; right: 150px; height: 3px; background: rgba(54,53,88,0.1); z-index: 1;"></div>
            
            <!-- Timeline Items - Now 3 items -->
            <div style="display: flex; gap: 40px; justify-content: center; flex-wrap: wrap;">
                <!-- Week 1-3 -->
                <div style="flex: 0 1 350px; text-align: center; position: relative; z-index: 2;">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(221,49,52,0.3); border: 4px solid white;">
                        🏠
                    </div>
                    <div style="background: white; padding: 30px; border-radius: 25px; box-shadow: 0 30px 60px rgba(0,0,0,0.1); height: 320px; display: flex; flex-direction: column; border-top: 5px solid #DD3134;">
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin: 0 auto 20px auto;">
                            DAYS 1-21
                        </div>
                        <h4 style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: #363558; line-height: 1.3;">Initial Recovery Phase</h4>
                        <div style="background: rgba(221,49,52,0.05); padding: 15px; border-radius: 15px; flex-grow: 1;">
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558; text-align: left;">
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #DD3134; font-size: 16px;">•</span>
                                    <span>Post-birth feeding & cord care education</span>
                                </li>
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #DD3134; font-size: 16px;">•</span>
                                    <span>Warning signs recognition and response</span>
                                </li>
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #DD3134; font-size: 16px;">•</span>
                                    <span>Initial mental health assessment</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Week 1-4 -->
                <div style="flex: 0 1 350px; text-align: center; position: relative; z-index: 2;">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(128,143,189,0.3); border: 4px solid white;">
                        📍
                    </div>
                    <div style="background: white; padding: 30px; border-radius: 25px; box-shadow: 0 30px 60px rgba(0,0,0,0.1); height: 320px; display: flex; flex-direction: column; border-top: 5px solid #808FBD;">
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(128,143,189,0.1); color: #808FBD; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin: 0 auto 20px auto;">
                            WEEKS 1-4
                        </div>
                        <h4 style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: #363558; line-height: 1.3;">Regular Home Visits</h4>
                        <div style="background: rgba(128,143,189,0.05); padding: 15px; border-radius: 15px; flex-grow: 1;">
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558; text-align: left;">
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #808FBD; font-size: 16px;">•</span>
                                    <span>Baby weight checks & growth assessments</span>
                                </li>
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #808FBD; font-size: 16px;">•</span>
                                    <span>Feeding patterns evaluation & support</span>
                                </li>
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #808FBD; font-size: 16px;">•</span>
                                    <span>Mental health screening sessions</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Week 4-6+ -->
                <div style="flex: 0 1 350px; text-align: center; position: relative; z-index: 2;">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; font-size: 40px; position: relative; z-index: 3; box-shadow: 0 20px 40px rgba(70,222,72,0.3); border: 4px solid white;">
                        🎯
                    </div>
                    <div style="background: white; padding: 30px; border-radius: 25px; box-shadow: 0 30px 60px rgba(0,0,0,0.1); height: 320px; display: flex; flex-direction: column; border-top: 5px solid #46DE48;">
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin: 0 auto 20px auto;">
                            WEEKS 4-6+
                        </div>
                        <h4 style="font-size: 22px; font-weight: 800; margin-bottom: 15px; color: #363558; line-height: 1.3;">Long-term Wellness</h4>
                        <div style="background: rgba(70,222,72,0.05); padding: 15px; border-radius: 15px; flex-grow: 1;">
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558; text-align: left;">
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #46DE48; font-size: 16px;">•</span>
                                    <span>Postpartum checkup coordination</span>
                                </li>
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #46DE48; font-size: 16px;">•</span>
                                    <span>Vaccination milestone follow-up</span>
                                </li>
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <span style="color: #46DE48; font-size: 16px;">•</span>
                                    <span>Family planning counseling</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Timeline Direction -->
            <div style="text-align: center; margin-top: 50px;">
                <div style="display: inline-flex; align-items: center; gap: 15px; background: rgba(54,53,88,0.1); padding: 12px 30px; border-radius: 30px;">
                    <div style="font-size: 14px; font-weight: 600; color: #363558;">POSTPARTUM CARE FLOW</div>
                    <div style="display: flex; align-items: center; gap: 8px; color: #808FBD;">
                        <span>→</span>
                        <span>→</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Mental Health Focus -->
    <section style="padding: 100px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="display: flex; align-items: center; gap: 80px;">
                <div style="flex: 1; position: relative;">
                    <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&q=80&w=800"
                         style="width: 100%; border-radius: 30px; box-shadow: 0 40px 80px rgba(0,0,0,0.2);">
                    
                    <!-- Floating Stat -->
                    <div style="position: absolute; bottom: -40px; left: -40px; background: linear-gradient(135deg, #46DE48, #80E681); color: white; padding: 25px; border-radius: 25px; box-shadow: 0 30px 60px rgba(70,222,72,0.3); width: 220px;">
                        <div style="font-size: 42px; font-weight: 800; text-align: center; line-height: 1;">1 in 7</div>
                        <div style="font-size: 12px; opacity: 0.9; text-align: center; font-weight: 600; letter-spacing: 1px;">MOTHERS AFFECTED</div>
                        <div style="font-size: 10px; opacity: 0.7; text-align: center; margin-top: 5px;">By Postpartum Depression</div>
                    </div>
                </div>
                
                <div style="flex: 1;">
                    <div style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.15); padding: 12px 25px; border-radius: 25px; font-size: 14px; font-weight: 800; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.3);">
                        <span style="color: #46DE48; margin-right: 10px;">🧠</span> MENTAL HEALTH MATTERS
                    </div>
                    
                    <h2 style="font-size: 48px; color: white; margin-bottom: 25px; font-weight: 800; line-height: 1.2;">
                        Supporting <span style="color: #46DE48;">Mother's</span> Mental Well-being
                    </h2>
                    
                    <p style="font-size: 18px; opacity: 0.9; line-height: 1.7; margin-bottom: 40px;">
                        Postpartum depression affects 1 in 7 mothers, yet often goes undiagnosed. Our navigators are specially trained to recognize early warning signs and provide compassionate support.
                    </p>
                    
                    <!-- Mental Health Services -->
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                        <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                                    ✓
                                </div>
                                <div style="font-size: 16px; font-weight: 700;">Regular Screening</div>
                            </div>
                            <div style="font-size: 13px; opacity: 0.8;">Validated screening tools during home visits</div>
                        </div>
                        
                        <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                                    ✓
                                </div>
                                <div style="font-size: 16px; font-weight: 700;">Specialist Referrals</div>
                            </div>
                            <div style="font-size: 13px; opacity: 0.8;">Pathways to mental health professionals</div>
                        </div>
                        
                        <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                                    ✓
                                </div>
                                <div style="font-size: 16px; font-weight: 700;">Peer Support</div>
                            </div>
                            <div style="font-size: 13px; opacity: 0.8;">Mother-to-mother support groups</div>
                        </div>
                        
                        <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                                <div style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 18px;">
                                    ✓
                                </div>
                                <div style="font-size: 16px; font-weight: 700;">Family Education</div>
                            </div>
                            <div style="font-size: 13px; opacity: 0.8;">Recognizing warning signs training</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section style="padding: 120px 10%; text-align: center; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); position: relative; overflow: hidden;">
        <!-- Background Elements -->
        <div style="position: absolute; top: 20%; left: 10%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(128,143,189,0.1) 0%, rgba(128,143,189,0) 70%);"></div>
        <div style="position: absolute; bottom: 30%; right: 10%; width: 100px; height: 100px; border: 2px dashed #91746E; border-radius: 30px; opacity: 0.1; transform: rotate(25deg);"></div>
        
        <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
            <div style="display: inline-flex; align-items: center; gap: 15px; background: rgba(128,143,189,0.1); padding: 15px 30px; border-radius: 30px; margin-bottom: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(128,143,189,0.3);">
                <span style="color: #808FBD; font-size: 24px;">🤱</span>
                <div style="font-size: 14px; font-weight: 700; color: #363558;">CONTINUING THE JOURNEY</div>
            </div>
            
            <h2 style="font-size: 56px; font-weight: 800; margin: 0 0 25px 0; line-height: 1.2; color: #363558;">
                The Journey <span style="color: #808FBD;">Continues</span> After Birth
            </h2>
            
            <p style="font-size: 20px; color: #5a5a5a; max-width: 600px; margin: 0 auto 50px auto; line-height: 1.6;">
                Support our postpartum program to ensure mothers and newborns receive the care they need during the critical first weeks of life.
            </p>
            
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="#" style="background: linear-gradient(135deg, #808FBD, #A3B4E0); color: white; text-decoration: none; padding: 20px 45px; border-radius: 40px; font-weight: 800; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 15px 40px rgba(128,143,189,0.3);">
                    🤱 Support SafePostpartum
                </a>
                <a href="#" style="background: white; color: #363558; text-decoration: none; padding: 20px 45px; border-radius: 40px; font-weight: 700; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; border: 2px solid #f0f0f0; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    📞 Learn More
                </a>
            </div>
            
            <!-- Impact Stats -->
            <div style="display: flex; justify-content: center; gap: 40px; margin-top: 80px; flex-wrap: wrap;">
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 800; color: #808FBD; margin-bottom: 10px;">8,500+</div>
                    <div style="font-size: 14px; color: #5a5a5a; font-weight: 600;">Postpartum Follow-ups</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 800; color: #46DE48; margin-bottom: 10px;">92%</div>
                    <div style="font-size: 14px; color: #5a5a5a; font-weight: 600;">Breastfeeding Success</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 800; color: #91746E; margin-bottom: 10px;">98%</div>
                    <div style="font-size: 14px; color: #5a5a5a; font-weight: 600;">Mother Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection