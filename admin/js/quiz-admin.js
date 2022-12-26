document.querySelectorAll('.table-wrap').forEach(function (section) {
    section.addEventListener('click', function (e) {
        document.querySelectorAll('.table-wrap').forEach(function (section) {
          section.classList.remove('open')
        })
        e.target.closest('.table-wrap').classList.add('open');
    })
});