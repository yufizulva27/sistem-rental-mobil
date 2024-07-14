@extends('layouts.appCar');

@section('content');

<!-- Modal untuk Buy Now -->
<div class="modal fade" id="buyNowModal" tabindex="-1" aria-labelledby="buyNowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buyNowModalLabel">Buy Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('cars.buyNow') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="mobil_id" id="mobil_id">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Nama Penyewa</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="delivery_option" class="form-label">Opsi Pengiriman</label>
                        <select class="form-control" id="delivery_option" name="delivery_option" required>
                            <option value="pengantaran">Pengantaran</option>
                            <option value="penjemputan">Penjemputan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Buy Now</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection