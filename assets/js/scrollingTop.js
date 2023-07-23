document.addEventListener("DOMContentLoaded", () => {
   const goTopElement = document.querySelector(".aw-header__go-top");
   const halfPageHeight = window.innerHeight / 2;

   function handleScroll() {
      if (goTopElement) {
         const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

         if (scrollPosition < halfPageHeight) {
            goTopElement.style.display = "none";
         } else {
            goTopElement.style.display = "flex";
         }
      }
   }

   window.addEventListener("scroll", handleScroll);
});
