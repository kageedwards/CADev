const confirmReport = function(element) {
    if (confirm("Are you sure you'd like to report this comment?")) {
        window.location.href = "/?LOCATION=report&comment_id=" + element.getAttribute("data-id");
    }
};

window.onload = function() {

    const reportButtons = document.querySelectorAll("a.report");

    reportButtons.forEach((element) => {
        element.addEventListener('click', function() { confirmReport(this); });
    });
};