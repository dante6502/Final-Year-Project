<?php include("includes/header.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        </div><form action="{{ route('confirm') }}" method="POST" class="login-form" id="recaptchaForm">
                        
                        <div class="login-inner-block">
                            <div class="frm-grp">
                                <label>Transaction Id)</label>
                                <input type="text" name="transactionId"   placeholder="@lang('Example: OIB9FQP9H7')">
                            </div>
                       
                        <div class="btn-area text-center">
                            <button type="submit"  class="submit-btn">Confirm Payment</button>
                        </div>
                        <br>

                        <div class="d-flex mt-3 justify-content-between">
                            <p>Please enter the transaction Id you received from M-PESA.</p>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

