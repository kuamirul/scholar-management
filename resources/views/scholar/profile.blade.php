<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="bg-gray-100">

                    <div class="mx-auto my-5 p-5">
                        <div class="md:flex no-wrap md:-mx-2 ">
                            <!-- Left Side -->
                            <div class="w-3/12 md:mx-2">
                                <!-- Profile Card -->
                                <div class="bg-white p-3 border-t-4 border-green-400">
                                    <div class="image overflow-hidden">
                                        <img class="h-auto w-full mx-auto" src="https://via.placeholder.com/250" alt="">
                                    </div>
                                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Jane Doe</h1>
                                    <!--h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>
                                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsumt</p-->
                                    <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                        <li class="flex items-center py-3">
                                            <span>Scholarship Status</span>
                                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of profile card -->
                                <div class="my-4"></div>

                            </div>
                            <!-- Right Side -->
                            <div class="w-9/12 mx-2 h-64">
                                <!-- Profile tab -->
                                <!-- About Section -->
                                <div class="bg-white p-3 shadow-sm rounded-sm">
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                        <span clas="text-green-500">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide">About</span>
                                    </div>
                                    <div class="text-gray-700">
                                        <div class=" text-sm">
                                            <div class="grid grid-cols-4">
                                                <div class="px-4 py-2 font-semibold">Name</div>
                                                <div class="px-4 py-2">Jane</div>
                                            </div>
                                            <div class="grid grid-cols-4">
                                                <div class="px-4 py-2 font-semibold">Qualification</div>
                                                <div class="px-4 py-2">Foundation</div>
                                            </div>
                                            <div class="grid grid-cols-4">
                                                <div class="px-4 py-2 font-semibold">Results</div>
                                                <div class="px-4 py-2">CGPA 3.21/4.00</div>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>
                                <!-- End of about section -->

                                <div class="my-4"></div>

                                <!-- Experience and education -->
                                <div class="bg-white p-3 shadow-sm rounded-sm">
                                    
                                    <div class="flex flex-wrap" id="tabs-id">
                                        <div class="w-full">
                                            <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                                                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-pink-600" onclick="changeAtiveTab(event,'tab-profile')">
                                                        Personal
                                                    </a>
                                                </li>
                                                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-sponsor')">
                                                        Sponsorship
                                                    </a>
                                                </li>
                                                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-settings')">
                                                        Household
                                                    </a>
                                                </li>
                                                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-options')">
                                                        Guarantor
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="relative flex flex-col min-w-full break-words bg-white w-full mb-6 shadow-lg rounded">
                                                <div class="px-4 py-5 flex-auto">
                                                    <div class="tab-content tab-space">
                                                        <div class="block" id="tab-profile">
                                                            <div class="text-gray-700">
                                                                <div class=" text-sm">
                                                                    <div class="grid grid-cols-4">
                                                                        <div class="px-4 py-2 font-semibold">Name</div>
                                                                        <div class="px-4 py-2">Jane</div>
                                                                    </div>
                                                                    <div class="grid grid-cols-4">
                                                                        <div class="px-4 py-2 font-semibold">Qualification</div>
                                                                        <div class="px-4 py-2">Foundation</div>
                                                                    </div>
                                                                    <div class="grid grid-cols-4">
                                                                        <div class="px-4 py-2 font-semibold">Results</div>
                                                                        <div class="px-4 py-2">CGPA 3.21/4.00</div>
                                                                    </div>
                                                                    <div class="grid grid-cols-4">
                                                                        <div class="px-4 py-2 font-semibold">Household Income</div>
                                                                        <div class="px-4 py-2">5400</div>
                                                                    </div>                                          
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hidden" id="tab-sponsor">
                                                            <div class="text-gray-700">
                                                                <div class=" text-sm">
                                                                    <div class="grid grid-cols-4">
                                                                        <div class="px-4 py-2 font-semibold">Sponsorship</div>
                                                                        <div class="px-4 py-2">Status</div>
                                                                    </div>                                                                                                           
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hidden" id="tab-settings">
                                                            <div class="text-gray-700">
                                                                <div class=" text-sm">
                                                                    <div class="grid grid-cols-4">
                                                                        <div class="px-4 py-2 font-semibold">Father</div>
                                                                        <div class="px-4 py-2">Name</div>
                                                                    </div>                                                                                                           
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hidden" id="tab-options">
                                                            <div class="text-gray-700">
                                                                <div class=" text-sm">
                                                                    <div class="grid grid-cols-4">
                                                                        <div class="px-4 py-2 font-semibold">Guarantor 1</div>
                                                                        <div class="px-4 py-2">Name</div>
                                                                    </div>                                                                                                           
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    

                                    <!--div class="grid grid-cols-2">
                                        
                                        <div>
                                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                                <span clas="text-green-500">
                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                    </svg>
                                                </span>
                                                <span class="tracking-wide">Experience</span>
                                            </div>
                                            <ul class="list-inside space-y-2">
                                                <li>
                                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                                <span clas="text-green-500">
                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                        <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                                    </svg>
                                                </span>
                                                <span class="tracking-wide">Education</span>
                                            </div>
                                            <ul class="list-inside space-y-2">
                                                <li>
                                                    <div class="text-teal-600">Masters Degree in Oxford</div>
                                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div-->
                                    <!-- End of Experience and education grid -->
                                </div>
                                <!-- End of profile tab -->
                            </div>
                        </div>
                    </div>
                </div>


                

            </div>
        </div>

    </div>


    <script type="text/javascript">
        function changeAtiveTab(event, tabID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for (let i = 0; i < aElements.length; i++) {
                aElements[i].classList.remove("text-white");
                aElements[i].classList.remove("bg-pink-600");
                aElements[i].classList.add("text-pink-600");
                aElements[i].classList.add("bg-white");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-pink-600");
            element.classList.remove("bg-white");
            element.classList.add("text-white");
            element.classList.add("bg-pink-600");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>



</x-app-layout>