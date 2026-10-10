<!DOCTYPE html>
<html>
<body style="margin:0;padding:0;background-color:#f5f7fa;font-family:Arial,Helvetica,sans-serif;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f5f7fa;padding:24px 0;">
<tr><td align="center">
<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background-color:#ffffff;border-radius:6px;overflow:hidden;">
<tr><td style="background-color:#06172e;padding:22px 28px;">
<span style="font-size:22px;font-weight:bold;color:#ffffff;letter-spacing:-0.5px;">Finance<span style="color:#16bafb;">Lab</span></span>
<div style="font-size:12px;color:#b0c3dc;margin-top:4px;">Yangi murojaat — sayt kontakt formasi ({{ $contact->locale }})</div>
</td></tr>
<tr><td style="padding:28px;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px;color:#10213a;line-height:1.6;">
<tr><td style="padding:6px 0;color:#526580;width:130px;">Ism</td><td style="padding:6px 0;font-weight:bold;">{{ $contact->name }}</td></tr>
<tr><td style="padding:6px 0;color:#526580;">Email</td><td style="padding:6px 0;"><a href="mailto:{{ $contact->email }}" style="color:#0788ff;">{{ $contact->email }}</a></td></tr>
<tr><td style="padding:6px 0;color:#526580;">Tashkilot</td><td style="padding:6px 0;">{{ $contact->organization ?? '—' }}</td></tr>
<tr><td style="padding:6px 0;color:#526580;">Qiziqish</td><td style="padding:6px 0;">{{ $contact->interest }}</td></tr>
</table>
<div style="margin-top:16px;background-color:#f5f7fa;border-left:4px solid #0788ff;border-radius:0 4px 4px 0;padding:14px 16px;font-size:14px;color:#10213a;line-height:1.7;white-space:pre-line;">{{ $contact->message }}</div>
<p style="font-size:12px;color:#526580;margin:20px 0 0;">Yuborilgan: {{ $contact->created_at }} · IP: {{ $contact->ip ?? '—' }}</p>
</td></tr>
<tr><td style="background-color:#06172e;padding:14px 28px;font-size:12px;color:#b0c3dc;">© 2026 FinanceLab · Financial Intelligence. Applied.</td></tr>
</table>
</td></tr>
</table>
</body>
</html>
