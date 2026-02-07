<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Inquiry</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #6244c5; color: #fff; padding: 16px; border-radius: 8px 8px 0 0; font-weight: bold; }
        .content { background: #f8f9fa; padding: 24px; border: 1px solid #dee2e6; border-top: none; border-radius: 0 0 8px 8px; }
        .row { margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #e9ecef; }
        .row:last-of-type { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
        .label { font-weight: 600; color: #6c757d; font-size: 0.875rem; }
        .value { margin-top: 4px; }
        .footer { margin-top: 20px; font-size: 0.85rem; color: #6c757d; }
    </style>
</head>
<body>
    <div class="header">New Contact Inquiry – Stack Asthetic</div>
    <div class="content">
        <p>A new inquiry has been submitted from the contact form. Details below:</p>

        <div class="row">
            <div class="label">Name</div>
            <div class="value">{{ $inquiry['name'] ?? '—' }}</div>
        </div>
        <div class="row">
            <div class="label">Email</div>
            <div class="value"><a href="mailto:{{ $inquiry['email'] ?? '' }}">{{ $inquiry['email'] ?? '—' }}</a></div>
        </div>
        <div class="row">
            <div class="label">Mobile</div>
            <div class="value">{{ $inquiry['mobile'] ?? '—' }}</div>
        </div>
        <div class="row">
            <div class="label">Choose Brand</div>
            <div class="value">{{ $inquiry['brand'] ?? '—' }}</div>
        </div>
        <div class="row">
            <div class="label">Preferred Date</div>
            <div class="value">{{ !empty($inquiry['date']) ? \Carbon\Carbon::parse($inquiry['date'])->format('d M Y') : '—' }}</div>
        </div>
        <div class="row">
            <div class="label">Describe your query</div>
            <div class="value">{{ $inquiry['query'] ?? '—' }}</div>
        </div>

        <div class="footer">
            This email was sent from the Stack Asthetic contact form. Submitted at {{ now()->format('d M Y, h:i A') }}.
        </div>
    </div>
</body>
</html>
