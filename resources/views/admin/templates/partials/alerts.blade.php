<script>
   @if (session('success'))
      $.notify({
         message: '{{ session('success') }}'
      }, {
         type: 'success'
      });
   @endif

   @if (session('info'))
   $.notify({
   message: '{{ session('info') }}'
   }, {
   type: 'info'
   });
   @endif

   @if (session('danger'))
   $.notify({
   message: '{{ session('danger') }}'
   }, {
   type: 'danger'
   });
   @endif
</script>