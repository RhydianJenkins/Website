<?php

if (isset($_POST['register-flag'])) {
    // to prevent refresh resubmission
    unset($_POST['register-flag']);

    // values mapped to pretty names
    $names = [
        "full-name1" => "Full name",
        "email" => "Email",
        "address-line1" => "Address line 1",
        "address-line2" => "Address line 2",
        "city" => "City",
        "postal-code" => "Post code",
        "emergency-name" => "Emergency name",
        "emergency-contact" => "Emergency contact",
        "boat-class1" => "Boat 1 class",
        "boat-sailno1" => "Boat 1 sail number",
        "boat1-owned" => "Boat 1 is owned",
        "boat-class2" => "Boat 2 class",
        "boat-sailno2" => "Boat 2 sail number",
        "boat2-owned" => "Boat 2 is owned",
        "qualifications-textarea" => "Additional qualifications held",
        "firstaid" => "First aid certificate held",
        "date" => "First aid certificate expiry date",
        "od-selected" => "Applicant has claimed to have selected OD duties",
        "club_rules" => "Applicant has claimed to have read and agreed to the club rules",
        "insured" => "Applicant has claimed to be insured for £2M",
        "late-fee" => "Applicant requires a late joining fee",
        "employee" => "Applicant claims to be a Tata Steel employee",
        "mem-type" => "Membership type",
        "mem-type-employee" => "Employee membership type",
        "payment-type" => "Payment method",
        "total-payable" => "Total payable",
    ];

    // bug prevention: if they select an employee price and then deselect employee, we need to manually remove their employee selection
    if (isset($_POST['employee'])) {
        unset($_POST['mem-type']);
    } else {
        unset($_POST['mem-type-employee']);
    }

    // build the message to treasurer
    $message = "You have received a new membership request from the website:\n\n";
    foreach($_POST as $key => $item) {
        if (!$item) { continue; }
        $_POST[$key] = strip_tags(htmlspecialchars($item));
        $message .= $names[$key];
        if (!empty($item)) {
            $message .= ": " . $item;
        }
        $message .= "\r\n";
    }

    // build the email to treasurer
    $to = TREASURER_EMAIL;
    $email_subject = "New Website Membership Request Form";
    $headers = "From: noreply@tatasteelsailing.org.uk\r\n";
    if (isset($_POST['email'])) {
        $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    } else {
        $headers .= "Reply-To: noreply@tatasteelsailing.org.uk\r\n";
    }
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    // Send mail to tresurer
    if (mail($to, $email_subject, $message, $headers)) {
        // success
    } else {
        // fail
    }

    // build message to applicant
    $message = "Hello.\n\n";
    $message .= "This email is to confirm that you have successfully subitted application to Tata Steel sailing club with the following information:\n\n";
    foreach($_POST as $key => $item) {
        if (!$item) { continue; }
        $_POST[$key] = strip_tags(htmlspecialchars($item));
        $message .= $names[$key];
        if (!empty($item)) {
            $message .= ": " . $item;
        }
        $message .= "\r\n";
    }
    $message .= "\r\nIf any of the information is incorrect, or if you have any questions regarding your application, please email treasurer@tatasteelsailing.org.uk as soon as possible.\n\n";
    $message .= "Regards,\r\n";
    $message .= "Tata Steel Sailing Club\r\n";
    $message .= "Margam";


    // build the email TO applicant
    $email_subject = "New Website Membership Request Form";
    $headers = "From: noreply@tatasteelsailing.org.uk\r\n";
    if (isset($_POST['email'])) {
        $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
        $to = $_POST['email'];
    } else {
        $headers .= "Reply-To: noreply@tatasteelsailing.org.uk\r\n";
    }
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    // Send mail to applicant
    if (mail($to, $email_subject, $message, $headers)) {
        // success
    } else {
        // fail
    }

    // render success message
    echo '
        <div class="container-fluid">
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> Your application has been sent successfully. You should have a confirmation email.
            </div>
        </div>
    ';

    return true;
} else {
    return false;
}