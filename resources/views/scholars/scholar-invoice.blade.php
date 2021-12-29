<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scholars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            
			<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

			<div class="min-h-auto flex flex-row bg-gray-100">
			  <div class="flex flex-col w-56 bg-white overflow-hidden">
				<ul class="flex flex-col py-4">
				<li>
					<a href="{{route('manage-scholars')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
					  <!--span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span-->
					  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bxs-right-arrow"></i></span>
					  <span class="text-sm font-semibold">Manage Scholars Info</span>
					</a>
				  </li>
				  <li>
					<a href="{{route('upload-document') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
					  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bxs-right-arrow"></i></span>
					  <span class="text-sm font-semibold">Upload Documents</span>
					</a>
				  </li>
				  <li>
					<a href="{{route('scholar-invoice') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
					  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bxs-right-arrow"></i></span>
					  <span class="text-sm font-semibold">Individual Scholar Invoice</span>
					</a>
				  </li>
				  <li>
					<a href="{{route('manage-scholarship') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
					  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bxs-right-arrow"></i></span>
					  <span class="text-sm font-semibold">Manage Scholarship</span>
					  <!--span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span-->
					</a>
				  </li>
				</ul>
			  </div>
			  
			  <div class="flex flex-col w-full bg-white rounded-r-3xl overflow-hidden">
				  <div class="p-6 bg-white border-b border-gray-200">
																
						<div class="flex flex-row h-auto ">
						  <div class="w-5/6">
							Individual Scholar Invoice			
						  </div>
						</div>
						
						
						
					</div>
				</div>
			
			</div>
			
			<!--div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
															
					<div class="flex flex-row h-auto ">
					  <div class="w-1/6">
						<div class="bg-white shadow-xl rounded-lg w-4/5">
							<ul class="divide-y divide-gray-300 text-l font-semibold">
								<li class="p-4 hover:bg-gray-50 cursor-pointer">Manage Scholars Info</li>
								<li class="p-4 hover:bg-gray-50 cursor-pointer">Upload Documents </li>
								<li class="p-4 hover:bg-gray-50 cursor-pointer">Individual Scholar Invoice</li>
								<li class="p-4 hover:bg-gray-50 cursor-pointer">Manage Allowance</li>
								<li class="p-4 hover:bg-gray-50 cursor-pointer">Manage Scholarship</li>
							</ul>
						</div>
					  </div>
					  <div class="w-5/6">
					  
					  </div>
					</div>

                </div>
            </div-->
			
			
			
        </div>
    </div>
</x-app-layout>
