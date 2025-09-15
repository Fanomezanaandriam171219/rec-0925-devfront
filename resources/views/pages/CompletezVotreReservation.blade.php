@extends('main-app')

@section('content')
    <div class="overflow-auto   ">
        <x-header/>
        <div class="mt-[240px] bg-[#F2F3F5]">
            <h2 class=" ml-30 pt-20 text-left pl-5 font-bold text-[31px] leading-[38px]
            tracking-[0px] text-[#383838] opacity-100 mb-20" >
                Complétez votre réservation</h2>
            <div class="ml-30 flex gap-20">
                <x-card-basic/>
                <x-card-assurance/>
                <x-card-complet/>
            </div>
        </div>
    </div>
@endsection
