<?php
require_once '../config/connection.php';
try {
    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in and try again.");
    }

    ////////////////// Variables //////////////////
    $crFlag = trim($_GET['crFlag'] ?? ''); // can be CONTACT or REVIEW
    $fullName = trim($data['fullName'] ?? '');
    $emailAddress = trim($data['emailAddress'] ?? '');
    $phoneNumber = trim($data['phoneNumber'] ?? '');
    $subject = trim($data['subject'] ?? '');
    $message = trim($data['message'] ?? '');

    if (empty($crFlag) || !in_array($crFlag, ['CONTACT', 'REVIEW'])) {
        throw new BadRequestException("Invalid crFlag. It must be either 'CONTACT' or 'REVIEW'.");
    }

    ///// validation
    validateEmptyField($fullName, "FULL NAME");
    validateEmptyField($emailAddress, "EMAIL ADDRESS");
    validateEmailField($emailAddress, "EMAIL ADDRESS");
    validateEmptyField($phoneNumber, "PHONE NUMBER");
    validateEmptyField($message, "MESSAGE");
    if ($crFlag === 'CONTACT') {
        validateEmptyField($subject, "SUBJECT");
    }


    ////////////////// Generate Contact ID //////////////////
    $sequence = _get_sequence_count($conn, 'CR');
    $crId = 'CR' . $sequence['no'] . date("Ymdhis");

    if ($crFlag === 'CONTACT') {
        $statusId = 1; // ACTIVE
    } elseif ($crFlag === 'REVIEW') {
        $statusId = 3; // PENDING
    }

    ////////////////// Insert Contact //////////////////
    $insertQuery = "INSERT INTO `CONTACTS_REVIEWS_TAB`
    (`crId`, `fullName`, `emailAddress`, `phoneNumber`, `message`, `statusId`, `createdTime`, `crFlag`) VALUES 
    (?, ?, ?, ?, ?, ?, NOW(), ?)";
    $insertParams = [$crId, $fullName, $emailAddress, $phoneNumber, $message, $statusId, $crFlag];
    insertQuery($conn, $insertQuery, "sssssis", $insertParams);

    ////// send email notification to admin
    if ($crFlag === 'CONTACT') {
        require_once '../mail/site/send-contact-mail.php';
    } else {
        require_once '../mail/site/send-review-mail.php';
    }
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "Your $crFlag has been submitted successfully!",
    ];


} catch (Throwable $e) {
    ErrorHandler::handle($e);
}
http_response_code($response['response']); // sets HTTP status
echo json_encode($response);
?>