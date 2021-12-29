
    <div class="py-3">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">					
					<div>
						<div class="container mx-auto px-4">
							<!--h2 class="text-2xl mt-3 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-3xl sm:leading-none md:text-4xl">Create Scholarship</h2-->
							<div class="space-y-8 divide-y divide-gray-200 w-80% mt-10">

								@if($saveSuccess)
									<div class="rounded-md bg-green-100 rounded-lg p-4">
										<div class="flex">
											<div class="flex-shrink-0">
												<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
													<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
												</svg>
											</div>
											<div class="ml-3">
												<h3 class="text-sm font-medium text-green-800">Successfully Saved Info</h3>
												<div class="mt-2 text-sm text-green-700">
													<p>New student has been created.</p>
												</div>
											</div>
										</div>
									</div>
								@endif

								<div class="sm:col-span-6">
									<label for="name" class="block text-sm font-medium text-gray-700">
										Student Name
									</label>
									<div class="mt-1">
										<input id="name" wire:model="users.name" name="student_name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
									</div>
								</div>
                                <div class="sm:col-span-6">
									<label for="email" class="block text-sm font-medium text-gray-700">
										Student Email
									</label>
									<div class="mt-1">
										<input id="email" wire:model="users.email" name="email" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
									</div>
								</div>
                                <div class="sm:col-span-6">
									<label for="student_id" class="block text-sm font-medium text-gray-700">
										Student ID
									</label>
									<div class="mt-1">
										<input id="student_id" wire:model="users.student_id" name="student_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
									</div>
								</div>
								<div wire:click="savePost" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">Create</div>
							</div>
						</div>
					</div>
					
                </div>
            </div>
        </div>
    </div>
