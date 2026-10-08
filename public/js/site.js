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

    // Contact form: mailto draft or downloadable brief (same as original site)
    var form = document.getElementById('contact-form');
    if (form) {
        var status = document.getElementById('form-status');
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            var values = new FormData(form);
            var lines = ['FinanceLab — Project brief', ''];
            form.querySelectorAll('[data-label]').forEach(function (el) {
                lines.push(el.getAttribute('data-label') + ': ' + (values.get(el.name) || '—'));
                lines.push('');
            });
            lines.push('This brief was prepared locally and has not been sent.');
            var body = lines.join('\n');
            var email = document.querySelector('.contact-email');
            var to = email ? email.textContent.trim() : '';
            var isDownload = event.submitter && event.submitter.getAttribute('value') === 'download';
            if (!isDownload) {
                window.location.href = 'mailto:' + to + '?subject=' + encodeURIComponent('FinanceLab enquiry — ' + (values.get('interest') || '')) + '&body=' + encodeURIComponent(body);
                status.textContent = 'Please review and send the draft in your email app. If it does not open, use the email address on this page.';
                return;
            }
            var url = URL.createObjectURL(new Blob([body], { type: 'text/plain;charset=utf-8' }));
            var a = document.createElement('a');
            a.href = url;
            a.download = 'FinanceLab-project-brief.txt';
            a.click();
            setTimeout(function () { URL.revokeObjectURL(url); }, 1000);
            status.textContent = 'Your brief is ready. Check your downloads; it has not been sent.';
        });
    }
})();
