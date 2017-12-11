<div id="regform" class="container">

    <form action="<?= SCRIPTS_PATH . 'mailer.php'; ?>" method="post">

        <!-- fullname1 input-->
        <fieldset>
            <h1 class="page-header">Personal details</h1>
            <div class="form-group">
                <label for="full-name1" class="col-form-label">Full Name*</label>
                <input id="full-name1" class="form-control" name="full-name1" type="text" placeholder="e.g. John Smith" required>
                <!--<span id="tooltip-fullname">
                    <a class='fullname-tool-tip' styldata-toggle="tooltip" data-placement="left" title="Test testt eststse">
                        <i class='fa fa-info text-black'></i>
                    </a>
                </span>-->
            </div>
            <!-- email input-->
            <div class="form-group">
                <label for="email" class="col-form-label">Email*</label>
                <input id="email" class="form-control" name="email" type="text" placeholder="you@example.co.uk" required>
            </div>
            <!-- address-line1 input-->
            <div class="form-group">
                <label class="col-form-label">Address*</label>
                <input id="address-line1" name="address-line1" type="text" placeholder="address line 1*" class="form-control" required><br />
                <input id="address-line2" name="address-line2" type="text" placeholder="address line 2" class="form-control"><br />
                <input id="city" name="city" type="text" placeholder="city" class="form-control"><br />
                <input id="postal-code" name="postal-code" type="text" placeholder="postal code*" class="form-control" required><br />
            </div>
        </fieldset>

        <!-- EMERGENCY -->
        <fieldset>
            <h1 class="page-header">Emergency contact</h1>
            <div class="form-group">
                <label for="emergency-name1" class="col-form-label">Emergency contact name*</label>
                <input id="emergency-name1" name="emergency-name" type="text" placeholder="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="emergency-contact" class="col-form-label">Emergency contact number*</label>
                <input id="emergency-contact" name="emergency-contact" type="text" placeholder="mobile / telephone" class="form-control" required>
            </div>
        </fieldset>

        <!-- BOATS -->
        <fieldset>
            <!-- boat 1 -->
            <h1 class="page-header">Boats</h1>
            <div class="form-group">
                <label for="boat-class1" class="col-form-label">Boat 1 class</label>
                <input id="boat-class1" name="boat-class1" type="text" placeholder="boat class" class="form-control">
            </div>
            <div class="form-group">
                <label for="boat-sailno1" class="col-form-label">Boat 1 sail number</label>
                <input id="boat-sailno1" name="boat-sailno1" type="text" placeholder="boat sail number" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-group-label">
                    <input name="boat1-owned" class="form-group-input" type="checkbox" value="">
                    Tick if you own this boat
                </label>
            </div>

            <hr />

            <!-- boat 2 -->
            <div class="form-group">
                <label for="boat-class1" class="col-form-label">Boat 2 class</label>
                <input id="boat-class1" name="boat-class1" type="text" placeholder="boat class" class="form-control">
            </div>
            <div class="form-group">
                <label for="boat-sailno2" class="col-form-label">Boat 2 sail number</label>
                <input id="boat-sailno2" name="boat-sailno2" type="text" placeholder="boat sail number" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-group-label">
                    <input name="boat1-owned" class="form-group-input" type="checkbox" value="">
                    Tick if you own this boat
                </label>
            </div>

            <p>
                If you require more than one space in the compound or additional boats then please email the compound manager at <a href="mailto:compound@tatasteelsailing.org.uk">compound@tatasteelsailing.org.uk</a>.
                More than 2 dinghies in the compound attracts an additional fee of £31 for each extra dinghy.
            </p>
        </fieldset>

        <!-- QUALIFICATIONS (optional) -->
        <fieldset>
            <h1 class="page-header">Existing qualifications (optional)</h1>
            <div class="form-group">
                <label for="qualifications-textarea">Do you own any existing powerboat / sailing qualifications? (please speficfy)</label>
                <textarea class="form-control" id="qualifications-textarea" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label class="form-group-label">
                    <input name="firstaid" id="firstaid" class="form-group-input" type="checkbox" value="">
                    Do you hold any First Aid certificates?
                </label>
            </div>
            <div class="form-group hidden" id="firstaid-expire-div">
                <label for="firstaid-expire" class="col-form-label">Expiry date:</label>
                <input class="form-control" id="date-input" name="date" placeholder="DD/MM/YYY" type="text"/>
            </div>
        </fieldset>

        <!-- Terms and conditions -->
        <fieldset>
            <h1 class="page-header">Terms and conditions</h1>
            <div class="form-group">
                <label class="form-group-label">
                    <input name="od-selected" class="form-group-input" type="checkbox" value="">
                    I/we have provided three dates on which I/we are able to do OD duties during 2018 via the online roster in the Tata Steel Sailing Club website.
                </label>
            </div>
            <div class="form-group">
                <label class="form-group-label">
                    <input name="club_rules" class="form-group-input" type="checkbox" value="">
                        I agree to comply with all the Club Rules, agreed practices and procedures. &#09
                        <a href="?page=termsandconditions" target="blank" data-toggle="tooltip" data-placement="right" class="tooltip-init text-black" title="Click to read our Terms and Conditions page."><i class='fa fa-info'></i></a>
                    </input>
                </label>
            </div>
            <div class="form-group">
                <label class="form-group-label">
                    <input name="insured" class="form-group-input" type="checkbox" value="">
                        All craft are to be insured for a minimum of £2M for third Party Risks.
                    </input>
                </label>
            </div>
        </fieldset>

        <!-- Payment -->
        <fieldset>
            <h1 class="page-header">Payment</h1>
            <div class="form-group input-group">
                <label class="form-group-label">
                    <input name="late-fee" id="late-fee" class="form-group-input" type="checkbox" value="">
                        Do you require a late joining fee of £10? &#09
                        <a data-toggle="tooltip" data-placement="right" class="tooltip-init text-black" title="For family or single adult membership renewals after 31 March."><i class='fa fa-info'></i></a>
                    </input>
                </label>
            </div>
            <div class="form-group">
                <label class="form-group-label">
                    <input name="eployee" id="eployee" class="form-group-input" type="checkbox" value="">
                    Are you a Tata Steel employee / reteiree?
                </label>
            </div>
            <div id="mem-type-employee-div" class="form-group hidden">
                <label for="mem-type-employee">Select membership plan</label>
                <select class="form-control" id="mem-type-employee">
                    <option value="" selected disabled>Please select</option>
                    <option>Family (yourself, partner, all children under 18) - <strong>£179</strong></option>
                    <option>Single adult (18 - 64 years of age at 1st Jan this year) - <strong>£147</strong></option>
                    <option>Single adult (65 and over) - <strong>£111</strong></option>
                    <option>Student / apprentice (18 or over at 1st Jan this year) - <strong>£50</strong></option>
                    <option>Junior (Not yet 18 at 1st Jan this year) - <strong>Free</strong></option>
                    <option>Crew (non-boat owning adult) - <strong>£45</strong></option>
                </select>
            </div>
            <div id="mem-type-div" class="form-group">
                <label for="mem-type">Select membership plan</label>
                <select class="form-control" id="mem-type">
                    <option value="" selected disabled>Please select</option>
                    <option>Family (yourself, partner, all children under 18) - <strong>£200</strong></option>
                    <option>Single adult (18 - 64 years of age at 1st Jan this year) - <strong>£169</strong></option>
                    <option>Single adult (65 and over) - <strong>£122</strong></option>
                    <option>Student / apprentice  (18 or over at 1st Jan this year) - <strong>£60</strong></option>
                    <option>Junior (Not yet 18 at 1st Jan this year) - <strong>£35</strong></option>
                    <option>Crew (non-boat owning adult) - <strong>£62</strong></option>
                </select>
            </div>

            <h1 id="total-charge-header" class="page-header">Total payable: £0</h1>
            <div id="payment-method" class="form-group">
                <label for="mem-type">Select payment method</label>
                <select class="form-control" id="payment-type">
                    <option value="" selected disabled>Please select</option>
                    <option value="cheque">I will write a cheque</option>
                    <option value="card">I will pay the above amount via direct debit.</option>
                </select>
                <br />
                <p class="hidden" id="cheque-p">Cheques must be payable to "Tata Steel Sailing Club Margam" and sent to the Treasurer (contact details on the website)</p>
                <p class="hidden" id="card-p">
                    Card details to pay to:<br />
                    Lloyds Bank PLC<br />
                    Sort Code: <strong>30-91-18</strong><br />
                    Account Number: <strong>02386779</strong><br />
                    Reference: <i>Your Name</i>
                </p>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Submit</form>
    </form>
