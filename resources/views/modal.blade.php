<div class="modal fade" id="{{$row->depan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Avatar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
          <img src="{{ Avatar::create($row->nama)->toBase64() }}" class="img-fluid"/>
          <hr>
          <img src="{{ Storage::url($row->file) }}" class="img-fluid" style="max-width: 300px">
      </div>
    </div>
  </div>
</div>
