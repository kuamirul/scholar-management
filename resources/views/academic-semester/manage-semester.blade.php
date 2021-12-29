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
					  <a href="{{route('manage-semester')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
						<!--span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span-->
						<span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bxs-right-arrow"></i></span>
						<span class="text-sm font-semibold">Manage Semester</span>
					  </a>
					</li>
					<li>
					  <a href="{{route('manage-expenditure')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
						<span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bxs-right-arrow"></i></span>
						<span class="text-sm font-semibold">Manage Expenditure / Allowance</span>
					  </a>
					</li>				  
				  </ul>
			  </div>
			  
			  <div class="flex flex-col w-full bg-white rounded-r-3xl overflow-hidden">
				  <div class="p-6 bg-white border-b border-gray-200">
																
						<div class="flex flex-row h-auto ">
						  <div class="w-5/6">
							
							<button class="bg-pink-500 text-white active:bg-pink-600 font-bold justify-center uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
								Create New Semester
							  </button>

							  <livewire:semester-table/>

						  </div>
						</div>
						
					</div>
				</div>

				<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
								<div class="relative w-1/2 my-6 mx-auto max-w-full">
								  <!--content-->
								  <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
									<!--header-->
									<div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
									  <h3 class="text-3xl font-semibold">
										Create New Semester
									  </h3>
									  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
										<span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
										  ×
										</span>
									  </button>
									</div>
									
									<!--body-->
									<div class="relative w-full p-6 flex-auto">
									  <livewire:create-semester />	
									</div>

									<!--footer-->
									<div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
									  <!--button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
										Close
									  </button-->
									  <button class="bg-emerald-500 text-black active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
										Close
									  </button>
									</div>
								  </div>
								</div>
							  </div>
							  <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
			
			</div>

        </div>
    </div>

	<script type="text/javascript">
		function toggleModal(modalID){
		  document.getElementById(modalID).classList.toggle("hidden");
		  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
		  document.getElementById(modalID).classList.toggle("flex");
		  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
		}
	</script>

</x-app-layout>


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