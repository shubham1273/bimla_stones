  // Run when the DOM is fully loaded
  document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Get current page name from URL
    const currentPage = window.location.pathname.split("/").pop();

    navLinks.forEach(link => {
      const linkPage = link.getAttribute('href');

      // Check if link's href matches current page
      if (linkPage === currentPage) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }

      // Optional: Add click listener for single-page or dynamic apps
      link.addEventListener('click', function () {
        navLinks.forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
      });
    });
  });
  document.querySelectorAll('.video-container').forEach(container => {
    const video = container.querySelector('.my-video');
    const videoImg = container.querySelector('.video-thumbnail');
    const playBtn = container.querySelector('.play-button');
    const playIcon = playBtn.querySelector('i');
    let started = false;

    playBtn.addEventListener('click', () => {
      if (!started) {
        videoImg.style.display = 'none';
        video.style.display = 'block';
        video.play();
        container.classList.add('video-started');
        started = true;
        playIcon.classList.remove('fa-play');
        playIcon.classList.add('fa-pause');
      } else {
        if (video.paused) {
          video.play();
          playIcon.classList.remove('fa-play');
          playIcon.classList.add('fa-pause');
        } else {
          video.pause();
          playIcon.classList.remove('fa-pause');
          playIcon.classList.add('fa-play');
        }
      }
    });
  });