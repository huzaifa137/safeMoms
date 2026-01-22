@extends('layouts.apps')
@section('content')
<!-- Hero Story Section -->
<section style="padding: 140px 10% 100px 10%; background: linear-gradient(135deg, #E7E9ED 0%, #E7E9ED 100%); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative; overflow: hidden;">

    <!-- Background geometric elements -->
    <div style="position: absolute; top: 10%; right: 10%; width: 200px; height: 200px; border-radius: 40px; background: linear-gradient(135deg, rgba(70,222,72,0.05), rgba(70,222,72,0)); transform: rotate(25deg);"></div>
    <div style="position: absolute; bottom: 15%; left: 5%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%);"></div>
    
    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; text-align: center;">
        <div style="display: inline-flex; align-items: center; padding: 10px 30px; background: linear-gradient(90deg, rgba(70,222,72,0.1), rgba(128,143,189,0.1)); color: #363558; border-radius: 30px; font-size: 15px; font-weight: 700; margin-bottom: 30px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.5); margin-top: 5rem;">
            <span style="color: #46DE48; margin-right: 10px;">✦</span> ABOUT OUR JOURNEY
        </div>
        
        <h1 style="font-size: 72px; color: #363558; margin: 0 0 30px 0; font-weight: 800; letter-spacing: -2px; line-height: 1.1;">
            Our <span style="color: #DD3134;">Story</span>
        </h1>
        
        <p style="font-size: 22px; color: #5a5a5a; max-width: 900px; margin: 0 auto; line-height: 1.7; font-weight: 400;">
            SafeMoms Navigator was born from a simple belief: no mother should face pregnancy alone. We connect expectant mothers with trained youth navigators who provide personalized, community-based support.
        </p>
        
        <!-- Animated dots -->
        <div style="margin-top: 60px; display: flex; justify-content: center; gap: 12px;">
            <div style="width: 10px; height: 10px; background: #DD3134; border-radius: 50%; animation: pulse 2s infinite;"></div>
            <div style="width: 10px; height: 10px; background: #46DE48; border-radius: 50%; animation: pulse 2s infinite 0.2s;"></div>
            <div style="width: 10px; height: 10px; background: #91746E; border-radius: 50%; animation: pulse 2s infinite 0.4s;"></div>
        </div>
    </div>
    
    <style>
        @keyframes pulse {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }
    </style>
</section>

