<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $data['full_name'] ?? 'Executive CV' }}</title>
    <style>
        body { font-family: 'Georgia', serif; margin: 0; padding: 0; color: #333333; font-size: 12px; }
        .sidebar { width: 30%; background-color: #0f172a; color: #ffffff; float: left; min-height: 100vh; padding: 25px 20px; box-sizing: border-box; }
        .main-content { width: 70%; float: right; padding: 25px 30px; box-sizing: border-box; }
        .sidebar-title { font-size: 11px; font-weight: bold; text-transform: uppercase; color: #94a3b8; letter-spacing: 1px; margin-top: 20px; border-bottom: 1px solid #334155; padding-bottom: 4px; }
        .sidebar-text { font-size: 11px; color: #cbd5e1; margin-top: 6px; }
        .main-title { font-size: 13px; font-weight: bold; text-transform: uppercase; color: #0f172a; border-bottom: 2px solid #0f172a; padding-bottom: 3px; margin-top: 20px; margin-bottom: 10px; }
        .name { font-size: 22px; font-weight: bold; color: #0f172a; margin: 0; }
        .role { font-size: 13px; color: #64748b; font-style: italic; margin-bottom: 15px; }
    </style>
</head>
<body>

    <!-- Left Sidebar -->
    <div class="sidebar">
        <div style="font-size: 18px; font-weight: bold; color: #ffffff; margin-bottom: 5px;">{{ $data['full_name'] ?? '' }}</div>
        <div style="font-size: 11px; color: #38bdf8;">{{ $data['role'] ?? '' }}</div>

        <div class="sidebar-title">Contact</div>
        <div class="sidebar-text">{{ $data['email'] ?? '' }}</div>
        <div class="sidebar-text">{{ $data['phone'] ?? '' }}</div>
        <div class="sidebar-text">{{ $data['location'] ?? '' }}</div>

        @if(!empty($data['skills']))
        <div class="sidebar-title">Core Skills</div>
        @foreach($data['skills'] as $skill)
            <div class="sidebar-text">• {{ $skill['name'] }}</div>
        @endforeach
        @endif
    </div>

    <!-- Right Content Area -->
    <div class="main-content">
        <div class="name">{{ $data['full_name'] ?? '' }}</div>
        <div class="role">{{ $data['role'] ?? '' }}</div>

        @if(!empty($data['bio']))
        <div class="main-title">Executive Summary</div>
        <p style="color: #475569; line-height: 1.6;">{{ $data['bio'] }}</p>
        @endif

        @if(!empty($data['experiences']))
        <div class="main-title">Experience</div>
        @foreach($data['experiences'] as $exp)
        <div style="margin-bottom: 12px;">
            <strong style="color: #0f172a;">{{ $exp['role'] ?? '' }}</strong> — <em>{{ $exp['company'] ?? '' }}</em>
            <div style="font-size: 10px; color: #64748b;">{{ $exp['start_date'] ?? '' }} – {{ !empty($exp['is_current']) ? 'Present' : ($exp['end_date'] ?? '') }}</div>
            <p style="margin-top: 4px; color: #334155;">{{ $exp['description'] ?? '' }}</p>
        </div>
        @endforeach
        @endif
    </div>

</body>
</html>