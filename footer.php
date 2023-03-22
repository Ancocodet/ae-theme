
    </main>

    <?php do_action( 'tailpress_content_end' ); ?>

    </div>

    <?php do_action( 'tailpress_content_after' ); ?>

    <footer id="colophon" class="footer relative" role="contentinfo">
	    <?php do_action( 'tailpress_footer' ); ?>
        <div class="hidden sm:block bg-logo">
            <div class="max-w-6xl m-auto text-gray-500 flex flex-wrap justify-right">
                <div class="p-5 w-60">
                    <div class="text-xs uppercase text-gray-400 font-bold">Email us</div>
                    <a class="hover:text-gray-300 my-3 block" href="mailto:info@ancozockt.de?subject=Contact&body=Dont´t change the Subject!">info@ancozockt.de<span class="text-logo text-xs p-1">general</span></a>
                    <a class="hover:text-gray-300 my-3 block" href="mailto:support@ancozockt.de?subject=Support Request&body=Dont´t change the Subject!">support@ancozockt.de<span class="text-logo text-xs p-1">support</span></a>
                </div>
                <div class="p-5 w-48">
                    <div class="text-xs uppercase text-gray-400 font-bold">Home</div>
                    <a class="hover:text-gray-300 my-3 block" href="#">Friends <span class="text-gray-600 text-xs p-1"></span></a>
                    <a class="hover:text-gray-300 my-3 block" href="#">Partners <span class="text-gray-600 text-xs p-1"></span></a>
                </div>
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-400 font-bold">Others</div>
                    <a class="hover:text-gray-300 my-3 block" href="https://dewp.space/@ancozockt">Mastodon <span class="text-logo text-xs p-1">social</span></a>
                    <a class="hover:text-gray-300 my-3 block" href="https://github.com/Ancocodet">GitHub <span class="text-logo text-xs p-1">source</span></a>
                </div>
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-400 font-bold">Support</div>
                    <a class="hover:text-gray-300 my-3 block" href="#">Help Center <span class="text-gray-600 text-xs p-1"></span></a>
                    <a class="hover:text-gray-300 my-3 block" href="#">Contact Form <span class="text-gray-600 text-xs p-1"></span></a>
                </div>
            </div>
        </div>
        <div class="bg-logo pt-2">
            <div class="flex pb-5 px-3 m-auto pt-5 border-t border-gray-700 text-gray-500 text-sm flex-col md:flex-row max-w-6xl">
                <div class="mt-2">&copy 2018 - <?php echo date_i18n( 'Y' );?> Copyright by Ancozockt Environment</div>
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                    <a href="https://ancozockt.info/privacy" class="hover:text-gray-300 w-auto mx-5">Privacy</a>
                    <a href="https://ancozockt.info/imprint" class="hover:text-gray-300 w-auto mx-5">Imprint</a>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <?php wp_footer(); ?>

    </body>
</html>
