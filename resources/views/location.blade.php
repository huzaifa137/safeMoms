@extends('layouts.apps')

@section('content')

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">

    <!-- Hero Section -->
    <section style="padding: 120px 10% 80px 10%; text-align: center; position: relative; overflow: hidden;">
        <!-- Background elements -->
        <div style="position: absolute; top: 10%; right: 10%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%);"></div>
        <div style="position: absolute; bottom: 20%; left: 10%; width: 150px; height: 150px; border: 2px dashed #DD3134; border-radius: 40px; opacity: 0.1; transform: rotate(15deg);"></div>
        
        <div style="position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; padding: 10px 30px; background: linear-gradient(90deg, rgba(70,222,72,0.1), rgba(128,143,189,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.5);">
                <span style="color: #46DE48; margin-right: 10px;">🌍</span> OUR GEOGRAPHIC REACH
            </div>
            
            <h1 style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px;">
                Where We <span style="color: #DD3134;">Work</span>
            </h1>
            
            <p style="font-size: 20px; color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                SafeMoms Navigator operates across 24 districts in Uganda, with strategic plans to expand nationwide and ensure every mother has access to maternal health support.
            </p>
        </div>
    </section>

    <!-- Stats Overview -->
    <section style="padding: 80px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">

        <!-- Background pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 25% 25%, white 1px, transparent 1px); background-size: 40px 40px;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; text-align: center;">
                
                <div style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #DD3134; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        24 <span style="font-size: 24px; opacity: 0.7;">📍</span>
                    </div>
                    <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Districts Active</div>
                    <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Across 4 regions</div>
                </div>
                
                <div style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #46DE48; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        4 <span style="font-size: 24px; opacity: 0.7;">🗺️</span>
                    </div>
                    <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Regions Covered</div>
                    <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Central, Eastern, Northern, Western</div>
                </div>
                
                <div style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #91746E; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        472+ <span style="font-size: 24px; opacity: 0.7;">👥</span>
                    </div>
                    <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Trained Navigators</div>
                    <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Youth-led community support</div>
                </div>
                
                <div style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 48px; font-weight: 800; margin-bottom: 10px; color: #808FBD; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        13,460+ <span style="font-size: 24px; opacity: 0.7;">👶</span>
                    </div>
                    <div style="font-size: 16px; opacity: 0.9; font-weight: 600;">Mothers Reached</div>
                    <div style="font-size: 13px; opacity: 0.7; margin-top: 8px;">Since program inception</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Region Selection -->
    <section style="padding: 80px 10%; background: white; position: relative;">

        <!-- Background pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(45deg, #363558 0px, #363558 1px, transparent 1px, transparent 30px);"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 60px;">
                <div style="display: inline-flex; align-items: center; gap: 15px; padding: 12px 30px; background: rgba(54,53,88,0.1); border-radius: 30px; margin-bottom: 25px;">
                    <button style="padding: 12px 25px; border-radius: 25px; border: none; background: #363558; color: white; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 10px;">
                        <span>🗺️</span> Interactive Map View
                    </button>
                    <button style="padding: 12px 25px; border-radius: 25px; border: 2px solid #DD3134; background: rgba(221,49,52,0.1); color: #DD3134; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 10px;">
                        <span>📍</span> Region Details
                    </button>
                    <button style="padding: 12px 25px; border-radius: 25px; border: 2px solid #f0f0f0; background: white; color: #363558; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; gap: 10px;">
                        <span>📊</span> Growth Analytics
                    </button>
                </div>
                
                <h3 style="font-size: 36px; color: #363558; margin-bottom: 20px; font-weight: 800;">Regional <span style="color: #DD3134;">Breakdown</span></h3>
                <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: 16px;">
                    Explore our impact across Uganda's four major regions, with detailed statistics and district coverage.
                </p>
            </div>

            <!-- Region Cards Grid -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
                
                <!-- Central Region -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                    <div style="background: linear-gradient(135deg, #DD3134, #FF6B6B); color: white; padding: 25px; display: flex; justify-content: space-between; align-items: center; position: relative; overflow: hidden;">
                        <div>
                            <span style="font-weight: 800; font-size: 20px;">Central Region</span>
                            <div style="font-size: 13px; opacity: 0.9; margin-top: 5px;">7 districts • Capital area</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.2); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; backdrop-filter: blur(10px);">
                            🏙️
                        </div>
                    </div>
                    
                    <div style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px;">
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #DD3134; margin-bottom: 5px;">175</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Navigators</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #DD3134; margin-bottom: 5px;">4,880</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Mothers</div>
                            </div>
                        </div>
                        
                        <div style="border-top: 1px solid #f0f0f0; padding-top: 20px;">
                            <div style="font-size: 14px; color: #363558; font-weight: 600; margin-bottom: 15px;">Key Districts</div>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                <span style="font-size: 12px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Kampala</span>
                                <span style="font-size: 12px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Wakiso</span>
                                <span style="font-size: 12px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Mukono</span>
                                <span style="font-size: 12px; background: rgba(221,49,52,0.1); color: #DD3134; padding: 6px 12px; border-radius: 15px; font-weight: 600;">+4 more</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Eastern Region -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                    <div style="background: linear-gradient(135deg, #46DE48, #80E681); color: white; padding: 25px; display: flex; justify-content: space-between; align-items: center; position: relative; overflow: hidden;">
                        <div>
                            <span style="font-weight: 800; font-size: 20px;">Eastern Region</span>
                            <div style="font-size: 13px; opacity: 0.9; margin-top: 5px;">5 districts • Agricultural hub</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.2); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; backdrop-filter: blur(10px);">
                            🌄
                        </div>
                    </div>
                    
                    <div style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px;">
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #46DE48; margin-bottom: 5px;">86</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Navigators</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #46DE48; margin-bottom: 5px;">2,500</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Mothers</div>
                            </div>
                        </div>
                        
                        <div style="border-top: 1px solid #f0f0f0; padding-top: 20px;">
                            <div style="font-size: 14px; color: #363558; font-weight: 600; margin-bottom: 15px;">Key Districts</div>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                <span style="font-size: 12px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Jinja</span>
                                <span style="font-size: 12px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Mbale</span>
                                <span style="font-size: 12px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Soroti</span>
                                <span style="font-size: 12px; background: rgba(70,222,72,0.1); color: #46DE48; padding: 6px 12px; border-radius: 15px; font-weight: 600;">+2 more</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Northern Region -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                    <div style="background: linear-gradient(135deg, #91746E, #DCCEC1); color: white; padding: 25px; display: flex; justify-content: space-between; align-items: center; position: relative; overflow: hidden;">
                        <div>
                            <span style="font-weight: 800; font-size: 20px;">Northern Region</span>
                            <div style="font-size: 13px; opacity: 0.9; margin-top: 5px;">6 districts • Post-conflict recovery</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.2); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; backdrop-filter: blur(10px);">
                            🌾
                        </div>
                    </div>
                    
                    <div style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px;">
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #91746E; margin-bottom: 5px;">111</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Navigators</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #91746E; margin-bottom: 5px;">3,220</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Mothers</div>
                            </div>
                        </div>
                        
                        <div style="border-top: 1px solid #f0f0f0; padding-top: 20px;">
                            <div style="font-size: 14px; color: #363558; font-weight: 600; margin-bottom: 15px;">Key Districts</div>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                <span style="font-size: 12px; background: rgba(145,116,110,0.1); color: #91746E; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Gulu</span>
                                <span style="font-size: 12px; background: rgba(145,116,110,0.1); color: #91746E; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Lira</span>
                                <span style="font-size: 12px; background: rgba(145,116,110,0.1); color: #91746E; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Arua</span>
                                <span style="font-size: 12px; background: rgba(145,116,110,0.1); color: #91746E; padding: 6px 12px; border-radius: 15px; font-weight: 600;">+3 more</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Western Region -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.4s ease;">
                    <div style="background: linear-gradient(135deg, #808FBD, #A3B4E0); color: white; padding: 25px; display: flex; justify-content: space-between; align-items: center; position: relative; overflow: hidden;">
                        <div>
                            <span style="font-weight: 800; font-size: 20px;">Western Region</span>
                            <div style="font-size: 13px; opacity: 0.9; margin-top: 5px;">6 districts • Tourism & agriculture</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.2); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; backdrop-filter: blur(10px);">
                            🏔️
                        </div>
                    </div>
                    
                    <div style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px;">
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #808FBD; margin-bottom: 5px;">100</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Navigators</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 32px; font-weight: 800; color: #808FBD; margin-bottom: 5px;">2,860</div>
                                <div style="font-size: 12px; color: #808FBD; font-weight: 600;">Mothers</div>
                            </div>
                        </div>
                        
                        <div style="border-top: 1px solid #f0f0f0; padding-top: 20px;">
                            <div style="font-size: 14px; color: #363558; font-weight: 600; margin-bottom: 15px;">Key Districts</div>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                <span style="font-size: 12px; background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Mbarara</span>
                                <span style="font-size: 12px; background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Kabale</span>
                                <span style="font-size: 12px; background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 12px; border-radius: 15px; font-weight: 600;">Fort Portal</span>
                                <span style="font-size: 12px; background: rgba(128,143,189,0.1); color: #808FBD; padding: 6px 12px; border-radius: 15px; font-weight: 600;">+3 more</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expansion Goals -->
    <section style="padding: 100px 10%; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); text-align: center; position: relative;">

        <!-- Background decorative elements -->
        <div style="position: absolute; top: 20%; right: 10%; width: 100px; height: 100px; border-radius: 30px; background: linear-gradient(135deg, rgba(70,222,72,0.05), rgba(70,222,72,0)); transform: rotate(25deg);"></div>
        <div style="position: absolute; bottom: 30%; left: 10%; width: 150px; height: 150px; border: 2px dashed #DD3134; border-radius: 50%; opacity: 0.1;"></div>
        
        <div style="position: relative; z-index: 2; max-width: 1000px; margin: 0 auto;">
            <div style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 700; margin-bottom: 25px; gap: 10px;">
                <span style="color: #46DE48; font-size: 20px;">📈</span> FUTURE EXPANSION
            </div>
            
            <h2 style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">Expanding Our <span style="color: #46DE48;">National Reach</span></h2>
            
            <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">
                By 2025, we aim to extend our life-saving services to all 135 districts in Uganda, ensuring every mother, regardless of location, has access to a trained youth navigator for maternal health support.
            </p>

            <!-- Goal Cards -->
            <div style="display: flex; justify-content: center; gap: 40px; margin-bottom: 60px; flex-wrap: wrap;">
                <div style="background: white; padding: 40px 50px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border-top: 6px solid #DD3134;">
                    <div style="font-size: 56px; font-weight: 800; color: #DD3134; margin-bottom: 15px; line-height: 1;">111</div>
                    <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Districts to Expand</div>
                    <div style="font-size: 13px; color: #808FBD;">Remaining for national coverage</div>
                </div>
                
                <div style="background: white; padding: 40px 50px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border-top: 6px solid #46DE48;">
                    <div style="font-size: 56px; font-weight: 800; color: #46DE48; margin-bottom: 15px; line-height: 1;">2025</div>
                    <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">Target Year</div>
                    <div style="font-size: 13px; color: #808FBD;">For nationwide coverage</div>
                </div>
                
                <div style="background: white; padding: 40px 50px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border-top: 6px solid #808FBD;">
                    <div style="font-size: 56px; font-weight: 800; color: #808FBD; margin-bottom: 15px; line-height: 1;">1,500+</div>
                    <div style="font-size: 16px; color: #363558; font-weight: 700; margin-bottom: 10px;">New Navigators</div>
                    <div style="font-size: 13px; color: #808FBD;">To train by 2025</div>
                </div>
            </div>

            <!-- Progress Bar -->
            <div style="max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">
                <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                    <div style="font-size: 16px; color: #363558; font-weight: 700;">Current Coverage</div>
                    <div style="font-size: 16px; color: #DD3134; font-weight: 800;">18%</div>
                </div>
                
                <div style="height: 12px; background: #f0f0f0; border-radius: 6px; overflow: hidden; margin-bottom: 10px;">
                    <div style="width: 18%; height: 100%; background: linear-gradient(90deg, #DD3134, #46DE48); border-radius: 6px;"></div>
                </div>
                
                <div style="display: flex; justify-content: space-between; font-size: 13px; color: #808FBD;">
                    <div>24 Districts Active</div>
                    <div>135 Total Districts</div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection