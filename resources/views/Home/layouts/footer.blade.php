<!-- Contact Section -->
<section class="penn-services" id="gettouch-section" style="background: #fff;">
    <div class="container">
        <div class="penn-section-header">
            <span class="penn-section-subtitle">تواصل معنا</span>
            <h2 class="penn-section-title">اتصل بنا</h2>
        </div>

        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="penn-feature-card" style="text-align: right;">
                    <div class="penn-feature-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h4 class="penn-feature-title">العنوان</h4>
                    <p class="penn-feature-description">N°04 BLOC « C » A/F TIZNIT (M)</p>

                    <div class="penn-feature-icon mt-4">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h4 class="penn-feature-title">الهاتف</h4>
                    <p class="penn-feature-description">05.28.86.37.12<br>05.28.86.23.64</p>

                    <div class="penn-feature-icon mt-4">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h4 class="penn-feature-title">البريد الإلكتروني</h4>
                    <p class="penn-feature-description">tiznitcpsi@gmail.com</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="penn-service-card">
                    <div class="penn-service-header">
                        <h2>راسلنا</h2>
                        <p>نحن هنا للإجابة على استفساراتكم</p>
                    </div>
                    <div class="penn-service-body">
                        <form action="" class="contact100-form validate-form" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control p-4" placeholder="الاسم الكامل" style="border-radius: 10px;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="email" class="form-control p-4" placeholder="البريد الإلكتروني" style="border-radius: 10px;">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="text" name="subject" class="form-control p-4" placeholder="الموضوع" style="border-radius: 10px;">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea name="content" class="form-control p-4" rows="5" placeholder="الرسالة" style="border-radius: 10px;"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="penn-btn border-0 px-5">إرسال الرسالة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="modern-footer" id="footer-section">
    <div class="container">
        <div class="row text-right" dir="rtl">
            <!-- About -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-widget">
                    <div class="fa-logo mb-3">
                        <a href="#"><img src="{{asset('img/logo.JPG')}}" alt="" style="height: 60px; border-radius: 10px;"></a>
                    </div>
                    <p style="color: rgba(255,255,255,0.7); line-height: 1.8;">نود أن نشكر جميع الأعضاء الذين وضعوا ثقتهم الكاملة بنا ونأمل أن نتمكن من تلبية توقعاتك.</p>
                    <div class="footer-social">
                        <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-btn"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="social-btn"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <div class="footer-widget">
                    <h4>روابط مفيدة</h4>
                    <ul class="footer-links">
                        <li><a href="/listEvent/">اخر المستجدات</a></li>
                    </ul>
                </div>
            </div>

            <!-- Help -->
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <div class="footer-widget">
                    <h4>المساعدة</h4>
                    <ul class="footer-links">
                        <li><a href="/login">تسجيل الدخول</a></li>
                        <li><a href="#gettouch-section">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-widget">
                    <h4>خدمات</h4>
                    <ul class="footer-links">
                        <li><a href="">الشكايات الالكترونية</a></li>
                        <li><a href="">اقتراحات و اراء</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> Tous droits réservés | Ce site web est réalisé par la direction provinciale de tiznit <i class="fa fa-heart" aria-hidden="true" style="color: var(--penn-secondary);"></i>
            </p>
        </div>
    </div>
</footer>
<!-- Footer Section End -->