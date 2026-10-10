(function () {
    // Sticky header on scroll
    var header = document.getElementById('site-header');
    function onScroll() {
        if (window.scrollY > 20) header.classList.add('scrolled');
        else header.classList.remove('scrolled');
    }
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    // Mobile drawer
    var dialog = document.getElementById('mobile-drawer');
    var openBtn = document.getElementById('menu-open');
    var closeBtn = document.getElementById('menu-close');
    function closeDrawer(restoreFocus) {
        if (dialog.open) dialog.close();
        document.body.style.overflow = '';
        openBtn.setAttribute('aria-expanded', 'false');
        if (restoreFocus) openBtn.focus();
    }
    if (openBtn && dialog) {
        openBtn.addEventListener('click', function () {
            dialog.showModal();
            document.body.style.overflow = 'hidden';
            openBtn.setAttribute('aria-expanded', 'true');
        });
    }
    if (closeBtn) closeBtn.addEventListener('click', function () { closeDrawer(true); });
    if (dialog) {
        dialog.addEventListener('cancel', function () { closeDrawer(false); });
        dialog.querySelectorAll('nav a').forEach(function (a) {
            a.addEventListener('click', function () { closeDrawer(false); });
        });
    }

    // Contact form: POST to server, or downloadable brief (client-side)
    var form = document.getElementById('contact-form');
    if (form) {
        var status = document.getElementById('form-status');
        var sendBtn = form.querySelector('button[value="send"]');
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            var isDownload = event.submitter && event.submitter.getAttribute('value') === 'download';
            if (isDownload) {
                var values = new FormData(form);
                var lines = [(form.getAttribute('data-brief-title') || 'FinanceLab — Project brief'), ''];
                form.querySelectorAll('[data-label]').forEach(function (el) {
                    lines.push(el.getAttribute('data-label') + ': ' + (values.get(el.name) || '—'));
                    lines.push('');
                });
                lines.push(form.getAttribute('data-brief-pending') || 'This brief was prepared locally and has not been sent.');
                var url = URL.createObjectURL(new Blob([lines.join('\n')], { type: 'text/plain;charset=utf-8' }));
                var a = document.createElement('a');
                a.href = url;
                a.download = 'FinanceLab-project-brief.txt';
                a.click();
                setTimeout(function () { URL.revokeObjectURL(url); }, 1000);
                status.textContent = form.getAttribute('data-success') || 'Sent.';
                return;
            }
            var btnText = sendBtn ? sendBtn.textContent : '';
            if (sendBtn) sendBtn.disabled = true;
            status.textContent = form.getAttribute('data-sending') || 'Sending...';
            fetch(form.action, {
                method: 'POST',
                headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value },
                body: new FormData(form)
            }).then(function (resp) {
                return resp.json().then(function (data) { return { status: resp.status, data: data }; });
            }).then(function (result) {
                if (result.status === 422 && result.data.errors) {
                    var first = Object.values(result.data.errors)[0];
                    status.textContent = Array.isArray(first) ? first[0] : first;
                } else {
                    status.textContent = result.data.message || (form.getAttribute('data-error') || 'Error.');
                }
                if (result.data.ok) form.reset();
            }).catch(function () {
                status.textContent = form.getAttribute('data-error') || 'Error.';
            }).finally(function () {
                if (sendBtn) { sendBtn.disabled = false; sendBtn.textContent = btnText; }
            });
        });
    }
})();
