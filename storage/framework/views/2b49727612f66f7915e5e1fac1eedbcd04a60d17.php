<?php $__env->startSection('title', 'Donate'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:100px;"></div>
    <div class="container">
        <div class="content">
            <div class="title" style="text-align: center"><h1>Donate To Our Church</h1></div>
            <!-- <div class="quote">Help Someone!</div> -->
            <div class="panel panel-default  col-md-offset-3 col-md-6">
    			<div class="row">
                    <div class="col-sm-12">
                    	<?php echo $__env->make('backend.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    	<?php echo $__env->make('backend.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    	<h3 class="page-header">Card Payment</h3>
                        <form role="form" class="row" action="/donate" method="post" id="paymentform">
                        	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input class="ccnumber form-control" type="text" name="ccnumber" placeholder="Enter your card number" required>
                                </div>
                            </div>
                            
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Month</label>
                                    <input class="ccmonth form-control" type="text" name="ccmonth" placeholder="MM" maxlength="2" required>
                                </div>
                            </div>
                            
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input class="ccyear form-control" type="text" name="ccyear" placeholder="YY" maxlength="2" required>
                                </div>
                            </div>
                            
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>CVV2/CVC</label>
                                    <input class="ccv form-control" type="text" name="cvv" placeholder="CVV2/CVC" maxlength="4" required>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Authentication Method</label>
                                    <select class="form-control" id="authmethod" name="authmethod">
                                        <option value="">Select Authentication Method</option>
                                        <option value="PIN">PIN</option>
                                        <option value="BVN">BVN</option>
                                        <option value="VBVSECURECODE">VBV&reg;/SecureCode&trade;</option>
                                        <option value="RANDOM_DEBIT">Random Debit</option>
                                        <option value="NOAUTH">No Authentication</option>
                                    </select>
                                </div>
                            </div>
                            
                           <!--  <div class="col-sm-6">
                                <div class="form-group">
                                    <label id="mvaluelabel"><em class="text-muted">Select an Authentication Method</em></label>
                                    <input class="form-control" type="text" name="mvalue" id="mvalue" placeholder="" required disabled>
                                </div>
                            </div> -->
                            
                            <!-- <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Route Country</label>
                                   	<select class="form-control" id="country" name="country">
                                        <option value="NG">NG: Nigeria</option>
                                        <option value="GH">GH: Ghana</option>
                                        
                                        <option value="KE">KE: Kenya</option>
                                        <option value="UK">UK: United Kingdom</option>
                                        <option value="US">All (Worldwide)</option>
                                    </select>
                                </div>
                            </div> -->
                            
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-4">
                                        	<label>Currency</label>
                                        	<select class="currency form-control" name="currency" id="currency">
                                            	<option value="NGN">NGN</option><option value="USD">USD</option><option value="GBP">GBP</option><option value="EUR">EUR</option>
                                            </select>
                                        </div>
                                    	<div class="col-xs-8">
                                        	<label>Amount</label>
                                    		<input class="amount form-control" type="text" name="amount" placeholder="Enter amount" required>
                                      	</div>
                                  	</div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Transaction Description</label>
                                    <input class="description form-control" type="text" name="description" placeholder="Enter transaction description" required>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                	<!-- <input type="hidden" name="usermid" value="tk_UPFEhmincI">
                                    <input type="hidden" name="usertoken" value="tk_BCvbtYJ8EyUIDi93QV2f">
                                    <input type="hidden" name="platform" value="test"> -->
                                    <button type="submit" class="btn btn-primary" id="submitpayment" name="submitpayment">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>