<div
@notify.window="Toastify({
    text: $event.detail.message,
    duration: 3000,
    newWindow: true,
    close: true,
    gravity: 'top', 
    position: 'right', 
    stopOnFocus: true, 
    style: {
    background: '#0349fc',
    },
    onClick: function(){}
}).showToast();"
    >
    {{-- <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
            <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-fuchsia opacity-60"></span>
        </div>
        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="text-size-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="../assets/img/bruce-mars.jpg" alt="profile_image"
                            class="w-full shadow-soft-sm rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1">santos</h5>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">

                    <h5 class="font-bold py-3">Update Visitor </h5>


                    <form wire:submit.prevent="update" method="PATCH">
                        @csrf
                        @method('PATCH')
                        @if (session('success'))
                        
                        <p class="text-emerald-600">{{ session('success') }}</p>

                        @endif
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Full name
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model="name" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Name" id="user-name" value="{{ $name }}" />
                                        @error('name')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Phone
                                        Number</h6>

                                    <div class="mb-4">
                                        <input wire:model="phone_number" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Phone Number" id="user-number"  />
                                        @error('phone_number')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Gender
                                    </h6>

                                    <div class="mb-4" wire:ignore>
                                        <select class="w-full p-2 bg-white rounded-lg border border-solid border-gray-300" wire:model="gender">
                                            <option value="Male">Male</option>

                                            <option value="Male">Female</option>
                                        </select>
                                        @error('user.location')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Company
                                        Representing
                                    </h6>

                                    <div class="mb-4" wire:ignore>
                                        <select class="w-full p-2 bg-white rounded-lg border border-solid border-gray-300" wire:model="company_representing">
                                            <option value="Male">Weloobe</option>

                                            <option value="Male">Others</option>
                                        </select>
                                        @error('company_representing')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Reason For
                                        Visit
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model="reason_for_visit" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Reason For Visit" id="user-name"  />
                                        @error('reason_for_visit')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Entry Time
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model="entry_time" type="datetime-local"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="entry time" id="user-email"  />
                                        @error('entry_time')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Leave Time
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model="leave_time" type="datetime-local"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="leave time" id="user-email"  />
                                        @error('leave_time')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                        @if (session('error'))
                        
                                        <p class="text-red-500">{{ session('error') }}</p>
                
                                        @endif
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="flow-root">

                            <button type="submit"
                                class="float-right inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-black uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                Update changes</button>

                        </div>

                </div>

                </form>

            </div>
        </div>
    </div>

    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";

        }
    </script>

</div>

