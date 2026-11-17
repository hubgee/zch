<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; margin: 0; padding: 0; background: #f4f4f4; }
        .container { max-width: 640px; margin: 20px auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.08); }
        .header { background: linear-gradient(135deg, #0f4c81, #1676c2); color: #fff; padding: 24px 30px; text-align: center; }
        .header h1 { margin: 0; font-size: 22px; }
        .header p { margin: 4px 0 0; opacity: .85; font-size: 13px; }
        .body { padding: 28px 30px; }
        .section-title { font-size: 16px; font-weight: 700; color: #0f4c81; border-left: 4px solid #1676c2; padding-left: 10px; margin: 24px 0 12px; }
        .section-title:first-child { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 6px 8px; font-size: 13px; vertical-align: top; border-bottom: 1px solid #eee; }
        td:first-child { font-weight: 600; color: #555; width: 40%; white-space: nowrap; }
        .footer { background: #f8f9fa; text-align: center; padding: 16px 30px; font-size: 12px; color: #999; border-top: 1px solid #eee; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>New Job Application</h1>
        <p>Zomba Central Hospital — Online Application System</p>
    </div>

    <div class="body">
        <h2 class="section-title">Personal Information</h2>
        <table>
            <tr><td>First Name</td><td>{{ $formData['first_name'] ?? '—' }}</td></tr>
            <tr><td>Last Name</td><td>{{ $formData['last_name'] ?? '—' }}</td></tr>
            <tr><td>Gender</td><td>{{ $formData['gender'] ?? '—' }}</td></tr>
            <tr><td>Date of Birth</td><td>{{ $formData['date_of_birth'] ?? '—' }}</td></tr>
            <tr><td>National ID / Passport</td><td>{{ $formData['national_id'] ?? '—' }}</td></tr>
            <tr><td>Phone Number</td><td>{{ $formData['phone'] ?? '—' }}</td></tr>
            <tr><td>Email Address</td><td>{{ $formData['email'] ?? '—' }}</td></tr>
            <tr><td>Residential Address</td><td>{{ $formData['address'] ?? '—' }}</td></tr>
        </table>

        <h2 class="section-title">Position Applying For</h2>
        <table>
            <tr><td>Department</td><td>{{ $formData['department'] ?? '—' }}</td></tr>
            <tr><td>Position Title</td><td>{{ $formData['position_title'] ?? '—' }}</td></tr>
            <tr><td>Employment Type</td><td>{{ $formData['employment_type'] ?? '—' }}</td></tr>
            <tr><td>Years of Experience</td><td>{{ $formData['experience'] ?? '—' }}</td></tr>
        </table>

        <h2 class="section-title">Education &amp; Qualifications</h2>
        <table>
            <tr><td>Highest Qualification</td><td>{{ $formData['qualification'] ?? '—' }}</td></tr>
            <tr><td>Institution Name</td><td>{{ $formData['institution'] ?? '—' }}</td></tr>
            <tr><td>Year Completed</td><td>{{ $formData['year_completed'] ?? '—' }}</td></tr>
            <tr><td>Professional Certifications</td><td>{{ $formData['certifications'] ?? '—' }}</td></tr>
        </table>

        <h2 class="section-title">Cover Letter</h2>
        <p style="font-size:13px; white-space:pre-wrap;">{{ $formData['cover_letter'] ?? 'Not provided.' }}</p>
    </div>

    <div class="footer">
        © {{ date('Y') }} Zomba Central Hospital. All Rights Reserved.
    </div>
</div>
</body>
</html>
