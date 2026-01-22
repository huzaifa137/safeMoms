@extends('layouts.apps')

@section('content')

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%); margin-top: 8em;">

    <!-- Hero Section -->
    <section style="padding: 120px 10% 80px 10%; display: flex; align-items: center; gap: 60px; position: relative; overflow: hidden;">
        <!-- Background Elements -->
        <div style="position: absolute; top: 10%; left: -50px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.08) 0%, rgba(70,222,72,0) 70%);"></div>
        <div style="position: absolute; bottom: 20%; right: -50px; width: 200px; height: 200px; border: 2px dashed #DD3134; border-radius: 40px; opacity: 0.1; transform: rotate(25deg);"></div>
        
        <div style="flex: 1; position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; padding: 12px 28px; background: linear-gradient(90deg, rgba(221,49,52,0.1), rgba(70,222,72,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.8);">
                <span style="color: #DD3134; margin-right: 10px;">🤰</span> SAFE PREGNANCY PROGRAM
            </div>
            
            <h1 style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                Journey to a <span style="color: #DD3134;">Safe</span> & Healthy Pregnancy
            </h1>
            
            <p style="font-size: 20px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px; max-width: 600px;">
                From conception to delivery, our comprehensive prenatal support ensures you and your baby receive personalized care every step of the way. Your dedicated navigator is your partner in this beautiful journey.
            </p>
            
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <a href="#" style="background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; text-decoration: none; padding: 18px 40px; border-radius: 40px; font-weight: 800; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 10px 30px rgba(221,49,52,0.3);">
                    Enroll Now <span style="font-size: 20px;">→</span>
                </a>
                <a href="#" style="background: white; color: #363558; border: 2px solid #f0f0f0; text-decoration: none; padding: 18px 40px; border-radius: 40px; font-weight: 700; font-size: 16px; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <span style="color: #46DE48;">▶</span> Watch Program Video
                </a>
            </div>
            
            <!-- Quick Stats -->
            <div style="display: flex; gap: 40px; margin-top: 60px; flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: rgba(221,49,52,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 20px;">❤️</div>
                    <div>
                        <div style="font-size: 28px; font-weight: 800; color: #363558; line-height: 1;">5,200+</div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: rgba(70,222,72,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px;">⭐</div>
                    <div>
                        <div style="font-size: 28px; font-weight: 800; color: #363558; line-height: 1;">98%</div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Satisfaction Rate</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: rgba(128,143,189,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #808FBD; font-size: 20px;">👩‍⚕️</div>
                    <div>
                        <div style="font-size: 28px; font-weight: 800; color: #363558; line-height: 1;">472+</div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Trained Navigators</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="flex: 1; position: relative; z-index: 2;">
            <div style="background: white; border-radius: 30px; padding: 25px; box-shadow: 0 40px 80px rgba(54,53,88,0.15); border: 1px solid #f0f0f0; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1518101645466-7795885ff8f8?auto=format&fit=crop&q=80&w=800" style="width: 100%; border-radius: 20px; margin-bottom: 20px;">
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background: rgba(54,53,88,0.05); border-radius: 15px;">
                    <div>
                        <div style="font-size: 13px; color: #808FBD; font-weight: 600; margin-bottom: 5px;">Real Mother Story</div>
                        <div style="font-size: 16px; font-weight: 700; color: #363558;">Sarah's Journey</div>
                    </div>
                    <a href="#" style="color: #DD3134; text-decoration: none; font-weight: 700; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                        Read Story <span>→</span>
                    </a>
                </div>
            </div>
            
            <!-- Floating Element -->
            <div style="position: absolute; top: -30px; right: -30px; background: linear-gradient(135deg, #363558, #4a476f); color: white; padding: 20px; border-radius: 20px; box-shadow: 0 20px 40px rgba(54,53,88,0.3); width: 180px;">
                <div style="font-size: 32px; font-weight: 800; text-align: center; margin-bottom: 10px;">24/7</div>
                <div style="font-size: 12px; opacity: 0.9; text-align: center; font-weight: 600;">Support Available</div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section style="padding: 80px 10%; background: white; position: relative;">
        <!-- Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 25% 25%, #DD3134 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                    Comprehensive <span style="color: #46DE48;">Care</span> Services
                </h2>
                <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: 18px; line-height: 1.6;">
                    Our holistic approach covers every aspect of prenatal care to ensure optimal health for both mother and baby.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
                <!-- Card 1 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #DD3134;">
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 20px; color: white; font-size: 28px;">🔔</div>
                        <div>
                            <h3 style="font-size: 24px; color: #363558; margin: 0; font-weight: 800;">Smart Reminders</h3>
                            <div style="font-size: 14px; color: #808FBD; margin-top: 5px;">Never miss an appointment</div>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: rgba(221,49,52,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">First Trimester</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Initial screening</li>
                                <li style="padding: 5px 0;">• Blood tests</li>
                                <li style="padding: 5px 0;">• Ultrasound</li>
                            </ul>
                        </div>
                        <div style="background: rgba(221,49,52,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">Regular Visits</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Monthly check-ups</li>
                                <li style="padding: 5px 0;">• Specialist referrals</li>
                                <li style="padding: 5px 0;">• Growth monitoring</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #46DE48;">
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 20px; color: white; font-size: 28px;">🏠</div>
                        <div>
                            <h3 style="font-size: 24px; color: #363558; margin: 0; font-weight: 800;">Home Health Visits</h3>
                            <div style="font-size: 14px; color: #808FBD; margin-top: 5px;">Personalized care at home</div>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: rgba(70,222,72,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">Vital Monitoring</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Blood pressure</li>
                                <li style="padding: 5px 0;">• Weight tracking</li>
                                <li style="padding: 5px 0;">• Fetal heartbeat</li>
                            </ul>
                        </div>
                        <div style="background: rgba(70,222,72,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">Health Assessment</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Symptom review</li>
                                <li style="padding: 5px 0;">• Risk screening</li>
                                <li style="padding: 5px 0;">• Medication check</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #808FBD;">
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 20px; color: white; font-size: 28px;">📖</div>
                        <div>
                            <h3 style="font-size: 24px; color: #363558; margin: 0; font-weight: 800;">Health Education</h3>
                            <div style="font-size: 14px; color: #808FBD; margin-top: 5px;">Empowering knowledge</div>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: rgba(128,143,189,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">Nutrition & Exercise</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Meal planning</li>
                                <li style="padding: 5px 0;">• Safe exercises</li>
                                <li style="padding: 5px 0;">• Supplement guidance</li>
                            </ul>
                        </div>
                        <div style="background: rgba(128,143,189,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">Birth Preparation</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Warning signs</li>
                                <li style="padding: 5px 0;">• Hospital bag list</li>
                                <li style="padding: 5px 0;">• Delivery options</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div style="background: linear-gradient(145deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #91746E;">
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 20px; color: white; font-size: 28px;">👥</div>
                        <div>
                            <h3 style="font-size: 24px; color: #363558; margin: 0; font-weight: 800;">Birth Planning</h3>
                            <div style="font-size: 14px; color: #808FBD; margin-top: 5px;">Prepared for delivery day</div>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: rgba(145,116,110,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">Logistics</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Facility selection</li>
                                <li style="padding: 5px 0;">• Transport plan</li>
                                <li style="padding: 5px 0;">• Emergency funds</li>
                            </ul>
                        </div>
                        <div style="background: rgba(145,116,110,0.05); padding: 15px; border-radius: 15px;">
                            <div style="font-size: 16px; font-weight: 700; color: #363558; margin-bottom: 8px;">Support Network</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #5a5a5a;">
                                <li style="padding: 5px 0;">• Birth companion</li>
                                <li style="padding: 5px 0;">• Family preparation</li>
                                <li style="padding: 5px 0;">• Postpartum care</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Timeline -->
    <section style="padding: 100px 10%; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); text-align: center; position: relative;">
        <!-- Background Elements -->
        <div style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; border-radius: 30px; background: linear-gradient(135deg, rgba(221,49,52,0.05), rgba(221,49,52,0)); transform: rotate(25deg);"></div>
        <div style="position: absolute; bottom: 30%; right: 10%; width: 150px; height: 150px; border: 2px dashed #46DE48; border-radius: 50%; opacity: 0.1;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 700; margin-bottom: 25px; gap: 10px;">
                <span style="color: #DD3134; font-size: 20px;">📅</span> YOUR PREGNANCY TIMELINE
            </div>
            
            <h2 style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                Your <span style="color: #46DE48;">9-Month</span> Journey
            </h2>
            
            <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">
                From the first trimester to delivery, we provide structured support at every milestone of your pregnancy journey.
            </p>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                <!-- First Trimester -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; position: relative;">
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: 800; z-index: 2;">
                        1st
                    </div>
                    <div style="background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; padding: 60px 25px 25px 25px;">
                        <div style="font-size: 12px; opacity: 0.9; margin-bottom: 5px;">WEEKS 1-12</div>
                        <div style="font-weight: 800; font-size: 24px;">First Trimester</div>
                    </div>
                    <div style="padding: 40px 30px;">
                        <div style="background: rgba(221,49,52,0.1); padding: 20px; border-radius: 15px; margin-bottom: 20px;">
                            <div style="font-size: 14px; color: #808FBD; font-weight: 600; margin-bottom: 10px;">Key Milestones</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(221,49,52,0.1);">• Registration & baseline assessment</li>
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(221,49,52,0.1);">• First prenatal appointment</li>
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(221,49,52,0.1);">• Essential blood tests</li>
                                <li style="padding: 8px 0;">• Nutrition counseling begins</li>
                            </ul>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                            <div style="text-align: left;">
                                <div style="font-size: 12px; color: #808FBD;">Navigator Support</div>
                                <div style="font-size: 16px; font-weight: 700; color: #363558;">Weekly Check-ins</div>
                            </div>
                            <div style="color: #DD3134; font-weight: 800;">→</div>
                        </div>
                    </div>
                </div>

                <!-- Second Trimester -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; position: relative;">
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: 800; z-index: 2;">
                        2nd
                    </div>
                    <div style="background: linear-gradient(135deg, #46DE48, #80E681); color: white; padding: 60px 25px 25px 25px;">
                        <div style="font-size: 12px; opacity: 0.9; margin-bottom: 5px;">WEEKS 13-27</div>
                        <div style="font-weight: 800; font-size: 24px;">Second Trimester</div>
                    </div>
                    <div style="padding: 40px 30px;">
                        <div style="background: rgba(70,222,72,0.1); padding: 20px; border-radius: 15px; margin-bottom: 20px;">
                            <div style="font-size: 14px; color: #808FBD; font-weight: 600; margin-bottom: 10px;">Key Milestones</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(70,222,72,0.1);">• Anatomy ultrasound scan</li>
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(70,222,72,0.1);">• Regular home health visits</li>
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(70,222,72,0.1);">• Birth planning initiation</li>
                                <li style="padding: 8px 0;">• Exercise & wellness guidance</li>
                            </ul>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                            <div style="text-align: left;">
                                <div style="font-size: 12px; color: #808FBD;">Navigator Support</div>
                                <div style="font-size: 16px; font-weight: 700; color: #363558;">Bi-weekly Visits</div>
                            </div>
                            <div style="color: #46DE48; font-weight: 800;">→</div>
                        </div>
                    </div>
                </div>

                <!-- Third Trimester -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; position: relative;">
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: 800; z-index: 2;">
                        3rd
                    </div>
                    <div style="background: linear-gradient(135deg, #808FBD, #A3B4E0); color: white; padding: 60px 25px 25px 25px;">
                        <div style="font-size: 12px; opacity: 0.9; margin-bottom: 5px;">WEEKS 28-40</div>
                        <div style="font-weight: 800; font-size: 24px;">Third Trimester</div>
                    </div>
                    <div style="padding: 40px 30px;">
                        <div style="background: rgba(128,143,189,0.1); padding: 20px; border-radius: 15px; margin-bottom: 20px;">
                            <div style="font-size: 14px; color: #808FBD; font-weight: 600; margin-bottom: 10px;">Key Milestones</div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #363558;">
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(128,143,189,0.1);">• Final birth plan preparation</li>
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(128,143,189,0.1);">• Delivery logistics arrangement</li>
                                <li style="padding: 8px 0; border-bottom: 1px solid rgba(128,143,189,0.1);">• Emergency protocol review</li>
                                <li style="padding: 8px 0;">• Postpartum care planning</li>
                            </ul>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                            <div style="text-align: left;">
                                <div style="font-size: 12px; color: #808FBD;">Navigator Support</div>
                                <div style="font-size: 16px; font-weight: 700; color: #363558;">Weekly Intensive</div>
                            </div>
                            <div style="color: #808FBD; font-weight: 800;">→</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection