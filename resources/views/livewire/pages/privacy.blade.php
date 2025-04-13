<section class="py-20">
    <div class="container mx-auto px-4">
        <h1 class="text-6xl font-family-rust mb-8">Politique de Confidentialité</h1>

        <!-- Introduction avec animation subtile -->
        <div class="bg-base-200 p-8 rounded-xl mb-12 shadow-xl">
            <h2 class="text-3xl font-family-rust mb-4">Protection de vos données</h2>
            <p class="mb-4">Bienvenue sur la politique de confidentialité du site pierre-bultez.fr. Cette page a pour objectif de vous informer sur la façon dont vos informations personnelles sont collectées, utilisées et protégées.</p>
            <p class="mb-4">Dernière mise à jour : {{ date('d F Y') }}</p>

            <!-- Illustration amusante -->
            <div class="flex justify-center my-6">
                <div class="relative w-24 h-24">
                    <div class="absolute inset-0 bg-primary rounded-full opacity-20 animate-ping"></div>
                    <div class="relative flex items-center justify-center w-24 h-24 bg-primary rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary-content" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Onglets interactifs -->
        <div class="tabs tabs-boxed mb-8 flex justify-center">
            <button wire:click="changeTab('general')" class="tab tab-lg {{ $activeTab === 'general' ? 'tab-active' : '' }}">
                Informations générales
            </button>
            <button wire:click="changeTab('cookies')" class="tab tab-lg {{ $activeTab === 'cookies' ? 'tab-active' : '' }}">
                Cookies
            </button>
            <button wire:click="changeTab('rights')" class="tab tab-lg {{ $activeTab === 'rights' ? 'tab-active' : '' }}">
                Vos droits
            </button>
            <button wire:click="changeTab('contact')" class="tab tab-lg {{ $activeTab === 'contact' ? 'tab-active' : '' }}">
                Nous contacter
            </button>
        </div>

        <!-- Contenu des onglets -->
        <div class="bg-base-200 p-8 rounded-xl shadow-xl min-h-[400px]">
            <!-- Contenu de l'onglet Cookies -->
            <div class="{{ $activeTab === 'cookies' ? '' : 'hidden' }}">
                <h2 class="text-3xl font-family-rust mb-6">Cookies utilisés sur ce site</h2>

                <!-- Le reste du contenu de l'onglet Cookies est identique -->
                <div class="grid gap-6 md:grid-cols-2">
                    <!-- Carte de cookies interactive -->
                    <div class="card bg-base-100 shadow-md transition-all hover:shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title font-family-sans flex items-center">
                                <div class="w-10 h-10 rounded-full bg-success flex items-center justify-center mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-success-content" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Cookies Essentiels
                            </h3>
                            <p>Ces cookies sont nécessaires au fonctionnement du site et ne peuvent pas être désactivés.</p>
                            <div class="mt-4 space-y-2">
                                <div class="flex justify-between items-center p-2 bg-base-200 rounded-lg">
                                    <span class="font-mono text-sm">XSRF-TOKEN</span>
                                    <span class="badge badge-sm">Sécurité</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-base-200 rounded-lg">
                                    <span class="font-mono text-sm">laravel_session</span>
                                    <span class="badge badge-sm">Session</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Autres types de cookies -->
                    <div class="card bg-base-100 shadow-md transition-all hover:shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title font-family-sans flex items-center">
                                <div class="w-10 h-10 rounded-full bg-info flex items-center justify-center mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-info-content" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                                Cookies Fonctionnels
                            </h3>
                            <p>Ces cookies permettent d'améliorer les fonctionnalités et la personnalisation de votre expérience.</p>
                            <div class="mt-4 space-y-2">
                                <div class="flex justify-between items-center p-2 bg-base-200 rounded-lg">
                                    <span class="font-mono text-sm">aucun cookie fonctionnel</span>
                                    <span class="badge badge-sm">Préférence</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Animation cookie -->
                    <div class="md:col-span-2 flex justify-center my-6">
                        <div class="cookie-animation"
                             x-data="{ rotate: 0 }"
                             x-init="
                                setInterval(() => { rotate = (rotate + 1) % 360 }, 50);
                                setInterval(() => { bounce = Math.sin(Date.now() / 300) * 8 }, 50);
                             ">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                                class="w-32 h-32"
                                :style="`transform: rotate(${rotate}deg) translateY(${bounce}px)`"
                                viewBox="0 0 64 64"
                            >
                                <path fill="#dda85f" d="m36.9 22.7 2.5-18.6C37 3.5 34.6 2 32 2c-2.6 0-5 1.5-7.5 2.2-2.5.6-5.3.5-7.5 1.8s-3.6 3.8-5.4 5.6C9.8 13.4 7.3 14.8 6 17c-1.3 2.2-1.2 5-1.9 7.5C3.5 27 2 29.4 2 32c0 2.6 1.5 5 2.2 7.5.6 2.5.5 5.3 1.8 7.5s3.8 3.6 5.6 5.4c1.8 1.8 3.1 4.3 5.4 5.6 2.2 1.3 5 1.2 7.5 1.9 2.5.6 4.9 2.1 7.5 2.1 2.6 0 5-1.5 7.5-2.2 2.5-.7 5.3-.6 7.5-1.9 2.2-1.3 3.6-3.8 5.4-5.6 1.8-1.8 4.3-3.1 5.6-5.4 1.3-2.2 1.2-5 1.9-7.5.6-2.4 2.1-4.8 2.1-7.4 0-2.6-2.1-8.1-2.1-8.1l-23-1.2"/>
                                <path fill="#f2cb7d" d="M59.4 22.4c-1 .3-2.4.2-3.9-.4-2.1-.8-3.4-2.5-3.8-4.5-1 .3-3.4 0-5-1-2.4-1.5-2.9-5.7-2.9-5.7-2.7-.8-4.7-4-4.4-6.7-2.2-.6-5-.5-7.4-.5-2.4 0-4.6 1.4-6.8 2-2.3.6-4.9.5-6.9 1.7s-3.3 3.5-4.9 5.1c-1.7 1.7-4 2.9-5.1 4.9-1.2 2-1.1 4.6-1.7 6.9-.6 2.2-2 4.4-2 6.8 0 2.4 1.4 4.6 2 6.8.6 2.3.5 4.9 1.7 6.9s3.5 3.3 5.1 4.9c1.7 1.7 2.9 4 4.9 5.1 2 1.2 4.6 1.1 6.9 1.7 2.2.6 4.4 2 6.8 2 2.4 0 4.6-1.4 6.8-2 2.3-.6 4.9-.5 6.9-1.7s3.3-3.5 4.9-5.1c1.7-1.7 4-2.9 5.1-4.9 1.2-2 1.1-4.6 1.7-6.9.6-2.2 3-4 3.3-6.4.8-3.9-1.2-8.3-1.3-9"/>
                                <g fill="#dda85f">
                                    <path d="m50.1 10.8-1.4 1.4-1.3-1.4 1.3-1.3z"/>
                                    <path d="m55.8 17.8-.6.7-.7-.7.7-.7z"/>
                                    <path d="m50.8 13.2-.7.7-.7-.7.7-.7z"/>
                                    <path d="m44.6 7.1-.7.7-.7-.7.7-.7z"/>
                                    <path d="m57.2 20.3-.7.7-.7-.7.7-.7z"/>
                                    <path d="m57.8 17.8-.7.7-.7-.7.7-.7z"/>
                                </g>
                                <path fill="#6d4934" d="M11.8 20.6c-1 1.7.5 4.8 2.5 5.7 2.9 1.2 4.6 1.4 6.4-1.7.6-1.1 1.4-4 1.1-4.7-.4-1-2.1-3-3.2-3-3.1.1-6.1 2.5-6.8 3.7"/>
                                <path fill="#a37f6a" d="M12.3 20.6c-.7 1.2 1.1 4.8 3.5 4.5 3.3-.4 3-7.2 1.6-7.2-2.4 0-4.6 1.8-5.1 2.7"/>
                                <path fill="#6d4934" d="M45.2 39.1c1.4-.4 2.4-2.9 1.8-4.4-.9-2.3-1.8-3.3-4.4-2.6-.9.3-3 1.4-3.2 1.9-.3.8-.5 2.8.1 3.4 1.7 1.7 4.7 2 5.7 1.7"/>
                                <path fill="#a37f6a" d="M43.8 36.7c1.1-.3 2.8-3.7 1-3.9-3.1-.5-5.5 1-5.2 2.7.3 1.7 3.4 1.4 4.2 1.2"/>
                                <path fill="#6d4934" d="M24.9 44.5c-.3-1.2-2.5-2.1-3.9-1.5-2 .8-2.9 1.5-2.2 3.8.2.8 1.2 2.6 1.7 2.7.7.3 2.4.4 2.9-.1 1.5-1.4 1.7-4 1.5-4.9"/>
                                <path fill="#a37f6a" d="M23.2 43.6c-.2-.9-4.4.4-4 2 .8 2.7.8 3.1 1.6 3 1.5-.4 2.5-4.3 2.4-5"/>
                                <path fill="#6d4934" d="M51.1 25.5c-1.2.3-2.1 2.5-1.5 3.9.8 2 2.7 2.3 4.8 1.2 1.8-.9 1.9-4.1 1.4-4.7-1.5-1.5-3.8-.6-4.7-.4"/>
                                <path fill="#a37f6a" d="M50.6 26.6c-.6.7-1.1 3.5.4 3.1 2.7-.8 4.6-3.5 3.4-3.9-1.5-.5-3.1 0-3.8.8"/>
                                <path fill="#6d4934" d="m22.74 16.112 1.98-1.98 1.98 1.98-1.98 1.98z"/>
                                <g fill="#dda85f">
                                    <path d="m14.706 33.483 1.979-1.98 1.98 1.979-1.979 1.98z"/>
                                    <path d="m34.698 44.811 1.98-1.98 1.98 1.98-1.98 1.98z"/>
                                    <path d="m32.038 39.289 2.687-2.687 2.687 2.687-2.687 2.687z"/>
                                    <path d="m24.696 9.827 2.687-2.687 2.687 2.687-2.687 2.687z"/>
                                </g>
                                <g fill="#6d4934">
                                    <path d="m41.122 46.347 1.98-1.98 1.98 1.98-1.98 1.98z"/>
                                    <path d="m49.076 35.215 1.98-1.98 1.98 1.98-1.98 1.98z"/>
                                    <path d="m41.812 24.637.99-.99.99.99-.99.99z"/>
                                    <path d="m13.726 38.266.99-.99.99.99-.99.99z"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-2xl font-family-rust mb-4">Comment gérer vos cookies</h3>
                    <p class="mb-4">Vous pouvez à tout moment modifier vos préférences ou retirer votre consentement en cliquant sur le bouton "Gérer les cookies" situé en bas de page.</p>
                    <p>De plus, la plupart des navigateurs vous permettent de contrôler les cookies via leurs paramètres. Découvrez comment gérer les cookies dans votre navigateur :</p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                        <a href="https://support.google.com/chrome/answer/95647" class="btn btn-outline" target="_blank">Chrome</a>
                        <a href="https://support.mozilla.org/fr/kb/effacer-cookies-donnees-site-firefox" class="btn btn-outline" target="_blank">Firefox</a>
                        <a href="https://support.apple.com/fr-fr/guide/safari/sfri11471/mac" class="btn btn-outline" target="_blank">Safari</a>
                        <a href="https://support.microsoft.com/fr-fr/microsoft-edge/supprimer-les-cookies-dans-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" class="btn btn-outline" target="_blank">Edge</a>
                    </div>
                </div>
            </div>

            <!-- Autres onglets -->
            <div class="{{ $activeTab === 'general' ? '' : 'hidden' }}">
                <h2 class="text-3xl font-family-rust mb-6">Informations générales</h2>
                <p class="mb-4">En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
                <!-- Ajoutez plus de contenu ici -->
            </div>

            <div class="{{ $activeTab === 'rights' ? '' : 'hidden' }}">
                <h2 class="text-3xl font-family-rust mb-6">Vos droits</h2>
                <p class="mb-4">Conformément au RGPD, vous disposez des droits suivants concernant vos données :</p>
                <!-- Ajoutez plus de contenu ici -->
            </div>

            <div class="{{ $activeTab === 'contact' ? '' : 'hidden' }}">
                <h2 class="text-3xl font-family-rust mb-6">Nous contacter</h2>
                <p class="mb-4">Pour toute question relative à notre politique de confidentialité, vous pouvez nous contacter :</p>
                <!-- Ajoutez plus de contenu ici -->
            </div>
        </div>
    </div>
</section>