</div>
<script>    
    $('#firstaid').change(function() {
        if (document.getElementById("firstaid").checked) {
            $('#firstaid-expire-div').removeClass("hidden");
        } else {
            $('#firstaid-expire-div').addClass("hidden");
        }
    });
    
    $('#eployee').change(function() {
        if (document.getElementById("eployee").checked) {
            $('#mem-type-employee-div').removeClass("hidden");
            $('#mem-type-div').addClass("hidden");
        } else {
            $('#mem-type-div').removeClass("hidden");
            $('#mem-type-employee-div').addClass("hidden");
        }
    });

    $('#payment-type').change(function() {
        if (document.getElementById("payment-type").value == "cheque") {
            $('#cheque-p').removeClass("hidden");
            $('#card-p').addClass("hidden");
        } else if (document.getElementById("payment-type").value == "card") {
            $('#card-p').removeClass("hidden");
            $('#cheque-p').addClass("hidden");
        } else {
            $('#card-p').addClass("hidden");
            $('#cheque-p').addClass("hidden");
        }
    });

    // datetime
    $(document).ready(function(){
        var options = {
            format: 'dd/mm/yyyy',
            autoclose: true
        };
        $('#date-input').datepicker(options);
    });

    // init tooltips
    $( document ).ready(function() {
       $("a.tooltip-init").tooltip();
    });

    // calculate total payable every 2 seconds
    window.setInterval(function(){
        var totalcharge = parseInt(0);
        if (document.getElementById("late-fee").checked) { totalcharge += parseInt(10); }
        if (document.getElementById("eployee").checked) {
            var text = $("#mem-type-employee option:selected").val().split("£").pop();
        } else {
            var text = $("#mem-type option:selected").val().split("£").pop();
        }
        if (Number.isInteger(parseInt(text))) {
            totalcharge += parseInt(text);
        }
        $('#total-charge-header').text("Total payable: £" + totalcharge);
    }, 2000);
</script>