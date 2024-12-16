<style>
    /* Custom Card Styles */
    .custom-card {
        border-radius: 12px;
        width: 400px;
    }

    .custom-header {
        background-color: #2E2E66;
        color: #fff;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }

    .custom-textarea {
        border: 1px solid #ccc;
        border-radius: 8px;
        resize: none;
    }

    .counter {
        text-align: right;
        font-size: 0.9rem;
        color: #999;
    }

    .custom-footer button {
        border-radius: 8px;
    }
</style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
<!-- Collaborate Card -->
<div class="custom-card shadow bg-white">
    <!-- Header -->
    <div class="custom-header">
        <span>Ask to Collaborate</span>
        <button type="button" class="btn-close btn-close-white" aria-label="Close" onclick="closeCard()"></button>
    </div>

    <!-- Body -->
    <div class="p-3">
        <label for="collabNote" class="form-label">Add an invitation note about what you want to collaborate</label>
        <textarea id="collabNote" class="form-control custom-textarea" rows="4" maxlength="80"
            oninput="updateCounter()"></textarea>
        <div id="counter" class="counter mt-1">0/80</div>
    </div>

    <!-- Footer -->
    <div class="d-flex justify-content-between p-3 custom-footer">
        <button class="btn btn-outline-secondary px-4" onclick="closeCard()">Cancel</button>
        <button class="btn btn-primary px-4" onclick="sendInvitation()">Send</button>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function updateCounter() {
        const textarea = document.getElementById('collabNote');
        const counter = document.getElementById('counter');
        counter.textContent = `${textarea.value.length}/80`;
    }

    function closeCard() {
        alert("Card Closed!");
    }

    function sendInvitation() {
        alert("Invitation Sent!");
    }
</script>
</body>