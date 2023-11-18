<?php

// Simulate generating a ticket ID (replace this with your actual logic)
$ticketId = uniqid('ticket_');

// Return the ticket ID as a JSON response
header('Content-Type: application/json');
echo json_encode(['ticketId' => $ticketId]);

?>
