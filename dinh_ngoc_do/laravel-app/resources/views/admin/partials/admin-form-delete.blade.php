<form action="#" method="POST" id="form-delete">
  @csrf
  @method('DELETE')
</form>

<div class="modal fade" id="modal-danger" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">Delete Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this product ? The product that you deleted cannot be recovered</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-outline-light" id="btn-delete">Yes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

@section('script-delete-alert')
<script type="text/javascript">
  $(document).ready(function () {
    $('.confirm-delete').click(function() {
      var delUrl = $(this).data('url');
      
      $('#form-delete').attr('action', delUrl);
    });

    $('#btn-delete').click(function() {
        $('#form-delete').submit();
    });
  });
</script>
@endsection