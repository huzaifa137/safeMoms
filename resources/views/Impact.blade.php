@extends('layouts.apps')

@section('content')

    <div
        style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #f9f5f0 0%, #ffffff 100%); margin-top: 8em;">

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
                    style="display: inline-flex; align-items: center; padding: 12px 30px; background: linear-gradient(90deg, rgba(128,143,189,0.1), rgba(70,222,72,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.8);">
                    <span style="color: #808FBD; margin-right: 10px;">📊</span> MEASURING OUR IMPACT
                </div>

                <h1
                    style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                    Lives <span style="color: #DD3134;">Changed</span>,<br>Stories <span style="color: #46DE48;">Told</span>
                </h1>

                <p style="font-size: 20px; color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    Every number represents a real mother, a real baby, and a real story of hope. Explore our measurable
                    impact through data visualization and human stories.
                </p>
            </div>
        </section>

        <!-- Impact Stats -->
        <section
            style="padding: 80px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
            <!-- Grid Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: radial-gradient(circle at 25% 25%, #46DE48 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 30px; text-align: center;">

                    <!-- Stat 1 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                        <div
                            style="width: 60px; height: 60px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(221,49,52,0.3);">
                            👤
                        </div>
                        <div style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">12,847</div>
                        <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Mothers Supported
                        </div>
                        <div style="font-size: 12px; opacity: 0.7;">Since program inception</div>
                    </div>

                    <!-- Stat 2 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                        <div
                            style="width: 60px; height: 60px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(145,116,110,0.3);">
                            👶
                        </div>
                        <div style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">11,234</div>
                        <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Safe Deliveries
                        </div>
                        <div style="font-size: 12px; opacity: 0.7;">Facility-based births</div>
                    </div>

                    <!-- Stat 3 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                        <div
                            style="width: 60px; height: 60px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(70,222,72,0.3);">
                            ❤️
                        </div>
                        <div style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">98%</div>
                        <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Facility Birth
                            Rate</div>
                        <div style="font-size: 12px; opacity: 0.7;">Versus 65% national average</div>
                    </div>

                    <!-- Stat 4 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                        <div
                            style="width: 60px; height: 60px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(128,143,189,0.3);">
                            📍
                        </div>
                        <div style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">24</div>
                        <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Active Districts
                        </div>
                        <div style="font-size: 12px; opacity: 0.7;">Across 4 regions of Uganda</div>
                    </div>

                    <!-- Stat 5 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                        <div
                            style="width: 60px; height: 60px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(221,49,52,0.3);">
                            🎓
                        </div>
                        <div style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">350+</div>
                        <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Youth Navigators
                        </div>
                        <div style="font-size: 12px; opacity: 0.7;">Trained and deployed</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Growth Journey -->
        <section style="padding: 100px 10%; background: white; position: relative;">
            <!-- Background Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(45deg, #46DE48 0px, #46DE48 1px, transparent 1px, transparent 30px);">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; text-align: center;">
                <div
                    style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 800; margin-bottom: 25px; gap: 10px;">
                    <span style="color: #46DE48; font-size: 20px;">📈</span> GROWTH JOURNEY
                </div>

                <h2 style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                    From <span style="color: #DD3134;">250</span> to <span style="color: #46DE48;">12,847+</span>
                </h2>

                <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">
                    Our exponential growth journey from serving 250 mothers in 2019 to over 12,000 today demonstrates the
                    scalability and impact of our model.
                </p>

                <!-- Growth Visualization -->
                <div
                    style="background: white; border-radius: 30px; padding: 50px; box-shadow: 0 40px 80px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                    <!-- Chart Container -->
                    <div style="height: 400px; position: relative; margin-bottom: 40px;">
                        <!-- Y-axis Labels -->
                        <div
                            style="position: absolute; left: 0; top: 0; bottom: 40px; width: 60px; display: flex; flex-direction: column; justify-content: space-between; padding: 20px 0;">
                            <div style="font-size: 12px; color: #808FBD; font-weight: 600; text-align: right;">12,000</div>
                            <div style="font-size: 12px; color: #808FBD; font-weight: 600; text-align: right;">9,000</div>
                            <div style="font-size: 12px; color: #808FBD; font-weight: 600; text-align: right;">6,000</div>
                            <div style="font-size: 12px; color: #808FBD; font-weight: 600; text-align: right;">3,000</div>
                            <div style="font-size: 12px; color: #808FBD; font-weight: 600; text-align: right;">0</div>
                        </div>

                        <!-- Chart Area -->
                        <div
                            style="position: absolute; left: 60px; right: 0; top: 0; bottom: 40px; border-bottom: 2px solid #f0f0f0; border-left: 2px solid #f0f0f0;">
                            <!-- Grid Lines -->
                            <div
                                style="position: absolute; left: 0; right: 0; top: 0%; height: 1px; background: rgba(0,0,0,0.05);">
                            </div>
                            <div
                                style="position: absolute; left: 0; right: 0; top: 25%; height: 1px; background: rgba(0,0,0,0.05);">
                            </div>
                            <div
                                style="position: absolute; left: 0; right: 0; top: 50%; height: 1px; background: rgba(0,0,0,0.05);">
                            </div>
                            <div
                                style="position: absolute; left: 0; right: 0; top: 75%; height: 1px; background: rgba(0,0,0,0.05);">
                            </div>
                            <div
                                style="position: absolute; left: 0; right: 0; top: 100%; height: 1px; background: rgba(0,0,0,0.05);">
                            </div>

                            <!-- Data Points - Mothers Supported -->
                            <div
                                style="position: absolute; left: 8%; bottom: 2%; width: 40px; height: 4%; background: #DD3134; border-radius: 4px 4px 0 0;">
                            </div>
                            <div
                                style="position: absolute; left: 24%; bottom: 10%; width: 40px; height: 20%; background: #DD3134; border-radius: 4px 4px 0 0;">
                            </div>
                            <div
                                style="position: absolute; left: 40%; bottom: 25%; width: 40px; height: 35%; background: #DD3134; border-radius: 4px 4px 0 0;">
                            </div>
                            <div
                                style="position: absolute; left: 56%; bottom: 45%; width: 40px; height: 55%; background: #DD3134; border-radius: 4px 4px 0 0;">
                            </div>
                            <div
                                style="position: absolute; left: 72%; bottom: 65%; width: 40px; height: 75%; background: #DD3134; border-radius: 4px 4px 0 0;">
                            </div>
                            <div
                                style="position: absolute; left: 88%; bottom: 95%; width: 40px; height: 98%; background: #DD3134; border-radius: 4px 4px 0 0;">
                            </div>

                            <!-- Data Points - Safe Deliveries -->
                            <div
                                style="position: absolute; left: 8%; bottom: 1%; width: 40px; height: 3%; background: #46DE48; border-radius: 4px 4px 0 0; opacity: 0.8;">
                            </div>
                            <div
                                style="position: absolute; left: 24%; bottom: 8%; width: 40px; height: 18%; background: #46DE48; border-radius: 4px 4px 0 0; opacity: 0.8;">
                            </div>
                            <div
                                style="position: absolute; left: 40%; bottom: 22%; width: 40px; height: 32%; background: #46DE48; border-radius: 4px 4px 0 0; opacity: 0.8;">
                            </div>
                            <div
                                style="position: absolute; left: 56%; bottom: 40%; width: 40px; height: 50%; background: #46DE48; border-radius: 4px 4px 0 0; opacity: 0.8;">
                            </div>
                            <div
                                style="position: absolute; left: 72%; bottom: 60%; width: 40px; height: 70%; background: #46DE48; border-radius: 4px 4px 0 0; opacity: 0.8;">
                            </div>
                            <div
                                style="position: absolute; left: 88%; bottom: 90%; width: 40px; height: 92%; background: #46DE48; border-radius: 4px 4px 0 0; opacity: 0.8;">
                            </div>

                            <!-- Year Lines -->
                            <div
                                style="position: absolute; left: 8%; bottom: -2px; width: 1px; height: 8px; background: #808FBD;">
                            </div>
                            <div
                                style="position: absolute; left: 24%; bottom: -2px; width: 1px; height: 8px; background: #808FBD;">
                            </div>
                            <div
                                style="position: absolute; left: 40%; bottom: -2px; width: 1px; height: 8px; background: #808FBD;">
                            </div>
                            <div
                                style="position: absolute; left: 56%; bottom: -2px; width: 1px; height: 8px; background: #808FBD;">
                            </div>
                            <div
                                style="position: absolute; left: 72%; bottom: -2px; width: 1px; height: 8px; background: #808FBD;">
                            </div>
                            <div
                                style="position: absolute; left: 88%; bottom: -2px; width: 1px; height: 8px; background: #808FBD;">
                            </div>
                        </div>

                        <!-- X-axis Labels -->
                        <div
                            style="position: absolute; left: 60px; right: 0; bottom: 0; height: 40px; display: flex; justify-content: space-around; align-items: flex-end;">
                            <div
                                style="font-size: 12px; color: #808FBD; font-weight: 600; transform: translateX(-50%); position: relative; left: 8%;">
                                2019</div>
                            <div
                                style="font-size: 12px; color: #808FBD; font-weight: 600; transform: translateX(-50%); position: relative; left: 24%;">
                                2020</div>
                            <div
                                style="font-size: 12px; color: #808FBD; font-weight: 600; transform: translateX(-50%); position: relative; left: 40%;">
                                2021</div>
                            <div
                                style="font-size: 12px; color: #808FBD; font-weight: 600; transform: translateX(-50%); position: relative; left: 56%;">
                                2022</div>
                            <div
                                style="font-size: 12px; color: #808FBD; font-weight: 600; transform: translateX(-50%); position: relative; left: 72%;">
                                2023</div>
                            <div
                                style="font-size: 12px; color: #808FBD; font-weight: 600; transform: translateX(-50%); position: relative; left: 88%;">
                                2024</div>
                        </div>
                    </div>

                    <!-- Legend -->
                    <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 24px; height: 24px; background: #DD3134; border-radius: 6px;"></div>
                            <div>
                                <div style="font-size: 16px; font-weight: 700; color: #363558;">Mothers Supported</div>
                                <div style="font-size: 13px; color: #808FBD;">Cumulative total served</div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 24px; height: 24px; background: #46DE48; border-radius: 6px;"></div>
                            <div>
                                <div style="font-size: 16px; font-weight: 700; color: #363558;">Safe Deliveries</div>
                                <div style="font-size: 13px; color: #808FBD;">Facility-based births</div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Points -->
                    <div
                        style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 10px; margin-top: 40px; padding-top: 30px; border-top: 1px solid #f0f0f0;">
                        <div style="text-align: center;">
                            <div style="font-size: 14px; font-weight: 700; color: #363558; margin-bottom: 5px;">2019</div>
                            <div style="font-size: 12px; color: #DD3134; font-weight: 600;">250</div>
                            <div style="font-size: 11px; color: #46DE48; margin-top: 2px;">230</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 14px; font-weight: 700; color: #363558; margin-bottom: 5px;">2020</div>
                            <div style="font-size: 12px; color: #DD3134; font-weight: 600;">1,250</div>
                            <div style="font-size: 11px; color: #46DE48; margin-top: 2px;">1,100</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 14px; font-weight: 700; color: #363558; margin-bottom: 5px;">2021</div>
                            <div style="font-size: 12px; color: #DD3134; font-weight: 600;">3,200</div>
                            <div style="font-size: 11px; color: #46DE48; margin-top: 2px;">2,800</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 14px; font-weight: 700; color: #363558; margin-bottom: 5px;">2022</div>
                            <div style="font-size: 12px; color: #DD3134; font-weight: 600;">5,600</div>
                            <div style="font-size: 11px; color: #46DE48; margin-top: 2px;">4,900</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 14px; font-weight: 700; color: #363558; margin-bottom: 5px;">2023</div>
                            <div style="font-size: 12px; color: #DD3134; font-weight: 600;">8,900</div>
                            <div style="font-size: 11px; color: #46DE48; margin-top: 2px;">7,800</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 14px; font-weight: 700; color: #363558; margin-bottom: 5px;">2024</div>
                            <div style="font-size: 12px; color: #DD3134; font-weight: 600;">12,847</div>
                            <div style="font-size: 11px; color: #46DE48; margin-top: 2px;">11,234</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Regional Impact -->
        <section
            style="padding: 100px 10%; background: linear-gradient(135deg, #f0f2f5 0%, #ffffff 100%); position: relative;">
            <!-- Background Elements -->
            <div
                style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; border-radius: 30px; background: linear-gradient(135deg, rgba(128,143,189,0.05), rgba(128,143,189,0)); transform: rotate(25deg);">
            </div>
            <div
                style="position: absolute; bottom: 30%; right: 10%; width: 150px; height: 150px; border: 2px dashed #91746E; border-radius: 50%; opacity: 0.1;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div style="display: flex; align-items: center; gap: 80px;">
                    <div style="flex: 1;">
                        <div
                            style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 800; margin-bottom: 25px; gap: 10px;">
                            <span style="color: #808FBD; font-size: 20px;">🗺️</span> REGIONAL IMPACT
                        </div>

                        <h2
                            style="font-size: 48px; color: #363558; margin-bottom: 25px; font-weight: 800; line-height: 1.2;">
                            Impact Across <span style="color: #808FBD;">Uganda</span>
                        </h2>

                        <p style="font-size: 18px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px;">
                            Our programs reach mothers across all four regions of Uganda, with the highest concentration in
                            Northern and Central regions where maternal health needs are greatest.
                        </p>

                        <!-- Regional Progress Bars -->
                        <div
                            style="background: white; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">
                            <!-- Central Region -->
                            <div style="margin-bottom: 30px;">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                    <div style="font-size: 18px; font-weight: 700; color: #363558;">Central Region</div>
                                    <div style="font-size: 16px; font-weight: 800; color: #DD3134;">4,880</div>
                                </div>
                                <div
                                    style="height: 12px; background: rgba(221,49,52,0.1); border-radius: 6px; overflow: hidden;">
                                    <div
                                        style="width: 85%; height: 100%; background: linear-gradient(90deg, #DD3134, #ff6b6b); border-radius: 6px;">
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                    <div style="font-size: 13px; color: #808FBD;">38% of total impact</div>
                                    <div style="font-size: 13px; color: #808FBD;">7 districts</div>
                                </div>
                            </div>

                            <!-- Eastern Region -->
                            <div style="margin-bottom: 30px;">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                    <div style="font-size: 18px; font-weight: 700; color: #363558;">Eastern Region</div>
                                    <div style="font-size: 16px; font-weight: 800; color: #46DE48;">2,500</div>
                                </div>
                                <div
                                    style="height: 12px; background: rgba(70,222,72,0.1); border-radius: 6px; overflow: hidden;">
                                    <div
                                        style="width: 52%; height: 100%; background: linear-gradient(90deg, #46DE48, #80E681); border-radius: 6px;">
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                    <div style="font-size: 13px; color: #808FBD;">19% of total impact</div>
                                    <div style="font-size: 13px; color: #808FBD;">5 districts</div>
                                </div>
                            </div>

                            <!-- Northern Region -->
                            <div style="margin-bottom: 30px;">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                    <div style="font-size: 18px; font-weight: 700; color: #363558;">Northern Region</div>
                                    <div style="font-size: 16px; font-weight: 800; color: #91746E;">3,220</div>
                                </div>
                                <div
                                    style="height: 12px; background: rgba(145,116,110,0.1); border-radius: 6px; overflow: hidden;">
                                    <div
                                        style="width: 66%; height: 100%; background: linear-gradient(90deg, #91746E, #DCCEC1); border-radius: 6px;">
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                    <div style="font-size: 13px; color: #808FBD;">25% of total impact</div>
                                    <div style="font-size: 13px; color: #808FBD;">6 districts</div>
                                </div>
                            </div>

                            <!-- Western Region -->
                            <div>
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                    <div style="font-size: 18px; font-weight: 700; color: #363558;">Western Region</div>
                                    <div style="font-size: 16px; font-weight: 800; color: #808FBD;">2,247</div>
                                </div>
                                <div
                                    style="height: 12px; background: rgba(128,143,189,0.1); border-radius: 6px; overflow: hidden;">
                                    <div
                                        style="width: 46%; height: 100%; background: linear-gradient(90deg, #808FBD, #A3B4E0); border-radius: 6px;">
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                    <div style="font-size: 13px; color: #808FBD;">18% of total impact</div>
                                    <div style="font-size: 13px; color: #808FBD;">6 districts</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="flex: 1; position: relative;">
                        <div
                            style="background: white; border-radius: 30px; padding: 40px; box-shadow: 0 40px 80px rgba(0,0,0,0.1); border: 1px solid #f0f0f0;">
                            <!-- Bar Chart -->
                            <div
                                style="display: flex; align-items: flex-end; justify-content: space-around; height: 300px; gap: 20px; margin-bottom: 30px;">
                                <div
                                    style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                    <div
                                        style="width: 60px; background: linear-gradient(to top, #DD3134, #ff6b6b); border-radius: 8px 8px 0 0; height: 85%;">
                                    </div>
                                    <div style="font-size: 14px; font-weight: 700; color: #363558;">Central</div>
                                    <div style="font-size: 12px; color: #808FBD;">4,880</div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                    <div
                                        style="width: 60px; background: linear-gradient(to top, #46DE48, #80E681); border-radius: 8px 8px 0 0; height: 52%;">
                                    </div>
                                    <div style="font-size: 14px; font-weight: 700; color: #363558;">Eastern</div>
                                    <div style="font-size: 12px; color: #808FBD;">2,500</div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                    <div
                                        style="width: 60px; background: linear-gradient(to top, #91746E, #DCCEC1); border-radius: 8px 8px 0 0; height: 66%;">
                                    </div>
                                    <div style="font-size: 14px; font-weight: 700; color: #363558;">Northern</div>
                                    <div style="font-size: 12px; color: #808FBD;">3,220</div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                    <div
                                        style="width: 60px; background: linear-gradient(to top, #808FBD, #A3B4E0); border-radius: 8px 8px 0 0; height: 46%;">
                                    </div>
                                    <div style="font-size: 14px; font-weight: 700; color: #363558;">Western</div>
                                    <div style="font-size: 12px; color: #808FBD;">2,247</div>
                                </div>
                            </div>

                            <!-- Total Impact -->
                            <div
                                style="background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; padding: 25px; border-radius: 20px; text-align: center;">
                                <div style="font-size: 14px; opacity: 0.8; margin-bottom: 10px; font-weight: 600;">TOTAL
                                    MOTHERS SUPPORTED</div>
                                <div style="font-size: 42px; font-weight: 800; margin-bottom: 5px;">12,847</div>
                                <div style="font-size: 13px; opacity: 0.7;">Across 24 districts in Uganda</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories -->
        <section
            style="padding: 100px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; text-align: center; position: relative;">
            <!-- Grid Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div
                    style="display: inline-flex; align-items: center; background: rgba(255,255,255,0.1); padding: 15px 30px; border-radius: 30px; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                    <span style="color: #46DE48; margin-right: 10px;">🌟</span>
                    <div style="font-size: 14px; font-weight: 800;">SUCCESS STORIES</div>
                </div>

                <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 20px; color: white;">
                    Behind Every <span style="color: #46DE48;">Number</span>, a Life
                </h2>

                <p style="font-size: 18px; opacity: 0.8; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.6;">
                    Our impact is measured not just in numbers, but in the stories of mothers and families whose lives have
                    been transformed.
                </p>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;">
                    <!-- Story 1 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 30px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div style="display: flex; height: 300px;">
                            <div
                                style="flex: 1; padding: 40px; display: flex; flex-direction: column; justify-content: center;">
                                <div style="color: #46DE48; font-size: 32px; margin-bottom: 20px;">❝</div>
                                <p
                                    style="font-size: 16px; opacity: 0.9; line-height: 1.7; margin-bottom: 30px; flex-grow: 1;">
                                    "When I had complications during delivery, my navigator arranged emergency transport in
                                    just 10 minutes. Both my baby and I survived thanks to SafeMoms Navigator."
                                </p>
                                <div>
                                    <div style="font-weight: 800; font-size: 18px; margin-bottom: 5px;">Mercy Akello</div>
                                    <div style="font-size: 13px; opacity: 0.7;">Gulu District, Northern Region</div>
                                    <div style="display: flex; align-items: center; gap: 10px; margin-top: 15px;">
                                        <div
                                            style="width: 30px; height: 30px; background: rgba(70,222,72,0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 14px;">
                                            👶
                                        </div>
                                        <div style="font-size: 13px; opacity: 0.8;">Safe delivery in 2023</div>
                                    </div>
                                </div>
                            </div>
                            <div style="flex: 1; position: relative;">
                                <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&q=80&w=400"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                                <div
                                    style="position: absolute; top: 20px; right: 20px; background: rgba(0,0,0,0.5); color: white; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 600; backdrop-filter: blur(10px);">
                                    EMERGENCY SUCCESS
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Story 2 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 30px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div style="display: flex; height: 300px;">
                            <div
                                style="flex: 1; padding: 40px; display: flex; flex-direction: column; justify-content: center;">
                                <div style="color: #DD3134; font-size: 32px; margin-bottom: 20px;">❝</div>
                                <p
                                    style="font-size: 16px; opacity: 0.9; line-height: 1.7; margin-bottom: 30px; flex-grow: 1;">
                                    "The SMS reminders helped me attend all my prenatal appointments. My navigator taught me
                                    about nutrition and danger signs. This was my healthiest pregnancy yet."
                                </p>
                                <div>
                                    <div style="font-weight: 800; font-size: 18px; margin-bottom: 5px;">Grace Namini</div>
                                    <div style="font-size: 13px; opacity: 0.7;">Mbale District, Eastern Region</div>
                                    <div style="display: flex; align-items: center; gap: 10px; margin-top: 15px;">
                                        <div
                                            style="width: 30px; height: 30px; background: rgba(221,49,52,0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #DD3134; font-size: 14px;">
                                            📱
                                        </div>
                                        <div style="font-size: 13px; opacity: 0.8;">SMS reminder recipient</div>
                                    </div>
                                </div>
                            </div>
                            <div style="flex: 1; position: relative;">
                                <img src="https://images.unsplash.com/photo-1589156280159-27698a70f29e?auto=format&fit=crop&q=80&w=400"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                                <div
                                    style="position: absolute; top: 20px; right: 20px; background: rgba(0,0,0,0.5); color: white; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 600; backdrop-filter: blur(10px);">
                                    HEALTHY PREGNANCY
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reports Section -->
        <section style="padding: 100px 10%; background: white; text-align: center; position: relative;">
            <!-- Background Elements -->
            <div
                style="position: absolute; top: 20%; left: 10%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(128,143,189,0.1) 0%, rgba(128,143,189,0) 70%);">
            </div>
            <div
                style="position: absolute; bottom: 30%; right: 10%; width: 100px; height: 100px; border: 2px dashed #91746E; border-radius: 30px; opacity: 0.1; transform: rotate(25deg);">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
                <div
                    style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 800; margin-bottom: 25px; gap: 10px;">
                    <span style="color: #91746E; font-size: 20px;">📋</span> DETAILED REPORTS
                </div>

                <h2 style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                    Annual <span style="color: #91746E;">Impact</span> Reports
                </h2>

                <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">
                    Download our detailed impact reports for comprehensive data, analysis, and stories from our work across
                    Uganda.
                </p>

                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                    <!-- Report 1 -->
                    <div
                        style="background: linear-gradient(135deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; text-align: left;">
                        <div
                            style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px;">
                            📄
                        </div>
                        <div
                            style="display: inline-flex; align-items: center; background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin-bottom: 20px;">
                            2024 REPORT
                        </div>
                        <h4 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Annual Impact
                            Report 2024</h4>
                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                            Comprehensive analysis of our 2024 impact, including expansion to 6 new districts and detailed
                            maternal health outcomes.
                        </p>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                            <div>
                                <div style="font-size: 12px; color: #808FBD; margin-bottom: 5px;">REPORT DETAILS</div>
                                <div style="font-size: 14px; font-weight: 700; color: #363558;">32 pages • 5.2MB</div>
                            </div>
                            <a href="#"
                                style="color: #DD3134; text-decoration: none; font-weight: 800; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                Download <span>→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Report 2 -->
                    <div
                        style="background: linear-gradient(135deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; text-align: left;">
                        <div
                            style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px;">
                            📄
                        </div>
                        <div
                            style="display: inline-flex; align-items: center; background: rgba(145,116,110,0.1); color: #91746E; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin-bottom: 20px;">
                            2023 REPORT
                        </div>
                        <h4 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Annual Impact
                            Report 2023</h4>
                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                            Detailed review of our 2023 achievements, including emergency response improvements and
                            navigator training outcomes.
                        </p>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                            <div>
                                <div style="font-size: 12px; color: #808FBD; margin-bottom: 5px;">REPORT DETAILS</div>
                                <div style="font-size: 14px; font-weight: 700; color: #363558;">28 pages • 4.7MB</div>
                            </div>
                            <a href="#"
                                style="color: #91746E; text-decoration: none; font-weight: 800; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                Download <span>→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Report 3 -->
                    <div
                        style="background: linear-gradient(135deg, #ffffff, #f9f9fb); border-radius: 25px; padding: 40px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; text-align: left;">
                        <div
                            style="width: 70px; height: 70px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px;">
                            📄
                        </div>
                        <div
                            style="display: inline-flex; align-items: center; background: rgba(128,143,189,0.1); color: #808FBD; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin-bottom: 20px;">
                            2022 REPORT
                        </div>
                        <h4 style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Annual Impact
                            Report 2022</h4>
                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                            Analysis of our foundational years with focus on system development, community engagement, and
                            initial impact metrics.
                        </p>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                            <div>
                                <div style="font-size: 12px; color: #808FBD; margin-bottom: 5px;">REPORT DETAILS</div>
                                <div style="font-size: 14px; font-weight: 700; color: #363558;">24 pages • 3.8MB</div>
                            </div>
                            <a href="#"
                                style="color: #808FBD; text-decoration: none; font-weight: 800; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                Download <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Summary Impact -->
                <div
                    style="background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; padding: 50px; border-radius: 30px; margin-top: 80px;">
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; text-align: center;">
                        <div>
                            <div
                                style="font-size: 56px; font-weight: 800; color: #46DE48; margin-bottom: 15px; line-height: 1;">
                                12,847</div>
                            <div style="font-size: 16px; font-weight: 600; margin-bottom: 8px;">Mothers Supported</div>
                            <div style="font-size: 14px; opacity: 0.7;">Life-changing impact since 2019</div>
                        </div>
                        <div>
                            <div
                                style="font-size: 56px; font-weight: 800; color: #DD3134; margin-bottom: 15px; line-height: 1;">
                                11,234</div>
                            <div style="font-size: 16px; font-weight: 600; margin-bottom: 8px;">Safe Deliveries</div>
                            <div style="font-size: 14px; opacity: 0.7;">With 98% facility birth rate</div>
                        </div>
                        <div>
                            <div
                                style="font-size: 56px; font-weight: 800; color: #91746E; margin-bottom: 15px; line-height: 1;">
                                24</div>
                            <div style="font-size: 16px; font-weight: 600; margin-bottom: 8px;">Active Districts</div>
                            <div style="font-size: 14px; opacity: 0.7;">Across Uganda's 4 regions</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection