<div class="modal fade bd-example-modal-lg" id="covid_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">x</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="/assets/images/closeButton.svg" alt="">
          </button>
        </div>
        <div class="modal-body">
            <div class="covid-body">
                <h5 class="covid-title"></h5>
                <p class="covid-text">
            
                   </p>
                  
                    @can('admin')

                        <a href="{{ route('covids.edit',$covid->id) }}"><button
                                type="button" class="btn btn-warning">Edit</button></a> </td>
                    @endcan
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>