<section class="bg-white dark:bg-gray-900" id="Pricing">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-8xl lg:px-4">

        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Designed for
                    business teams like yours</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on
                    markets where technology, innovation, and capital can unlock long-term value and drive economic
                    growth.</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Starter Card -->
                @include('6-pricing.starter')
                <!-- Prenium Card -->
                @include('6-pricing.prenium')
                <!-- Enterprise Card -->
                @include('6-pricing.entreprise')
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-x-16 bg-gray-50 dark:bg-gray-800 p-8 rounded-t-lg">
            <div class="hidden md:block"></div>
            <div class="mb-8 md:mb-0">
                <h3 class="mb-1 text-lg font-bold text-gray-900 dark:text-white">Starter</h3>
                <div class="flex justify-start items-center space-x-3">
                    <span>A partir de</span>
                    <span class="block mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">99€</span>
                </div>
                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Get started with an open source library of web
                    components and interactive elements based on Tailwind CSS.</p>
                <a href="#"
                    class="block w-full px-6 py-2 font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:text-gray-100 hover:bg-gray-100 hover:text-blue-700 dark: dark:hover:bg-gray-700 focus:outline-none focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                    Get started
                </a>
            </div>
            <div class="mb-8 md:mb-0">
                <h3 class="mb-1 text-lg font-bold text-gray-900 dark:text-white">Prenium</h3>
                <div class="flex justify-start items-center space-x-3">
                    <span>A partir de</span>
                    <span class="block mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">199€</span>
                </div>
                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Recommended for professional developers and
                    companies building enterprise-level websites and applications.</p>
                <button
                    class="items-center justify-center w-full px-6 py-2 mb-3 text-base font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-5 md:mb-0">
                    Buy now
                </button>
                <a href="#"
                    class="block mt-3 text-sm font-medium text-blue-600 dark:text-blue-500 hover:text-blue-800">
                    <span class="mr-1">View team pricing</span>
                </a>
            </div>
            <div class="mb-8 md:mb-0">
                <h3 class="mb-1 text-lg font-bold text-gray-900 dark:text-white">Entreprise</h3>
                <div class="flex justify-start items-center space-x-3">
                    <span>A partir de</span>
                    <span class="block mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">499€</span>
                </div>
                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Upgrade your Figma toolkit with a design
                    system built on top Tailwind CSS featuring variants, style guide, auto layout, and more.</p>
                <button
                    class="items-center justify-center w-full px-6 py-2 mb-3 text-base font-medium text-center text-white bg-purple-600 rounded-lg hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 md:mr-5 md:mb-0">
                    Buy now
                </button>
                <a href="#"
                    class="block mt-3 text-sm font-medium text-purple-600 dark:text-purple-500 hover:text-purple-800">
                    <span class="mr-1">View team pricing</span>
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <div class="overflow-hidden min-w-max">
                <div
                    class="grid grid-cols-4 p-4 text-sm font-medium text-gray-900 bg-gray-100 border-t border-b border-gray-200 gap-x-16 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                    <div class="flex items-center">
                        <div class="relative w-6 h-6">
                            <span
                                class="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                <img src="/storage/images/logo.svg" alt="logo"
                                    class="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"
                                    sizes="100vw"
                                    srcset="/storage/images/logo.svg 640w, /storage/images/logo.svg 750w, /storage/images/logo.svg 828w, /storage/images/logo.svg 1080w, /storage/images/logo.svg 1200w, /storage/images/logo.svg 1920w, /storage/images/logo.svg 2048w, /storage/images/logo.svg 3840w, ">
                                <noscript></noscript>
                            </span>
                        </div>
                        <span class="ml-3">Flowbite Blocks</span>
                    </div>
                    <div>Starter</div>
                    <div>Prenium</div>
                    <div>Entreprise</div>
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Design personnalisé</p>
                    </div>
                    @include('components.check')
                    @include('components.check')
                    @include('components.check')
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Nombre de pages statiques</p>
                    </div>
                    <div class="text-gray-500 dark:text-gray-400">5 pages</div>
                    <div class="text-gray-500 dark:text-gray-400">10 pages</div>
                    <div class="text-gray-500 dark:text-gray-400">illimité</div>
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Pages dynamiques</p>
                    </div>
                    @include('components.red_cross')
                    <div class="text-gray-500 dark:text-gray-400">5 pages</div>
                    <div class="text-gray-500 dark:text-gray-400">illimité</div>
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Formulaire de contact</p>
                    </div>
                    @include('components.check')
                    @include('components.check')
                    @include('components.check')
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Galerie d'images</p>
                    </div>
                    @include('components.check')
                    @include('components.check')
                    @include('components.check')
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Blog</p>
                    </div>
                    @include('components.red_cross')
                    @include('components.check')
                    @include('components.check')
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>E-commerce</p>
                    </div>
                    @include('components.red_cross')
                    @include('components.red_cross')
                    @include('components.check')
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Optimisation SEO</p>
                    </div>
                    @include('components.red_cross')
                    @include('components.check')
                    @include('components.check')
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Hébergement</p>
                    </div>
                    <div class="text-gray-500 dark:text-gray-400">15€/mois</div>
                    <div class="text-gray-500 dark:text-gray-400">30€/mois</div>
                    <div class="text-gray-500 dark:text-gray-400">150€/mois</div>
                </div>


                <!-- Support -->
                <div
                    class="grid grid-cols-4 p-4 text-sm font-medium text-gray-900 bg-gray-100 border-b border-gray-200 gap-x-16 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                    <div>Support</div>
                    <div>Community Edition</div>
                    <div>Developer Edition</div>
                    <div>Designer Edition</div>
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Maintenance</p>
                    </div>
                    <div class="text-gray-500 dark:text-gray-400">50€/mois</div>
                    <div class="text-gray-500 dark:text-gray-400">100€/mois</div>
                    <div class="text-gray-500 dark:text-gray-400">Sur devis</div>
                </div>
                <!-- -->
                <div
                    class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 border-b border-gray-200 gap-x-16 dark:border-gray-700">
                    <div class="text-gray-500 dark:text-gray-400">
                        <p>Support technique </p>
                    </div>
                    <div class="text-gray-500 dark:text-gray-400">Email</div>
                    <div class="text-gray-500 dark:text-gray-400">Email</div>
                    <div class="text-gray-500 dark:text-gray-400">Email / Téléphone</div>
                </div>
            </div>
        </div>
</section>
