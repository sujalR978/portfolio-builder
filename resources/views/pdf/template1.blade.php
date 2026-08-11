<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $data['full_name'] ?? 'Portfolio Resume' }}</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; margin: 0; padding: 30px; color: #1e293b; font-size: 13px; line-height: 1.5; }
        .header { border-bottom: 2px solid #2563eb; padding-bottom: 15px; margin-bottom: 20px; }
        .name { font-size: 24px; font-weight: bold; color: #0f172a; text-transform: uppercase; margin: 0; }
        .role { font-size: 14px; color: #2563eb; font-weight: 600; margin-top: 4px; }
        .contact-info { margin-top: 8px; font-size: 11px; color: #64748b; }
        .section-title { font-size: 12px; font-weight: bold; text-transform: uppercase; color: #0f172a; letter-spacing: 1px; border-bottom: 1px solid #e2e8f0; padding-bottom: 4px; margin-top: 20px; margin-bottom: 12px; }
        .item-title { font-size: 13px; font-weight: bold; color: #0f172a; }
        .item-subtitle { font-size: 11px; color: #64748b; font-weight: 600; }
        .badge { display: inline-block; background: #eff6ff; color: #2563eb; padding: 3px 8px; border-radius: 12px; font-size: 10px; font-weight: bold; margin-right: 4px; margin-bottom: 4px; }
        .grid { width: 100%; }
        .col-6 { width: 48%; float: left; }
        .clear { clear: both; }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <h1 class="name">{{ $data['full_name'] ?? 'John Doe' }}</h1>
        <div class="role">{{ $data['role'] ?? 'Senior Software Engineer' }}</div>
        <div class="contact-info">
            {{ $data['email'] ?? 'john@example.com' }} | {{ $data['phone'] ?? '+1 (555) 000-0000' }} | {{ $data['location'] ?? 'San Francisco, CA' }}
        </div>
    </div>

    <!-- Bio / Summary -->
    @if(!empty($data['bio']))
    <div class="section-title">About Me</div>
    <p style="color: #475569; margin: 0;">{{ $data['bio'] }}</p>
    @endif

    <!-- Required Competencies / Skills -->
    @if(!empty($data['skills']))
    <div class="section-title">Technical Expertise</div>
    <div>
        @foreach($data['skills'] as $skill)
            <span class="badge">{{ $skill['name'] }} (Lvl {{ $skill['level'] }}/5)</span>
        @endforeach
    </div>
    @endif

    <!-- Professional Experience -->
    @if(!empty($data['experiences']))
    <div class="section-title">Professional Experience</div>
    @foreach($data['experiences'] as $exp)
    <div style="margin-bottom: 12px;">
        <div class="item-title">{{ $exp['role'] ?? '' }} — <span style="color: #2563eb;">{{ $exp['company'] ?? '' }}</span></div>
        <div class="item-subtitle">{{ $exp['start_date'] ?? '' }} – {{ !empty($exp['is_current']) ? 'Present' : ($exp['end_date'] ?? '') }}</div>
        <p style="margin: 4px 0 0 0; font-size: 12px; color: #475569;">{{ $exp['description'] ?? '' }}</p>
    </div>
    @endforeach
    @endif

    <!-- Featured Projects -->
    @if(!empty($data['projects']))
    <div class="section-title">Featured Projects</div>
    @foreach($data['projects'] as $project)
    <div style="margin-bottom: 10px;">
        <div class="item-title">{{ $project['title'] ?? '' }}</div>
        <p style="margin: 2px 0; font-size: 11px; color: #475569;">{{ $project['description'] ?? '' }}</p>
    </div>
    @endforeach
    @endif

</body>
</html>