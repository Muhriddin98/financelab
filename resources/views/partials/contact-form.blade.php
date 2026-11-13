@php $c = $contactCopy; @endphp
<form class="contact-form" id="contact-form" action="{{ ($localePrefix ?? '').'/contact' }}" method="post" data-brief-title="{{ __('ui.js_brief_title') }}" data-brief-pending="{{ __('ui.js_brief_pending') }}" data-sending="{{ __('ui.form_sending') }}" data-error="{{ __('ui.form_error') }}" data-success="{{ $c['success'] }}">
    @csrf
    <div class="form-pair">
        <label><span class="lab">{{ $c['labels']['name'] }} <span class="req" aria-hidden="true">*</span></span><input name="name" autocomplete="name" required maxlength="150" data-label="{{ $c['labels']['name'] }}"></label>
        <label><span class="lab">{{ $c['labels']['email'] }} <span class="req" aria-hidden="true">*</span></span><input name="email" type="email" autocomplete="email" required maxlength="200" data-label="{{ $c['labels']['email'] }}"></label>
    </div>
    <label><span class="lab">{{ $c['labels']['organization'] }}</span><input name="organization" autocomplete="organization" maxlength="200" data-label="{{ $c['labels']['organization'] }}"></label>
    <label><span class="lab">{{ $c['labels']['interest'] }} <span class="req" aria-hidden="true">*</span></span><select name="interest" data-label="{{ $c['labels']['interest'] }}">@foreach($c['options'] as $o)<option>{{ $o }}</option>@endforeach</select></label>
    <label><span class="lab">{{ $c['labels']['message'] }} <span class="req" aria-hidden="true">*</span></span><textarea name="message" required minlength="20" maxlength="5000" rows="5" placeholder="{{ $c['placeholders']['message'] }}" data-label="{{ $c['labels']['message'] }}"></textarea></label>
    <label><span class="lab">{{ $c['labels']['file'] }}</span><span class="file-pick">@include('partials.lucide', ['name' => 'upload', 'size' => 18])<span class="file-btn">{{ __('ui.file_choose') }}</span><span class="file-name" data-none="{{ __('ui.file_none') }}">{{ __('ui.file_none') }}</span><input type="file" name="attachment" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.csv,.zip,.jpg,.jpeg,.png,.webp"></span></label>
    <p class="file-hint">{{ __('ui.file_hint') }}</p>
    @if($c['note'])<p class="form-note">{{ $c['note'] }}</p>@endif
    <div class="privacy-note">@include('partials.lucide', ['name' => 'shield-check', 'size' => 16])<span>{{ $c['privacy'] }}</span></div>
    <p class="privacy-policy-note">{{ $c['privacy_note'] }}</p>
    <div class="button-row">
        <button class="button" type="submit" value="send">{{ $c['button'] }}</button>
        <button class="download-button" type="submit" value="download">@include('partials.lucide', ['name' => 'download', 'size' => 17]) {{ __('ui.download_brief') }}</button>
    </div>
    <p role="status" class="form-status" id="form-status"></p>
</form>
