document.addEventListener('DOMContentLoaded', function () {
  // Like Button Functionality
  document.querySelectorAll('.like-button').forEach(function (button) {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      // Ambil elemen ikon like dan jumlah like
      var likeIcon = this.querySelector('i');
      var likeCount = this.querySelector('.like-count');
      var likes = parseInt(this.dataset.likes);

      // Ubah ikon dan warna jika tombol di-like
      if (likeIcon.classList.contains('bi-heart')) {
        likeIcon.classList.replace('bi-heart', 'bi-heart-fill');
        likeIcon.style.color = 'red';
        likes += 1;
      } else {
        likeIcon.classList.replace('bi-heart-fill', 'bi-heart');
        likeIcon.style.color = '';
        likes -= 1;
      }

      // Perbarui jumlah like
      this.dataset.likes = likes;
      likeCount.textContent = likes;
    });
  });

  // Save Button Functionality
  document.querySelectorAll('.save-button').forEach(function (button) {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      // Ambil elemen ikon save
      var saveIcon = this.querySelector('i');

      // Ubah ikon dan warna jika disimpan
      if (saveIcon.classList.contains('bi-bookmark')) {
        saveIcon.classList.replace('bi-bookmark', 'bi-bookmark-fill');
        saveIcon.style.color = '#007bff'; // Ubah warna menjadi biru
        this.setAttribute('title', 'Saved');
      } else {
        saveIcon.classList.replace('bi-bookmark-fill', 'bi-bookmark');
        saveIcon.style.color = '';
        this.setAttribute('title', 'Save');
      }
    });
  });

  // Toggle Comments Section
  document.querySelectorAll('.comment-toggle').forEach(function (button) {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      // Tampilkan atau sembunyikan bagian komentar
      var commentsSection = this.closest('.flex-grow-1').querySelector('.comments-section');
      if (commentsSection.style.display === 'none' || commentsSection.style.display === '') {
        commentsSection.style.display = 'block';
      } else {
        commentsSection.style.display = 'none';
      }
    });
  });

  // Add New Comment
  document.querySelectorAll('.add-comment button').forEach(function (button) {
    button.addEventListener('click', function () {
      // Ambil teks komentar dari textarea
      var textarea = this.previousElementSibling;
      var commentText = textarea.value.trim();

      // Tambahkan komentar baru jika teks tidak kosong
      if (commentText !== '') {
        var commentsList = this.closest('.comments-section').querySelector('.existing-comments');
        var newComment = document.createElement('div');
        newComment.className = 'd-flex align-items-start mb-3';
        newComment.innerHTML = `
          <img src="/images/default-user.png" alt="User" class="rounded-circle me-2"
              style="width: 40px; height: 40px; object-fit: cover;">
          <div>
              <strong>@current_user</strong>
              <p class="mb-1">${commentText}</p>
          </div>
        `;
        commentsList.appendChild(newComment);
        textarea.value = ''; // Kosongkan textarea
      }
    });
  });

  // Join Button Functionality
  const joinButton = document.getElementById('joinButton');
  if (joinButton) {
    joinButton.addEventListener('click', function () {
      // Periksa teks tombol saat ini
      if (joinButton.innerText.trim() === '+ Join') {
        // Ubah ke "Joined"
        joinButton.innerText = '✔ Joined';
        joinButton.classList.remove('btn-primary');
        joinButton.classList.add('btn-outline-primary');
      } else {
        // Ubah kembali ke "Join"
        joinButton.innerText = '+ Join';
        joinButton.classList.remove('btn-outline-primary');
        joinButton.classList.add('btn-primary');
      }
    });
  }
});

