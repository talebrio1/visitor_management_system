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
    <div class="w-full px-6 mx-auto">
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
                        <img src="{{ auth()->user()->photo }}" alt="profile_image"
                            class="w-full shadow-soft-sm rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">

                    <h5 class="font-bold py-3">Role Setting</h5>


                    <form wire:submit.prevent="save" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (session('success'))
                        
                        <p class="text-emerald-600">{{ session('success') }}</p>

                        @endif
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Full name
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="name" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Name" id="user-name" />
                                        @error('name')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Email</h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="email" type="email"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Email" id="user-email" />
                                        @error('email')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Role
                                    </h6>

                                    <div class="mb-4">
                                        <select class="w-full p-2 bg-white rounded-lg border border-solid border-gray-300" wire:model="role">
                                            <option value="Super Admin">Super Admin</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                        @error('role')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Image
                                    </h6>

                                    <div class="mb-4">
                                        
                                        <input wire:model.lazy="photo" type="file"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="photo" id="photo" name="photo" />
                                        @error('photo')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Password
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="password" type="password"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="password" id="password" />
                                        @error('password')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Confirm
                                        Password</h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="confirm_password" type="password"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Confirm Password" id="confirm_password" />
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
                                Save changes</button>

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

