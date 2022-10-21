<!DOCTYPE html>
<html>
    <head>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {{-- START INCLUDE CSS FILES--}}
        {{--INCLUDE FONT AWOSOME FILE--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        
        
        <!-- {{-- START INCLUDE CSS FILES--}} -->

        <!-- {{--#####################################--}}
        {{--LIGHT CSS FILE--}}
        
        {{-- GLOBAL CSS FILE STYLE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/LightGlobal.css')}}">
       
        {{-- GEUST LOGIN CSS FILE STYLE, RESPONSIVE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/Guest/Light/Login.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/Style/Guest/Light/Responsive/LoginResponsive.css')}}">
        
        {{-- GEUST JOIN CSS FILE STYLE, RESPONSIVE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/Guest/Light/Join.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/Style/Guest/Light/Responsive/JoinResponsive.css')}}">
        
        {{-- GEUST VERIFY CSS FILE STYLE, RESPONSIVE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/Guest/Light/Verify.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/Style/Guest/Light/Responsive/VerifyResponsive.css')}}">
       


        {{-- ****************** --}}
        
        {{-- USER HOME CSS FILES STYLE --}}

        
        {{-- USER HEADER CSS FILES STYLE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Home.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Responsive/Home.css')}}">


        {{-- HEADER COMPONENT CSS FILES STYLE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Layout/HeaderComponent.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Responsive/Layout/HeaderComponentResponsive.css')}}">

        
        {{-- ALL LEFT COMPONENT CSS FILES STYLE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Layout/AllLeftComponent.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Responsive/Layout/AllLeftComponentResponsive.css')}}">
        
        {{-- ALL RIGHT COMPONENT CSS FILES STYLE --}}
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Layout/AllRightComponent.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/Style/User/Light/Responsive/Layout/AllRightComponentResponsive.css')}}">

        
        
        
        {{--#####################################--}}
        {{-- DARK CSS FILE--}}

        {{--#####################################--}}

        {{-- END INCLUDE CSS FILES--}} -->
  
        @vite('resources/js/app.js')
    </head>
   
        <body id="app">

            {{-- if you want to add static component include any component--}}
            <router-view></router-view>
           
        </body>

</html>
