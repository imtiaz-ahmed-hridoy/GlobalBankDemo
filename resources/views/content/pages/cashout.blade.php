@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'User Dashboard')

@section('content')
    <style>
        /* Customize additional styles here if needed */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 147, 188, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: white;
        }
    </style>


                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <h2 class="text-center">Cash Out</h2>

                        <form action="{{ route('transation') }}" method="POST" id="transferForm">

                            @csrf


                            <div class="mb-3">
                                <label class="form-label" for="country">Bank List</label>
                                <select name="bank" id="country" class="select2 form-select"
                                    data-allow-clear="true">

                                    <option value="">Select Bank
                                    </option>
                                    <option value="Central Bank Of
                                    Malaysia">Central
                                        Bank Of
                                        Malaysia</option>
                                    <option value="Agrani Bank
                                    Limited">Agrani Bank
                                        Limited</option>
                                    <option value="Bangladesh
                                    Development Bank">
                                        Bangladesh
                                        Development Bank</option>
                                    <option value="BASIC Bank Limited">BASIC Bank Limited
                                    </option>
                                    <option value="Janata Bank
                                    Limited">Janata Bank
                                        Limited</option>
                                    <option value="Rupali Bank
                                    Limited">Rupali Bank
                                        Limited</option>
                                    <option value="Sonali Bank
                                    Limited">Sonali Bank
                                        Limited</option>
                                    <option value="Bangladesh Krishi
                                    Bank">
                                        Bangladesh Krishi
                                        Bank</option>
                                    <option value="Rajshahi Krishi
                                    Unnayan Bank">
                                        Rajshahi Krishi
                                        Unnayan Bank</option>
                                    <option value="Probashi Kallyan
                                    Bank">Probashi
                                        Kallyan
                                        Bank</option>
                                    <option value="AB Bank Limited ">AB Bank Limited
                                    </option>
                                    <option
                                        value="Bangladesh
                                    Commerce Bank Limited">
                                        Bangladesh
                                        Commerce Bank Limited</option>
                                    <option value="Bank Asia Limited">Bank Asia Limited
                                    </option>
                                    <option value="Bengal Commercial
                                    bank ltd ">
                                        Bengal Commercial
                                        bank ltd</option>
                                    <option value="BRAC Bank Limited">BRAC Bank Limited
                                    </option>
                                    <option value="Citizens Bank PLC">Citizens Bank PLC
                                    </option>
                                    <option value="City Bank Limited">City Bank Limited
                                    </option>
                                    <option
                                        value="Community Bank
                                    Bangladesh Limited">
                                        Community Bank
                                        Bangladesh Limited</option>
                                    <option value="Dhaka Bank Limited ">Dhaka Bank Limited
                                    </option>
                                    <option value="Dutch-Bangla Bank
                                    Limited">
                                        Dutch-Bangla Bank
                                        Limited</option>
                                    <option value="Eastern Bank
                                    Limited">Eastern
                                        Bank
                                        Limited</option>
                                    <option value="IFIC Bank Limited">IFIC Bank Limited
                                    </option>
                                    <option value="Jamuna Bank
                                    Limited">Jamuna Bank
                                        Limited</option>
                                    <option value="Meghna Bank
                                    Limited">Meghna Bank
                                        Limited</option>
                                    <option value="Mercantile Bank
                                    Limited">
                                        Mercantile Bank
                                        Limited</option>
                                    <option value="Midland Bank
                                    Limited">Midland
                                        Bank
                                        Limited</option>
                                    <option value="Modhumoti Bank
                                    Limited">Modhumoti
                                        Bank
                                        Limited</option>
                                    <option value="Mutual Trust Bank
                                    Limited">Mutual
                                        Trust Bank
                                        Limited</option>
                                    <option value="National Bank
                                    Limited">National
                                        Bank
                                        Limited</option>
                                    <option
                                        value="National Credit
                                    &amp; Commerce Bank Limited">
                                        National Credit
                                        &amp; Commerce Bank Limited</option>
                                    <option value="NRB Bank Limited">NRB Bank Limited
                                    </option>
                                    <option value="NRB Commercial
                                    Bank Ltd">NRB
                                        Commercial
                                        Bank Ltd</option>
                                    <option value="One Bank Limited">One Bank Limited
                                    </option>
                                    <option value="Padma Bank
                                    Limited">Padma Bank
                                        Limited</option>
                                    <option value="Premier Bank
                                    Limited">Premier
                                        Bank
                                        Limited</option>
                                    <option value="Prime Bank
                                    Limited">Prime Bank
                                        Limited</option>
                                    <option value="Pubali Bank
                                    Limited">Pubali Bank
                                        Limited</option>
                                    <option value="Shimanto Bank
                                    Ltd">Shimanto Bank
                                        Ltd</option>
                                    <option value="Southeast Bank
                                    Limited">Southeast
                                        Bank
                                        Limited</option>
                                    <option
                                        value="South Bangla
                                    Agriculture and Commerce Bank Limited">
                                        South Bangla
                                        Agriculture and Commerce Bank Limited</option>
                                    <option value="Trust Bank
                                    Limited">Trust Bank
                                        Limited</option>
                                    <option value="United
                                    Commercial Bank Ltd">
                                        United
                                        Commercial Bank Ltd</option>
                                    <option value="Uttara Bank
                                    Limited">Uttara Bank
                                        Limited</option>
                                    <option value="Al-Arafah Islami
                                    Bank Limited">
                                        Al-Arafah Islami
                                        Bank Limited</option>
                                    <option value="EXIM Bank
                                    Limited">EXIM Bank
                                        Limited</option>
                                    <option
                                        value="First Security
                                    Islami Bank Limited">
                                        First Security
                                        Islami Bank Limited</option>
                                    <option value="Global Islamic
                                    Bank Ltd">Global
                                        Islamic
                                        Bank Ltd</option>
                                    <option value="ICB Islamic Bank
                                    Limited">ICB
                                        Islamic Bank
                                        Limited</option>
                                    <option value="Islami Bank
                                    Bangladesh Limited">
                                        Islami Bank
                                        Bangladesh Limited</option>
                                    <option value="Shahjalal Islami
                                    Bank Limited">
                                        Shahjalal Islami
                                        Bank Limited</option>
                                    <option value="Social Islami
                                    Bank Limited">
                                        Social Islami
                                        Bank Limited</option>
                                    <option value="Union Bank Ltd">Union Bank Ltd
                                    </option>
                                    <option value="Standard Bank
                                    Limited">Standard
                                        Bank
                                        Limited</option>
                                    <option value="Bank of Baroda ">Bank of Baroda
                                    </option>
                                    <option value="Bank of India">Bank of India
                                    </option>
                                    <option value="Bank of
                                    Maharashtra">Bank of
                                        Maharashtra</option>
                                    <option value="Canara Bank">Canara Bank
                                    </option>
                                    <option value="Central Bank of
                                    India ">Central
                                        Bank of
                                        India</option>
                                    <option value="Indian Bank">Indian Bank
                                    </option>
                                    <option value="Indian Overseas
                                    Bank">Indian
                                        Overseas
                                        Bank</option>
                                    <option value="Punjab and Sind
                                    Bank">Punjab and
                                        Sind
                                        Bank</option>
                                    <option value="Punjab National
                                    Bank">Punjab
                                        National
                                        Bank</option>
                                    <option value="State Bank of
                                    India">State Bank
                                        of
                                        India</option>
                                    <option value="UCO Bank">UCO Bank
                                    </option>
                                    <option value="Union Bank of
                                    India">Union Bank
                                        of
                                        India</option>
                                    <option value="Axis Bank">Axis Bank
                                    </option>
                                    <option value="Bandhan Bank ">Bandhan Bank
                                    </option>
                                    <option value="CSB Bank">CSB Bank
                                    </option>
                                    <option value="City Union Bank">City Union Bank
                                    </option>
                                    <option value="DCB Bank ">DCB Bank
                                    </option>
                                    <option value="Dhanlaxmi Bank ">Dhanlaxmi Bank
                                    </option>
                                    <option value="Federal Bank">Federal Bank
                                    </option>
                                    <option value="HDFC Bank">
                                        HDFC Bank</option>
                                    <option value="ICICI Bank">ICICI Bank
                                    </option>
                                    <option value="IDBI Bank">IDBI Bank
                                    </option>
                                    <option value="IDFC First Bank ">IDFC First Bank
                                    </option>
                                    <option value="IndusInd Bank">IndusInd Bank
                                    </option>
                                    <option value="Jammu &amp;
                                    Kashmir Bank">Jammu
                                        &amp;
                                        Kashmir Bank</option>
                                    <option value="Karnataka Bank
                                    1924 ">Karnataka
                                        Bank
                                        1924</option>
                                    <option value="Karur Vysya Bank">Karur Vysya Bank
                                    </option>
                                    <option value="Kotak Mahindra
                                    Bank">Kotak
                                        Mahindra
                                        Bank</option>
                                    <option value="Nainital Bank">Nainital Bank
                                    </option>
                                    <option value="RBL Bank">RBL Bank
                                    </option>
                                    <option value="South Indian
                                    Bank">South Indian
                                        Bank</option>
                                    <option value="Tamilnad
                                    Mercantile Bank">
                                        Tamilnad
                                        Mercantile Bank</option>
                                    <option value="Yes Bank">Yes Bank
                                    </option>
                                    <option value="Affin Bank">Affin Bank
                                    </option>
                                    <option value="Alliance Bank">Alliance Bank
                                    </option>
                                    <option value="AmBank">AmBank</option>
                                    <option value="CIMB">CIMB</option>
                                    <option value="Hong Leong Bank">Hong Leong Bank
                                    </option>
                                    <option value="Maybank">Maybank
                                    </option>
                                    <option value="Public Bank">Public Bank
                                    </option>
                                    <option value="RHB Bank">RHB Bank
                                    </option>
                                    <option value="UOB Malaysia">UOB Malaysia
                                    </option>
                                    <option value="Bank Rakyat">Bank Rakyat
                                    </option>
                                    <option value="OCBC Bank
                                    Malaysia">OCBC Bank
                                        Malaysia</option>
                                    <option value="HSBC Bank
                                    Malaysia">HSBC Bank
                                        Malaysia</option>
                                    <option value="Bank Islam
                                    Malaysia">Bank Islam
                                        Malaysia</option>
                                    <option value="Affin Bank">Affin Bank
                                    </option>
                                    <option value="Alliance Bank
                                    Malaysia Berhad">
                                        Alliance Bank
                                        Malaysia Berhad</option>
                                    <option
                                        value="Standard
                                    Chartered Bank Malaysia">
                                        Standard
                                        Chartered Bank Malaysia</option>
                                    <option value="MBSB Bank
                                    Berhad">MBSB Bank
                                        Berhad</option>
                                    <option value="Citibank
                                    Malaysia">Citibank
                                        Malaysia</option>
                                    <option value="Bank Simpanan
                                    Nasional (BSN)">
                                        Bank Simpanan
                                        Nasional (BSN)</option>
                                    <option value="Bank Muamalat
                                    Malaysia Berhad">
                                        Bank Muamalat
                                        Malaysia Berhad</option>
                                    <option value="Agrobank">Agrobank
                                    </option>
                                    <option value="Al-Rajhi
                                    Malaysia">Al-Rajhi
                                        Malaysia</option>
                                    <option value="Co-op Bank
                                    Pertama">Co-op Bank
                                        Pertama</option>
                                    <option
                                        value="Malaysian
                                    national nationwide banks">
                                        Malaysian
                                        national nationwide banks</option>
                                    <option value="Habib Bank
                                    Limited (HBL)">Habib
                                        Bank
                                        Limited (HBL)</option>
                                    <option value="National Bank
                                    of Pakistan">
                                        National Bank
                                        of Pakistan</option>
                                    <option value="Meezan Bank">Meezan Bank
                                    </option>
                                    <option value="Bank Alfalah">Bank Alfalah
                                    </option>
                                    <option value="MCB Bank">MCB Bank
                                    </option>
                                    <option value="United Bank
                                    Limited">United Bank
                                        Limited</option>
                                    <option value="Bank of Baroda">Bank of Baroda
                                    </option>
                                    <option value="Bank Muamalat
                                    Malaysia">Bank
                                        Muamalat
                                        Malaysia</option>
                                    <option value="canarabank">
                                        canarabank</option>
                                    <option value="SBI Bank India">SBI Bank India
                                    </option>
                                    <option value="NCB Saudi
                                    National Bank">NCB
                                        Saudi
                                        National Bank</option>
                                    <option value="Jyoti Bikash
                                    Bank Ltd">Jyoti
                                        Bikash
                                        Bank Ltd</option>
                                    <option value="Mega Bank Nepal
                                    Limited">Mega
                                        Bank Nepal
                                        Limited</option>
                                    <option value="Punjab National
                                    Bank">Punjab
                                        National
                                        Bank</option>
                                    <option value="Canara bank">Canara bank
                                    </option>
                                    <option value="AL NASR TRAVEL
                                    AGENCY">AL NASR
                                        TRAVEL
                                        AGENCY</option>
                                    <option value="The Bank of
                                    Punjab">The Bank of
                                        Punjab</option>
                                    <option value="united bank
                                    limited">united bank
                                        limited</option>
                                    <option value="Habib Bank
                                    Limited Pakistan">
                                        Habib Bank
                                        Limited Pakistan</option>
                                    <option value="Al Rajhi Bank">Al Rajhi Bank
                                    </option>
                                    <option value="Bangkok Bank
                                    Public Co. Ltd.">
                                        Bangkok Bank
                                        Public Co. Ltd.</option>

                                    <option value="Prabhu Bank">Prabhu Bank
                                    </option>
                                    <option value="Bank Al Habib
                                    Limited">Bank Al
                                        Habib
                                        Limited </option>
                                    <option value="Alrajhi Bank">Alrajhi Bank
                                    </option>
                                    <option value="TeleMoney">TeleMoney
                                    </option>
                                    <option value="AlAhliOnline">AlAhliOnline
                                    </option>
                                    <option value="Garima Bikash
                                    Bank">Garima
                                        Bikash
                                        Bank</option>
                                    <option value="Garima Bikash
                                    Bank">Garima
                                        Bikash
                                        Bank</option>
                                    <option value="Nabil Bank">Nabil Bank
                                    </option>
                                    <option value="Nabil Bank
                                    Limited">Nabil Bank
                                        Limited </option>
                                    <option value="Western Union">Western Union
                                    </option>
                                    <option value="Riyad Bank">Riyad Bank
                                    </option>
                                    <option value="NIC Asia Bank">NIC Asia Bank
                                    </option>
                                    <option value="Allied Bank">Allied Bank
                                    </option>
                                    <option value="Global IME Bank">Global IME Bank
                                    </option>
                                    <option value="Ashik">Ashik</option>
                                    <option value="ALLIED BANK
                                    LIMITED">ALLIED BANK
                                        LIMITED </option>
                                    <option value="HSBC Dubai">HSBC Dubai
                                    </option>
                                    <option value="PNB">PNB</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="account" class="form-label">Enter Account Number:</label>
                                <input type="text" id="account" name="receiver_account" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Enter Amount:</label>
                                <input type="number" id="amount" name="amount" class="form-control" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Transfer</button>
                            </div>
                        </form>
                    </div>
                </div>


    <div class="popup" id="popup" style="display: none;">
        <h2>Thank You!</h2>
        <p>Please enter your confirmation code:</p>
        <input type="text" id="confirmationCode" name="confirmationCode" class="form-control mb-3" required>
        <div class="text-center">
            <button onclick="checkConfirmationCode()" class="btn btn-primary">Submit</button>
            <button onclick="closePopup()" class="btn btn-secondary">Close</button>
        </div>
    </div>

    <div class="popup" id="successPopup" style="display: none;">
        <h2>Transaction Successful!</h2>
        <p>Your transfer has been completed.</p>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById("transferForm").addEventListener("submit", function(event) {
            event.preventDefault();
            document.getElementById("popup").style.display = "block";
        });



        function checkConfirmationCode() {
            var userInput = document.getElementById("confirmationCode").value;
            var correctCode =
                "{{ $client_data->validation_code }}"; // Assuming this is how you print PHP variables in your template
            if (userInput === correctCode) {
                document.getElementById("popup").style.display = "none";
                document.getElementById("successPopup").style.display = "block";
                document.getElementById("transferForm").submit();
            } else {
                alert("Incorrect code. Please try again.");
            }
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>

@endsection
