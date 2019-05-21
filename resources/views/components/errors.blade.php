@if ($errors->any())
    <div id="errorMessages">
        @foreach ($errors->all() as $error)
            <div class="toast mx-auto" role="alert" data-delay="5000" data-autohide="true">
                <div class="toast-header">
                    <strong class="mr-auto text-danger">An error occurred</strong>
                    <small class="text-muted"><!-- 8 minutes ago --></small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="toast-body">
                    {{ $error }}
                </div>
            </div>
        @endforeach
    </div>
@endif
