@extends('layouts.apps')

@section('content')

    <div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #d2e0ed 100%);">

        <!-- Hero Section -->
        <section style="padding: clamp(80px, 10vw, 140px) 5% clamp(60px, 8vw, 100px); text-align: center; position: relative; overflow: hidden;">
            <!-- Animated background elements -->
            <div style="position: absolute; top: 15%; left: 3%; width: clamp(60px, 10vw, 100px); height: clamp(60px, 10vw, 100px); border: 2px dashed #DD3134; border-radius: 30px; opacity: 0.1; transform: rotate(25deg); display: none;" class="bg-decorative">
            </div>
            <div style="position: absolute; bottom: 20%; right: 5%; width: clamp(100px, 15vw, 150px); height: clamp(100px, 15vw, 150px); border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.05) 0%, rgba(70,222,72,0) 70%); display: none;" class="bg-decorative">
            </div>

            <div style="position: relative; z-index: 2; padding: 0 20px;">
                <div style="display: inline-flex; align-items: center; padding: 10px clamp(20px, 3vw, 35px); background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: clamp(13px, 1.5vw, 15px); font-weight: 700; margin-bottom: 30px; letter-spacing: 1px; border: 1px solid rgba(54,53,88,0.2); backdrop-filter: blur(10px); margin-top: clamp(2rem, 5vw, 10rem);">
                    <span style="color: #363558; margin-right: 12px; font-size: clamp(16px, 2vw, 20px);">
                        <i class="bi bi-people"></i>
                    </span>
                    MEET OUR TEAM
                </div>

                <h1 style="font-size: clamp(32px, 6vw, 72px); color: #363558; margin: 0 0 30px 0; font-weight: 800; letter-spacing: -1px; line-height: 1.1;">
                    The People Behind <br><span style="color: #DD3134;">the Mission</span>
                </h1>

                <p style="font-size: clamp(16px, 2.2vw, 22px); color: #5a5a5a; max-width: 900px; margin: 0 auto; line-height: 1.6;">
                    From visionary leadership to dedicated field navigators, every team member plays a crucial role in our
                    mission to save mothers' lives across Uganda.
                </p>
            </div>
        </section>

        <!-- Leadership Team -->
        <section style="padding: clamp(60px, 8vw, 100px) 5%; background: white; position: relative;">

            <!-- Background pattern -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 10% 20%, #363558 1px, transparent 1px); background-size: clamp(30px, 5vw, 50px) clamp(30px, 5vw, 50px);">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: clamp(40px, 6vw, 80px); padding: 0 20px;">
                    <div style="display: inline-block; padding: 10px clamp(20px, 3vw, 30px); background: rgba(221,49,52,0.1); color: #363558; border-radius: 30px; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; border: 1px solid rgba(221,49,52,0.2);">
                        LEADERSHIP TEAM
                    </div>

                    <h3 style="font-size: clamp(32px, 4vw, 48px); color: #363558; margin-bottom: 25px; font-weight: 800;">Our <span
                            style="color: #DD3134;">Leadership</span></h3>
                    <p style="color: #5a5a5a; max-width: 700px; margin: 0 auto; font-size: clamp(16px, 2vw, 18px); line-height: 1.6;">
                        Experienced leaders guiding our strategy, operations, and community impact across all 24 districts.
                    </p>
                </div>

                <!-- Interactive Team Cards -->
                <div style="display: grid; grid-template-columns: 1fr; gap: clamp(25px, 4vw, 35px); margin-bottom: clamp(60px, 8vw, 100px); padding: 0 20px;">

                    <!-- Team Member 1 -->
                    <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.1); border: 1px solid #f0f0f0; position: relative; max-width: 400px; margin: 0 auto;">
                        <div style="position: relative; height: clamp(250px, 50vw, 300px); overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                            <div style="position: absolute; top: 20px; right: 20px; background: #DD3134; color: white; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: clamp(16px, 2vw, 20px); font-weight: bold; box-shadow: 0 10px 25px rgba(221,49,52,0.3);">
                                01
                            </div>
                        </div>

                        <div style="padding: clamp(25px, 3vw, 30px) clamp(20px, 3vw, 25px); position: relative;">
                            <div style="position: absolute; top: -20px; left: 25px; background: #DD3134; color: white; padding: 6px clamp(15px, 2vw, 20px); border-radius: 15px; font-size: clamp(10px, 1.5vw, 12px); font-weight: 700;">
                                EXECUTIVE
                            </div>

                            <h4 style="margin: 15px 0 10px 0; color: #363558; font-size: clamp(20px, 3vw, 24px); font-weight: 800;">Dr. Sarah
                                Nakato</h4>
                            <div style="color: #DD3134; font-size: clamp(13px, 1.8vw, 15px); font-weight: 700; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                                <span>
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                Executive Director & Co-Founder
                            </div>
                            <p style="font-size: clamp(14px, 1.8vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                A public health physician with 10+ years in maternal health. Sarah founded SMN after
                                witnessing preventable deaths in rural communities.
                            </p>

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div style="font-size: clamp(11px, 1.5vw, 12px); color: #808FBD; font-weight: 600;">
                                    <span style="color: #DD3134;">10+</span> Years Experience
                                </div>
                                <div style="display: flex; gap: 10px;">
                                    <div style="width: clamp(25px, 4vw, 30px); height: clamp(25px, 4vw, 30px); border-radius: 8px; background: rgba(221,49,52,0.1); color: #DD3134; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: clamp(10px, 1.5vw, 12px); font-weight: bold;">
                                        in
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.1); border: 1px solid #f0f0f0; position: relative; max-width: 400px; margin: 0 auto;">
                        <div style="position: relative; height: clamp(250px, 50vw, 300px); overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                            <div style="position: absolute; top: 20px; right: 20px; background: #46DE48; color: white; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: clamp(16px, 2vw, 20px); font-weight: bold; box-shadow: 0 10px 25px rgba(70,222,72,0.3);">
                                02
                            </div>
                        </div>

                        <div style="padding: clamp(25px, 3vw, 30px) clamp(20px, 3vw, 25px); position: relative;">
                            <div style="position: absolute; top: -20px; left: 25px; background: #46DE48; color: white; padding: 6px clamp(15px, 2vw, 20px); border-radius: 15px; font-size: clamp(10px, 1.5vw, 12px); font-weight: 700;">
                                PROGRAM
                            </div>

                            <h4 style="margin: 15px 0 10px 0; color: #363558; font-size: clamp(20px, 3vw, 24px); font-weight: 800;">James
                                Okello</h4>
                            <div style="color: #46DE48; font-size: clamp(13px, 1.8vw, 15px); font-weight: 700; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                                <span>
                                    <i class="bi bi-clipboard-data"></i>
                                </span>
                                Program Director
                            </div>
                            <p style="font-size: clamp(14px, 1.8vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Former community health worker who leads our navigator training and field operations across
                                all 24 districts.
                            </p>

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div style="font-size: clamp(11px, 1.5vw, 12px); color: #808FBD; font-weight: 600;">
                                    <span style="color: #46DE48;">8+</span> Years Experience
                                </div>
                                <div style="display: flex; gap: 10px;">
                                    <div style="width: clamp(25px, 4vw, 30px); height: clamp(25px, 4vw, 30px); border-radius: 8px; background: rgba(70,222,72,0.1); color: #46DE48; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: clamp(10px, 1.5vw, 12px); font-weight: bold;">
                                        in
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.1); border: 1px solid #f0f0f0; position: relative; max-width: 400px; margin: 0 auto;">
                        <div style="position: relative; height: clamp(250px, 50vw, 300px); overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?auto=format&fit=crop&q=80&w=400"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                            <div style="position: absolute; top: 20px; right: 20px; background: #91746E; color: white; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: clamp(16px, 2vw, 20px); font-weight: bold; box-shadow: 0 10px 25px rgba(145,116,110,0.3);">
                                03
                            </div>
                        </div>

                        <div style="padding: clamp(25px, 3vw, 30px) clamp(20px, 3vw, 25px); position: relative;">
                            <div style="position: absolute; top: -20px; left: 25px; background: #91746E; color: white; padding: 6px clamp(15px, 2vw, 20px); border-radius: 15px; font-size: clamp(10px, 1.5vw, 12px); font-weight: 700;">
                                OPERATIONS
                            </div>

                            <h4 style="margin: 15px 0 10px 0; color: #363558; font-size: clamp(20px, 3vw, 24px); font-weight: 800;">Grace
                                Mwangi</h4>
                            <div style="color: #91746E; font-size: clamp(13px, 1.8vw, 15px); font-weight: 700; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                                <span>
                                    <i class="bi bi-briefcase"></i>
                                </span>
                                Operations Director
                            </div>
                            <p style="font-size: clamp(14px, 1.8vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Logistics expert ensuring our programs run smoothly across all districts with 8+ years in
                                humanitarian operations.
                            </p>

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div style="font-size: clamp(11px, 1.5vw, 12px); color: #808FBD; font-weight: 600;">
                                    <span style="color: #91746E;">8+</span> Years Experience
                                </div>
                                <div style="display: flex; gap: 10px;">
                                    <div style="width: clamp(25px, 4vw, 30px); height: clamp(25px, 4vw, 30px); border-radius: 8px; background: rgba(145,116,110,0.1); color: #91746E; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: clamp(10px, 1.5vw, 12px); font-weight: bold;">
                                        in
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.1); border: 1px solid #f0f0f0; position: relative; max-width: 400px; margin: 0 auto;">
                        <div style="position: relative; height: clamp(250px, 50vw, 300px); overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                            <div style="position: absolute; top: 20px; right: 20px; background: #808FBD; color: white; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: clamp(16px, 2vw, 20px); font-weight: bold; box-shadow: 0 10px 25px rgba(128,143,189,0.3);">
                                04
                            </div>
                        </div>

                        <div style="padding: clamp(25px, 3vw, 30px) clamp(20px, 3vw, 25px); position: relative;">
                            <div style="position: absolute; top: -20px; left: 25px; background: #808FBD; color: white; padding: 6px clamp(15px, 2vw, 20px); border-radius: 15px; font-size: clamp(10px, 1.5vw, 12px); font-weight: 700;">
                                PARTNERSHIPS
                            </div>

                            <h4 style="margin: 15px 0 10px 0; color: #363558; font-size: clamp(20px, 3vw, 24px); font-weight: 800;">David
                                Omondi</h4>
                            <div style="color: #808FBD; font-size: clamp(13px, 1.8vw, 15px); font-weight: 700; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                                <span>
                                    <i class="bi bi-link-45deg"></i>
                                </span>
                                Partnerships Manager
                            </div>
                            <p style="font-size: clamp(14px, 1.8vw, 15px); color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                                Builds and maintains relationships with healthcare facilities, government agencies, and
                                community partners.
                            </p>

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div style="font-size: clamp(11px, 1.5vw, 12px); color: #808FBD; font-weight: 600;">
                                    <span style="color: #808FBD;">6+</span> Years Experience
                                </div>
                                <div style="display: flex; gap: 10px;">
                                    <div style="width: clamp(25px, 4vw, 30px); height: clamp(25px, 4vw, 30px); border-radius: 8px; background: rgba(128,143,189,0.1); color: #808FBD; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: clamp(10px, 1.5vw, 12px); font-weight: bold;">
                                        in
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Star Navigators -->
        <section style="padding: clamp(60px, 8vw, 100px) 5%; background: linear-gradient(135deg, #E7E9ED 0%, #ffffff 100%); position: relative;">

            <!-- Background decorative elements -->
            <div style="position: absolute; top: 10%; right: 5%; width: clamp(100px, 15vw, 200px); height: clamp(100px, 15vw, 200px); border-radius: 50%; background: radial-gradient(circle, rgba(221,49,52,0.05) 0%, rgba(221,49,52,0) 70%); display: none;" class="bg-decorative">
            </div>
            <div style="position: absolute; bottom: 20%; left: 5%; width: clamp(80px, 12vw, 150px); height: clamp(80px, 12vw, 150px); border: 2px dashed #46DE48; border-radius: 40px; opacity: 0.1; transform: rotate(-15deg); display: none;" class="bg-decorative">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: clamp(40px, 6vw, 80px); padding: 0 20px;">
                    <div style="display: inline-flex; align-items: center; padding: 10px clamp(20px, 3vw, 35px); background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: clamp(13px, 1.5vw, 15px); font-weight: 700; margin-bottom: 25px; letter-spacing: 1px; border: 1px solid rgba(54,53,88,0.2);">
                        <span style="color: #DD3134; margin-right: 12px; font-size: clamp(16px, 2vw, 20px);">
                            <i class="bi bi-star-fill"></i>
                        </span>
                        STAR NAVIGATORS
                    </div>

                    <h3 style="font-size: clamp(32px, 4vw, 48px); color: #363558; margin-bottom: 25px; font-weight: 800;">Top Performing <span
                            style="color: #46DE48;">Navigators</span></h3>
                    <p
                        style="color: #5a5a5a; margin-bottom: 40px; font-size: clamp(16px, 2vw, 18px); max-width: 700px; margin-left: auto; margin-right: auto;">
                        Celebrating youth navigators who have shown exceptional dedication and impact in supporting mothers
                        across different districts.
                    </p>
                </div>

                <!-- Interactive Navigator Grid -->
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: clamp(40px, 6vw, 60px); padding: 0 20px;">

                    <!-- Navigator 1 -->
                    <div style="background: white; border-radius: 20px; padding: clamp(20px, 3vw, 25px) clamp(15px, 2vw, 20px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #DD3134, #FF6B6B);">
                        </div>

                        <div style="position: relative; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); margin: 0 auto 15px auto;">
                            <img src="https://i.pravatar.cc/150?u=FaithAkello"
                                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div style="position: absolute; top: -5px; right: -5px; background: #DD3134; color: white; font-size: clamp(10px, 1.5vw, 12px); padding: 3px 6px; border-radius: 12px; font-weight: bold; box-shadow: 0 5px 15px rgba(221,49,52,0.3);">
                                TOP 1
                            </div>
                        </div>
                        <div style="font-size: clamp(14px, 2vw, 16px); font-weight: 800; color: #363558; margin-bottom: 5px;">Faith Akello
                        </div>
                        <div style="font-size: clamp(11px, 1.5vw, 12px); color: #46DE48; font-weight: 700; margin-bottom: 8px; display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <span>
                                <i class="bi bi-geo-alt"></i>
                            </span> Gulu District
                        </div>
                        <div style="font-size: clamp(20px, 3vw, 24px); font-weight: 800; color: #DD3134; margin-bottom: 5px;">80+</div>
                        <div style="font-size: clamp(10px, 1.3vw, 11px); color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>

                    <!-- Navigator 2 -->
                    <div style="background: white; border-radius: 20px; padding: clamp(20px, 3vw, 25px) clamp(15px, 2vw, 20px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #46DE48, #80E681);">
                        </div>

                        <div style="position: relative; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); margin: 0 auto 15px auto;">
                            <img src="https://i.pravatar.cc/150?u=AgnesNambi"
                                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div style="position: absolute; top: -5px; right: -5px; background: #46DE48; color: white; font-size: clamp(10px, 1.5vw, 12px); padding: 3px 6px; border-radius: 12px; font-weight: bold; box-shadow: 0 5px 15px rgba(70,222,72,0.3);">
                                TOP 2
                            </div>
                        </div>
                        <div style="font-size: clamp(14px, 2vw, 16px); font-weight: 800; color: #363558; margin-bottom: 5px;">Agnes Nambi
                        </div>
                        <div style="font-size: clamp(11px, 1.5vw, 12px); color: #46DE48; font-weight: 700; margin-bottom: 8px; display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <span>
                                <i class="bi bi-geo-alt"></i>
                            </span> Wakiso District
                        </div>
                        <div style="font-size: clamp(20px, 3vw, 24px); font-weight: 800; color: #46DE48; margin-bottom: 5px;">75+</div>
                        <div style="font-size: clamp(10px, 1.3vw, 11px); color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>

                    <!-- Navigator 3 -->
                    <div style="background: white; border-radius: 20px; padding: clamp(20px, 3vw, 25px) clamp(15px, 2vw, 20px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #91746E, #DCCEC1);">
                        </div>

                        <div style="position: relative; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); margin: 0 auto 15px auto;">
                            <img src="https://i.pravatar.cc/150?u=RoseAtim"
                                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div style="position: absolute; top: -5px; right: -5px; background: #91746E; color: white; font-size: clamp(10px, 1.5vw, 12px); padding: 3px 6px; border-radius: 12px; font-weight: bold; box-shadow: 0 5px 15px rgba(145,116,110,0.3);">
                                TOP 3
                            </div>
                        </div>
                        <div style="font-size: clamp(14px, 2vw, 16px); font-weight: 800; color: #363558; margin-bottom: 5px;">Rose Atim</div>
                        <div style="font-size: clamp(11px, 1.5vw, 12px); color: #46DE48; font-weight: 700; margin-bottom: 8px; display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <span>
                                <i class="bi bi-geo-alt"></i>
                            </span> Lira District
                        </div>
                        <div style="font-size: clamp(20px, 3vw, 24px); font-weight: 800; color: #91746E; margin-bottom: 5px;">68+</div>
                        <div style="font-size: clamp(10px, 1.3vw, 11px); color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>

                    <!-- Navigator 4 -->
                    <div style="background: white; border-radius: 20px; padding: clamp(20px, 3vw, 25px) clamp(15px, 2vw, 20px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #808FBD, #A3B4E0);">
                        </div>

                        <div style="position: relative; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); margin: 0 auto 15px auto;">
                            <img src="https://i.pravatar.cc/150?u=DianaNamatovu"
                                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div style="position: absolute; top: -5px; right: -5px; background: #808FBD; color: white; font-size: clamp(10px, 1.5vw, 12px); padding: 3px 6px; border-radius: 12px; font-weight: bold; box-shadow: 0 5px 15px rgba(128,143,189,0.3);">
                                TOP 4
                            </div>
                        </div>
                        <div style="font-size: clamp(14px, 2vw, 16px); font-weight: 800; color: #363558; margin-bottom: 5px;">Diana Namatovu
                        </div>
                        <div style="font-size: clamp(11px, 1.5vw, 12px); color: #46DE48; font-weight: 700; margin-bottom: 8px; display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <span>
                                <i class="bi bi-geo-alt"></i>
                            </span> Mbale District
                        </div>
                        <div style="font-size: clamp(20px, 3vw, 24px); font-weight: 800; color: #808FBD; margin-bottom: 5px;">72+</div>
                        <div style="font-size: clamp(10px, 1.3vw, 11px); color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>

                    <!-- Navigator 5 -->
                    <div style="background: white; border-radius: 20px; padding: clamp(20px, 3vw, 25px) clamp(15px, 2vw, 20px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #DD3134, #FF6B6B);">
                        </div>

                        <div style="position: relative; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); margin: 0 auto 15px auto;">
                            <img src="https://i.pravatar.cc/150?u=EstherAmongin"
                                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div style="position: absolute; top: -5px; right: -5px; background: #DD3134; color: white; font-size: clamp(10px, 1.5vw, 12px); padding: 3px 6px; border-radius: 12px; font-weight: bold; box-shadow: 0 5px 15px rgba(221,49,52,0.3);">
                                TOP 5
                            </div>
                        </div>
                        <div style="font-size: clamp(14px, 2vw, 16px); font-weight: 800; color: #363558; margin-bottom: 5px;">Esther Amongin
                        </div>
                        <div style="font-size: clamp(11px, 1.5vw, 12px); color: #46DE48; font-weight: 700; margin-bottom: 8px; display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <span>
                                <i class="bi bi-geo-alt"></i>
                            </span> Soroti District
                        </div>
                        <div style="font-size: clamp(20px, 3vw, 24px); font-weight: 800; color: #DD3134; margin-bottom: 5px;">65+</div>
                        <div style="font-size: clamp(10px, 1.3vw, 11px); color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>

                    <!-- Navigator 6 -->
                    <div style="background: white; border-radius: 20px; padding: clamp(20px, 3vw, 25px) clamp(15px, 2vw, 20px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); text-align: center; border: 1px solid #f0f0f0; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #46DE48, #80E681);">
                        </div>

                        <div style="position: relative; width: clamp(60px, 10vw, 80px); height: clamp(60px, 10vw, 80px); margin: 0 auto 15px auto;">
                            <img src="https://i.pravatar.cc/150?u=JoanNantume"
                                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid white; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div style="position: absolute; top: -5px; right: -5px; background: #46DE48; color: white; font-size: clamp(10px, 1.5vw, 12px); padding: 3px 6px; border-radius: 12px; font-weight: bold; box-shadow: 0 5px 15px rgba(70,222,72,0.3);">
                                TOP 6
                            </div>
                        </div>
                        <div style="font-size: clamp(14px, 2vw, 16px); font-weight: 800; color: #363558; margin-bottom: 5px;">Joan Nantume
                        </div>
                        <div style="font-size: clamp(11px, 1.5vw, 12px); color: #46DE48; font-weight: 700; margin-bottom: 8px; display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <span>
                                <i class="bi bi-geo-alt"></i>
                            </span> Kampala District
                        </div>
                        <div style="font-size: clamp(20px, 3vw, 24px); font-weight: 800; color: #46DE48; margin-bottom: 5px;">78+</div>
                        <div style="font-size: clamp(10px, 1.3vw, 11px); color: #808FBD; font-weight: 600;">Mothers Supported</div>
                    </div>
                </div>

                <div style="text-align: center; margin-top: clamp(40px, 6vw, 60px); padding: 0 20px;">
                    <div style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: clamp(12px, 2vw, 15px) clamp(20px, 3vw, 30px); border-radius: 20px; color: #363558; font-size: clamp(12px, 1.5vw, 14px); font-weight: 700; gap: clamp(10px, 2vw, 15px); max-width: 600px; width: 100%;">
                        <span style="color: #40455F; font-size: clamp(16px, 2vw, 20px);">
                            <i class="bi bi-people"></i>
                        </span>
                        <div style="text-align: left;">
                            <div style="font-size: clamp(14px, 2vw, 16px); font-weight: 800; margin-bottom: 5px;">350+ Navigators Active</div>
                            <div style="font-size: clamp(11px, 1.5vw, 12px); opacity: 0.7;">These are just 6 of our incredible team members
                                working across 24 districts</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Join Our Team CTA -->
        <section style="padding: clamp(60px, 8vw, 100px) 5%; text-align: center; position: relative;">

            <!-- Background gradient -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05;"></div>

            <div style="position: relative; z-index: 2; max-width: 1000px; margin: 0 auto; padding: 0 20px;">
                <div style="background: linear-gradient(135deg, #363558 0%, #434961 100%); padding: clamp(40px, 6vw, 80px) clamp(25px, 4vw, 60px); border-radius: 35px; color: white; box-shadow: 0 30px 60px rgba(54,53,88,0.3); position: relative; overflow: hidden;">

                    <!-- Background pattern -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 20px 20px, white 1px, transparent 1px); background-size: clamp(25px, 4vw, 40px) clamp(25px, 4vw, 40px);">
                    </div>

                    <div style="position: relative; z-index: 2;">
                        <div style="display: inline-flex; align-items: center; padding: 10px clamp(20px, 3vw, 30px); background: rgba(255,255,255,0.2); color: white; border-radius: 30px; font-size: clamp(13px, 1.5vw, 15px); font-weight: 700; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <span style="font-size: clamp(16px, 2vw, 20px); margin-right: 10px;">
                                <i class="bi bi-briefcase"></i>
                            </span> CAREER OPPORTUNITIES
                        </div>

                        <h2 style="font-size: clamp(32px, 4vw, 48px); font-weight: 800; margin: 0 0 20px 0; line-height: 1.2;">
                            <span style="color:#FFF">Join Our</span> <span style="color: #46DE48;">Growing Team</span>
                        </h2>

                        <p
                            style="font-size: clamp(16px, 2vw, 18px); margin: 0 auto 40px auto; max-width: 700px; opacity: 0.95; line-height: 1.6;">
                            We're always looking for passionate individuals to join our mission. Whether as a navigator,
                            volunteer, or staff member—there's a place for you to make a lasting impact.
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 15px; justify-content: center; align-items: center; margin-bottom: clamp(40px, 6vw, 60px);">
                            <a href="#"
                                style="background: #46DE48; color: white; text-decoration: none; padding: clamp(15px, 2vw, 18px) clamp(30px, 4vw, 45px); border-radius: 12px; font-size: clamp(15px, 1.8vw, 17px); font-weight: 800; box-shadow: 0 15px 35px rgba(70,222,72,0.3); display: inline-flex; align-items: center; gap: 12px; width: 100%; max-width: 300px; justify-content: center;">
                                View Opportunities <span style="font-size: clamp(16px, 2vw, 20px);">→</span>
                            </a>

                            <a href="#"
                                style="background: transparent; color: white; text-decoration: none; padding: clamp(15px, 2vw, 18px) clamp(30px, 4vw, 45px); border-radius: 12px; font-size: clamp(15px, 1.8vw, 17px); font-weight: 700; border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px); width: 100%; max-width: 300px; justify-content: center;">
                                Become a Navigator
                            </a>
                        </div>

                        <!-- Quick stats -->
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: clamp(40px, 6vw, 60px); color: rgba(255,255,255,0.9); font-size: clamp(12px, 1.5vw, 14px);">
                            <div style="text-align: center;">
                                <div style="font-size: clamp(20px, 3vw, 28px); font-weight: 800; color: white;">350+</div>
                                <div>Team Members</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: clamp(20px, 3vw, 28px); font-weight: 800; color: white;">24</div>
                                <div>Districts Active</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: clamp(20px, 3vw, 28px); font-weight: 800; color: white;">12,000+</div>
                                <div>Mothers Impacted</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* Responsive media queries */
        @media (min-width: 640px) {
            .bg-decorative {
                display: block !important;
            }
            
            section:nth-of-type(2) > div > div:nth-of-type(2) {
                grid-template-columns: repeat(2, 1fr);
            }
            
            section:nth-of-type(3) > div > div:nth-of-type(2) {
                grid-template-columns: repeat(3, 1fr);
            }
            
            section:last-of-type > div > div > div:last-child > div:last-child {
                grid-template-columns: repeat(3, 1fr);
                gap: 40px;
            }
            
            section:last-of-type > div > div > div:nth-last-child(2) {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            section:last-of-type > div > div > div:nth-last-child(2) > a {
                width: auto;
                max-width: none;
            }
        }
        
        @media (min-width: 768px) {
            section:nth-of-type(2) > div > div:nth-of-type(2) {
                grid-template-columns: repeat(2, 1fr);
            }
            
            section:nth-of-type(3) > div > div:nth-of-type(2) {
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }
            
            section:last-of-type > div > div > div:nth-last-child(2) {
                flex-direction: row;
            }
        }
        
        @media (min-width: 1024px) {
            section:nth-of-type(2) > div > div:nth-of-type(2) {
                grid-template-columns: repeat(4, 1fr);
            }
            
            section:nth-of-type(3) > div > div:nth-of-type(2) {
                grid-template-columns: repeat(6, 1fr);
            }
            
            section:last-of-type > div > div > div:last-child > div:last-child {
                display: flex;
                justify-content: center;
                gap: 40px;
            }
            
            section:last-of-type > div > div > div:last-child > div:last-child > div:not(:last-child) {
                position: relative;
            }
            
            section:last-of-type > div > div > div:last-child > div:last-child > div:not(:last-child)::after {
                content: '';
                position: absolute;
                right: -20px;
                top: 50%;
                transform: translateY(-50%);
                width: 1px;
                height: 40px;
                background: rgba(255,255,255,0.3);
            }
        }
    </style>
@endsection