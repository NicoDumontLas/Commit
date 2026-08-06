@php
    $initials = strtoupper(substr(Auth::user()->first_name, 0, 1) . substr(Auth::user()->name, 0, 1));
@endphp
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/Commit-Logo.png')}} ">
    <title>COMMIT - @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

<div class="app-layout">
    <nav class="main-nav">
        <div class="sid-top">
            <a href="{{ route('dashboard') }}">
                <div class="top-logo">
                    <img src="{{ asset('images/Commit-Logo.png') }}" alt="COMMIT Logo" class="logo">
                    <p class="navbar-title">COMMIT</p>
                </div>
            </a>
        </div>
        <div class="sid-mid">
            <ul>
                <!--
                            DASHBOARD
                -->
                <li>
                    <a class="dashboard {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 12C13 11.4477 13.4477 11 14 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 19 20H14C13.4477 20 13 19.5523 13 19V12Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                            <path d="M4 5C4 4.44772 4.44772 4 5 4H9C9.55228 4 10 4.44772 10 5V12C10 12.5523 9.55228 13 9 13H5C4.44772 13 4 12.5523 4 12V5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                            <path d="M4 17C4 16.4477 4.44772 16 5 16H9C9.55228 16 10 16.4477 10 17V19C10 19.5523 9.55228 20 9 20H5C4.44772 20 4 19.5523 4 19V17Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                            <path d="M13 5C13 4.44772 13.4477 4 14 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 19.5523 8 19 8H14C13.4477 8 13 7.55228 13 7V5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!--
                            SUBJECTS
                -->
                <li>
                    <a class="subjects {{ request()->routeIs('subjects.*') ? 'active' : '' }}" href="{{ route('subjects.index') }}">
                        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 10.4V20M12 10.4C12 8.15979 12 7.03969 11.564 6.18404C11.1805 5.43139 10.5686 4.81947 9.81596 4.43597C8.96031 4 7.84021 4 5.6 4H4.6C4.03995 4 3.75992 4 3.54601 4.10899C3.35785 4.20487 3.20487 4.35785 3.10899 4.54601C3 4.75992 3 5.03995 3 5.6V16.4C3 16.9601 3 17.2401 3.10899 17.454C3.20487 17.6422 3.35785 17.7951 3.54601 17.891C3.75992 18 4.03995 18 4.6 18H7.54668C8.08687 18 8.35696 18 8.61814 18.0466C8.84995 18.0879 9.0761 18.1563 9.29191 18.2506C9.53504 18.3567 9.75977 18.5065 10.2092 18.8062L12 20M12 10.4C12 8.15979 12 7.03969 12.436 6.18404C12.8195 5.43139 13.4314 4.81947 14.184 4.43597C15.0397 4 16.1598 4 18.4 4H19.4C19.9601 4 20.2401 4 20.454 4.10899C20.6422 4.20487 20.7951 4.35785 20.891 4.54601C21 4.75992 21 5.03995 21 5.6V16.4C21 16.9601 21 17.2401 20.891 17.454C20.7951 17.6422 20.6422 17.7951 20.454 17.891C20.2401 18 19.9601 18 19.4 18H16.4533C15.9131 18 15.643 18 15.3819 18.0466C15.15 18.0879 14.9239 18.1563 14.7081 18.2506C14.465 18.3567 14.2402 18.5065 13.7908 18.8062L12 20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Matières</span>
                    </a>
                </li>
                <!--
                            PROJECTS
                -->
                <li>
                    <a class="projects {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">
                        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="File / Folder_Document">
                                <path id="Vector" d="M9 15H15M9 12H15M3 6V16.8C3 17.9201 3 18.4796 3.21799 18.9074C3.40973 19.2837 3.71547 19.5905 4.0918 19.7822C4.5192 20 5.07899 20 6.19691 20H17.8037C18.9216 20 19.4806 20 19.908 19.7822C20.2843 19.5905 20.5905 19.2841 20.7822 18.9078C21.0002 18.48 21.0002 17.9199 21.0002 16.7998L21.0002 9.19978C21.0002 8.07967 21.0002 7.51962 20.7822 7.0918C20.5905 6.71547 20.2837 6.40973 19.9074 6.21799C19.4796 6 18.9201 6 17.8 6H12M3 6H12M3 6C3 4.89543 3.89543 4 5 4H8.67452C9.1637 4 9.40915 4 9.63933 4.05526C9.8434 4.10425 10.0379 4.18526 10.2168 4.29492C10.4186 4.41856 10.5918 4.59183 10.9375 4.9375L12 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        <span>Projets</span>
                    </a>
                </li>
                <!--
                            PLANNING
                -->
                <li>
                    <a class="planning {{ request()->routeIs('planning') ? 'active' : '' }}" href="{{ route('planning') }}">
                        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14C7 13.4477 7.44772 13 8 13C8.55229 13 9 13.4477 9 14C9 14.5523 8.55229 15 8 15C7.44772 15 7 14.5523 7 14Z" fill="#ffffff"/>
                            <path d="M8 17C7.44772 17 7 17.4477 7 18C7 18.5523 7.44772 19 8 19C8.55229 19 9 18.5523 9 18C9 17.4477 8.55229 17 8 17Z" fill="#ffffff"/>
                            <path d="M11 14C11 13.4477 11.4477 13 12 13C12.5523 13 13 13.4477 13 14C13 14.5523 12.5523 15 12 15C11.4477 15 11 14.5523 11 14Z" fill="#ffffff"/>
                            <path d="M12 17C11.4477 17 11 17.4477 11 18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17Z" fill="#ffffff"/>
                            <path d="M15 14C15 13.4477 15.4477 13 16 13C16.5523 13 17 13.4477 17 14C17 14.5523 16.5523 15 16 15C15.4477 15 15 14.5523 15 14Z" fill="#ffffff"/>
                            <path d="M16 17C15.4477 17 15 17.4477 15 18C15 18.5523 15.4477 19 16 19C16.5523 19 17 18.5523 17 18C17 17.4477 16.5523 17 16 17Z" fill="#ffffff"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C6 1.44772 6.44772 1 7 1C7.55228 1 8 1.44772 8 2V3H16V2C16 1.44772 16.4477 1 17 1C17.5523 1 18 1.44772 18 2V3H19C20.6569 3 22 4.34315 22 6V20C22 21.6569 20.6569 23 19 23H5C3.34315 23 2 21.6569 2 20V6C2 4.34315 3.34315 3 5 3H6V2ZM16 5V6C16 6.55228 16.4477 7 17 7C17.5523 7 18 6.55228 18 6V5H19C19.5523 5 20 5.44772 20 6V9H4V6C4 5.44772 4.44772 5 5 5H6V6C6 6.55228 6.44772 7 7 7C7.55228 7 8 6.55228 8 6V5H16ZM4 11V20C4 20.5523 4.44772 21 5 21H19C19.5523 21 20 20.5523 20 20V11H4Z" fill="#ffffff"/>
                        </svg>
                        <span>Planning</span>
                    </a>
                </li>
                <!--
                            GOALS
                -->
                <li>
                    <a class="goals {{ request()->routeIs('goals') ? 'active' : '' }}" href="{{ route('goals') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24">
                            <title xmlns="">target</title>
                            <path fill="#ffffff" d="M8.1 21.213q-1.825-.788-3.175-2.138T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22t-3.9-.788m9.575-3.537Q20 15.35 20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20t5.675-2.325M7.75 16.25Q6 14.5 6 12t1.75-4.25T12 6t4.25 1.75T18 12t-1.75 4.25T12 18t-4.25-1.75m7.075-1.425Q16 13.65 16 12t-1.175-2.825T12 8T9.175 9.175T8 12t1.175 2.825T12 16t2.825-1.175m-4.237-1.412Q10 12.825 10 12t.588-1.412T12 10t1.413.588T14 12t-.587 1.413T12 14t-1.412-.587"/>
                        </svg>
                        <span>Objectifs</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sid-bottom">
            <ul>
                <li>
                    <a class="settings {{ request()->routeIs('settings') ? 'active' : '' }}" href="{{ route('settings') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24">
                            <title xmlns="">settings</title>
                            <g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0a2.34 2.34 0 0 0 3.319 1.915a2.34 2.34 0 0 1 2.33 4.033a2.34 2.34 0 0 0 0 3.831a2.34 2.34 0 0 1-2.33 4.033a2.34 2.34 0 0 0-3.319 1.915a2.34 2.34 0 0 1-4.659 0a2.34 2.34 0 0 0-3.32-1.915a2.34 2.34 0 0 1-2.33-4.033a2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/>
                                <circle cx="12" cy="12" r="3"/>
                            </g>
                        </svg>
                        <span>Paramètres</span>
                    </a>
                </li>
                <li>
                    <form  class="logout" method="post" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn-not">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24" fill="#ffffff">
                                <title xmlns="" fill="#ffffff">logout-rounded</title>
                                <path fill="#ffffff" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h6q.425 0 .713.288T12 4t-.288.713T11 5H5v14h6q.425 0 .713.288T12 20t-.288.713T11 21zm12.175-8H10q-.425 0-.712-.288T9 12t.288-.712T10 11h7.175L15.3 9.125q-.275-.275-.275-.675t.275-.7t.7-.313t.725.288L20.3 11.3q.3.3.3.7t-.3.7l-3.575 3.575q-.3.3-.712.288t-.713-.313q-.275-.3-.262-.712t.287-.688z"/>
                            </svg>
                            <span>Déconnexion</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="app-right">
        <header>
            <nav class="topbar">
                <div class="topb-left">
                    <p class="text-muted">COMMIT  >  <span>@yield('requestPath')</span></p>
                </div>
                <!--
                    TODO A FAIRE PLUTARD RAJOUTER POURQUOI PAS UNE SEARCH BAR ?
                -->
                <div class="topb-right">
                    <div class="notification">
                        <!-- TODO SYSTEM DE NOTIFICATION -->
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="style=doutone">
                                <g id="notification-bell-new">
                                    <path id="vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M8.73682 18.8301C9.15103 18.8301 9.48682 19.1659 9.48682 19.5801C9.48682 19.7533 9.53068 19.9323 9.62567 20.1089C9.72135 20.2868 9.86934 20.4625 10.073 20.6194C10.2768 20.7763 10.5283 20.9079 10.8164 20.9998C11.1044 21.0917 11.4174 21.1402 11.7364 21.1402C12.0554 21.1402 12.3684 21.0917 12.6563 20.9998C12.9445 20.9079 13.196 20.7763 13.3998 20.6194C13.6034 20.4625 13.7514 20.2868 13.8471 20.1089C13.9421 19.9323 13.986 19.7533 13.986 19.5801C13.986 19.1659 14.3218 18.8301 14.736 18.8301C15.1502 18.8301 15.486 19.1659 15.486 19.5801C15.486 20.0136 15.3747 20.4354 15.1682 20.8194C14.9624 21.202 14.6685 21.5356 14.315 21.8078C13.9618 22.0799 13.5519 22.2886 13.1122 22.4289C12.6723 22.5692 12.2052 22.6402 11.7364 22.6402C11.2676 22.6402 10.8005 22.5692 10.3606 22.4289C9.92086 22.2886 9.51101 22.0799 9.15774 21.8078C8.80433 21.5356 8.51043 21.202 8.30462 20.8194C8.09812 20.4354 7.98682 20.0136 7.98682 19.5801C7.98682 19.1659 8.3226 18.8301 8.73682 18.8301Z" fill="#ff0000"/>
                                    <path id="vector (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd" d="M8.1527 2.50665C10.0555 1.55972 12.2338 1.38369 14.2422 1.98489C14.639 2.10368 14.8644 2.52166 14.7456 2.91847C14.6268 3.31529 14.2088 3.54067 13.812 3.42188C12.1659 2.92913 10.3805 3.07347 8.82097 3.84955C7.08486 4.71351 5.9873 6.48565 5.9873 8.42485L5.9873 9.74613C5.9873 11.1699 5.63253 12.5712 4.95505 13.8234L4.72865 14.2419C3.81979 15.9218 4.81343 17.9997 6.69161 18.3468C10.0265 18.9632 13.4462 18.9632 16.7811 18.3468L16.9413 18.3172C18.8192 17.9701 19.8654 15.9452 19.062 14.2127L18.7974 13.642C18.409 12.8044 18.1565 11.9127 18.0473 11.0003C17.9981 10.589 18.2916 10.2157 18.7029 10.1665C19.1142 10.1173 19.4875 10.4108 19.5367 10.8221C19.6272 11.5781 19.8364 12.317 20.1582 13.0109L20.4228 13.5817C21.6385 16.203 20.0553 19.2671 17.214 19.7922L17.0776 19.0547L17.2139 19.7922L17.0538 19.8218C13.5386 20.4716 9.93413 20.4716 6.41897 19.8218C3.53934 19.2896 2.01589 16.1037 3.40935 13.5281L3.63576 13.1096C4.19463 12.0766 4.4873 10.9206 4.4873 9.74613L4.4873 8.42485C4.4873 5.91646 5.90701 3.62418 8.1527 2.50665Z" fill="#7A8393"/>
                                    <path id="vector (Stroke)_3" fill-rule="evenodd" clip-rule="evenodd" d="M17.8602 4.28711C16.8937 4.28711 16.1102 5.07061 16.1102 6.03711C16.1102 7.00361 16.8937 7.78711 17.8602 7.78711C18.8267 7.78711 19.6102 7.00361 19.6102 6.03711C19.6102 5.07061 18.8267 4.28711 17.8602 4.28711ZM14.6102 6.03711C14.6102 4.24218 16.0653 2.78711 17.8602 2.78711C19.6552 2.78711 21.1102 4.24218 21.1102 6.03711C21.1102 7.83203 19.6552 9.28711 17.8602 9.28711C16.0653 9.28711 14.6102 7.83203 14.6102 6.03711Z" fill="#ff0000"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="userinfos">
                        <a>
                            <span>{{ $initials }}</span>
                            <p>{{ Auth::user()->first_name }}</p>
                            <p>{{ Auth::user()->name }}</p>
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main-content">
            @yield('main')
        </main>
    </div>
</div>

<footer>
</footer>
</body>
</html>
