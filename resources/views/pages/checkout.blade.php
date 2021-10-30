@extends('layouts.checkout')
@section('tittle', 'Checkout Page')
@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going?</h1>
                        <p>Trip to Nusa Penida, Bali</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ url('frontend/images/person5.jpg') }}" height="60" class="rounded-circle"></td>
                                        <td class="align-middle">Angelina Clara</td>
                                        <td class="align-middle">DN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <img src="{{ url('frontend/images/clear.png') }}" height="30">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ url('frontend/images/person7.jpg') }}" height="60" class="rounded-circle"></td>
                                        <td class="align-middle">Monica Elizabeth</td>
                                        <td class="align-middle">FR</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <img src="{{ url('frontend/images/clear.png') }}" height="30">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add member</h2>
                            <form class="row g-4">
                                <div class="col-sm">
                                    <label for="inputUsername" class="sr-only"></label>
                                    <input name="inputUsername" type="text" class="form-control id="inputUsername" placeholder="Username">
                                </div>
                                <div class="col-sm">
                                    <label for="inputVisa" class="sr-only"></label>
                                        <input class="form-select" list="datalistOptions" name="inputVisa" id="inputVisa" placeholder="VISA">
                                        <datalist id="datalistOptions">
                                            <option value="VISA" selected>VISA</option>
                                            <option value="30 Days">30 Days</option>
                                            <option value="NA">NA</option>
                                        </datalist>
                                </div>
                                <div class="col-sm">
                                    <label for="inputDate" class="sr-only"></label>
                                        <input class="form-select" list="datalistDate" name="inputDate" id="inputDate" placeholder="Date">
                                        <datalist id="datalistDate">
                                            <option value="24 Maret">24 Maret</option>
                                        <option value="16 Agustus">16 Agustus</option>
                                        <option value="11 Mei">11 Mei</option>
                                        </datalist>
                                </div>
                                <div class="col-sm py-4">
                                    <button type="submit" class="btn btn-add-now">
                                        Add Now
                                    </button>
                                </div>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that Registered in TravePoor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">2 Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">$190,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">$80,00 / Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">$280.00</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">$279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Instructions</h2>
                        <p class="payment-instructions">
                            Please complete your payment before to continue the world trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/bank.png') }}" class="bank-image">
                                <div class="description">
                                    <h3>PT.Travepoor ID</h3>
                                    <p>08381234567
                                        <br>
                                    Bank of Indonesia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/bank.png') }}" class="bank-image">
                                <div class="description">
                                    <h3>PT.Travepoor DN</h3>
                                    <p>08387654321
                                        <br>
                                    Bank of Denmark
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container d-grid gap-2">
                        <a href="{{ route('checkout-success') }}" class="btn btn-join-now mt-3 px-2">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('detail') }}" class="text-muted">
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            icons{
                rightIcon: '<img src="{{ url('frontend/images/calendar.png') }}" />'
            }
        });

    });
</script>
@endpush