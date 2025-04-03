<?php
header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename="schedule.ics"');

$events = [
    [
        'summary' => 'Meeting with Client',
        'start' => '20250410T100000Z',  // YYYYMMDDTHHMMSSZ format (UTC)
        'end' => '20250410T110000Z',
        'location' => 'Zoom',
        'description' => 'Discuss project updates',
    ],
    [
        'summary' => 'Workout Session',
        'start' => '20250411T073000Z',
        'end' => '20250411T083000Z',
        'location' => 'Local Gym',
        'description' => 'Morning gym session',
    ]
];

echo "BEGIN:VCALENDAR\r\n";
echo "VERSION:2.0\r\n";
echo "PRODID:-//My Calendar App//EN\r\n";

foreach ($events as $event) {
    echo "BEGIN:VEVENT\r\n";
    echo "SUMMARY:{$event['summary']}\r\n";
    echo "DTSTART:{$event['start']}\r\n";
    echo "DTEND:{$event['end']}\r\n";
    echo "LOCATION:{$event['location']}\r\n";
    echo "DESCRIPTION:{$event['description']}\r\n";
    echo "END:VEVENT\r\n";
}

echo "END:VCALENDAR\r\n";
?>