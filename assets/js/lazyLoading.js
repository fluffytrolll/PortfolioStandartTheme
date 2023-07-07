document.addEventListener("DOMContentLoaded", () => {
   const lazyImages = [].slice.call(document.querySelectorAll("img.aw-lazy"));
   const lazySourceImages = [].slice.call(document.querySelectorAll("source"));

   if ("IntersectionObserver" in window) {
      const lazyImageObserver = new IntersectionObserver(function (entries, observer) {
         entries.forEach(function (entry) {
            if (entry.isIntersecting) {
               const lazyImage = entry.target;
               lazyImage.src = lazyImage.dataset.src;
               lazyImage.removeAttribute("data-src");
               lazyImage.classList.remove("aw-lazy");
               if (lazyImage.dataset.srcset) {
                  lazyImage.srcset = lazyImage.dataset.srcset;
                  lazyImage.removeAttribute("data-srcset");
               }
               lazyImageObserver.unobserve(lazyImage);
            }
         });
      });

      lazyImages.forEach(function (lazyImage) {
         lazyImageObserver.observe(lazyImage);
      });
   } else {
      console.log("Pre-image loading failed...");
   }

   if ("IntersectionObserver" in window) {
      const lazySourceImageObserver = new IntersectionObserver(function (
         entries,
         observer
      ) {
         entries.forEach(function (entry) {
            if (entry.isIntersecting) {
               const lazySourceImage = entry.target;
               if (lazySourceImage.dataset.srcset) {
                  lazySourceImage.srcset = lazySourceImage.dataset.srcset;
                  lazySourceImage.removeAttribute("data-srcset");
               }
               lazySourceImageObserver.unobserve(lazySourceImage);
            }
         });
      });

      lazySourceImages.forEach(function (lazySourceImage) {
         lazySourceImageObserver.observe(lazySourceImage);
      });
   } else {
      console.log("Pre-image loading failed...");
   }
});
