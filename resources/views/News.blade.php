@extends('layouts.apps')

@section('content')

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #E7E9ED; padding-bottom: 80px; padding-top: 100px; overflow: hidden;">

    <section style="padding: 100px 10% 80px 10%; text-align: center; position: relative;">
        <div style="position: absolute; top: 50px; left: 10%; width: 100px; height: 100px; background: #46DE48; opacity: 0.1; border-radius: 50%;"></div>
        <div style="position: absolute; top: 150px; right: 10%; width: 150px; height: 150px; background: #DD3134; opacity: 0.1; border-radius: 50%;"></div>
        
        <h1 style="font-size: 64px; font-weight: 900; color: #363558; margin-bottom: 30px; line-height: 1; position: relative; z-index: 2;">
            <span style="display: block; font-size: 20px; color: #DD3134; font-weight: 700; letter-spacing: 5px; margin-bottom: 20px;">UPDATES & STORIES</span>
            SafeMoms Newsroom
        </h1>
        <p style="font-size: 20px; color: #91746E; max-width: 800px; margin: 0 auto 60px auto; line-height: 1.6; position: relative; z-index: 2;">
            Stay up to date with our latest expansions, community impact stories, and innovations in maternal health.
        </p>
        <div style="display: inline-block; padding: 15px 40px; background: #363558; color: white; border-radius: 10px; font-size: 16px; font-weight: 800; position: relative; z-index: 2; box-shadow: 0 10px 30px rgba(54, 53, 88, 0.3);">Explore Our Latest News</div>
    </section>

    <!-- Featured Story -->
    <section style="padding: 0 10% 100px 10%;">
        <div style="border-radius: 40px; overflow: hidden; display: flex; min-height: 500px; background: white; box-shadow: 0 30px 60px rgba(128, 143, 189, 0.2); position: relative;">
            <div style="flex: 1.3; position: relative; overflow: hidden; clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);">
                <div style="width: 100%; height: 100%; background: linear-gradient(45deg, #363558, #2d2a4a); position: relative;">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=800" style="width: 100%; height: 100%; object-fit: cover; mix-blend-mode: overlay; opacity: 0.7;">
                </div>
                <div style="position: absolute; top: 40px; left: 40px; background: #DD3134; color: white; padding: 12px 30px; border-radius: 10px; font-size: 14px; font-weight: 900; transform: rotate(-5deg); box-shadow: 0 10px 20px rgba(221, 49, 52, 0.4);">FEATURED STORY</div>
            </div>
            <div style="flex: 1; padding: 70px 60px; display: flex; flex-direction: column; justify-content: center; position: relative;">
                <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: #46DE48; border-radius: 50%; opacity: 0.1;"></div>
                
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                    <div style="width: 10px; height: 10px; background: #46DE48; border-radius: 50%;"></div>
                    <div style="font-size: 15px; color: #808FBD; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">March 15, 2024 • Press Release</div>
                </div>
                
                <h2 style="font-size: 44px; color: #363558; font-weight: 900; margin-bottom: 30px; line-height: 1.1;">SafeMoms Navigator Expands to Northern Uganda</h2>
                
                <p style="color: #91746E; line-height: 1.8; margin-bottom: 50px; font-size: 18px; position: relative; padding-left: 30px;">
                    <span style="position: absolute; left: 0; top: 0; font-size: 60px; line-height: 1; color: #DD3134; font-weight: 900; opacity: 0.3;">"</span>
                    We are thrilled to announce our official launch in Gulu and Lira districts, bringing our network of youth navigators to over 500 new mothers this month alone.
                </p>
                
                <div style="display: flex; align-items: center; gap: 30px;">
                    <a href="#" style="color: white; font-weight: 900; text-decoration: none; display: flex; align-items: center; gap: 15px; background: #363558; padding: 20px 40px; border-radius: 15px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#DD3134'; this.style.transform='translateY(-5px)'" onmouseout="this.style.backgroundColor='#363558'; this.style.transform='translateY(0)'">Read Full Story <span style="font-size: 24px;">⟶</span></a>
                    <a href="#" style="color: #363558; font-weight: 700; text-decoration: none; display: flex; align-items: center; gap: 10px;">Share <span style="font-size: 20px;">↗</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Cards -->
    <section style="padding: 0 10% 120px 10%; position: relative;">
        <div style="position: absolute; top: -50px; left: 5%; width: 200px; height: 200px; background: #808FBD; opacity: 0.05; border-radius: 50%;"></div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 50px; position: relative; z-index: 2;">
            
            <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transform: rotate(-1deg); transition: all 0.4s ease;" onmouseover="this.style.transform='rotate(0deg) translateY(-20px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" onmouseout="this.style.transform='rotate(-1deg)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                <div style="height: 250px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=500" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 25px; left: 25px; background: #46DE48; color: white; padding: 8px 20px; border-radius: 30px; font-size: 12px; font-weight: 900; transform: rotate(-5deg);">INNOVATION</div>
                </div>
                <div style="padding: 40px 35px;">
                    <h3 style="font-size: 26px; color: #363558; margin-bottom: 25px; font-weight: 900; line-height: 1.2;">New SMS Language Support: Swahili & Luganda</h3>
                    <p style="font-size: 16px; color: #91746E; line-height: 1.7; margin-bottom: 30px;">Our reminder system now supports two additional local languages to improve accessibility.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 2px solid #DCCEC1; padding-top: 25px;">
                        <div style="font-size: 14px; color: #808FBD; font-weight: 800;">Feb 28, 2024</div>
                        <a href="#" style="color: #363558; font-weight: 900; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">READ MORE <span style="font-size: 20px;">→</span></a>
                    </div>
                </div>
            </div>

            <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transform: rotate(1deg); transition: all 0.4s ease;" onmouseover="this.style.transform='rotate(0deg) translateY(-20px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" onmouseout="this.style.transform='rotate(1deg)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                <div style="height: 250px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&q=80&w=500" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 25px; left: 25px; background: #DD3134; color: white; padding: 8px 20px; border-radius: 30px; font-size: 12px; font-weight: 900; transform: rotate(-5deg);">COMMUNITY</div>
                </div>
                <div style="padding: 40px 35px;">
                    <h3 style="font-size: 26px; color: #363558; margin-bottom: 25px; font-weight: 900; line-height: 1.2;">Navigator Spotlight: Meet Sarah from Jinja</h3>
                    <p style="font-size: 16px; color: #91746E; line-height: 1.7; margin-bottom: 30px;">Discover how one young leader is transforming maternal health outcomes in her village.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 2px solid #DCCEC1; padding-top: 25px;">
                        <div style="font-size: 14px; color: #808FBD; font-weight: 800;">Feb 12, 2024</div>
                        <a href="#" style="color: #363558; font-weight: 900; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">READ MORE <span style="font-size: 20px;">→</span></a>
                    </div>
                </div>
            </div>

            <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transform: rotate(-2deg); transition: all 0.4s ease;" onmouseover="this.style.transform='rotate(0deg) translateY(-20px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" onmouseout="this.style.transform='rotate(-2deg)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                <div style="height: 250px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&q=80&w=500" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 25px; left: 25px; background: #808FBD; color: white; padding: 8px 20px; border-radius: 30px; font-size: 12px; font-weight: 900; transform: rotate(-5deg);">PARTNERSHIPS</div>
                </div>
                <div style="padding: 40px 35px;">
                    <h3 style="font-size: 26px; color: #363558; margin-bottom: 25px; font-weight: 900; line-height: 1.2;">SafeMoms Joins Global Health Alliance</h3>
                    <p style="font-size: 16px; color: #91746E; line-height: 1.7; margin-bottom: 30px;">A new partnership aimed at scaling our low-tech emergency referral model nationwide.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 2px solid #DCCEC1; padding-top: 25px;">
                        <div style="font-size: 14px; color: #808FBD; font-weight: 800;">Jan 25, 2024</div>
                        <a href="#" style="color: #363558; font-weight: 900; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">READ MORE <span style="font-size: 20px;">→</span></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 100px;">
            <div style="display: inline-flex; align-items: center; gap: 20px;">
                <div style="width: 100px; height: 3px; background: linear-gradient(to right, #DD3134, #46DE48);"></div>
                <a href="#" style="color: #363558; font-weight: 900; text-decoration: none; font-size: 18px;">VIEW ALL NEWS ARTICLES</a>
                <div style="width: 100px; height: 3px; background: linear-gradient(to right, #46DE48, #DD3134);"></div>
            </div>
        </div>
    </section>

    <!-- As Seen In -->
    <section style="padding: 0 10% 100px 10%;">
        <div style="background: #363558; border-radius: 30px; padding: 80px 60px; text-align: center; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 10px; background: linear-gradient(to right, #DD3134, #46DE48, #808FBD);"></div>
            
            <h4 style="font-size: 14px; color: #DCCEC1; text-transform: uppercase; letter-spacing: 4px; margin-bottom: 60px;">AS SEEN IN</h4>
            
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; position: relative; z-index: 2;">
                <div style="background: white; border-radius: 20px; padding: 40px 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                    <span style="font-size: 26px; font-weight: 900; color: #363558;">THE NEW VISION</span>
                </div>
                <div style="background: white; border-radius: 20px; padding: 40px 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                    <span style="font-size: 26px; font-weight: 900; color: #363558;">DAILY MONITOR</span>
                </div>
                <div style="background: white; border-radius: 20px; padding: 40px 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                    <span style="font-size: 26px; font-weight: 900; color: #363558;">NTV UGANDA</span>
                </div>
                <div style="background: white; border-radius: 20px; padding: 40px 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                    <span style="font-size: 26px; font-weight: 900; color: #363558;">BBC HEALTH</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section style="padding: 0 10% 120px 10%;">
        <div style="background: linear-gradient(135deg, #DD3134 0%, #46DE48 100%); border-radius: 40px; padding: 100px 80px; color: white; text-align: center; position: relative; overflow: hidden; box-shadow: 0 30px 60px rgba(221, 49, 52, 0.3);">
            <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: white; border-radius: 50%; opacity: 0.1;"></div>
            <div style="position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: white; border-radius: 50%; opacity: 0.1;"></div>
            
            <h2 style="font-size: 52px; font-weight: 900; margin-bottom: 30px; line-height: 1.1; position: relative; z-index: 2;">Never Miss an Update</h2>
            <p style="font-size: 20px; opacity: 0.9; margin-bottom: 60px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6; position: relative; z-index: 2;">
                Subscribe to our monthly newsletter for the latest updates, impact stories, and innovations in maternal health.
            </p>
            
            <div style="display: flex; gap: 20px; justify-content: center; position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
                <input type="email" placeholder="Your email address" style="flex: 1; padding: 25px 35px; border-radius: 20px; border: none; font-size: 18px; background: rgba(255,255,255,0.9); color: #363558; font-weight: 600;">
                <button style="background: #363558; color: white; border: none; padding: 25px 60px; border-radius: 20px; font-weight: 900; font-size: 18px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 15px 30px rgba(54, 53, 88, 0.4);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(54, 53, 88, 0.6)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(54, 53, 88, 0.4)'">Subscribe Now</button>
            </div>
            
            <div style="font-size: 14px; opacity: 0.8; margin-top: 30px; position: relative; z-index: 2;">
                Join over 10,000 subscribers who receive our monthly updates
            </div>
        </div>
    </section>

</div>

@endsection