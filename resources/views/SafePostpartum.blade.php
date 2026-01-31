@extends('layouts.apps')

@section('content')

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%); overflow-x: hidden;">

    <!-- Hero Section -->
    <section style="padding: clamp(40px, 8vw, 120px) clamp(20px, 5vw, 10%) clamp(40px, 6vw, 80px); display: flex; flex-wrap: wrap; align-items: center; gap: clamp(30px, 5vw, 60px); position: relative; overflow: hidden;">
        <!-- Background Elements -->
        <div style="position: absolute; top: 10%; left: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.08) 0%, rgba(70,222,72,0) 70%); display: none;"></div>
        <div style="position: absolute; bottom: 20%; right: -50px; width: 200px; height: 200px; border: 2px dashed #808FBD; border-radius: 40px; opacity: 0.1; transform: rotate(25deg); display: none;"></div>

        <div style="flex: 1; min-width: min(100%, 320px); position: relative; z-index: 2; order: 1;">
            <div style="display: inline-flex; align-items: center; padding: clamp(10px, 2vw, 12px) clamp(20px, 3vw, 28px); background: linear-gradient(90deg, rgba(128,143,189,0.1), rgba(220,206,193,0.1)); color: #363558; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 800; margin-bottom: clamp(15px, 3vw, 25px); letter-spacing: 0.5px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.8);">
                <span style="color: #808FBD; margin-right: 8px;"><i class="bi bi-balloon-heart"></i></span> NEWBORN & MOTHER CARE
            </div>

            <h1 style="font-size: clamp(32px, 6vw, 64px); color: #363558; margin: 0 0 clamp(15px, 3vw, 25px) 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                Nurturing the <span style="color: #808FBD;">Bond</span> Beyond Birth
            </h1>

            <p style="font-size: clamp(16px, 3vw, 20px); color: #5a5a5a; line-height: 1.6; margin-bottom: clamp(25px, 4vw, 40px); max-width: 100%;">
                Our comprehensive postpartum program provides continuous support for both mother and newborn through the critical fourth trimester and beyond, ensuring a healthy transition into parenthood.
            </p>

            <div style="display: flex; gap: clamp(12px, 2vw, 20px); flex-wrap: wrap; margin-bottom: clamp(30px, 5vw, 40px);">
                <a href="#" style="background: linear-gradient(135deg, #808FBD, #A3B4E0); color: white; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 40px; font-weight: 800; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 8px 20px rgba(128,143,189,0.3); white-space: nowrap;">
                    Learn More <span style="font-size: clamp(16px, 2.5vw, 20px);">→</span>
                </a>
                <a href="#" style="background: white; color: #363558; border: 2px solid #f0f0f0; text-decoration: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 40px; font-weight: 700; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 8px 20px rgba(0,0,0,0.05); white-space: nowrap;">
                    <span style="color: #46DE48; font-size: clamp(14px, 2.5vw, 16px);">▶</span> Watch Testimonial
                </a>
            </div>

            <!-- Quick Stats -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: clamp(15px, 4vw, 40px);">
                <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px);">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(128,143,189,0.1); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; color: #808FBD; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-balloon-heart"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;">8,500+</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #808FBD; font-weight: 600;">Postpartum Follow-ups</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px);">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(70,222,72,0.1); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;">92%</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #808FBD; font-weight: 600;">Breastfeeding Success</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px);">
                    <div style="width: clamp(40px, 8vw, 50px); height: clamp(40px, 8vw, 50px); background: rgba(220,206,193,0.1); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; color: #91746E; font-size: clamp(16px, 3vw, 20px);">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
                    <div>
                        <div style="font-size: clamp(20px, 4vw, 28px); font-weight: 800; color: #363558; line-height: 1;">98%</div>
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #808FBD; font-weight: 600;">Mother Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="flex: 1; min-width: min(100%, 320px); position: relative; z-index: 2; order: 2;">
            <div style="background: white; border-radius: clamp(20px, 4vw, 30px); padding: clamp(15px, 3vw, 25px); box-shadow: 0 20px 40px rgba(54,53,88,0.1); border: 1px solid #f0f0f0; overflow: hidden; position: relative;">
                <img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?auto=format&fit=crop&q=80&w=800"
                    style="width: 100%; height: auto; border-radius: clamp(15px, 3vw, 20px); margin-bottom: clamp(15px, 3vw, 20px); aspect-ratio: 4/3; object-fit: cover;"
                    alt="Mother and newborn">

                <div style="display: flex; justify-content: space-between; align-items: center; padding: clamp(15px, 3vw, 20px); background: rgba(54,53,88,0.05); border-radius: clamp(12px, 2vw, 15px); gap: 15px;">
                    <div style="min-width: 0;">
                        <div style="font-size: clamp(11px, 2vw, 13px); color: #808FBD; font-weight: 600; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Featured Mother Story</div>
                        <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; color: #363558; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Grace & Baby Joy</div>
                    </div>
                    <a href="#" style="color: #808FBD; text-decoration: none; font-weight: 700; font-size: clamp(12px, 2vw, 14px); display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                        Read Journey <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Floating Element -->
            <div style="position: absolute; top: -20px; right: clamp(-15px, 2vw, -30px); background: linear-gradient(135deg, #91746E, #DCCEC1); color: white; padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); box-shadow: 0 15px 30px rgba(145,116,110,0.3); width: clamp(140px, 25vw, 180px); z-index: 3;">
                <div style="font-size: clamp(24px, 4vw, 32px); font-weight: 800; text-align: center; margin-bottom: 5px;">6 WKS</div>
                <div style="font-size: clamp(10px, 1.8vw, 12px); opacity: 0.9; text-align: center; font-weight: 600;">Postpartum Care</div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section style="padding: clamp(40px, 8vw, 80px) clamp(20px, 5vw, 10%); background: white; position: relative;">
        <!-- Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 25% 25%, #91746E 1px, transparent 1px); background-size: 50px 50px; display: none;"></div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: clamp(30px, 6vw, 60px); padding: 0 clamp(10px, 3vw, 0);">
                <h2 style="font-size: clamp(28px, 5vw, 48px); color: #363558; margin-bottom: clamp(15px, 3vw, 20px); font-weight: 800; line-height: 1.2;">
                    Holistic <span style="color: #91746E;">Postpartum</span> Care
                </h2>
                <p style="color: #5a5a5a; max-width: 100%; margin: 0 auto; font-size: clamp(16px, 3vw, 18px); line-height: 1.6;">
                    Supporting both mother and baby through comprehensive services designed for the critical postpartum period.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 320px), 1fr)); gap: clamp(20px, 4vw, 30px); padding: 0 clamp(10px, 3vw, 0);">
                <!-- Card 1 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-top: 5px solid #DD3134;">
                    <div style="width: clamp(60px, 10vw, 70px); height: clamp(60px, 10vw, 70px); background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px) auto; color: white; font-size: clamp(24px, 4vw, 32px);">
                        <i class="bi bi-clipboard2-pulse"></i>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(12px, 2vw, 15px) 0; font-weight: 800; text-align: center;">
                        Newborn Health Checks</h3>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: clamp(20px, 3vw, 25px);">
                        Regular monitoring of your baby's growth, feeding patterns, and developmental milestones in the critical first weeks.
                    </p>
                    <div style="background: rgba(221,49,52,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134;">✓</span> Growth monitoring</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134;">✓</span> Feeding assessment</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134;">✓</span> Developmental checks</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-top: 5px solid #46DE48;">
                    <div style="width: clamp(60px, 10vw, 70px); height: clamp(60px, 10vw, 70px); background: linear-gradient(135deg, #46DE48, #80E681); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px) auto; color: white; font-size: clamp(24px, 4vw, 32px);">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(12px, 2vw, 15px) 0; font-weight: 800; text-align: center;">
                        Breastfeeding Support</h3>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: clamp(20px, 3vw, 25px);">
                        Expert guidance on proper latching techniques, feeding schedules, and solutions for common breastfeeding challenges.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48;">✓</span> Latching techniques</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48;">✓</span> Feeding schedules</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48;">✓</span> Challenge solutions</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-top: 5px solid #808FBD;">
                    <div style="width: clamp(60px, 10vw, 70px); height: clamp(60px, 10vw, 70px); background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px) auto; color: white; font-size: clamp(24px, 4vw, 32px);">
                        <i class="bi bi-activity"></i>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(12px, 2vw, 15px) 0; font-weight: 800; text-align: center;">
                        Mental Health Screening</h3>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: clamp(20px, 3vw, 25px);">
                        Regular check-ins for postpartum depression and anxiety with validated screening tools and specialist referrals.
                    </p>
                    <div style="background: rgba(128,143,189,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #808FBD;">✓</span> Depression screening</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #808FBD;">✓</span> Anxiety assessment</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #808FBD;">✓</span> Specialist referrals</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-top: 5px solid #91746E;">
                    <div style="width: clamp(60px, 10vw, 70px); height: clamp(60px, 10vw, 70px); background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px) auto; color: white; font-size: clamp(24px, 4vw, 32px);">
                        <i class="bi bi-eyedropper"></i>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(12px, 2vw, 15px) 0; font-weight: 800; text-align: center;">
                        Immunization Support</h3>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: clamp(20px, 3vw, 25px);">
                        SMS reminders and scheduling assistance for all childhood vaccinations to ensure your baby stays protected.
                    </p>
                    <div style="background: rgba(145,116,110,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #91746E;">✓</span> SMS reminders</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #91746E;">✓</span> Schedule planning</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #91746E;">✓</span> Follow-up support</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 5 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-top: 5px solid #DD3134;">
                    <div style="width: clamp(60px, 10vw, 70px); height: clamp(60px, 10vw, 70px); background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px) auto; color: white; font-size: clamp(24px, 4vw, 32px);">
                        <i class="bi bi-bandaid"></i>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(12px, 2vw, 15px) 0; font-weight: 800; text-align: center;">
                        Mother Recovery Care</h3>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: clamp(20px, 3vw, 25px);">
                        Comprehensive monitoring of your physical recovery, wound care, nutrition, and overall postpartum health.
                    </p>
                    <div style="background: rgba(221,49,52,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134;">✓</span> Wound care</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134;">✓</span> Nutrition guidance</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #DD3134;">✓</span> Recovery tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 6 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; border-top: 5px solid #46DE48;">
                    <div style="width: clamp(60px, 10vw, 70px); height: clamp(60px, 10vw, 70px); background: linear-gradient(135deg, #46DE48, #80E681); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px) auto; color: white; font-size: clamp(24px, 4vw, 32px);">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(12px, 2vw, 15px) 0; font-weight: 800; text-align: center;">
                        Family Planning</h3>
                    <p style="font-size: clamp(14px, 2.5vw, 15px); color: #5a5a5a; line-height: 1.6; text-align: center; margin-bottom: clamp(20px, 3vw, 25px);">
                        Counseling and support for postpartum contraception and informed family planning decisions.
                    </p>
                    <div style="background: rgba(70,222,72,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                        <div style="font-size: clamp(11px, 2vw, 12px); color: #808FBD; font-weight: 600; margin-bottom: 8px;">INCLUDES:</div>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558;">
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48;">✓</span> Contraception options</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48;">✓</span> Spacing guidance</li>
                            <li style="padding: clamp(4px, 1vw, 5px) 0; display: flex; align-items: center; gap: 8px;"><span style="color: #46DE48;">✓</span> Decision support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Postpartum Timeline -->
    <section style="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 10%); background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); text-align: center; position: relative;">
        <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
            <div style="display: inline-flex; align-items: center; background: rgba(128,143,189,0.1); padding: clamp(12px, 2vw, 15px) clamp(20px, 3vw, 30px); border-radius: 30px; color: #363558; font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; margin-bottom: clamp(15px, 3vw, 25px); gap: 8px; backdrop-filter: blur(5px); border: 1px solid rgba(128,143,189,0.2);">
                <span style="color: #808FBD; font-size: clamp(16px, 3vw, 20px);">📅</span> POSTPARTUM TIMELINE
            </div>

            <h2 style="font-size: clamp(28px, 5vw, 48px); color: #363558; margin-bottom: clamp(15px, 3vw, 20px); font-weight: 800; line-height: 1.2;">
                Your <span style="color: #91746E;">6-Week</span> Journey
            </h2>

            <p style="color: #5a5a5a; max-width: 100%; margin: 0 auto clamp(30px, 6vw, 60px) auto; line-height: 1.6; font-size: clamp(16px, 3vw, 18px); padding: 0 clamp(10px, 3vw, 0);">
                Structured support through every stage of the postpartum period, from immediate recovery to long-term wellness.
            </p>

            <!-- Timeline -->
            <div style="position: relative; padding: clamp(30px, 6vw, 60px) 0 clamp(20px, 4vw, 40px) 0;">
                <!-- Timeline Items - Now 3 items -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 320px), 1fr)); gap: clamp(20px, 4vw, 40px); padding: 0 clamp(10px, 3vw, 0);">
                    <!-- Week 1-3 -->
                    <div style="text-align: center; position: relative; z-index: 2;">
                        <div style="width: clamp(80px, 15vw, 100px); height: clamp(80px, 15vw, 100px); background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: clamp(20px, 3vw, 25px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 4vw, 30px) auto; font-size: clamp(32px, 6vw, 40px); position: relative; z-index: 3; box-shadow: 0 15px 30px rgba(221,49,52,0.3); border: 4px solid white;">
                            <i class="bi bi-house"></i>
                        </div>
                        <div style="background: white; padding: clamp(20px, 4vw, 30px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-top: 5px solid #DD3134; height: 100%;">
                            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 12px; border-radius: 20px; font-size: clamp(10px, 2vw, 12px); font-weight: 800; margin: 0 auto clamp(15px, 3vw, 20px) auto;">
                                DAYS 1-21
                            </div>
                            <h4 style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin-bottom: clamp(12px, 2vw, 15px); color: #363558; line-height: 1.3;">
                                Initial Recovery Phase</h4>
                            <div style="background: rgba(221,49,52,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558; text-align: left;">
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #DD3134; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Post-birth feeding & cord care education</span></li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #DD3134; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Warning signs recognition and response</span></li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #DD3134; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Initial mental health assessment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Week 1-4 -->
                    <div style="text-align: center; position: relative; z-index: 2;">
                        <div style="width: clamp(80px, 15vw, 100px); height: clamp(80px, 15vw, 100px); background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: clamp(20px, 3vw, 25px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 4vw, 30px) auto; font-size: clamp(32px, 6vw, 40px); position: relative; z-index: 3; box-shadow: 0 15px 30px rgba(128,143,189,0.3); border: 4px solid white;">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div style="background: white; padding: clamp(20px, 4vw, 30px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-top: 5px solid #808FBD; height: 100%;">
                            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 12px; border-radius: 20px; font-size: clamp(10px, 2vw, 12px); font-weight: 800; margin: 0 auto clamp(15px, 3vw, 20px) auto;">
                                WEEKS 1-4
                            </div>
                            <h4 style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin-bottom: clamp(12px, 2vw, 15px); color: #363558; line-height: 1.3;">
                                Regular Home Visits</h4>
                            <div style="background: rgba(128,143,189,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558; text-align: left;">
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #808FBD; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Baby weight checks & growth assessments</span></li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #808FBD; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Feeding patterns evaluation & support</span></li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #808FBD; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Mental health screening sessions</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Week 4-6+ -->
                    <div style="text-align: center; position: relative; z-index: 2;">
                        <div style="width: clamp(80px, 15vw, 100px); height: clamp(80px, 15vw, 100px); background: linear-gradient(135deg, #46DE48, #80E681); border-radius: clamp(20px, 3vw, 25px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 4vw, 30px) auto; font-size: clamp(32px, 6vw, 40px); position: relative; z-index: 3; box-shadow: 0 15px 30px rgba(70,222,72,0.3); border: 4px solid white;">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <div style="background: white; padding: clamp(20px, 4vw, 30px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-top: 5px solid #46DE48; height: 100%;">
                            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 12px; border-radius: 20px; font-size: clamp(10px, 2vw, 12px); font-weight: 800; margin: 0 auto clamp(15px, 3vw, 20px) auto;">
                                WEEKS 4-6+
                            </div>
                            <h4 style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin-bottom: clamp(12px, 2vw, 15px); color: #363558; line-height: 1.3;">
                                Long-term Wellness</h4>
                            <div style="background: rgba(70,222,72,0.05); padding: clamp(12px, 2vw, 15px); border-radius: clamp(12px, 2vw, 15px);">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: clamp(12px, 2vw, 13px); color: #363558; text-align: left;">
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #46DE48; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Postpartum checkup coordination</span></li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #46DE48; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Vaccination milestone follow-up</span></li>
                                    <li style="padding: clamp(6px, 1vw, 8px) 0; display: flex; align-items: flex-start; gap: 8px;"><span style="color: #46DE48; font-size: clamp(14px, 2vw, 16px);">•</span> <span>Family planning counseling</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Direction -->
                <div style="text-align: center; margin-top: clamp(30px, 6vw, 50px);">
                    <div style="display: inline-flex; align-items: center; gap: clamp(10px, 2vw, 15px); background: rgba(54,53,88,0.1); padding: clamp(10px, 2vw, 12px) clamp(20px, 3vw, 30px); border-radius: 30px;">
                        <div style="font-size: clamp(12px, 2.5vw, 14px); font-weight: 600; color: #363558;">POSTPARTUM CARE FLOW</div>
                        <div style="display: flex; align-items: center; gap: 5px; color: #808FBD;">
                            <span>→</span>
                            <span>→</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mental Health Focus -->
    <section style="padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 10%); background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="display: flex; flex-wrap: wrap; gap: clamp(30px, 6vw, 80px); align-items: center;">
                <div style="flex: 1; min-width: min(100%, 320px); position: relative; order: 2;">
                    <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&q=80&w=800"
                        style="width: 100%; border-radius: clamp(20px, 4vw, 30px); box-shadow: 0 20px 40px rgba(0,0,0,0.2); aspect-ratio: 4/3; object-fit: cover;"
                        alt="Mother's mental health">

                    <!-- Floating Stat -->
                    <div style="position: absolute; bottom: -20px; left: clamp(-20px, 3vw, -40px); background: linear-gradient(135deg, #46DE48, #80E681); color: white; padding: clamp(15px, 3vw, 25px); border-radius: clamp(20px, 3vw, 25px); box-shadow: 0 20px 40px rgba(70,222,72,0.3); width: clamp(180px, 30vw, 220px); z-index: 3;">
                        <div style="font-size: clamp(32px, 6vw, 42px); font-weight: 800; text-align: center; line-height: 1;">1 in 7</div>
                        <div style="font-size: clamp(10px, 2vw, 12px); opacity: 0.9; text-align: center; font-weight: 600; letter-spacing: 0.5px;">
                            MOTHERS AFFECTED</div>
                        <div style="font-size: clamp(9px, 1.5vw, 10px); opacity: 0.7; text-align: center; margin-top: 5px;">By Postpartum Depression</div>
                    </div>
                </div>

                <div style="flex: 1; min-width: min(100%, 320px); order: 1;">
                    <div style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.15); padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 25px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 800; margin-bottom: clamp(15px, 3vw, 25px); backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.3);">
                        <span style="color: #46DE48; margin-right: 8px;">🧠</span> MENTAL HEALTH MATTERS
                    </div>

                    <h2 style="font-size: clamp(28px, 5vw, 48px); color: white; margin-bottom: clamp(15px, 3vw, 25px); font-weight: 800; line-height: 1.2;">
                        Supporting <span style="color: #46DE48;">Mother's</span> Mental Well-being
                    </h2>

                    <p style="font-size: clamp(16px, 3vw, 18px); opacity: 0.9; line-height: 1.6; margin-bottom: clamp(25px, 4vw, 40px);">
                        Postpartum depression affects 1 in 7 mothers, yet often goes undiagnosed. Our navigators are specially trained to recognize early warning signs and provide compassionate support.
                    </p>

                    <!-- Mental Health Services -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: clamp(15px, 3vw, 20px);">
                        <div style="background: rgba(255,255,255,0.05); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 18px);">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 700;">Regular Screening</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.8;">Validated screening tools during home visits</div>
                        </div>

                        <div style="background: rgba(255,255,255,0.05); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 18px);">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 700;">Specialist Referrals</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.8;">Pathways to mental health professionals</div>
                        </div>

                        <div style="background: rgba(255,255,255,0.05); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 18px);">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 700;">Peer Support</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.8;">Mother-to-mother support groups</div>
                        </div>

                        <div style="background: rgba(255,255,255,0.05); padding: clamp(15px, 3vw, 20px); border-radius: clamp(15px, 3vw, 20px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; align-items: center; gap: clamp(10px, 2vw, 15px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <div style="width: clamp(35px, 6vw, 40px); height: clamp(35px, 6vw, 40px); background: rgba(70,222,72,0.2); border-radius: clamp(10px, 2vw, 12px); display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: clamp(16px, 3vw, 18px);">
                                    ✓
                                </div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 700;">Family Education</div>
                            </div>
                            <div style="font-size: clamp(12px, 2vw, 13px); opacity: 0.8;">Recognizing warning signs training</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section style="padding: clamp(40px, 8vw, 120px) clamp(20px, 5vw, 10%); text-align: center; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); position: relative; overflow: hidden;">
        <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
            <div style="display: inline-flex; align-items: center; gap: clamp(10px, 2vw, 15px); background: rgba(128,143,189,0.1); padding: clamp(12px, 2vw, 15px) clamp(20px, 3vw, 30px); border-radius: 30px; margin-bottom: clamp(20px, 4vw, 30px); backdrop-filter: blur(10px); border: 1px solid rgba(128,143,189,0.3);">
                <i class="bi bi-person-heart" style="color: #808FBD; font-size: clamp(20px, 4vw, 24px);"></i>
                <div style="font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; color: #363558;">CONTINUING THE JOURNEY</div>
            </div>

            <h2 style="font-size: clamp(32px, 6vw, 56px); font-weight: 800; margin: 0 0 clamp(15px, 3vw, 25px) 0; line-height: 1.2; color: #363558;">
                The Journey <span style="color: #808FBD;">Continues</span> After Birth
            </h2>

            <p style="font-size: clamp(16px, 3vw, 20px); color: #5a5a5a; max-width: 100%; margin: 0 auto clamp(30px, 5vw, 50px) auto; line-height: 1.6; padding: 0 clamp(10px, 3vw, 0);">
                Support our postpartum program to ensure mothers and newborns receive the care they need during the critical first weeks of life.
            </p>

            <div style="display: flex; gap: clamp(15px, 3vw, 20px); justify-content: center; flex-wrap: wrap;">
                <a href="#" style="background: linear-gradient(135deg, #808FBD, #A3B4E0); color: white; text-decoration: none; padding: clamp(15px, 3vw, 20px) clamp(25px, 4vw, 45px); border-radius: 40px; font-weight: 800; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 10px 25px rgba(128,143,189,0.3); white-space: nowrap;">
                    <i class="bi bi-person-heart"></i> Support SafePostpartum
                </a>
                <a href="#" style="background: white; color: #363558; text-decoration: none; padding: clamp(15px, 3vw, 20px) clamp(25px, 4vw, 45px); border-radius: 40px; font-weight: 700; font-size: clamp(14px, 2.5vw, 16px); display: inline-flex; align-items: center; gap: 8px; border: 2px solid #f0f0f0; box-shadow: 0 8px 20px rgba(0,0,0,0.05); white-space: nowrap;">
                    <i class="bi bi-info-circle"></i> Learn More
                </a>
            </div>

            <!-- Impact Stats -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: clamp(20px, 4vw, 40px); margin-top: clamp(40px, 8vw, 80px);">
                <div style="text-align: center;">
                    <div style="font-size: clamp(28px, 5vw, 36px); font-weight: 800; color: #808FBD; margin-bottom: 8px;">8,500+</div>
                    <div style="font-size: clamp(12px, 2.5vw, 14px); color: #5a5a5a; font-weight: 600;">Postpartum Follow-ups</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: clamp(28px, 5vw, 36px); font-weight: 800; color: #46DE48; margin-bottom: 8px;">92%</div>
                    <div style="font-size: clamp(12px, 2.5vw, 14px); color: #5a5a5a; font-weight: 600;">Breastfeeding Success</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: clamp(28px, 5vw, 36px); font-weight: 800; color: #91746E; margin-bottom: 8px;">98%</div>
                    <div style="font-size: clamp(12px, 2.5vw, 14px); color: #5a5a5a; font-weight: 600;">Mother Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection