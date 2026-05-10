<?php
$filename = __DIR__ . '/manual.pdf';
if (!file_exists($filename)) {
    http_response_code(404);
    echo '<h1>404 File not found</h1><p>The requested PDF manual is not available.</p>';
    exit;
}
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Document-Tracking-System-User-Manual.pdf"');
header('Content-Length: ' . filesize($filename));
header('Cache-Control: private, max-age=0, must-revalidate');
readfile($filename);
exit;
