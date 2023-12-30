<div>
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
            <img src="{{ Auth::user()->photo ?? '../assets/img/defualt_profile.png'}}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
          </div>
        </div>
        <div class="flex-none w-auto max-w-full px-3 my-auto">
          <div class="h-full">
            <h5 class="mb-1">{{ Auth::user()->name }}</h5>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  <div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
    
      <div class="flex-none w-full max-w-full px-3 mt-6">
        <div
          class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
         
          <div class="flex flex-wrap mx-10 mt-5">
            <div class="flex items-center w-full max-w-full px-3 mt-4 shrink-0 md:w-8/12 md:flex-none">
              <h6 class="mb-0">Profile Information</h6>
            </div>
            <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
              <a href="{{ route('user-profile') }}" data-target="tooltip_trigger" data-placement="top">
                <i class="leading-normal fas fa-user-edit text-size-sm text-slate-400"></i>
              </a>
              <div data-target="tooltip"
                class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-size-sm" role="tooltip">
                
                <div
                  class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                  data-popper-arrow></div>
              </div>
            </div>
          </div>

          <div class="flex-auto p-4">
            <p class="leading-normal text-size-sm">{{ Auth::user()->about ?? ''}}.</p>
            <hr class="h-px my-6 bg-transparent bg-gradient-horizontal-light" />
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
              <li
                class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-size-sm text-inherit">
                <strong class="text-slate-700">Full Name:</strong> &nbsp; {{ Auth::user()->name ?? ''}}</li>

              <li
                class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-size-sm text-inherit">
                <strong class="text-slate-700">Email:</strong> &nbsp; {{ Auth::user()->email ?? ''}}</li>
              <li
                class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-size-sm text-inherit">
                <strong class="text-slate-700">Location:</strong> &nbsp; {{ Auth::user()->location ?? ''}}</li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>