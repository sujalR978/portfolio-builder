<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $data['full_name'] ?? 'Portfolio Overview' }}</title>
    <style>
        body { font-family: 'Times New Roman', Times, serif; margin: 0; padding: 40px; color: #111111; font-size: 12px; line-height: 1.6; }
        .header { text-align: center; margin-bottom: 30px; }
        .name { font-size: 26px; font-weight: normal; letter-spacing: 2px; text-transform: uppercase; color: #111111; margin: 0; }
        .role { font-size: 12px; letter-spacing: 1px; color: #d4af37; text-transform: uppercase; margin-top: 5px; }
        .contact { font-size: 10px; color: #666666; margin-top: 8px; }
        .section-header { font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #d4af37; border-bottom: 1px solid #d4af37; padding-bottom: 3px; margin-top: 25px; margin-bottom: 12px; }
        .job-title { font-size: 13px; font-weight: bold; color: #111111; }
        .job-company { font-style: italic; color: #555555; }
        .job-date { float: right; font-size: 10px; color: #777777; }
    </style>
</head>
<body>

    <div class="header">
        <h1 class="name">{{ $data['full_name'] ?? 'John Doe' }}</h1>
        <div class="role">{{ $data['role'] ?? 'Senior Product Designer' }}</div>
        <div class="contact">
            {{ $data['email'] ?? '' }} &bull; {{ $data['phone'] ?? '' }} &bull; {{ $data['location'] ?? '' }}
        </div>
    </div>

    @if(!empty($data['bio']))
    <div class="section-header">Biography</div>
    <p style="text-align: justify; color: #333333;">{{ $data['bio'] }}</p>
    @endif

    @if(!empty($data['experiences']))
    <div class="section-header">Career History</div>
    @foreach($data['experiences'] as $exp)
    <div style="margin-bottom: 14px;">
        <span class="job-date">{{ $exp['start_date'] ?? '' }} – {{ !empty($exp['is_current']) ? 'Present' : ($exp['end_date'] ?? '') }}</span>
        <div class="job-title">{{ $exp['role'] ?? '' }}</div>
        <div class="job-company">{{ $exp['company'] ?? '' }}</div>
        <p style="margin-top: 4px; color: #444444;">{{ $exp['description'] ?? '' }}</p>
    </div>
    @endforeach
    @endif

</body>
</html>