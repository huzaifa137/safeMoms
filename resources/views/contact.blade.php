@extends('layouts.apps')

@section('content')

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #E7E9ED 100%); margin-top: 8em; padding-bottom: 0; overflow: hidden;">

    <section style="padding: 120px 10% 80px 10%; text-align: center;">
        <div style="display: inline-block; padding: 10px 30px; background: linear-gradient(135deg, #363558 0%, #2d2a4a 100%); color: white; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 30px; letter-spacing: 1px; box-shadow: 0 10px 30px rgba(54, 53, 88, 0.3);">CONTACT US</div>
        <h1 style="font-size: 56px; font-weight: 900; color: #363558; margin-bottom: 25px; line-height: 1.1;">Get in <span style="color: #DD3134;">Touch</span> With Us</h1>
        <p style="font-size: 20px; color: #91746E; max-width: 700px; margin: 0 auto 50px auto; line-height: 1.7;">
            Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
        </p>
        <div style="height: 5px; width: 150px; background: linear-gradient(to right, #DD3134, #46DE48); margin: 0 auto; border-radius: 2px;"></div>
    </section>

    <section style="padding: 0 10% 120px 10%;">
        <div style="display: flex; gap: 60px; align-items: stretch;">
            
            <!-- Left Column - Contact Cards -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 25px;">
                <!-- Address Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #DD3134;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">📍</div>
                        <div>
                            <div style="font-weight: 900; color: #363558; font-size: 18px;">Office Address</div>
                            <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Visit Our Headquarters</div>
                        </div>
                    </div>
                    <div style="font-size: 16px; color: #91746E; line-height: 1.6; padding-left: 10px;">
                        Plot 45, Maternal Health Center<br>
                        Kampala, Uganda
                    </div>
                </div>

                <!-- Phone Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #46DE48;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #46DE48, #6bff8f); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">📞</div>
                        <div>
                            <div style="font-weight: 900; color: #363558; font-size: 18px;">Phone Numbers</div>
                            <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Call Us Anytime</div>
                        </div>
                    </div>
                    <div style="font-size: 16px; color: #91746E; line-height: 1.6; padding-left: 10px;">
                        24/7 Helpline: <span style="color: #363558; font-weight: 800;">+256 700 123 456</span><br>
                        Office: <span style="color: #363558; font-weight: 800;">+256 700 987 654</span>
                    </div>
                </div>

                <!-- Email Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #808FBD;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #808FBD, #a6b5e0); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">✉️</div>
                        <div>
                            <div style="font-weight: 900; color: #363558; font-size: 18px;">Email Addresses</div>
                            <div style="font-size: 13px; color: #808FBD; font-weight: 600;">Send Us an Email</div>
                        </div>
                    </div>
                    <div style="font-size: 16px; color: #91746E; line-height: 1.6; padding-left: 10px;">
                        General: <span style="color: #363558; font-weight: 800;">hello@safemoms.org</span><br>
                        Partnerships: <span style="color: #363558; font-weight: 800;">partners@safemoms.org</span>
                    </div>
                </div>

                <!-- Social Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #91746E;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="font-weight: 900; color: #363558; margin-bottom: 25px; font-size: 18px; display: flex; align-items: center; gap: 15px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #91746E, #b99f97); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 22px;">🌐</div>
                        Follow Us on Social Media
                    </div>
                    <div style="display: flex; gap: 15px; justify-content: center;">
                        <a href="#" style="width: 50px; height: 50px; background: linear-gradient(135deg, #4267B2, #3b5998); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;" 
                           onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(66, 103, 178, 0.4)'" 
                           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">f</a>
                        <a href="#" style="width: 50px; height: 50px; background: linear-gradient(135deg, #1DA1F2, #1a91da); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;" 
                           onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(29, 161, 242, 0.4)'" 
                           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">𝕩</a>
                        <a href="#" style="width: 50px; height: 50px; background: linear-gradient(135deg, #E1306C, #C13584); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;" 
                           onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(225, 48, 108, 0.4)'" 
                           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">ig</a>
                        <a href="#" style="width: 50px; height: 50px; background: linear-gradient(135deg, #0077B5, #006699); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;" 
                           onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0, 119, 181, 0.4)'" 
                           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">in</a>
                        <a href="#" style="width: 50px; height: 50px; background: linear-gradient(135deg, #FF0000, #cc0000); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;" 
                           onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(255, 0, 0, 0.4)'" 
                           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">yt</a>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div style="flex: 1.5;">
                <div style="background: white; border-radius: 30px; padding: 60px; box-shadow: 0 25px 60px rgba(128, 143, 189, 0.2); height: 100%;">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 50px; color: #363558;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px; box-shadow: 0 15px 35px rgba(221, 49, 52, 0.3);">📝</div>
                        <div>
                            <div style="font-weight: 900; font-size: 32px; line-height: 1.1;">Send Us a Message</div>
                            <div style="font-size: 16px; color: #808FBD; margin-top: 8px; font-weight: 600;">We'll get back to you within 24 hours</div>
                        </div>
                    </div>
                    
                    <form>
                        <div style="display: flex; gap: 25px; margin-bottom: 25px;">
                            <div style="flex: 1;">
                                <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Your Name <span style="color: #DD3134;">*</span></label>
                                <input type="text" placeholder="Full name" style="width: 100%; padding: 18px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; transition: all 0.3s ease;" 
                                       onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'" 
                                       onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'">
                            </div>
                            <div style="flex: 1;">
                                <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Email Address <span style="color: #DD3134;">*</span></label>
                                <input type="email" placeholder="your@email.com" style="width: 100%; padding: 18px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; transition: all 0.3s ease;" 
                                       onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'" 
                                       onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'">
                            </div>
                        </div>

                        <div style="margin-bottom: 25px;">
                            <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Subject</label>
                            <select style="width: 100%; padding: 18px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; transition: all 0.3s ease; appearance: none;" 
                                    onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'" 
                                    onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'">
                                <option>General Inquiry</option>
                                <option>Partnership Interest</option>
                                <option>Volunteer Application</option>
                                <option>Media Request</option>
                                <option>Emergency Support</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 40px;">
                            <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Your Message <span style="color: #DD3134;">*</span></label>
                            <textarea placeholder="How can we help you? Please provide details..." style="width: 100%; height: 180px; padding: 20px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; resize: none; transition: all 0.3s ease;" 
                                      onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'" 
                                      onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'"></textarea>
                        </div>

                        <button type="submit" style="width: 100%; background: linear-gradient(to right, #363558, #2d2a4a); color: white; border: none; padding: 22px; border-radius: 15px; font-weight: 900; font-size: 18px; display: flex; align-items: center; justify-content: center; gap: 15px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 15px 35px rgba(54, 53, 88, 0.4);"
                                onmouseover="this.style.background='linear-gradient(to right, #DD3134, #ff6b6b)'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(221, 49, 52, 0.5)'" 
                                onmouseout="this.style.background='linear-gradient(to right, #363558, #2d2a4a)'; this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(54, 53, 88, 0.4)'">
                            <span style="font-size: 24px;">✈️</span> Send Message
                        </button>
                        
                        <div style="font-size: 13px; color: #808FBD; text-align: center; margin-top: 25px; line-height: 1.6;">
                            By submitting this form, you agree to our <a href="#" style="color: #363558; font-weight: 700; text-decoration: none; border-bottom: 1px solid #DCCEC1;">Privacy Policy</a> and consent to receive communications from SafeMoms.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Address Banner -->
    <section style="padding: 80px 10%; background: linear-gradient(135deg, #363558 0%, #2d2a4a 100%); color: white; text-align: center; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(to right, #DD3134, #46DE48, #808FBD);"></div>
        
        <div style="max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <div style="font-size: 32px; margin-bottom: 25px;">📍</div>
            <div style="font-size: 28px; font-weight: 800; margin-bottom: 20px; line-height: 1.3;">Plot 45, Maternal Health Center, Kampala, Uganda</div>
            <div style="font-size: 16px; opacity: 0.8; line-height: 1.6;">
                Our headquarters are open Monday through Friday from 8:00 AM to 5:00 PM. <br>
                For emergencies, our helpline operates 24/7.
            </div>
        </div>
        
        <div style="position: absolute; bottom: -50px; right: -50px; width: 200px; height: 200px; background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
    </section>

    <!-- Emergency Banner -->
    <section style="background: linear-gradient(90deg, #DD3134 0%, #ff6b6b 100%); padding: 25px 10%; display: flex; justify-content: center; align-items: center; color: white; gap: 20px;">
        <div style="font-size: 28px; font-weight: 900;">🚨</div>
        <div style="flex: 1; text-align: center;">
            <div style="font-size: 20px; font-weight: 800; margin-bottom: 5px;">Emergency 24/7 Helpline</div>
            <div style="font-size: 28px; font-weight: 900; letter-spacing: 1px;">
                <a href="tel:+256700123456" style="color: white; text-decoration: none; border-bottom: 2px dashed white; padding-bottom: 3px;">+256 700 123 456</a>
            </div>
        </div>
        <div style="font-size: 28px; font-weight: 900;">🚨</div>
    </section>

</div>

@endsection