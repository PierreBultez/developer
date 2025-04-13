<section class="py-20">
    <div class="container mx-auto px-4">
        <h1 class="text-6xl font-family-rust mb-8">Mentions Légales</h1>

        <!-- Introduction avec illustration -->
        <div class="bg-base-200 p-8 rounded-xl mb-12 shadow-xl">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div>
                    <h2 class="text-3xl font-family-rust mb-4">Informations légales</h2>
                    <p class="mb-4">Ce site respecte les dispositions de la législation française et européenne sur les services numériques.</p>
                    <p class="text-sm text-base-content/70">Dernière mise à jour : {{ date('d F Y') }}</p>
                </div>
                <div class="mt-6 md:mt-0">
                    <div class="relative w-24 h-24">
                        <div class="absolute inset-0 bg-secondary rounded-full opacity-20 animate-pulse"></div>
                        <div class="relative flex items-center justify-center w-24 h-24 bg-secondary rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-secondary-content" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="grid gap-6 md:grid-cols-2">
            <!-- Propriétaire du site -->
            <div class="card bg-base-100 shadow-xl transition-transform hover:scale-[1.01]">
                <div class="card-body">
                    <h2 class="card-title font-family-rust text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Propriétaire du site
                    </h2>
                    <div class="divider my-2"></div>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="font-bold w-24 flex-shrink-0">Nom :</span>
                            <span>Pierre Bultez</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold w-24 flex-shrink-0">Adresse du site :</span>
                            <a href="https://developer.pierrebultez.com" class="link link-hover link-primary" target="_blank">https://developer.pierrebultez.com</a>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold w-24 flex-shrink-0">Email :</span>
                            <a href="mailto:pierre.bultez@proton.me" class="link link-hover link-primary">pierre.bultez@proton.me</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Hébergeur -->
            <div class="card bg-base-100 shadow-xl transition-transform hover:scale-[1.01]">
                <div class="card-body">
                    <h2 class="card-title font-family-rust text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                        Hébergeur
                    </h2>
                    <div class="divider my-2"></div>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="font-bold w-24 flex-shrink-0">Nom :</span>
                            <span>OVH SAS</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold w-24 flex-shrink-0">Adresse :</span>
                            <span>2 rue Kellermann, 59100 Roubaix, France</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold w-24 flex-shrink-0">Téléphone :</span>
                            <span>1007</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold w-24 flex-shrink-0">Site web :</span>
                            <a href="https://www.ovh.com" class="link link-hover link-primary" target="_blank">https://www.ovh.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Responsabilité -->
            <div class="card bg-base-100 shadow-xl transition-transform hover:scale-[1.01]">
                <div class="card-body">
                    <h2 class="card-title font-family-rust text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        Responsabilité
                    </h2>
                    <div class="divider my-2"></div>
                    <p class="mb-3">Le contenu de ce site (textes, images, vidéos, etc.) est la propriété exclusive de Pierre Bultez, sauf mention contraire. Toute reproduction, distribution ou utilisation sans autorisation préalable est strictement interdite.</p>
                    <p>Le propriétaire du site s'efforce de fournir des informations exactes et mises à jour. Toutefois, il ne saurait être tenu responsable d'éventuelles erreurs ou omissions, ni des conséquences de l'utilisation de ces informations.</p>
                </div>
            </div>

            <!-- Données personnelles -->
            <div class="card bg-base-100 shadow-xl transition-transform hover:scale-[1.01]">
                <div class="card-body">
                    <h2 class="card-title font-family-rust text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                        Données personnelles
                    </h2>
                    <div class="divider my-2"></div>
                    <p class="mb-3">Ce site respecte votre vie privée. Aucune donnée personnelle n'est collectée à votre insu.</p>
                    <ul class="list-disc list-inside mb-3 space-y-1">
                        <li>Si vous contactez le propriétaire via un formulaire ou une adresse email, vos données ne seront utilisées que pour répondre à votre demande.</li>
                        <li>Ce site peut utiliser des cookies à des fins de bon fonctionnement.</li>
                    </ul>
                    <p>Vous disposez d'un droit d'accès, de modification et de suppression de vos données conformément au Règlement Général sur la Protection des Données (RGPD). Pour exercer ces droits, contactez <a href="mailto:pierre.bultez@proton.me" class="link link-primary">pierre.bultez@proton.me</a>.</p>
                    <div class="mt-4">
                        <a href="{{ route('privacy') }}" class="btn btn-outline btn-sm">Voir la politique de confidentialité</a>
                    </div>
                </div>
            </div>

            <!-- Propriété intellectuelle -->
            <div class="card bg-base-100 shadow-xl transition-transform hover:scale-[1.01] md:col-span-2">
                <div class="card-body">
                    <h2 class="card-title font-family-rust text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                        Propriété intellectuelle
                    </h2>
                    <div class="divider my-2"></div>
                    <p class="mb-3">Tous les éléments présents sur ce site (logos, textes, visuels, etc.) sont les propriétés des entreprises respectives, je ne suis en aucun cas affilié à une de ces marques.</p>
                    <p class="mb-3">Ce site utilise Laravel 12, Livewire, Tailwind CSS et DaisyUI. Le code source du site est disponible sur mon GitHub : <a href="https://github.com/PierreBultez" class="link link-primary" target="_blank">https://github.com/PierreBultez</a></p>
                    <p>L'utilisation de ce code est libre sous réserve de mentionner son créateur : Pierre Bultez – <a href="https://developer.pierrebultez.com" class="link link-primary" target="_blank">https://developer.pierrebultez.com</a></p>
                </div>
            </div>

            <!-- Contact -->
            <div class="card bg-base-100 shadow-xl transition-transform hover:scale-[1.01] md:col-span-2">
                <div class="card-body">
                    <h2 class="card-title font-family-rust text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contact
                    </h2>
                    <div class="divider my-2"></div>
                    <p class="mb-4">Pour toute question relative aux mentions légales ou au site, veuillez contacter :</p>
                    <div class="flex items-center">
                        <span class="font-bold mr-2">Email :</span>
                        <a href="mailto:pierre.bultez@proton.me" class="link link-primary">pierre.bultez@proton.me</a>
                    </div>
                    <div class="mt-6 flex justify-center">
                        <a href="mailto:pierre.bultez@proton.me" class="btn btn-primary">Me contacter directement</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
