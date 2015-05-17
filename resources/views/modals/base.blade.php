<!-- slider-modal -->					
<div class="modal fade" id="{{ $modal_name }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<h2 class="modal-title" id="myModalLabel1">@yield('modal-title')</h2>
	  </div>
	  <div class="modal-body">								
			@yield('modal-body')									 							 
	 </div>
	</div>
  </div>
</div>
<!-- ./slider-modal -->