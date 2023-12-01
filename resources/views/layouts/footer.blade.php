<footer class="footer pt-20 bg-primary text-black max-w-7xl mx-auto sm:px-2 md:px-6 lg:px-8">
    <div class="footer__container container flex justify-between pb-10">
        <div class="schemacode__logo shrink-0 ">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/schemacode-logo.svg') }}" class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>
        <div class="footer__data grid grid-cols-3">
            <div>
                <h3 class="footer__title text-2xl font-extrabold">Contact</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Email</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Github</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Fax</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title text-2xl font-extrabold">Support</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Feature Help</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Updates</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Privacy & Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer__group">
                <form action="" class="footer__form ">
                    <input type="opinion" placeholder="Opinion" class="footer__input rounded-xl ">
                    <button class="footer__button button">
                        Send <i class="ri-send-plane-fill"></i>
                    </button>
                </form>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="footer__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://www.youtube.com/" class="footer__social-link">
                        <i class="ri-youtube-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copy text-center py-10">
        &#169; 2023 Schemacode. All rights reserved.
    </div>
</footer>