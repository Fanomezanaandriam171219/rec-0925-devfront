@extends('main-app')

@section('content')
    <div class="overflow-auto   ">
        <x-header/>
        <div class="mt-[240px] ml-30">
            <h2 class="pt-20 text-left pl-5 font-figtree
        font-bold text-[31px] leading-[38px]
        tracking-[0px] text-[#383838] opacity-100 mb-20">
                Confirmer et payer
            </h2>

            <div class="flex gap-20">
                <div class ="w-1/2  ">
                    <div class="h-[109px] border
                border-[#00000029] rounded-[12px] shadow-lg flex items-center p-4 gap-4">
                        <img class="w-[50px] h-[50px]" src="{{ asset('images/fleche.png') }}" alt="arrow icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left font-figtree text-[25px] leading-[30px]">
                                Date de réservation en forte demande
                            </p>
                            <p class="text-left font-figtree text-[25px] leading-[30px]">
                                Les réservations sont fréquentes pour ce centre
                            </p>
                        </div>
                    </div>
                    <h3 class="pt-20 text-left pl-5 font-figtree
                        font-bold text-[31px] leading-[38px]
                        tracking-[0px] text-[#383838] opacity-100 mb-10"
                    >Vos informations personnelles</h3>
                    <label class="w-full h-[90px] flex items-center
                         bg-[#F2F3F5] border rounded-[20px] border-gray-300 shadow-md
                         text-gray-800 font-medium font-figtree text-[25px] mb-5">
                        <span class="ml-10">Nom Prénoms</span>
                    </label>
                    <label class="w-full h-[90px] flex items-center
                         bg-[#F2F3F5] border rounded-[20px] border-gray-300 shadow-md
                         text-gray-800 font-medium font-figtree text-[25px] mb-5">
                        <span class="ml-10">Email</span>
                    </label>
                    <label class="w-full h-[90px] flex items-center
                         bg-[#F2F3F5] border rounded-[20px] border-gray-300 shadow-md
                         text-gray-800 font-medium font-figtree text-[25px] mb-10">
                        <span class="ml-10">Numéro de téléphone</span>
                    </label>

                    <h3 class="border-t-1 border-gray-300
                     pt-20 text-left pl-5 font-figtree
                        font-bold text-[31px] leading-[38px]
                        tracking-[0px] text-[#383838] opacity-100 mb-10"
                    >Votre test psychotechnique</h3>
                    <div class="h-[109px]
                             flex items-center p-4 gap-4">
                        <img class="w-[50px] h-[50px]" src="{{ asset('images/calendar_dark.png') }}" alt="calendar icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left font-figtree font-bold text-[25px] leading-[30px]">
                                Date
                            </p>
                            <p class="text-left font-figtree text-[25px] leading-[30px]">
                                12 mai 2025
                            </p>
                        </div>
                    </div>
                    <div class="h-[109px]
                             flex items-center p-4 gap-4">
                        <img class="w-[50px] h-[50px]" src="{{ asset('images/montre.png') }}" alt="montre icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left font-figtree font-bold text-[25px] leading-[30px]">
                                Horaire
                            </p>
                            <p class="text-left font-figtree text-[25px] leading-[30px]">
                                12:30
                            </p>
                        </div>
                    </div>

                    <div class="h-[109px] mb-10
                             flex items-center p-4 gap-4">
                        <img class="w-[50px] h-[50px]"
                             src="{{ asset('images/localisation.png') }}" alt="localisation icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left font-figtree
                            font-bold text-[25px] leading-[30px]">
                                Adresse
                            </p>
                            <p class="text-left font-figtree text-[25px] leading-[30px]">
                                39 Rue Emile Steiner, 2700 Vernon
                            </p>
                        </div>
                    </div>

                    <h3 class="border-t-1 border-gray-300
                     pt-10 text-left pl-5 font-figtree
                        font-bold text-[31px] leading-[38px]
                        tracking-[0px] text-[#383838] opacity-100"
                    >Choisissez votre moyen de paiement</h3>
                    <div class="flex items-center gap-x-2 mb-20">
                        <img class="w-[50px] h-[50px] ml-5"
                             src="{{ asset('images/cadenas.png') }}" alt="cadenas icon">
                        <p class="text-[25px]">100% sécurisé</p>
                    </div>


                    <div class="h-[109px] flex items-center p-4 gap-4 border-b-2
                    border-gray-300">
                        <input type="checkbox"
                               class="appearance-none w-6 h-6 rounded-full border border-gray-300
                             checked:bg-[#0DBC0D] checked:border-[#0DBC0D]
                             flex items-center justify-center cursor-pointer">
                        <img class="w-[150px] h-full"
                             src="{{ asset('images/visa.png') }}" alt="carte bancaire icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left
                            font-figtree text-[25px] leading-[30px]">
                                Carte Bancaire
                            </p>
                        </div>
                    </div>

                    <div class="h-[109px] flex items-center p-4 gap-4 border-b-2
                    border-gray-300">
                        <input type="checkbox"
                               class="appearance-none w-6 h-6 rounded-full border border-gray-300
                                 checked:bg-[#0DBC0D] checked:border-[#0DBC0D]
                                 flex items-center justify-center cursor-pointer">
                        <img class="w-[150px] h-full"
                             src="{{ asset('images/apple_pay.png') }}" alt="apple pay icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left
                            font-figtree text-[25px] leading-[30px]">
                                Apple Pay
                            </p>
                        </div>
                    </div>

                    <div class="h-[109px] flex items-center p-4 gap-4 border-b-2
                    border-gray-300">
                        <input type="checkbox"
                               class="appearance-none w-6 h-6 rounded-full border border-gray-300
                                 checked:bg-[#0DBC0D] checked:border-[#0DBC0D]
                                 flex items-center justify-center cursor-pointer">
                        <img class="w-[150px] h-full"
                             src="{{ asset('images/paypal.png') }}" alt="paypal icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left
                            font-figtree text-[25px] leading-[30px]">
                                Paypal
                            </p>
                        </div>
                    </div>

                    <div class="h-[109px] flex items-center p-4 gap-4 border-b-2
                     border-gray-300">
                        <input type="checkbox"
                               class="appearance-none w-6 h-6 rounded-full border border-gray-300
                                 checked:bg-[#0DBC0D] checked:border-[#0DBC0D]
                                 flex items-center justify-center cursor-pointer">
                        <img class="w-[150px] h-full"
                             src="{{ asset('images/alma.png') }}" alt="alma icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left
                            font-figtree text-[25px] leading-[30px]">
                                Alma
                            </p>
                        </div>
                    </div>

                    <button class="w-full h-[100px] bg-[#BF2A6B]
                         shadow-[0px_3px_6px_#00000029] rounded-[12px]
                    opacity-100 text-[26px] leading-[32px] font-bold font-figtree
                     text-white flex items-center justify-center gap-2
                     mb-10 mt-20">
                        Je réserve mon test psychotechnique
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m0 0l-6-6m6 6l-6 6" />
                        </svg>
                    </button>
                </div>

                <div class="w-1/2 mt-20 fixed right-10 top-1/2 -translate-y-1/2">
                    <div class="
                    min-h-[250px] border border-[#00000029]
                    rounded-[12px] shadow-lg flex items-center justify-center
                    bg-white p-6">
                        <div class="flex flex-col justify-center gap-2 p-10">
                            <p class="mb-10 font-figtree font-bold text-[31px] leading-[38px]
                      text-[#BF2A6B]">
                                Récapitulatif de votre test psychotechnique
                            </p>
                            <p class="mb-10 font-figtree text-[25px] leading-[30px]">
                                Total à payer : <span class="font-bold">130.00€</span>
                            </p>
                            <p class=" font-figtree text-[25px] leading-[30px]">
                                En passant votre commande, vous acceptez les conditions générales
                                de vente de la société AAAEP. Veuillez consulter notre
                                politique de protection de données.</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="flex flex-col items-center justify-end p-4 gap-2">
                            <img class="w-[150px] h-[150px]" src="{{ asset('images/rounded_finger.png') }}" alt="entraînement icon">
                            <p class="text-center font-figtree font-bold text-[25px] leading-[30px]">
                                Entraînement
                            </p>
                            <p class="text-center font-figtree text-[25px] leading-[30px]">
                                Gratuit Illimité
                            </p>
                        </div>

                        <div class="flex flex-col items-center justify-end p-4 gap-2">
                            <img class="w-[150px] h-[150px]" src="{{ asset('images/rounded_calendar.png') }}" alt="calendar icon">
                            <p class="text-center font-figtree font-bold text-[25px] leading-[30px]">
                                Résultat
                            </p>
                            <p class="text-center font-figtree text-[25px] leading-[30px]">
                                Le Jour Même
                            </p>
                        </div>

                        <div class="flex flex-col items-center justify-end p-4 gap-2">
                            <img class="w-[150px] h-[150px]" src="{{ asset('images/rounded_annuler.png') }}" alt="annulation icon">
                            <p class="text-center font-figtree font-bold text-[25px] leading-[30px]">
                                Annulation
                            </p>
                            <p class="text-center font-figtree text-[25px] leading-[30px]">
                                Gratuite jusqu'à 48h
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