<!-- Youth Movement Section -->
<section style="padding: 120px 10%; background: white; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative;">
    
    <!-- Background pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(45deg, #363558 0px, #363558 1px, transparent 1px, transparent 20px);"></div>
    
    <div style="position: relative; z-index: 2; display: flex; align-items: center; justify-content: space-between; gap: 80px; max-width: 1200px; margin: 0 auto;">
        
        <div style="flex: 1.2; max-width: 600px;">
            <div style="display: inline-flex; align-items: center; padding: 8px 20px; background: rgba(221,49,52,0.1); color: #DD3134; border-radius: 20px; font-size: 14px; font-weight: 700; margin-bottom: 25px; gap: 10px;">
                <span>🚀</span> OUR BEGINNINGS
            </div>
            
            <h2 style="font-size: 48px; line-height: 1.1; margin: 0 0 30px 0; color: #363558; font-weight: 800;">
                A Youth-Led Movement for <br><span style="color: #DD3134;">Maternal Health</span>
            </h2>
            
            <div style="display: flex; flex-direction: column; gap: 25px;">
                <p style="font-size: 17px; line-height: 1.8; color: #5a5a5a; margin: 0;">
                    In 2019, a group of young health advocates in Kampala witnessed firsthand the gaps in maternal healthcare. Mothers in rural communities lacked access to information, transportation, and continuous support during pregnancy.
                </p>
                
                <p style="font-size: 17px; line-height: 1.8; color: #5a5a5a; margin: 0;">
                    We started with five volunteer navigators and a simple SMS system. Today, we've grown into a network of <span style="color: #DD3134; font-weight: 700;">350+ youth navigators</span> supporting mothers across <span style="color: #46DE48; font-weight: 700;">24 districts</span> in Uganda.
                </p>
                
                <p style="font-size: 17px; line-height: 1.8; color: #5a5a5a; margin: 0;">
                    Our approach is simple: meet mothers where they are, use low-tech tools that work everywhere, and build on the strength of community networks.
                </p>
            </div>
        </div>

        <div style="flex: 1; position: relative;">
            <div style="width: 100%; max-width: 520px; height: 420px; border-radius: 30px; overflow: hidden; box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15); position: relative;">
                <img src="https://images.unsplash.com/photo-1609220136736-443140cffec6?auto=format&fit=crop&q=80&w=1000" alt="Father and Children" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(54,53,88,0.1), rgba(54,53,88,0.3));"></div>
            </div>

            <!-- Floating stat card -->
            <div style="position: absolute; bottom: -30px; left: -30px; background: white; padding: 25px 30px; border-radius: 20px; box-shadow: 0 25px 50px rgba(0,0,0,0.15); display: flex; align-items: center; gap: 20px; z-index: 3;">
                <div style="background: linear-gradient(135deg, #DD3134, #FF6B6B); color: white; width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; font-size: 28px; font-weight: bold;">
                    350+
                </div>
                <div>
                    <div style="font-size: 20px; font-weight: 800; color: #363558; line-height: 1;">Youth Navigators</div>
                    <div style="font-size: 14px; color: #808FBD;">Trained & Active</div>
                </div>
            </div>
            
            <!-- Decorative element -->
            <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; border: 3px dashed #46DE48; border-radius: 25px; transform: rotate(15deg); opacity: 0.3;"></div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section style="padding: 120px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative;">

    <!-- Background pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 25% 25%, white 1px, transparent 1px); background-size: 40px 40px;"></div>
    
    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;">

            <!-- Mission Card -->
            <div style="background: rgba(255,255,255,0.05); border-radius: 30px; padding: 60px 50px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #DD3134, #FF6B6B);"></div>
                
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 35px;">
                    <div style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 32px; box-shadow: 0 15px 30px rgba(221,49,52,0.3);">
                        🎯
                    </div>
                    <div style="color: white; font-size: 15px; font-weight: 700; background: rgba(255,255,255,0.1); padding: 8px 20px; border-radius: 20px;">OUR MISSION</div>
                </div>
                
                <h3 style="color: white; font-size: 36px; font-weight: 800; margin: 0 0 25px 0; line-height: 1.2;">To ensure every mother has access to safe, supportive care</h3>
                
                <p style="color: #DCCEC1; font-size: 18px; line-height: 1.7; margin: 0;">
                    To ensure every mother in Uganda has access to safe, supportive, and dignified maternal care through community-based youth navigators and innovative low-tech solutions.
                </p>
            </div>

            <!-- Vision Card -->
            <div style="background: rgba(255,255,255,0.05); border-radius: 30px; padding: 60px 50px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); position: relative; overflow: hidden; transition: transform 0.4s ease;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #46DE48, #80E681);"></div>
                
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 35px;">
                    <div style="background: linear-gradient(135deg, #46DE48, #80E681); width: 70px; height: 70px; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: white; font-size: 32px; box-shadow: 0 15px 30px rgba(70,222,72,0.3);">
                        👁️
                    </div>
                    <div style="color: white; font-size: 15px; font-weight: 700; background: rgba(255,255,255,0.1); padding: 8px 20px; border-radius: 20px;">OUR VISION</div>
                </div>
                
                <h3 style="color: white; font-size: 36px; font-weight: 800; margin: 0 0 25px 0; line-height: 1.2;">A future where no mother dies from preventable causes</h3>
                
                <p style="color: #DCCEC1; font-size: 18px; line-height: 1.7; margin: 0;">
                    A Uganda where no mother dies from preventable causes, where every pregnancy is supported by a caring community, and where young people lead the change.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section style="padding: 120px 10%; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative;">

    <!-- Background decorative elements -->
    <div style="position: absolute; top: 10%; right: 10%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(128,143,189,0.05) 0%, rgba(128,143,189,0) 70%);"></div>
    <div style="position: absolute; bottom: 20%; left: 10%; width: 100px; height: 100px; border-radius: 30px; background: linear-gradient(135deg, rgba(145,116,110,0.05), rgba(145,116,110,0)); transform: rotate(-15deg);"></div>
    
    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 80px;">
            <div style="display: inline-flex; align-items: center; gap: 10px; margin-bottom: 25px;">
                <div style="width: 40px; height: 4px; background: linear-gradient(90deg, #DD3134, #46DE48); border-radius: 2px;"></div>
                <div style="color: #808FBD; font-size: 14px; font-weight: 700; letter-spacing: 2px;">OUR VALUES</div>
                <div style="width: 40px; height: 4px; background: linear-gradient(90deg, #46DE48, #DD3134); border-radius: 2px;"></div>
            </div>
            
            <h2 style="font-size: 48px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -1px;">
                The Principles That <span style="color: #DD3134;">Guide Us</span>
            </h2>
            <p style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                The foundational values that drive every decision we make and every action we take.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
            
            <!-- Value 1 -->
            <div style="background: white; border-radius: 25px; padding: 40px 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                <div style="background: linear-gradient(135deg, #DD3134, #FF6B6B); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 36px; margin: 0 auto 25px; box-shadow: 0 15px 30px rgba(221,49,52,0.2);">
                    ❤️
                </div>
                <h4 style="color: #363558; font-size: 22px; font-weight: 800; margin: 0 0 15px 0;">Compassion</h4>
                <p style="color: #5a5a5a; font-size: 15px; line-height: 1.6; margin: 0;">
                    Every mother deserves care with dignity, empathy, and understanding at every stage of her journey.
                </p>
            </div>

            <!-- Value 2 -->
            <div style="background: white; border-radius: 25px; padding: 40px 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                <div style="background: linear-gradient(135deg, #46DE48, #80E681); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 36px; margin: 0 auto 25px; box-shadow: 0 15px 30px rgba(70,222,72,0.2);">
                    🛡️
                </div>
                <h4 style="color: #363558; font-size: 22px; font-weight: 800; margin: 0 0 15px 0;">Safety</h4>
                <p style="color: #5a5a5a; font-size: 15px; line-height: 1.6; margin: 0;">
                    We prioritize the health and safety of mothers and babies above all else in every decision we make.
                </p>
            </div>

            <!-- Value 3 -->
            <div style="background: white; border-radius: 25px; padding: 40px 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                <div style="background: linear-gradient(135deg, #91746E, #DCCEC1); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 36px; margin: 0 auto 25px; box-shadow: 0 15px 30px rgba(145,116,110,0.2);">
                    👥
                </div>
                <h4 style="color: #363558; font-size: 22px; font-weight: 800; margin: 0 0 15px 0;">Community</h4>
                <p style="color: #5a5a5a; font-size: 15px; line-height: 1.6; margin: 0;">
                    Local networks and partnerships are the foundation of sustainable, lasting change in maternal health.
                </p>
            </div>

            <!-- Value 4 -->
            <div style="background: white; border-radius: 25px; padding: 40px 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                <div style="background: linear-gradient(135deg, #808FBD, #A3B4E0); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 36px; margin: 0 auto 25px; box-shadow: 0 15px 30px rgba(128,143,189,0.2);">
                    💡
                </div>
                <h4 style="color: #363558; font-size: 22px; font-weight: 800; margin: 0 0 15px 0;">Innovation</h4>
                <p style="color: #5a5a5a; font-size: 15px; line-height: 1.6; margin: 0;">
                    We develop simple, scalable, low-tech solutions for complex maternal health challenges.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Journey Timeline Section -->
<section style="padding: 120px 10%; background: #E7E9ED; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; position: relative;">

    <!-- Background pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(0deg, transparent, transparent 30px, #363558 30px, #363558 31px);"></div>
    
    <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 80px;">
            <div style="display: inline-block; padding: 10px 30px; background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px;">
                OUR JOURNEY
            </div>
            
            <h2 style="font-size: 48px; color: #363558; margin: 0 0 20px 0; font-weight: 800; letter-spacing: -1px;">
                Milestones in Our <span style="color: #DD3134;">Growth</span>
            </h2>
            <p style="font-size: 18px; color: #5a5a5a; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Key moments that have shaped our journey from a small initiative to a national movement.
            </p>
        </div>

        <!-- Enhanced Timeline -->
        <div style="position: relative; max-width: 900px; margin: 0 auto;">
            
            <!-- Timeline line -->
            <div style="position: absolute; left: 50%; top: 0; bottom: 0; width: 4px; background: linear-gradient(to bottom, #DD3134, #46DE48, #91746E); transform: translateX(-50%); border-radius: 2px;"></div>

            <!-- Timeline items -->
            <div style="display: flex; justify-content: flex-start; margin-bottom: 70px; position: relative;">
                <div style="width: 45%; margin-right: 10%;">
                    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: right; position: relative; border-right: 4px solid #DD3134;">
                        <div style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(221,49,52,0.1); color: #DD3134; border-radius: 20px; font-size: 13px; font-weight: 700; margin-bottom: 15px;">
                            <span>🚀</span> FOUNDED
                        </div>
                        <div style="color: #DD3134; font-size: 32px; font-weight: 800; margin-bottom: 10px;">2019</div>
                        <div style="color: #363558; font-weight: 800; font-size: 20px; margin-bottom: 15px;">Humble Beginnings</div>
                        <p style="color: #5a5a5a; font-size: 15px; margin: 0; line-height: 1.6;">Started with 5 passionate youth navigators in Kampala, using basic SMS system for check-ins.</p>
                    </div>
                </div>
                <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 20px; height: 20px; background: #DD3134; border: 5px solid white; border-radius: 50%; box-shadow: 0 0 0 3px #DD3134; z-index: 2;"></div>
            </div>

            <div style="display: flex; justify-content: flex-end; margin-bottom: 70px; position: relative;">
                <div style="width: 45%; margin-left: 10%;">
                    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: left; position: relative; border-left: 4px solid #46DE48;">
                        <div style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(70,222,72,0.1); color: #46DE48; border-radius: 20px; font-size: 13px; font-weight: 700; margin-bottom: 15px;">
                            <span>📱</span> TECHNOLOGY LAUNCH
                        </div>
                        <div style="color: #46DE48; font-size: 32px; font-weight: 800; margin-bottom: 10px;">2020</div>
                        <div style="color: #363558; font-weight: 800; font-size: 20px; margin-bottom: 15px;">SMS System Launch</div>
                        <p style="color: #5a5a5a; font-size: 15px; margin: 0; line-height: 1.6;">Launched our scalable SMS reminder and check-in system, reaching 500+ mothers.</p>
                    </div>
                </div>
                <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 20px; height: 20px; background: #46DE48; border: 5px solid white; border-radius: 50%; box-shadow: 0 0 0 3px #46DE48; z-index: 2;"></div>
            </div>

            <div style="display: flex; justify-content: flex-start; margin-bottom: 70px; position: relative;">
                <div style="width: 45%; margin-right: 10%;">
                    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: right; position: relative; border-right: 4px solid #91746E;">
                        <div style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(145,116,110,0.1); color: #91746E; border-radius: 20px; font-size: 13px; font-weight: 700; margin-bottom: 15px;">
                            <span>🌍</span> EXPANSION
                        </div>
                        <div style="color: #91746E; font-size: 32px; font-weight: 800; margin-bottom: 10px;">2021</div>
                        <div style="color: #363558; font-weight: 800; font-size: 20px; margin-bottom: 15px;">Regional Growth</div>
                        <p style="color: #5a5a5a; font-size: 15px; margin: 0; line-height: 1.6;">Expanded to 10 districts, training 50+ new youth navigators and establishing community partnerships.</p>
                    </div>
                </div>
                <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 20px; height: 20px; background: #91746E; border: 5px solid white; border-radius: 50%; box-shadow: 0 0 0 3px #91746E; z-index: 2;"></div>
            </div>

            <div style="display: flex; justify-content: flex-end; margin-bottom: 70px; position: relative;">
                <div style="width: 45%; margin-left: 10%;">
                    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: left; position: relative; border-left: 4px solid #808FBD;">
                        <div style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(128,143,189,0.1); color: #808FBD; border-radius: 20px; font-size: 13px; font-weight: 700; margin-bottom: 15px;">
                            <span>👶</span> MILESTONE
                        </div>
                        <div style="color: #808FBD; font-size: 32px; font-weight: 800; margin-bottom: 10px;">2022</div>
                        <div style="color: #363558; font-weight: 800; font-size: 20px; margin-bottom: 15px;">5,000 Mothers Reached</div>
                        <p style="color: #5a5a5a; font-size: 15px; margin: 0; line-height: 1.6;">Supported 5,000 mothers with comprehensive prenatal, delivery, and postpartum care.</p>
                    </div>
                </div>
                <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 20px; height: 20px; background: #808FBD; border: 5px solid white; border-radius: 50%; box-shadow: 0 0 0 3px #808FBD; z-index: 2;"></div>
            </div>

            <div style="display: flex; justify-content: flex-start; margin-bottom: 70px; position: relative;">
                <div style="width: 45%; margin-right: 10%;">
                    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: right; position: relative; border-right: 4px solid #DD3134;">
                        <div style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(221,49,52,0.1); color: #DD3134; border-radius: 20px; font-size: 13px; font-weight: 700; margin-bottom: 15px;">
                            <span>🏆</span> RECOGNITION
                        </div>
                        <div style="color: #DD3134; font-size: 32px; font-weight: 800; margin-bottom: 10px;">2023</div>
                        <div style="color: #363558; font-weight: 800; font-size: 20px; margin-bottom: 15px;">National Recognition</div>
                        <p style="color: #5a5a5a; font-size: 15px; margin: 0; line-height: 1.6;">Recognized as a national maternal health program by the Ministry of Health, Uganda.</p>
                    </div>
                </div>
                <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 20px; height: 20px; background: #DD3134; border: 5px solid white; border-radius: 50%; box-shadow: 0 0 0 3px #DD3134; z-index: 2;"></div>
            </div>

            <div style="display: flex; justify-content: flex-end; position: relative;">
                <div style="width: 45%; margin-left: 10%;">
                    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: left; position: relative; border-left: 4px solid #46DE48;">
                        <div style="display: inline-flex; align-items: center; padding: 6px 16px; background: rgba(70,222,72,0.1); color: #46DE48; border-radius: 20px; font-size: 13px; font-weight: 700; margin-bottom: 15px;">
                            <span>🌟</span> TODAY
                        </div>
                        <div style="color: #46DE48; font-size: 32px; font-weight: 800; margin-bottom: 10px;">2024</div>
                        <div style="color: #363558; font-weight: 800; font-size: 20px; margin-bottom: 15px;">12,000+ Mothers Supported</div>
                        <p style="color: #5a5a5a; font-size: 15px; margin: 0; line-height: 1.6;">Currently supporting 12,000+ mothers across 24 districts with 350+ active youth navigators.</p>
                    </div>
                </div>
                <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 20px; height: 20px; background: #46DE48; border: 5px solid white; border-radius: 50%; box-shadow: 0 0 0 3px #46DE48; z-index: 2;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section style="padding: 120px 10%; background: linear-gradient(135deg, #DD3134 0%, #FF6B6B 100%); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; text-align: center; position: relative; overflow: hidden;">

    <!-- Background pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 30px 30px, white 2px, transparent 2px); background-size: 60px 60px;"></div>
    
    <div style="position: relative; z-index: 2; max-width: 900px; margin: 0 auto; color: white;">
        <div style="display: inline-flex; align-items: center; padding: 12px 30px; background: rgba(255,255,255,0.2); color: white; border-radius: 30px; font-size: 15px; font-weight: 700; margin-bottom: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
            <span style="font-size: 20px; margin-right: 10px;">🌟</span> JOIN THE MOVEMENT
        </div>
        
        <h2 style="font-size: 56px; font-weight: 800; margin: 0 0 25px 0; letter-spacing: -1px; line-height: 1.1;">
            Be Part of <span style="color: #363558;">Our Story</span>
        </h2>

        <p style="font-size: 20px; line-height: 1.7; margin: 0 auto 50px auto; max-width: 700px; opacity: 0.95;">
            Join us in creating a future where every mother receives the care, support, and dignity she deserves throughout her pregnancy journey.
        </p>

        <div style="display: flex; justify-content: center; gap: 25px; flex-wrap: wrap;">
            <a href="#" style="background: white; color: #DD3134; text-decoration: none; padding: 18px 45px; border-radius: 12px; font-size: 17px; font-weight: 800; display: inline-flex; align-items: center; gap: 12px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                Get Involved <span style="font-size: 20px;">→</span>
            </a>

            <a href="#" style="background: transparent; color: white; text-decoration: none; padding: 18px 45px; border-radius: 12px; font-size: 17px; font-weight: 700; border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px); display: inline-flex; align-items: center; transition: all 0.3s ease;">
                Explore Our Programs
            </a>
        </div>
        
        <!-- Impact stats -->
        <div style="display: flex; justify-content: center; gap: 40px; margin-top: 70px; color: rgba(255,255,255,0.9); font-size: 15px; flex-wrap: wrap;">
            <div style="text-align: center;">
                <div style="font-size: 28px; font-weight: 800; color: white; margin-bottom: 5px;">12,000+</div>
                <div>Mothers Supported</div>
            </div>
            <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
            <div style="text-align: center;">
                <div style="font-size: 28px; font-weight: 800; color: white; margin-bottom: 5px;">350+</div>
                <div>Youth Navigators</div>
            </div>
            <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
            <div style="text-align: center;">
                <div style="font-size: 28px; font-weight: 800; color: white; margin-bottom: 5px;">24</div>
                <div>Districts Covered</div>
            </div>
            <div style="width: 1px; background: rgba(255,255,255,0.3);"></div>
            <div style="text-align: center;">
                <div style="font-size: 28px; font-weight: 800; color: white; margin-bottom: 5px;">98%</div>
                <div>Success Rate</div>
            </div>
        </div>
    </div>
</section>
@endsection
