@extends('layouts.apps')
@section('content')

<section style="margin: 0; padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 5%) clamp(40px, 6vw, 120px); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

    <!-- Geometric background elements -->
    <div style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05; display: none;"></div>
    <div style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #46DE48; opacity: 0.05; display: none;"></div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <!-- Hero Section -->
        <div style="text-align: center; margin-bottom: clamp(40px, 8vw, 80px); padding: 0 clamp(10px, 3vw, 0);">
            <div style="display: inline-block; padding: clamp(8px, 2vw, 10px) clamp(20px, 4vw, 30px); background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; margin-bottom: clamp(15px, 3vw, 25px); letter-spacing: 0.5px; box-shadow: 0 8px 20px rgba(221,49,52,0.3);">
                <svg style="width: clamp(14px, 2vw, 16px); height: clamp(14px, 2vw, 16px); fill: white; vertical-align: middle; margin-right: 6px;" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                SUPPORT MATERNAL HEALTH
            </div>
            
            <h1 style="font-size: clamp(36px, 7vw, 70px); line-height: 1.1; margin: 0 0 clamp(15px, 3vw, 25px) 0; color: #363558; font-weight: 800; letter-spacing: -0.5px;">
                Donate to <span style="color: #DD3134;">Save Mothers</span>
            </h1>
            
            <p style="font-size: clamp(16px, 3vw, 20px); line-height: 1.6; color: #5a5a5a; margin-bottom: clamp(30px, 5vw, 50px); max-width: 100%;">
                Your donation directly supports maternal health services, youth navigator training, and emergency transport coordination. Every contribution brings us closer to a Uganda where no mother dies giving life.
            </p>
            
            <div style="display: flex; gap: clamp(12px, 2vw, 20px); justify-content: center; flex-wrap: wrap;">
                <a href="#donation-options" style="text-decoration: none;">
                    <button style="background: linear-gradient(90deg, #363558, #434961); color: white; border: none; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 17px); font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 12px 30px rgba(54,53,88,0.25); white-space: nowrap;">
                        <svg style="width: clamp(16px, 2.5vw, 20px); height: clamp(16px, 2.5vw, 20px); fill: white;" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                        Donate Now
                    </button>
                </a>
                <a href="#impact-calculator" style="text-decoration: none;">
                    <button style="background: white; color: #363558; border: 2px solid #363558; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 17px); font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); white-space: nowrap;">
                        <svg style="width: clamp(16px, 2.5vw, 20px); height: clamp(16px, 2.5vw, 20px); fill: #363558;" viewBox="0 0 24 24">
                            <path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                        </svg>
                        See Your Impact
                    </button>
                </a>
            </div>
        </div>

        <!-- Urgent Call to Action -->
        <div style="background: linear-gradient(135deg, #DD3134, #FF6B6B); border-radius: clamp(20px, 4vw, 30px); padding: clamp(30px, 6vw, 60px); margin-bottom: clamp(40px, 8vw, 80px); position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 20% 80%, white 2px, transparent 2px); background-size: 40px 40px; display: none;"></div>
            
            <div style="position: relative; z-index: 2; display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr)); gap: clamp(30px, 5vw, 60px); align-items: center;">
                <div>
                    <div style="display: inline-flex; align-items: center; padding: clamp(8px, 2vw, 10px) clamp(15px, 3vw, 25px); background: rgba(255,255,255,0.2); color: white; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; margin-bottom: clamp(15px, 3vw, 25px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                        <svg style="width: clamp(14px, 2vw, 16px); height: clamp(14px, 2vw, 16px); fill: white; margin-right: 6px;" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        URGENT NEED
                    </div>
                    
                    <h2 style="font-size: clamp(28px, 5vw, 52px); color: white; margin: 0 0 clamp(15px, 3vw, 20px) 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                        Every <span style="color: #363558;">$50</span> Sponsors a Mother's Journey
                    </h2>
                    
                    <p style="font-size: clamp(16px, 3vw, 18px); color: rgba(255,255,255,0.9); line-height: 1.6; margin-bottom: clamp(20px, 4vw, 30px);">
                        From her first prenatal visit to postpartum care, your donation covers a mother's complete maternal health journey. No mother should face pregnancy alone.
                    </p>
                    
                    <div style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap;">
                        <button style="background: white; color: #DD3134; border: none; padding: clamp(14px, 2.5vw, 16px) clamp(20px, 3vw, 35px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 800; cursor: pointer; display: flex; align-items: center; gap: 8px; white-space: nowrap;">
                            <svg style="width: clamp(16px, 2.5vw, 18px); height: clamp(16px, 2.5vw, 18px); fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            Sponsor a Mother
                        </button>
                        <button style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3); padding: clamp(14px, 2.5vw, 16px) clamp(20px, 3vw, 35px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; backdrop-filter: blur(10px); white-space: nowrap;">
                            Meet the Mothers
                        </button>
                    </div>
                </div>
                
                <div>
                    <div style="background: rgba(255,255,255,0.1); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <div style="text-align: center; margin-bottom: clamp(20px, 4vw, 30px);">
                            <div style="font-size: clamp(32px, 6vw, 42px); font-weight: 800; color: white; margin-bottom: 8px;">2,500+</div>
                            <div style="color: rgba(255,255,255,0.9); font-size: clamp(16px, 3vw, 18px);">Mothers Waiting for Sponsorship</div>
                        </div>
                        
                        <div style="height: 10px; background: rgba(255,255,255,0.2); border-radius: 5px; margin-bottom: clamp(15px, 3vw, 20px); overflow: hidden;">
                            <div style="width: 65%; height: 100%; background: white; border-radius: 5px;"></div>
                        </div>
                        
                        <div style="display: flex; justify-content: space-between; color: white; font-size: clamp(12px, 2.5vw, 14px); margin-bottom: clamp(20px, 4vw, 30px);">
                            <div>1,625 Sponsored</div>
                            <div>65% Funded</div>
                        </div>
                        
                        <button style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: clamp(14px, 2.5vw, 16px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                            <svg style="width: clamp(16px, 2.5vw, 18px); height: clamp(16px, 2.5vw, 18px); fill: white;" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            Help Close the Gap
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donation Options -->
        <div id="donation-options" style="margin-bottom: clamp(50px, 8vw, 100px);">
            <div style="text-align: center; margin-bottom: clamp(30px, 6vw, 60px); padding: 0 clamp(10px, 3vw, 0);">
                <h2 style="font-size: clamp(28px, 5vw, 52px); color: #363558; margin: 0 0 clamp(15px, 3vw, 20px) 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                    Choose Your <span style="color: #DD3134;">Impact</span>
                </h2>
                <p style="font-size: clamp(16px, 3vw, 19px); color: #5a5a5a; max-width: 100%; margin: 0 auto; line-height: 1.6;">
                    Select a donation amount or customize your gift to support specific maternal health needs
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 250px), 1fr)); gap: clamp(15px, 3vw, 25px); margin-bottom: clamp(30px, 6vw, 60px); padding: 0 clamp(10px, 3vw, 0);">

                <!-- Option 1 -->
                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 2px solid transparent; transition: all 0.3s ease; cursor: pointer; height: 100%;">
                    <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px);">
                        <svg style="width: clamp(32px, 5vw, 40px); height: clamp(32px, 5vw, 40px); fill: #46DE48;" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div style="font-size: clamp(32px, 5vw, 42px); font-weight: 800; color: #363558; margin-bottom: clamp(10px, 2vw, 15px);">$50</div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">Mother's Full Journey</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        Complete maternal care package for one mother
                    </p>
                </div>

                <!-- Option 2 -->
                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 2px solid #DD3134; cursor: pointer; transform: none; height: 100%;">
                    <div style="background: rgba(221,49,52,0.1); color: #DD3134; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px); position: relative;">
                        <svg style="width: clamp(32px, 5vw, 40px); height: clamp(32px, 5vw, 40px); fill: #DD3134;" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                        <div style="position: absolute; top: -8px; right: -8px; background: #DD3134; color: white; width: clamp(25px, 4vw, 30px); height: clamp(25px, 4vw, 30px); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: clamp(10px, 1.8vw, 12px); font-weight: 700;">
                            POPULAR
                        </div>
                    </div>
                    <div style="font-size: clamp(32px, 5vw, 42px); font-weight: 800; color: #363558; margin-bottom: clamp(10px, 2vw, 15px);">$100</div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">Emergency Transport Fund</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        Covers emergency transport for 2 mothers in critical need
                    </p>
                </div>

                <!-- Option 3 -->
                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 2px solid transparent; cursor: pointer; height: 100%;">
                    <div style="background: rgba(145,116,110,0.1); color: #91746E; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px);">
                        <svg style="width: clamp(32px, 5vw, 40px); height: clamp(32px, 5vw, 40px); fill: #91746E;" viewBox="0 0 24 24">
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                        </svg>
                    </div>
                    <div style="font-size: clamp(32px, 5vw, 42px); font-weight: 800; color: #363558; margin-bottom: clamp(10px, 2vw, 15px);">$250</div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">Youth Navigator Training</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        Trains one youth navigator to support 25+ mothers
                    </p>
                </div>

                <!-- Option 4 -->
                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 2px solid transparent; cursor: pointer; height: 100%;">
                    <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); border-radius: clamp(15px, 3vw, 20px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px);">
                        <svg style="width: clamp(32px, 5vw, 40px); height: clamp(32px, 5vw, 40px); fill: #808FBD;" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div style="font-size: clamp(32px, 5vw, 42px); font-weight: 800; color: #363558; margin-bottom: clamp(10px, 2vw, 15px);">Custom</div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">Choose Your Amount</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        Support any amount that fits your capacity
                    </p>
                </div>
            </div>

            <!-- Custom Amount -->
            <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 50px); box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
                <h3 style="font-size: clamp(22px, 4vw, 28px); color: #363558; margin: 0 0 clamp(20px, 4vw, 30px) 0; font-weight: 800; text-align: center;">Enter Custom Amount</h3>
                
                <div style="display: grid; grid-template-columns: 1fr; gap: clamp(30px, 5vw, 40px);">
                    <!-- Amount Selection -->
                    <div>
                        <div style="margin-bottom: clamp(20px, 4vw, 30px);">
                            <label style="display: block; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; margin-bottom: clamp(10px, 2vw, 15px);">Select Amount (USD)</label>
                            <div style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap; margin-bottom: clamp(15px, 3vw, 20px);">
                                <button style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;">$25</button>
                                <button style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;">$50</button>
                                <button style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;">$100</button>
                                <button style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;">$250</button>
                                <button style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;">$500</button>
                            </div>
                            <div style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap;">
                                <div style="flex: 1 1 200px; position: relative; min-width: 0;">
                                    <span style="position: absolute; left: clamp(15px, 3vw, 20px); top: 50%; transform: translateY(-50%); color: #5a5a5a; font-weight: 600; font-size: clamp(16px, 3vw, 18px);">$</span>
                                    <input type="number" style="width: 100%; padding: clamp(15px, 3vw, 18px) clamp(15px, 3vw, 20px) clamp(15px, 3vw, 18px) clamp(35px, 5vw, 40px); border-radius: 12px; border: 2px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: clamp(16px, 3vw, 18px); font-weight: 700; outline: none; min-width: 0;" placeholder="0.00">
                                </div>
                                <select style="padding: clamp(15px, 3vw, 18px) clamp(15px, 3vw, 25px); border-radius: 12px; border: 2px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; outline: none; min-width: 120px; flex-shrink: 0;">
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GBP">GBP</option>
                                </select>
                            </div>
                        </div>

                        <div style="margin-bottom: clamp(20px, 4vw, 30px);">
                            <label style="display: block; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; margin-bottom: clamp(10px, 2vw, 15px);">Giving Frequency</label>
                            <div style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap;">
                                <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: clamp(12px, 2vw, 14px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(13px, 2.5vw, 15px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 100px;">One-time</button>
                                <button style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(12px, 2vw, 14px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(13px, 2.5vw, 15px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 100px;">Monthly</button>
                                <button style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(12px, 2vw, 14px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(13px, 2.5vw, 15px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 100px;">Quarterly</button>
                            </div>
                        </div>

                        <div style="margin-bottom: clamp(20px, 4vw, 30px);">
                            <label style="display: block; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; margin-bottom: clamp(10px, 2vw, 15px);">Designate Your Gift (Optional)</label>
                            <select style="width: 100%; padding: clamp(15px, 3vw, 18px) clamp(15px, 3vw, 25px); border-radius: 12px; border: 2px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; outline: none;">
                                <option value="">Where most needed</option>
                                <option value="emergency">Emergency Transport Fund</option>
                                <option value="training">Youth Navigator Training</option>
                                <option value="equipment">Medical Equipment</option>
                                <option value="education">Health Education Materials</option>
                                <option value="research">Maternal Health Research</option>
                            </select>
                        </div>

                        <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: clamp(16px, 3vw, 20px); border-radius: 12px; font-size: clamp(16px, 3vw, 18px); font-weight: 800; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: clamp(8px, 2vw, 12px); box-shadow: 0 10px 25px rgba(221,49,52,0.3);">
                            <svg style="width: clamp(18px, 3vw, 22px); height: clamp(18px, 3vw, 22px); fill: white;" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            Continue to Payment
                        </button>
                    </div>

                    <!-- Impact Preview -->
                    <div>
                        <div style="background: linear-gradient(135deg, #363558, #434961); border-radius: clamp(15px, 3vw, 20px); padding: clamp(25px, 4vw, 35px); color: white; margin-bottom: clamp(20px, 4vw, 25px);">
                            <h4 style="font-size: clamp(18px, 3vw, 22px); font-weight: 800; margin: 0 0 clamp(15px, 3vw, 25px) 0; text-align: center;">Your Impact Preview</h4>
                            
                            <div style="background: rgba(255,255,255,0.1); border-radius: 15px; padding: clamp(15px, 3vw, 25px); margin-bottom: clamp(15px, 3vw, 25px);">
                                <div style="display: flex; justify-content: space-between; margin-bottom: clamp(10px, 2vw, 15px);">
                                    <div style="font-size: clamp(14px, 2.5vw, 16px); opacity: 0.9;">Donation Amount:</div>
                                    <div style="font-size: clamp(18px, 3vw, 20px); font-weight: 800;">$100.00</div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: clamp(10px, 2vw, 15px);">
                                    <div style="font-size: clamp(14px, 2.5vw, 16px); opacity: 0.9;">Frequency:</div>
                                    <div style="font-size: clamp(16px, 3vw, 18px); font-weight: 700;">One-time</div>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <div style="font-size: clamp(14px, 2.5vw, 16px); opacity: 0.9;">Designation:</div>
                                    <div style="font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; color: #46DE48;">Emergency Transport</div>
                                </div>
                            </div>

                            <div style="text-align: center;">
                                <div style="font-size: clamp(32px, 6vw, 42px); font-weight: 800; color: #46DE48; margin-bottom: 8px;">2</div>
                                <div style="font-size: clamp(16px, 3vw, 18px); font-weight: 700; margin-bottom: 5px;">Mothers Transported Safely</div>
                                <div style="font-size: clamp(12px, 2.5vw, 14px); opacity: 0.8;">Your donation covers emergency transport for 2 mothers facing complications</div>
                            </div>
                        </div>

                        <div>
                            <div style="display: flex; align-items: center; gap: clamp(8px, 2vw, 12px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <svg style="width: clamp(16px, 3vw, 20px); height: clamp(16px, 3vw, 20px); fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600; font-size: clamp(14px, 2.5vw, 16px);">100% goes directly to programs</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: clamp(8px, 2vw, 12px); margin-bottom: clamp(10px, 2vw, 15px);">
                                <svg style="width: clamp(16px, 3vw, 20px); height: clamp(16px, 3vw, 20px); fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600; font-size: clamp(14px, 2.5vw, 16px);">Tax-deductible in the US</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: clamp(8px, 2vw, 12px);">
                                <svg style="width: clamp(16px, 3vw, 20px); height: clamp(16px, 3vw, 20px); fill: #46DE48;" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <span style="color: #363558; font-weight: 600; font-size: clamp(14px, 2.5vw, 16px);">Secure encrypted payment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Impact Calculator -->
        <div id="impact-calculator" style="margin-bottom: clamp(50px, 8vw, 100px);">
            <div style="text-align: center; margin-bottom: clamp(30px, 6vw, 60px); padding: 0 clamp(10px, 3vw, 0);">
                <h2 style="font-size: clamp(28px, 5vw, 52px); color: #363558; margin: 0 0 clamp(15px, 3vw, 20px) 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                    Your Donation's <span style="color: #DD3134;">Impact</span>
                </h2>
                <p style="font-size: clamp(16px, 3vw, 19px); color: #5a5a5a; max-width: 100%; margin: 0 auto; line-height: 1.6;">
                    See exactly how your contribution transforms maternal healthcare in Uganda
                </p>
            </div>

            <div style="background: white; border-radius: clamp(20px, 4vw, 30px); padding: clamp(30px, 6vw, 60px); box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
                <div style="display: grid; grid-template-columns: 1fr; gap: clamp(30px, 6vw, 60px); align-items: center;">
                    <!-- Calculator -->
                    <div>
                        <h3 style="font-size: clamp(24px, 4vw, 32px); color: #363558; margin: 0 0 clamp(20px, 4vw, 30px) 0; font-weight: 800; text-align: center;">Calculate Your Impact</h3>
                        
                        <div style="margin-bottom: clamp(20px, 4vw, 30px);">
                            <label style="display: block; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; margin-bottom: clamp(10px, 2vw, 15px);">Monthly Donation Amount</label>
                            <div style="position: relative;">
                                <span style="position: absolute; left: clamp(15px, 3vw, 20px); top: 50%; transform: translateY(-50%); color: #5a5a5a; font-weight: 600; font-size: clamp(20px, 4vw, 24px);">$</span>
                                <input type="range" min="10" max="500" value="50" style="width: 100%; height: 10px; -webkit-appearance: none; background: linear-gradient(90deg, #DD3134, #FF6B6B); border-radius: 5px; outline: none; margin-bottom: clamp(15px, 3vw, 20px);">
                                <div style="display: flex; justify-content: space-between; color: #5a5a5a; font-size: clamp(12px, 2.5vw, 14px); flex-wrap: wrap; gap: 5px;">
                                    <span>$10</span>
                                    <span>$50</span>
                                    <span>$100</span>
                                    <span>$250</span>
                                    <span>$500</span>
                                </div>
                            </div>
                        </div>

                        <div style="text-align: center; margin-bottom: clamp(25px, 5vw, 40px);">
                            <div style="font-size: clamp(48px, 8vw, 72px); font-weight: 800; color: #DD3134; line-height: 1;">$50</div>
                            <div style="color: #5a5a5a; font-size: clamp(16px, 3vw, 18px);">per month</div>
                        </div>

                        <button style="background: linear-gradient(90deg, #46DE48, #80E681); color: white; border: none; padding: clamp(16px, 3vw, 20px); border-radius: 12px; font-size: clamp(16px, 3vw, 18px); font-weight: 800; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: clamp(8px, 2vw, 12px);">
                            <svg style="width: clamp(18px, 3vw, 22px); height: clamp(18px, 3vw, 22px); fill: white;" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            Start Monthly Giving
                        </button>
                    </div>

                    <!-- Impact Results -->
                    <div>
                        <div style="background: linear-gradient(135deg, #363558, #434961); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); color: white;">
                            <h4 style="font-size: clamp(20px, 4vw, 24px); font-weight: 800; margin: 0 0 clamp(20px, 4vw, 30px) 0; text-align: center;">Your Yearly Impact</h4>
                            
                            <div style="display: grid; gap: clamp(15px, 3vw, 20px); margin-bottom: clamp(20px, 4vw, 30px);">
                                <div style="display: flex; align-items: center; gap: clamp(15px, 3vw, 20px); padding: clamp(15px, 3vw, 20px); background: rgba(255,255,255,0.1); border-radius: 15px;">
                                    <div style="background: rgba(70,222,72,0.2); color: #46DE48; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: clamp(20px, 4vw, 24px); font-weight: 800; flex-shrink: 0;">6</div>
                                    <div>
                                        <div style="font-size: clamp(16px, 3vw, 18px); font-weight: 700; margin-bottom: 5px;">Mothers Fully Supported</div>
                                        <div style="font-size: clamp(12px, 2.5vw, 14px); opacity: 0.8;">Complete prenatal to postpartum care</div>
                                    </div>
                                </div>

                                <div style="display: flex; align-items: center; gap: clamp(15px, 3vw, 20px); padding: clamp(15px, 3vw, 20px); background: rgba(255,255,255,0.1); border-radius: 15px;">
                                    <div style="background: rgba(221,49,52,0.2); color: #DD3134; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: clamp(20px, 4vw, 24px); font-weight: 800; flex-shrink: 0;">12</div>
                                    <div>
                                        <div style="font-size: clamp(16px, 3vw, 18px); font-weight: 700; margin-bottom: 5px;">Emergency Transports</div>
                                        <div style="font-size: clamp(12px, 2.5vw, 14px); opacity: 0.8;">For mothers facing complications</div>
                                    </div>
                                </div>

                                <div style="display: flex; align-items: center; gap: clamp(15px, 3vw, 20px); padding: clamp(15px, 3vw, 20px); background: rgba(255,255,255,0.1); border-radius: 15px;">
                                    <div style="background: rgba(145,116,110,0.2); color: #91746E; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: clamp(20px, 4vw, 24px); font-weight: 800; flex-shrink: 0;">1</div>
                                    <div>
                                        <div style="font-size: clamp(16px, 3vw, 18px); font-weight: 700; margin-bottom: 5px;">Youth Navigator Training</div>
                                        <div style="font-size: clamp(12px, 2.5vw, 14px); opacity: 0.8;">Partial support for training</div>
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: center; padding-top: clamp(20px, 4vw, 30px); border-top: 1px solid rgba(255,255,255,0.1);">
                                <div style="font-size: clamp(24px, 5vw, 32px); font-weight: 800; color: #46DE48; margin-bottom: 8px;">$600</div>
                                <div style="font-size: clamp(14px, 2.5vw, 16px); opacity: 0.9;">Total yearly impact from $50/month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust & Security -->
        <div style="margin-bottom: clamp(50px, 8vw, 100px);">
            <div style="text-align: center; margin-bottom: clamp(30px, 6vw, 60px); padding: 0 clamp(10px, 3vw, 0);">
                <h2 style="font-size: clamp(28px, 5vw, 52px); color: #363558; margin: 0 0 clamp(15px, 3vw, 20px) 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                    Donate With <span style="color: #46DE48;">Confidence</span>
                </h2>
                <p style="font-size: clamp(16px, 3vw, 19px); color: #5a5a5a; max-width: 100%; margin: 0 auto; line-height: 1.6;">
                    Your security and trust are our top priorities
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 250px), 1fr)); gap: clamp(20px, 4vw, 30px); padding: 0 clamp(10px, 3vw, 0);">
                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); height: 100%;">
                    <div style="background: rgba(70,222,72,0.1); color: #46DE48; width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px);">
                        <svg style="width: clamp(24px, 4vw, 32px); height: clamp(24px, 4vw, 32px); fill: #46DE48;" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">100% to Programs</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        Every dollar goes directly to maternal health services. Administrative costs covered separately.
                    </p>
                </div>

                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); height: 100%;">
                    <div style="background: rgba(221,49,52,0.1); color: #DD3134; width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px);">
                        <svg style="width: clamp(24px, 4vw, 32px); height: clamp(24px, 4vw, 32px); fill: #DD3134;" viewBox="0 0 24 24">
                            <path d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2H8.9V6z"/>
                        </svg>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">Bank-Level Security</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        256-bit SSL encryption protects your payment information. We never store credit card details.
                    </p>
                </div>

                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); height: 100%;">
                    <div style="background: rgba(145,116,110,0.1); color: #91746E; width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px);">
                        <svg style="width: clamp(24px, 4vw, 32px); height: clamp(24px, 4vw, 32px); fill: #91746E;" viewBox="0 0 24 24">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                        </svg>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">Real-Time Updates</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        Receive regular impact reports showing exactly how your donation is making a difference.
                    </p>
                </div>

                <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px) clamp(20px, 3vw, 30px); text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); height: 100%;">
                    <div style="background: rgba(128,143,189,0.1); color: #808FBD; width: clamp(60px, 8vw, 70px); height: clamp(60px, 8vw, 70px); border-radius: clamp(12px, 2vw, 15px); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(20px, 3vw, 25px);">
                        <svg style="width: clamp(24px, 4vw, 32px); height: clamp(24px, 4vw, 32px); fill: #808FBD;" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                    </div>
                    <h3 style="font-size: clamp(18px, 3vw, 22px); color: #363558; margin: 0 0 clamp(10px, 2vw, 15px) 0; font-weight: 700;">Tax Deductible</h3>
                    <p style="color: #5a5a5a; margin: 0; font-size: clamp(14px, 2.5vw, 15px); line-height: 1.5;">
                        SafeMoms Navigator is a registered 501(c)(3) organization. All donations are tax-deductible.
                    </p>
                </div>
            </div>
        </div>

        <!-- Payment Methods -->
        <div style="background: white; border-radius: clamp(20px, 4vw, 30px); padding: clamp(30px, 6vw, 60px); margin-bottom: clamp(40px, 8vw, 80px); box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
            <div style="text-align: center; margin-bottom: clamp(30px, 5vw, 50px);">
                <h3 style="font-size: clamp(24px, 4vw, 32px); color: #363558; margin: 0 0 clamp(15px, 3vw, 20px) 0; font-weight: 800;">Secure Payment Methods</h3>
                <p style="font-size: clamp(16px, 3vw, 18px); color: #5a5a5a; max-width: 100%; margin: 0 auto; line-height: 1.6;">
                    We accept multiple secure payment options for your convenience
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: clamp(20px, 4vw, 40px); margin-bottom: clamp(30px, 5vw, 50px);">
                <div style="text-align: center;">
                    <div style="background: #f8f9fa; width: clamp(60px, 8vw, 80px); height: clamp(60px, 8vw, 80px); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(10px, 2vw, 15px); font-size: clamp(24px, 4vw, 32px); font-weight: 800; color: #363558;">💳</div>
                    <div style="font-weight: 700; color: #363558; font-size: clamp(14px, 2.5vw, 16px);">Credit/Debit Cards</div>
                </div>
                <div style="text-align: center;">
                    <div style="background: #f8f9fa; width: clamp(60px, 8vw, 80px); height: clamp(60px, 8vw, 80px); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(10px, 2vw, 15px); font-size: clamp(24px, 4vw, 32px); font-weight: 800; color: #363558;">🏦</div>
                    <div style="font-weight: 700; color: #363558; font-size: clamp(14px, 2.5vw, 16px);">Bank Transfer</div>
                </div>
                <div style="text-align: center;">
                    <div style="background: #f8f9fa; width: clamp(60px, 8vw, 80px); height: clamp(60px, 8vw, 80px); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(10px, 2vw, 15px); font-size: clamp(24px, 4vw, 32px); font-weight: 800; color: #363558;">📱</div>
                    <div style="font-weight: 700; color: #363558; font-size: clamp(14px, 2.5vw, 16px);">Mobile Money</div>
                </div>
                <div style="text-align: center;">
                    <div style="background: #f8f9fa; width: clamp(60px, 8vw, 80px); height: clamp(60px, 8vw, 80px); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(10px, 2vw, 15px); font-size: clamp(24px, 4vw, 32px); font-weight: 800; color: #363558;">🎁</div>
                    <div style="font-weight: 700; color: #363558; font-size: clamp(14px, 2.5vw, 16px);">Stock Donations</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div style="text-align: center; padding: clamp(30px, 5vw, 50px); background: linear-gradient(135deg, #363558, #434961); border-radius: clamp(20px, 3vw, 25px); color: white;">
                <h4 style="font-size: clamp(24px, 4vw, 32px); font-weight: 800; margin: 0 0 clamp(15px, 3vw, 20px) 0;">Ready to Make a Difference?</h4>
                <p style="font-size: clamp(16px, 3vw, 18px); color: #DCCEC1; margin: 0 auto clamp(20px, 4vw, 30px) auto; max-width: 100%; line-height: 1.6;">
                    Join thousands of donors who are transforming maternal healthcare in Uganda. Your donation saves lives today.
                </p>
                <button style="background: linear-gradient(90deg, #DD3134, #FF6B6B); color: white; border: none; padding: clamp(16px, 3vw, 20px) clamp(30px, 5vw, 50px); border-radius: 12px; font-size: clamp(16px, 3vw, 18px); font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: clamp(8px, 2vw, 12px); box-shadow: 0 15px 30px rgba(221,49,52,0.3);">
                    <svg style="width: clamp(18px, 3vw, 22px); height: clamp(18px, 3vw, 22px); fill: white;" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    Donate Now & Save Lives
                </button>
            </div>
        </div>

        <!-- Contact for Large Donations -->
        <div style="text-align: center; padding: clamp(30px, 6vw, 60px); background: #f8f9fa; border-radius: clamp(20px, 4vw, 30px);">
            <h3 style="font-size: clamp(24px, 4vw, 32px); color: #363558; margin: 0 0 clamp(15px, 3vw, 20px) 0; font-weight: 800;">Major Gifts & Corporate Giving</h3>
            <p style="font-size: clamp(16px, 3vw, 18px); color: #5a5a5a; margin: 0 auto clamp(20px, 4vw, 30px) auto; max-width: 100%; line-height: 1.6;">
                Interested in making a transformative gift, establishing a named fund, or exploring corporate partnership opportunities? Our development team is here to help.
            </p>
            <button style="background: transparent; color: #363558; border: 2px solid #363558; padding: clamp(14px, 3vw, 18px) clamp(25px, 4vw, 40px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 17px); font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: clamp(8px, 2vw, 12px);">
                <svg style="width: clamp(16px, 2.5vw, 20px); height: clamp(16px, 2.5vw, 20px); fill: #363558;" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                Contact Development Team
            </button>
        </div>

    </div>
</section>

@endsection