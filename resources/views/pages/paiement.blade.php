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
                         text-gray-800 font-medium font-figtree text-[25px] mb-10">
                        <span class="ml-10">Nom Prénoms</span>
                    </label>
                    <label class="w-full h-[90px] flex items-center
                         bg-[#F2F3F5] border rounded-[20px] border-gray-300 shadow-md
                         text-gray-800 font-medium font-figtree text-[25px] mb-10">
                        <span class="ml-10">Email</span>
                    </label>
                    <label class="w-full h-[90px] flex items-center
                         bg-[#F2F3F5] border rounded-[20x] border-gray-300 shadow-md
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
                    <div class="flex items-center gap-x-2">
                        <img class="w-[50px] h-[50px] ml-5"
                             src="{{ asset('images/cadenas.png') }}" alt="cadenas icon">
                        <p class="text-[25px]">100% sécurisé</p>
                    </div>


                    <div class="h-[109px]
                             flex items-center p-4 gap-4">
                        <img class="w-[50px] h-[50px]"
                             src="{{ asset('images/localisation.png') }}" alt="carte bancaire icon">
                        <div class="flex flex-col justify-center">
                            <p class="text-left font-figtree
                            font-bold text-[25px] leading-[30px]">
                                Carte Bancaire
                            </p>
                        </div>
                    </div>






                </div>

                <div class="w-1/2 h-[109px] border border-[#00000029] rounded-[12px] shadow-lg flex items-center p-4 justify-center">
                    test
                </div>
            </div>
        </div>
    </div>
@endsection
