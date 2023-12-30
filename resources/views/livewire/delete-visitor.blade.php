<div 
x-init="console.log('models '+  @entangle('deleteModal'))"

    @deleted.window="Toastify({
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

   x-show="deleteModal"

  style="display: none;"
  >
<div  x-show="deleteModal = {{ $deleteModal }}"> 
    <div class="fixed inset-0 bg-black opacity-25 z-50"></div>
    <div x-on:click.away="deleteModal = false" class="absolute top-0 right-0 left-0 bottom-0 flex justify-center">
      <div class="bg-white rounded md:w-4/12 w-4/5 mx-auto my-auto z-50 p-10">
            <h1 class="text-2xl text-center">Are you sure you want to delete {{ $visitorName }}  </h1>
        <div>
            <button type="button" wire:click="deletedId({{ $visitorId }})"
            class=" mt-5 bg-indigo-600 text-black p-3 rounded float-right ml-3">yes</button>
            <button type="button" x-on:click="deleteModal=false"
            class=" mt-5 bg-red-600 text-black p-3 rounded float-right">cancel</button>
        </div>
     </div>
    </div>
</div>
{{-- <script>
   window.addEventListener('deleted', event => {
        console.log("working");
        Toastify({
            text: event.detail.message,
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: 'top',
            position: 'right',
            stopOnFocus: true,
            style: {
                background: '#0349fc',
            },
            onClick: function () {}
        }).showToast();
    });
</script> --}}
</div>
