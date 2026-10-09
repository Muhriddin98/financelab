@php $c = $contactCopy; @endphp
<form class="contact-form" id="contact-form" data-brief-title="{{ __('ui.js_brief_title') }}" data-brief-pending="{{ __('ui.js_brief_pending') }}" data-status="{{ __('ui.js_status') }}" data-subject="{{ __('ui.js_subject') }}" data-success="{{ $c['success'] }}">
    <div class="form-pair">
        <label>{{ $c['labels']['name'] }}<input name="name" autocomplete="name" required maxlength="150" data-label="{{ $c['labels']['name'] }}"></label>
        <label>{{ $c['labels']['email'] }}<input name="email" type="email" autocomplete="email" required maxlength="200" data-label="{{ $c['labels']['email'] }}"></label>
    </div>
    <label>{{ $c['labels']['organization'] }}<input name="organization" autocomplete="organization" maxlength="200" data-label="{{ $c['labels']['organization'] }}"></label>
    <label>{{ $c['labels']['interest'] }}<select name="interest" data-label="{{ $c['labels']['interest'] }}">@foreach($c['options'] as $o)<option>{{ $o }}</option>@endforeach</select></label>
    <label>{{ $c['labels']['message'] }}<textarea name="message" required minlength="20" maxlength="5000" rows="5" data-label="{{ $c['labels']['message'] }}"></textarea></label>
    <p class="form-note">{{ $c['note'] }}</p>
    <div class="button-row">
        <button class="button" type="submit" value="email">{{ $c['button'] }}</button>
        <button class="download-button" type="submit" value="download">@include('partials.lucide', ['name' => 'download', 'size' => 17]) {{ __('ui.download_brief') }}</button>
    </div>
    <p role="status" class="form-status" id="form-status"></p>
</form>
