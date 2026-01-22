@extends('layouts.apps')

@section('content')

    <div
        style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #E7E9ED 100%); margin-top: 8em;">

        <!-- Hero Section -->
        <section style="padding: 120px 10% 80px 10%; text-align: center; position: relative; overflow: hidden;">
            <!-- Background Elements -->
            <div
                style="position: absolute; top: 10%; right: 10%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(128,143,189,0.08) 0%, rgba(128,143,189,0) 70%);">
            </div>
            <div
                style="position: absolute; bottom: 20%; left: 10%; width: 150px; height: 150px; border: 2px dashed #46DE48; border-radius: 40px; opacity: 0.1; transform: rotate(15deg);">
            </div>

            <div style="position: relative; z-index: 2;">
                <div
                    style="display: inline-flex; align-items: center; padding: 12px 30px; background: linear-gradient(90deg, rgba(128,143,189,0.1), rgba(70,222,72,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.8);">
                    <span style="color: #808FBD; margin-right: 10px;">📚</span> KNOWLEDGE RESOURCES
                </div>

                <h1
                    style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                    Essential <span style="color: #808FBD;">Resources</span><br>for Every Journey
                </h1>

                <p style="font-size: 20px; color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    Download comprehensive guides, templates, and educational materials designed for mothers, navigators,
                    and partners. All resources are freely available.
                </p>
            </div>
        </section>

        <!-- Filter & Search Bar -->
        <section style="padding: 80px 10% 80px 10%; background: white;">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div
                    style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px; background: linear-gradient(135deg, #363558 0%, #434961 100%); padding: 40px; border-radius: 30px; box-shadow: 0 30px 60px rgba(54,53,88,0.15);">

                    <!-- Filter Tabs -->
                    <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                        <button
                            style="padding: 14px 28px; border-radius: 25px; border: none; background: #DD3134; color: white; font-weight: 800; font-size: 14px; cursor: pointer; display: flex; align-items: center; gap: 10px; box-shadow: 0 10px 20px rgba(221,49,52,0.3);">
                            <span>📚</span> All Resources
                        </button>
                        <button
                            style="padding: 14px 28px; border-radius: 25px; border: 2px solid rgba(255,255,255,0.3); background: rgba(255,255,255,0.1); color: white; font-weight: 700; font-size: 14px; cursor: pointer; display: flex; align-items: center; gap: 10px; backdrop-filter: blur(10px);">
                            <span>🤰</span> For Mothers
                        </button>
                        <button
                            style="padding: 14px 28px; border-radius: 25px; border: 2px solid rgba(255,255,255,0.3); background: rgba(255,255,255,0.1); color: white; font-weight: 700; font-size: 14px; cursor: pointer; display: flex; align-items: center; gap: 10px; backdrop-filter: blur(10px);">
                            <span>👥</span> For Navigators
                        </button>
                        <button
                            style="padding: 14px 28px; border-radius: 25px; border: 2px solid rgba(255,255,255,0.3); background: rgba(255,255,255,0.1); color: white; font-weight: 700; font-size: 14px; cursor: pointer; display: flex; align-items: center; gap: 10px; backdrop-filter: blur(10px);">
                            <span>🤝</span> For Partners
                        </button>
                    </div>

                    <!-- Search Bar -->
                    <div style="position: relative; width: 350px;">
                        <div style="position: relative;">
                            <input type="text" placeholder="Search resources, guides, templates..."
                                style="width: 100%; padding: 16px 25px; padding-right: 60px; border-radius: 25px; border: 2px solid rgba(255,255,255,0.3); background: rgba(255,255,255,0.15); outline: none; font-size: 15px; color: white; backdrop-filter: blur(10px);">
                            <span
                                style="position: absolute; right: 25px; top: 50%; transform: translateY(-50%); color: white; font-size: 20px;">🔍</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Resource Grid -->
        <section style="padding: 100px 10% 100px 10%; background: #E7E9ED;">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px;">

                    <!-- Resource 1 -->
                    <div
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #DD3134;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                📖
                            </div>
                            <div
                                style="display: inline-flex; align-items: center; background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                MOTHER'S GUIDE
                            </div>
                        </div>

                        <h3
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Pregnancy Health Guide
                        </h3>

                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Comprehensive 12-page guide covering nutrition, exercise, warning signs, and trimester-specific
                            care for expectant mothers.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📄</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">12 pages</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📊</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">2.4 MB</span>
                                </div>
                            </div>
                            <a href="#"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(221,49,52,0.2);">
                                Download <span style="font-size: 18px;">⬇</span>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 2 -->
                    <div
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #91746E;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                📝
                            </div>
                            <div
                                style="display: inline-flex; align-items: center; background: rgba(145,116,110,0.1); color: #91746E; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                PREPARATION
                            </div>
                        </div>

                        <h3
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Birth Preparedness Checklist
                        </h3>

                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Essential checklist for delivery preparation including hospital bag items, transport
                            arrangements, and emergency contacts.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📄</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">2 pages</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📊</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">0.8 MB</span>
                                </div>
                            </div>
                            <a href="#"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #91746E, #DCCEC1); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(145,116,110,0.2);">
                                Download <span style="font-size: 18px;">⬇</span>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 3 -->
                    <div
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #46DE48;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                ⚠️
                            </div>
                            <div
                                style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                WARNING SIGNS
                            </div>
                        </div>

                        <h3
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Danger Signs Poster
                        </h3>

                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Visual poster showing critical warning signs during pregnancy that require immediate medical
                            attention. Available in 4 languages.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">🌍</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">4 languages</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📊</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">1.2 MB</span>
                                </div>
                            </div>
                            <a href="#"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #46DE48, #80E681); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(70,222,72,0.2);">
                                Download <span style="font-size: 18px;">⬇</span>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 4 -->
                    <div
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #808FBD;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #808FBD, #A3B4E0); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                🎓
                            </div>
                            <div
                                style="display: inline-flex; align-items: center; background: rgba(128,143,189,0.1); color: #808FBD; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                TRAINING
                            </div>
                        </div>

                        <h3
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Navigator Training Manual
                        </h3>

                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Complete 84-page training curriculum for youth navigators covering protocols, best practices,
                            and emergency response procedures.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📚</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">84 pages</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📊</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">8.5 MB</span>
                                </div>
                            </div>
                            <a href="#"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #808FBD, #A3B4E0); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(128,143,189,0.2);">
                                Download <span style="font-size: 18px;">⬇</span>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 5 -->
                    <div
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #DD3134;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                🧠
                            </div>
                            <div
                                style="display: inline-flex; align-items: center; background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                MENTAL HEALTH
                            </div>
                        </div>

                        <h3
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Postpartum Mental Health Guide
                        </h3>

                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Guide for recognizing and addressing postpartum depression and anxiety, with support strategies
                            and referral pathways.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📄</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">16 pages</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📊</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">3.1 MB</span>
                                </div>
                            </div>
                            <a href="#"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(221,49,52,0.2);">
                                Download <span style="font-size: 18px;">⬇</span>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 6 -->
                    <div
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: transform 0.3s ease; border-top: 5px solid #46DE48;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                🏥
                            </div>
                            <div
                                style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                REFERRAL
                            </div>
                        </div>

                        <h3
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Emergency Referral Protocol
                        </h3>

                        <p style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Step-by-step protocol for emergency maternal referrals, including transport coordination and
                            facility communication procedures.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📄</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">8 pages</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <span style="color: #808FBD; font-size: 14px;">📊</span>
                                    <span style="font-size: 13px; color: #808FBD; font-weight: 600;">1.8 MB</span>
                                </div>
                            </div>
                            <a href="#"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #46DE48, #80E681); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(70,222,72,0.2);">
                                Download <span style="font-size: 18px;">⬇</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- View All Button -->
                <div style="text-align: center; margin-top: 60px;">
                    <button
                        style="padding: 18px 40px; border-radius: 30px; border: 2px solid #f0f0f0; background: white; color: #363558; font-weight: 800; font-size: 16px; cursor: pointer; display: inline-flex; align-items: center; gap: 15px; box-shadow: 0 15px 30px rgba(0,0,0,0.05);">
                        <span>📚</span> View All 48 Resources <span style="color: #DD3134;">→</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section
            style="padding: 120px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
            <!-- Grid Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1000px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <div
                        style="display: inline-flex; align-items: center; background: rgba(255,255,255,0.1); padding: 15px 30px; border-radius: 30px; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <span style="color: #46DE48; margin-right: 10px;">❓</span>
                        <div style="font-size: 14px; font-weight: 800;">FREQUENTLY ASKED QUESTIONS</div>
                    </div>

                    <h2 style="font-size: 48px; font-weight: 800; margin-bottom: 20px; color: white;">
                        Common <span style="color: #46DE48;">Questions</span> Answered
                    </h2>

                    <p style="font-size: 18px; opacity: 0.8; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Find quick answers to the most common questions about SafeMoms Navigator services, registration, and
                        partnerships.
                    </p>
                </div>

                <!-- FAQ Items -->
                <div style="display: grid; gap: 20px;">
                    <!-- FAQ 1 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">How do I
                                    register for SafeMoms Navigator services?</div>
                                <div
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-top: 15px; display: none;">
                                    Registration is simple! You can register by calling our toll-free number (+256 700 123
                                    456), visiting any local health center in our coverage areas, or through community
                                    health workers. No documents are required for initial registration.
                                </div>
                            </div>
                            <div
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                ⌵
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">Is there
                                    a cost for the services?</div>
                                <div
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-top: 15px; display: none;">
                                    All SafeMoms Navigator services are completely free of charge. This includes SMS
                                    reminders, home visits by navigators, emergency transport coordination, and all
                                    educational materials. We are funded through partnerships and grants.
                                </div>
                            </div>
                            <div
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                ⌵
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">What
                                    areas do you cover?</div>
                                <div
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-top: 15px; display: none;">
                                    We currently operate in 24 districts across Uganda's four regions: Central (7
                                    districts), Eastern (5 districts), Northern (6 districts), and Western (6 districts).
                                    We're expanding to reach all 135 districts by 2025.
                                </div>
                            </div>
                            <div
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                ⌵
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">How do I
                                    become a youth navigator?</div>
                                <div
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-top: 15px; display: none;">
                                    We recruit youth (18-30 years) from local communities. Requirements include completion
                                    of secondary education, passion for maternal health, and commitment to serving your
                                    community. Training is provided free of charge.
                                </div>
                            </div>
                            <div
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                ⌵
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">How can
                                    my organization partner with SafeMoms Navigator?</div>
                                <div
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; margin-top: 15px; display: none;">
                                    We partner with health facilities, NGOs, government agencies, and corporate
                                    organizations. Partnership opportunities include program implementation, funding,
                                    research collaboration, and advocacy. Contact our partnerships team at
                                    partnerships@safemoms.org
                                </div>
                            </div>
                            <div
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                ⌵
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Contact -->
                <div
                    style="background: rgba(70,222,72,0.1); padding: 40px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.2); margin-top: 50px; text-align: center;">
                    <div style="font-size: 20px; font-weight: 800; margin-bottom: 15px; color: white;">Still have questions?
                    </div>
                    <p
                        style="font-size: 16px; opacity: 0.8; margin-bottom: 25px; max-width: 600px; margin-left: auto; margin-right: auto;">
                        Contact our support team for personalized assistance with any questions not covered here.
                    </p>
                    <a href="#"
                        style="display: inline-flex; align-items: center; gap: 12px; background: #46DE48; color: white; text-decoration: none; padding: 16px 35px; border-radius: 25px; font-weight: 800; font-size: 16px; box-shadow: 0 10px 20px rgba(70,222,72,0.3);">
                        📞 Contact Support <span style="font-size: 20px;">→</span>
                    </a>
                </div>
            </div>
        </section>

    </div>

@endsection