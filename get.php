<?php
// هدرهای HTTP برای ارسال فایل mobileconfig
header('Content-Type: application/x-apple-aspen-config');
header('Content-Disposition: attachment; filename="get-udid.mobileconfig"');

// محتوای فایل mobileconfig
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">';
echo '<plist version="1.0">';
echo '<dict>';
echo '    <key>PayloadContent</key>';
echo '    <array>';
echo '        <dict>';
echo '            <key>PayloadType</key>';
echo '            <string>com.apple.security.root</string>';
echo '            <key>PayloadVersion</key>';
echo '            <integer>1</integer>';
echo '            <key>PayloadIdentifier</key>';
echo '            <string>com.example.get-udid</string>';
echo '            <key>PayloadUUID</key>';
echo '            <string>12345678-1234-1234-1234-123456789abc</string>';
echo '            <key>PayloadDisplayName</key>';
echo '            <string>Get UDID</string>';
echo '            <key>PayloadDescription</key>';
echo '            <string>This profile is used to retrieve the UDID of the device.</string>';
echo '            <key>PayloadOrganization</key>';
echo '            <string>Your Organization</string>';
echo '        </dict>';
echo '    </array>';
echo '    <key>PayloadType</key>';
echo '    <string>Configuration</string>';
echo '    <key>PayloadVersion</key>';
echo '    <integer>1</integer>';
echo '    <key>PayloadIdentifier</key>';
echo '    <string>com.example.configuration</string>';
echo '    <key>PayloadUUID</key>';
echo '    <string>87654321-4321-4321-4321-abc987654321</string>';
echo '    <key>PayloadDisplayName</key>';
echo '    <string>Get UDID</string>';
echo '</dict>';
echo '</plist>';
?>