document.addEventListener("DOMContentLoaded", () => {
   const media = document.querySelectorAll("video");
   const cover = document.querySelector(".aw-player__cover");
   const video = document.querySelector(".aw-video");
   const actions = document.querySelector(".aw-video-controls");
   const actionButton = document.querySelector(".aw-video-controls__button");
   const iconPlay = document.querySelector(".aw-video-controls__play");
   const iconStop = document.querySelector(".aw-video-controls__stop");
   const timer = document.querySelector(".aw-video-time");

   function isMouseOverElement(element) {
      return element.matches(":hover");
   }

   if (media) {
      media.forEach((item) => {
         item.removeAttribute("controls");
      });
   }

   const toggleClassesControls = () => {
      cover.classList.toggle("aw-player__cover_hidden");
      video.classList.toggle("aw-video_hidden");
      actions.classList.toggle("aw-video-controls_dark");
      iconPlay.classList.toggle("aw-video-controls__play_hidden");
      iconStop.classList.toggle("aw-video-controls__stop_hidden");
      timer.classList.toggle("aw-video-time_show");
   };

   const hideControls = () => {
      if (!video.paused) {
         actions.classList.remove("aw-video-controls_show");
      }
   };

   const showControls = () => {
      if (!video.paused) {
         actions.classList.add("aw-video-controls_show");
      }
   };

   const handleActionButtonClick = () => {
      if (video.paused) {
         video.play();
         toggleClassesControls();
         if (!isMouseOverElement(actions))
            actions.classList.remove("aw-video-controls_show");
         if (isMobile) {
            setTimeout(() => {
               actions.classList.remove("aw-video-controls_show");
               console.log(1);
            }, 2000);
         } else {
            actions.classList.remove("aw-video-controls_show");
         }
      } else {
         video.pause();
         toggleClassesControls();
         actions.classList.add("aw-video-controls_show");
      }
   };

   const handleActionButtonFocusOut = () => {
      if (!video.paused) {
         hideControls();
      }
   };

   const handleActionButtonFocus = () => {
      if (!video.paused) {
         showControls();
      }
   };

   const handleActionsMouseEnter = () => {
      if (!actions.classList.contains("aw-video-controls_show"))
         actions.classList.add("aw-video-controls_show");
   };

   const handleActionsMouseOver = () => {
      if (!video.paused)
         if (!actions.classList.contains("aw-video-controls_show"))
            actions.classList.add("aw-video-controls_show");
   };

   const handleActionsMouseLeave = () => {
      if (!video.paused) {
         hideControls();
      }
   };

   let isMobile = false;

   const checkIsMobile = () => {
      const ua = navigator.userAgent;
      isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
         ua
      );
   };

   if (actionButton) {
      actionButton.addEventListener("focusout", handleActionButtonFocusOut);
      actionButton.addEventListener("focus", handleActionButtonFocus);
   }

   if (actions) {
      actions.addEventListener("click", handleActionButtonClick);
      actions.addEventListener("mouseenter", handleActionsMouseEnter);
      actions.addEventListener("mouseover", handleActionsMouseOver);
      actions.addEventListener("mouseleave", handleActionsMouseLeave);
   }

   checkIsMobile();

   function formatTime(time) {
      const hours = Math.floor(time / 3600);
      const minutes = Math.floor((time % 3600) / 60);
      const seconds = Math.floor(time % 60);

      const formattedHours = String(hours).padStart(2, "0");
      const formattedMinutes = String(minutes).padStart(2, "0");
      const formattedSeconds = String(seconds).padStart(2, "0");

      return `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
   }

   function updateRemainingTime() {
      const duration = video.duration;
      const currentTime = video.currentTime;
      const remainingTime = duration - currentTime;

      const timeTextElement = document.querySelector(".aw-video-time__text");
      timeTextElement.textContent = formatTime(remainingTime);
   }

   video.addEventListener("timeupdate", updateRemainingTime);
});
