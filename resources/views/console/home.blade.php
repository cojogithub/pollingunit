@extends('layouts.app')

@section('content')
<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">
        Profile update
    </h4>
    <div class="card overflow-hidden" style="background-color: transparent; border: none;">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-12">
                <div class="card-body" style="background-color: transparent; color: white;">
                    <div class="alert alert-warning mt-3">
                        Your profile settings have been successfully updated. Thank you!
                    </div>
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary mt-3">Return to Dashboard</a>
                    <a href="{{ url('/profile-settings') }}" class="btn btn-secondary mt-3">Return to Settings</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Resend Confirmation -->
    <div class="modal fade" id="resendConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="resendConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resendConfirmationModalLabel">Confirmation Email Sent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your profile settings have been successfully updated. Thank you!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('resend-verification-form').addEventListener('submit', function(e) {
        e.preventDefault();
        fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                _token: document.querySelector('input[name="_token"]').value
            })
        })
        .then(response => {
            if (response.ok) {
                $('#resendConfirmationModal').modal('show');
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>
@endsection
