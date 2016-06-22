<?php 
/**

 ▄█      ███           ▄████████ ▄██   ▄   ▀█████████▄     ▄████████    ▄████████ 
███  ▀█████████▄      ███    ███ ███   ██▄   ███    ███   ███    ███   ███    ███ 
███▌    ▀███▀▀██      ███    █▀  ███▄▄▄███   ███    ███   ███    █▀    ███    ███ 
███▌     ███   ▀      ███        ▀▀▀▀▀▀███  ▄███▄▄▄██▀   ▄███▄▄▄      ▄███▄▄▄▄██▀ 
███▌     ███          ███        ▄██   ███ ▀▀███▀▀▀██▄  ▀▀███▀▀▀     ▀▀███▀▀▀▀▀   
███      ███          ███    █▄  ███   ███   ███    ██▄   ███    █▄  ▀███████████ 
███      ███          ███    ███ ███   ███   ███    ███   ███    ███   ███    ███ 
█▀      ▄████▀        ████████▀   ▀█████▀  ▄█████████▀    ██████████   ███    ███ 
                                                                       ███    ███ 
**/

/**
 * @package         Professionals challenges
 * @author          xC0d3rZ <x.c0d3rz000@gmail.com>.
 * @copyright       ITCB/xC0d3rZ.
 */
$_="DQogaWYoaXNzZXQoJF9QT1NUWydsb2dpbiddKSkNCiAgICB7DQogICAgICAgICR1c2VybmFtZSA9ICRfUE9TVFsndXNlcm5hbWUnXTsNCiAgICAgICAgJHBhc3N3b3JkID0gJF9QT1NUWydwYXNzd29yZCddOw0KICAgICAgICAkY29uID0gbXlzcWxpX2Nvbm5lY3QoJ2xvY2FsaG9zdCcsJ3Jvb3QnLCdwYXNzd29yZCcsJ3NhbXBsZScpOw0KICAgICAgICAkcmVzdWx0ID0gbXlzcWxpX3F1ZXJ5KCRjb24sICJTRUxFQ1QgKiBGUk9NIGB1c2Vyc2AgV0hFUkUgdXNlcm5hbWU9JyR1c2VybmFtZScgQU5EIHBhc3N3b3JkPSckcGFzc3dvcmQnIik7DQogICAgICAgIGlmKG15c3FsaV9udW1fcm93cygkcmVzdWx0KSA9PSAwKQ0KICAgICAgICAgICAgZWNobyAnSW52YWxpZCB1c2VybmFtZSBvciBwYXNzd29yZCc7DQogICAgICAgIGVsc2UNCiAgICAgICAgICAgIGVjaG8gJzxoMT5Mb2dnZWQgaW48L2gxPjxwPicuJHVzZXJuYW1lLic8L3A+JzsNCiAgICB9DQogICAgZWxzZQ0KICAgIHsNCiAgICAgICR0cGwgPSAiUEdoMGJXdytEUW9OQ2p4b1pXRmtQZzBLSUNBZ0lEeDBhWFJzWlQ1UWNtOW1aWE56YVc5dVlXeHpJR05vWVd4c1pXNW5aWE1nZkNCWFpXSWdRWEJ3YkdsallYUnBiMjQ4TDNScGRHeGxQZzBLUEM5b1pXRmtQZzBLRFFvOFltOWtlVDROQ2lBZ0lDQThhREVnYzNSNWJHVTlJblJsZUhRdFlXeHBaMjQ2WTJWdWRHVnlPeUkrVEc5M0lHeGxkbVZzSUMwZ01YTjBJR05vWVd4c1pXNW5aVHd2YURFK0RRb2dJQ0FnUEdoeVBnMEtJQ0FnSUR4alpXNTBaWEkrRFFvZ0lDQWdJQ0FnSUR4bWIzSnRJR0ZqZEdsdmJqMGlJaUJ0WlhSb2IyUTlJbkJ2YzNRaUlITjBlV3hsUFNKdFlYSm5hVzR0ZEc5d09pQTJNSEI0T3lJK0RRb2dJQ0FnSUNBZ0lDQWdJQ0E4YkdGaVpXdytWWE5sY201aGJXVTZQR3hoWW1Wc1BqeHBibkIxZENCMGVYQmxQU0owWlhoMElpQnVZVzFsUFNKMWMyVnlibUZ0WlNJZ0x6NE5DaUFnSUNBZ0lDQWdJQ0FnSUR4aWNpQXZQaUE4YkdGaVpXdytVR0Z6YzNkdmNtUTZQR3hoWW1Wc1BqeHBibkIxZENCMGVYQmxQU0p3WVhOemQyOXlaQ0lnYm1GdFpUMGljR0Z6YzNkdmNtUWlJQzgrRFFvZ0lDQWdJQ0FnSUNBZ0lDQThZbklnTHo0TkNpQWdJQ0FnSUNBZ0lDQWdJRHhpY2o0TkNpQWdJQ0FnSUNBZ0lDQWdJRHhwYm5CMWRDQjBlWEJsUFNKemRXSnRhWFFpSUc1aGJXVTlJbXh2WjJsdUlpQjJZV3gxWlQwaVRHOW5hVzRpSUM4K0RRb2dJQ0FnSUNBZ0lEd3ZabTl5YlQ0TkNpQWdJQ0E4TDJObGJuUmxjajROQ2lBZ0lDQWdJQ0FnUEdoeVBnMEtEUW9nSUNBZ0lDQWdJRHhvTWlCemRIbHNaVDBpZEdWNGRDMWhiR2xuYmpwalpXNTBaWEk3SWo0OFlTQm9jbVZtUFNKb2RIUndjem92TDJaaUxtMWxMM2hqTUdRemNub2lQbmhETUdRemNsbzhMMmd5UGlBTkNqd3ZZbTlrZVQ0TkNqd3ZhSFJ0YkQ0PSI7DQogICAgICBwcmludCBiYXNlNjRfZGVjb2RlKCR0cGwpOw0KICAgIH0NCj8+";
$__ = 'encryption type';
eval ($__($_));
?>
